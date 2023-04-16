   <?php include('dbcon.php'); include('header.php');  $get_id=$_GET['id'];?>
   <?php include('nav-top.php'); ?>
   <form method="post" enctype="multipart/form-data">
       <div class="tab-content">
           <?php 
                        $name_query=mysqli_query($conn,"select * from student where id ='$get_id'")or die(mysqli_error());
                        $name_row=mysqli_fetch_array($name_query);
                        // echo $name_row['name'];
                    ?>
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
                                               <form action="" method="POST" style="max-width : 726px; margin: auto;"
                                                   class="pt-5" enctype="multipart/form-data">
                                                   <div class="form-group pb-4">
                                                       <label for="name">Name</label>
                                                       <input disabled type="text" class="form-control" id="name"
                                                           aria-describedby="name" placeholder="Enter Name" name="name"
                                                           value="<?php echo $name_row['name']; ?>">
                                                   </div>
                                                   <div class="form-group pb-4">
                                                       <label for="exampleInputEmail1">Email address</label>
                                                       <input disabled type="email" class="form-control"
                                                           id="exampleInputEmail1" placeholder="Enter email"
                                                           name="email" value="<?php echo $name_row['email']; ?>">
                                                   </div>
                                                   <div class="form-group pb-4">
                                                       <label for="phone number">phone number</label>
                                                       <input disabled type="number" class="form-control"
                                                           id="phone number" aria-describedby="phone number"
                                                           placeholder="Enter phone number" name="phone_number"
                                                           value="<?php echo $name_row['phonenumber']; ?>">

                                                   </div>
                                                   <div class="form-group pb-4">
                                                       <label for="address"> address</label>
                                                       <input disabled type="text" class="form-control" id="address"
                                                           aria-describedby="address" placeholder="address"
                                                           name="address" value="<?php echo $name_row['address']; ?>">
                                                   </div>
                                                   <div class="form-group pb-4">
                                                       <label for="qualification"> qualification</label>
                                                       <input disabled type="text" class="form-control"
                                                           id="qualification" aria-describedby="qualification"
                                                           placeholder="qualification" name="qualification"
                                                           value="<?php echo $name_row['qualification']; ?>">
                                                   </div>
                                                   <div class="form-group pb-4">
                                                       <label for="institute name"> institute name</label>
                                                       <input disabled type="text" class="form-control"
                                                           id="institute name" aria-describedby="institute name"
                                                           placeholder="institute name" name="institutename"
                                                           value="<?php echo $name_row['institutename']; ?>">
                                                   </div>

                                                   <div class="form-group pb-4">
                                                       <label for="skills">skills</label>
                                                       <input disabled type="text" class="form-control" id="skills"
                                                           aria-describedby="skills" placeholder="skills" name="skills"
                                                           value="<?php echo $name_row['skills']; ?>">

                                                   </div>
                                                   <div class="form-group pb-4">
                                                       <label for="experience"> experience</label>
                                                       <input disabled type="number" class="form-control"
                                                           id="experience" aria-describedby="experience"
                                                           placeholder="experience" name="experience"
                                                           value="<?php echo $name_row['experience']; ?>">

                                                   </div>
                                                   <div class="form-group pb-4">
                                                       <label for="resume_upload">Resume</label>
                                                       <embed src="./assets/<?php echo $name_row['resumeupload']; ?>"
                                                           width="800px" height="1000px" />

                                                   </div>
                                                   <div>
                                                       <div class="pull-right">
                                                           <a class="btn btn-success btn-large"
                                                               data-original-title="Add Employee?"
                                                               href="index.php">
                                                               <i class="icon-arrow-left icon-large"></i>&nbsp;Back</a>
                                                           <script type="text/javascript">
                                                           jQuery(document).ready(function() {
                                                               $('#add').popover('show')
                                                               $('#add').popover('hide')

                                                           });
                                                           </script>

                                                       </div>
                                                   </div>
                                               </form>
                                           </div>


                                       </fieldset>
                                   </div>

                               </div>

   </form>