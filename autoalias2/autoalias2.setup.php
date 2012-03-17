<?php
/* ====================
[BEGIN_COT_EXT]
Code=autoalias2
Name=AutoAlias 2
Description=Creates page alias from title if a user leaves it empty
Version=2.1.0
Date=2011-04-19
Author=Trustmaster
Copyright=All rights reserved (c) 2010-2011, Vladimir Sibirov.
Notes=BSD License
Auth_guests=R
Lock_guests=W12345A
Auth_members=RW
Lock_members=12345
Requires_modules=page
[END_COT_EXT]

[BEGIN_COT_EXT_CONFIG]
translit=01:radio::0:Transliterate non-latinic characters if possible
prepend_id=02:radio::0:Prepend page ID to alias
on_duplicate=03:select:ID,Random:ID:Number appended on duplicate alias (if prepend ID is off)
sep=04:select:-,_,.:-:Word separator
lowercase=05:radio::0:Cast to lower case
[END_COT_EXT_CONFIG]
==================== */

/**
 * Setup file
 *
 * @package autoalias2
 * @version 2.1.0
 * @author Trustmaster
 * @copyright (c) 2010 Vladimir Sibirov
 * @license BSD
 */

defined('COT_CODE') or die('Wrong URL');

?>
