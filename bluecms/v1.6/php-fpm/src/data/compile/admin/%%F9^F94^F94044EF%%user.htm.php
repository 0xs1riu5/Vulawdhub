<?php /* Smarty version 2.6.22, created on 2018-11-20 12:27:32
         compiled from user.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'user.htm', 18, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<p class="action_nav">BlueCMS�������� - <?php echo $this->_tpl_vars['current_act']; ?>
&nbsp;&nbsp;<a href="user.php?act=add">����»�Ա</a></p>
  <table width="100%" cellpadding="3" cellspacing="1">
  <tr>
      <td class="datalist_title">��Ա����</td>
      <td class="datalist_title">�Ա�</td>
      <td class="datalist_title">�����ʼ�</td>
      <td class="datalist_title">����</td>
      <td class="datalist_title">ע������</td>
      <td class="datalist_title" align="center">����</td>
  </tr>
    <?php unset($this->_sections['user']);
$this->_sections['user']['name'] = 'user';
$this->_sections['user']['loop'] = is_array($_loop=$this->_tpl_vars['user_list']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['user']['show'] = true;
$this->_sections['user']['max'] = $this->_sections['user']['loop'];
$this->_sections['user']['step'] = 1;
$this->_sections['user']['start'] = $this->_sections['user']['step'] > 0 ? 0 : $this->_sections['user']['loop']-1;
if ($this->_sections['user']['show']) {
    $this->_sections['user']['total'] = $this->_sections['user']['loop'];
    if ($this->_sections['user']['total'] == 0)
        $this->_sections['user']['show'] = false;
} else
    $this->_sections['user']['total'] = 0;
if ($this->_sections['user']['show']):

            for ($this->_sections['user']['index'] = $this->_sections['user']['start'], $this->_sections['user']['iteration'] = 1;
                 $this->_sections['user']['iteration'] <= $this->_sections['user']['total'];
                 $this->_sections['user']['index'] += $this->_sections['user']['step'], $this->_sections['user']['iteration']++):
$this->_sections['user']['rownum'] = $this->_sections['user']['iteration'];
$this->_sections['user']['index_prev'] = $this->_sections['user']['index'] - $this->_sections['user']['step'];
$this->_sections['user']['index_next'] = $this->_sections['user']['index'] + $this->_sections['user']['step'];
$this->_sections['user']['first']      = ($this->_sections['user']['iteration'] == 1);
$this->_sections['user']['last']       = ($this->_sections['user']['iteration'] == $this->_sections['user']['total']);
?>
	<tr class="datalist" onmousemove="javascript:this.bgColor='#F7FBFE';" onmouseout="javascript:this.bgColor='#FFFFFF';">
      <td><?php echo $this->_tpl_vars['user_list'][$this->_sections['user']['index']]['user_name']; ?>
</td>
      <td><?php if ($this->_tpl_vars['user']['sex'] == 0): ?>����<?php elseif ($this->_tpl_vars['user']['sex'] == 1): ?>��<?php else: ?>Ů<?php endif; ?></td>
      <td><?php echo $this->_tpl_vars['user_list'][$this->_sections['user']['index']]['email']; ?>
</td>
      <td><?php echo $this->_tpl_vars['user_list'][$this->_sections['user']['index']]['birthday']; ?>
</td>
      <td><?php echo ((is_array($_tmp=$this->_tpl_vars['user_list'][$this->_sections['user']['index']]['reg_time'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%e") : smarty_modifier_date_format($_tmp, "%Y-%m-%e")); ?>
</td>
	  <td align="center"><a href="user.php?act=edit&user_id=<?php echo $this->_tpl_vars['user_list'][$this->_sections['user']['index']]['user_id']; ?>
">�༭</a>&nbsp;|&nbsp;
	  <a href="user.php?act=del&user_id=<?php echo $this->_tpl_vars['user_list'][$this->_sections['user']['index']]['user_id']; ?>
">ɾ��</a></td>
    </tr>
    <?php endfor; else: ?>
  <tr class="datalist" onmousemove="javascript:this.bgColor='#F7FBFE';" onmouseout="javascript:this.bgColor='#FFFFFF';">
    <td colspan="6">û���ҵ��κμ�¼</td>
  </tr>
    <?php endif; ?>
  </table>
  <div class="page"><?php echo $this->_tpl_vars['page']; ?>
</div>
<br>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>