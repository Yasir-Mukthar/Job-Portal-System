<?php




include("secure_session.php");





include("dbconnect.php");










include "dbconnect.php";




















?>






<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Update</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Update</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content-header -->



    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">


                    <div class="card">
                        <?php 

                        $update=$_GET['update'];
                        if($update=='company'){
                        $id = $_GET['comp_id'];
                        $companies = $_GET['companies'];
                    if ($companies == "companies") {
    $sqli = "select * from `companies` where comp_id=$id";
    
    
$result = mysqli_query($conn, $sqli);
$row = mysqli_fetch_assoc($result); ?>

                        <form action="includes/update_company.php" method="POST">
                            <div class="card-body">
                            <div class="form-group">
                                    <input type="hidden" name="comp_id" class="form-control" id="exampleInputEmail1" placeholder="Enter name" value="<?php echo $row['comp_id'] ?>" autocomplete="off">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Company Name</label>
                                    <input type="text" name="comp_name" class="form-control" id="exampleInputEmail1" placeholder="Enter name" value="<?php echo $row['comp_name'] ?>" autocomplete="off">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Address</label>
                                    <input type="text" name="comp_address" class="form-control" id="exampleInputEmail1" placeholder="Enter address" autocomplete="off" value="<?php echo $row['comp_address'] ?>">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Contact No</label>
                                    <input type="text" name="comp_contact_no" class="form-control" id="exampleInputPassword1" placeholder="Enter contact no" autocomplete="off" value="<?php echo $row['comp_contact_no'] ?>">
                                </div>


                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" name='submit' class="btn btn-primary">Update</button>
                            </div>
                        </form><?php }} ?>
                    </div>

                </div>
                












                <?php 
                if($update=='job'){
                $id = $_GET['job_id'];
                $jobs = $_GET['jobs'];
                    if ($jobs == "jobs") {
    $sqli1 = "select * from `jobs` where job_id=$id";
    
    
$result1 = mysqli_query($conn, $sqli1);
$row1 = mysqli_fetch_assoc($result1); ?>

<form action="includes/update_job.php" method="POST">
                        <div class="card-body">
                        <div class="form-group">
                                    <input type="hidden" name="job_id" class="form-control" id="exampleInputEmail1" placeholder="Enter name" value="<?php echo $row1['job_id'] ?>" autocomplete="off">
                                </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Company Name</label>
                            <div class="form-group">
                              <input type="text" value="<?php echo $row1['c_name'] ?>" name="comp_name">
                        
                            
                            </div>

                          </div>

                          <div class="row">
                            <div class="col">
                              <label for="exampleInputEmail1">Job Title</label>

                              <input type="text" class="form-control" name="job_title" placeholder="Enter Job Title" required autocomplete="off" value="<?php echo $row1['job_title'] ?>">
                            </div>
                            <div class="col">
                              <label for="exampleInputEmail1">Salary</label>

                              <input type="text" class="form-control" name="job_salary" placeholder="Enter Salary" required autocomplete="off" value="<?php echo $row1['job_salary'] ?>">
                            </div>
                          </div>






                          <div class="form-group">
                            <label for="exampleInputEmail1">Company Address</label>
                            <div class="form-group">
                              <input type="text" name="comp_address" value="<?php echo $row1['job_location'] ?>">

                            </div>

                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Work Experience</label>
                            <div class="form-group">
                              <input type="text" value="<?php echo $row1['job_experience'] ?> " name="job_experience">

                            </div>

                          </div>
                          <div class="form-group">
                            <label for="exampleFormControlTextarea1">Job Description</label>
                            <textarea name="job_description" class="form-control" id="exampleFormControlTextarea1" rows="3"><?php echo $row1['job_description'] ?></textarea>
                          </div>

                          <div class="form-group">
                            <label for="exampleInputEmail1">Job Type</label>
                            <div class="form-group">
                              <input type="text" value="<?php echo $row1['job_type'] ?>" name="job_type">

                            </div>

                          </div>


                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                          <button type="submit" name='submit' class="btn btn-primary">Update</button>
                        </div>

                    </div>

                  </div>
                  </form><?php } } ?>















                  
                <div class="col-12">


                    <div class="card">
                  <?php 
                if($update=='user'){
                $id = $_GET['user_id'];
                $jobs = $_GET['user'];
                    if ($jobs == "user") {
    $sqli2 = "select * from `users` where user_id=$id";
    
    
$result2 = mysqli_query($conn, $sqli2);
$row2 = mysqli_fetch_assoc($result2); ?>

<form action="includes/update_user.php" method="POST" class="container">
                            <div class="card-body">
                            <div class="form-group">
                                    <input type="hidden" name="user_id" class="form-control" id="exampleInputEmail1" placeholder="Enter name" value="<?php echo $row2['user_id'] ?>" autocomplete="off">
                            </div>
                                <div class="row">
                                    <div class="col">
                            
                            <div class="form-group">
                                    <label for="exampleInputEmail1">Gmail</label>
                                    <input type="gmail" name="user_gamil" class="form-control" id="exampleInputEmail1" placeholder="Enter name" value="<?php echo $row2['user_gamil'] ?>" autocomplete="off">
                                </div>
                        </div>
                            <div class="col">
                            <div class="form-group">
                                    <label for="exampleInputEmail1">User Name</label>
                                    <input type="text" name="user_name" class="form-control" id="exampleInputEmail1" placeholder="Enter name" value="<?php echo $row2['user_name'] ?>" autocomplete="off">
                                </div></div>
                                </div>
                               
                                <div class="row">
                                    <div class="col">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Skill</label>
                                    <input type="text" name="user_skill" class="form-control" id="exampleInputEmail1" placeholder="Enter name" value="<?php echo $row2['user_skill'] ?>" autocomplete="off">
                                </div></div>
                                <div class="col">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Address</label>
                                    <input type="text" name="user_address" class="form-control" id="exampleInputEmail1" placeholder="Enter name" value="<?php echo $row2['user_address'] ?>" autocomplete="off">
                                </div></div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Contact No</label>
                                    <input type="text" name="user_contact_no" class="form-control" id="exampleInputEmail1" placeholder="Enter address" autocomplete="off" value="<?php echo $row2['user_contact_no'] ?>">
                                </div></div>
                                <div class="col">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Age</label>
                                    <input type="text" name="user_age" class="form-control" id="exampleInputPassword1" placeholder="Enter contact no" autocomplete="off" value="<?php echo $row2['user_age'] ?>">
                                </div></div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Gender</label>
                                    <input type="text" name="user_gender" class="form-control" id="exampleInputPassword1" placeholder="Enter contact no" autocomplete="off" value="<?php echo $row2['user_gender'] ?>">
                                </div>
                                <div class="form-group">
                          <label for="exampleInputPassword1">Gender</label>
                          <div class="row">
<?php if($row2['user_gender']=='male'){ 
        $fchecked='';

    $mchecked='checked';

}else{
    $mchecked='';
    $fchecked='checked';
} ?>

                            <div class="col-2" style="margin-left:20px;">
                              <input class="form-check-input" type="radio" name="user_gender" id="gridRadios1" value="male" <?php echo $mchecked; ?> required>
                              <label class="form-check-label" for="gridRadios1">
                                Male
                              </label>
                            </div>
                            <div class="col-2">
                              <input class="form-check-input" type="radio" name="user_gender" id="gridRadios2" value="female" required <?php echo $fchecked; ?> >
                              <label class="form-check-label" for="gridRadios2">
                                Female
                              </label>
                            </div>


                          </div>
                        </div>
                                
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input type="password" name="user_password" class="form-control" id="exampleInputPassword1" placeholder="Enter contact no" autocomplete="off" value="<?php echo $row2['user_password'] ?>">
                                </div>


                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" name='submit' class="btn btn-primary">Update</button>
                            </div>
                        </form><?php }} ?>




                    </div></div>

                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
</div>
<!-- /.row -->
</div>
<!-- /.container-fluid -->
</section>
</div>
<!-- /.content -->
<!-- Small boxes (Stat box) -->

<div class="row">

</div>
</section>