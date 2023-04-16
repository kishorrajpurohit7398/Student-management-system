<?php


include('dbcon.php');


if (isset($_POST['save'])){
 
$name=$_POST['name'];
$email=$_POST['email'];
$phonenumber=$_POST['phone_number'];
$address=$_POST['address'];
$qualification=$_POST['qualification'];
$institute=$_POST['institute'];
$skills=$_POST['skills'];
$experience=$_POST['experience'];
$fileName = basename($_FILES["file"]["name"]);


            # Get File size
            $filesize = $_FILES['file']['size'];

            # Location
            $location = "./assets/";

           

            $location .= "" . $fileName;

            # Upload file
            if (move_uploaded_file($_FILES['file']['tmp_name'], $location)) {
            }
            
            $query = " INSERT INTO `student` (name,email,phonenumber,address,qualification,institutename,skills,experience,resumeupload) VALUES ('$name','$email','$phonenumber','$address','$qualification','$institute','$skills','$experience','$fileName')";
            
            $result = mysqli_query($conn, $query);





header('location:index.php');

}
?>
