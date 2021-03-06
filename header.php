<!DOCTYPE html>
<html lang="ja">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="robots" content="noindex,nofollow" />
    <title><?php wp_title(' | ', true, 'right'); ?></title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <script type="text/javascript" src="http://localhost/wordpress/wp-content/themes/debris/js/jquery-3.4.1.min.js?ver=1.0.0" id="js-js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"></script>
    <?php wp_head(); ?>
</head>

<?php
    $uri = $_SERVER['REQUEST_URI'];
    $page = preg_split('/[\/]+/', $uri);
    if ($page[2] === '') {
?>
<body <?php body_class(); ?>>
    <?php get_sidebar(); ?>
    <div class="page-header">
        <a href="<?php echo esc_url(home_url( '/' )); ?>">
            <!-- ヘッダー画像が設定されている場合 -->
            <?php if ( get_header_image() ) : ?>
                <img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
            <!-- ヘッダー画像が設定されていない場合 -->
            <?php else: ?>
                <img src="<?php echo get_template_directory_uri(); ?>/img/header/header_logo.png">
            <?php endif; ?>
        </a>
    </div><!-- page-header -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>

<?php
    }
