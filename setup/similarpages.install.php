<?php
/**
 * Similar Pages for Cotonti CMF
 *
 * @version 2.00
 * @author esclkm, http://www.littledev.ru
 * @copyright (c) 2008-2011 esclkm, http://www.littledev.ru
 */

defined('COT_CODE') or die('Wrong URL');

require cot_incfile('page', 'module');
$db->query("ALTER TABLE $db_pages ADD FULLTEXT(page_title)");

?>