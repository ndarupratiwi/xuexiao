<div class="container-fluid" style="font-family:Tahoma, Arial, Helvetica ; color:black;">

    <!-- Page Heading -->
    <div class="container col-sm-10">
        <div class="editContacts">
            <div class="card">
                <?php
                foreach ($editContacts as $data) {
                ?>
                    <div class="card-header">
                        <h3 class="text-center my-2" style="font-family:Tahoma, Arial, Helvetica ;"><i class="fas fa-address-card"></i> 更新学校联系方式</h3>
                    </div>
                    <div class="card-body col-sm-10 mx-auto">
                        <form action="<?php echo base_url('admin/updateContacts'); ?>" method="POST">
                            <input type="hidden" id="id" name="id" value="<?php echo $data->id; ?>">
                            <div class="form-group">
                                <label for="address">地址: </label>
                                <input type="text" class="form-control" id="address" name="address" value="<?php echo $data->address; ?>" required>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="phone_number">电话号码: </label>
                                    <input type="text" class="form-control" id="phone_number" name="phone_number" value="<?php echo $data->phone_number; ?>" onkeypress="return event.charCode >= 48 && event.charCode <=57" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="email">电子邮件: </label>
                                    <input type="email" class="form-control" id="email" name="email" value="<?php echo $data->email; ?>" required>
                                </div>
                            </div>
                            <div class="col-sm-12 text-center my-3">
                                <button type="submit" id="send" name="send" value="send" class="btn" style="background-color:#1d5770; color:white;">更新</button>
                            </div>
                        </form>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>

</div>