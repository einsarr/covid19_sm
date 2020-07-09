<?php
/* Smarty version 3.1.30, created on 2020-06-24 13:52:26
  from "C:\xampp\htdocs\my_projects\frameworks\covid19_sm\src\view\offres\liste.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ef33e7a5e5886_51183482',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a1beddccc0c03d6390e546219cac35c8909d7d1f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\my_projects\\frameworks\\covid19_sm\\src\\view\\offres\\liste.html',
      1 => 1592999544,
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
function content_5ef33e7a5e5886_51183482 (Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php $_smarty_tpl->_subTemplateRender("file:src/view/layout/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 <?php $_smarty_tpl->_subTemplateRender("file:src/view/layout/topbar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:src/view/layout/sidebar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- /.box -->
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">LISTE DE MES OFFRES</h3>
            </div>
            <!-- /.box-header -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalOffre">
                <i class="fa fa-plus"></i> Nouveau
              </button><br>

            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>N°</th>
                            <th>Libellé</th>
                            <th>Favori</th>
                            <th>Catégorie</th>
                            <th>Options</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $_smarty_tpl->_assignInScope('num', 1);
?> <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['offres']->value, 'offre');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['offre']->value) {
?>
                        <tr>
                            <td><?php echo $_smarty_tpl->tpl_vars['num']->value++;?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['offre']->value->getLibelle();?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['offre']->value->getFavori();?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['offre']->value->getCategorie()->getLibelle();?>
</td>
                            <td>
                                <!-- <a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Offre/edit/<?php echo $_smarty_tpl->tpl_vars['user']->value->getId();?>
" class="btn btn-warning"><span class="fa fa-edit"></span></a> -->
                                <button type='button' name='edit' id="<?php echo $_smarty_tpl->tpl_vars['user']->value->getId();?>
" data-toggle="modal" class='btn btn-info view-reponse' data-target="#modalReponse" value="<?php echo $_smarty_tpl->tpl_vars['offre']->value->getId();?>
"><span class='fa fa-eye'></span></button>
                            </td>
                        </tr>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                    </tbody>
                </table>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </section>
    <!-- /.content -->
</div>




<div class="modal fade" id="modalReponse">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                <h4 class="modal-title text-primary">DETAILS DES REPONSES</h4>
            </div>
            <div class="modal-body">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Fermer</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>













<div class="modal fade" id="modalOffre">
    <div class="modal-dialog">
        <form method="post" id="offre_form">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title text-primary">AJOUT D'UNE OFFRE</h4>
                </div>
                <div class="modal-body">

                    <div class="form-group">
                        <input type="hidden" name="user_id" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->getId();?>
" d="user_id">
                    </div>
                    <div class="form-group">
                        <label class="">La categorie</label>
                        <select class="form-control" name="categorie_id" id="categorie_id">
                            <option value="">---Choisir le categorie---</option>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'categorie');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['categorie']->value) {
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['categorie']->value->getId();?>
"><?php echo $_smarty_tpl->tpl_vars['categorie']->value->getLibelle();?>
</option>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                        </select>
                    </div>
                    <div class="form-group">
                        <label for="libelle">Intitullé de l'offre</label>
                        <textarea rows="4" cols="30" class="form-control" name="libelle"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="favori">Favori</label>
                        <select name="favori" id="favori" class="form-control">
                            <option value="">Selectionner</option>
                            <option value="1">Oui</option>
                            <option value="0">Non</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="hidden" name="id" id="id">
                    <input type="submit" name="action" id="action" class="btn btn-primary" value="Add">
                    <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Fermer</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </form>
    </div>
    <!-- /.modal-dialog -->
</div>


<?php $_smarty_tpl->_subTemplateRender("file:src/view/layout/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
