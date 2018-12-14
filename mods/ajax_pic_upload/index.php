<?php
/**
 * TorrentPier – Ajax Picture Upload Button
 *
 * @author lufton <lufton@gmail.com>
 */
require __DIR__ . '/config.php';
$config = $bb_cfg[basename(__DIR__)];
$tpl = new TorrentPier\Legacy\Template(__DIR__);
$tpl->set_filenames(array('mod' => 'index.tpl'));
$options = [];
foreach (scandir(__DIR__ . '/services') as $filename) {
    $service = pathinfo($filename, PATHINFO_FILENAME);
    if (trim($filename, '.')) $options[] = '<option value="' . $service . '"' . ($service===$config['default_service']?'selected':'') . '>' . $service . '</option>';
}
$tpl->assign_vars([
    'MODNAME' => basename(__DIR__),
    'CONFIG' => json_encode($config),
    'OPTIONS' => implode($options, '\r\n'),
    'SIZE' => $config['default_size'],
]);
$tpl->pparse('mod');
