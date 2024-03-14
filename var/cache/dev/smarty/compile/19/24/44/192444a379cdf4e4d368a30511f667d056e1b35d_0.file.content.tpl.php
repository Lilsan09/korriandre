<?php
/* Smarty version 3.1.33, created on 2024-03-14 14:50:09
  from '/var/www/html/admin230hsgxcn/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_65f300917bbcc7_59223127',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '192444a379cdf4e4d368a30511f667d056e1b35d' => 
    array (
      0 => '/var/www/html/admin230hsgxcn/themes/default/template/content.tpl',
      1 => 1549984772,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65f300917bbcc7_59223127 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
