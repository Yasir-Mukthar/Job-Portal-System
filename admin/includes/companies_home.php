<?php




include("secure_session.php");





include("dbconnect.php");

$_SESSION['l'] = true;



?>






<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Companies</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Companies</li>
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
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name='search'  >
                <button class="btn btn-outline-success my-2 my-sm-0 " type="submit" name="submit">Search</button>
                
              </form>
              <button type="button" class="btn btn-primary my-2 my-sm-0" data-toggle="modal" data-target="#exampleModal">
                Add Company
              </button>
              
            </nav>






            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Company</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form action="includes/add_company.php" method="POST">
                      <div class="card-body">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Company Name</label>
                          <input type="text" name="comp_name" class="form-control" id="exampleInputEmail1" placeholder="Enter name" autocomplete="off">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Address</label>
                          <input type="text" name="comp_address" class="form-control" id="exampleInputEmail1" placeholder="Enter address" autocomplete="off">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Contact No</label>
                          <input type="text" name="comp_contact_no" class="form-control" id="exampleInputPassword1" placeholder="Enter contact no" autocomplete="off">
                        </div>


                      </div>
                      <!-- /.card-body -->

                      <div class="card-footer">
                        <button type="submit" name='submit' class="btn btn-primary">Add Company</button>
                      </div>

                  </div>

                </div>
                </form>
              </div>
            </div>




            <?php
            // Read data from database




            // Read data from database
            $sql_select = "SELECT * FROM `companies` WHERE 1";

            if (isset($_POST['submit'])) {

              $search = $_POST['search'];


              $sql_select = "SELECT * FROM `companies` where comp_id like '%$search%' or comp_name like '%$search%' or comp_address like '%$search%'";
              $search = '';
            }

            $result_select = mysqli_query($conn, $sql_select);

            


            if (mysqli_num_rows($result_select) > 0) {

            ?>







              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: 500px;">
                <table id="example1" class="table table-head-fixed text-nowrap">
                  <thead>
                    <tr>
                      <th>Comapany Id</th>
                      <th>Comapany Name</th>
                      <th>Address</th>
                      <th>Contact No</th>
                      <th>Update</th>
                      <th>Delete</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php while ($rows = mysqli_fetch_assoc($result_select)) { ?>


                      <tr>
                        <td><?php echo $rows['comp_id'] ?></td>
                        <td><?php echo $rows['comp_name'] ?></td>
                        <td><?php echo $rows['comp_address'] ?></td>
                        <td><?php echo $rows['comp_contact_no'] ?></td>
                
                        <td>


                          
                        
                      <form action="update_company.php" method="GET">
                        <input type="hidden" value="<?php echo $rows['comp_id'] ?>" name="comp_id">
                        <input type="hidden" value="companies" name="companies">
                        <input type="hidden" value="company" name="update">
                        <button type="submit" class="btn btn-primary btn-sm" onclick="function fun(){ $_SESSION['compin']=true; }" >Update</button></form>


                          
                        </td>
                        <td>
                        <a class="btn btn-danger btn-sm" href="includes/delete_company.php?comp_id=<?php echo $rows['comp_id']; ?>">Delete</a>
                        </td>
                      </tr>

                  </tbody>
                <?php } ?>
              <?php } else{
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