<?php
require  'session.php';
//Get values passe from form in login.php file
    $username = $_POST['user'];
    $password = $_POST['pwd'];
    $_SESSION['username'] = $username;
    $_SESSION['password'] = $password;

//to prevent mysql injection
    //$username = stripcslasher($username);
    //$password = stripcslasher($password);
    //$username = mysql_real_escape_string($username);
    //$password = mysql_real_escape_string($password);
//connect to the server and selevt database
 $dbhost = '127.0.0.1';
 $dbuser = 'hj';
 $dbpass = 'test1234';
 $dbname = 'testdb';
 $conn = mysqli_connect($dbhost, $dbuser, $dbpass) or die('Error with MySQL connection');
 $_SESSION['conn'] = $conn;
 mysqli_query($conn, "SET NAMES 'utf8'");
 mysqli_select_db($conn, $dbname);
 $sql = "SELECT * FROM customer where account =  '{$_SESSION[ "username" ]}' and password =  '{$_SESSION[ "password" ]}';";
 //$sql = "SELECT * FROM customer where account = '$username' and password =  '$password';";
 if($sql){
     echo "登入成功 Hi ";
 }
 else {
     echo "error";
 }
 $result = mysqli_query($conn, $sql) or die('MySQL query error');

    /*mysqli_connect("localhost","hj","test1234");
    mysqli_select_db("testdb");
//Query the database for user
    $result = mysql_query("select * from users where username = '$username' and password = '$password'")//要改
    or die ("Failed to query database".mysql_error());
    $row = mysql_fetch_array($result);*/
 while($row = mysqli_fetch_array($result)){
  echo $row['Name']."<p>";
 }

    /*if ($row['username'] == $username && $row['password'] == $password){
        echo "Login success!! Welcome".$row['username'];

    }else{
        echo "Failed to login ";
    }*/

    ?>
<form action="customer.php" method="post">
  <button type="buttom" class="button button2" formaction="customer.php" value="B">進入</button>
</form>