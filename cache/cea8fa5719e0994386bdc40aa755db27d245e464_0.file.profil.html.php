<?php
/* Smarty version 3.1.30, created on 2020-06-25 01:08:08
  from "C:\xampp\htdocs\my_projects\frameworks\covid19_sm\src\view\users\profil.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ef3dcd84ed2b7_07330009',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cea8fa5719e0994386bdc40aa755db27d245e464' => 
    array (
      0 => 'C:\\xampp\\htdocs\\my_projects\\frameworks\\covid19_sm\\src\\view\\users\\profil.html',
      1 => 1592927319,
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
function content_5ef3dcd84ed2b7_07330009 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:src/view/layout/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 <?php $_smarty_tpl->_subTemplateRender("file:src/view/layout/topbar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:src/view/layout/sidebar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="content-wrapper">
    <div class="container">
        <section class="content">
            <div class="row">
                <div class="col-md-3">
                    <!-- Profile Image -->
                    <div class="box box-primary">
                        <div class="box-body box-profile">
                            <img class="profile-user-img img-responsive img-circle" src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/template/dist/img/user4-128x128.jpg" alt="User profile picture">

                            <h3 class="profile-username text-center"><?php echo $_smarty_tpl->tpl_vars['user']->value->getNom_complet();?>
</h3>
                            <button type="button" class="btn btn-warning btn-block" data-toggle="modal" data-target="#modalDetails">
                                <b>Détails</b>
                              </button><br>
                            <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#modalCV">
                                <i class="fa fa-plus"></i> <b>Créer cv</b>
                              </button><br>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->

                </div>
                <!-- /.col -->
                <div class="col-md-9">
                    <div class="nav-tabs-custom">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#settings" data-toggle="tab">Changer le mot de passe</a></li>
                        </ul>
                        <div class="tab-content">

                            <div class="active tab-pane" id="settings">
                                <form class="form-horizontal" method="post" action="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
User/resetPassword">
                                    <div class="form-group">
                                        <label for="inputName" class="col-sm-4 control-label">Mot de passe actuel</label>

                                        <div class="col-sm-8">
                                            <input type="password" name="password" class="form-control" id="inputName" placeholder="Saisir l'actuel mot de passe ">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="inputEmail " class="col-sm-4 control-label ">Nouveau mot de passe</label>

                                        <div class="col-sm-8 ">
                                            <input type="password " name="newpassword " class="form-control " id="inputEmail " placeholder="Saisir le nouveau mot de passe ">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="inputName " class="col-sm-4 control-label ">Repéter le nouveau mot de passe</label>

                                        <div class="col-sm-8 ">
                                            <input type="password " name="repeatNewpassword " class="form-control " id="inputName " placeholder="Repéter le nouveau mot de passe ">
                                        </div>
                                    </div>

                                    <div class="form-group ">
                                        <div class="col-sm-offset-4 col-sm-10 ">
                                            <button type="submit " class="btn btn-warning ">Valider</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- /.tab-pane -->
                        </div>
                        <!-- /.tab-content -->
                    </div>
                    <!-- /.nav-tabs-custom -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </section>
    </div>
</div>



<div class="modal fade " id="modalCV">
    <div class="modal-dialog ">
        <form method="post " id="cv_form">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close " data-dismiss="modal " aria-label="Close ">
                        <span aria-hidden="true ">&times;</span>
                    </button>
                </div>
                <div class="modal-body ">
                    <h4 class="modal-title text-primary ">Ajouter un CV</h4>
                    <div class="modal-body ">
                        <div class="form-group">
                            <label>Expérience</label>
                            <input type="hidden" name="user_id" id="user_id" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->getId();?>
">
                            <textarea name="experience" id="experience" cols="30" rows="2" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Formation</label>
                            <textarea name="formation" id="formation" cols="30" rows="2" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Compétence</label>
                            <textarea name="competence" id="competence" cols="30" rows="2" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Divers</label>
                            <textarea name="divers" id="divers" cols="30" rows="2" class="form-control"></textarea>
                        </div>
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


<div class="modal fade" id="modalDetails">
    <div class="modal-dialog">
        <form method="post" id="produit_form">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>

                </div>
                <div class="modal-body">
                    <h4 class="modal-title text-primary">Détails de mon profil</h4>
                    <table class="table">
                        <tr>
                            <td>Prénom</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['user']->value->getNom_complet();?>
</td>
                        </tr>

                        <tr>
                            <td>Téléphone</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['user']->value->getTelephone();?>
</td>
                        </tr>
                        <tr>
                            <td>Adresse</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['user']->value->getAdresse();?>
</td>
                        </tr>
                    </table>
                </div>
                <div class="modal-footer">
                    <input type="hidden" name="id" id="id">
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
