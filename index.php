<?php
/**
 * Roger Dickey, Jr
 * http://rogerdickeyjr.com/
 * http://github.com/rogerd330/
 * 11/15/12 10:05 PM
 */

$page_title = "This is my home page!";
$meta_description = "This is sample page template.";
$meta_keywords = "site shell, open source, php framework, really simple";
include("templates/head.php");
?>

<div class="grid_12">
    <h1>Welcome to Site Shell!</h1>
</div>

<div class="clear"></div>

<div class="grid_8">
    <h2>How do I use it?</h2>
    <p>
        Create your pages in  the web root:
        <pre>
            &lt;?php
                $page_title = "Name Your Pages";
                $meta_description = "Describe this page.";
                $meta_keywords = "give us, a few, keywords";
                include("templates/head.php")
            ?&gt;

            [grid layout / page markup and content]

            &lt;?php include("templates/footer.php") ?&gt;
        </pre>
    </p>
</div>

<div class="grid_8">
    <h2>What's Included?</h2>
    <ul>
        <li>A basic HTML5 template</li>
        <li><a href="http://960.gs/" target="_blank">960.gs</a> for the layout</li>
        <li><a href="http://jquery.com/" target="_blank">jQuery</a> for your scripting needs</li>
    </ul>
</div>

<div class="clear"></div>

<div class="grid_12">
    <p>
        <a href="http://github.com/rogerd330/site-shell" target="_blank">Site-Shell on GitHub</a> by <a href="http://twitter.com/rogerdickeyjr" target="_blank">@rogerdickeyjr</a>
    </p>
</div>

<?php include("templates/footer.php") ?>