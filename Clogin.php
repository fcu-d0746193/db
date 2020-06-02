<div id="shop-title-div">
    <h1 id="title-h1">登入</h1>
  </div>

  <form action="check.php" method="post">
    <div class="container"><br>
      <label for="account">帳號: </label>
      <input type="text" id="user" name="user" required><br><br>
      <label for="pwd">密碼:</label>
      <input type="password" id="pwd" name="pwd" minlength="8" required><br><br>
      <input type="submit" class="button button1">
    </div>
    <div class="context">
      <p id="title-p">尚未註冊?
        <button type="buttom" class="button button2" formaction="sign.php" value="login">註冊</button></p>
    </div>
  </form>
  </div>

