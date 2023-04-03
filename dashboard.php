<?php
include('partials/header.php');

?>
<span>
            <?php
            if(isset($_SESSION['loginMessage'])){
                echo $_SESSION['loginMessage'];
                unset($_SESSION['loginMessage']);
            }
            ?>
</span>

<div class="header">
<header>
        <div class="hero">
            <div class="banner">
                <div class="logo">Lost&Found</div>
                <nav>
                    <ul>
                        <li class="hover"><a href="index.php">Home</a></li>
                        <li class="hover"><a href="logOut.php">Log Out</a></li>
                        <!-- <li class="hover"><a href="register.php">SignUp</a></li> -->
                    </ul>
                </nav>

            </div>

        </div>
</header>
</div>
    <div class="dashboard_container">
        <div class="overlayd">
            <!--no content-->  
        </div>

        <div class="titleDiv">
            <h1 class=" title">Lost your essentials? Find things with us!</h1>
            <span class="subtitle">Please select one from below</span>
        </div>
        
        <form action=""method="">
            <div class="rows grid">
               
                <!--submit button-->
                <div class="row">
                    <input type="button" onclick="location.href='checkLost.php';" id="submitBtn" name="submit" value="LOST">

                </div>

                <div class="row">
                    <input type="button" onclick="location.href='checkFound.php';" id="submitBtn" name="submit" value="FOUND">

                </div>

                <!-- <div class="row">
                    <span class="registerLink">Want to log out?
                        <input type="button" onclick="location.href='logOut.php';" id="logOutBtn" name="logout" value="Log Out">
                    </span>

                </div> -->
                
            </div>
            

        </form>


    </div>
    
    
<?php
include('partials/footer.php');

?>