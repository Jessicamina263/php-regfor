<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
    
</head>
<body>
    <div class="container">
        <h1>Register</h1>
        <form action="index.php" method="post" class="register-form">
            <div class="fandl">
                <div>
                    <label for="fname" class="namelabel">First Name</label>
                    <div class="form-group">
                        <i class="fas fa-user"></i>
                        <input type="text" id="fname" name="fname" placeholder="Enter Your First Name" class="fandlnames" required>
                    </div>
                </div>
                <div>
                    <label for="lname" class="namelabel llabel">Last Name</label>
                    <div class="form-group">
                        <i class="fas fa-user lname"></i>
                        <input type="text" id="lname" name="lname" placeholder="Enter Your Last Name" class="fandlnames" required>
                    </div>
                </div>
            </div>
            <label for="username">Username</label>
            <div class="form-group">
                <i class="fas fa-user"></i>
                <input type="text" id="username" name="username" placeholder="Enter Your Username" required>
            </div>
            <label for="email">Email</label>
            <div class="form-group">
                <i class="fas fa-envelope"></i>
                <input type="email" id="email" name="email" placeholder="Enter Your Email" required>
            </div>
            <label for="password">Password</label>
            <div class="form-group">
                <i class="fas fa-lock"></i>
                <input type="password" id="password" name="password" placeholder="Enter Your Password" required>
            </div>
            <label for="confirm-password">Confirm Password</label>
            <div class="form-group">
                <i class="fas fa-lock"></i>
                <input type="password" id="confirm-password" name="confirm-password" placeholder="Confirm Your Password" required>
            </div>
            <button type="submit" name="register" class="btn">Register</button>
        </form>
    </div>
    <?php
    if(isset($_POST['register']))
    {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $conn = mysqli_connect("localhost","root","","regform",3307, "/opt/lampp/var/mysql/mysql.sock");

        if(!$conn)
        {
            echo mysqli_connect_error();
        }
    }    

    $query = "INSERT INTO `usersdata`(`fname`, `lname`, `username`, `email`, `password`) VALUES ('$fname','$lname','$username','$email','$password')";
    mysqli_query($conn, $query);
?>
</body>
</html>
