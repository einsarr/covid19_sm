<?php
/* Smarty version 3.1.30, created on 2020-06-25 01:09:14
  from "C:\xampp\htdocs\my_projects\frameworks\covid19_sm\src\view\layout\footer.html " */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ef3dd1a6aa924_37676383',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '16ab8633c9c909e3014c9e248acfdd7cca109756' => 
    array (
      0 => 'C:\\xampp\\htdocs\\my_projects\\frameworks\\covid19_sm\\src\\view\\layout\\footer.html ',
      1 => 1592999360,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ef3dd1a6aa924_37676383 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- /.content-wrapper -->
<footer class="main-footer">
    <div class="pull-right hidden-xs">
        <b>Version</b> 1.9.0
    </div>
    <strong>Copyright &copy; 2019-2020 <a href="https://adminlte.io">Samane</a>.</strong> All rights reserved.
</footer>

<!-- jQuery 3 -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/template/bower_components/jquery/dist/jquery.min.js"><?php echo '</script'; ?>
>
<!-- jQuery UI 1.11.4 -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/template/bower_components/jquery-ui/jquery-ui.min.js"><?php echo '</script'; ?>
>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<?php echo '<script'; ?>
>
    $.widget.bridge('uibutton', $.ui.button);
<?php echo '</script'; ?>
>
<!-- Bootstrap 3.3.7 -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/template/bower_components/bootstrap/dist/js/bootstrap.min.js"><?php echo '</script'; ?>
>
<!-- Morris.js charts -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/template/bower_components/raphael/raphael.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/template/bower_components/morris.js/morris.min.js"><?php echo '</script'; ?>
>
<!-- Sparkline -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/template/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"><?php echo '</script'; ?>
>
<!-- jvectormap -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/template/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/template/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"><?php echo '</script'; ?>
>
<!-- jQuery Knob Chart -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/template/bower_components/jquery-knob/dist/jquery.knob.min.js"><?php echo '</script'; ?>
>
<!-- daterangepicker -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/template/bower_components/moment/min/moment.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/template/bower_components/bootstrap-daterangepicker/daterangepicker.js"><?php echo '</script'; ?>
>
<!-- datepicker -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/template/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"><?php echo '</script'; ?>
>
<!-- Bootstrap WYSIHTML5 -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/template/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"><?php echo '</script'; ?>
>
<!-- Slimscroll -->
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
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/template/dist/js/pages/dashboard.js"><?php echo '</script'; ?>
>
<!-- AdminLTE for demo purposes -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/template/dist/js/demo.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/template/bower_components/datatables.net/js/jquery.dataTables.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/template/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
    $(function() {
        $('#example1').DataTable();
        var base_url = "http://localhost:8081/my_projects/frameworks/covid19_sm/";
        $(".view-reponse").on("click", function() {
            var id = $(this).val();
            $.ajax({
                url: base_url + "Reponse/viewReponse/" + id,
                type: "POST",
                success: function(resp) {
                    $('#modalReponse .modal-body').html(resp);
                    //alert(resp);
                }
            });
        });


        $(document).on('submit', '#cv_form', function(event) {
            event.preventDefault();
            var experience = $('#experience').val();
            var formation = $('#formation').val();
            var competence = $('#competence').val();
            var divers = $('#divers').val();
            var user_id = $('#user_id').val();
            if (experience != '' && formation != '' && competence != '' && divers != '') {
                $.ajax({
                    url: "<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Cv/add",
                    method: 'POST',
                    data: new FormData(this),
                    contentType: false,
                    processData: false,
                    success: function(data) {
                        alert(data);
                        $('#cv_form')[0].reset();
                        $('#modalCV').modal('hide');
                    }
                });
            } else {
                alert("Veuillez saisir tous les champs svp.");
            }
        });

        $('#offre_form').on('submit', function(event) {
            event.preventDefault();
            var user_id = $('#user_id').val();
            var categorie_id = $('#categorie_id').val();
            var libelle = $('#libelle').val();
            var favori = $('#favori').val();
            if ($('#action').val() == 'Add') {
                $.ajax({
                    url: "<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Offre/AddAj",
                    method: "post",
                    data: $('form').serialize(),
                    dataType: "json",
                    success: function(strMessage) {
                        $('#message').text(strMessage);
                        $('#modalOffre').modal('hide');
                        $('#offre_form')[0].reset();
                        //load_produits();
                    }
                });
            }
            if ($('#action').val() == 'Edit') {
                $.ajax({
                    url: "<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Offre/Update",
                    data: $('form').serialize(),
                    type: "POST",
                    dataType: "json",
                    success: function(result) {
                        $('#message').text(result);
                        $('#modalOffre').modal('hide');
                        load_produits();
                    },
                });
            }
        });




    });
<?php echo '</script'; ?>
>
</body>

</html><?php }
}
