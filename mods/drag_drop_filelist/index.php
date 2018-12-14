<?php
/**
 * TorrentPier – Drag and Drop Filelist Field
 *
 * @author lufton <lufton@gmail.com>
 */
require __DIR__ . '/config.php';
$tpl = new TorrentPier\Legacy\Template(__DIR__);
$tpl->set_filenames(array('mod' => 'index.tpl'));
$tpl->assign_vars([
    'MODNAME' => basename(__DIR__),
    'CONFIG' => json_encode($bb_cfg[basename(__DIR__)], JSON_UNESCAPED_SLASHES),
]);
$tpl->pparse('mod');
