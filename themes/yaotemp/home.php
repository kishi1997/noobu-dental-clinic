<?php get_header(); ?>

    <div class="main-contents">
        <p style="padding: 50px; margin: 10px 0; background-color: #ccc;">main-contents: 1200px;</p>   
    </div>
    <div class="sub-contents">
        <p style="padding: 50px; margin: 10px 0; background-color: #eee;">sub-contents: 1000px;</p>   
    </div>
    <div class="slim-contents">
        <p style="padding: 50px; margin: 10px 0; background-color: #ccc;">slim-contents: 768px;</p>   
    </div>

    <!-- l-wrapper -->
    <div class="l-wrapper">

    	<main class="l-main">
        	<p style="margin: 100px 0;">トップページのコンテンツがここに入ります</p>

            <div class="main-contents">

                <!-- 記事一覧 -->
                <?php include("part-postlist.php"); ?>

                <!-- 施工事例一覧 -->
                <?php include("part-workslist.php"); ?>

                <!-- イベント一覧 -->
                <?php include("part-eventslist.php"); ?>

            </div>
    	</main>
    </div>
    <!-- /l-wrapper -->

    

<?php get_footer(); ?>
