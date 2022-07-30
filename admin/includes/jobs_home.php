<?php

include("dbconnect.php");
include("secure_session.php");


// Read data from database


$sql1 = "SELECT * FROM `companies` WHERE 1";
$result1 = mysqli_query($conn, $sql1) or die("Query not successful");






?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Jobs</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Jobs</li>
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
              <nav class="navbar navbar-light bg-light ">
                <a class="navbar-brand">List of Jobs</a>
                <form class="form-inline " method="POST" action="">
                  <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="search">
                  <button class="btn btn-outline-success my-2 my-sm-0 " type="submit" name="submit">Search</button>

                </form>
                <button type="button" class=" btn btn-primary my-2 my-sm-0" data-toggle="modal" data-target=".bd-example-modal-lg">Add Job</button>
                

              <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">

                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Add Job</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <form action="includes/add_job.php" method="POST">
                        <div class="card-body">
                          <div class="form-group">
                            <?php if (mysqli_num_rows($result1) > 0) { ?>
                            <label for="exampleInputEmail1">Company id</label>
                            <div class="form-group">
                              <select class="form-control" name='comp_id'>

                                <?php
                                


                                while ($row = mysqli_fetch_assoc($result1)) { ?>
                                  <option><?php echo $row['comp_id'] ?></option>
                                <?php } ?>
                              </select>
                            <?php } else {      ?>
                            <?php echo 'please register company first.';
                          }
                            ?>
                            </div>

                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Company Name</label>
                            <div class="form-group">
                              <select class="form-control" name="comp_name">

                                <?php
                                $sql1 = "SELECT `comp_name` FROM `companies` WHERE 1";
                                $result1 = mysqli_query($conn, $sql1) or die("Query not successful");
                                $jobs = mysqli_num_rows($result1);
                                $_SESSION['jobs'] = $jobs;
                                if ($jobs > 0) {


                                  while ($row = mysqli_fetch_assoc($result1)) { ?>


                                    <option><?php echo $row['comp_name'] ?></option>
                                  <?php } ?>

                                <?php } else {      ?>
                                <?php echo '<br><h1> No record found</h1>';
                                }
                                ?>
                              </select>

                            </div>

                          </div>

                          <div class="row">
                            <div class="col">
                              <label for="exampleInputEmail1">Job Title</label>

                              <input type="text" class="form-control" name="job_title" placeholder="Enter Job Title" required autocomplete="off">
                            </div>
                            <div class="col">
                              <label for="exampleInputEmail1">Salary</label>

                              <input type="text" class="form-control" name="job_salary" placeholder="Enter Salary" required autocomplete="off">
                            </div>
                          </div>






                          <div class="form-group">
                            <label for="exampleInputEmail1">Company Address</label>
                            <div class="form-group">
                              <select class="form-control" name="comp_address">

                                <?php
                                $sql1 = "SELECT `comp_address` FROM `companies` WHERE 1";
                                $result1 = mysqli_query($conn, $sql1) or die("Query not successful");
                                $jobs = mysqli_num_rows($result1);
                                $_SESSION['jobs'] = $jobs;
                                if ($jobs > 0) {


                                  while ($row = mysqli_fetch_assoc($result1)) { ?>


                                    <option><?php echo $row['comp_address'] ?></option>
                                  <?php } ?>

                                <?php } else {      ?>
                                <?php echo '<br><h1> No record found</h1>';
                                }
                                ?>
                              </select>

                            </div>

                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Work Experience</label>
                            <div class="form-group">
                              <select class="form-control" name='job_experience'>


                                <option>No Experience</option>
                                <option>2 years</option>
                                <option>3 years</option>
                                <option>4 years</option>
                                <option>5 years</option>

                              </select>

                            </div>

                          </div>
                          <div class="form-group">
                            <label for="exampleFormControlTextarea1">Job Description</label>
                            <textarea name="job_description" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                          </div>
<div class="row">
                          <div class="form-group col">
                          <label for="exampleInputEmail1">Date</label><br>
<input type="date" name="job_date" id="">                          </div>


                          <div class="form-group col">
                            <label for="exampleInputEmail1">Job Type</label>
                            <div class="form-group">
                              <select class="form-control" name='job_type'>


                                <option>Internship</option>
                                <option>Part Time</option>
                                <option>Full Time</option>
                                <option>Contract Based</option>
                              </select>

                            </div>

                          </div>
                          </div>


                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                          <button type="submit" name='submit' class="btn btn-primary">Add Job</button>
                        </div>

                    </div>

                  </div>
                  </form>
                </div>
              </div>
              </nav>



              



              <!-- /.card-header -->



              <?php








              // Read data from database
              $sql_select = "SELECT * FROM `jobs` WHERE 1";

              if (isset($_POST['submit'])) {

                $search = $_POST['search'];


                $sql_select = "SELECT * FROM `jobs` where job_id like '%$search%' or c_name like '%$search%' or job_title like '%$search%'";
                $search = '';
              }

              $result_select = mysqli_query($conn, $sql_select);

              if (mysqli_num_rows($result_select) > 0) {


              ?>


                <div class="card-body table-responsive p-0" style="height: 500px;">
                  <table id="example1" class="table table-head-fixed text-nowrap">
                    <thead>
                      <tr>
                        <th>Job Id</th>
                        <th>Company Name</th>
                        <th>Job title</th>
                        <th>Salary</th>
                        <th>Location</th>
                        <th>Work Experience</th>
                        <th>Job Description</th>
                        <th>Job type</th>
                        <th>Update</th>
                        <th>Delete</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php while ($rows = mysqli_fetch_assoc($result_select)) { ?>


                        <tr>
                          <td><?php echo $rows['job_id'] ?></td>
                          <td><?php echo $rows['c_name'] ?></td>
                          <td><?php echo $rows['job_title'] ?></td>
                          <td><?php echo $rows['job_salary'] ?></td>
                          <td><?php echo $rows['job_location'] ?></td>
                          <td><?php echo $rows['job_experience'] ?></td>
                          <td class="text-wrap " ><?php echo $rows['job_description'] ?></td>
                          <td><?php echo $rows['job_type'] ?></td>
                         <td>


                                                  
                                                
                            <form action="update_company.php" method="GET">
                              <input type="hidden" value="<?php echo $rows['job_id'] ?>" name="job_id">
                              <input type="hidden" value="jobs" name="jobs">
                              <input type="hidden" value="job" name="update">

                              <button type="submit" class="btn btn-primary btn-sm" onclick="function fun(e){$_SESSION['jobin']=true; }">Update</button></form>


                            
                          </td>
                          <td>
                          <a class="btn btn-danger btn-sm" href="includes/delete_job.php?job_id=<?php echo $rows['job_id']; ?>">Delete</a>
                          </td>
                        </tr>



                    </tbody>
                  <?php } ?>
                <?php } else {
                echo "<h1 class='text-center'>No Data Found!</h1>";
              }     ?>

                  </table>
                </div>
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
  