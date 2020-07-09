<?php
/* Smarty version 3.1.30, created on 2020-06-24 14:12:12
  from "C:\xampp\htdocs\my_projects\frameworks\covid19_sm\src\view\layout\sidebar.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ef3431c72ebd9_29886779',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a75728c6fd4a266761ff871b5f688c098173b88c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\my_projects\\frameworks\\covid19_sm\\src\\view\\layout\\sidebar.html',
      1 => 1593000444,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ef3431c72ebd9_29886779 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/image/sarr.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p><?php echo $_smarty_tpl->tpl_vars['user']->value->getNom_complet();?>
</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <?php if ($_smarty_tpl->tpl_vars['user']->value->getProfil()->getLibelle() == "DEMANDEUR_EMPLOI") {?>
        <!-- search form -->
        <form action="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Offre/offre_search" method="post" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="motCle" class="form-control" placeholder="Rechercher une offre">
                <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <?php }?> <?php if ($_smarty_tpl->tpl_vars['user']->value->getProfil()->getLibelle() == "DEMANDEUR_EMPLOI") {?>
        <!-- search form -->
        <form action="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Offre/offref_search" method="post" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="motCle" class="form-control" placeholder="Rechercher une offre favori">
                <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <?php }?>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <?php if ($_smarty_tpl->tpl_vars['user']->value->getProfil()->getLibelle() == "ENTREPRISE") {?>
            <li class="treeview">
                <a href="#">
                    <i class="fa  fa-cogs"></i>
                    <span>Entreprise</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Offre/add/<?php echo $_smarty_tpl->tpl_vars['user']->value->getId();?>
"><i class="fa fa-circle-o"></i> Poster une offre</a></li>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Offre/liste/<?php echo $_smarty_tpl->tpl_vars['user']->value->getId();?>
"><i class="fa fa-circle-o"></i> Nos offres</a></li>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Offre/liste/<?php echo $_smarty_tpl->tpl_vars['user']->value->getId();?>
"><i class="fa fa-circle-o"></i> Voir les réponses</a></li>
                </ul>
            </li>
            <?php }?> <?php if ($_smarty_tpl->tpl_vars['user']->value->getProfil()->getLibelle() == "DEMANDEUR_EMPLOI") {?>
            <li class="treeview">
                <a href="#">
                    <i class="fa  fa-folder-open"></i>
                    <span>Demandeur d'emploi</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
User/profil/<?php echo $_smarty_tpl->tpl_vars['user']->value->getId();?>
"><i class="fa fa-circle-o"></i> Créer cv</a></li>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Cv/view/<?php echo $_smarty_tpl->tpl_vars['user']->value->getId();?>
"><i class="fa fa-circle-o"></i> Mon cv</a></li>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Reponse/repondre/<?php echo $_smarty_tpl->tpl_vars['user']->value->getId();?>
"><i class="fa fa-circle-o"></i> Réponre à une offre</a></li>
                </ul>
            </li>
            <?php }?>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside><?php }
}
