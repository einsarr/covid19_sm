<?php
/* Smarty version 3.1.30, created on 2020-06-24 09:14:10
  from "C:\xampp\htdocs\my_projects\frameworks\covid19_sm\src\view\admin\login.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ef2fd42d25d47_21564639',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '438a1aebd30f5f0c8ec6bc2df1e71bb58e9d6779' => 
    array (
      0 => 'C:\\xampp\\htdocs\\my_projects\\frameworks\\covid19_sm\\src\\view\\admin\\login.html',
      1 => 1592827694,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ef2fd42d25d47_21564639 (Smarty_Internal_Template $_smarty_tpl) {
?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<?php echo '<script'; ?>
 src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"><?php echo '</script'; ?>
>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>

<head>
    <title>Login Page</title>
    <!--Made with love by Mutiullah Samim -->

    <!--Bootsrap 4 CDN-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!--Fontawesome CDN-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <!--Custom styles-->
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/style.css">
</head>

<body>
    <div class="container">
        <div class="d-flex justify-content-center h-100">
            <div class="card">
                <div class="card-header">
                    <h3>CONNEXION</h3>
                </div>
                <div class="text-center">
                    <?php if (isset($_smarty_tpl->tpl_vars['message_success']->value)) {?> <span class="text-success"><?php echo $_smarty_tpl->tpl_vars['message_success']->value;?>
</span> <?php }?>
                </div>
                <div class="text-center">
                    <?php if (isset($_smarty_tpl->tpl_vars['message_error']->value)) {?> <span class="text-danger"><?php echo $_smarty_tpl->tpl_vars['message_error']->value;?>
</span> <?php }?>
                </div>
                <div class="card-body">
                    <form method="POST" action="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Login/logon">
                        <div class="input-group form-group ">
                            <div class="input-group-prepend ">
                                <span class="input-group-text "><i class="fas fa-user"></i></span>
                            </div>
                            <input type="email" class="form-control" placeholder="email" name="email">

                        </div>
                        <div class="input-group form-group ">
                            <div class="input-group-prepend ">
                                <span class="input-group-text "><i class="fas fa-key "></i></span>
                            </div>
                            <input type="password" class="form-control" placeholder="Mot de passe " name="password">
                        </div>
                        <div class="form-group ">
                            <input type="submit" value="Login" class="btn float-right login_btn ">
                        </div>
                    </form>
                </div>
                <div class="card-footer ">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Register/register">S'inscrire</a>
                </div>
            </div>
        </div>
    </div>
</body>

</html><?php }
}
