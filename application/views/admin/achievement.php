<div class="container-fluid" style="font-family:Tahoma, Arial, Helvetica ;">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>">
        </div>
        <?php if ($this->session->flashdata('flash')) : ?>
        <?php endif; ?>
        <div class="card-header py-3 d-flex justify-content-center">
            <img src="<?php echo base_url('assets/image/icon.png') ?>" width="5%" height="5%" alt="">
            <h5 class="font-weight-bold my-auto mx-2" style="color:#1d5770 ;">学生的成就</h5>
        </div>
        <div class="card-body">
            <div class="addAchievement d-flex justify-content-end mb-2">
                <a class="btn" href="<?php echo base_url('Admin/addAchievement') ?>" role="button" style="background-color:#1d5770;"><i class="fa fa-plus-square mr-2" style="color:white ;"></i><span style="color:white ;">成就</span></a>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead class="text-center">
                        <tr>
                            <th>数字</th>
                            <th>标题</th>
                            <th>姓名</th>
                            <th>描述</th>
                            <th>图片</th>
                            <th>行动</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($achievement as $data) {
                        ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $data->title; ?></td>
                                <td><?php echo $data->name; ?></td>
                                <td><?php echo $data->description; ?></td>
                                <td class="text-center"><img src="<?php echo base_url('uploads/achievement/' . $data->image) ?>" class="img-thumbnail" width="50%" height="50%"></td>
                                <td>
                                    <a style="color:red" class="fa fa-edit" href="<?php echo base_url('Admin/editAchievement/' . $data->id); ?>">&nbsp;</a>
                                    <a style="color:black" class="fas fa-trash-alt btnDelete" href="<?php echo base_url('Admin/deleteAchievement/' . $data->id); ?>">&nbsp;</a>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>