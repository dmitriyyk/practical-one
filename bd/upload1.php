<?php
    ini_set('file_uploads', 'On');
    /* Определяем значения переменным */ 
    // $hostname="localhost"; 
    // $username="root"; 
    // $password=""; 
    // /* Имя базы данных */ 
    // $dbName="207517"; 
    // /* Имя таблицы */ 
    // $usertable="users"; 
    // /* Создать соединение с MySql*/ 
    // MYSQL_CONNECT($hostname,$username,$password) OR DIE("Не могу подсоединиться"); 
    // /* Выбор БД */ 
    // MYSQL_SELECT_DB($dbName) or die("Не могу выбрать БД"); 
    /* Введение информации в БД */ 
    $surname = $_POST['surname'];
    $name = $_POST['name'];
    $patronymic = $_POST['patronymic'];
    $email = $_POST['email'];
    $phome = $_POST['phone'];
    $city = $_POST['city'];
    $country = $_POST['country'];
    $photo = $_POST['photo'];
    if ($_FILES && $_FILES["photo"]["error"]== UPLOAD_ERR_OK)
    {
        $name = "bd/upload/" . $_FILES["photo"]["name"];
        move_uploaded_file($_FILES["photo"]["tmp_name"], $name);
        echo "Файл загружен";
    }
    print_r($_FILES["photo"]);
    // $query="INSERT INTO $usertable VALUES ('$user_name','$phone','$img')"; 
    // $result=MYSQL_QUERY($query); 
    // /* Закрыть соединение */ 
    // MYSQL_CLOSE(); 
    // print "Запись введена в БД! <br>"; 
?>