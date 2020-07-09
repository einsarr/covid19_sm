<?php
/* Smarty version 3.1.30, created on 2020-07-09 01:59:21
  from "C:\xampp\htdocs\my_projects\frameworks\covid19_sm\src\view\layout_front\topbar.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f065dd9c66cd2_19970780',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '34bf49ae675fd10f040ab4e2b72522689a527cc7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\my_projects\\frameworks\\covid19_sm\\src\\view\\layout_front\\topbar.html',
      1 => 1594252758,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f065dd9c66cd2_19970780 (Smarty_Internal_Template $_smarty_tpl) {
?>
<header class="main-header">
    <nav class="navbar navbar-static-top">
        <div class="container">
            <div class="navbar-header">
                <a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Welcome" class="navbar-brand"><b>Accueil</b></a>
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                    <i class="fa fa-bars"></i>
                </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="" data-toggle="modal" class='btn btn-info view-reponse' data-target="#modalPresentation">Qui sommes-nous ? <span class="sr-only">(current)</span></a></li>

                </ul>

            </div>
            <!-- /.navbar-collapse -->
            <!-- Navbar Right Menu -->
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- Tasks Menu -->
                    <li class="dropdown tasks-menu">
                        <!-- Menu Toggle Button -->
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-flag-o"></i>
                            <span class="label label-danger">9</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="footer">
                                <a href="#">View all tasks</a>
                            </li>
                        </ul>
                    </li>
                    <!-- User Account Menu -->
                    <li class="dropdown user user-menu">
                        <!-- Menu Toggle Button -->
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <!-- The user image in the navbar-->
                            <!-- hidden-xs hides the username on small devices so only the image appears. -->
                            <span class="fa fa-lock"> Compte</span>
                        </a>
                        <ul class="dropdown-menu">

                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Register" class="btn btn-info btn-flat">Ouvrir un compte</a>
                                </div>
                                <div class="pull-right">
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Login/login" class="btn btn-primary btn-flat">Se connecter</a>
                                </div><br>
                            </li>

                        </ul>
                    </li>
                    <?php if (isset($_smarty_tpl->tpl_vars['user']->value)) {?>
                    <li class="dropdown user user-menu">
                        <!-- Menu Toggle Button -->
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <!-- The user image in the navbar-->
                            <!-- hidden-xs hides the username on small devices so only the image appears. -->
                            <span class="fa fa-user"> 
                                <?php echo $_smarty_tpl->tpl_vars['user']->value->getNom_complet();?>

                            </span>
                        </a>
                        <ul class="dropdown-menu">

                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
User/profil" class="btn btn-warning btn-flat">Mon profil</a>
                                </div>
                                <div class="pull-right">
                                    <a href="" class="btn btn-danger btn-flat">Se Déconnecter</a>
                                </div><br>
                            </li>
                        </ul>
                    </li>
                    <?php }?>
                </ul>
            </div>
            <!-- /.navbar-custom-menu -->
        </div>
        <!-- /.container-fluid -->
    </nav>
</header>


<div class="modal fade" id="modalPresentation">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close " data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true ">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="modal-body ">
                    <h2>BIENVENUE SUR LE SITE DE RECHERCHE ET D'OFFFRES D'EMPLOI</h2>
                    <img src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/image/offres.jpg" width="100%" />
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Fermer</button>
            </div>
        </div>
    </div>
    <!-- /.modal-dialog -->
</div>
<?php echo '<script'; ?>
>
    $(document).ready(function() {
        $(window).on('load', function() {
            $('#modalPresentation').modal('show');
        });
    });
<?php echo '</script'; ?>
><?php }
}
