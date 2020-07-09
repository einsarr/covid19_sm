<?php
/* Smarty version 3.1.30, created on 2020-06-25 01:15:12
  from "C:\xampp\htdocs\my_projects\frameworks\covid19_sm\src\view\offres\postuler.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ef3de8075f733_30918134',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7b255e229e3aec25c5d8ee03db0d19611b58d8ad' => 
    array (
      0 => 'C:\\xampp\\htdocs\\my_projects\\frameworks\\covid19_sm\\src\\view\\offres\\postuler.html',
      1 => 1592698221,
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
function content_5ef3de8075f733_30918134 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:src/view/layout_front/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 <?php $_smarty_tpl->_subTemplateRender("file:src/view/layout_front/topbar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="content-wrapper">
    <div class="container">
        <section class="content">
            <div class="col-md-12">
                <!-- /.box -->
                <div class="box ">
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="text-center">
                            <?php if (isset($_smarty_tpl->tpl_vars['message_success']->value)) {?> <span class="text-success"><?php echo $_smarty_tpl->tpl_vars['message_success']->value;?>
</span> <?php }?>
                        </div>
                        <div class="text-center">
                            <?php if (isset($_smarty_tpl->tpl_vars['message_error']->value)) {?> <span class="text-danger"><?php echo $_smarty_tpl->tpl_vars['message_error']->value;?>
</span> <?php }?>
                        </div>
                        <form method="POST" action="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Reponse/save">
                            <div class="form-group">
                                <label>Titre</label>
                                <input type="hidden" name="offre_id" value="<?php echo $_smarty_tpl->tpl_vars['offre']->value;?>
">
                                <input type="text" class="form-control" name="libelle">
                            </div>
                            <div class="form-group">
                                <label>Lettre de motivation</label>
                                <textarea name="description" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <input type="submit" name="action" class="btn btn-primary" value="Enrégistrer" />
                            </div>
                        </form>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
        </section>
        </div>
    </div>
    <?php $_smarty_tpl->_subTemplateRender("file:src/view/layout_front/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
