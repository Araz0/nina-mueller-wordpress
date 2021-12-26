<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?php echo get_the_title()." | ".get_bloginfo('name'); ?></title>

  <script type="module">
  document.documentElement.classList.remove('no-js');
  document.documentElement.classList.add('js');
  </script>

  <meta name="description"
    content="The home of Nina Müller. Recipe tutorials, tips, techniques and the best bits from the archives. New uploads every week." />
  <meta property="og:title" content="Nina Müller" />
  <meta property="og:description"
    content="The home of Nina Müller. Recipe tutorials, tips, techniques and the best bits from the archives. New uploads every week." />
  <meta property="og:image" content="<?php echo get_template_directory_uri() ?>/images/nina-mueller-banner.png" />
  <meta property="og:image:alt" content="Logo von Nina Müller" />
  <meta property="og:type" content="website" />
  <meta name="twitter:card" content="summary" />
  <!-- We don't own this url so better not referece it -->
  <!-- <meta property="og:url" content="https://www.nina-meuller.com" /> -->
  <!-- <link rel="canonical" href="https://www.nina-meuller.com" /> -->

  <link rel="icon" href="<?php echo get_template_directory_uri() ?>/favicons/favicon.ico" />
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri() ?>/favicons/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri() ?>/favicons/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri() ?>/favicons/favicon-16x16.png">
  <link rel="manifest" href="<?php echo get_template_directory_uri() ?>/favicons/site.webmanifest">
  <link rel="mask-icon" href="<?php echo get_template_directory_uri() ?>/favicons/safari-pinned-tab.svg" color="#f683a4">
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri() ?>/favicons/favicon.ico">
  <meta name="msapplication-TileColor" content="#ffffff" />
  <meta name="msapplication-config" content="<?php echo get_template_directory_uri() ?>/favicons/browserconfig.xml">
  <meta name="theme-color" content="#ffffff">

  <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/style.css">
  <?php wp_head();?>
</head>
