<?php /* Smarty version 2.6.22, created on 2018-11-20 11:02:07
         compiled from attachment.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'mb_substr', 'attachment.htm', 16, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<p class="action_nav">BlueCMS�������� - <?php echo $this->_tpl_vars['current_act']; ?>
&nbsp;&nbsp;<a href="attachment.php?act=add">��Ӹ�������</a></p>
  <table width="100%" cellpadding="3" cellspacing="1">
  <tr>
      <td class="datalist_title">������������</td>
      <td class="datalist_title">����</td>
      <td class="datalist_title">��λ/����ֵ</td>
      <td class="datalist_title">����ģ��</td>
      <td class="datalist_title">˳��</td>
      <td class="datalist_title" align="center">����</td>
  </tr>
    <?php unset($this->_sections['att']);
$this->_sections['att']['name'] = 'att';
$this->_sections['att']['loop'] = is_array($_loop=$this->_tpl_vars['att_list']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['att']['show'] = true;
$this->_sections['att']['max'] = $this->_sections['att']['loop'];
$this->_sections['att']['step'] = 1;
$this->_sections['att']['start'] = $this->_sections['att']['step'] > 0 ? 0 : $this->_sections['att']['loop']-1;
if ($this->_sections['att']['show']) {
    $this->_sections['att']['total'] = $this->_sections['att']['loop'];
    if ($this->_sections['att']['total'] == 0)
        $this->_sections['att']['show'] = false;
} else
    $this->_sections['att']['total'] = 0;
if ($this->_sections['att']['show']):

            for ($this->_sections['att']['index'] = $this->_sections['att']['start'], $this->_sections['att']['iteration'] = 1;
                 $this->_sections['att']['iteration'] <= $this->_sections['att']['total'];
                 $this->_sections['att']['index'] += $this->_sections['att']['step'], $this->_sections['att']['iteration']++):
$this->_sections['att']['rownum'] = $this->_sections['att']['iteration'];
$this->_sections['att']['index_prev'] = $this->_sections['att']['index'] - $this->_sections['att']['step'];
$this->_sections['att']['index_next'] = $this->_sections['att']['index'] + $this->_sections['att']['step'];
$this->_sections['att']['first']      = ($this->_sections['att']['iteration'] == 1);
$this->_sections['att']['last']       = ($this->_sections['att']['iteration'] == $this->_sections['att']['total']);
?>
	<tr class="datalist" onmousemove="javascript:this.bgColor='#F7FBFE';"onmouseout="javascript:this.bgColor='#FFFFFF';">
      <td><?php echo $this->_tpl_vars['att_list'][$this->_sections['att']['index']]['att_name']; ?>
</td>
      <td><?php if ($this->_tpl_vars['att_list'][$this->_sections['att']['index']]['att_type'] == 0): ?>�����ı���<?php elseif ($this->_tpl_vars['att_list'][$this->_sections['att']['index']]['att_type'] == 1): ?>�������ֱ�<?php elseif ($this->_tpl_vars['att_list'][$this->_sections['att']['index']]['att_type'] == 2): ?>�����б��͸�����Ϣ<?php elseif ($this->_tpl_vars['att_list'][$this->_sections['att']['index']]['att_type'] == 3): ?>��ѡ�͸�����Ϣ<?php else: ?>��ѡ�͸�����Ϣ<?php endif; ?></td>
      <td><?php if ($this->_tpl_vars['att_list'][$this->_sections['att']['index']]['unit'] == '' && $this->_tpl_vars['att_list'][$this->_sections['att']['index']]['att_val'] == ''): ?>��<?php elseif ($this->_tpl_vars['att_list'][$this->_sections['att']['index']]['unit'] != ''): ?><?php echo $this->_tpl_vars['att_list'][$this->_sections['att']['index']]['unit']; ?>
<?php else: ?><?php echo ((is_array($_tmp=$this->_tpl_vars['att_list'][$this->_sections['att']['index']]['att_val'])) ? $this->_run_mod_handler('mb_substr', true, $_tmp, 0, 8) : smarty_modifier_mb_substr($_tmp, 0, 8)); ?>
<?php endif; ?></td>
      <td><?php echo $this->_tpl_vars['att_list'][$this->_sections['att']['index']]['model_name']; ?>
</td>
      <td><?php echo $this->_tpl_vars['att_list'][$this->_sections['att']['index']]['show_order']; ?>
</td>
      <td align="center"><a href="attachment.php?act=edit&att_id=<?php echo $this->_tpl_vars['att_list'][$this->_sections['att']['index']]['att_id']; ?>
">�༭</a>&nbsp;|&nbsp;<a href="attachment.php?act=del&att_id=<?php echo $this->_tpl_vars['att_list'][$this->_sections['att']['index']]['att_id']; ?>
">ɾ��</a></td>
    </tr>
    <?php endfor; else: ?>
  <tr>
    <td class="datalist" colspan="5">û���ҵ��κμ�¼</td>
  </tr>
    <?php endif; ?>
  </table>
  <div class="page"><?php echo $this->_tpl_vars['page']; ?>
</div>
  <br/>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>