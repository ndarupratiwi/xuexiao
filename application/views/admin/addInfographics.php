<div class="container-fluid">

    <!-- Page Heading -->
    <div class="container" style="font-family:Tahoma, Arial, Helvetica ; color:black;">
        <div class="addInfographics">
            <div class="card">
                <div class="card-header">
                    <h3 class="text-center my-2" style="font-family:Tahoma, Arial, Helvetica ;"><i class="fas fa-chart-bar"></i> 信息图表</h3>
                </div>
                <div class="card-body col-sm-10 mx-auto">
                    <form action="<?php echo base_url('admin/inputInfographics'); ?>" method="POST">
                        <div class="row">
                            <div class="col">
                                <label for="title">标题</label>
                                <input type="text" class="form-control" id="title" name="title" placeholder="请输入标题" required>
                            </div>
                            <div class="col">
                                <label for="amount">数量</label>
                                <input type="text" class="form-control" id="amount" name="amount" placeholder="请输入数量" onkeypress="return event.charCode >= 48 && event.charCode <=57" required>
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