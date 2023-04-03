<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check lost</title>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" href="./style.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        /* .check{
            justify-content: center;
            display: center; 
            alignment: center;
            margin-top: 10vh;
            text-align: center;
        } */
 

        .card_pic{
          background-color: rgb(102,51,85);
          padding-top:20px;
      
        }

        .mb-3{
          /* display: block; */
          margin-left: auto;
          margin-right: auto;
        }
        a{
          text-decoration:none;
        }
    </style>
</head>
<body>
<section>
<div class="header">
<header>
        <div class="hero" style="height: 105px">
            <div class="banner">
                <div class="logo">Lost&Found</div>
                <nav>
                    <ul>
                        <li class="hover"><a href="index.php">Home</a></li>
                        <li class="hover"><a href="uploadLost.php">Upload Lost Thing</a></li>
                        <li class="hover"><a href="logOut.php">Log Out</a></li>
                    </ul>
                </nav>

            </div>

        </div>
</header>
</div>
</section>
<?php
    include 'config.php';

    $sql1 = "SELECT * from lostupload, admin WHERE lostupload.id = admin.id";
    $query1 = mysqli_query($conn,$sql1);
    while($info=mysqli_fetch_array($query1)){
        ?>
 <section class="card_pic">
<div class="card mb-3" style="max-width: 540px" >
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
        <h5 class="card-title">Name of lost thing: <?php echo $info['NAME']?></h5>
        <p class="card-text">
        <p>Location of lossing: <?php echo $info['location']?></p>
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
</sction>
        <!-- <div class="check">
            <div class="name">Name of lost thing: <?php echo $info['NAME']?></div>
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