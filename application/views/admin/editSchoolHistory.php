<div class="container-fluid">

    <!-- Page Heading -->
    <div class="container" style="font-family:Tahoma, Arial, Helvetica ; color:black;">
        <div class="updateSchoolHistory">
            <div class="card">
                <?php
                foreach ($editSchoolHistory as $data) {
                ?>
                    <div class="card-header">
                        <h3 class="text-center my-2" style="font-family:Tahoma, Arial, Helvetica ;"><img src="<?php echo base_url('assets/image/history-book.png'); ?>" alt=""> 学校历史更新</h3>
                    </div>
                    <div class="card-body">
                        <form action="<?php echo base_url('admin/updateSchoolHistory'); ?>" method="POST">
                            <div class="form-group">
                                <input type="hidden" id="id" name="id" value="<?php echo $data->id; ?>">
                                <label for="title">标题: </label>
                                <input type="text" class="form-control" id="title" name="title" value="<?php echo $data->title; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="contents">历史: </label>
                                <textarea class="form-control" id="contents" name="contents" rows="6" required><?php echo $data->contents; ?></textarea>
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