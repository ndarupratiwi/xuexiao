<div class="container-fluid">

    <!-- Page Heading -->
    <div class="container" style="font-family:Tahoma, Arial, Helvetica ; color:black;">
        <div class="addAchievement">
            <div class="card">
                <div class="card-header">
                    <h3 class="text-center my-2" style="font-family:Tahoma, Arial, Helvetica ;"><img src="<?php echo base_url('assets/image/add-image.png'); ?>" alt=""> 学生的成就</h3>
                </div>
                <div class="card-body">
                    <form action="<?php echo base_url('admin/inputAchievement'); ?>" method="POST" enctype="multipart/form-data">
                        <div class="form-row">
                            <div class="col">
                                <label for="title">标题: </label>
                                <input type="text" class="form-control" id="title" name="title" placeholder="输入标题" required>
                            </div>
                            <div class="col">
                                <label for="name">名字: </label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="输入名字" required>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <label for="description">描述: </label>
                            <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="image">上传图片: </label>
                            <input type="file" class="form-control-file" id="image" name="image" required>
                            <p>照片必须为 .jpg、.jpeg、.png 或 .svg 格式。 最大大小 2MB。</p>

                        </div>
                        <div class="col-sm-12 text-center my-3">
                            <button type="submit" id="send" name="send" value="send" class="btn" style="background-color:#1d5770; color:white;">输入</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>