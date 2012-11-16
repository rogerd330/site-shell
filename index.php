<?php
/**
 * Roger Dickey, Jr
 * http://rogerdickeyjr.com/
 * http://github.com/rogerd330/
 * 11/15/12 10:05 PM
 */

include("templates/head.php");
?>

<div class="grid_12">
    <h1>Welcome!</h1>
</div>

<div class="clear"></div>

<div class="grid_6">
    This is my simple site shell!
    <p>
        Create your pages in  the web root:
        <pre>
            &lt;?php include("templates/head.php") ?&gt;

            [grid layout / page markup and content]

            &lt;?php include("templates/footer.php") ?&gt;
        </pre>
    </p>
</div>

<div class="grid_6">
    It uses <a href="http://960.gs/" target="_blank">960.gs</a> for the layout.
</div>

<div class="clear"></div>

<?php include("templates/footer.php") ?>