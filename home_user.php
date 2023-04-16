<?php include('dbcon.php'); include('header.php'); ?>
<?php include('nav-top.php'); ?>
<body>

    <div class="container">
        <form action="form-save.php" method="POST" style="max-width : 726px; margin: auto;" class="pt-5" enctype="multipart/form-data">
            <div class="form-group pb-4">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" aria-describedby="name" placeholder="Enter Name"
                    name="name">
            </div>
            <div class="form-group pb-4">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" name="email">
            </div>
            <div class="form-group pb-4">
                <label for="phone number">phone number</label>
                <input type="number" class="form-control" id="phone number" aria-describedby="phone number"
                    placeholder="Enter phone number" name="phone_number">

            </div>
            <div class="form-group pb-4">
                <label for="address"> address</label>
                <input type="text" class="form-control" id="address" aria-describedby="address" placeholder="address"
                    name="address">
            </div>
            <div class="form-group pb-4">
                <label for="qualification"> qualification</label>
                <input type="text" class="form-control" id="qualification" aria-describedby="qualification"
                    placeholder="qualification" name=qualification>
            </div>
            <div class="form-group pb-4">
                <label for="institute name"> institute name</label>
                <input type="text" class="form-control" id="institute name" aria-describedby="institute name"
                    placeholder="institute name" name="institute">
            </div>
            <div class="form-group pb-4">
                <label for="skills">skills</label>
                <input type="text" class="form-control" id="skills" aria-describedby="skills" placeholder="skills"
                    name="skills">

            </div>
            <div class="form-group pb-4">
                <label for="experience"> experience</label>
                <input type="number" class="form-control" id="experience" aria-describedby="experience"
                    placeholder="experience" name="experience">

            </div>
            <div class="form-group pb-4">
                <label for="resume_upload">resume upload</label>
                <input type="file" class="form-control" id="resume_upload" aria-describedby="resume"
                    placeholder="Resume Upload" name="file">

            </div>
            <div>
                <button type="submit" name="save" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>

</body>
