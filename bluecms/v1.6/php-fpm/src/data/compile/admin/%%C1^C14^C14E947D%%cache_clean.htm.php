<?php /* Smarty version 2.6.22, created on 2018-11-20 11:05:06
         compiled from cache_clean.htm */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<p class="action_nav">BlueCMS�������� - <?php echo $this->_tpl_vars['current_act']; ?>
</p>
<div id="clean_cache">
	<h4>������ʾ</h4>
	<ul><li>��ϵͳ���������ݻָ����������߳����쳣��ʱ��������ʹ�ñ������������ɻ��档���»����ʱ�򣬿����÷������������ߣ��뾡���ܿ���Ա���ʵĸ߷�ʱ�䣬������ֲ���Ԥ֪�Ĵ���</li>
				<li>���ݻ��棺����ϵͳ��ȫ�����á��������ԡ���Ŀ�б������б�Ȼ���</li>
				<li>ҳ�滺�棺����ϵͳģ��Ƚ����໺���ļ��������޸���ģ���ʱ��ִ��</li>
				</ul>
</div>
<div>
<form method="post" action="cache.php?act=do_clean"><br />
<h4><input type="checkbox" name="type[]" value="data" id="data_cache" class="checkbox" checked /><label for="data_cache">���ݻ���</label>
<input type="checkbox" name="type[]" value="tpl" id="tpl_cache" class="checkbox" checked /><label for="tpl_cache">ҳ�滺��</label></h4><br />
<p class="submit"><input type="submit" class="btn" name="confirmed" value="ȷ��"> &nbsp;
<input type="button" class="btn" value="ȡ��" onClick="history.go(-1);"></p></form><br /></div>
<br/>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>