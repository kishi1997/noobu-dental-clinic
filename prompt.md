## prompt

・下記の html を wordpress のオリジナルテーマのファイルとして php で作成して、css は scss を使用すること。
・添付のデザインを wordpress のオリジナルテーマのファイルとして php でコーディングして、css は scss を使用すること。
・画像は作成済みなので、画像が入っている箇所は「src=?php bloginfo('template_url');?>/img/top-service-img1.jpg」で２、３と随時変更して
・クラス名はスネークケースで入れ子にして、top-srvice をセクションのクラス名にして、既存のクラス名は変えちゃっていいです。
・共通使用のボタンは共通パーツとして c-btn みたいなクラス名を使って
・サイトの共通フォントは Noto Sans JP で color は#000 で定義済みです
・font-size は 1rem で 10px になるように設定しているので、rem を使ってください（例：16px => 1.6rem）
・ファイル内にコメントは入れないでください
・レスポンシブ設計でスマホ時は１カラムです
・レスポンシブは下記の値を使用、スマホ表示の際は 1 カラムになるように設計
$breakpoint-header: 1340px; //header-menu用
$breakpoint-lg: 1280px; //large_pc
$breakpoint-md: 1080px; //medium_tab
$breakpoint-sm: 768px; //small_sp
$breakpoint-slider: 568px; //slider_sp
$breakpoint-xs: 480px; //sp

クラス名参考

<li class="top_flow__item">
<div class="top_flow__item_number">
</div>
</li>

変数は下記が定義済みです
$primary-color: #01255A;
$color_bg_item: #F4F4F4;
$text-color-light: white;
$background-color-light-gray: #F6F7FA;
$font-mincho : "Shippori Mincho",
serif;
$font-roboto : "Roboto",
sans-serif;
