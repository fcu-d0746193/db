<head>
    <title>台中 環山部落</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="../css/shopbutton.css">
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-info">
        <a class="navbar-brand" href="index.html">環山部落</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
            aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
                <li><a class="nav-link" href="shop.php">動物資訊</a></li>
                <li><a class="nav-link" href="order.php">原料資訊</a></li>
                <li><a class="nav-link" href="order.php">通知</a></li>
            </ul>
        </div>
    </nav>
    <br><br><br>

    <?php session_start();
      $dbhost = '127.0.0.1';
      $dbuser = 'hj';
      $dbpass = 'test1234';
      $dbname = 'testdb';
      $conn = mysqli_connect($dbhost, $dbuser, $dbpass) or die('Error with MySQL connection');
      $_SESSION['conn'] = $conn;
      mysqli_query($conn, "SET NAMES 'utf8'");
      mysqli_select_db($conn, $dbname);
      echo $_SESSION[ "password" ];
      $conn = $_SESSION['conn'];
      $sql = "SELECT * FROM customer where account =  '{$_SESSION[ "username" ]}' and password =  '{$_SESSION[ "password" ]}';";
      //$sql = "SELECT * FROM customer where account = '$username' and password =  '$password';";
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
    ?>