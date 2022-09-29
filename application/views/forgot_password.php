<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="<?php echo base_url('assets/image/icon.png')  ?>" />
    <title><?php echo $title; ?></title>
    <style>
        .logout {
            border: 3px solid #1d5770;
            border-radius: 20px;
            width: 350px;
        }

        .logo {
            margin-top: 5px;
        }

        form {
            margin-top: 20px;
            margin-left: 20px;
            margin-right: 20px;
        }

        .login {
            margin-left: 20px;
        }
    </style>
</head>

<body>
    <div class="icon">
        <div class="nav ml-5 mt-3">
            <img src="<?php echo base_url('assets/image/logo.png') ?>" width="25%" height="25%" alt="">
        </div>
    </div>
    <!-- Login -->
    <div class="container">
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>">
        </div>
        <?php if ($this->session->flashdata('flash')) : ?>
        <?php endif; ?>
        <div class=" col-sm-auto logout bg-light mx-auto my-5">
            <div class="form-logout mb-3">
                <form class="forgotpassword" method="POST" action="<?php echo base_url('Login/forgotPassword'); ?>" style="text-align: center;">
                    <img class="logo" src="<?php echo base_url('assets/image/icon.png') ?>" width="30%" alt="">
                    <h4 class="lupa mt-3" style="color: #1d5770;">更改密码</h4>
                    <div class="text-justify">
                        <div class="form-group">
                            <label for="email">电子邮件:</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="电子邮件" required>
                        </div>
                        <div class="form-group">
                            <label for="password">密码:</label>
                            <input type="password" class="form-control" name="password" id="password" placeholder="输入密码" required>
                        </div>
                        <div class="form-group">
                            <label for="">重复密码:</label>
                            <input type="password" class="form-control" name="password2" placeholder="输入密码" required>
                        </div>
                    </div>
                    <button type="submit" id="forgot_pwd" class="button btn" name="forgot_pwd" value="forgot_pwd" style="color: #FFFFFF; background-color:#1d5770;">更改密码</button>
                </form>
                <a href="<?php echo site_url('login') ?>" class="login" style="color: #1d5770; font-weight:500;text-decoration:none;">登录?</a>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="<?php echo base_url('assets/js/sweetalert2.all.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/scriptFP.js'); ?>"></script>

</body>

</html>