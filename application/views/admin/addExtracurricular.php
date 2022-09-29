<div class="container-fluid">

    <!-- Page Heading -->
    <div class="container" style="font-family:Tahoma, Arial, Helvetica ; color:black;">
        <div class="addExtracurricular">
            <div class="card">
                <div class="card-header">
                    <h3 class="text-center my-2" style="font-family:Tahoma, Arial, Helvetica ;"><img src="<?php echo base_url('assets/image/lifestyle.png'); ?>" alt=""> 添加课外活动</h3>
                </div>
                <div class="card-body">
                    <form action="<?php echo base_url('admin/inputExtracurricular'); ?>" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="name">课外活动名称: </label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="请输入课外活动名称" required>
                        </div>
                        <div class="form-group">
                            <label for="description">描述: </label>
                            <textarea class="form-control" id="description" name="description" rows="5" required></textarea>
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