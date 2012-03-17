<?php
/* ====================
[BEGIN_COT_EXT]
Hooks=page.add.add.done,page.edit.update.done
[END_COT_EXT]
==================== */

/**
 * Creates alias when adding or updating a page
 *
 * @package autoalias2
 * @version 2.1.0
 * @author Trustmaster
 * @copyright (c) 2010-2011 Vladimir Sibirov
 * @license BSD
 */

defined('COT_CODE') or die('Wrong URL');

if (empty($rpage['page_alias']))
{
	require_once cot_incfile('autoalias2', 'plug');
	autoalias2_update($rpage['page_title'], $id);
}
?>
