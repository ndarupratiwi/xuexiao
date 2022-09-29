<div class="container my-5" style="font-family:Tahoma, Arial, Helvetica ;">
    <div class="information" style="margin-top: 120px;">
        <h5 class="text-center">信息</h5>
        <div class="animate__animated animate__fadeInDown animate__slower">
            <div class="row">
                <div class="container mt-3">
                    <?php
                    foreach ($information as $data) {
                    ?>
                        <div class="row bg-light rounded justify-content-between my-3">
                            <div class="row my-3">
                                <div class="col-sm-4">
                                    <img src="<?php echo base_url('uploads/news/' . $data->image) ?>" width="75%" alt="">
                                </div>
                                <div class="col-sm-8">
                                    <h6><?php echo $data->title; ?></h6>
                                    <p class="card-text"><?php echo substr($data->contents, 0, 300) . '...'; ?></p>
                                    <a href="<?php echo base_url('Home/detailNews/' . $data->id); ?>" class="btn float-right" style="color:white;background-color:#1d5770;">阅读更多</a>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
        <?= $this->pagination->create_links(); ?>
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