<?php

function show($data)
{
    echo '<pre>';
    print_r($data);
    echo '</pre>';
}

function views_path($view)
{
    if(file_exists("../app/views/$view.view.php"))
    {
        require_once "../app/views/$view.view.php";
    }else{
        echo "view $view not found";
    }
}

function esc($str)
{
    return htmlspecialchars($str);
}

function redirect($page)
{
    header("Location:index.php?pg=" .$page);
    die;
}

function db_connect()
{
    $DBHOST = "localhost";
    $DBNAME = "pos";
    $DBUSER = "root";
    $DBPASS = "73916400";
    $DBDRIVER = "mysql";

    try{
        $con = new PDO("$DBDRIVER:host=$DBHOST;dbname=$DBNAME",$DBUSER,$DBPASS);
    }catch(PDOException $e){
        echo $e->getMessage();
    }

    return $con;
}

function query($query,$data = array())
{
    $con = db_connect();
    $smt = $con->prepare($query);
    $check = $smt->execute($data);

    if($check)
    {
        $result = $smt->fetchAll(PDO::FETCH_ASSOC);
        if(is_array($result) && count($result) > 0)
        {
            return $result;
        } 
    }

    return false;
}

function allowed_columns($data,$table)
{
    if($table == 'users')
    {
        $columns = [
            'username',
            'email',
            'password',
            'role',
            'date',
            'image'
        ];

        foreach ($data as $key => $value) {
            if(!in_array($key,$columns))
            {
                unset($data[$key]);
            }
        }

        return $data;
    }
}

function insert($data,$table)
{
    $clean_array = allowed_columns($data,$table);
    $keys = array_keys($clean_array);

    $query = "INSERT INTO $table";
    $query .="(".implode(",",$keys) .") VALUES";
    $query .="(:".implode(",:",$keys) .")";

    query($query, $clean_array);
}

function where($data,$table)
{
    $keys = array_keys($data);

    $query = "SELECT * FROM $table WHERE ";

    foreach ($keys as $key) {
        $query.="$key = :$key && ";
    }
    $query = trim($query, "&& ");
    return query($query,$data);
}

function validate($data,$table)
{
    $errors = [];
    if($table == 'users')
    {
        //check username
        if(empty($data['username']))
        {
            $errors['username'] = "username is required";
        }else
        if(!preg_match('/[a-zA-Z]/',$data['username']))
        {
                $errors['username'] = "only letters are allowed in username";
        }

        //check email
        if(empty($data['email']))
        {
            $errors['email'] = "email is required";
        }else
        if(!filter_var($data['email'],FILTER_VALIDATE_EMAIL))
        {
            $errors['email'] = "email is not valid";
        }

        //check password
        if(empty($data['password']))
        {
            $errors['password'] = "password is required";
        }else
        if($data['password'] != $data['password_retype'])
        {
            $errors['password_retype'] = "passwords do not match";
        }else
        if(strlen($data['password']) < 8)
        {
            $errors['password'] = "passwords must be at least 8 characters long";
        }

    }

    return $errors;
}

function set_value($key,$default = "")
{
    if(!empty($_POST[$key]))
    {
        return $_POST[$key];
    }

    return $default;
}

function authenticate($row)
{
    $_SESSION['USER'] = $row;
}

function auth($column)
{
    if(!empty($_SESSION['USER'][$column]))
    {
        return $_SESSION['USER'][$column];
    }

    return "Unknown";
}