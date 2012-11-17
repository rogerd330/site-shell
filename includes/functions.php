<?php
/**
 * Roger Dickey, Jr
 * http://rogerdickeyjr.com/
 * http://github.com/rogerd330/
 * 11/16/12 11:22 PM
 */

function enqueue_script($js) {
    Site::addScript($js);
}

function append_scripts() {
    $javascripts = Site::getScripts();
    if (!empty($javascripts)) {
        foreach ($javascripts as $js) {
            echo sprintf("<script type=\"text/javascript\" src=\"js/%s\"></script>\n", $js);
        }
    }
}

class Site {
    private static $scripts;

    public static function getScripts() {
        if (!isset(self::$scripts)) {
            self::$scripts = array();
        }
        return self::$scripts;
    }

    public static function addScript($js) {
        if (!isset(self::$scripts)) {
            self::$scripts = array();
        }
        self::$scripts[] = $js;
    }
}