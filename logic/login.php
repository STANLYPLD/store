        <?php  
            session_name('store_login');
            session_start();
            $user = $_POST["user"];
            filter_input(INPUT_POST, 'user', FILTER_SANITIZE_STRING);
            $pass = $_POST["password"];
            filter_input(INPUT_POST, 'pass', FILTER_SANITIZE_STRING);
            switch(true)
            {
                case ($user == "    " && $pass == "    "): $_SESSION['logged'] = 'Logged'; header("location: ./   ");
                break;
                default: echo "<b>Username or Password Incorrect!</b>"; 
            }

        ?>
