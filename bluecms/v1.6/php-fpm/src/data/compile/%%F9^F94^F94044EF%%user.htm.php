<?php /* Smarty version 2.6.22, created on 2018-11-20 12:15:13
         compiled from user.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'user.htm', 157, false),array('modifier', 'mb_substr', 'user.htm', 201, false),)), $this); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<meta name="Keywords" content="" />
<meta name="Description" content="" />
<title><?php echo $this->_tpl_vars['current_act']; ?>
 - <?php echo $this->_tpl_vars['site_name']; ?>
 - Powered by BlueCMS</title>
<link href="templates/default/css/index.css" rel="stylesheet" type="text/css" />
<link href="templates/default/css/user.css" rel="stylesheet" type="text/css" />
<link href="templates/default/css/common.css" rel="stylesheet" type="text/css" />
<script src="js/jquery.js" type="text/javascript"></script>
<script src="templates/default/css/publish.js" type="text/javascript"></script>
<link rel="shortcut icon" href="images/favicon.ico" />
<style type="text/css">
.datalist_title {
background-color:#F7FBFE;
border-bottom:1px solid #4294D0;
}
	
td {
margin:5px;
padding:5px;
vertical-align:middle;
}
.datalist td {
border-bottom:1px dotted #DEEFFB;
}
</style>	
<script type="text/javascript">
$(document).ready(function(){
	var id = get_menu('detail');
	if (id){
		show_menu(id);
	} else {
		show_menu(1);
	};
})
function get_menu(name){
	var strCookie=document.cookie;
	var arrCookie=strCookie.split("; ");
	for(var i=0;i<arrCookie.length;i++){
		var arr=arrCookie[i].split("=");
		if(arr[0]==name)return arr[1];
	}
	return "";
}

function show_menu(id){
	var div_arr = new Array("1","2","3","4","5");
	for(i=0;i<div_arr.length;i++){
		document.getElementById("detail"+div_arr[i]).style.display = "none";
		document.getElementById("menu"+div_arr[i]).className = "block";
	}
	document.getElementById("detail"+id).style.display = "block";
	document.getElementById("menu"+id).className = "current";
	var date=new Date();
	var expireHours=1;
	date.setTime(date.getTime()+expireHours*3600*1000);
	document.cookie="detail="+id+";expires="+date.toGMTString();
} 
</script>
</head>
<body>
<div id="top_nav">
	<div id="top_nav_left">
		<ul>
		<li>����,��ӭ���ķ���!</li>
		<?php if ($this->_tpl_vars['user_name']): ?>
		<li><font style="color:#ff6600;font-weight:bold;"><?php echo $this->_tpl_vars['user_name']; ?>
</font></li>
		<li><a href="user.php?act=logout">�˳�</a></li>
		<?php else: ?>
		<li><a href="user.php?act=login">��¼</a></li>
		<li><a href="user.php?act=reg">���ע��</a></li>
		<?php endif; ?>
		</ul>
	</div>
	<div id="top_nav_right">
	<ul><li><a href="JavaScript:" onClick="var strHref=window.location.href;this.style.behavior='url(#default#homepage)';this.setHomePage('<?php echo $this->_tpl_vars['site_url']; ?>
');">��Ϊ��ҳ</a></li><li><a href="javascript:window.external.AddFavorite(location.href, document.title)">�����ղ�</a></li></ul>
	</div>
</div>

<div class="clear"></div>
<div id="wapper">
	<div id="top">
		<a href="./" target="_self" class="logo"><img src="templates/default/images/logo.gif" alt="<?php echo $this->_tpl_vars['site_name']; ?>
" border="0" /></a>
	</div>
	<div class="clear"></div>
	<div class="u_active">
		�����ڵ�λ�ã�<a href="./">��ҳ</a> &raquo; <?php echo $this->_tpl_vars['current_act']; ?>
	</div>
	<div class="main">
		<div class="main_l">
			<h2>
				<span class="l_top"></span>
				<p class="m_title">��Ա����</p>
				<span class="r_top"></span>
			</h2>
			<div class="menu_list">
			<ul>
				<li><h4 onclick="show_menu(1);" id="menu1" class="current">
					<span class="title">��������</span></h4>
					<div style="display: none;" class="detail" id="detail1">
						<a href="user.php?act=add_news">��������</a><br/>
						<a href="user.php?act=news_manage">��������</a><br/>
					</div>
				</li>
				<li><h4 onclick="show_menu(2);" id="menu2" class="current">
					<span class="title">������Ϣ</span></h4>
					<div style="display: none;" class="detail" id="detail2">
						<a href="publish.php">����������Ϣ</a><br/>
						<a href="user.php?act=manage">�����ҵ���Ϣ</a><br/>
					</div>
				</li>
				<li><h4 onclick="show_menu(3);" id="menu3" class="block">
					<span class="title">��ֵ����</span></h4>
					<div style="display: none;" class="detail" id="detail3">
						<a href="user.php?act=buy">��ҳ�ֵ</a><br/>
						<a href="user.php?act=account_manage">�˻�����</a><br/>
					</div>
				</li>
				<li><h4 onclick="show_menu(4);" id="menu4" class="block">
					<span class="title">�û�����</span></h4>
					<div style="display: none;" class="detail" id="detail4">
						<a href="user.php?act=my_info">�ҵĸ�������</a><br/>
						<a href="user.php?act=edit_pwd">�޸�����</a><br/>
						<a href="user.php?act=logout">�˳���¼</a><br/>
					</div>
				</li>
				<li><h4 onclick="show_menu(5);" id="menu5" class="block">
					<span class="title">��վ��Ϣ</span></h4>
					<div style="display: none;" class="detail" id="detail5">
						<?php unset($this->_sections['a']);
$this->_sections['a']['name'] = 'a';
$this->_sections['a']['loop'] = is_array($_loop=$this->_tpl_vars['ann_cat']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['a']['show'] = true;
$this->_sections['a']['max'] = $this->_sections['a']['loop'];
$this->_sections['a']['step'] = 1;
$this->_sections['a']['start'] = $this->_sections['a']['step'] > 0 ? 0 : $this->_sections['a']['loop']-1;
if ($this->_sections['a']['show']) {
    $this->_sections['a']['total'] = $this->_sections['a']['loop'];
    if ($this->_sections['a']['total'] == 0)
        $this->_sections['a']['show'] = false;
} else
    $this->_sections['a']['total'] = 0;
if ($this->_sections['a']['show']):

            for ($this->_sections['a']['index'] = $this->_sections['a']['start'], $this->_sections['a']['iteration'] = 1;
                 $this->_sections['a']['iteration'] <= $this->_sections['a']['total'];
                 $this->_sections['a']['index'] += $this->_sections['a']['step'], $this->_sections['a']['iteration']++):
$this->_sections['a']['rownum'] = $this->_sections['a']['iteration'];
$this->_sections['a']['index_prev'] = $this->_sections['a']['index'] - $this->_sections['a']['step'];
$this->_sections['a']['index_next'] = $this->_sections['a']['index'] + $this->_sections['a']['step'];
$this->_sections['a']['first']      = ($this->_sections['a']['iteration'] == 1);
$this->_sections['a']['last']       = ($this->_sections['a']['iteration'] == $this->_sections['a']['total']);
?>
						<a href="ann.php?cid=<?php echo $this->_tpl_vars['ann_cat'][$this->_sections['a']['index']]['cid']; ?>
" target="_blank"><?php echo $this->_tpl_vars['ann_cat'][$this->_sections['a']['index']]['cat_name']; ?>
</a><br/>
						<?php endfor; endif; ?>
					</div>
				</li>
			</ul>
			</div>
  	  </div>
	  <div class="main_r">
	    <?php if ($this->_tpl_vars['act'] == 'default'): ?>
	  		<div class="user_info">
				<h3>��Ա����</h3>
				<div class="upic_left">
					<table>
						<tbody><tr><td valign="middle" align="center"><img src="<?php if ($this->_tpl_vars['user']['face_pic']): ?><?php echo $this->_tpl_vars['user']['face_pic']; ?>
<?php else: ?>templates/default/images/nopic.gif<?php endif; ?>"/></td></tr>
						</tbody>
					</table>
				</div>
				<div class="uinfo_right">
					<table>
						<tr height=20>
							<td style="text-align:right;width:130px;color:#07519A;">�Ա�</td>
							<td><?php if ($this->_tpl_vars['user']['sex'] == 0): ?>����<?php elseif ($this->_tpl_vars['user']['sex'] == 1): ?>��<?php else: ?>Ů<?php endif; ?></td>
						</tr>
						<tr height=20>
							<td style="text-align:right;width:130px;color:#07519A;">ע��ʱ�䣺</td>
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['user']['reg_time'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d") : smarty_modifier_date_format($_tmp, "%Y-%m-%d")); ?>
</td>
						</tr>
						<tr height=20>
							<td style="text-align:right;width:130px;color:#07519A;">�������ڣ�</td>
							<td><?php echo $this->_tpl_vars['user']['birthday']; ?>
</td>
						</tr>
						<tr height=20>
							<td style="text-align:right;width:130px;color:#07519A;">�־�ס�أ�</td>
							<td><?php echo $this->_tpl_vars['user']['address']; ?>
</td>
						</tr>
						<tr height=20>
							<td style="text-align:right;width:130px;color:#07519A;">���䣺</td>
							<td><?php echo $this->_tpl_vars['user']['email']; ?>
</td>
						</tr>
						<tr height=20>
							<td style="text-align:right;width:130px;color:#07519A;">QQ��</td>
							<td><?php echo $this->_tpl_vars['user']['qq']; ?>
</td>
						</tr>
					</table>
				</div>
			</div>
			<div class="u_warning"><b>������ʾ��</b>��ע�Ᵽ���������û���Ϣ���Ա�֤�����ʺź��ʽ�ȫ��</div>
			<div class="u_service">
				<ul><?php unset($this->_sections['a']);
$this->_sections['a']['name'] = 'a';
$this->_sections['a']['loop'] = is_array($_loop=$this->_tpl_vars['ann_arr']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['a']['show'] = true;
$this->_sections['a']['max'] = $this->_sections['a']['loop'];
$this->_sections['a']['step'] = 1;
$this->_sections['a']['start'] = $this->_sections['a']['step'] > 0 ? 0 : $this->_sections['a']['loop']-1;
if ($this->_sections['a']['show']) {
    $this->_sections['a']['total'] = $this->_sections['a']['loop'];
    if ($this->_sections['a']['total'] == 0)
        $this->_sections['a']['show'] = false;
} else
    $this->_sections['a']['total'] = 0;
if ($this->_sections['a']['show']):

            for ($this->_sections['a']['index'] = $this->_sections['a']['start'], $this->_sections['a']['iteration'] = 1;
                 $this->_sections['a']['iteration'] <= $this->_sections['a']['total'];
                 $this->_sections['a']['index'] += $this->_sections['a']['step'], $this->_sections['a']['iteration']++):
$this->_sections['a']['rownum'] = $this->_sections['a']['iteration'];
$this->_sections['a']['index_prev'] = $this->_sections['a']['index'] - $this->_sections['a']['step'];
$this->_sections['a']['index_next'] = $this->_sections['a']['index'] + $this->_sections['a']['step'];
$this->_sections['a']['first']      = ($this->_sections['a']['iteration'] == 1);
$this->_sections['a']['last']       = ($this->_sections['a']['iteration'] == $this->_sections['a']['total']);
?>
					<li><a href="ann.php?ann_id=<?php echo $this->_tpl_vars['ann_arr'][$this->_sections['a']['index']]['ann_id']; ?>
" target="_blank"><?php echo $this->_tpl_vars['ann_arr'][$this->_sections['a']['index']]['title']; ?>
</a></li>
					<?php endfor; endif; ?>
				</ul>
			</div>
		<?php endif; ?>
		
		<?php if ($this->_tpl_vars['act'] == 'news_manage'): ?>
			<table width="100%" cellpadding="3" cellspacing="1">
			  <tr>
			      <th class="datalist_title">���ű���</th>
			      <th class="datalist_title">��Դ��</th>
			      <th class="datalist_title">����ʱ��</th>
			      <th class="datalist_title">�Ƿ��Ƽ�</th>
			      <th class="datalist_title">�Ƿ����</th>
			      <th class="datalist_title">�����</th>
			      <th class="datalist_title">������</th>
			      <th class="datalist_title" align="center">����</th>
			  </tr>
			    <?php unset($this->_sections['n']);
$this->_sections['n']['name'] = 'n';
$this->_sections['n']['loop'] = is_array($_loop=$this->_tpl_vars['news_list']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['n']['show'] = true;
$this->_sections['n']['max'] = $this->_sections['n']['loop'];
$this->_sections['n']['step'] = 1;
$this->_sections['n']['start'] = $this->_sections['n']['step'] > 0 ? 0 : $this->_sections['n']['loop']-1;
if ($this->_sections['n']['show']) {
    $this->_sections['n']['total'] = $this->_sections['n']['loop'];
    if ($this->_sections['n']['total'] == 0)
        $this->_sections['n']['show'] = false;
} else
    $this->_sections['n']['total'] = 0;
if ($this->_sections['n']['show']):

            for ($this->_sections['n']['index'] = $this->_sections['n']['start'], $this->_sections['n']['iteration'] = 1;
                 $this->_sections['n']['iteration'] <= $this->_sections['n']['total'];
                 $this->_sections['n']['index'] += $this->_sections['n']['step'], $this->_sections['n']['iteration']++):
$this->_sections['n']['rownum'] = $this->_sections['n']['iteration'];
$this->_sections['n']['index_prev'] = $this->_sections['n']['index'] - $this->_sections['n']['step'];
$this->_sections['n']['index_next'] = $this->_sections['n']['index'] + $this->_sections['n']['step'];
$this->_sections['n']['first']      = ($this->_sections['n']['iteration'] == 1);
$this->_sections['n']['last']       = ($this->_sections['n']['iteration'] == $this->_sections['n']['total']);
?>
				<tr class="datalist" onmousemove="javascript:this.bgColor='#F7FBFE';"onmouseout="javascript:this.bgColor='#FFFFFF';">
			      <td><a href="<?php echo $this->_tpl_vars['news_list'][$this->_sections['n']['index']]['url']; ?>
" target="_blank"><?php echo ((is_array($_tmp=$this->_tpl_vars['news_list'][$this->_sections['n']['index']]['title'])) ? $this->_run_mod_handler('mb_substr', true, $_tmp, 0, 10) : smarty_modifier_mb_substr($_tmp, 0, 10)); ?>
</a></td>
			      <td><?php echo $this->_tpl_vars['news_list'][$this->_sections['n']['index']]['source']; ?>
</td>
			      <td><?php echo ((is_array($_tmp=$this->_tpl_vars['news_list'][$this->_sections['n']['index']]['pub_date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d") : smarty_modifier_date_format($_tmp, "%Y-%m-%d")); ?>
</td>
			      <td><?php if ($this->_tpl_vars['news_list'][$this->_sections['n']['index']]['is_recommend'] == 0): ?>��<?php else: ?>��<?php endif; ?></td>
			      <td><?php if ($this->_tpl_vars['news_list'][$this->_sections['n']['index']]['is_check'] == 0): ?>δ���<?php else: ?>�����<?php endif; ?></td>
			      <td><?php echo $this->_tpl_vars['news_list'][$this->_sections['n']['index']]['click']; ?>
</td>
			      <td><?php echo $this->_tpl_vars['news_list'][$this->_sections['n']['index']]['comment']; ?>
</td>
			      <td align="center"><a href="user.php?act=edit_news&id=<?php echo $this->_tpl_vars['news_list'][$this->_sections['n']['index']]['id']; ?>
">�༭</a>&nbsp;|&nbsp;<a href="user.php?act=del_news&id=<?php echo $this->_tpl_vars['news_list'][$this->_sections['n']['index']]['id']; ?>
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
		<?php endif; ?>

		<?php if ($this->_tpl_vars['act'] == 'add_news'): ?>
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "news_info.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		<?php endif; ?>
		
		<?php if ($this->_tpl_vars['act'] == 'edit_news'): ?>
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "news_info.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		<?php endif; ?>

		<?php if ($this->_tpl_vars['act'] == manage): ?>
		<table border="0" cellspacing="0" cellpadding="2" width="100%">
			<tr>
				<td class="datalist_title">����</td>
				<td class="datalist_title">����ʱ��</td>
				<td class="datalist_title">��Ч��</td>
				<td class="datalist_title">�������</td>
				<td class="datalist_title">���۴���</td>
				<td class="datalist_title">����</td>
			</tr>
			<?php unset($this->_sections['info']);
$this->_sections['info']['name'] = 'info';
$this->_sections['info']['loop'] = is_array($_loop=$this->_tpl_vars['myinfo']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['info']['show'] = true;
$this->_sections['info']['max'] = $this->_sections['info']['loop'];
$this->_sections['info']['step'] = 1;
$this->_sections['info']['start'] = $this->_sections['info']['step'] > 0 ? 0 : $this->_sections['info']['loop']-1;
if ($this->_sections['info']['show']) {
    $this->_sections['info']['total'] = $this->_sections['info']['loop'];
    if ($this->_sections['info']['total'] == 0)
        $this->_sections['info']['show'] = false;
} else
    $this->_sections['info']['total'] = 0;
if ($this->_sections['info']['show']):

            for ($this->_sections['info']['index'] = $this->_sections['info']['start'], $this->_sections['info']['iteration'] = 1;
                 $this->_sections['info']['iteration'] <= $this->_sections['info']['total'];
                 $this->_sections['info']['index'] += $this->_sections['info']['step'], $this->_sections['info']['iteration']++):
$this->_sections['info']['rownum'] = $this->_sections['info']['iteration'];
$this->_sections['info']['index_prev'] = $this->_sections['info']['index'] - $this->_sections['info']['step'];
$this->_sections['info']['index_next'] = $this->_sections['info']['index'] + $this->_sections['info']['step'];
$this->_sections['info']['first']      = ($this->_sections['info']['iteration'] == 1);
$this->_sections['info']['last']       = ($this->_sections['info']['iteration'] == $this->_sections['info']['total']);
?>
			<tr class="datalist" onmousemove="javascript:this.bgColor='#F7FBFE';"onmouseout="javascript:this.bgColor='#FFFFFF';">
				<td><a href="<?php echo $this->_tpl_vars['myinfo'][$this->_sections['info']['index']]['url']; ?>
" target="_blank"><?php echo ((is_array($_tmp=$this->_tpl_vars['myinfo'][$this->_sections['info']['index']]['title'])) ? $this->_run_mod_handler('mb_substr', true, $_tmp, 0, 20) : smarty_modifier_mb_substr($_tmp, 0, 20)); ?>
</a></td>
				<td><?php echo ((is_array($_tmp=$this->_tpl_vars['myinfo'][$this->_sections['info']['index']]['pub_date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d") : smarty_modifier_date_format($_tmp, "%Y-%m-%d")); ?>
</td>
				<td><?php echo $this->_tpl_vars['myinfo'][$this->_sections['info']['index']]['useful_time']; ?>
</td>
				<td><?php echo $this->_tpl_vars['myinfo'][$this->_sections['info']['index']]['click']; ?>
</td>
				<td><?php echo $this->_tpl_vars['myinfo'][$this->_sections['info']['index']]['comment']; ?>
</td>
				<td><a href="user.php?act=edit_info&post_id=<?php echo $this->_tpl_vars['myinfo'][$this->_sections['info']['index']]['post_id']; ?>
">�༭</a>&nbsp;|&nbsp;<a href="user.php?act=del&post_id=<?php echo $this->_tpl_vars['myinfo'][$this->_sections['info']['index']]['post_id']; ?>
">ɾ��</a></td>
			</tr>
			<?php endfor; else: ?>
			<tr>
				<td colspan="5">����û�����κ���Ϣ���Ͻ�<a href="publish.php" target="_blank"><font style="color:blue;">����һ��</font></a>�ɣ�</td>
			</tr>
			<?php endif; ?>
		</table>
		<?php endif; ?>
		<?php if ($this->_tpl_vars['act'] == 'edit_info'): ?>
		<form method="post" action="user.php" name="info_form" onsubmit="return check();">
<table>
  <tr>
				<td>��Ϣ���⣺</td><td><input type="text" name="title" class="inputbox" value="<?php echo $this->_tpl_vars['basic_info']['title']; ?>
" />
				</td>
			</tr>
			<tr>
				<td>�������ࣺ</td><td><select name="cat_id" class="inputbox" style="height:24px">
										<?php echo $this->_tpl_vars['cat_option']; ?>

								  </select></td>
			</tr>
			<tr>
				<td>����������</td><td><select name="area" class="inputbox" style="height:24px">
										<?php echo $this->_tpl_vars['area_option']; ?>

								  </select></td>
			</tr>
			<?php echo $this->_tpl_vars['insert_must_att']; ?>

			<tr>
				<td>��Ϣ��Ч�ڣ�</td><td><select name="useful_time">
				<option value="7" <?php if ($this->_tpl_vars['basic_info']['useful_time'] == 7): ?>selected="selected"<?php endif; ?>>һ������</option><option value="30" <?php if ($this->_tpl_vars['basic_info']['useful_time'] == 30): ?>selected="selected"<?php endif; ?>>һ����</option><option value="90" <?php if ($this->_tpl_vars['basic_info']['useful_time'] == 90): ?>selected="selected"<?php endif; ?>>������</option><option value="365" <?php if ($this->_tpl_vars['basic_info']['useful_time'] == 365): ?>selected="selected"<?php endif; ?>>һ��</option></select>
				</td>
			</tr>
			<tr>
				<td>��Ϣ������</td><td><textarea name="content" rows="6" cols="45"><?php echo $this->_tpl_vars['basic_info']['content']; ?>
</textarea></td>
			</tr>
		</table>
		<div class="clear"></div>
		<h3>ѡ����Ϣ</h3>
<table>
			<?php echo $this->_tpl_vars['insert_nomust_att']; ?>

			<tr>
				<td>ͼƬ��</td>
					<td>
						<?php echo $this->_tpl_vars['pic_list']; ?>

						<div style="margin: 5px; clear: both;" id="pic_show"></div><script>show_pic(0);</script>
						<div style="display: none;" id="imgTips"></div>
						<div class="clear"></div>
						<iframe width="650" height="46" frameborder="0" scrolling="no" src="publish.php?act=upload" id="upload_iframe" name="upload_iframe" marginheight="0" framespacing="0" marginwidth="0"></iframe>
					</td>
			</tr>
		</table>
		<div class="clear"></div>
		<h3>�߼�����</h3>
		<table>
			<tr><td>�Ƿ���ˣ�</td><td><select name="is_check">
						<option value="0" <?php if ($this->_tpl_vars['basic_info']['is_check'] == 0): ?>selected="selected"<?php endif; ?>>δ���</option>
						<option value="1" <?php if ($this->_tpl_vars['basic_info']['is_check'] == 1): ?>selected="selected"<?php endif; ?>>�����</option>
						</select></td>
			</tr>
			<tr><td>�Ƿ��Ƽ���</td><td><select name="is_recommend" id="is_recommend">
						<option value="0" <?php if ($this->_tpl_vars['basic_info']['is_recommend'] == 0): ?>selected="selected"<?php endif; ?>>��</option>
						<option value="1" <?php if ($this->_tpl_vars['basic_info']['is_recommend'] == 1): ?>selected="selected"<?php endif; ?>>��</option>
					</select>
					</td>
			</tr>
			<tr>
				<td>�Ƽ�ʱ��(��������)��</td>
				<td><input type="text" name="rec_time" id="rec_time" value="<?php echo $this->_tpl_vars['basic_info']['rec_time']; ?>
" size="10" />&nbsp;��&nbsp;&nbsp;<span id="rec_warning"></span>
				</td>
			</tr>
			<tr>
				<td>�ö���ʽ��</td>
				<td><select name="top_type" id="top_type">
						<option value="0" <?php if ($this->_tpl_vars['basic_info']['top_type'] == 0): ?>selected="selected"<?php endif; ?>>���ö�</option>
						<option value="1" <?php if ($this->_tpl_vars['basic_info']['top_type'] == 1): ?>selected="selected"<?php endif; ?>>С���ö�</option>
						<option value="2" <?php if ($this->_tpl_vars['basic_info']['top_type'] == 2): ?>selected="selected"<?php endif; ?>>�����ö�</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>�ö�ʱ��(��������)��</td>
				<td><input type="text" size="10" name="top_time" id="top_time" value="<?php echo $this->_tpl_vars['basic_info']['top_time']; ?>
" />&nbsp;��&nbsp;&nbsp;<span id="top_warning"></span></td>
			</tr>
			<tr><td>�Ƿ�ͷ����</td><td><select name="is_head_line" id="is_head_line">
						<option value="0" <?php if ($this->_tpl_vars['basic_info']['is_head_line'] == 0): ?>selected="selected"<?php endif; ?>>��</option>
						<option value="1" <?php if ($this->_tpl_vars['basic_info']['is_head_line'] == 1): ?>selected="selected"<?php endif; ?>>��</option>
					</select>
					</td>
			</tr>
			<tr>
				<td>ͷ��ʱ��(��������)��</td>
				<td><input type="text" name="head_line_time" id="head_line_time" value="<?php echo $this->_tpl_vars['basic_info']['head_line_time']; ?>
" size="10" />&nbsp;��&nbsp;&nbsp;<span id="head_line_warning"></span>
				</td>
			</tr>
		</table>
		<div class="clear"></div>
		<h3>��ϵ����Ϣ<em class="warning">(Ϊ��֤ʵ������Ϣ�ɿ�������д���Ǻŵ���ϵ��Ϣ��)</em></h3>
		<table class="data">
			<tr><td>��ϵ�ˣ�</td><td><input type="text" name="link_man" value="<?php echo $this->_tpl_vars['basic_info']['link_man']; ?>
" />&nbsp;<b class="warning">*</b></td></tr>
			<tr><td>��ϵ�绰��</td><td><input type="text" name="link_phone" value="<?php echo $this->_tpl_vars['basic_info']['link_phone']; ?>
" />&nbsp;<b class="warning">*</b></td></tr>
			<tr><td>��ϵEmail��</td><td><input type="text" name="link_email" value="<?php echo $this->_tpl_vars['basic_info']['link_email']; ?>
" /></td></tr>
			<tr><td>��ϵQQ��</td><td><input type="text" name="link_qq" value="<?php echo $this->_tpl_vars['basic_info']['link_qq']; ?>
" /></td></tr>
			<tr><td>��ϵ��ַ��</td><td><input type="text" name="link_address" style="width:300px;" value="<?php echo $this->_tpl_vars['basic_info']['link_address']; ?>
" /></td></tr>
		</table>
		<br>
		<div class="submit">
			<div>
			<input type="submit" name="submit" value="�ύ��Ϣ" />
			<input type="hidden" name="act" value="do_info_edit" />
			<input type="hidden" name="post_id" value="<?php echo $this->_tpl_vars['basic_info']['post_id']; ?>
" />
			<input type="hidden" name="lit_pic" value="<?php echo $this->_tpl_vars['basic_info']['lit_pic']; ?>
" />
			<input type="hidden" name="is_recommend1" value="<?php echo $this->_tpl_vars['basic_info']['is_recommend']; ?>
" />
			<input type="hidden" name="top_type1" value="<?php echo $this->_tpl_vars['basic_info']['top_type']; ?>
" />
			<input type="hidden" name="is_head_line1" value="<?php echo $this->_tpl_vars['basic_info']['is_head_line']; ?>
" />
			<input type="hidden" name="total" id="total" value="<?php echo $this->_tpl_vars['total']; ?>
" />
			<input type="hidden" name="service_arr" id="service_arr" value="<?php echo $this->_tpl_vars['service_arr']; ?>
" />
			</div>
		</div>
</form>
<script type="text/javascript">

function check()
{
	if(document.info_form.title.value=='')
	{
		alert("��Ϣ���Ʋ���Ϊ�գ�");
		document.info_form.title.focus();
		return false;
	}
	if(document.info_form.content.value=='')
	{
		alert("��Ϣ���ܲ���Ϊ�գ�");
		document.info_form.content.focus();
		return false;
	}
}

</script>
		<?php endif; ?>
		
		<?php if ($this->_tpl_vars['act'] == 'account_manage'): ?>
		<div class="balance">�����˻���ʣ<font style="color:#FF6600;"><?php echo $this->_tpl_vars['money']; ?>
</font>���, �ܳ�ֵ����� <?php echo $this->_tpl_vars['total_money']; ?>
 ���������ѽ����<?php echo $this->_tpl_vars['pay_money']; ?>
 ��</div>
		<br/>
		<div class="buy_card">��ֵ��¼</div>
		<table width="100%" border="1" cellspacing="0" cellpadding="2">
			<tr>
				<td class="datalist_title" width="220">��ֵ����</td>
				<td class="datalist_title" width="60">��ֵ</td>
				<td class="datalist_title" width="60">�۸�</td>
				<td class="datalist_title">����</td>
				<td class="datalist_title">״̬</td>
			</tr>
			<?php unset($this->_sections['c']);
$this->_sections['c']['name'] = 'c';
$this->_sections['c']['loop'] = is_array($_loop=$this->_tpl_vars['card_order_list']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['c']['show'] = true;
$this->_sections['c']['max'] = $this->_sections['c']['loop'];
$this->_sections['c']['step'] = 1;
$this->_sections['c']['start'] = $this->_sections['c']['step'] > 0 ? 0 : $this->_sections['c']['loop']-1;
if ($this->_sections['c']['show']) {
    $this->_sections['c']['total'] = $this->_sections['c']['loop'];
    if ($this->_sections['c']['total'] == 0)
        $this->_sections['c']['show'] = false;
} else
    $this->_sections['c']['total'] = 0;
if ($this->_sections['c']['show']):

            for ($this->_sections['c']['index'] = $this->_sections['c']['start'], $this->_sections['c']['iteration'] = 1;
                 $this->_sections['c']['iteration'] <= $this->_sections['c']['total'];
                 $this->_sections['c']['index'] += $this->_sections['c']['step'], $this->_sections['c']['iteration']++):
$this->_sections['c']['rownum'] = $this->_sections['c']['iteration'];
$this->_sections['c']['index_prev'] = $this->_sections['c']['index'] - $this->_sections['c']['step'];
$this->_sections['c']['index_next'] = $this->_sections['c']['index'] + $this->_sections['c']['step'];
$this->_sections['c']['first']      = ($this->_sections['c']['iteration'] == 1);
$this->_sections['c']['last']       = ($this->_sections['c']['iteration'] == $this->_sections['c']['total']);
?>
			<tr>
				<td><?php echo $this->_tpl_vars['card_order_list'][$this->_sections['c']['index']]['name']; ?>
</td>
				<td><?php echo $this->_tpl_vars['card_order_list'][$this->_sections['c']['index']]['value']; ?>
</td>
				<td><?php echo $this->_tpl_vars['card_order_list'][$this->_sections['c']['index']]['price']; ?>
</td>
				<td><?php echo ((is_array($_tmp=$this->_tpl_vars['card_order_list'][$this->_sections['c']['index']]['time'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d %H:%M:%S") : smarty_modifier_date_format($_tmp, "%Y-%m-%d %H:%M:%S")); ?>
</td>
				<td><?php if ($this->_tpl_vars['card_order_list'][$this->_sections['c']['index']]['is_pay'] == 1): ?>�Ѹ���<?php else: ?>δ����<?php endif; ?></td>
			</tr>
			<?php endfor; else: ?>
			<tr><td colspan="5">�����һ�û�й����κγ�ֵ����</td></tr>
			<?php endif; ?>
		</table>
		<br/>
		<div class="buy_record">���Ѽ�¼</div>
		<table width="100%" border="1" cellspacing="0" cellpadding="2">
			<tr>
				<td class="datalist_title" width="220">��Ϣ����</td>
				<td class="datalist_title" width="60">����</td>
				<td class="datalist_title" width="60">����</td>
				<td class="datalist_title">����</td>
			</tr>
			<?php unset($this->_sections['p']);
$this->_sections['p']['name'] = 'p';
$this->_sections['p']['loop'] = is_array($_loop=$this->_tpl_vars['pay_list']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['p']['show'] = true;
$this->_sections['p']['max'] = $this->_sections['p']['loop'];
$this->_sections['p']['step'] = 1;
$this->_sections['p']['start'] = $this->_sections['p']['step'] > 0 ? 0 : $this->_sections['p']['loop']-1;
if ($this->_sections['p']['show']) {
    $this->_sections['p']['total'] = $this->_sections['p']['loop'];
    if ($this->_sections['p']['total'] == 0)
        $this->_sections['p']['show'] = false;
} else
    $this->_sections['p']['total'] = 0;
if ($this->_sections['p']['show']):

            for ($this->_sections['p']['index'] = $this->_sections['p']['start'], $this->_sections['p']['iteration'] = 1;
                 $this->_sections['p']['iteration'] <= $this->_sections['p']['total'];
                 $this->_sections['p']['index'] += $this->_sections['p']['step'], $this->_sections['p']['iteration']++):
$this->_sections['p']['rownum'] = $this->_sections['p']['iteration'];
$this->_sections['p']['index_prev'] = $this->_sections['p']['index'] - $this->_sections['p']['step'];
$this->_sections['p']['index_next'] = $this->_sections['p']['index'] + $this->_sections['p']['step'];
$this->_sections['p']['first']      = ($this->_sections['p']['iteration'] == 1);
$this->_sections['p']['last']       = ($this->_sections['p']['iteration'] == $this->_sections['p']['total']);
?>
			<tr>
				<td><?php echo ((is_array($_tmp=$this->_tpl_vars['pay_list'][$this->_sections['p']['index']]['title'])) ? $this->_run_mod_handler('mb_substr', true, $_tmp, 0, 10) : smarty_modifier_mb_substr($_tmp, 0, 10)); ?>
</td>
				<td><?php echo $this->_tpl_vars['pay_list'][$this->_sections['p']['index']]['name']; ?>
</td>
				<td><?php echo $this->_tpl_vars['pay_list'][$this->_sections['p']['index']]['price']; ?>
</td>
				<td><?php echo ((is_array($_tmp=$this->_tpl_vars['pay_list'][$this->_sections['p']['index']]['time'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d %H:%M:%S") : smarty_modifier_date_format($_tmp, "%Y-%m-%d %H:%M:%S")); ?>
</td>
			</tr>
			<?php endfor; else: ?>
			<tr><td colspan="5">�����һ�û���κ�����</td></tr>
			<?php endif; ?>
		</table>
		<?php endif; ?>
		<?php if ($this->_tpl_vars['act'] == 'buy'): ?>
		<form action="user.php?act="do_buy" name="buy_form" method="post">
		<table width="100%">
		<tr>
			<td class="datalist_title" width="100" align="center">ѡ��</td>
			<td class="datalist_title">��ֵ������</td>
			<td class="datalist_title">��ֵ</td>
			<td class="datalist_title">�۸�</td>
		</tr>
		<?php unset($this->_sections['c']);
$this->_sections['c']['name'] = 'c';
$this->_sections['c']['loop'] = is_array($_loop=$this->_tpl_vars['card_list']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['c']['show'] = true;
$this->_sections['c']['max'] = $this->_sections['c']['loop'];
$this->_sections['c']['step'] = 1;
$this->_sections['c']['start'] = $this->_sections['c']['step'] > 0 ? 0 : $this->_sections['c']['loop']-1;
if ($this->_sections['c']['show']) {
    $this->_sections['c']['total'] = $this->_sections['c']['loop'];
    if ($this->_sections['c']['total'] == 0)
        $this->_sections['c']['show'] = false;
} else
    $this->_sections['c']['total'] = 0;
if ($this->_sections['c']['show']):

            for ($this->_sections['c']['index'] = $this->_sections['c']['start'], $this->_sections['c']['iteration'] = 1;
                 $this->_sections['c']['iteration'] <= $this->_sections['c']['total'];
                 $this->_sections['c']['index'] += $this->_sections['c']['step'], $this->_sections['c']['iteration']++):
$this->_sections['c']['rownum'] = $this->_sections['c']['iteration'];
$this->_sections['c']['index_prev'] = $this->_sections['c']['index'] - $this->_sections['c']['step'];
$this->_sections['c']['index_next'] = $this->_sections['c']['index'] + $this->_sections['c']['step'];
$this->_sections['c']['first']      = ($this->_sections['c']['iteration'] == 1);
$this->_sections['c']['last']       = ($this->_sections['c']['iteration'] == $this->_sections['c']['total']);
?>
		<tr class="datalist" onmousemove="javascript:this.bgColor='#F7FBFE';"onmouseout="javascript:this.bgColor='#FFFFFF';">
			<td align="center"><input type="radio" name="id" value="<?php echo $this->_tpl_vars['card_list'][$this->_sections['c']['index']]['id']; ?>
" /></td>
			<td><?php echo $this->_tpl_vars['card_list'][$this->_sections['c']['index']]['name']; ?>
</td>
			<td><?php echo $this->_tpl_vars['card_list'][$this->_sections['c']['index']]['value']; ?>
&nbsp;���</td>
			<td><?php echo $this->_tpl_vars['card_list'][$this->_sections['c']['index']]['price']; ?>
&nbsp;Ԫ</td>
		</tr>
		<?php endfor; else: ?>
		<tr><td colspan="3">��վ��û�Ƴ���ֵ���������ĵȴ���</td></tr>
		<?php endif; ?>
		<tr><td></td><td colspan="2"><input type="submit" class="button" name="submit" value="����" /><input type="hidden" name="act" value="do_buy" /></td></tr>
		</table>
		</form>
		<?php endif; ?>
		
		<?php if ($this->_tpl_vars['act'] == 'do_buy'): ?>
		<div><h3><?php echo $this->_tpl_vars['current_act']; ?>
</h3></div>
		<form name="pay_form" action="user.php?act=pay" method="post">
		<table>
			<tr><td>������:</td><td><?php echo $this->_tpl_vars['order_id']; ?>
</td></tr>
			<tr><td>��ֵ������:</td><td><?php echo $this->_tpl_vars['name']; ?>
</td></tr>
			<tr><td>��ֵ:</td><td><?php echo $this->_tpl_vars['value']; ?>
&nbsp;���</td></tr>
			<tr><td>�۸�:</td><td><?php echo $this->_tpl_vars['price']; ?>
&nbsp;Ԫ</td></tr>
			<tr><td colspan="2">֧����ʽ:</td></tr>
			<?php unset($this->_sections['p']);
$this->_sections['p']['name'] = 'p';
$this->_sections['p']['loop'] = is_array($_loop=$this->_tpl_vars['pay_list']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['p']['show'] = true;
$this->_sections['p']['max'] = $this->_sections['p']['loop'];
$this->_sections['p']['step'] = 1;
$this->_sections['p']['start'] = $this->_sections['p']['step'] > 0 ? 0 : $this->_sections['p']['loop']-1;
if ($this->_sections['p']['show']) {
    $this->_sections['p']['total'] = $this->_sections['p']['loop'];
    if ($this->_sections['p']['total'] == 0)
        $this->_sections['p']['show'] = false;
} else
    $this->_sections['p']['total'] = 0;
if ($this->_sections['p']['show']):

            for ($this->_sections['p']['index'] = $this->_sections['p']['start'], $this->_sections['p']['iteration'] = 1;
                 $this->_sections['p']['iteration'] <= $this->_sections['p']['total'];
                 $this->_sections['p']['index'] += $this->_sections['p']['step'], $this->_sections['p']['iteration']++):
$this->_sections['p']['rownum'] = $this->_sections['p']['iteration'];
$this->_sections['p']['index_prev'] = $this->_sections['p']['index'] - $this->_sections['p']['step'];
$this->_sections['p']['index_next'] = $this->_sections['p']['index'] + $this->_sections['p']['step'];
$this->_sections['p']['first']      = ($this->_sections['p']['iteration'] == 1);
$this->_sections['p']['last']       = ($this->_sections['p']['iteration'] == $this->_sections['p']['total']);
?>
			<tr>
				<td><?php if ($this->_tpl_vars['pay_list'][$this->_sections['p']['index']]['code'] != 'bank'): ?><input type="radio" name="pay" value="<?php echo $this->_tpl_vars['pay_list'][$this->_sections['p']['index']]['code']; ?>
" /><?php endif; ?></td>
				<td><?php echo $this->_tpl_vars['pay_list'][$this->_sections['p']['index']]['name']; ?>
<br/>
					<?php if ($this->_tpl_vars['pay_list'][$this->_sections['p']['index']]['code'] != 'bank'): ?><img src="<?php echo $this->_tpl_vars['pay_list'][$this->_sections['p']['index']]['logo']; ?>
" alt="<?php echo $this->_tpl_vars['pay_list'][$this->_sections['p']['index']]['name']; ?>
" /><br/><?php endif; ?>
					<?php echo $this->_tpl_vars['pay_list'][$this->_sections['p']['index']]['description']; ?>

				</td>
			</tr>
			<?php endfor; else: ?>
			<tr><td>û�п�ѡ���֧����ʽ������ϵ��վ����Ա��</td></tr>
			<?php endif; ?>
			<tr><td colspan="2"><input type="submit" name="submit" value="����֧��" />
			<input type="hidden" name="price" value="<?php echo $this->_tpl_vars['price']; ?>
" />
			<input type="hidden" name="id" value="<?php echo $this->_tpl_vars['order_id']; ?>
" />
			<input type="hidden" name="name" value="<?php echo $this->_tpl_vars['name']; ?>
" />
			</td></tr>
		</table>
		</form>
		<?php endif; ?>

		<?php if ($this->_tpl_vars['act'] == 'my_info'): ?>
		<form name="edit_form" action="user.php" method="post" enctype="multipart/form-data" onSubmit="return check()">
	      	<table width="100%" height="400">
	      			<tr>
	    				<td width="150" align="right">�û�ͷ��</td>
	    				<td align="left"><input type="text" name="face_pic1" value="<?php echo $this->_tpl_vars['user']['face_pic']; ?>
" class="inputbox" /></td>
	    			</tr>
	      			<tr>
	    				<td width="150" align="right">�ϴ���ͷ��</td>
	    				<td align="left"><input type="file" name="face_pic2" value="" class="inputbox" /></td>
	    			</tr>
	    			<tr>
	    				<td width="150" align="right">�������ڣ�</td>
	    				<td align="left"><input type="text" name="birthday" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['user']['birthday'])) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d') : smarty_modifier_date_format($_tmp, '%Y-%m-%d')); ?>
" class="inputbox" /></td>
	    			</tr>
	                <tr>
	                  <td width="150" align="right">�ԡ��� </td>
	                  <td align="left"><input type="radio" name="sex" value="0" <?php if ($this->_tpl_vars['user']['sex'] == 0): ?>checked="checked"<?php endif; ?> />
	                    ����&nbsp;&nbsp;
	                    <input type="radio" name="sex" value="1" <?php if ($this->_tpl_vars['user']['sex'] == 1): ?>checked="checked"<?php endif; ?>  />
	                    ��&nbsp;&nbsp;
	                    <input type="radio" name="sex" value="2" <?php if ($this->_tpl_vars['user']['sex'] == 2): ?>checked="checked"<?php endif; ?>  />
	                  Ů&nbsp;&nbsp; </td>
	                </tr>
	                <tr>
	                  <td width="150" align="right">�����ʼ���ַ�� </td>
	                  <td align="left"><input name="email" type="text" value="<?php echo $this->_tpl_vars['user']['email']; ?>
" class="inputbox" /></td>
	                </tr>
	                <tr>
	                  <td width="150" align="right">MSN��</td>
	                  <td align="left"><input name="msn" type="text" value="<?php echo $this->_tpl_vars['user']['msn']; ?>
" class="inputbox" />
	                  </td>
	                </tr>
	                <tr>
	                  <td width="150" align="right">QQ��</td>
	                  <td align="left"><input name="qq" type="text" value="<?php echo $this->_tpl_vars['user']['qq']; ?>
" class="inputbox" />
	                  </td>
	                </tr>
	                <tr>
	                  <td width="150" align="right">�칫�绰��</td>
	                  <td align="left"><input name="office_phone" type="text" value="<?php echo $this->_tpl_vars['user']['office_phone']; ?>
" class="inputbox" />
	                  </td>
	                </tr>
	                <tr>
	                  <td width="150" align="right">��ͥ�绰��</td>
	                  <td align="left"><input name="home_phone" type="text" value="<?php echo $this->_tpl_vars['user']['home_phone']; ?>
" class="inputbox" />
	                  </td>
	                </tr>
	                <tr>
	                  <td width="150" align="right">�ֻ���</td>
	                  <td align="left"><input name="mobile_phone" type="text" value="<?php echo $this->_tpl_vars['user']['mobile_phone']; ?>
" class="inputbox" />
	                  </td>
	                </tr>
					<tr>
	                  <td align="right" width="150">��ַ��</td>
	                  <td align="left"><input name="address" type="text" value="<?php echo $this->_tpl_vars['user']['address']; ?>
" class="inputbox" size="40"/>
	                  </td>
	                </tr>
			        <tr>
						<td>&nbsp;</td>
						<td align="left">
							<input name="act" type="hidden" value="edit_user_info" />
							<input name="submit" class="button" type="submit" value="ȷ���޸�" />
							<input type="hidden" name="face_pic3" value="<?php echo $this->_tpl_vars['user']['face_pic']; ?>
" />
						</td>
	                </tr>
	       </table>
	    </form>
    <?php endif; ?>
    <?php if ($this->_tpl_vars['act'] == edit_pwd): ?>
    	<form action="user.php" method="post" name="edit_pwd">
    		<table height="150" width="70%">
    			<tr>
			          <td width="28%" align="right">ԭ���룺</td>
			          <td width="76%" align="left"><input name="old_pwd" type="password" class="inputbox" value="" /></td>
			        </tr>
			        <tr>
			          <td width="28%" align="right">�����룺</td>
			          <td align="left"><input name="new_pwd" type="password" class="inputbox" value="" /></td>
			        </tr>
			        <tr>
			          <td width="28%" align="right">ȷ�����룺</td>
			          <td align="left"><input name="confirm_pwd" type="password" class="inputbox" value="" /></td>
	        		</tr>
	        		<tr>
	        			<td colspan="2" align="center"><input type="hidden" name="act" value="do_edit_pwd" /><input type="submit" class="button" name="submit" value="ȷ���޸�" /></td>
	        		</tr>
    		</table>
    	</form>
    <?php endif; ?>
  </div>
</div>
<div class="clear"></div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</div>
</body>
</html>