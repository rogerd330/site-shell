<?php
/**
 * Roger Dickey, Jr
 * http://rogerdickeyjr.com/
 * http://github.com/rogerd330/
 * 12/21/12 10:30 PM
 */

require_once("includes/config.php");

class BaseModel {
    protected $dbh = null;

    function create_db() {
        $this->dbh = new PDO(sprintf('mysql:host=%s;dbname=%s', DB_HOST, DB_NAME), DB_USER, DB_PASS);
    }

    function destroy_db() {
        $this->dbh = null;
    }
}