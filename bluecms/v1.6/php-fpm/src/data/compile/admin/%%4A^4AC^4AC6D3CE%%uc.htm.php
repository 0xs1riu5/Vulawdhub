<?php /* Smarty version 2.6.22, created on 2018-11-20 11:06:06
         compiled from uc.htm */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<p class="action_nav">BlueCMS�������� - <?php echo $this->_tpl_vars['current_act']; ?>
</p>
<form method="post" action="uc_setting.php" name="uc_form" >
<?php if ($this->_tpl_vars['act'] == 'install'): ?>
<table>
  <tr>
    <td>�������˵�ַ:</td>
    <td><input type="text" name="uc_api" maxlengtd="60" size="30" value="" /></td>
	<td>��ֵ������װ�� UCenter��ᱻ��ʼ�������� UCenter��ַ����Ŀ¼�ı������£�<br />�޸Ĵ��һ������벻Ҫ�Ķ�
				  ����: http://www.site.com/ucenter (���Ҫ��'/')</td>
  </tr>
  <tr>
    <td>��ʼ������:</td>
    <td><input type="text" name="uc_admin_pwd" maxlengtd="60" size="30" value="" /></td>
  </tr>
  <tr>
    <td>�����IP��ַ:</td>
    <td><input type="text" name="uc_ip" size="30" value="" /></td>
	<td>������ķ������޷�ͨ���������� UCenter���������� UCenter �������� IP ��ַ</td>
  </tr>
  <tr>
    <td colspan="2" align="center">
      <input type="submit" value="�ύ" class="button" />
      <input type="reset" value="����" class="button" />
      <input type="hidden" name="act" value="install" />
   </td>
  </tr>
</table>
<?php endif; ?>
<?php if ($this->_tpl_vars['act'] == 'show'): ?>
<table>
<tr>
   <td colspan="2" align="left">Ӧ��ID: <?php echo $this->_tpl_vars['uc_config']['appid']; ?>
</td>
</tr>
<tr>
   <td colspan="2" align="left">����˵�ַ:</td>
</tr>
<tr>
   <td><input type="text" name="uc_config[ucapi]" value="<?php echo $this->_tpl_vars['uc_config']['ucapi']; ?>
" /></td>
   <td>���� UCenter��ַ����Ŀ¼�ı������£��޸Ĵ��һ������벻Ҫ�Ķ�<br />
				  ����: http://www.site.com/ucenter (���Ҫ��'/')��</td>
</tr>
<tr>
    <td colspan="2" align="left">����� IP:</td>
</tr>
<tr>
    <td><input type="text" name="uc_config[ucip]" value="<?php echo $this->_tpl_vars['uc_config']['ucip']; ?>
" /></td>
    <td>������������ռ��ɡ�������������������⵼�� UCenter ���Ӧ��ͨ��ʧ�ܣ��볢������Ϊ��Ӧ�����ڷ������� IP ��ַ��</td>
 </tr>
<tr>
    <td colspan="2" align="left">ͨ����Կ:</td>
 </tr>
 <tr>
    <td><input type="text" name="uc_config[uckey]" size="30" value="<?php echo $this->_tpl_vars['uc_config']['uckey']; ?>
" /></td>
    <td>ֻ����ʹ��Ӣ����ĸ�����֣��� 64 �ֽڡ�Ӧ�ö˵�ͨ����Կ����������ñ���һ�£������Ӧ�ý��޷��� UCenter ����ͨ��</td>
</tr>
<tr>
    <td colspan="2" align="left">���ӷ�ʽ:</td>
</tr>
    <tr>
        <td>      
        <select name="uc_config[connect]" onChange="if(this.value==''){document.getElementById('ucmysql').style.display = 'none';}else{document.getElementById('ucmysql').style.display = '';}">
			<option value="mysql" <?php if ($this->_tpl_vars['uc_config']['connect'] == 'mysql'): ?>selected="selected"<?php endif; ?>> ���ݿⷽʽ(MySQL) </option>
			<option value="" <?php if ($this->_tpl_vars['uc_config']['connect'] == ''): ?>selected="selected"<?php endif; ?>> �ӿڷ�ʽ(fsockopen) </option>
        </select>
        </td>
        <td>��������ķ��������绷��ѡ���ʵ������ӷ�ʽ</td>
    </tr>

    <tr>
        <td colspan="2">
            <table id="ucmysql" >
                <tr>
                    <td colspan="2" align="left">���ݿ������:</td>
                </tr>
                <tr>
                    <td width="225">
                    <input type="text" class="txt" name="uc_config[dbhost]" value="<?php echo $this->_tpl_vars['uc_config']['dbhost']; ?>
" />				
                    </td>
                    <td>Ĭ��:localhost, ��� MySQL �˿ڲ���Ĭ�ϵ� 3306������д������ʽ��127.0.0.1:�˿ں�</td>
                </tr>
                
                <tr>
                    <td colspan="2" align="left">���ݿ��û���:</td>
                </tr>
                <tr>
                    <td>
                    <input type="text" class="txt" name="uc_config[dbuser]" value="<?php echo $this->_tpl_vars['uc_config']['dbuser']; ?>
" />	
                    </td>
                    <td>��¼uc����˵����ݿ��û���</td>		
                </tr>
                
                <tr>
                    <td colspan="2" align="left">���ݿ�����:</td>
                </tr>                
                <tr>
                    <td>
                    <input type="text" name="uc_config[dbpass]" value="********" />	
                    </td>
                    <td>��¼uc��������ݿ�ʹ�õ�����</td>		
                </tr>
                
                <tr>
                    <td colspan="2" align="left">���ݿ���:</td>
                </tr>                
                <tr>
                    <td>
                    <input type="text" class="txt" name="uc_config[dbname]" value="<?php echo $this->_tpl_vars['uc_config']['dbname']; ?>
" />	
                    </td>
                    <td>uc����˵����ݿ����ơ�</td>		
                </tr>
                
                <tr>
                    <td colspan="2" align="left">���ݿ��ǰ׺:</td>
                </tr>                
                <tr>
                    <td>
                    <input type="text" class="txt" name="uc_config[dbtablepre]" value="<?php echo $this->_tpl_vars['uc_config']['dbtablepre']; ?>
" />	
                    </td>
                    <td>uc�����ʹ�õ����ݿ��ǰ׺</td>		
                </tr>
            </table>            
        </td>
    </tr>    
    
    <tr>
        <td colspan="2" align="left">��ȷ��������Ϣ:</td>
    </tr>
    <tr>
        <td>
            <textarea cols="20" rows="4" onFocus="tdis.select()">
define('UC_CONNECT', '<?php echo $this->_tpl_vars['uc_config']['connect']; ?>
');
define('UC_DBHOST', '<?php echo $this->_tpl_vars['uc_config']['dbhost']; ?>
');
define('UC_DBUSER', '<?php echo $this->_tpl_vars['uc_config']['dbuser']; ?>
');
define('UC_DBPW', '********');
define('UC_DBNAME', '<?php echo $this->_tpl_vars['uc_config']['dbname']; ?>
');
define('UC_DBCHARSET', 'gbk');
define('UC_DBTABLEPRE', '`<?php echo $this->_tpl_vars['uc_config']['dbname']; ?>
`.<?php echo $this->_tpl_vars['uc_config']['dbtablepre']; ?>
');
define('UC_DBCONNECT', '0');
define('UC_KEY', '<?php echo $this->_tpl_vars['uc_config']['uckey']; ?>
');
define('UC_API', '<?php echo $this->_tpl_vars['uc_config']['ucapi']; ?>
');
define('UC_CHARSET', 'gbk');
define('UC_IP', '<?php echo $this->_tpl_vars['uc_config']['ucip']; ?>
');
define('UC_APPID', '<?php echo $this->_tpl_vars['uc_config']['appid']; ?>
');
define('UC_PPP', '20');
            </textarea>
        </td>
        <td>��Ӧ�õ� UCenter ������Ϣ��ʧʱ�ɸ������Ĵ��뵽Ӧ�õ������ļ���</td>
    </tr>
	<tr>
    <td colspan="2" align="center">
      <input type="submit" value="�ύ" class="button" />
      <input type="reset" value="����" class="button" />
      <input type="hidden" name="act" value="edit" />
   </td>
  </tr>
</table>
	<?php endif; ?>
</form>
<br>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>