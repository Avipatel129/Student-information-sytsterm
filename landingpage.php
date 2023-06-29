<?php
    include("connectiondb.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="landingpage.css">
    <script src="script.js"></script>
    <title>Admin Landing page</title>
</head>
<body>


    <div class="head">
        <h1 class=head_name>
            New Student Details(Admin landing page)
        </h1>   
    </div>
   
    <div class="login">
    
        <form action="landingpage.php" method="post">
            <div class="login__form">
                <img src="logo.jpg" width="155px" style="border-radius:50%">
                <br>
                <input type="text" class="form-control" placeholder="Registration" required name="registration">
                <br>
                <button class="btn" type="submit" id="loginbtn" name="login_btn">Search</button>
            </div>  
        </form>
    
    </div>
    
    <?php
          if(array_key_exists('login_btn', $_POST))
          {
              @login();
          }

          function login()
          {
            $reg_no = $_POST['registration'];
            // $pass = $_POST['pwd'];
            echo "<script>console.log($reg_no)</script>";

            $conn = new mysqli('localhost','root','','student_database');

            if($conn)
            {
                echo "<script>console.log('ok')</script>";
            }
            else
            {
                echo "<script>console.log('not ok')</script>";

            }

            $sql = "select * from student_database where registration='$reg_no'";
            $result = mysqli_query($conn,$sql) or die(mysqli_error());

            echo "<script>console.log($result)</script>";

        //     $result = mysqli_query($conn,$sql) or die(mysqli_error());

        //     $data = mysqli_fetch_assoc($result);
        //     // $password = $data['password'];

        //     // if($pass==$password)
        //     // {
        //     //   header('location:Student.php');
        //     // }

            
          }

        ?>

</body>


  


