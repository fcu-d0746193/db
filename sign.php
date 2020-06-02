<div class="container">
        <form action="/action_page.php">
            <label for="name">您的姓名:</label>
            <input type="text" id="name" name="name" required><br><br>
            <label for="phone">電話號碼:</label>
            <input type="tel" id="phone" name="phone" placeholder="0912345678" pattern="[0-9]{10}"
                required><br>
            <small>Format: 1234567890</small><br><br>
            <label for="adrs">您的地址:</label>
            <input type="text" id="adrs" name="adrs" required><br><br>
            <label for="email">電子信箱:</label>
            <input type="email" id="email" name="email" required><br><br>
            <label for="account">您的帳號:</label>
            <input type="text" id="account" name="account" required><br><br>
            <label for="pwd">您的密碼:</label>
            <input type="password" id="pwd" name="pwd" minlength="8" required><br><br>
            <input type="submit">

        </form>
    </div>
</body>
