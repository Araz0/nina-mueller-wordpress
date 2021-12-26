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
    content="Sie wollen leckeres Brot und Kuchen und Kekse backen, dann sind Sie hier genau richtig." />
  <meta property="og:title" content="Nina Müller" />
  <meta property="og:description"
    content="Sie wollen leckeres Brot und Kuchen und Kekse backen, dann sind Sie hier genau richtig." />
  <meta property="og:image" content="<?php echo get_template_directory_uri() ?>/graphics/Logo.png" />
  <meta property="og:image:alt" content="Logo von Nina Müller" />
  <meta property="og:locale" content="de_AT" />
  <meta property="og:type" content="website" />
  <meta name="twitter:card" content="summary" />
  <meta property="og:url" content="https://www.nina-meuller.com" />
  <link rel="canonical" href="https://www.nina-meuller.com" />

  <link rel="icon" href="<?php echo get_template_directory_uri() ?>/favicons/favicon.ico" />
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri() ?>/favicons/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri() ?>/favicons/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri() ?>/favicons/favicon-16x16.png">
  <link rel="manifest" href="<?php echo get_template_directory_uri() ?>/favicons/site.webmanifest">
  <link rel="mask-icon" href="<?php echo get_template_directory_uri() ?>/favicons/safari-pinned-tab.svg" color="#5bbad5">
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri() ?>/favicons/favicon.ico">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="msapplication-config" content="<?php echo get_template_directory_uri() ?>/favicons/browserconfig.xml">
  <meta name="theme-color" content="#ffffff">

  <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/style.css">
  <?php wp_head();?>
</head>
