<?php /* Smarty version 2.6.22, created on 2018-11-20 12:17:40
         compiled from article.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'article.htm', 18, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<p class="action_nav">BlueCMS�������� - <?php echo $this->_tpl_vars['current_act']; ?>
&nbsp;&nbsp;<a href="article.php?act=add">������������</a></p>
  <table width="100%" cellpadding="3" cellspacing="1">
  <tr>
      <td class="datalist_title">���ű���</td>
      <td class="datalist_title">������</td>
      <td class="datalist_title">��Դ��</td>
      <td class="datalist_title">����ʱ��</td>
      <td class="datalist_title">�����</td>
      <td class="datalist_title">������</td>
      <td class="datalist_title" align="center">����</td>
  </tr>
    <?php unset($this->_sections['article']);
$this->_sections['article']['name'] = 'article';
$this->_sections['article']['loop'] = is_array($_loop=$this->_tpl_vars['article_list']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['article']['show'] = true;
$this->_sections['article']['max'] = $this->_sections['article']['loop'];
$this->_sections['article']['step'] = 1;
$this->_sections['article']['start'] = $this->_sections['article']['step'] > 0 ? 0 : $this->_sections['article']['loop']-1;
if ($this->_sections['article']['show']) {
    $this->_sections['article']['total'] = $this->_sections['article']['loop'];
    if ($this->_sections['article']['total'] == 0)
        $this->_sections['article']['show'] = false;
} else
    $this->_sections['article']['total'] = 0;
if ($this->_sections['article']['show']):

            for ($this->_sections['article']['index'] = $this->_sections['article']['start'], $this->_sections['article']['iteration'] = 1;
                 $this->_sections['article']['iteration'] <= $this->_sections['article']['total'];
                 $this->_sections['article']['index'] += $this->_sections['article']['step'], $this->_sections['article']['iteration']++):
$this->_sections['article']['rownum'] = $this->_sections['article']['iteration'];
$this->_sections['article']['index_prev'] = $this->_sections['article']['index'] - $this->_sections['article']['step'];
$this->_sections['article']['index_next'] = $this->_sections['article']['index'] + $this->_sections['article']['step'];
$this->_sections['article']['first']      = ($this->_sections['article']['iteration'] == 1);
$this->_sections['article']['last']       = ($this->_sections['article']['iteration'] == $this->_sections['article']['total']);
?>
	<tr class="datalist" onmousemove="javascript:this.bgColor='#F7FBFE';"onmouseout="javascript:this.bgColor='#FFFFFF';">
      <td><a href="../<?php echo $this->_tpl_vars['article_list'][$this->_sections['article']['index']]['url']; ?>
" target="_blank"><?php echo $this->_tpl_vars['article_list'][$this->_sections['article']['index']]['title']; ?>
</a></td>
      <td><?php echo $this->_tpl_vars['article_list'][$this->_sections['article']['index']]['user_name']; ?>
</td>
      <td><?php echo $this->_tpl_vars['article_list'][$this->_sections['article']['index']]['source']; ?>
</td>
      <td><?php echo ((is_array($_tmp=$this->_tpl_vars['article_list'][$this->_sections['article']['index']]['pub_date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d") : smarty_modifier_date_format($_tmp, "%Y-%m-%d")); ?>
</td>
      <td><?php echo $this->_tpl_vars['article_list'][$this->_sections['article']['index']]['click']; ?>
</td>
      <td><?php echo $this->_tpl_vars['article_list'][$this->_sections['article']['index']]['comment']; ?>
</td>
      <td align="center"><a href="article.php?act=edit&id=<?php echo $this->_tpl_vars['article_list'][$this->_sections['article']['index']]['id']; ?>
">�༭</a>&nbsp;|&nbsp;<a href="article.php?act=del&id=<?php echo $this->_tpl_vars['article_list'][$this->_sections['article']['index']]['id']; ?>
">ɾ��</a></td>
    </tr>
    <?php endfor; else: ?>
  <tr>
    <td class="datalist" colspan="7">û���ҵ��κμ�¼</td>
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