<div class="container-fluid">

    <!-- Page Heading -->
    <div class="container" style="font-family:Tahoma, Arial, Helvetica ;">
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>">
        </div>
        <?php if ($this->session->flashdata('flash')) : ?>
        <?php endif; ?>
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex justify-content-center">
                <img src="<?php echo base_url('assets/image/icon.png') ?>" width="5%" height="5%" alt="">
                <h4 class="mx-2 my-auto" style="font-weight: bold;color:black;">校史</h4>
            </div>
        </div>
        <div class="card shadow">
            <div class="card-header">
                <div class="SchoolHistory" style="color:black ;">
                    <div class="content text-center">
                        <div class="history my-4">
                            <div class="col-sm-5 mx-auto">
                            </div>
                            <?php
                            foreach ($SchoolHistory as $data) {
                            ?>
                                <div class="container">
                                    <div class="row d-flex justify-content-start">
                                        <p>标题: "<?php echo $data->title; ?>"</p>
                                        <p>
                                            <?php echo $data->contents; ?>
                                            <span>
                                                <a style="color:red;" class="fa fa-edit" href="<?php echo base_url('admin/editSchoolHistory/' . $data->id); ?>"></a>
                                            </span>
                                        </p>
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