<?php
/* Smarty version 3.1.30, created on 2020-06-22 14:09:27
  from "C:\xampp\htdocs\my_projects\frameworks\covid19_sm\src\view\layout\sidebar.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ef09f7707c9f4_40027910',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a75728c6fd4a266761ff871b5f688c098173b88c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\my_projects\\frameworks\\covid19_sm\\src\\view\\layout\\sidebar.html',
      1 => 1592698221,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ef09f7707c9f4_40027910 (Smarty_Internal_Template $_smarty_tpl) {
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
                <p>Moussa SARR</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="treeview">
                <a href="#">
                    <i class="fa  fa-users"></i>
                    <span>Clients</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Client"><i class="fa fa-circle-o"></i> Lister</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa  fa-folder-open"></i>
                    <span>Comptes</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Compte/liste"><i class="fa fa-circle-o"></i> Liste</a></li>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Operation"><i class="fa fa-circle-o"></i> Opérations</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-cogs"></i> <span>Administration</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Agence"><i class="fa fa-circle-o"></i> Agences</a></li>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Employeur"><i class="fa fa-circle-o"></i> Employeurs</a></li>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Caisse"><i class="fa fa-circle-o"></i> Caisses</a></li>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Employe"><i class="fa fa-circle-o"></i> Employés</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-user-secret"></i> <span>Sécurité</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Profil"><i class="fa fa-circle-o"></i> Profils</a></li>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
"><i class="fa fa-circle-o"></i> Permission</a></li>
                </ul>
            </li>

        </ul>
    </section>
    <!-- /.sidebar -->
</aside><?php }
}
