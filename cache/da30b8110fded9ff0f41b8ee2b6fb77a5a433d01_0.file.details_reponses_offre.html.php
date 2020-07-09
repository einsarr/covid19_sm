<?php
/* Smarty version 3.1.30, created on 2020-06-24 12:00:35
  from "C:\xampp\htdocs\my_projects\frameworks\covid19_sm\src\view\reponses\details_reponses_offre.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ef32443d1a8b9_11860476',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'da30b8110fded9ff0f41b8ee2b6fb77a5a433d01' => 
    array (
      0 => 'C:\\xampp\\htdocs\\my_projects\\frameworks\\covid19_sm\\src\\view\\reponses\\details_reponses_offre.html',
      1 => 1592992340,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ef32443d1a8b9_11860476 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['reponses']->value, 'reponse');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['reponse']->value) {
?>
<tr>
    <td>Libellé : <?php echo $_smarty_tpl->tpl_vars['reponse']->value->getLibelle();?>
</td>
</tr>
<tr>
    <td>Description : <?php echo $_smarty_tpl->tpl_vars['reponse']->value->getLibelle();?>
</td>
</tr>
<tr>
    <td>Demandeur : <?php echo $_smarty_tpl->tpl_vars['reponse']->value->getOffre()->getEntreprise()->getNom_complet();?>
</td>
</tr>
<!-- <td>
        <a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Offre/edit/<?php echo $_smarty_tpl->tpl_vars['user']->value->getId();?>
" class="btn btn-warning"><span class="fa fa-edit"></span></a>
        <button type='button' name='edit' id="<?php echo $_smarty_tpl->tpl_vars['user']->value->getId();?>
" data-toggle="modal" class='btn btn-info view-reponse' data-target="#modalReponse" value="<?php echo $_smarty_tpl->tpl_vars['offre']->value->getId();?>
"><span class='fa fa-eye'></span></button>
    </td> -->

<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
}
}
