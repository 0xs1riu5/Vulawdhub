<?php /* Smarty version 2.6.22, created on 2018-11-20 12:16:59
         compiled from arc_cat_info.htm */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<p class="action_nav">BlueCMS�������� - <?php echo $this->_tpl_vars['current_act']; ?>
</p>
<div class="main-div">
<form method="post" action="arc_cat.php" name="cat_form" onsubmit="return check();">
<?php if ($this->_tpl_vars['act'] == 'add'): ?>
<div id="clean_cache">��ӹ�������»���</div>
<table>
  <tr>
    <td>��������:</td>
    <td><input type="text" name="cat_name" maxlength="60" value="" />&nbsp;<span class="warning">*</span></td>
  </tr>
  <tr>
    <td>�ϼ���Ŀ:</td>
    <td><select name="parent_id">
    		<option value="0">������Ŀ</option>
    		</select>&nbsp;<span class="warning">*</span></td>
  </tr>
    <tr>
    <td>��Ŀ����(title):</td>
    <td><input type="text" name="title" size="50" value="" /></td>
  </tr>
  <tr>
    <td>�ؼ���(keywords):</td>
    <td><input type="text" name="keywords" size="50" value="" /></td>
  </tr>
  <tr>
    <td>����(description):</td>
    <td><textarea name="description" cols="50" rows="4"></textarea></td>
  </tr>
  <tr>
    <td>��ʾ˳��:</td>
    <td><input type="text" name="show_order" size="10" value="0" /></td>
  </tr>
  <tr>
    <td colspan="2" align="center">
      <input type="submit" value="�ύ" class="button" />
      <input type="reset" value="����" class="button" />
      <input type="hidden" name="act" value="do_add" />
    </td>
  </tr>
</table>
<?php endif; ?>
<?php if ($this->_tpl_vars['act'] == 'edit'): ?>
<div id="clean_cache">�༭��������»���</div>
<table>
  <tr>
    <td>��������:</td>
    <td><input type="text" name="cat_name" maxlength="60" value="<?php echo $this->_tpl_vars['cat']['cat_name']; ?>
" />&nbsp;<span class="warning">*</span></td>
  </tr>
  <tr>
    <td>�ϼ���Ŀ:</td>
    <td><select name="parent_id">
    		<option value="0">������Ŀ</option>
    		</select>&nbsp;<span class="warning">*</span></td>
  </tr>
    <tr>
    <td>��Ŀ����(title):</td>
    <td><input type="text" name="title" size="50" value="<?php echo $this->_tpl_vars['cat']['title']; ?>
" /></td>
  </tr>
  <tr>
    <td>�ؼ���(keywords):</td>
    <td><input type="text" name="keywords" size="50" value="<?php echo $this->_tpl_vars['cat']['keywords']; ?>
" /></td>
  </tr>
  <tr>
    <td>����(description):</td>
    <td><textarea name="description" cols="50" rows="4"><?php echo $this->_tpl_vars['cat']['description']; ?>
</textarea></td>
  </tr>
  <tr>
    <td>��ʾ˳��:</td>
    <td><input type="text" name="show_order" size="10" value="<?php echo $this->_tpl_vars['cat']['show_order']; ?>
" /></td>
  </tr>
  <tr>
    <td colspan="2" align="center">
      <input type="submit" value="�ύ" class="button" />
      <input type="reset" value="����" class="button" />
      <input type="hidden" name="cid" value="<?php echo $this->_tpl_vars['cat']['cat_id']; ?>
"/>
      <input type="hidden" name="act" value="do_edit" />
    </td>
  </tr>
</table>
<?php endif; ?>
</form>
</div>
<script type="text/javascript">

function check()
{
	if(cat_form.cat_name.value=='')
	{
		alert("�������Ʋ���Ϊ�գ�");
		cat_form.cat_name.focus();
		return false;
	}
}

</script>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>