<?php
/**
 *
 * Display Only First Post. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2022, axew3, http://axew3.com
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

if (!defined('IN_PHPBB'))
{
  exit;
}

if (empty($lang) || !is_array($lang))
{
  $lang = [];
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, [

  'DISPLAYONLYFIRSTPOST_EVENT_REPLACEMENT_TEXT'   => '<h2><p class="error">You can only view the first post of this topic.<br />Please register or join the memberships allowed to view all the replies!</p></h2>',

  'ACP_DISPLAYONLYFIRSTPOST_GROUPS_IDS'     => 'Users GroupIDs (use comma as separator) that will see only the first post',
  'ACP_DISPLAYONLYFIRSTPOST_FORUMS_IDS'     => 'ForumIDs (use comma as separator) of forums in which only the topic start post can be read.<br />If you wish to show only the first post in all forums at once, enter the word <i style="color:red"><b>all</b></i> as value',
  'ACP_DISPLAYONLYFIRSTPOST_REP_MODE'       => 'Prepend custom content to the post text',
  'ACP_DISPLAYONLYFIRSTPOST_REP_CONTENT'    => 'Custom content that will be prepended to the post text. HTML/Javascript can be used. Double check that the markup you enter is correct.<br />If left blank, the default phrase will be used',
  'ACP_DISPLAYONLYFIRSTPOST_SETTING_SAVED'  => 'Settings have been saved successfully!',
  'ACP_DISPLAYONLYFIRSTPOST_NOTES' => 'Note that the extension will be inactive if no Usergroup(s) and Forum(s) have been declared',

]);
