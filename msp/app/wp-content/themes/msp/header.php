<!DOCTYPE html>
<html lang="ja-JP" prefix="og: http://ogp.me/ns#" class="no-js">
<head>
<meta charset="utf-8" />
<link rel="canonical" href="" />
<meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
<title>特許業務法人M&Sパートナーズ</title>
<meta name="description" content="" />
<meta property="og:title" content="Title" />
<meta property="og:description" content="" />
<meta property="og:url" content="" />
<meta property="og:locale" content="ja_JP" />
<meta property="og:image" content="" />
<meta property="og:type" content="" />
<meta property="og:site_name" content="Title" />
<link rel="shortcut icon" href="/img/favicon.png">
<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" />
<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
<link rel="stylesheet" href="/css/component.css" type="text/css" />
<?php wp_head(); ?>
</head>
<body>
		<div id="st-container">
			<div class="st-pusher">
				<div class="st-content">
    <header>
        <div class="inr">
                <?php $locale = get_locale(); if ('en_US' == $locale  ) { ?><a href="/" class="logo"><img src="/img/logo.png" width="231" height="29" alt="M&S Partners" /></a><?php } else { ?><a href="/ja/" class="logo"><img src="/img/logo.png" width="231" height="29" alt="M&S Partners" /></a><?php } ?>
            <div id="nav-drawer">
                <input id="nav-input" type="checkbox" class="nav-unshown">
                <label id="nav-open" for="nav-input">
                  <div class="nav-icon-wrap"><span></span>
                  </div>
                </label>
                <div id="nav-content">
                  <?php $locale = get_locale(); if ('en_US' == $locale  ) { ?>
                  <?php $args = array( 'menu' => 'en_global_navigation'); wp_nav_menu( $args ); ?>
                  <?php } else { ?>
                  <?php $args = array( 'menu' => 'ja_global_navigation'); wp_nav_menu( $args ); ?>
                  <?php } ?>
                </div>
            </div>
            <ul class="gn">
                <?php $locale = get_locale(); if ('en_US' == $locale  ) { ?>
                <?php $args = array( 'menu_class' => 'gn', 'menu' => 'en_global_navigation'); wp_nav_menu( $args ); ?>
                <?php } else { ?>
                <?php $args = array( 'menu_class' => 'gn', 'menu' => 'ja_global_navigation'); wp_nav_menu( $args ); ?>
                <?php } ?>
            </ul>
            <div class="locale">
                <?php
if ($locale == 'ja') {
    $html = '<ul><li><a href="/">EN</a></li><li class="current"><a href="/ja/">JA</a></li></ul>';
    echo $html;
} else {
    $html = '<ul><li class="current"><a href="/">EN</a></li><li><a href="/ja/">JA</a></li></ul>';
    echo $html;
}
                 ;?>
            </div>
        </div>
    </header>
