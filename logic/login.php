<html>
<head>
<meta charset="UTF-8">
<title>LOGIN</title>
</head>

    <body>
        <?php  
            session_name('store_login');
            session_start();
            $user = $_POST["user"];
            filter_input(INPUT_POST, 'user', FILTER_SANITIZE_STRING);
            $pass = $_POST["password"];
            filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
            switch(true)
            {
                case ($user == "    " && $pass == "    "): $_SESSION['logged'] = 'Logged'; header("location: ./   ");
                break;
                default: echo "<b>Username or Password Incorrect!</b>"; 
            }

        ?>

    </body>
 </html>
 