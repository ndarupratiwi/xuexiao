<div class="container-fluid">

    <!-- Page Heading -->
    <div class="container" style="font-family:Tahoma, Arial, Helvetica ; color:black;">
        <div class="updateMission">
            <div class="card">
                <?php
                foreach ($editMission as $data) {
                ?>
                    <div class="card-header">
                        <h3 class="text-center my-2" style="font-family:Tahoma, Arial, Helvetica ;"><img src="<?php echo base_url('assets/image/goal.png'); ?>" alt=""> 学校使命更新</h3>
                    </div>
                    <div class="card-body">
                        <form action="<?php echo base_url('admin/updateMission'); ?>" method="POST">
                            <div class="form-group">
                                <input type="hidden" id="id" name="id" value="<?php echo $data->id; ?>">
                                <label for="mission">使命: </label>
                                <textarea class="form-control" id="mission" name="mission" rows="3" required><?php echo $data->mission; ?></textarea>
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