<div class="container-fluid" style="font-family:Tahoma, Arial, Helvetica ; color:black;">

    <!-- Page Heading -->
    <div class="container col-sm-10">
        <div class="updateOfficeHours">
            <div class="card">
                <?php
                foreach ($editOfficeHours as $data) {
                ?>
                    <div class="card-header">
                        <h3 class="text-center my-2" style="font-family:Tahoma, Arial, Helvetica ;"><i class="fas fa-calendar-alt"></i> 更新工作时间</h3>
                    </div>
                    <div class="card-body col-sm-10 mx-auto">
                        <form action="<?php echo base_url('admin/updateOfficeHours'); ?>" method="POST">
                            <input type="hidden" id="id" name="id" value="<?php echo $data->id; ?>">
                            <div class="form-group">
                                <label for="day">日: </label>
                                <input type="text" class="form-control" id="day" name="day" value="<?php echo $data->day; ?>" readonly>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="time_start">工作时间: </label>
                                    <input type="time" class="form-control" id="time_start" name="time_start" value="<?php echo $data->time_start; ?>" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="time_end">关闭时间: </label>
                                    <input type="time" class="form-control" id="time_end" name="time_end" value="<?php echo $data->time_end; ?>" required>
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