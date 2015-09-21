<!DOCTYPE html>
<html>
<head>
    <title>填写项目-<?php echo $GLOBALS['setting']['site_title']; ?></title>
    <link href="<?php echo $GLOBALS['app']['scheme']; ?>://<?php echo $GLOBALS['app']['host']; ?>/static/css/bootstrap.css" rel='stylesheet' type='text/css' />
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo $GLOBALS['app']['scheme']; ?>://<?php echo $GLOBALS['app']['host']; ?>/static/js/jquery.min.js"></script>
    <!-- Custom Theme files -->
    <link href="<?php echo $GLOBALS['app']['scheme']; ?>://<?php echo $GLOBALS['app']['host']; ?>/static/css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!-- Custom Theme files -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="<?php echo $GLOBALS['setting']['seo_keyword']; ?>">
    <meta name="description" content="<?php echo $GLOBALS['setting']['seo_description']; ?>">
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!--webfont-->
    <link href='http://fonts.useso.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <!-- start slider -->
    <script type="text/javascript" src="<?php echo $GLOBALS['app']['scheme']; ?>://<?php echo $GLOBALS['app']['host']; ?>/static/js/modernizr.custom.28468.js"></script>
    <script type="text/javascript" src="<?php echo $GLOBALS['app']['scheme']; ?>://<?php echo $GLOBALS['app']['host']; ?>/static/js/move-top.js"></script>


    <script type="text/javascript" src="<?php echo $GLOBALS['app']['scheme']; ?>://<?php echo $GLOBALS['app']['host']; ?>/static/js/plupload.full.min.js"></script>
    <script type="text/javascript" src="<?php echo $GLOBALS['app']['scheme']; ?>://<?php echo $GLOBALS['app']['host']; ?>/static/js/jquery.blockUI.js"></script>
    <script type="text/javascript" src="<?php echo $GLOBALS['app']['scheme']; ?>://<?php echo $GLOBALS['app']['host']; ?>/static/js/register.js"></script>
</head>
<body>
<!-- header-section-starts -->
<div class="header" style="background:#44A9FA">
    <div class="container">
        <div class="logo" <?php if(!isMobile()){?> style="position: absolute;left: 70px;margin-top: 2.25em;" <?php }?>>
            <a href="<?php echo $GLOBALS['app']['scheme']; ?>://<?php echo $GLOBALS['app']['host']; ?>"><img <?php if(!isMobile()){?> width="280" <?php }else{?> width="300" <?php }?> src="<?php echo $GLOBALS['app']['scheme']; ?>://<?php echo $GLOBALS['app']['host']; ?>/static/images/logo.png" alt="" /></a>
        </div>
        <span class="menu" <?php if(!isMobile()){?> style="float: left;height: 109px;width: 100px;margin-top: 2.25em;" <?php }?> ></span>
        <div class="top-menu" <?php if(!isMobile()){?> style="position: absolute;right: 70px;margin-top: 2.25em;" <?php }?>>
            <ul>
                <li><a class="active scroll" href="<?php echo $GLOBALS['app']['scheme']; ?>://<?php echo $GLOBALS['app']['host']; ?>#home"><i class="home"></i>首页</a></li>
                <li><a class="scroll" href="<?php echo $GLOBALS['app']['scheme']; ?>://<?php echo $GLOBALS['app']['host']; ?>#news"><div class="message"><i class="news"></i><i class="news1"></i></div>动态</a></li>
                <li><a class="scroll" href="<?php echo $GLOBALS['app']['scheme']; ?>://<?php echo $GLOBALS['app']['host']; ?>#service"><div class="ser"><i class="service"></i><i class="service1"></i></div>项目</a></li>
                <li><a class="scroll" href="<?php echo $GLOBALS['app']['scheme']; ?>://<?php echo $GLOBALS['app']['host']; ?>#works"><div class="wrk"><i class="works"></i><i class="works1"></i></div>奖学金</a></li>
                <li><a class="scroll" href="<?php echo $GLOBALS['app']['scheme']; ?>://<?php echo $GLOBALS['app']['host']; ?>#team"><div class="tm"><i class="team"></i><i class="team1"></i></div>三人成虎</a></li>
                <li><a class="scroll" href="<?php echo $GLOBALS['app']['scheme']; ?>://<?php echo $GLOBALS['app']['host']; ?>#contact"><div class="cntc"><i class="contact"></i><i class="contact1"></i></div>联系</a></li>
                <div class="clearfix"></div>
            </ul>
            </ul>
        </div>
        <!-- script for menu -->
        <script>
            $( "span.menu" ).click(function() {
                $( ".top-menu" ).slideToggle( "slow", function() {
                    // Animation complete.
                });
            });
        </script>
        <!-- script for menu -->

        <div class="clearfix"></div>
    </div>
</div>
<div class="about-section">
    <div class="text-center">
        <h3 style="color: #333333;font-size: 3.3em;font-weight: 300;letter-spacing: 4px; margin-bottom: 1em">填写项目信息</h3>
    </div>
    <div class="container" style="border: 2px #e6e6e6 solid">
        <div class="about-section-head text-center">
            <h3 style="font-size: 2.3em; margin-top: 1em">基本信息</h3>
        </div>
        <form id="123">
            <div class="member_con register">
                <label class="form-con cb"><h3 class="fl w100"><b>*</b>
                        产品名称:</h3><input type="text" class="fl" id="id_pname"/>
                    <span class="fl commom">产品名称，如滴滴打车</span>
                </label>

                <label class="form-con cb"><h3 class="fl w100"><b>*</b>项目类型:</h3>
                    <select class="fl" id="id_ptype">
                        <option
                            value="0">社会项目</option>
                        <option
                            value="1">高校项目</option>
                    </select>
                </label>

                <label class="form-con cb"><h3 class="fl w100"><b>*</b>联系人:</h3><input type="text" class="fl"
                                                                                        id="id_user"/><span
                        class="fl commom">联系人姓名</span></label>
                <label class="form-con cb"><h3 class="fl w100"><b>*</b>联系方式:</h3><input type="text" class="fl"
                                                                                        id="id_mobile"/><span
                        class="fl commom">手机，只有管理员可见</span></label>
                <label class="form-con cb" style="padding-left: 398px;"><input type="text" class="fl" id="id_email"/><span
                        class="fl commom">邮箱，只有管理员可见</span></label>
                <label class="form-con cb" style="padding-left: 398px;"><input type="text" class="fl"
                                                                               id="id_weichart"/><span
                        class="fl commom">微信，只有管理员可见</span></label>


                <div class="company">

                <h2 class="tc pt30 cb" style="font-size: 2.3em;">公司信息</h2>
                <label class="form-con cb"><h3 class="fl w100"><b>*</b>所属公司:</h3><input type="text" class="fl"
                                                                                        id="id_company"/><span
                        class="fl commom">政府部门登记名称，如滴滴打车的所属公司为北京小桔科技有限公司</span></label>

                <label class="form-con cb"><h3 class="fl w100"><b>*</b>行业分类:</h3>
                    <select class="fl" id="id_industry">
                        <option
                            value="餐饮">餐饮</option>
                        <option
                            value="家政">家政</option>
                        <option
                            value="美业">美业</option>
                        <option
                            value="汽车">汽车</option>
                        <option
                            value="旅游">旅游</option>
                        <option
                            value="医疗">医疗</option>
                        <option
                            value="金融">金融</option>
                        <option
                            value="硬件">硬件</option>
                        <option
                            value="社交">社交</option>
                        <option
                            value="房产">房产</option>
                        <option
                            value="教育">教育</option>
                        <option
                            value="出行">出行</option>
                        <option
                            value="电商">电商</option>
                        <option
                            value="游戏">游戏</option>
                        <option
                            value="电台">电台</option>
                        <option
                            value="阅读">阅读</option>
                        <option
                            value="音乐">音乐</option>
                        <option
                            value="资讯">资讯</option>
                        <option
                            value="安全">安全</option>
                        <option
                            value="工具">工具</option>
                        <option
                            value="云计算">云计算</option>
                        <option
                            value="其他">其他</option>
                    </select>
                </label>
                <label class="form-con cb"><h3 class="fl w100"><b>*</b>融资进度:</h3><select class="fl" id="id_rzjd">
                        <option value="天使轮" selected >天使轮</option>
                        <option value="Pre A轮"  >Pre A轮</option>
                        <option value="A轮"  >A轮</option>
                        <option value="A+轮"  >A+轮</option>
                        <option value="B轮"  >B轮</option>
                        <option value="B+轮" >B+轮</option>
                        <option value="C轮" >C轮</option>
                        <option value="D轮" >D轮</option>
                        <option value="E轮"  >E轮</option>
                        <option value="F轮"  >F轮</option>
                        <option value="G轮"  >G轮</option>
                        <option value="H轮"  >H轮</option>
                        <option value="暂未融资"  >暂未融资</option>
                        <!--                    <option value="13" --><!-->我是投资人</option>-->
                    </select>
                    <span class="fl commom"></span></label>
                <label class="form-con cb">
                    <h3 class="fl w100">总融资金额:</h3>
                    <input type="text" class="fl" id="id_rzje"/>
                <span
                    class="fl commom">2000万元人民币，2亿美元等
                </span>
                </label>
                <label class="form-con cb"><h3 class="fl w100"><b>*</b>团队规模:</h3>
                    <select class="fl" id="id_tdgm">
                        <option value="1-10人">1-10人</option>
                        <option value="11-50人">11-50人</option>
                        <option value="51-300人">51-300人</option>
                        <option value="301-1000人">301-1000人</option>
                        <option value="1001人及以上">1001人及以上</option>
                    </select></label>

                <div class="form-con cb" style="position:relative;min-height:60px;"><h3 class="fl w100"><b>*</b>高管组成:</h3>
                <span class="commom" style="position:absolute;top:39px;left:660px;"><a href="#" id="reduceGg">(点击 -
                        进行删除)</a></span>
                <span class="commom" style="position:absolute;top:0px;left:660px;"><a href="#" id="addGg">(点击 +
                        继续添加)</a></span>

                    <div class="ggdiv fl">
                        <input class="ggxm" type="text" placeholder="请填写姓名"/>
                        <input class="ggzw" placeholder="请填写职位" type="text"/></div>


                    <div class="ggdiv fl cl" style="padding-left: 98px;padding-top: 8px;">
                        <input class="ggxm" placeholder="请填写姓名" type="text"/>
                        <input class="ggzw" type="text" placeholder="请填写职位"/></div>

                </div>
                </div>
                <h2 class="tc pt30 cb" style="font-size: 2.3em;">上传附件</h2>

                <div class="tc" style="line-height:2">
                    （双击图片删除）
                </div>
                <label class="form-con cb"><h3 class="fl user-upload-label">上传营业执照图片:</h3>
                    <a class="fr btn hui_btn  upload_image_browse_fj user-upload-uploader" id="browse_fj" >选择图片</a>
                    <span class="fl commom">格式：JPG</span>
                </label>

                <div class="browse_fj cl">

                </div>
                <label class="form-con cb "><h3 class="fl user-upload-label"><b>*</b>上传产品图片:</h3>
                    <a class="fr btn hui_btn upload_image_browse_cptp user-upload-uploader" id="browse_cptp"
                        >选择图片</a><span
                        class="fl commom">格式：JPG</span></label>

                <div class="browse_cptp cl">

                </div>
                <label class="form-con cb "><h3 class="fl user-upload-label" >上传产品二维码:</h3><a
                        id="browse_cpewm" class="fr btn hui_btn upload_image_browse_cpewm user-upload-uploader"
                        >选择图片</a><span class="fl commom">格式：JPG</span></label>

                <div class="browse_cpewm cl">

                </div>
                <label class="form-con cb upload_image_4"><h3 class="fl user-upload-label" >上传商业计划书、战略规划:</h3><a
                        id="browse_syjh" class="fr btn hui_btn upload_image_browse_syjh user-upload-uploader" >选择文件</a><span class="fl commom">可上传Word、PPt、Excel、JPG图片文件</span></label>

                <div class="browse_syjh cl">

                </div>
                <div class="reg_gz"><i id="reg_rule_id"></i><span>请您确认已阅读并同意遵守<a href="<?php echo $GLOBALS['app']['scheme']; ?>://<?php echo $GLOBALS['app']['host']; ?>/project/regrule" target="_blank">《青春在线创投基金协议》</a></span></div>
                <p class="member_submit fl">
                    <button class="btn blue_btn" id="id_save_btn" type="submit">保存</button>
                </p>
                <div class="cb"></div>
            </div>
        </form>

    </div>
</div>
<?php include("footer.php"); ?>
<script type="text/javascript">
    $(document).ready(function() {
        /*
         var defaults = {
         containerID: 'toTop', // fading element id
         containerHoverID: 'toTopHover', // fading element hover id
         scrollSpeed: 1200,
         easingType: 'linear'
         };
         */

        $().UItoTop({ easingType: 'easeOutQuart' });

    });
</script>

<script language="javascript">

    if(typeof(pgvMain) == 'function')

        pgvMain();
    $(function(){
        $(".reg_gz").click(function(){
            $(this).find("i").toggleClass("active");
        })
    })
</script>

<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

</body>
</html>