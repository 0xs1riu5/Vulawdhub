<?php /* Smarty version 2.6.22, created on 2018-11-20 11:02:36
         compiled from set_cache.htm */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<p class="action_nav">BlueCMS�������� - <?php echo $this->_tpl_vars['current_act']; ?>
</p>
<div id="clean_cache">�༭��������»���</div>
<form action="cache.php?act=do_save" method="post">
	<table border="0">
	    <tr>
	      <td width="100">����ҳ��</td>
		  <td>�����Ƿ���</td>
	      <td>����ʱ��</td>
	    </tr>
	    <tr>
	      <td>��ҳ:</td>
		  <td><input type="radio" name="index_pow" value="0" checked />��<input type="radio" name="index_pow" value="1" />��</td>
	      <td><input name="index" value="<?php echo $this->_tpl_vars['cache_arr']['index']; ?>
" />&nbsp;��</td>
	    </tr>
	    <tr>
	      <td>������Ϣ����ҳ:</td>
		  <td><input type="radio" name="publish1_pow" value="0" checked />��<input type="radio" name="publish1_pow" value="1" />��</td>
	      <td><input name="publish1" value='<?php echo $this->_tpl_vars['cache_arr']['publish1']; ?>
' />&nbsp;��</td>
	    </tr>
	    <tr>
	      <td>������Ϣҳ:</td>
		  <td><input type="radio" name="publish2_pow" value="0" checked />��<input type="radio" name="publish2_pow" value="1" />��</td>
	      <td><input name="publish2" value='<?php echo $this->_tpl_vars['cache_arr']['publish2']; ?>
' />&nbsp;��</td>
	    </tr>
	    <tr>
	      <td>������Ϣ�б�ҳ:</td>
		  <td><input type="radio" name="list_pow" value="0" checked />��<input type="radio" name="list_pow" value="1" />��</td>
	      <td><input name="list" value='<?php echo $this->_tpl_vars['cache_arr']['list']; ?>
' />&nbsp;��</td>
	    </tr>
	    <tr>
	      <td>������Ϣ����ҳ:</td>
		  <td><input type="radio" name="info_pow" value="0" checked />��<input type="radio" name="info_pow" value="1" />��</td>
	      <td><input name="info" value='<?php echo $this->_tpl_vars['cache_arr']['info']; ?>
' />&nbsp;��</td>
	    </tr>
		<tr>
	      <td>�����б�ҳ:</td>
		  <td><input type="radio" name="list_news" value="0" checked />��<input type="radio" name="list_news" value="1" />��</td>
	      <td><input name="list_news_v" value='<?php echo $this->_tpl_vars['cache_arr']['list_news_v']; ?>
' />&nbsp;��</td>
	    </tr>
		<tr>
	      <td>��������ҳ:</td>
		  <td><input type="radio" name="news" value="0" checked />��<input type="radio" name="news" value="1" />��</td>
	      <td><input name="news_v" value='<?php echo $this->_tpl_vars['cache_arr']['news_v']; ?>
' />&nbsp;��</td>
	    </tr>
    </table>
<div style="margin:10px;">
	<input value="��������" type="submit" />
	<input type="button" onclick="history.back()" value="����" />
</div>
</form>
<br/>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>