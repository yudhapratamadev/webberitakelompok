<html>
    <head>
        <title>Registrasi</title>
        <link rel="stylesheet" href="style.css"/>
    </head>
    <body>
        <?php
        require('koneksi.php');
        //if form submitted insert values into the database
        if (isset($_REQUEST['username'])){
        //removes backslashes
        $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
        $username = mysqli_real_escape_string($conn,$username);
        $email = stripslashes ($_REQUEST['email']);
        $email = mysqli_real_escape_string($conn,$email);
        $password = stripslashes ($_REQUEST['password']);
        $password = mysqli_real_escape_string($conn,$password);
        $trn_date = date("Y-m-d H:i:s");
            $query = "INSERT into `users` (username, password, email, trn_date)
            VALUES ('$username', '".md5($password)."', '$email', '$trn_date')";
            $result = mysqli_query($conn,$query);
            if($result){
                echo "<div class='form'>
        <h3>Registrasi Berhasil.</h3>
        <br/>Klik disini untuk <a href='login.php'>Login</a></div>";
            }
        }else{
            ?>
        <table align="center">
        <tr>
            <th align="center"colspan="2">Registrasi</th>
        </tr>
        <form name="registration" action=""  method="post">
        <tr>
            <td>Username</td><td><input type="text" name="username" placeholder="Username" required /></td>
        </tr>
        <tr>
            <td>Password</td><td><input type="text" name="password" placeholder="Password" required /></td>
        </tr>
        <tr>
            <td>email</td><td><input type="text" name="email" placeholder="Email" required /></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="submit" values="Register" /></td>
        </tr>
        </form>
        <?php } ?>
    </body>
</html>