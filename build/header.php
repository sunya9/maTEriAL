<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php wp_title('-', true, 'right'); ?></title>
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="apple-touch-icon" href="/favicon.png">
    <link rel="icon" href="/favicon.png">
    <?php // or, set /favicon.ico for IE10 win ?>
    <meta name="msapplication-TileColor" content="#009688">
    <meta name="msapplication-TileImage" content="/favicon.png">
        <meta name="theme-color" content="#009688">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">
    <div id="container">
      <div id="container__inner">
        <header id="page__header" role="banner">
          <div id="header__inner">
            <h1 id="page__logo" itemprop="name"><a<?php !is_home() ? print ' href="'.home_url().'"' : print ''; ?>><?php bloginfo('name'); ?></a></h1>
            <h2 id="page__description" itemprop="description"><?php bloginfo('description'); ?></h2>
            <nav role="navigation" id="header__nav">
              <ul>
                <li id="nav__about"><a href="<?php echo home_url(); ?>/about"><span>About</span></a></li>
                <li id="nav__archives"><a href="<?php echo home_url(); ?>/archives"><span>Archives</span></a></li>
                <li id="nav__feed"><a href="<?php bloginfo('rss2_url'); ?>"><span>Feed</span></a></li>
                <li id="nav__twitter"><a href="https://twitter.com/unsweets"><span>Twitter</span></a></li>
                <li id="nav__github"><a href="https://github.com/sunya9/"><span>Github</span></a></li>
              </ul>
            </nav>
          </div>
        </header>
        