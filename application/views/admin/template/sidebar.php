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
        <a class="nav-link" href="<?php echo site_url('admin/accountSettings') ?>">
            <i class="fas fa-cogs" style="color:white ;"></i>
            <span>帐号设定</span>
        </a>
    </li>


    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>