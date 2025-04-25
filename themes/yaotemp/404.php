<?php get_header(); ?>
    <div id="page-nf">
     <div class="wrapper">
         <h1>ページが見つかりません</h1>
         <p>申し訳ありません。<br>お探しのページは一時的に<br class="br-sm">アクセスできない状況にあるか、<br>削除され見つけることができません。</p>

         <ul>
             <li>
                 <a href="#" onclick="history.back()" return false;>
                     前のページに戻る
                 </a>
             </li>
             <li>
                 <a href="<?php echo home_url() ?>">
                     トップに戻る
                 </a>
             </li>
         </ul>
     </div>   
    </div>
<?php get_footer(); ?>