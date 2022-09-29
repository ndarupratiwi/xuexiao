<div class="container my-5" style="font-family:Tahoma, Arial, Helvetica ;">
    <div class="achievement" style="margin-top: 120px;">
        <div class="col">
            <div class="row">
                <h5 class="text-center">学生的成就</h5>
                <div class="animate__animated animate__fadeInDown animate__slow">
                    <div class="row justify-content-between my-5">
                        <?php
                        foreach ($achievement as $data) {
                        ?>
                            <div class="card bg-light my-3" style="width: 20rem;">
                                <img class="card-img-top mt-3" src="<?php echo base_url('uploads/achievement/' . $data->image) ?>" alt="Card image cap">
                                <div class="card-body">
                                    <h6 class="text-center"><?php echo $data->title; ?></h6>
                                    <p class="card-text">姓名：<?php echo $data->name; ?></p>
                                    <p class="card-text"><?php echo $data->description; ?></p>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
                <?= $this->pagination->create_links(); ?>
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