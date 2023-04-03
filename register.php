<?php
include('partials/header.php');

?>

<div class="header">
<header>
        <div class="hero">
            <div class="banner">
                <div class="logo">Lost&Found</div>
                <nav>
                    <ul>
                        <li class="hover"><a href="index.php">Home</a></li>
                        <!-- <li class="hover"><a href="login.php">Login</a></li> -->
                        <li class="hover"><a href="register.php">SignUp</a></li>
                    </ul>
                </nav>

            </div>

        </div>
</header>
</div>
    
    <div class="register_container">
        <div class="overlayS">
            <!--no content-->    
        </div>

        <div class="titleDiv">
            <h1 class=" title">Sign Up</h1>
            <span class="subtitle">Thanks for being with us!!</span>
        </div>
        <form action=""method="POST">
            <div class="rows grid">
                <!--user nmae-->
                <div class="row">
                    <label for="username">User Name</label>
                    <input type="text" id="username" name="userName" placeholder="Enter User Name" required>
                </div>

                 <!--Email address-->
                 <div class="row">
                    <label for="email">Email Adddress</label>
                    <input type="email" id="email" name="email" placeholder="Enter User email" required>
                </div>

                 <!--Phone Number-->
                 <div class="row">
                    <label for="phone">Phone Number</label>
                    <input type="text" id="phone" name="phone" placeholder="Enter phone number" required>
                </div>

                <!--password-->
                <div class="row">
                    <label for="password">Password</label>
                    <input type="password" id=password" name="password" placeholder="Enter your password" required>
                </div>

                <!--submit button-->
                <div class="row">
                    <input type="submit" id="submitBtn" name="submit" value="Sign Up" required>

                    <span class="registerLink">Already have an account?<a href="index.php">Log in</a></span>

                </div>
                
            </div>
            

        </form>


    </div>

<?php
include('partials/footer.php');
?>
<!-- signning up to a new account and later ligging in the same-->
<?php
if(isset($_POST['submit'])){
    //variables
    $userName = $_POST['userName'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    
    //stating out query
    $sql = "INSERT INTO admin SET
            username = '$userName', 
            email = '$email',
            passwords = '$password',
            phone = '$phone'
            ";
    
    //executing the sql queries
    $res = mysqli_query($conn, $sql);

    //Checking if query is executed successfully
    if($res == true){
        //messagging to show account create successfully
        // $_SESSION['accountCreated'] = '<span class="addedAccount">Account '.$userName.' created! </span>';
        header('location:' .SITEURL.'index.php');
        exit();
    }
    else{
        //messagging to show account failed to be created
        $_SESSION['unSuccessful'] = '<span class="fail">Account '.$userName.' creation failed! </span>';
        header('location:' .SITEURL.'register.php');
        exit();
    }
}
?>