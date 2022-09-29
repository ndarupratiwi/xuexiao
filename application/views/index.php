    <!-- Image Profil-->
    <header class="carousel" id="imageProfil" style="margin-top:100px;">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="<?php echo base_url('assets/image/school1.jpg') ?>" alt="First slide">
                </div>
                <?php
                foreach ($photo as $data) {
                ?>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="<?php echo base_url('uploads/school_photo/' . $data->image) ?>" alt="">
                    </div>
                <?php } ?>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </header>

    <!-- Information and School History-->
    <div class="container bg-white" style="font-style:Tahoma, Arial, Helvetica;margin-top:30px;">
        <div class="row">
            <div class="col-sm-9 text-lg-start border-right border-bottom">
                <h5>新的信息</h5>
                <?php
                foreach ($news as $data) {
                ?>
                    <div class="row my-2">
                        <div class="col-sm-2">
                            <img src="<?php echo base_url('uploads/news/' . $data->image) ?>" class="img-thumbnail">
                        </div>
                        <div class="col-sm-10">
                            <div class="card">
                                <h5 class="card-header bg-light"><?php echo $data->title; ?></h5>
                                <div class="card-body">
                                    <p class="card-text"><?php echo substr($data->contents, 0, 200) . '...'; ?></p>
                                    <a href="<?php echo base_url('Home/detailNews/' . $data->id); ?>" class="btn float-right" style="color:white;background-color:#1d5770;">阅读更多</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                <div class="d-flex justify-content-center">
                    <a href="<?php echo base_url('Home/information'); ?>" class="btn my-2" style="color:white;background-color:#1d5770;">更多信息</a>
                </div>
            </div>
            <div class="col-sm-3 border-bottom">
                <h5>校史</h5>
                <div class="card bg-light">
                    <?php
                    foreach ($SchoolHistory as $data) {
                    ?>
                        <div class="card-body">
                            <p class="card-text"><?php echo substr($data->contents, 0, 500) . '...'; ?></p>
                            <a href="<?php echo base_url('Home/schoolProfile/' . $data->id); ?>" class="btn float-right" style="color:white;background-color:#1d5770;">更多的</a>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>


    <!-- Agenda and Infographics-->
    <div class="container my-4" style="font-style:Tahoma, Arial, Helvetica;">
        <div class="row">
            <div class="col-sm-9 my-3 text-lg-start border-right border-bottom">
                <h5>本月议程</h5>

                <div class="agenda">
                    <?php
                    foreach ($agenda as $data) {
                    ?>
                        <div class="row my-2">
                            <div class="col-sm-2">
                                <img src="<?php echo base_url('uploads/agenda/' . $data->image) ?>" class="img-thumbnail">
                            </div>
                            <div class="col-sm-10">
                                <div class="card">
                                    <h5 class="card-header bg-light"><?php echo $data->title; ?> | <?php echo $data->agendaDate; ?></h5>
                                    <div class="card-body">
                                        <p class="card-text">议程: <?php echo substr($data->agenda, 0, 200) . '...'; ?></p>
                                        <a href="<?php echo base_url('Home/detailAgenda/' . $data->id); ?>" class="btn float-right" style="color:white;background-color:#1d5770;">阅读更多</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                    <div class="d-flex justify-content-center">
                        <a href="<?php echo base_url('Home/agenda'); ?>" class="btn my-2" style="color:white;background-color:#1d5770;">其他议程</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 my-3 border-bottom">
                <h5 class="ml-1">信息图表</h5>
                <div class="row ml-1" style="background-image:url(<?php echo base_url('assets/image/infographic.png') ?>);">
                    <?php
                    foreach ($infographics as $data) {
                    ?>
                        <div class="text-center my-2" style="color: white;">
                            <h5><?php echo $data->amount; ?></h5>
                            <h6><?php echo $data->title; ?></h6>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer-->
    <footer class="footer py-4" style="background-color:#FDD100 ;">
        <div class="container">
            <div class="row align-items-center" style="font-style:Tahoma, Arial, Helvetica ;">
                <?php
                foreach ($Kontak as $data) {
                ?>
                    <div class="col-lg-4 text-lg-start">
                        <img class="mb-2" src="<?php echo base_url('assets/image/icon.png') ?>" width="20%" height="20%" alt="">
                        <br>
                        <span><?php echo $data->address; ?></span>
                        <br>
                        <a style="color:black ; text-decoration:none;"><i class="fas fa-phone-alt fa-1x mr-2" style="color:black ;"></i><?php echo $data->phone_number; ?></a>
                        <br>
                        <a href="" style="color:black ; text-decoration:none;"><i class="fas fa-envelope fa-1x mr-2" style="color:black ;"></i><?php echo $data->email; ?></a>
                    </div>
                <?php
                } ?>