<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check lost</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
<script src="https://use.fontawesome.com/cbaa4f38ef.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <style>
        /* .check{
            justify-content: center;
            display: center; 
            alignment: center;
            margin-top: 10vh;
            text-align: center;
        } */
        
    </style>
</head>
<body>
<div class="header1">
<header>
        <div class="hero1" style="height: 0vh">
            <div class="banner">
                <div class="logo">Lost&Found</div>
                <nav>
                    <ul>
                        <li class="hover"><a href="index.php">Home</a></li>
                        <li class="hover"><a href="uploadFound.php">Upload Found Thing</a></li>
                        <li class="hover"><a href="logOut.php">Log Out</a></li>
                    </ul>
                </nav>

            </div>

        </div>
</header>
</div>
<?php
    include 'config.php';

    $sql1 = "SELECT * from foundupload, admin WHERE foundupload.id = admin.id";
    $query1 = mysqli_query($conn,$sql1);
    while($info=mysqli_fetch_array($query1)){
        ?>

<div class="card mb-3" style="max-width: 540px; ">
  <div class="row g-0">
    <div class="col-md-4">
      <img
        src="image/<?php echo $info['image']?>"
        alt="<?php echo $info['NAME']?>"
        class="img-fluid rounded-start"
      />
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Name of found thing: <?php echo $info['NAME']?></h5>
        <p class="card-text">
        <p>Location of finding: <?php echo $info['location']?></p>
        <p>Uploaded by: <?php echo $info['username']?></p>
        <p>Contact no: <?php echo $info['phone']?></p>
        </p>
        <p class="card-text">
          <a href="#!" class="btn btn-primary" style="background-color: rgb(102,51,85);
    border-color: rgb(102,51,85);">Confrim</a>  
          <!-- <small class="text-muted">Last updated 3 mins ago</small> -->
        </p>
      </div>
    </div>
  </div>
</div>
        <!-- <div class="check">
            <div class="name">Name of found thing: <?php echo $info['NAME']?></div>
            <div class="location">Location of lossing: <?php echo $info['location']?></div>
            <img src="image/<?php echo $info['image']?>" alt="">
            <div class="location">Uploaded by: <?php echo $info['username']?></div>
            <div class="location">Contact no: <?php echo $info['phone']?></div>
        </div> -->

        <?php
    }
   ?> 
</body>
</html>