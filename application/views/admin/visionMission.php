<div class="container-fluid">

    <!-- Page Heading -->
    <div class="container" style="font-family:Tahoma, Arial, Helvetica ;">
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>">
        </div>
        <?php if ($this->session->flashdata('flash')) : ?>
        <?php endif; ?>
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex justify-content-center">
                <img src="<?php echo base_url('assets/image/icon.png') ?>" width="7%" height="7%" alt="">
                <h4 class="my-auto mx-2" style="font-weight: bold;color:black;">学校愿景和使命</h4>
            </div>
        </div>
        <div class="card shadow">
            <div class="card-header">
                <div class="visionMission" style="color:black ;">
                    <div class="content text-center">
                        <div class="vision my-4">
                            <?php
                            foreach ($Vision as $data) {
                            ?>
                                <div class="container">
                                    <h5 style="font-weight:bold ;">愿景</h5>
                                    <div class="row d-flex justify-content-center">
                                        <h5>"<?php echo $data->vision; ?>"</h5>
                                        <span>&nbsp;</span>
                                        <a style="color:red;" class="fa fa-edit" href="<?php echo base_url('admin/editVision/' . $data->id); ?>"></a>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                        <div class="mission my-4">
                            <h5 style="font-weight:bold ;">使命</h5>
                            <div class="d-flex justify-content-start">
                                <a class="btn" href="<?php echo base_url('Admin/addMission') ?>" role="button" style="background-color:#1d5770;"><i class="fa fa-plus-square mr-2" style="color:white ;"></i><span style="color:white ;">使命</span></a>
                            </div>
                            <div class="mission">
                                <?php
                                $no = 1;
                                foreach ($Mission as $data) {
                                ?>
                                    <div class="container text-justify">
                                        <div class="row">
                                            <div class="col-sm-8"><?php echo $no++; ?><span>. </span><?php echo $data->mission; ?> <span>.</span></div>
                                            <div class="col-sm-4">
                                                <a style="color:red" class="fa fa-edit" href="<?php echo base_url('Admin/editMission/' . $data->id); ?>">&nbsp;</a>
                                                <a style="color:black" class="fas fa-trash-alt btnDelete" href="<?php echo base_url('Admin/deleteMission/' . $data->id); ?>">&nbsp;</a>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>