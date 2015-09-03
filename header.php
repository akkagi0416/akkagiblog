<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php wp_title( '|', true, 'right' ); ?><?php bloginfo( 'name' ); ?></title>
        <!--[if lt IE 9]>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
        <![endif]-->
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>">
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-54272662-1', 'auto');
  ga('send', 'pageview');

</script>

        <?php wp_head(); ?>
    </head>
    <body>

<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-W44CXK"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-W44CXK');</script>
<!-- End Google Tag Manager -->

        <header>
            <h1><a href="<?php echo home_url( '/' ); ?>"><?php bloginfo( 'title' ); ?></a></h1>
            <p class="search"><i class="fa fa-search"></i></p>
            <form role="search" method="get" class="searchform" action="<?php echo home_url( '/' ); ?>">
                <input type="text" value name="s" placeholder="検索...">
                <input type="submit" value="検索">
            </form>
            <nav><?php wp_nav_menu(); ?></nav>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- g_003 -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-6018661257488318"
     data-ad-slot="8174585384"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
        </header>
