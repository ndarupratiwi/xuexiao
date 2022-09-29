<div class="container-fluid">

    <!-- Page Heading -->
    <div class="container" style="font-family:Tahoma, Arial, Helvetica ; color:black;">
        <div class="editSchoolPhoto">
            <div class="card">
                <?php
                foreach ($editSchoolPhoto as $data) {
                ?>
                    <div class="card-header">
                        <h3 class="text-center my-2" style="font-family:Tahoma, Arial, Helvetica ;"><img src="<?php echo base_url('assets/image/add-image.png'); ?>" alt=""> 学校资料照片更新</h3>
                    </div>
                    <div class="card-body">
                        <form action="<?php echo base_url('admin/updateSchoolPhoto'); ?>" method="POST" enctype="multipart/form-data">
                            <input type="hidden" id="id" name="id" value="<?php echo $data->id; ?>">
                            <div class="form-group">
                                <label for="title">标题: </label>
                                <input type="text" class="form-control" id="title" name="title" value="<?php echo $data->title; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="image">上传图片: </label>
                                <div class="col-sm-10">
                                    <img src="<?php echo base_url('uploads/school_photo/'); ?><?php echo $data->image; ?>" class="rounded mx-auto d-block" width="50%" height="50%" alt="">
                                    <input type="file" class="form-control-file" id="image" name="image" value="<?php echo $data->image; ?>">
                                    <p>照片必须为 .jpg、.jpeg、.png 或 .svg 格式。 最大大小 2MB。</p>
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