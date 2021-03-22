<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="<?php echo base_url('/home') ?>" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Contact</a>
                </li>
            </ul>
            <!-- SEARCH FORM -->
            <form class="form-inline ml-3">
                <div class="input-group input-group-sm">
                    <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-navbar" type="submit">
                        <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </form>
            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Messages Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-comments"></i>
                        <span class="badge badge-danger navbar-badge">3</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="<?php echo base_url('/templete/AdminLTE/dist/img/user1-128x128.jpg') ?>" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                    Brad Diesel
                                    <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">Call me whenever you can...</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="<?php echo base_url('/templete/AdminLTE/dist/img/user1-128x128.jpg') ?>" alt="User Avatar" class="img-size-50 img-circle mr-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                    John Pierce
                                    <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">I got your message bro</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <div class="media">
                                <img src="<?php echo base_url('/templete/AdminLTE/dist/img/user3-128x128.jpg') ?>" alt="User Avatar" class="img-size-50 img-circle mr-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                    Nora Silvester
                                    <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">The subject goes here</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                    </div>
                </li>
                <!-- Notifications Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-bell"></i>
                        <span class="badge badge-warning navbar-badge">15</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <span class="dropdown-item dropdown-header">15 Notifications</span>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-envelope mr-2"></i> 4 new messages
                            <span class="float-right text-muted text-sm">3 mins</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-users mr-2"></i> 8 friend requests
                            <span class="float-right text-muted text-sm">12 hours</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-file mr-2"></i> 3 new reports
                            <span class="float-right text-muted text-sm">2 days</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#"><i
                    class="fas fa-cog"></i></a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="<?php echo base_url('auth/getlogout'); ?>" class="dropdown-item">
                            <i class="fas fa-users"></i>
                            <span class="float-right text-muted text-sm">Logout</span>
                        </a>
                    </div>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->
        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="<?php echo base_url('/templete/AdminLTE/dist/img/user2-160x160.jpg') ?>" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block"><?php echo $this->session->name; ?></a>
                    </div>
                </div>
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-header">MAIN MENU</li>
                        <li class="nav-item">
                            <a href="<?php echo base_url('/patient') ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Patients</p>
                            </a>
                        </li>
                         <li class="nav-item">
                            <a href="<?php echo base_url('/doctor') ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Doctor</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url('/reservation') ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Reservation</p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark">RESERVATION</h1>
                            </div><!-- /.col -->
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                </ol>
                                </div><!-- /.col -->
                                </div><!-- /.row -->
                                </div><!-- /.container-fluid -->
                            </div>
                            <!-- Main content -->
                            <div class="content">
                                <?php if($this->session->flashdata('success')){ ?>
                                    <div class="alert alert-success">
                                    <a href="#" class="close" data-dismiss="alert">&times;</a>
                                    <strong>Success!</strong> <?php echo $this->session->flashdata('success'); ?>
                                    </div>

                                    <?php } else if($this->session->flashdata('error')){  ?>

                                    <div class="alert alert-danger">
                                    <a href="#" class="close" data-dismiss="alert">&times;</a>
                                    <strong>Error!</strong> <?php echo $this->session->flashdata('error'); ?>
                                    </div>

                                    <?php } else if($this->session->flashdata('warning')){  ?>

                                    <div class="alert alert-warning">
                                    <a href="#" class="close" data-dismiss="alert">&times;</a>
                                    <strong>Warning!</strong> <?php echo $this->session->flashdata('warning'); ?>
                                    </div>

                                    <?php } else if($this->session->flashdata('info')){  ?>

                                    <div class="alert alert-info">
                                    <a href="#" class="close" data-dismiss="alert">&times;</a>
                                    <strong>Info!</strong> <?php echo $this->session->flashdata('info'); ?>
                                    </div>
                                  <?php } ?>
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h3 class="card-title">
                                                    <i class="ion ion-clipboard mr-1"></i>
                                                   Reservation Records
                                                    </h3>
                                                </div>
                                                
                                                <div class="card-body table-responsive p-0">
                                                    <table class="table table-hover text-nowrap">
                                                      <thead>
                                                        <tr>
                                                          <th>No</th>
                                                          <th>Reservation Date</th>
                                                          <th>Consult Time</th>
                                                          <th>Patient Code</th>
                                                          <th>Patient Name</th>
                                                          <th>Status</th>
                                                          <th>Doctor Name</th>
                                                          <th>Action</th>
                                                        </tr>
                                                      </thead>
                                                     <tbody>
                                                        <?php $i=1; foreach($data as $row) { ?>
                                                            <tr>
                                                              <td><?php echo $i ?></td>
                                                              <td><?php echo $row['rsvReserveDate'] ?></td>
                                                              <td><?php echo $row['rsvReserveTime'] ?></td>
                                                              <td><?php echo $row['psnPasienCode'] ?></td>
                                                              <td><?php echo $row['psnFullname'] ?></td>
                                                              <td>
                                                                <?php if ($row['rsvStatus'] == 0 ) { ?>
                                                                    <span class="badge bagde-sm bg-warning">On Progress</span>
                                                                <?php } else if ($row['rsvStatus'] == 1 ) { ?>
                                                                    <span class="badge bagde-sm bg-primary">Complete</span>
                                                                <?php } else {  ?>
                                                                    <span class="badge bagde-sm bg-danger">Cancel</span>
                                                                <?php }?>
                                                              </td>
                                                              <td><?php echo $row['dctFullname'] ?></td>
                                                              <td>
                                                                <a href="<?php echo base_url('/reservation/edit?id=' .  $row['rsvId']) ?>" class="btn btn-sm btn-success"><i class="far fa-edit"></i></a>
                                                                <a href="<?php echo base_url('/reservation/delete?id=' . $row['rsvId']) ?>" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i></a>
                                                            </td>
                                                            </tr>
                                                        <?php $i++; } ?>
                                                      </tbody>
                                                    </table>
                                                </div> 
                                                <div class="card-footer">
                                                     <a href="<?php echo base_url('/reservation/add') ?>" class="btn btn-primary">Add Reservation</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </body>
                </html>