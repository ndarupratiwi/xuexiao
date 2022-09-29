<?php
$data = $this->session->userdata("username"); ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/x-icon" href="<?php echo base_url('assets/image/icon.png')  ?>" />

    <title><?php echo $title; ?></title>

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url('assets/sbadmin/css/sb-admin-2.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/sbadmin/vendor/datatables/dataTables.bootstrap4.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/sbadmin/vendor/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <!-- Include library Datepicker Gijgo -->
    <link href="<?php echo base_url('assets/library/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') ?>" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker3.css" />

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color:#FDD100 ;">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo site_url('admin') ?>">
                <div class="sidebar-brand-icon">
                    <img src="<?php echo base_url('assets/image/logo.png') ?>" width="90%" height="90%" alt="">
                </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - 仪表板 -->
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo site_url('admin') ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>仪表板</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - 学校简介 -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#schoolprofil" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-chalkboard-teacher" style="color:white;"></i>
                    <span>学校简介</span>
                </a>
                <div id="schoolprofil" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="<?php echo site_url('admin/visionMission') ?>">愿景和使命</a>
                        <a class="collapse-item" href="<?php echo site_url('admin/schoolHistory') ?>">校史</a>
                        <a class="collapse-item" href="<?php echo site_url('admin/schoolPhoto') ?>">学校简介照片</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - 学生 -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#student" aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-user-graduate" style="color:white ;"></i>
                    <span>学生</span>
                </a>
                <div id="student" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="<?php echo site_url('admin/achievement') ?>">学生的成就</a>
                        <a class="collapse-item" href="<?php echo site_url('admin/extracurricular') ?>">课外</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - 学校 -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#school" aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-school" style="color: white;"></i>
                    <span>学校</span>
                </a>
                <div id="school" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="<?php echo site_url('admin/news') ?>">消息</a>
                        <a class="collapse-item" href="<?php echo site_url('admin/agenda') ?>">议程</a>
                        <a class="collapse-item" href="<?php echo site_url('admin/newStudentRegistrationInformation') ?>">新学生注册</a>
                        <a class="collapse-item" href="<?php echo site_url('admin/infographics') ?>">信息图表</a>
                        <a class="collapse-item" href="<?php echo site_url('admin/officeHours') ?>">工作时间</a>
                        <a class="collapse-item" href="<?php echo site_url('admin/contacts') ?>">往来</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - 设置 -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#setting" aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-cogs" style="color:white ;"></i>
                    <span>设置</span>
                </a>
                <div id="setting" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="<?php echo site_url('admin/accountSettings') ?>">帐号设定</a>
                    </div>
                </div>
            </li>


            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="搜索..." aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn" style="background-color:#FDD100 ;" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <div class="my-auto">
                            <?php
                            date_default_timezone_set('Asia/Jakarta');
                            echo date('l, d-M-Y | h:i:s a');
                            ?>
                        </div>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">行政</span>
                                <img class="img-profile rounded-circle" src="<?php echo base_url('assets/image/icon.png') ?>">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="<?php echo base_url('Logout') ?>" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    登出
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="container" style="font-family:Tahoma, Arial, Helvetica ; color:black;">
                        <div class="updateAgenda">
                            <div class="card">
                                <?php
                                foreach ($editAgenda as $data) {
                                ?>
                                    <div class="card-header">
                                        <h3 class="text-center my-2" style="font-family:Tahoma, Arial, Helvetica ;"><img src="<?php echo base_url('assets/image/calendar.png'); ?>" alt=""> 更新议程</h3>
                                    </div>
                                    <div class="card-body">
                                        <form action="<?php echo base_url('admin/updateAgenda'); ?>" method="POST" enctype="multipart/form-data">
                                            <input type="hidden" id="id" name="id" value="<?php echo $data->id; ?>">
                                            <div class="form-group row">
                                                <label for="title">标题: </label>
                                                <div class="col-sm">
                                                    <input type="text" class="form-control" id="title" name="title" value="<?php echo $data->title; ?>" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="agenda">议程: </label>
                                                <div class="col-sm">
                                                    <textarea class="form-control" id="agenda" name="agenda" rows="10" required><?php echo $data->agenda; ?></textarea>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-sm-6">
                                                    <label for="agendaDate">日期: </label>
                                                    <div class="col-sm">
                                                        <input type="text" id="datepicker" name="agendaDate" value="<?php echo $data->agendaDate; ?>" class="form-control datetimepicker-input" data-toggle="datetimepicker" data-target="#datepicker" autocomplete="off" required />
                                                    </div>
                                                </div>
                                                <div class="form-group col-sm-6">
                                                    <label for="time">时间: </label>
                                                    <div class="col-sm">
                                                        <input type="time" class="form-control" id="time" name="time" value="<?php echo $data->time; ?>" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <input type="hidden" name="createdDate" id="createdDate" value="<?php echo date("Y-m-d"); ?>">
                                            <div class="form-group row">
                                                <label for="image">上传图片: </label>
                                                <div class="col-sm">
                                                    <div class="text-center">
                                                        <img class="text-center" src="<?php echo base_url('uploads/agenda/'); ?><?php echo $data->image; ?>" class="img-thumbnail" width="50%" height="50%" alt="">
                                                    </div>
                                                    <input type="file" class="form-control-file" id="image" name="image" value="<?php echo $data->image; ?>">
                                                    <p>照片必须为 .jpg、.jpeg、.png 或 .svg 格式。 最大大小 2MB。</p>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 text-center my-3">
                                                <button type="submit" id="send" name="send" value="send" class="btn" style="background-color:#1d5770; color:white;">更新</button>
                                            </div>
                                        </form>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; 2022年学校管理系统</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top" style="background-color:#FDD100 ;">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">准备出门了？</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">当您准备好结束当前会话时，请选择下面的“登出”。</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">取消</button>
                    <a class="btn btn-warning" href="<?php echo base_url('Logout'); ?>">登出</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url('assets/sbadmin/vendor/jquery/jquery.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/sbadmin/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url('assets/sbadmin/vendor/jquery-easing/jquery.easing.min.js') ?>"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url('assets/sbadmin/js/sb-admin-2.min.js') ?>"></script>

    <!-- Datepicker -->
    <script src="<?php echo base_url('assets/js/jquery-1.11.2.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/library/moment/moment.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/library/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/custom.js') ?>"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/locales/bootstrap-datepicker.id.min.js" charset="UTF-8"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            setDatePicker("#datepicker")
            setDateRangePicker("#startdate", "#enddate")
            setMonthPicker("#monthpicker")
            setYearPicker("#yearpicker")
            setYearRangePicker("#startyear", "#endyear")
        })
    </script>

</body>

</html>