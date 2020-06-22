<?php
/* Smarty version 3.1.30, created on 2020-06-22 13:39:16
  from "C:\xampp\htdocs\my_projects\frameworks\covid19_sm\src\view\layout_front\topbar.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ef0986418dcb3_92753922',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '34bf49ae675fd10f040ab4e2b72522689a527cc7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\my_projects\\frameworks\\covid19_sm\\src\\view\\layout_front\\topbar.html',
      1 => 1592825951,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ef0986418dcb3_92753922 (Smarty_Internal_Template $_smarty_tpl) {
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
                    <li class="active"><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Welcome/presentation">Qui sommes-nous ? <span class="sr-only">(current)</span></a></li>

                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Cv/add">Mon CV</a></li>

                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Offre/add">Ajouter une offre</a></li>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Categorie/add">Ajouter catégorie</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Catégories <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <?php if (isset($_smarty_tpl->tpl_vars['categories']->value)) {?> <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'categorie');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['categorie']->value) {
?>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Offre/get/<?php echo $_smarty_tpl->tpl_vars['categorie']->value->getId();?>
"><?php echo $_smarty_tpl->tpl_vars['categorie']->value->getLibelle();?>
</a></li>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
 <?php }?>
                        </ul>
                    </li>
                </ul>
                <form class="navbar-form navbar-left" role="search" method="post" action="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Offre/offre_search">
                    <div class="form-group">
                        <input type="text" name="motCle" class="form-control" id="navbar-search-input" placeholder="Saisir un mot clé">
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="search">
                    </div>
                </form>
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
</header><?php }
}
