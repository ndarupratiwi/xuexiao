<div class="container-fluid">

    <!-- Page Heading -->
    <div class="container" style="font-family:Tahoma, Arial, Helvetica ; color:black;">
        <div class="addMission">
            <div class="card">
                <div class="card-header">
                    <h3 class="text-center my-2" style="font-family:Tahoma, Arial, Helvetica ;"><img src="<?php echo base_url('assets/image/goal.png'); ?>" alt=""> 学校使命</h3>
                </div>
                <div class="card-body">
                    <form action="<?php echo base_url('admin/inputMission'); ?>" method="POST">
                        <div class="form-group">
                            <label for="mission">使命: </label>
                            <textarea class="form-control" id="mission" name="mission" rows="3" placeholder="请输入使命" required></textarea>
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