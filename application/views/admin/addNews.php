<div class="container-fluid">

    <!-- Page Heading -->
    <div class="container" style="font-family:Tahoma, Arial, Helvetica ; color:black;">
        <div class="addNews">
            <div class="card">
                <div class="card-header">
                    <h3 class="text-center my-2" style="font-family:Tahoma, Arial, Helvetica ;"><img src="<?php echo base_url('assets/image/newspaper.png'); ?>" alt=""> 学校信息</h3>
                </div>
                <div class="card-body">
                    <form action="<?php echo base_url('admin/inputNews'); ?>" method="POST" enctype="multipart/form-data">
                        <div class="form-group row">
                            <label for="title">标题: </label>
                            <div class="col-sm">
                                <input type="text" class="form-control" id="title" name="title" placeholder="输入标题" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="contents">内容: </label>
                            <div class="col-sm">
                                <textarea class="form-control" id="contents" name="contents" rows="10" required></textarea>
                            </div>
                        </div>
                        <input type="hidden" name="createdDate" id="createdDate" value="<?php echo date("Y-m-d"); ?>">
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