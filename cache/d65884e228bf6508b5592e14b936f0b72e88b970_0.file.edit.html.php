<?php
/* Smarty version 3.1.30, created on 2020-06-25 01:09:35
  from "C:\xampp\htdocs\my_projects\frameworks\covid19_sm\src\view\cv\edit.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ef3dd2f835b41_19093801',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd65884e228bf6508b5592e14b936f0b72e88b970' => 
    array (
      0 => 'C:\\xampp\\htdocs\\my_projects\\frameworks\\covid19_sm\\src\\view\\cv\\edit.html',
      1 => 1592927893,
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
function content_5ef3dd2f835b41_19093801 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:src/view/layout/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 <?php $_smarty_tpl->_subTemplateRender("file:src/view/layout/topbar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:src/view/layout/sidebar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h3 class="box-title">MODIFICATION DE MON CV</h3>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- /.box -->
        <div class="box">
            <div class="box-header">

            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <form method="POST" action="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Cv/update" class="col-md-6">
                    <div class="form-group">
                        <input type="hidden" name="cv_id" id="cv_id" value="<?php echo $_smarty_tpl->tpl_vars['cv']->value->getId();?>
">
                        <input type="hidden" name="user_id" id="user_id" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->getId();?>
">
                    </div>
                    <div class="form-group">
                        <label for="cni">Expérience professionnelle</label>
                        <textarea name="experience" id="experience" cols="30" rows="10" class="form-control">
                            <?php echo $_smarty_tpl->tpl_vars['cv']->value->getExperience();?>

                        </textarea>
                    </div>
                    <div class="form-group">
                        <label for="cni">Formation</label>
                        <textarea name="formation" id="formation" cols="30" rows="10" class="form-control">
                            <?php echo $_smarty_tpl->tpl_vars['cv']->value->getFormation();?>

                        </textarea>
                    </div>
                    <div class="form-group">
                        <label for="cni">Compétences</label>
                        <textarea name="competence" id="competence" cols="30" rows="10" class="form-control">
                            <?php echo $_smarty_tpl->tpl_vars['cv']->value->getCompetence();?>

                        </textarea>
                    </div>
                    <div class="form-group">
                        <label for="cni">Divers</label>
                        <textarea name="divers" id="divers" cols="30" rows="10" class="form-control">
                            <?php echo $_smarty_tpl->tpl_vars['cv']->value->getDivers();?>

                        </textarea>
                    </div>

                    <div class="form-group">
                        <input type="submit" name="action" class="btn btn-warning" value="Mèttre à jour" />
                        <button type="button" class="btn btn-danger">Fermer</button>
                    </div>
                </form>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </section>
    <!-- /.content -->
</div>
<?php $_smarty_tpl->_subTemplateRender("file:src/view/layout/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
