<!DOCTYPE html>
<html>
<head>
    <title>项目详情-<?php echo $GLOBALS['setting']['site_title']; ?></title>
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
        <h3 style="color: #333333;font-size: 3.3em;font-weight: 300;letter-spacing: 4px; margin-bottom: 1em">项目：<?php echo $project['project_name'];?></h3>
    </div>
    <div class="container" style="border: 2px #e6e6e6 solid">
        <div class="about-section-head text-center">
            <h3 style="font-size: 2.3em; margin-top: 1em">基本信息</h3>
        </div>
            <div class="member_con register">
                <label class="form-con cb"><h3 class="fl w100">产品名称:</h3>
                    <span class="fl commom"><?php echo $project['project_name'];?></span>
                </label>

                <label class="form-con cb"><h3 class="fl w100">项目类型:</h3>
                    <span class="fl commom"><?php echo $project['project_type'];?></span>
                </label>

                <label class="form-con cb"><h3 class="fl w100">联系人:</h3>
                    <span class="fl commom"><?php echo $project['project_user'];?></span>
                </label>
                <label class="form-con cb"><h3 class="fl w100">联系方式:</h3>
                    <span
                        class="fl commom"><?php echo $project['project_user_mobile'];?>(手机)</span></label>
                <label class="form-con cb" style="padding-left: 398px;">
                    <span
                        class="fl commom"><?php echo $project['project_user_email'];?>(邮箱)</span></label>
                <label class="form-con cb" style="padding-left: 398px;">
                    <span
                        class="fl commom"><?php echo $project['project_user_weixin'];?>(微信)</span></label>

                <?php if($project['project_type_id'] == 0){ ;?>
                <div class="company">

                    <h2 class="tc pt30 cb" style="font-size: 2.3em;">公司信息</h2>
                    <label class="form-con cb"><h3 class="fl w100">所属公司:</h3>
                        <span
                            class="fl commom"><?php echo $project['project_company'];?></span></label>

                    <label class="form-con cb"><h3 class="fl w100">行业分类:</h3>
                        <span
                            class="fl commom"><?php echo $project['project_company_type'];?></span>
                    </label>
                    <label class="form-con cb"><h3 class="fl w100">融资进度:</h3><span
                            class="fl commom"><?php echo $project['project_company_financ_p'];?></span></label>
                    <label class="form-con cb">
                        <h3 class="fl w100">总融资金额:</h3>
                        <span
                            class="fl commom"><?php echo $project['project_company_financ'];?></span>
                    </label>
                    <label class="form-con cb"><h3 class="fl w100">团队规模:</h3>
                        <span
                            class="fl commom"><?php echo $project['project_company_team'];?></span></label>

                    <div class="form-con cb" style="position:relative;min-height:60px;"><h3 class="fl w100">高管组成:</h3>
                        <?php for($i = 0; $i < count($project['gg']); $i++){?>
                            <?php if( $i == 0) {?>
                            <div class="ggdiv fl">
                                <span
                                    class="fl commom"><?php echo $project['gg']['gg_mc'];?></span>
                                <span
                                    class="fl commom"><?php echo $project['gg']['gg_zw'];?></span>
                            </div>
                        <?php } else { ?>

                            <div class="ggdiv fl cl" style="padding-left: 98px;padding-top: 8px;">
                                <span
                                    class="fl commom"><?php echo $project['gg']['gg_mc'];?></span>
                                <span
                                    class="fl commom"><?php echo $project['gg']['gg_zw'];?></span>
                            </div>

                        <?php }} ?>

                    </div>
                </div>
                <?php } ?>
                <h2 class="tc pt30 cb" style="font-size: 2.3em;">上传附件</h2>

                <label class="form-con cb"><h3 class="fl user-upload-label">营业执照图片:</h3>
                </label>

                <div class="cl">
                    <?php for($i = 0; $i < count($project['bl']); $i++){?>
                    <div class="fl" style="position:relative;">
                        <img class="fl" style="height:118px;width:88px;" src="<?php echo $project['bl'][$i]['file']['host'].$project['bl'][$i]['file']['path'].$project['bl'][$i]['file']['key']; ?>" />
                        <a target="_blank" class="info-box-uploaded-look" href="<?php echo $project['bl'][$i]['file']['host'].$project['bl'][$i]['file']['path'].$project['bl'][$i]['file']['key']; ?>">预览</a>
                    </div>
                    <?php } ?>
                </div>
                <label class="form-con cb "><h3 class="fl user-upload-label">产品图片:</h3></label>

                <div class="cl">
                    <?php for($i = 0; $i < count($project['product']); $i++){?>
                        <div class="fl" style="position:relative;">
                            <img class="fl" style="height:118px;width:88px;" src="<?php echo $project['product'][$i]['file']['host'].$project['product'][$i]['file']['path'].$project['product'][$i]['file']['key']; ?>" />
                            <a target="_blank" class="info-box-uploaded-look" href="<?php echo $project['product'][$i]['file']['host'].$project['product'][$i]['file']['path'].$project['product'][$i]['file']['key']; ?>">预览</a>
                        </div>
                    <?php } ?>
                </div>
                <label class="form-con cb "><h3 class="fl user-upload-label" >产品二维码:</h3></label>

                <div class="cl">
                    <?php for($i = 0; $i < count($project['qr']); $i++){?>
                        <div class="fl" style="position:relative;">
                            <img class="fl" style="height:118px;width:88px;" src="<?php echo $project['qr'][$i]['file']['host'].$project['qr'][$i]['file']['path'].$project['qr'][$i]['file']['key']; ?>" />
                            <a target="_blank" class="info-box-uploaded-look" href="<?php echo $project['qr'][$i]['file']['host'].$project['qr'][$i]['file']['path'].$project['qr'][$i]['file']['key']; ?>">预览</a>
                        </div>
                    <?php } ?>
                </div>
                <label class="form-con cb upload_image_4"><h3 class="fl user-upload-label" >商业计划书、战略规划:</h3></label>

                <div class="cl" style="margin-bottom: 20px">
                    <?php for($i = 0; $i < count($project['plan']); $i++){?>
                        <div class="fl" style="position:relative;">
                            <?php if($project['plan'][$i]['file']['type'] == 'image') { ?>
                                <img class="fl" style="height:118px;width:88px;" src="<?php echo $project['plan'][$i]['file']['host'].$project['plan'][$i]['file']['path'].$project['plan'][$i]['file']['key']; ?>" />
                            <?php } else { ?>
                                <img class="fl" style="height:118px;width:88px;" src="<?php echo $GLOBALS['app']['scheme']; ?>://<?php echo $GLOBALS['app']['host']; ?>/static/images/icon_file.png" />
                            <?php } ?>
                            <?php if($project['plan'][$i]['file']['type'] == 'image') { ?>
                                <a target="_blank" class="info-box-uploaded-look" href="<?php echo $project['plan'][$i]['file']['host'].$project['plan'][$i]['file']['path'].$project['plan'][$i]['file']['key']; ?>">预览</a>
                            <?php } else { ?>
                                <a target="_blank" class="info-box-uploaded-look" href="<?php echo $project['plan'][$i]['file']['host'].$project['plan'][$i]['file']['path'].$project['plan'][$i]['file']['key']; ?>">下载</a>
                            <?php } ?>
                        </div>
                    <?php } ?>
                </div>
                <div class="cb"></div>
            </div>

    </div>
</div>
<?php include("footer.php"); ?>
<script type="text/javascript">
    $(document).ready(function() {

        $().UItoTop({ easingType: 'easeOutQuart' });

    });
</script>

<script language="javascript">

    if(typeof(pgvMain) == 'function')
        pgvMain();
</script>

<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

</body>
</html>