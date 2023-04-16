<?php include('dbcon.php');include('header.php');  $get_id=$_GET['id'];?>

<body>
    <?php include('nav-top.php'); ?>

    <div class="wrapper">

        <div id="element" class="hero-body-add">



            <div class="alert alert-info">
                <h2>Edit
                    <?php
                        $name_query=mysqli_query($conn,"select * from student where id ='$get_id'")or die(mysqli_error());
                        $name_row=mysqli_fetch_array($name_query);
                        echo $name_row['name'];
                    ?>
                    Information
                </h2>

                <div class="pull-right">
                    <a class="btn btn-success btn-large" data-original-title="Add Employee?" href="index.php">
                        <i class="icon-arrow-left icon-large"></i>&nbsp;Back</a>
                    <script type="text/javascript">
                    jQuery(document).ready(function() {
                        $('#add').popover('show')
                        $('#add').popover('hide')

                    });
                    </script>

                </div>
            </div>




            <!-- Para sa tabs -->



           
            <form method="post" enctype="multipart/form-data">
                <div class="tab-content">

                    <div class="tab-pane active" id="home">

                        <div class="hero-unit">
                            <div class="row-fluid">
                                <div class="span12">
                                    <div class="row-fluid">
                                        <div class="span6">

                                            <?php $edit_query=mysqli_query($conn,"select * from student where id='$get_id'")or die(mysqli_error());$row=mysqli_fetch_array($edit_query); ?>


                                            <div class="form-horizontal">
                                                <fieldset>

                                                    <div class="container">
                                                        <form action="" method="POST"
                                                            style="max-width : 726px; margin: auto;" class="pt-5"
                                                            enctype="multipart/form-data">
                                                            <div class="form-group pb-4">
                                                                <label for="name">Name</label>
                                                                <input type="text" class="form-control" id="name"
                                                                    aria-describedby="name" placeholder="Enter Name"
                                                                    name="name"
                                                                    value="<?php echo $name_row['name']; ?>">
                                                            </div>
                                                            <div class="form-group pb-4">
                                                                <label for="exampleInputEmail1">Email address</label>
                                                                <input type="email" class="form-control"
                                                                    id="exampleInputEmail1" placeholder="Enter email"
                                                                    name="email"
                                                                    value="<?php echo $name_row['email']; ?>">
                                                            </div>
                                                            <div class="form-group pb-4">
                                                                <label for="phone number">phone number</label>
                                                                <input type="number" class="form-control"
                                                                    id="phone number" aria-describedby="phone number"
                                                                    placeholder="Enter phone number" name="phone_number"
                                                                    value="<?php echo $name_row['phonenumber']; ?>">

                                                            </div>
                                                            <div class="form-group pb-4">
                                                                <label for="address"> address</label>
                                                                <input type="text" class="form-control" id="address"
                                                                    aria-describedby="address" placeholder="address"
                                                                    name="address"
                                                                    value="<?php echo $name_row['address']; ?>">
                                                            </div>
                                                            <div class="form-group pb-4">
                                                                <label for="qualification"> qualification</label>
                                                                <input type="text" class="form-control"
                                                                    id="qualification" aria-describedby="qualification"
                                                                    placeholder="qualification" name="qualification"
                                                                    value="<?php echo $name_row['qualification']; ?>">
                                                            </div>
                                                            <div class="form-group pb-4">
                                                                <label for="institute name"> institute name</label>
                                                                <input type="text" class="form-control"
                                                                    id="institute name"
                                                                    aria-describedby="institute name"
                                                                    placeholder="institute name" name="institutename"
                                                                    value="<?php echo $name_row['institutename']; ?>">
                                                            </div>

                                                            <div class="form-group pb-4">
                                                                <label for="skills">skills</label>
                                                                <input type="text" class="form-control" id="skills"
                                                                    aria-describedby="skills" placeholder="skills"
                                                                    name="skills"
                                                                    value="<?php echo $name_row['skills']; ?>">

                                                            </div>
                                                            <div class="form-group pb-4">
                                                                <label for="experience"> experience</label>
                                                                <input type="number" class="form-control"
                                                                    id="experience" aria-describedby="experience"
                                                                    placeholder="experience" name="experience"
                                                                    value="<?php echo $name_row['experience']; ?>">

                                                            </div>
                                                            <div class="form-group pb-4">
                                                                <label for="resume_upload">resume: </label>
                                                                <?php if ($name_row['resumeupload'] == "") {
                                                                    echo "No Resume Uploaded";
                                                                } 
                                                                else { ?>
                                                                    "<embed
                                                                    src="./assets/<?php echo $name_row['resumeupload']; ?>"
                                                                    width="800px" height="2100px" />";
                                                               <?php }?>
                                                                
                                                                
                                                            </div>
                                                            <div>
                                                                <button type="submit" name="save"
                                                                    class="btn btn-primary">Save</button>
                                                            </div>
                                                        </form>
                                                    </div>


                                                </fieldset>
                                            </div>

                                        </div>

            </form>

            <script>
            jQuery(document).ready(function() {
                $('#myTab a').click(function(e) {
                    e.preventDefault();
                    $(this).tab('show');
                })

                $(function() {
                    $('#myTab a:first').tab('show');
                })
            })
            </script>


            <!-- end ka tab -->







        </div>

        <?php include('footer.php');?>
    </div>
</body>
<div class="modal hide fade" id="myModal">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">?</button>
        <h3> </h3>
    </div>
    <div class="modal-body">
        <p>
            <font color="gray">Are You Sure you Want to LogOut?</font>
        </p>
    </div>
    <div class="modal-footer">
        <a href="#" class="btn" data-dismiss="modal">No</a>
        <a href="logout.php" class="btn btn-primary">Yes</a>
    </div>
</div>


<?php

    if (isset($_POST['save'])){

        $name=$_POST['name'];
        $email=$_POST['email'];
        $phone_number=$_POST['phone_number'];
        $address=$_POST['address'];
        $qualification=$_POST['qualification'];
        $institutename=$_POST['institutename'];
        $skills=$_POST['skills'];
        $experience=$_POST['experience'];
            
              

 $query = "UPDATE student SET name = '$name', email = '$email', phonenumber = '$phone_number',address ='$address', qualification= '$qualification',institutename='$institutename' , skills= '$skills', experience='$experience' WHERE id = $get_id;";
 
        $result = mysqli_query($conn, $query);

echo ("<script LANGUAGE='JavaScript'>
   
    window.location.href='index.php';
    </script>");
       
    }
    




 


?>