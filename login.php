<?php
include('partials/header.php')
?>
    <?php
    if(isset($_SESSION['accountCreated'])){
        echo $_SESSION['accountCreated'];
        unset ($_SESSION['accountCreated']);
    }

    if(isset($_POST["submit"])){
        if(isset($_POST["ch1"])){
            setcookie("unm", $_POST["userName"], time()+3600);
            setcookie("pwd", $_POST["password"], time()+3600);
        }
    }
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
    <div class="form_container">
        <div class="overlay">
            <!--no content-->    
        </div>

        <div class="titleDiv">
            <h1 class=" title">Login</h1>
            <span class="subtitle">Welcome back!</span>
        </div>

        <?php
        if(isset($_SESSION['noAdmin'])){
            echo $_SESSION['noAdmin'];
            unset($_SESSION['noAdmin']);
        }
        ?>

        <form action=""method="POST">
            <div class="rows grid">
                <!--user nmae-->
                <div class="row">
                    <label for="username">User Name</label>
                    <input type="text" id="username" name="userName" placeholder="Enter User Name"  required>
                </div>
                <!--password-->
                <div class="row">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Enter your password"  required>
                </div>
                <!--submit button-->
                <div class="row">
                    <input type="submit" id="submitBtn" name="submit" value="Log in" required>
                    <span class="registerLink">Remember me<input type="checkbox" id="checkbtn" name="ch1" value="ch"></span>

                    <span class="registerLink">Don't have an account?<a href="register.php">Sign up</a></span>

                </div>
                
            </div>
            

        </form>


    </div>

<?php
include('partials/footer.php')
?> 


<!--logging in to the database-->

<?php
if(isset($_POST['submit'])){
     //echo 'Yoho!!!! Successfully Logged in.';
     //creating the variables for storing the user name and password
     $userName = $_POST['userName'];
     $password = $_POST['password'];

     //sql to select if there is the details in the database
     $sql = "SELECT * FROM admin WHERE username = '$userName' AND passwords = '$password'";

     

     
     //Executing the queury
     $result = mysqli_query($conn, $sql);

     $arr = mysqli_fetch_all($result, MYSQLI_ASSOC);

    $tem = $arr[0];
    //print_r ($tem['id']);
    $_SESSION['varname'] = $tem['id'];


    


     //Counting the number of account with with same username and password
     $count = mysqli_num_rows($result);

     //Putting the count into one associate array
     $row = mysqli_fetch_assoc($result);

     //Checking if there is at least one account in the database
     if($count ==1){
        //messagging to welcome admin to the database
        // $_SESSION['loginMessage'] = '<span class = "success">welcome ' .$userName.'</span>' ;
        header('location:' .SITEURL. 'dashboard.php');
        exit();
     }
     else{
        //messagging if the admin/account is not in the database
        $_SESSION['noAdmin'] = '<span class = "fail">'.$userName.' you have not signed in yet!</span>' ;
        header('location:' .SITEURL. 'login.php');
        exit();
     }
}
?>
 
