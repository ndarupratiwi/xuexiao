<div class="container-fluid" style="font-family:Tahoma, Arial, Helvetica ;">
    <div class="flash-login" data-flashdata="<?= $this->session->flashdata('login'); ?>">
    </div>
    <?php if ($this->session->flashdata('login')) : ?>
    <?php endif; ?>
    <!-- Page Heading -->
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-center">
            <img src="<?php echo base_url('assets/image/icon.png') ?>" width="7%" height="7%" alt="">
            <h5 class="font-weight-bold my-auto mx-2" style="color:#1d5770 ;">仪表板</h5>
        </div>
    </div>

    <div class="container mx-auto">
        <div class="row ">
            <!-- News Count -->
            <div class="col-sm-4 mb-4">
                <div class="row">
                    <div class="card shadow h-auto w-100 py-2" style="border-left-color:#1d5770; border-width:5px;">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-lg font-weight-bold text-uppercase mb-1" style="color:#1d5770 ;">
                                        学校新闻数量: </div>
                                    <div class="h5 mb-0 font-weight-bold]" style="color: #1d5770;">
                                        <?php echo $NewsCount; ?>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-newspaper fa-3x" style="color:#1d5770;"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card shadow h-auto w-100 py-2 my-2" style="border-left-color:#1d5770; border-width:5px;">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-lg font-weight-bold text-uppercase mb-1" style="color:#1d5770 ;">
                                        成就数量: </div>
                                    <div class="h5 mb-0 font-weight-bold]" style="color: #1d5770;">
                                        <?php echo $AchievementCount; ?>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-trophy fa-3x" style="color:#1d5770;"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card shadow h-auto w-100 py-2" style="border-left-color:#1d5770; border-width:5px;">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-lg font-weight-bold text-uppercase mb-1" style="color:#1d5770 ;">
                                        本月议程: </div>
                                    <?php
                                    $no = 1;
                                    foreach ($agenda as $data) {
                                    ?>
                                        <div class="h6 mb-0 font-weight-bold]" style="color: #1d5770;">
                                            <?php echo $no++; ?><?php echo $data->title; ?> | <?php echo $data->agendaDate; ?>
                                        </div>
                                    <?php } ?>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-calendar fa-3x" style="color:#1d5770;"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Infographics -->
            <div class="col-sm-8 mb-4">
                <div class="card shadow">
                    <div class="card-header py-3">
                        <h5 class="m-0 font-weight-bold" style="color:#1d5770 ;">信息图表</h5>
                    </div>
                    <div class="card-body">
                        <div class="chart-bar">
                            <canvas id="myChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>

            <script src="<?php echo base_url('assets/sbadmin/vendor/chart.js/Chart.min.js') ?>"></script>
            <script type="text/javascript">
                var ctx = document.getElementById('myChart').getContext('2d');
                var chart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: [
                            <?php
                            if (count($graph) > 0) {
                                foreach ($graph as $data) {
                                    echo "'" . $data->title . "',";
                                }
                            }
                            ?>
                        ],
                        datasets: [{
                            label: '信息图表',
                            backgroundColor: "#1d5770",
                            hoverBackgroundColor: "#1B44A2",
                            borderColor: "#1d5770",
                            data: [
                                <?php
                                if (count($graph) > 0) {
                                    foreach ($graph as $data) {
                                        echo $data->amount . ", ";
                                    }
                                }
                                ?>
                            ]
                        }]
                    },
                });
            </script>
        </div>
    </div>

</div>