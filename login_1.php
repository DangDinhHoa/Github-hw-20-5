<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <style>
        .login-container {
            width: 300px;
            margin: 50px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
        }
        .login-container h2 {
            text-align: left;
        }
        .login-container input {
            width: 100%;
            padding: 8px;
            margin: 5px 0;
            box-sizing: border-box;
        }
        .login-container button {
            width: 100%;
            padding: 10px;
            background-color:rgb(232, 232, 232);
            color: black;
            border: none;
            cursor: pointer;
        }
        .login-container button:hover {
            background-color:rgb(53, 53, 53);
        }
        .login-container a {
            display: block;
            text-align: left;
            margin-top: 10px;
            color: blue;
            text-decoration: none;
        }
        .login-container a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Login form</h2>
        <form method="POST" action="">
            <label>Username:</label>
            <input type="text" name="username" placeholder="Enter Username" required><br>
            <label>Password:</label>
            <input type="password" name="password" placeholder="Enter password" required><br>
            <button type="submit">Login</button>
        </form>
        <a href="register.php">Click here to Register</a>
    </div>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        function _login($usrname, $pass) {
            $Employee = [
                "NguyenVan_A" => "abc123",
                "Tran_Thi_B" => "B715",
                "Le_Van_C" => "C_lo_vo_92",
                "Pham_ThiD" => "De_PT_68",
                "Doan_Van_E" => "E_v58"
            ];

            if (array_key_exists($usrname, $Employee) && $Employee[$usrname] === $pass) {
                echo "<p style='color:green;'>Đăng nhập thành công!</p>";
            } else {
                echo "<p style='color:red;'>Sai ten đăng nhập hoặc mật khẩu</p>";
            }
        }

        $username = $_POST['username'];
        $password = $_POST['password'];
        _login($username, $password);
    }
    ?>
</body>
</html>