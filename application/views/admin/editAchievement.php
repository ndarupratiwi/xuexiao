<div class="container-fluid">

    <!-- Page Heading -->
    <div class="container" style="font-family:Tahoma, Arial, Helvetica ; color:black;">
        <div class="editAchievement">
            <div class="card">
                <?php
                foreach ($editAchievement as $data) {
                ?>
                    <div class="card-header">
                        <h3 class="text-center my-2" style="font-family:Tahoma, Arial, Helvetica ;"><img src="<?php echo base_url('assets/image/add-image.png'); ?>" alt=""> 学生的成就</h3>
                    </div>
                    <div class="card-body">
                        <form action="<?php echo base_url('admin/updateAchievement'); ?>" method="POST" enctype="multipart/form-data">
                            <div class="form-row">
                                <input type="hidden" id="id" name="id" value="<?php echo $data->id; ?>">
                                <div class="col">
                                    <label for="title">标题: </label>
                                    <input type="text" class="form-control" id="title" name="title" value="<?php echo $data->title; ?>" required>
                                </div>
                                <div class="col">
                                    <label for="name">名字: </label>
                                    <input type="text" class="form-control" id="name" name="name" value="<?php echo $data->name; ?>" required>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <label for="description">描述: </label>
                                <textarea class="form-control" id="description" name="description" rows="3" required><?php echo $data->description; ?></textarea>
                            </div>
                            <div class="form-group">
                                <label for="image">上传图片: </label>
                                <div class="col-sm-10">
                                    <img src="<?php echo base_url('uploads/achievement/'); ?><?php echo $data->image; ?>" class="rounded mx-auto d-block" width="50%" height="50%" alt="">
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