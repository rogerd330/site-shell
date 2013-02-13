<?php
/**
 * Roger Dickey, Jr
 * http://rogerdickeyjr.com/
 * http://github.com/rogerd330/
 * 11/15/12 9:59 PM
 */

require_once("includes/functions.php");

$site_name = "Site Shell";
$page_title = empty($page_title) ? "Home" : $page_title;
$meta_description = empty($meta_description) ? $page_title : $meta_description;
$meta_keywords = empty($meta_keywords) ? sprintf("%s, %s", $page_title, $site_name) : $meta_keywords;
list($page_name, $page_extension) = explode(".", basename($_SERVER["PHP_SELF"]));

?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title><?php echo sprintf("%s - %s", $page_title, $site_name) ?></title>
        <link href="favicon.ico" type="image/x-icon" rel="icon">
        <link href="favicon.ico" type="image/x-icon" rel="shortcut icon">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="<?php printf("%s", $meta_description) ?>">
        <meta name="keywords" content="<?php printf("%s", $meta_keywords) ?>">

        <meta property="og:title" content="<?php echo $page_title ?>">
        <meta property="og:site_name" content="<?php echo $site_name ?>">
        <meta property="og:description" content="<?php echo $meta_description ?>">
        <meta property="og:type" content="website">
        <meta property="og:url" content="<?php printf("%s/%s.%s", WWW_ROOT, $page_name, $page_extension) ?>">
        <meta property="og:image" content="<?php echo WWW_ROOT ?>/images/og-logo.jpg">

        <!--[if lt IE 9]>
        <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/text.css">
        <link rel="stylesheet" href="css/960.css">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>

    <div id="<?php echo $page_name ?>" class="container_16">