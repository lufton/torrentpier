<?php
/**
 * TorrentPier – Custom Template
 *
 * @author lufton <lufton@gmail.com>
 */
global $template;
$tpl_id = $template->vars['TPL_ID'];
if ($tpl_id && file_exists(__DIR__ . '/' . $tpl_id . '.tpl')) {
    $tpl = new TorrentPier\Legacy\Template(__DIR__);
    $tpl->set_filenames(array('mod' => "$tpl_id.tpl"));
    $tpl->pparse('mod');
}
