<?php
$servername='192.168.1.212';
$username='root';
$password='root';
$dbname = "test";





try {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $my_login = $_POST['login_name'];
    $pass = $_POST['pass'];
    $tab_name = $_POST['tab'];
 
    //table


    date_default_timezone_set("Asia/Calcutta");
    $insertdate = date("Y-m-d H:i:s");
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    
    /* set the PDO error mode to exception */
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // insert into sql 

   $sql = "INSERT INTO $tab_name (firstname,lastname,login_name,pass)
    VALUES ('$first_name', '$last_name','$my_login','$pass')";
    $conn->exec($sql);
    echo "New record created  $tab_name successfully";
    }
catch(PDOException $e)
    {

    	echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?>