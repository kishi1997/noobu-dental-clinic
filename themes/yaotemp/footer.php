<?php
// フッターメニューの項目を配列で定義 (WordPressのメニュー機能を使う場合は適宜変更)
$footer_nav_items_col1 = [
    ['label' => 'トップページ', 'url' => home_url('/')],
    ['label' => '札幌ノブデンタルインプラントクリニックについて', 'url' => home_url('/about/')],
    [
        'label' => 'サービス',
        'url' => home_url('/service/'),
        'children' => [
            ['label' => 'インプラント', 'url' => home_url('/service/implant/')],
            ['label' => '審美歯科', 'url' => home_url('/service/aesthetic/')],
            ['label' => 'セラミック治療', 'url' => home_url('/service/ceramic/')],
        ]
    ],
    ['label' => '選ばれる理由', 'url' => home_url('/reason/')],
    ['label' => 'あなたにピッタリの治療法は？', 'url' => home_url('/treatment-select/')],
    ['label' => 'よくある質問', 'url' => home_url('/faq/')],
    ['label' => '治療の流れ', 'url' => home_url('/flow/')],
];

$footer_nav_items_col2 = [
    ['label' => '治療費用', 'url' => home_url('/price/')],
    ['label' => '採用情報', 'url' => home_url('/recruit/')],
    ['label' => '院概要・診療時間・アクセス', 'url' => home_url('/clinic/')],
    [
        'label' => 'ブログ',
        'url' => home_url('/blog/'),
        'children' => [
            ['label' => 'お知らせ', 'url' => home_url('/category/news/')],
            ['label' => 'コラム', 'url' => home_url('/category/column/')],
            ['label' => 'スタッフブログ', 'url' => home_url('/category/staff-blog/')],
        ]
    ],
];
?>
<section class="c-contact__wrapper">
    <div class="c-contact">
        <div class="l-container">
            <div class="c-contact__inner">
                <div class="top_sec__ttl">
                    <div class="top_sec__ttl__bg">
                        <span>CONTACT</span>
                    </div>
                    <h3 class="top_sec__ttl__text">お問い合わせ</h3>
                </div>
                <p>お問い合わせ等は、以下からお気軽にご連絡ください。</p>
                <div class="c-contact__content">
                    <a class="" href="<?php bloginfo('url'); ?>/modelhouse" href="">
                        お問い合わせフォーム
                        <svg class="c-contact__icon" width="21" height="8" viewBox="0 0 21 8"
                            fill="<?php echo $primary_color;  ?>" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M20.4276 4.35355C20.6229 4.15829 20.6229 3.84171 20.4276 3.64645L17.2456 0.464466C17.0503 0.269204 16.7338 0.269204 16.5385 0.464466C16.3432 0.659728 16.3432 0.976311 16.5385 1.17157L19.3669 4L16.5385 6.82843C16.3432 7.02369 16.3432 7.34027 16.5385 7.53553C16.7338 7.7308 17.0503 7.7308 17.2456 7.53553L20.4276 4.35355ZM0.0740356 4V4.5H20.074V4V3.5H0.0740356V4Z"
                                fill="<?php echo $primary_color;  ?>" />
                        </svg></a>
                    <a class="" href="<?php bloginfo('url'); ?>/modelhouse" href="">
                        011-598-1181
                        <svg class="c-contact__icon" width="21" height="8" viewBox="0 0 21 8"
                            fill="<?php echo $primary_color;  ?>" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M20.4276 4.35355C20.6229 4.15829 20.6229 3.84171 20.4276 3.64645L17.2456 0.464466C17.0503 0.269204 16.7338 0.269204 16.5385 0.464466C16.3432 0.659728 16.3432 0.976311 16.5385 1.17157L19.3669 4L16.5385 6.82843C16.3432 7.02369 16.3432 7.34027 16.5385 7.53553C16.7338 7.7308 17.0503 7.7308 17.2456 7.53553L20.4276 4.35355ZM0.0740356 4V4.5H20.074V4V3.5H0.0740356V4Z"
                                fill="<?php echo $primary_color;  ?>" />
                        </svg></a>
                    <a class="" href="<?php bloginfo('url'); ?>/modelhouse" href="">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/ico-line.svg" alt="line-icon">
                        LINE相談
                        <svg class="c-contact__icon" width="21" height="8" viewBox="0 0 21 8"
                            fill="<?php echo $primary_color;  ?>" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M20.4276 4.35355C20.6229 4.15829 20.6229 3.84171 20.4276 3.64645L17.2456 0.464466C17.0503 0.269204 16.7338 0.269204 16.5385 0.464466C16.3432 0.659728 16.3432 0.976311 16.5385 1.17157L19.3669 4L16.5385 6.82843C16.3432 7.02369 16.3432 7.34027 16.5385 7.53553C16.7338 7.7308 17.0503 7.7308 17.2456 7.53553L20.4276 4.35355ZM0.0740356 4V4.5H20.074V4V3.5H0.0740356V4Z"
                                fill="<?php echo $primary_color;  ?>" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--l-footer-->
<footer class="l-footer">
    <div class="l-footer__inner">
        <div class="l-footer__content">
            <div class="l-footer__info">
                <div class="l-footer__info_logo_wrapper">
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="l-footer__info_logo_link">
                        <img src="<?php echo get_theme_file_uri('/img/logo.png'); ?>" alt="NOBU DENTAL CLINIC ロゴ"
                            class="l-footer__info_logo">
                    </a>
                </div>
                <div class="l-footer__info_clinic_details">
                    <p class="l-footer__info_clinic_name">札幌ノブデンタルインプラントクリニック</p>
                    <p class="l-footer__info_address">〒062-0934 札幌市豊平区平岸4条8丁目B</p>
                    <p class="l-footer__info_tel">
                        <span class="l-footer__info_tel_icon">
                            <img src="<?php echo get_theme_file_uri('/img/ico-tel.svg'); ?>" alt="tel-icon"
                                class="l-footer__info_logo">
                        </span>
                        011-598-1181
                    </p>
                </div>
            </div>

            <nav class="l-footer__nav">
                <div class="l-footer__nav_column">
                    <ul class="l-footer__nav_list">
                        <?php foreach ($footer_nav_items_col1 as $item) : ?>
                        <li class="l-footer__nav_item <?php echo !empty($item['children']) ? 'has-children' : ''; ?>">
                            <a href="<?php echo esc_url($item['url']); ?>"
                                class="l-footer__nav_link"><?php echo esc_html($item['label']); ?></a>
                            <?php if (!empty($item['children'])) : ?>
                            <ul class="l-footer__nav_sublist">
                                <?php foreach ($item['children'] as $child) : ?>
                                <li class="l-footer__nav_subitem">
                                    <a href="<?php echo esc_url($child['url']); ?>" class="l-footer__nav_sublink">-
                                        <?php echo esc_html($child['label']); ?></a>
                                </li>
                                <?php endforeach; ?>
                            </ul>
                            <?php endif; ?>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <div class="l-footer__nav_column">
                    <ul class="l-footer__nav_list">
                        <?php foreach ($footer_nav_items_col2 as $item) : ?>
                        <li class="l-footer__nav_item <?php echo !empty($item['children']) ? 'has-children' : ''; ?>">
                            <a href="<?php echo esc_url($item['url']); ?>"
                                class="l-footer__nav_link"><?php echo esc_html($item['label']); ?></a>
                            <?php if (!empty($item['children'])) : ?>
                            <ul class="l-footer__nav_sublist">
                                <?php foreach ($item['children'] as $child) : ?>
                                <li class="l-footer__nav_subitem">
                                    <a href="<?php echo esc_url($child['url']); ?>" class="l-footer__nav_sublink">-
                                        <?php echo esc_html($child['label']); ?></a>
                                </li>
                                <?php endforeach; ?>
                            </ul>
                            <?php endif; ?>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="l-footer__copyright">
            <p>© 2024 texttexttexttext. All rights reserved.</p>
            <a href="<?php echo esc_url(home_url('/privacy-policy/')); ?>">プライバシーポリシー</a>
        </div>
    </div>
</footer>
<!-- /l-footer -->
<?php wp_footer(); ?>
</body>

</html>