<?php
    if (( get_post_type() == 'works')) {//worksは（小カテゴリも含め）全て    
        include(TEMPLATEPATH . '/archive-works.php');//archive-works.phpを使用 
    } else if  (( get_post_type() == 'events')){
        include(TEMPLATEPATH . '/archive-events.php');//archive-events.phpを使用
    } else {
        include(TEMPLATEPATH . '/archive-default.php');//それ以外はすべてarchive-default.phpを使用
    }
?>