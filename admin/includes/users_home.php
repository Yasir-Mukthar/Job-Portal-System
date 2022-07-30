<!-- Content Wrapper. Contains page content -->

<?php
include("secure_session.php");

?>
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Users</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Users</li>
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
              <a class="navbar-brand">All Users</a>
              <form class="form-inline " method="POST" action="">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="search">
                <button class="btn btn-outline-success my-2 my-sm-0 " type="submit" name="submit">Search</button>

              </form>
              <button type="button" class=" btn btn-primary my-2 my-sm-0" data-toggle="modal" data-target=".bd-example-modal-lg">Add User</button>
            </nav>








            <!-- Modal -->
            <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add User</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form action="includes/add_user.php" method="POST">
                      <div class="card-body">
                        <div class="row">
                          <div class="col">
                            <label for="exampleInputEmail1">User Name</label>

                            <input type="text" class="form-control" name="user_name" placeholder="Enter name" required>
                          </div>
                          <div class="col">
                            <label for="exampleInputEmail1">Contact No</label>

                            <input type="text" class="form-control" name="contact_no" placeholder="Contact No" required>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col">
                            <label for="exampleInputEmail1">Gmail</label>

                            <input type="gmail" class="form-control" name="user_gmail" placeholder="Enter gmail" required>
                          </div>
                          <div class="col">
                            <label for="exampleInputEmail1">Skill</label>

                            <input type="text" class="form-control" name="user_skill" placeholder="Enter Skill" required>
                          </div>
                        </div>



                        <div class="form-group">
                          <label for="exampleInputPassword1">Address</label>
                          <input type="text" name="user_address" class="form-control" id="exampleInputPassword1" placeholder="Address" autocomplete="off">
                        </div>


                        <div class="form-group">
                          <label for="exampleInputPassword1">Gender</label>
                          <div class="row">


                            <div class="col-2" style="margin-left:20px;">
                              <input class="form-check-input" type="radio" name="gender" id="gridRadios1" value="male" checked required>
                              <label class="form-check-label" for="gridRadios1">
                                Male
                              </label>
                            </div>
                            <div class="col-2">
                              <input class="form-check-input" type="radio" name="gender" id="gridRadios2" value="female" required>
                              <label class="form-check-label" for="gridRadios2">
                                Female
                              </label>
                            </div>


                          </div>
                        </div>


                        <div class="row">
                          <div class="col">
                            <label for="exampleInputEmail1">Age</label>

                            <input type="gmail" class="form-control" name="user_age" placeholder="Enter Age">
                          </div>
                          <div class="col">
                            <label for="exampleInputEmail1">Password</label>

                            <input type="password" class="form-control" name="user_password" placeholder="Enter password" required>
                          </div>
                        </div>

                      </div>
                      <!-- /.card-body -->

                      <div class="card-footer">
                        <button type="submit" name='submit' class="btn btn-primary">Add User</button>
                      </div>

                  </div>

                </div>
                </form>
              </div>
            </div>





            <?php
            // Read data from database
            include("dbconnect.php");

            $sql_select = "SELECT * FROM `users` WHERE 1";

            if (isset($_POST['submit'])) {

              $search = $_POST['search'];


              $sql_select = "SELECT * FROM `users` where user_id like '%$search%' or user_name like '%$search%' or user_address like '%$search%'";
              $search = '';
            }

            $result_select = mysqli_query($conn, $sql_select);

            if (mysqli_num_rows($result_select) > 0) {


            ?>










              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: 500px;">
                <table id="example1" class=" table table-head-fixed text-nowrap">
                  <thead>
                    <tr>
                      <th>Id</th>
                      <th>Name</th>
                      <th>Address</th>
                      <th>Contact No</th>
                      <th>Gmail</th>
                      <th>Skill</th>
                      <th>Gender</th>
                      <th>Age</th>
                      <th>Password</th>
                      <th >Update</th>
                      <th >Delete</th>
                    </tr>
                  </thead>
                  <tbody>
                    

                    <?php while ($rows = mysqli_fetch_assoc($result_select)) { ?>

                      <tr>
                        <td><?php echo $rows['user_id'] ?></td>
                        <td><?php echo $rows['user_name'] ?></td>
                        <td><?php echo $rows['user_address'] ?></td>
                        <td><?php echo $rows['user_contact_no'] ?></td>
                        <td><?php echo $rows['user_gamil'] ?></td>
                        <td><?php echo $rows['user_skill'] ?></td>
                        <td><?php echo $rows['user_gender'] ?></td>
                        <td><?php echo $rows['user_age'] ?></td>
                        <td><?php echo $rows['user_password'] ?></td>
                        



                        <td>


                                                  
                                                
                            <form action="update_company.php" method="GET">
                              <input type="hidden" value="<?php echo $rows['user_id'] ?>" name="user_id">
                              <input type="hidden" value="user" name="user">
                              <input type="hidden" value="user" name="update">

                              <button type="submit" class="btn btn-primary btn-sm" onclick="function fun(e){$_SESSION['jobin']=true; }">Update</button></form>


                            
                          </td>
                          <td>
                          <a class="btn btn-danger btn-sm" href="includes/delete_user.php?user_id=<?php echo $rows['user_id']; ?>">Delete</a>
                          </td>





                       



                        
                        



                      </tr>





                  </tbody>
                <?php } ?>
              <?php } else {
              echo "<h1 class='text-center'>No User Found!</h1>";
            }      ?>

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