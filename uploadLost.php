<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uploading Images of Lost Things</title>
    <style media="screen">
        *{
            font-family: 'Poppins', sans-serif;
            box-sizing: border-box;
            color: rgb(46,46,71);
        }

        body{
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            width: 100%;
            background-image: linear-gradient(#ADD8E6,#E6E6FA);
            
        }
        div{
            align-items: center;
            justify-content: center;
            border: none;
           /* width: 600px;*/
            margin: auto;
            border-radius: 5px;
            padding: 25px;
            background-image: linear-gradient(#BC8F8F,#D8BFD8);    
        }

        form{
            margin: auto;
        }
        label{
           font-weight: 600;
        }

        #name, #location{
            width: 400px;
            padding: 10px;
            border-radius: 5px;
            margin-top: 10px;
        }
        #lostImg{
            margin-top: 10px;
        }
        
        #upload, #logOutBtn{
            background: rgb(46,46,71);
            border-radius: 3px;
            cursor: pointer;
            color: white;
            
        }

        .registerLink{
    display: block;
    font-size: 13px;
    color: rgb(46,46,71);
    text-align: center;
    font-weight: 400;
    margin-top: 1rem;
}


    </style>
</head>
<body>
    <div class= "">
        <form class="" action="uploadLost.php" method="POST" enctype="multipart/form-data">
            <label for="">Please enter the details of the lost thing</label><br><br>
            <label for="">Name</label><br>
            <input id="name" type="text" name="name" value="" placeholder="Enter name" required><br><br>
            <label for="">Location</label><br>
            <input id="location" type="text" name="location" value="" placeholder="Enter the probable location of lossing" required><br><br>
            <label for="">Choose the image of the lost thing(If any)</label><br>
            <input id="lostImg" type="file" name="lostImg" value="" ><br><br>
            <input id="upload" type="submit" onclick="location.href='lost.php';" name="upload" value="Submit">
        </form>
        <span class="registerLink">Want to log out?
            <input type="button" onclick="location.href='logOut.php';" id="logOutBtn" name="logout" value="Log Out">
        </span>
        
    </div>
    <?php 
    include 'config.php';

    if(isset($_POST['upload'])){
        $id = $_SESSION['varname'];
        $name = $_POST['name'];
        $location = $_POST['location'];
        $lostImg = $_FILES['lostImg']['name'];
        $image_size = $_FILES['lostImg']['size'];
        $image_type = $_FILES['lostImg']['type'];
        $image_temp_loc = $_FILES['lostImg']['tmp_name'];
        $image_store = "image/".$lostImg;

        move_uploaded_file($image_temp_loc, $image_store);

        $sql = "INSERT INTO lostupload SET
        id = '$id', 
        NAME = '$name',
        location = '$location',
        image = '$lostImg'
        ";

        $query = mysqli_query($conn, $sql);
    }
    ?>
    
</body>
</html>