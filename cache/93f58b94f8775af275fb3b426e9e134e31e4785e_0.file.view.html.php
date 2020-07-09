<?php
/* Smarty version 3.1.30, created on 2020-06-25 01:09:14
  from "C:\xampp\htdocs\my_projects\frameworks\covid19_sm\src\view\cv\view.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ef3dd1a498ff0_96639021',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '93f58b94f8775af275fb3b426e9e134e31e4785e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\my_projects\\frameworks\\covid19_sm\\src\\view\\cv\\view.html',
      1 => 1592926057,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:src/view/layout/header.html' => 1,
    'file:src/view/layout/topbar.html' => 1,
    'file:src/view/layout/sidebar.html' => 1,
    'file:src/view/layout/footer.html ' => 1,
  ),
),false)) {
function content_5ef3dd1a498ff0_96639021 (Smarty_Internal_Template $_smarty_tpl) {
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
                            <button type="button" class="btn btn-info btn-block" data-toggle="modal" data-target="#modalDetails">
                                <b>Détails</b>
                              </button>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->


                </div>
                <!-- /.col -->
                <div class="col-md-9">
                    <div class="nav-tabs-custom">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#timeline" data-toggle="tab">Mon CV</a></li>
                        </ul>
                        <div class="tab-content">

                            <div class="active tab-pane" id="timeline">
                                <!-- The timeline -->
                                <ul class="timeline timeline-inverse">
                                    <!-- timeline time label -->
                                    <li class="time-label">
                                        <span class="bg-red">
                                            Je certifie sur l'honneur les informations ci-dessous
                                        </span>
                                    </li>
                                    <!-- /.timeline-label -->
                                    <!-- timeline item -->
                                    <li>
                                        <i class="fa fa-envelope bg-blue"></i>

                                        <div class="timeline-item">

                                            <h3 class="timeline-header"><a href="#"><u>Expérience proféssionnelle</u></a></h3>

                                            <div class="timeline-body">
                                                <?php if (isset($_smarty_tpl->tpl_vars['cv']->value)) {
echo $_smarty_tpl->tpl_vars['cv']->value->getExperience();
}?>
                                            </div>

                                            <h3 class="timeline-header"><a href="#"><u>Formation proféssionnelle</u></a></h3>

                                            <div class="timeline-body">
                                                <?php if (isset($_smarty_tpl->tpl_vars['cv']->value)) {
echo $_smarty_tpl->tpl_vars['cv']->value->getFormation();
}?>
                                            </div>

                                            <h3 class="timeline-header"><a href="#"><u>Compétence</u></a></h3>

                                            <div class="timeline-body">
                                                <?php if (isset($_smarty_tpl->tpl_vars['cv']->value)) {
echo $_smarty_tpl->tpl_vars['cv']->value->getCompetence();
}?>
                                            </div>


                                            <h3 class="timeline-header"><a href="#"><u>Divers</u></a></h3>

                                            <div class="timeline-body">
                                                <?php if (isset($_smarty_tpl->tpl_vars['cv']->value)) {
echo $_smarty_tpl->tpl_vars['cv']->value->getDivers();
}?>
                                            </div>

                                            <div class="timeline-footer">

                                                <a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Cv/edit/<?php echo $_smarty_tpl->tpl_vars['cv']->value->getId();?>
" class="btn btn-warning"><span class="fa fa-edit"></span></a>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <i class="fa fa-clock-o bg-gray "></i>
                                    </li>
                                </ul>
                            </div>

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
                            <td>Nom complet</td>
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
</div>

<?php $_smarty_tpl->_subTemplateRender("file:src/view/layout/footer.html ", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
