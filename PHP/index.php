<?php

require_once('inc/header-part.php');
require_once('inc/connection.php');
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #4e54c8, #8f94fb);
        }
        .login-container {
            background: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 300px;
        }
        .login-container h2 {
            margin-bottom: 20px;
            font-size: 24px;
            color: #333;
        }
        .input-field {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .login-btn {
            width: 100%;
            padding: 10px;
            background: #4e54c8;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 10px;
        }
        .login-btn:hover {
            background: #8f94fb;
        }
        .message {
            width: 100%;
            padding: 10px;
            background: lightpink;
            color: red;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 10px;
        }
        .forgot-password {
            display: block;
            margin-top: 10px;
            color: #4e54c8;
            text-decoration: none;
            font-size: 14px;
        }
    </style>
</head>
<body>

   
    <div class="login-container">
        <h2>Login</h2>
        <form action="submit/verify_user.php" method="post">
            <input type="email" placeholder="Email" name="email" class="input-field" required>
            <input type="password" placeholder="Password" name="password"  class="input-field" required>
     <tr>
        <td colspan="2" align="center" >
             <?php
            include_once('inc/message.php');
            ?> 
        </td>
    </tr> 
            <button type="submit" class="login-btn">Login</button>
            <a href="forgot_password.php" class="forgot-password">Forgot Password?</a>
            <a href="forgot_password.php" class="forgot-password">Sign Up<a>
        </form>
    </div>
</body>
<?php
require_once('inc/footer.php');
?> 
