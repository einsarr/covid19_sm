<?php
/* Smarty version 3.1.30, created on 2020-06-24 09:25:54
  from "C:\xampp\htdocs\my_projects\frameworks\covid19_sm\src\view\offres\offre_favori.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ef30002c821f5_80849743',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2c1813a0388eee8ae6d9efa03e9ba0d9cb1de4ed' => 
    array (
      0 => 'C:\\xampp\\htdocs\\my_projects\\frameworks\\covid19_sm\\src\\view\\offres\\offre_favori.html',
      1 => 1592983282,
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
function content_5ef30002c821f5_80849743 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:src/view/layout_front/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 <?php $_smarty_tpl->_subTemplateRender("file:src/view/layout_front/topbar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="content-wrapper">
    <div class="container">
        <section class="content">
            <div class="row">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['offres']->value, 'offre');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['offre']->value) {
?>
                <div class="col-lg-4 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-aqua">
                        <div class="inner">
                            <h4 class="text-danger"><?php echo $_smarty_tpl->tpl_vars['offre']->value->getCategorie()->getLibelle();?>
 </h4>
                            <?php echo $_smarty_tpl->tpl_vars['offre']->value->getLibelle();?>

                            <p class="text-danger">
                                <?php echo $_smarty_tpl->tpl_vars['offre']->value->getEntreprise()->getNom_complet();?>

                            </p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </div>
        </section>
    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:src/view/layout_front/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
