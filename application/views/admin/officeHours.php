<div class="container-fluid" style="font-family:Tahoma, Arial, Helvetica ;">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>">
        </div>
        <?php if ($this->session->flashdata('flash')) : ?>
        <?php endif; ?>
        <div class="card mx-auto">
            <div class="card-header">
                <div class="card-header py-3 d-flex justify-content-center">
                    <img src="<?php echo base_url('assets/image/icon.png') ?>" width="5%" height="5%" alt="">
                    <h5 class="font-weight-bold my-auto mx-2" style="color:#1d5770 ;">工作时间</h5>
                </div>
            </div>
            <div class="card-body">
                <div class="d-flex justify-content-center">
                    <div class="col-sm-6">
                        <table class="table table-striped" width="100%" cellspacing="0">
                            <thead class="text-center">
                                <tr>
                                    <th>日</th>
                                    <th>点钟</th>
                                    <th>行动</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <?php
                                foreach ($officeHours as $data) {
                                ?>
                                    <tr>
                                        <td><?php echo $data->day; ?></td>
                                        <td><?php echo $data->time_start; ?> - <?php echo $data->time_end; ?></td>
                                        <td>
                                            <a style="color:red" class="fa fa-edit" href="<?php echo base_url('Admin/editOfficeHours/' . $data->id); ?>">&nbsp;</a>
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
    </div>

</div>