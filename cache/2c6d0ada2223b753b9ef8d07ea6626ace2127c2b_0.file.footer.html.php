<?php
/* Smarty version 3.1.30, created on 2020-06-25 16:51:06
  from "C:\xampp\htdocs\my_projects\frameworks\covid19_sm\src\view\layout_front\footer.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ef4b9daf3f266_37026371',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2c6d0ada2223b753b9ef8d07ea6626ace2127c2b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\my_projects\\frameworks\\covid19_sm\\src\\view\\layout_front\\footer.html',
      1 => 1593096659,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ef4b9daf3f266_37026371 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- /.content-wrapper -->
<footer class="main-footer">
    <div class="container">
        <div class="pull-right hidden-xs">
            <b>SamameMVC</b> 2.4.0
        </div>
        <strong>Copyright &copy; 2020 <a href="https://adminlte.io">DITI4</a>.</strong> Tous les droits réservés.
    </div>
    <!-- /.container -->
</footer>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/template/bower_components/jquery/dist/jquery.min.js"><?php echo '</script'; ?>
>
<!-- Bootstrap 3.3.7 -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/template/bower_components/bootstrap/dist/js/bootstrap.min.js"><?php echo '</script'; ?>
>
<!-- SlimScroll -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/template/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"><?php echo '</script'; ?>
>
<!-- FastClick -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/template/bower_components/fastclick/lib/fastclick.js"><?php echo '</script'; ?>
>
<!-- AdminLTE App -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/template/dist/js/adminlte.min.js"><?php echo '</script'; ?>
>
<!-- AdminLTE for demo purposes -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/template/dist/js/demo.js"><?php echo '</script'; ?>
>


</body>

</html><?php }
}
