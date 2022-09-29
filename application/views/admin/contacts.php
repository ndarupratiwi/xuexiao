<div class="container-fluid" style="font-family:Tahoma, Arial, Helvetica ;">

    <!-- Page Heading -->
    <div class="col-sm-10 mx-auto">
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>">
        </div>
        <?php if ($this->session->flashdata('flash')) : ?>
        <?php endif; ?>
        <div class="card mb-3">
            <div class="card-header py-3 d-flex justify-content-center">
                <img src="<?php echo base_url('assets/image/icon.png') ?>" width="5%" height="5%" alt="">
                <h5 class="font-weight-bold my-auto mx-2" style="color:#1d5770 ;">学校联系方式</h5>
            </div>
            <?php
            foreach ($contacts as $data) {
            ?>
                <div class="card-body">
                    <div class="form-group row">
                        <label for="address" class="col-sm-2 col-form-label">地址: </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="address" name="address" value="<?php echo $data->address; ?>" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="phone_number" class="col-sm-2 col-form-label">电话号码: </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="phone_number" name="phone_number" value="<?php echo $data->phone_number; ?>" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-sm-2 col-form-label">电子邮件: </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="email" name="email" value="<?php echo $data->email; ?>" readonly>
                        </div>
                    </div>
                    <div class="editContacts d-flex justify-content-end mb-2">
                        <a class="btn button" href="<?php echo base_url('Admin/editContacts/' . $data->id); ?>" role="button" style="background-color:#1d5770;"><i class="fas fa-edit mr-2" style="color:white ;"></i><span style="color:white ;">更新联系人</span></a>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>

</div>