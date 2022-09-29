<div class="container-fluid">

    <!-- Page Heading -->
    <div class="container" style="font-family:Tahoma, Arial, Helvetica ; color:black;">
        <div class="updateVision">
            <div class="card">
                <?php
                foreach ($editVision as $data) {
                ?>
                    <div class="card-header">
                        <h3 class="text-center my-2" style="font-family:Tahoma, Arial, Helvetica ;"><img src="<?php echo base_url('assets/image/target.png'); ?>" alt=""> 学校愿景更新</h3>
                    </div>
                    <div class="card-body">
                        <form action="<?php echo base_url('admin/updateVision'); ?>" method="POST">
                            <div class="form-group">
                                <input type="hidden" name="id" value="<?php echo $data->id; ?>">
                                <label for="vision">愿景: </label>
                                <textarea class="form-control" id="vision" name="vision" rows="3" required><?php echo $data->vision; ?></textarea>
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