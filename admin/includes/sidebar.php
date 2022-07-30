<!-- Main Sidebar Container -->
<?php
include("secure_session.php");

?>

<div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
       
   <!-- Profile Image -->
   <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="<?php echo $_SESSION['admin_img'];
 ?>"
                       alt="User profile picture">
                </div>

                <h3 class="profile-username text-center"><?php echo $_SESSION['admin_name'];
 ?></h3>


                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Name</b> <a class="float-right mr-4"><?php echo $_SESSION['admin_name'];
 ?></a>
                  </li>
                  <li class="list-group-item">
                    <b>Password</b> <a class="float-right mr-4"><?php echo $_SESSION['admin_password'];
 ?></a>
                  </li>
                  
                </ul>

              </div>
              <!-- /.card-body -->
            </div>
    </div>
  </div>
</div>
<aside class="main-sidebar sidebar-dark-primary elevation-4">

  
    <!-- Brand Logo -->
    <a href="" class="brand-link">
      <span class="brand-text font-weight-light">Admin Panel</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo $_SESSION['admin_img'];
 ?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
        <button type="" class=" border-0 sidebar-dark-primary text-white"  data-toggle="modal" data-target=".bd-example-modal-sm"><?php echo $_SESSION['admin_name'];
 ?></button>

          
        </div>
      </div>






      














     
           


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item ">
            <a href="index.php" class="nav-link" >
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                
              </p>
            </a>
            
          </li>
          
          
          <li class="nav-item">
            <a href="users.php" class="nav-link">
            <i class=" nav-icon fa fa-users"></i> 
              <p>
                Users
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="companies.php" class="nav-link">
            <i class="nav-icon fa fa-building"></i>              <p>
                Companies
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="jobs.php" class="nav-link">
            <i class=" nav-icon fa fa-suitcase"></i> 
              <p>
                Jobs
              </p>
            </a>
          </li>
         
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  