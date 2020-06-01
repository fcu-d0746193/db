<div id="shop-title-div">
    <h1 id="title-h1">登入</h1>
  </div>

  <form action="action.php" method="post">
    <div class="container"><br>
    文字輸出欄位: <input name="MyHead">
    <input type="submit" value="送出">
      <label for="email">郵箱: </label>
      <input type="email" id="email" name="email"><br><br>
      <label for="pwd">密碼:</label>
      <input type="password" id="pwd" name="pwd" minlength="8"><br><br>
      <input type="submit" class="button button1">
    </div>
    <div class="context">
      <p id="title-p">尚未註冊?
        <button type="buttom" class="button button2" formaction="sign.php" value="A">註冊</button></p>
    </div>
  </form>
  </div>
<?php
	if(isset($_POST['MyHead'])) {
		$MyHead=$_POST["MyHead"];
	
		$dbhost = '127.0.0.1';
		$dbuser = 'hj';
		$dbpass = 'test1234';
		$dbname = 'testdb';
		$conn = mysql_connect($dbhost, $dbuser, $dbpass) or die('Error with MySQL connection');
		mysql_query("SET NAMES 'utf8'");
		mysql_select_db($dbname);
		$sql = "SELECT description FROM people where name LIKE \"".$MyHead."%\";";
		$result = mysql_query($sql) or die('MySQL query error');
		while($row = mysql_fetch_array($result)){
			echo $row['description']."<p>";
		}
    }
?>