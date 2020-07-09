<?php
/* Smarty version 3.1.30, created on 2020-06-24 09:14:20
  from "C:\xampp\htdocs\my_projects\frameworks\covid19_sm\src\view\users\register.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ef2fd4c8de263_03738974',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b6e9153400c75500c4fd0b73e16d11fbafadc8a1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\my_projects\\frameworks\\covid19_sm\\src\\view\\users\\register.html',
      1 => 1592827251,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ef2fd4c8de263_03738974 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Inscription</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/template/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/template/bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/template/bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/template/dist/css/AdminLTE.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/template/plugins/iCheck/square/blue.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
  <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"><?php echo '</script'; ?>
>
  <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition register-page">
    <div class="register-box">
        <div class="register-logo">
            <a href=""><b>INSCRIPTION</b>COVID19_SM</a>
        </div>

        <div class="register-box-body">
            <p class="login-box-msg">Remplir le formulaire ci-après</p>
            <div class="text-center">
                <?php if (isset($_smarty_tpl->tpl_vars['message_success']->value)) {?> <span class="text-success"><?php echo $_smarty_tpl->tpl_vars['message_success']->value;?>
</span> <?php }?>
            </div>
            <div class="text-center">
                <?php if (isset($_smarty_tpl->tpl_vars['message_error']->value)) {?> <span class="text-danger"><?php echo $_smarty_tpl->tpl_vars['message_error']->value;?>
</span> <?php }?>
            </div>
            <form action="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Register/registe" method="post">
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" placeholder="Nom complet" name="nom_complet">
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="email" class="form-control" placeholder="Email" name="email">
                    <span class=" glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback ">
                    <input type="password" class="form-control" placeholder="Mot de passe" name="password">
                    <span class=" glyphicon glyphicon-lock form-control-feedback "></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" placeholder="Retapez le mot de passe ">
                    <span class="glyphicon glyphicon-log-in form-control-feedback "></span>
                </div>
                <div class="form-group has-feedback ">
                    <input type="text" class="form-control " placeholder="Téléphone" name="telephone">
                    <span class="glyphicon glyphicon-phone form-control-feedback "></span>
                </div>
                <div class="form-group has-feedback ">
                    <input type="text" class="form-control" placeholder="Adresse" name="adresse">
                    <span class="glyphicon glyphicon-user form-control-feedback "></span>
                </div>
                <div class="form-group has-feedback ">
                    <select name="profil_id" id="profil_id" class="form-control ">
                        <option value="">Selectionner le profil</option>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['profils']->value, 'profil');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['profil']->value) {
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['profil']->value->getId();?>
"><?php echo $_smarty_tpl->tpl_vars['profil']->value->getLibelle();?>
</option>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                    </select>
                </div>
                <div class="row">

                    <!-- /.col -->
                    <div class="col-xs-4">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Valider</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>
            <a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Login/login" class="text-center">Se connecter</a>
        </div>
        <!-- /.form-box -->
    </div>
    <!-- /.register-box -->

    <!-- jQuery 3 -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/template/bower_components/jquery/dist/jquery.min.js"><?php echo '</script'; ?>
>
    <!-- Bootstrap 3.3.7 -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/template/bower_components/bootstrap/dist/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <!-- iCheck -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/template/plugins/iCheck/icheck.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
        $(function() {
            $('input').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%' // optional
            });
        });
    <?php echo '</script'; ?>
>
</body>

</html><?php }
}
