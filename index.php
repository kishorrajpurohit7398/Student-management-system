<?php include('dbcon.php');include('header.php'); ?>

<body>
    <?php include('nav-top.php'); ?>


    <div class="wrapper">

        <div id="element" class="hero-body-emp">

            <hr>



        </div>





        <!-- position sort -->


        <!--- Qualification -->









        <br>



        <table class="users-table">


            <div class="demo_jui">
                <table cellpadding="0" cellspacing="0" border="0" class="display" id="log" class="jtable">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>email</th>
                            <th>phone_number</th>
                            <th>address</th>
                            <th>qualification</th>
                            <th>institute</th>
                            <th>skills</th>
                            <th>experience</th>
                            <th>Resume</th>
                            <th>Action</th>

                        </tr>
                    </thead>
                    <tbody>

                        <?php $emp_query=mysqli_query($conn,"select * from student");
                        while($row=mysqli_fetch_array($emp_query)){ $id=$row['id']; ?>

                        <tr class="del<?php echo $id ?>">
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td><?php  echo $row['phonenumber']?></td>
                            <td><?php  echo $row['address']?></td>
                            <td><?php echo $row['qualification'] ?></td>
                            <td><?php echo $row['institutename'] ?></td>
                            <td><?php echo $row['skills'] ?></td>
                            <td><?php echo $row['experience'] ?></td>
                            <td align="center">
                                <embed src="./assets/<?php echo $name_row['resumeupload']; ?>" width="50px"
                                    height="50px" />
                            </td>
                            <td align="center" width="320">
                                <script type="text/javascript">
                                jQuery(document).ready(function() {
                                    $('#p<?php echo $id; ?>').popover('show')
                                    $('#p<?php echo $id; ?>').popover('hide')

                                });
                                </script>


                                <a class="btn btn-success" id="p<?php echo $id; ?>"
                                    data-content="Click here to Edit Employee" rel="popover" data-original-title="Edit?"
                                    href="edit-student.php<?php echo '?id='.$id; ?>"><i
                                        class="icon-edit icon-large"></i>&nbsp;Edit</a>&nbsp;
                                <a class="btn btn-danger1" href="student_delete.php?id=<?php echo $id; ?>"> <i
                                        class="icon-trash icon-large"></i>&nbsp;Delete</a>

                                <a class="btn btn-warning" href="view_student.php?id=<?php echo $id; ?>"><i
                                        class="icon-list icon-large"></i>&nbsp;View</a>


                            </td>
                        </tr>
                        <?php }?>
                    </tbody>
                </table>

            </div>


            <?php include('footer.php');?>
    </div>
</body>
<div class="modal hide fade" id="myModal">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">�</button>
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