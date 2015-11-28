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



<div class="introduce-dmp">
	    <div class="arrows"><img src="http://www.talkingdata.com/images/pic-arrows.png"></div>
	    <div class="content-introduce">
	        <div class="introduce-title clearfix">
	            <span><img src="http://www.talkingdata.com/images/pic-introduce01.png"><font>数据提供方</font><em><img src="http://www.talkingdata.com/images/arrow-right.png"></em></span>
	            <span><img src="http://www.talkingdata.com/images/pic-introduce02.png"><font>数据需求方</font><em><img src="http://www.talkingdata.com/images/arrow-right.png"></em></span>
	            <span><img src="http://www.talkingdata.com/images/pic-introduce03.png"><font>数据服务方</font><em><img src="http://www.talkingdata.com/images/arrow-right.png"></em></span>
	            <span><img src="http://www.talkingdata.com/images/pic-introduce04.png"><font>及时更新优化</font></span>
	        </div>
	        <div class="introduce-words">
	            <span><font>精准投放需要购买或交换数据</font><font>自有大量数据需要更好的管理及分析能力</font><font>拥有多源数据需要整合打通服务</font><font>无论何种需求</font><font>都能在DMK中找到解决方案</font></span>
	            <span><font>TalkingData，海量移动数据、6大标签体系、400+数据标签</font><font>位置信息服务商，提供位置信息查询定位数据</font><font>广告监测服务商，提供广告效果反馈数据</font><font>媒体数据资源服务商，提供媒体资源及受众数据</font><font>我们以开放的心态期待更多数据提供者加入进来，实现数据的价值</font></span>
	            <span><font>提供投放服务的广告平台</font><font>提供潜客发掘能力的算法服务商</font><font>具有数据分析及计算能力服务商</font><font>我们为您提供海量的基础数据、优质的用户资源</font><font>助您展现更好的服务能力</font></span>
	            <span>有热数据才能发挥最大的效能，基于实时的采集框架，我们每日更新数据，保障最大程度准确。</span>
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
