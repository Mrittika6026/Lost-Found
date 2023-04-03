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
                        <li class="hover"><a href="uploadLost.php">Upload image</a></li>
                        <li class="hover"><a href="logOut.php">log Out</a></li>
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
            <h1 class=" title">List and check the things if lost</h1>
            <span class="subtitle">Please select one from below</span>
        </div>
        
        <form action=""method="">
            <div class="rows grid">
               
                <!--submit button-->
                <div class="row">
                    <input type="button" onclick="location.href='uploadLost.php';" id="submitBtn" name="submit" value="Upload Image">

                </div>

                <div class="row">
                    <input type="button" onclick="location.href='checkLost.php';" id="submitBtn" name="submit" value="Check">

                </div>

                <div class="row">
                    <span class="registerLink">Want to log out?
                        <input type="button" onclick="location.href='logOut.php';" id="logOutBtn" name="logout" value="Log Out">
                    </span>

                </div>
                
            </div>
            

        </form>


    </div>
    
    
<?php
$id = $_SESSION['varname'];
$_SESSION['varname'] = $id;
include('partials/footer.php');

?>