<?php /* Smarty version 2.6.22, created on 2018-11-20 11:02:08
         compiled from area.htm */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<p class="action_nav">BlueCMS�������� - <?php echo $this->_tpl_vars['current_act']; ?>
&nbsp;&nbsp;<a href="area.php?act=add">��ӵ�������</a></p>
  <table width="100%" cellpadding="3" cellspacing="1">
  <tr>
      <td class="datalist_title">��������</td>
      <td class="datalist_title">����</td>
	  <td class="datalist_title">˳��</td>
      <td class="datalist_title" align="center">����</td>
  </tr>
  <?php if ($this->_tpl_vars['parentid'] != 0): ?><tr class="datalist" onmousemove="javascript:this.bgColor='#F7FBFE';"onmouseout="javascript:this.bgColor='#FFFFFF';"><td colspan="4"><a href="area.php?pid=<?php echo $this->_tpl_vars['dparentid']; ?>
">�����ϼ�</a></td></tr><?php endif; ?>
    <?php unset($this->_sections['area']);
$this->_sections['area']['name'] = 'area';
$this->_sections['area']['loop'] = is_array($_loop=$this->_tpl_vars['area_list']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['area']['show'] = true;
$this->_sections['area']['max'] = $this->_sections['area']['loop'];
$this->_sections['area']['step'] = 1;
$this->_sections['area']['start'] = $this->_sections['area']['step'] > 0 ? 0 : $this->_sections['area']['loop']-1;
if ($this->_sections['area']['show']) {
    $this->_sections['area']['total'] = $this->_sections['area']['loop'];
    if ($this->_sections['area']['total'] == 0)
        $this->_sections['area']['show'] = false;
} else
    $this->_sections['area']['total'] = 0;
if ($this->_sections['area']['show']):

            for ($this->_sections['area']['index'] = $this->_sections['area']['start'], $this->_sections['area']['iteration'] = 1;
                 $this->_sections['area']['iteration'] <= $this->_sections['area']['total'];
                 $this->_sections['area']['index'] += $this->_sections['area']['step'], $this->_sections['area']['iteration']++):
$this->_sections['area']['rownum'] = $this->_sections['area']['iteration'];
$this->_sections['area']['index_prev'] = $this->_sections['area']['index'] - $this->_sections['area']['step'];
$this->_sections['area']['index_next'] = $this->_sections['area']['index'] + $this->_sections['area']['step'];
$this->_sections['area']['first']      = ($this->_sections['area']['iteration'] == 1);
$this->_sections['area']['last']       = ($this->_sections['area']['iteration'] == $this->_sections['area']['total']);
?>
	<tr class="datalist" onmousemove="javascript:this.bgColor='#F7FBFE';"onmouseout="javascript:this.bgColor='#FFFFFF';">
      <td><?php echo $this->_tpl_vars['area_list'][$this->_sections['area']['index']]['area_name']; ?>
</td>
      <td><?php if ($this->_tpl_vars['area_list'][$this->_sections['area']['index']]['ishavechild'] == 1): ?><a href="area.php?pid=<?php echo $this->_tpl_vars['area_list'][$this->_sections['area']['index']]['area_id']; ?>
">�����¼�</a><?php else: ?>û���¼�������<?php endif; ?></td>
	  <td><?php echo $this->_tpl_vars['area_list'][$this->_sections['area']['index']]['show_order']; ?>
</td>
      <td align="center"><a href="area.php?act=edit&aid=<?php echo $this->_tpl_vars['area_list'][$this->_sections['area']['index']]['area_id']; ?>
">�༭</a>&nbsp;|&nbsp;<a href="area.php?act=del&aid=<?php echo $this->_tpl_vars['area_list'][$this->_sections['area']['index']]['area_id']; ?>
">ɾ��</a></td>
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