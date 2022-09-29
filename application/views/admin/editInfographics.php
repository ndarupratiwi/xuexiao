<div class="container-fluid">

    <!-- Page Heading -->
    <div class="container" style="font-family:Tahoma, Arial, Helvetica ; color:black;">
        <div class="updateInfographics">
            <div class="card">
                <?php
                foreach ($editInfographics as $data) {
                ?>
                    <div class="card-header">
                        <h3 class="text-center my-2" style="font-family:Tahoma, Arial, Helvetica ;"><i class="fas fa-chart-bar"></i> 信息图表</h3>
                    </div>
                    <div class="card-body col-sm-10 mx-auto">
                        <form action="<?php echo base_url('admin/updateInfographics'); ?>" method="POST">
                            <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $data->id; ?>">
                            <div class="row">
                                <div class="col">
                                    <label for="title">标题</label>
                                    <input type="text" class="form-control" id="title" name="title" value="<?php echo $data->title; ?>" required>
                                </div>
                                <div class="col">
                                    <label for="amount">数量</label>
                                    <input type="text" class="form-control" id="amount" name="amount" onkeypress="return event.charCode >= 48 && event.charCode <=57" value="<?php echo $data->amount; ?>" required>
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