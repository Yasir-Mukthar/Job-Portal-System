<?php
        // Read data from database
        include("secure_session.php");

       include("rows.php");

      ?>



<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?php echo $jobs; ?></h3>

                <p>Jobs</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="jobs.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?php echo $companies; ?></h3>

                <p>Companies</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="companies.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-primary text-white">
              <div class="inner">
                <h3><?php echo $users; ?></h3>

                <p>Users</p>
              </div>
              <div class="icon">
                <i class="nav-icon fa fa-users"></i>
              </div>
              <a href="users.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3><?php echo $applicants; ?></h3>

                <p>Applicant</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="users.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        
      </div>
    </section>


    <!-- Default box -->
    <div class="card card-solid">
        <div class="card-body pb-0">
          
            
            <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">


          <div class="card">
            
            <nav class="navbar navbar-light bg-light ">
              <a class="navbar-brand">Applicants</a>
              <form class="form-inline " method="POST" action="">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name='search'  >
                <button class="btn btn-outline-success my-2 my-sm-0 " type="submit" name="submit">Search</button>
                
              </form>
              
              
            </nav>
















            




            <?php
            // Read data from database




            // Read data from database
            $sql_select = "SELECT * FROM `applicant` WHERE 1";

            if (isset($_POST['submit'])) {

              $search = $_POST['search'];


              $sql_select = "SELECT * FROM `applicant` where job_id like '%$search%' or user_gmail like '%$search%' or pdf like '%$search%'";
              $search = '';
            }

            $result_select = mysqli_query($conn, $sql_select);

            


            if (mysqli_num_rows($result_select) > 0) {

            ?>







              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: 300px;">
                <table id="example1" class="table table-head-fixed text-nowrap">
                  <thead>
                    <tr>
                      <th>Job id</th>
                      <th>User id</th>
                      <th>Applicant Gmail</th>
                      <th>CV</th>
                      <th>Delete</th>
                      
                    </tr>
                  </thead>
                  <tbody>
                    <?php while ($rows = mysqli_fetch_assoc($result_select)) { ?>


                      <tr>
                        <td><?php echo $rows['job_id'] ?></td>
                        <td><?php echo $rows['user_id'] ?></td>
                        <td><?php echo $rows['user_gmail'] ?></td>
                        <td><a class="btn btn-primary text-white btn-sm" href="/jobsportalsystem/main/<?php  echo $rows['pdf'] ?>" target="_blank">Download</a></td>
                        <td>
                        <a class="btn btn-danger btn-sm" href="includes/delete_applicant.php?comp_id=<?php echo $rows['app_id']; ?>">Delete</a>
                        </td>
                      </tr>

                  </tbody>
                <?php } ?>
              <?php } else{
                echo "<h1 class='text-center'>Yet No Applicant!</h1>";
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
    </div>
    <!-- /.content -->
  </div>
      <!-- Small boxes (Stat box) -->
      <div class="row">
          
      </div>
    </section> 
      