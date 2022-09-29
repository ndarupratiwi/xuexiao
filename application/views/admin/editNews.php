<div class="container-fluid">

    <!-- Page Heading -->
    <div class="container" style="font-family:Tahoma, Arial, Helvetica ; color:black;">
        <div class="updateNews">
            <div class="card">
                <?php
                foreach ($editNews as $data) {
                ?>
                    <div class="card-header">
                        <h3 class="text-center my-2" style="font-family:Tahoma, Arial, Helvetica ;"><img src="<?php echo base_url('assets/image/newspaper.png'); ?>" alt=""> 信息更新</h3>
                    </div>
                    <div class="card-body">
                        <form action="<?php echo base_url('admin/updateNews'); ?>" method="POST" enctype="multipart/form-data">
                            <input type="hidden" id="id" name="id" value="<?php echo $data->id; ?>">
                            <div class="form-group row">
                                <label for="title">标题: </label>
                                <div class="col-sm">
                                    <input type="text" class="form-control" id="title" name="title" value="<?php echo $data->title; ?>" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="contents">内容: </label>
                                <div class="col-sm">
                                    <textarea class="form-control" id="contents" name="contents" rows="10" required><?php echo $data->contents; ?></textarea>
                                </div>
                            </div>
                            <input type="hidden" name="createdDate" id="createdDate" value="<?php echo date("Y-m-d"); ?>">
                            <div class="form-group row">
                                <label for="image">上传图片: </label>
                                <div class="col-sm">
                                    <div class="text-center">
                                        <img src="<?php echo base_url('uploads/news/'); ?><?php echo $data->image; ?>" class="img-thumbnail" width="50%" height="50%" alt="">
                                    </div>
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