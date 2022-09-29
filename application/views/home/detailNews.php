<div class="container my-5" style="font-family:Tahoma, Arial, Helvetica ;">
    <div class="detailNews" style="margin-top: 120px;">
        <div class="col">
            <?php
            foreach ($detailNews as $data) {
            ?>
                <div class="row">
                    <h4 class="text-center"><?php echo $data->title; ?></h4>
                    <div class="detailNews">
                        <div class="text-center my-5">
                            <img src="<?php echo base_url('uploads/news/' . $data->image) ?>" width="50%" height="50%" alt="Responsive image">
                        </div>
                        <div class="content" style="text-align: justify;">
                            <p><?php echo $data->contents; ?></p>
                            <br>
                            <span class="text-justify">发布: <?php echo $data->createdDate; ?></span><br>
                            <span class="text-justify">作者: 学校行政</span>
                        </div>
                    </div>
                </div>
            <?php } ?>
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