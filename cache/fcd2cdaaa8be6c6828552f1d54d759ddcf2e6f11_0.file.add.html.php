<?php
/* Smarty version 3.1.30, created on 2020-06-24 18:05:00
  from "C:\xampp\htdocs\my_projects\frameworks\covid19_sm\src\view\Reponses\add.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ef379ac67a360_43760349',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fcd2cdaaa8be6c6828552f1d54d759ddcf2e6f11' => 
    array (
      0 => 'C:\\xampp\\htdocs\\my_projects\\frameworks\\covid19_sm\\src\\view\\Reponses\\add.html',
      1 => 1593002467,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:src/view/layout/header.html' => 1,
    'file:src/view/layout/topbar.html' => 1,
    'file:src/view/layout/sidebar.html' => 1,
    'file:src/view/layout/footer.html' => 1,
  ),
),false)) {
function content_5ef379ac67a360_43760349 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:src/view/layout/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 <?php $_smarty_tpl->_subTemplateRender("file:src/view/layout/topbar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:src/view/layout/sidebar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="content-wrapper">
    <div class="container">
        <section class="content">
            <div class="col-md-6">
                <!-- /.box -->
                <div class="box ">
                    <div class="box-header">
                        POSTULER A UNE OFFRE
                    </div>
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
Reponse/save" enctype="multipart/form-data">
                            <div class="form-group">
                                <input type="hidden" name="user_id" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->getId();?>
" id="user_id">
                            </div>
                            <div class="form-group">
                                <label class="">L'offre</label>
                                <select class="form-control" name="offre_id" id="offre_id">
                                    <option value="">---Choix de l'offre---</option>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['offres']->value, 'offre');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['offre']->value) {
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['offre']->value->getId();?>
"><?php echo $_smarty_tpl->tpl_vars['offre']->value->getLibelle();?>
</option>
                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                </select>
                            </div>
                            <div class="form-group">
                                <label for="libelle">Contenu</label>
                                <textarea rows="4" cols="30" class="form-control" name="libelle"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="libelle">Description</label>
                                <textarea name="description" id="description" cols="30" rows="3" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <input type="submit" name="action" class="btn btn-primary" value="Enrégistrer" />
                            </div>
                        </form>
                    </div>

                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
        </section>
    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:src/view/layout/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
