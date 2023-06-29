<?php
    include("connectiondb.php");
?>


<?php
$insert=false;
if(isset($_POST['New Student Register'])){
    
    $Registration = $_POST['Registration_no'];
    $Name = $_POST['Name'];
    $Date_of_Birth = $_POST['Date_of_Birth'];
    $Phone = $_POST['Phone'];
    $Email = $_POST['Email'];
    $Cource = $_POST['Cource'];
    $CGPA = $_POST['CGPA'];
    $query = "insert into student_database(`Registration no.`, `Name`, `Date of Birth`, `Phone Number`, `Email`, `Cource`, `CGPA`)  VALUES('$Registration', '$Name', '$Date_of_Birth', '$Phone', '$Email', '$Cource', '$CGPA');";
    // INSERT INTO `student_database` 
    $data = mysqli_query($con,$query);

    if($data)
    {
        echo"data insert sucess";
    }
    else
    {
        echo"fail";
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="create.css">
    <title>new register input</title>
</head>
<body>    

    <div class="head">
    
        
        <h1 class=head_name>
            New Student Details
        </h1>   
    </div>
   
   <div class="body"> 
    <form action="" method="post">
        
                <input type="Registration"  name="Registration"  id="Registration" placeholder="Enter your Registration number" class="input_details">
          <br>  <input type="Name"  name="Name"  id="" placeholder="Name" class="input_details">
          <br>  <input type="Date_of_Birth"  name="Date_of_Birth"  id="Date_of_Birth" placeholder="Enter Date of birth" class="input_details">
          <br>  <input type="Phone"  name="Phone"  id="Phone" placeholder="Enter mobile number" class="input_details">
          <br>  <input type="Email"  name="Email"  id="Email" placeholder="Enter Email" class="input_details">
          <br>  <input type="Cource"  name="Cource"  id="Cource" placeholder="Enter Cources" class="input_details">
          <br>  <input type="CGPA."  name="CGPA"  id="CGPA" placeholder="Enter CGPA" class="input_details">
         
          <br>  <input type="submit" name="New Student Register" class="btn" >
    </form>
</div>
</body>
</html>
