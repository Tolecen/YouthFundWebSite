<?php
/**
 * Created by PhpStorm.
 * User: zzn
 * Date: 2015/9/7
 * Time: 9:45
 */
include("header_mobile.php");
?>
    <div class="top_article_m-bg">
        <div class="top_article_m">
            <div class="main">
                <div class="banner-top">
                    <div class="logo"><img title="<?php echo $GLOBALS['setting']['site_title']; ?>" src="<?php echo $GLOBALS['app']['scheme']; ?>://<?php echo $GLOBALS['app']['host']; ?>/static/css/images/part1/part1_toplogo.png"/>
                    </div>
                    <div class="link">
                        <a href="<?php echo $GLOBALS['app']['scheme']; ?>://<?php echo $GLOBALS['app']['host']; ?>" title="首页">首页</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="js_article" class="rich_media">

        <div class="rich_media_inner">
            <div id="page-content">
                <div id="img-content" class="rich_media_area_primary">
                    <h2 class="rich_media_title c0786FE" id="activity-name">
                        <?php echo $article['topic_name'];?>
                    </h2>
                    <div class="c0786FE" style="margin-bottom: 10.0px"><?php echo date('Y-m-d', $article['created_time']); ?></div>

                    <div class="rich_media_content" id="js_content">
                        <?php echo $article['topic_desc']; ?>
                    </div>


                </div>

            </div>

        </div>
    </div>
<?php
include("footer.php");
?>