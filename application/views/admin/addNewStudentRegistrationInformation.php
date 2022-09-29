<div class="container-fluid">

    <!-- Page Heading -->
    <div class="container" style="font-family:Tahoma, Arial, Helvetica ; color:black;">
        <div class="addNewStudentRegistrationInformation">
            <div class="card">
                <div class="card-header">
                    <h3 class="text-center my-2" style="font-family:Tahoma, Arial, Helvetica ;"><img src="<?php echo base_url('assets/image/form.png'); ?>" alt=""> 新学生注册信息</h3>
                </div>
                <div class="card-body">
                    <form action="<?php echo base_url('admin/inputRegistrationInformation'); ?>" method="POST" enctype="multipart/form-data">
                        <div class="form-group row">
                            <label for="title">标题: </label>
                            <div class="col-sm">
                                <input type="text" class="form-control" id="title" name="title" placeholder="输入标题" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="information">信息: </label>
                            <div class="col-sm">
                                <textarea type="text" class="form-control" id="information" name="information" rows="10" placeholder="请输入新的学生注册信息" required></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="image">上传图片: </label>
                            <div class="col-sm">
                                <input type="file" class="form-control-file" id="image" name="image" required>
                                <p>照片必须为 .jpg、.jpeg、.png 或 .svg 格式。 最大大小 2MB。</p>
                            </div>
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