<?php
/* Smarty version 3.1.30, created on 2020-06-22 12:09:49
  from "C:\xampp\htdocs\my_projects\frameworks\covid19_sm\src\view\admin\accueil.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ef0836d4f7116_30448339',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c8afb8f884bba4a82ee461128f5c4fb0ec567314' => 
    array (
      0 => 'C:\\xampp\\htdocs\\my_projects\\frameworks\\covid19_sm\\src\\view\\admin\\accueil.html',
      1 => 1592818940,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:src/view/layout_front/header.html' => 1,
    'file:src/view/layout_front/topbar.html' => 1,
    'file:src/view/layout_front/footer.html' => 1,
  ),
),false)) {
function content_5ef0836d4f7116_30448339 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- Full Width Column -->
<?php $_smarty_tpl->_subTemplateRender("file:src/view/layout_front/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 <?php $_smarty_tpl->_subTemplateRender("file:src/view/layout_front/topbar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="content-wrapper">
    <div class="container">
        <!-- Main content -->
        <section class="content">
            <marquee behavior="12" direction="left">
                <h3>Bienvenue dans le site de recherche d'offre d'emploi</h3>
            </marquee>
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
                </ol>
                <div class="carousel-inner">
                    <div class="item active">
                        <!--<img src="http://placehold.it/900x500/39CCCC/ffffff&text=Vous+chercher+un+Job" alt="First slide" width="100%">-->
                        <img src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/image/demande_emploi.png" alt="First slide" width="100%">
                        <div class="carousel-caption">
                            Job
                        </div>
                    </div>
                    <div class="item">
                        <!-- <img src="http://placehold.it/900x500/3c8dbc/ffffff&text=Vous+chercher+un+stage" alt="Second slide" width="100%">-->
                        <img src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/image/stagiaire.jpg" alt="First slide" width="100%">
                        <div class="carousel-caption">
                            stage
                        </div>
                    </div>
                    <div class="item">
                        <!--<img src="http://placehold.it/900x500/f39c12/ffffff&text=Vous+êtes+Entrepreneur" alt="Third slide" width="100%">-->
                        <img src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/image/offre_emploi.png" alt="First slide" width="100%">
                        <div class="carousel-caption">
                            Employeur
                        </div>
                    </div>
                </div>
                <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                    <span class="fa fa-angle-left"></span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                    <span class="fa fa-angle-right"></span>
                </a>
            </div>

            <br> <b></b>
            <div class="row">
                <?php if (isset($_smarty_tpl->tpl_vars['offres']->value)) {?> <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['offres']->value, 'offre');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['offre']->value) {
?>
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->

                    <?php if ($_smarty_tpl->tpl_vars['offre']->value->getCategorie()->getId() == 1) {?>
                    <div class="small-box bg-aqua">
                        <?php } elseif ($_smarty_tpl->tpl_vars['offre']->value->getCategorie()->getId() == 2) {?>
                        <div class="small-box bg-green">
                            <?php } elseif ($_smarty_tpl->tpl_vars['offre']->value->getCategorie()->getId() == 3) {?>
                            <div class="small-box bg-red">
                                <?php } elseif ($_smarty_tpl->tpl_vars['offre']->value->getCategorie()->getId() == 4) {?>
                                <div class="small-box bg-orange">
                                    <?php } elseif ($_smarty_tpl->tpl_vars['offre']->value->getCategorie()->getId() == 5) {?>
                                    <div class="small-box bg-yellow">
                                        <?php } else { ?>
                                        <div class="small-box bg-blue">
                                            <?php }?>



                                            <div class="inner">
                                                <h4 class="text-danger"><?php echo $_smarty_tpl->tpl_vars['offre']->value->getCategorie()->getLibelle();?>
 </h4>

                                                <p><?php echo $_smarty_tpl->tpl_vars['offre']->value->getlibelle();?>
</p>
                                            </div>
                                            <div class="icon">
                                                <i class="ion ion-bag"></i>
                                            </div>
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Offre/postuler/<?php echo $_smarty_tpl->tpl_vars['offre']->value->getId();?>
" class="small-box-footer text-danger">postuler <i class="fa fa-arrow-circle-right"></i></a>
                                        </div>
                                    </div>
                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
 <?php }?>
                                </div>
        </section>
        <!-- /.content -->
        <?php $_smarty_tpl->_subTemplateRender("file:src/view/layout_front/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
