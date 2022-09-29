<!-- Navbar-->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav" style="background:#FDD100;">
    <div class="container">
        <a class="navbar-brand" href="<?php echo base_url('home') ?>"><img src="<?php echo base_url('assets/image/logo.png') ?>" alt="..." /></a>
        <button class="navbar-toggler" style="border-color: white;" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            菜单
            <i class="fas fa-bars ms-1"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                <li class="nav-item"><a class="nav-link" href="<?php echo base_url('home/index') ?>">主页</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo base_url('home/schoolProfile') ?>">学校简介</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo base_url('home/information') ?>">信息</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo base_url('home/achievement') ?>">成就</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo base_url('home/extracurricular') ?>">课外</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo base_url('home/agenda') ?>">议程</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo base_url('home/newStudentRegistration') ?>">新学生注册</a></li>
            </ul>
        </div>
    </div>
</nav>