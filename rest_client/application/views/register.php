<html>
<head>
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/img/logoo.jpg">
    <title>Halaman Register</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <style>
        .form-signin
        {
            max-width: 330px;
            padding: 15px;
            margin: 0 auto;
        }
        .form-signin .form-signin-heading, .form-signin .checkbox
        {
            margin-bottom: 10px;
        }
        .form-signin .checkbox
        {
            font-weight: normal;
        }
        .form-signin .form-control
        {
            position: relative;
            font-size: 16px;
            height: auto;
            padding: 10px;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }
        .form-signin .form-control:focus
        {
            z-index: 2;
        }
        .form-signin input[type="text"]
        {
            margin-bottom: -1px;
            border-bottom-left-radius: 0;
            border-bottom-right-radius: 0;
        }
        .form-signin input[type="password"]
        {
            margin-bottom: 10px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }
        .account-wall
        {
            margin-top: 20px;
            padding: 40px 0px 20px 0px;
            background-color: #f7f7f7;
            -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
            -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
            box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
            border-radius: 7px 7px 7px 7px;
        }
        .create-footer {
            margin: 0 -30px -40px -30px;
            padding: 15px 0 17px 0;
            text-align: center;
            background-color: #6c7a8d;
            -webkit-border-radius: 0 0 7px 7px;
            -moz-border-radius: 0 0 7px 7px;
            -ms-border-radius: 0 0 7px 7px;
            -o-border-radius: 0 0 7px 7px;
            border-radius: 0 0 7px 7px;
        }
        .login-title
        {
            color: #555;
            font-size: 18px;
            font-weight: 400;
            display: block;
        }
        .profile-img
        {
            width: 96px;
            height: 96px;
            margin: 0 auto 10px;
            display: block;
            -moz-border-radius: 50%;
            -webkit-border-radius: 50%;
            border-radius: 50%;
        }
        .need-help
        {
            margin-top: 10px;
        }
        .new-account
        {
            display: block;
            margin-top: 10px;
        }
    </style>
</head>
<body style="background-image:url(http://pmw.etupolinema.org/assets/img/bg5.png)">
<div class="container" style="margin-top: 30px">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <h1 class="text-center login-title">Register Dosen</h1>
            <?php if(isset($error)) { echo $error; }; ?>
            <div class="account-wall">
                <img class="profile-img" src="<?php echo base_url(); ?>assets/img/logoo.jpg" alt="Logo ETU">    
                <form class="form-signin" method="POST" action="<?php echo base_url() ?>index.php/login/register">
                <div class="form-group ">
                    <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama Anda" 
                    value="<?= set_value('nama');?>">
                    <?php echo form_error('nama'); ?>
                </div>
                <div class="form-group" >
                    <input type="text" id="username" name="username" class="form-control" placeholder="Username">
                    <?php echo form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group row">
                    <div class="col-sm-5 mb-3 mb-sm-0">
                    <input type="password" id="password1" name="password1" class="form-control" placeholder="Password"
                    value="<?= set_value('password1');?>">
                    <?php echo form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="col-sm-7">
                    <input type="password" id="password2" name="password2" class="form-control" placeholder="Ulangi Password"
                    value="<?= set_value('password2');?>">
                    </div>
                </div>
                <button class="btn btn-lg btn-primary btn-block" value="register" name="btn-regist" id="btn-regist" type="submit">
                    Register</button>
                <label class="checkbox pull-left">
                    <input type="checkbox" value="remember-me">
                    Ingatkan Saya
                </label>
                <a href="#" class="pull-right need-help">Butuh bantuan? </a><span class="clearfix"></span>
                <div class="create-footer" style="color:#FFFFFF;font-weight:bold">
                    2020 © SINPEL PMW POLINEMA - 1
                </div>
                </form>
            </div>
            <a href="<?= base_url('index.php/login') ?>" class="text-center new-account">Sudah Memiliki Akun? Login </a>
            <div id="error" style="margin-top: 10px"></div>
        </div>
    </div>
</div>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
</body>
</html>