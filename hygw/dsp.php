<?php /*
Template Name: DSP
*/
?>
<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package vantage
 * @since vantage 1.0
 * @license GPL 2.0
 */

get_header(); ?>



<div class="introduce-container">
        <div class="introduce">
            <div class="introduce-content clearfix">
                <div class="describe">
                    <div class="part1">
                        <img src="http://www.adchina.com/contents/images/mdsp2.png" alt="">
                        <div class="writting">
                            <p>
                                易传媒移动广告需求方平台，作为中国最大的移动DSP，整合8万多APP媒体资源和200多家领先移动网站，每日产生10亿PV。15大媒体内容频道包含新闻、财经、汽车、生活、娱乐、游戏等，支持分类广告投放,有效覆盖相关用户。13种酷炫广告创意形式，满足广告主不同推广需求。</p>
                        </div>
                    </div>
                    <div class="part2">
                        <img src="http://www.adchina.com/contents/images/mdsp3.png" alt="" style="display:block;">
                        <div class="writting writting1">
                            <p>
                                每月覆盖中国4.2亿移动网民，触达80%中国智能手机用户</p>
                        </div>
                        <div class="writting writting2">
                            <p>
                                优质手机端、iPad端APP及独家互联网iPad流量资源，全面覆盖中国高端消费人群。结合159种人群数据标签，内容、机型、行为、回头客、时间、地域等9种定向控制手段，实现精准触达</p>
                        </div>
                        <div class="writting writting3">
                            <p>
                                创意全面支持手机和平板，囊括HTML5、LBS3.0、全屏、贴片等最前沿的广告形式，兼具互动与高冲击展示。通过实时动态创意优化等技术手段，力保广告投放效率的最大化</p>
                        </div>
                        <div class="writting writting4">
                            <p>
                                实时效果分析，10种数据报告类别，14项维度深度挖掘
                            </p>
                        </div>
                    </div>
                </div>
                <div class="submenu">
                    <div class="dsp-menu">
                        <a href="/DSP/Ddsp" class="ddsp"></a><a href="/DSP/Mdsp" class="mdsp">
                        </a><a href="/DSP/Vdsp" class="vdsp"></a>
                    </div>
                    <div class="contact">
                        <img src="http://www.adchina.com/contents/images/contact.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- <div id="primary" class="content-area">

		<div id="content" class="site-content" role="main">

			<?php get_template_part( 'loops/loop', siteorigin_setting('blog_archive_layout') ) ?>

		</div> 



</div> -->
<!-- #primary .content-area -->

<?//php get_sidebar(); ?>

<?php get_footer(); ?>
