<div class="container-fluid" style="font-family:Tahoma, Arial, Helvetica ;">

    <!-- Page Heading -->
    <div class="col-sm-10 mx-auto">
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flashAccountSettings'); ?>">
        </div>
        <?php if ($this->session->flashdata('flashAccountSettings')) : ?>
        <?php endif; ?>
        <div class="card mb-3">
            <div class="card-header py-3 d-flex justify-content-center">
                <img src="<?php echo base_url('assets/image/icon.png') ?>" width="5%" height="5%" alt="">
                <h5 class="font-weight-bold my-auto mx-2" style="color:#1d5770 ;">帐号设定</h5>
            </div>
            <?php
            foreach ($accountSettings as $data) {
            ?>
                <div class="card-body">
                    <div class="form-group row">
                        <label for="username" class="col-sm-2 col-form-label">用户名: </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="username" name="username" value="<?php echo $data->username; ?>" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-sm-2 col-form-label">电子邮件: </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="email" name="email" value="<?php echo $data->email; ?>" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="password" class="col-sm-2 col-form-label">密码: </label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="password" name="password" value="<?php echo $data->password; ?>" readonly>
                        </div>
                    </div>
                    <div class="editContacts d-flex justify-content-end mb-2">
                        <a class="btn button" href="<?php echo base_url('Admin/editAccountSettings/' . $data->id); ?>" role="button" style="background-color:#1d5770;"><i class="fas fa-edit mr-2" style="color:white ;"></i><span style="color:white ;">更新帐户设置</span></a>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>

</div>