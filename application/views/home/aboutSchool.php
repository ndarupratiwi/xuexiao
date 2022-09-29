<div class="container mt-5" style="font-family:Tahoma, Arial, Helvetica ;">
    <div class="animate__animated animate__fadeInDown animate__slower">
        <div class="container">
            <div class="col">
                <div class="row">
                    <div class="jumbotron" style="margin-top: 55px;">
                        <div class="vision text-center">
                            <h5>学校愿景</h5>
                            <?php
                            foreach ($Vision as $data) {
                            ?>
                                <div class="container">
                                    <p>"<?php echo $data->vision; ?>"</p>
                                </div>
                            <?php } ?>
                        </div>
                        <div class="mission">
                            <h5 style="text-align:center ;">学校使命</h5>
                            <?php
                            $no = 1;
                            foreach ($Mission as $data) {
                            ?>
                                <div class="container">
                                    <span><?php echo $no++; ?>. <?php echo $data->mission; ?></span><br>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-between">
                    <div class="col-sm-8 jumbotron mr-3">
                        <h5 style="text-align:center ;">校史</h5>
                        <?php
                        foreach ($SchoolHistory as $data) {
                        ?>
                            <div class="container">
                                <p><?php echo $data->contents; ?></p>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="col-sm jumbotron">
                        <h5 style="text-align:center ;">工作时间</h5>
                        <div class="d-flex justify-content-center">
                            <table class="table table-striped" width="100%" cellspacing="0">
                                <thead class="text-center">
                                    <tr>
                                        <th>日</th>
                                        <th>点钟</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                    <?php
                                    foreach ($officeHours as $data) {
                                    ?>
                                        <tr>
                                            <td><?php echo $data->day; ?></td>
                                            <td><?php echo $data->time_start; ?> - <?php echo $data->time_end; ?></td>
                                        </tr>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
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