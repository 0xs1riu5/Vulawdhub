<?php /* Smarty version 2.6.22, created on 2018-11-20 11:02:38
         compiled from tpl.htm */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<p class="action_nav">BlueCMS�������� - <?php echo $this->_tpl_vars['current_act']; ?>
</p>
<div id="clean_cache">�뾡�����������ٽ���ʱ�༭ģ�壬�Է�ֹ�༭�����г���</div><br>
  <table width="100%" cellpadding="3" cellspacing="1">
  <tr>
      <td class="datalist_title" width="250">ģ������</td>
      <td class="datalist_title">�޸�ʱ��</td>
      <td class="datalist_title">��С(�ֽ�)</td>
      <td class="datalist_title" align="center">����</td>
  </tr>
    <?php unset($this->_sections['tpl']);
$this->_sections['tpl']['name'] = 'tpl';
$this->_sections['tpl']['loop'] = is_array($_loop=$this->_tpl_vars['tpl_list']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['tpl']['show'] = true;
$this->_sections['tpl']['max'] = $this->_sections['tpl']['loop'];
$this->_sections['tpl']['step'] = 1;
$this->_sections['tpl']['start'] = $this->_sections['tpl']['step'] > 0 ? 0 : $this->_sections['tpl']['loop']-1;
if ($this->_sections['tpl']['show']) {
    $this->_sections['tpl']['total'] = $this->_sections['tpl']['loop'];
    if ($this->_sections['tpl']['total'] == 0)
        $this->_sections['tpl']['show'] = false;
} else
    $this->_sections['tpl']['total'] = 0;
if ($this->_sections['tpl']['show']):

            for ($this->_sections['tpl']['index'] = $this->_sections['tpl']['start'], $this->_sections['tpl']['iteration'] = 1;
                 $this->_sections['tpl']['iteration'] <= $this->_sections['tpl']['total'];
                 $this->_sections['tpl']['index'] += $this->_sections['tpl']['step'], $this->_sections['tpl']['iteration']++):
$this->_sections['tpl']['rownum'] = $this->_sections['tpl']['iteration'];
$this->_sections['tpl']['index_prev'] = $this->_sections['tpl']['index'] - $this->_sections['tpl']['step'];
$this->_sections['tpl']['index_next'] = $this->_sections['tpl']['index'] + $this->_sections['tpl']['step'];
$this->_sections['tpl']['first']      = ($this->_sections['tpl']['iteration'] == 1);
$this->_sections['tpl']['last']       = ($this->_sections['tpl']['iteration'] == $this->_sections['tpl']['total']);
?>
	<tr class="datalist" onmousemove="javascript:this.bgColor='#F7FBFE';"onmouseout="javascript:this.bgColor='#FFFFFF';">
    	<td><?php echo $this->_tpl_vars['tpl_list'][$this->_sections['tpl']['index']]['name']; ?>
</td>
      	<td><?php echo $this->_tpl_vars['tpl_list'][$this->_sections['tpl']['index']]['modify_time']; ?>
</td>
       	<td><?php echo $this->_tpl_vars['tpl_list'][$this->_sections['tpl']['index']]['size']; ?>
</td>
      <td align="center"><a href="tpl_manage.php?act=edit&tpl_name=<?php echo $this->_tpl_vars['tpl_list'][$this->_sections['tpl']['index']]['name']; ?>
">�༭</a></td>
    </tr>
    <?php endfor; else: ?>
  <tr>
    <td class="datalist" colspan="4">û���ҵ��κμ�¼</td>
  </tr>
    <?php endif; ?>
  </table>
<br/>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>