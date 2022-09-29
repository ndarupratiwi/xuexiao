<div class="container-fluid" style="font-family:Tahoma, Arial, Helvetica ; color:black;">

    <!-- Page Heading -->
    <div class="container col-sm-10">
        <div class="editAccountSettings">
            <div class="card">
                <?php
                foreach ($editAccountSettings as $data) {
                ?>
                    <div class="card-header">
                        <h3 class="text-center my-2" style="font-family:Tahoma, Arial, Helvetica ;"><i class="fas fa-user-edit"></i> 更新帐户设置</h3>
                    </div>
                    <div class="card-body col-sm-10 mx-auto">
                        <form action="<?php echo base_url('admin/updateAccountSettings'); ?>" method="POST">
                            <input type="hidden" id="id" name="id" value="<?php echo $data->id; ?>">
                            <div class="form-group">
                                <label for="username">用户名: </label>
                                <input type="text" class="form-control" id="username" name="username" value="<?php echo $data->username; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="email">电子邮件: </label>
                                <input type="email" class="form-control" id="email" name="email" value="<?php echo $data->email; ?>" onkeypress="return event.charCode >= 48 && event.charCode <=57" required>
                            </div>
                            <div class="form-group">
                                <label for="password">密码: </label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="输入新密码" required>
                            </div>
                            <input type="hidden" name="createdDate" id="createdDate" value="<?php echo date("Y-m-d"); ?>">
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