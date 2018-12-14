<?php
/**
 * TorrentPier – Almighty
 *
 * @author lufton <lufton@gmail.com>
 */
$tpl = new TorrentPier\Legacy\Template(__DIR__);
$tpl->set_filenames(array('mod' => 'index.tpl'));
$tpl->pparse('mod');
