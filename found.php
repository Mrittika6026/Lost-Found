<?php
include('partials/header.php');

?>
 
    <div class="dashboard_container">
        <div class="overlayd">
            <!--no content-->  
        </div>

        <div class="titleDiv">
            <h1 class=" title">List and check the things if found</h1>
            <span class="subtitle">Please select one from below</span>
        </div>
        
        <form action=""method="">
            <div class="rows grid">
               
                <!--submit button-->
                <div class="row">
                    <input type="button" onclick="location.href='lost.php';" id="submitBtn" name="submit" value="Upload Image">

                </div>

                <div class="row">
                    <input type="button" onclick="location.href='found.php';" id="submitBtn" name="submit" value="Check">

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
include('partials/footer.php');

?>