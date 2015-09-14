<?php include ROOT_PATH.'/views/admin/header.php';?>
<body>
<style type="text/css">
	html{_overflow-y:scroll}
</style>

<div class="pad-10">
<div class="col-tab">
<ul class="tabBut cu-li">
<li id="tab_setting_1" class="on" ><A HREF="index.php?con=<?php echo $GLOBALS['setting']['adminpath'];?>&act=setting&type=site">站点信息</A></li>
</ul>
<div  class="contentList pad-10">
   <form enctype="multipart/form-data" action="index.php" method="post">
	<INPUT TYPE="hidden" NAME="commit" value="1">
	<INPUT TYPE="hidden" NAME="dotype" value="site">
	<INPUT TYPE="hidden" NAME="con" value="<?php echo $GLOBALS['setting']['adminpath'];?>">
	<INPUT TYPE="hidden" NAME="act" value="settingdata">
  <table width="100%" class="table_form">
 
    <tr>
      <th width="120px">网站名称：</th>
      <td><INPUT TYPE="text" class="input-text" NAME="site_title" id="title"  size="70" value="<?php echo $GLOBALS['setting']['site_title'];?>"> 	
商品导航站名称，将显示在导航条和标题中</td>
    </tr>
	 <tr>
      <th width="120px">网站logo：</th>
      <td>
	  <INPUT TYPE="file" NAME="site_logo"  value="">
	  <?php if($GLOBALS['setting']['site_logo']){?><img src="<?php echo $GLOBALS['setting']['site_logo'];?>" style="height:100px;"/><?php }?></td>
    </tr>
	 <tr>
      <th width="120px">网站地址：</th>
      <td><INPUT TYPE="text" class="input-text" NAME="site_url" id="charset"  size="50" value="<?php echo SITE_ROOT;?>">(后面不要加 "/")</td>
    </tr>
	<tr>
      <th width="120px">网站后台地址：</th>
      <td><INPUT TYPE="text" class="input-text" NAME="adminpath" id="charset"  size="50" value="<?php echo $GLOBALS['setting']['adminpath'];?>">(默认为admin)</td>
    </tr>
	<tr>
      <th width="120px">邮箱：</th>
      <td><INPUT TYPE="text" class="input-text" NAME="site_email" id="charset"  size="50" value="<?php echo $GLOBALS['setting']['site_email'];?>"></td>
    </tr>
	<tr>
      <th width="120px">地址：</th>
      <td><INPUT TYPE="text" class="input-text" NAME="site_address" id="charset"  size="50" value="<?php echo $GLOBALS['setting']['site_address'];?>"></td>
    </tr>
	<tr>
      <th width="120px">工作时间：</th>
      <td><INPUT TYPE="text" class="input-text" NAME="site_worktime" id="charset"  size="50" value="<?php echo $GLOBALS['setting']['site_worktime'];?>"></td>
    </tr>
	 <tr>
      <th width="120px">客服QQ：</th>
      <td><INPUT TYPE="text" class="input-text" NAME="site_qq" id="charset"  size="50" value="<?php echo $GLOBALS['setting']['site_qq'];?>"></td>
    </tr>
	 <tr>
      <th width="120px">备案信息：</th>
      <td><INPUT TYPE="text" class="input-text" NAME="site_benai" id="charset"  size="50" value="<?php echo $GLOBALS['setting']['site_benai'];?>"></td>
    </tr>
	<tr>
      <th width="120px"> 客服电话：</th>
      <td><INPUT TYPE="text" class="input-text" NAME="site_tel" id="charset"  size="50" value="<?php echo $GLOBALS['setting']['site_tel'];?>"></td>
    </tr>
	<tr>
      <th width="120px">底部版权信息：</th>
      <td><textarea style="width:300px;height:100px;" NAME="site_copyright"><?php echo $GLOBALS['setting']['site_copyright'];?></textarea></td>
    </tr>
	<tr>
      <th width="120px">第三方统计代码：</th>
      <td><textarea style="width:300px;height:100px;" NAME="site_tongji"><?php echo $GLOBALS['setting']['site_tongji'];?></textarea></td>
    </tr>
	<tr>
      <td></td>
      <td><INPUT TYPE="submit" class="button" value="提交"></td>
    </tr>
  </table>
  </FORM>
</div>



<div class="bk15"></div>
</div>
</div>
</body>

</html>