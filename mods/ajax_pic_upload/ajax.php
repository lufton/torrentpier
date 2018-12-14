<?php
/**
 * TorrentPier – Ajax Picture Upload Button
 *
 * @author lufton <lufton@gmail.com>
 */
define('BB_SCRIPT', 'ajax_pic_upload');
define('IN_AJAX', true);

require __DIR__ . '/../../common.php';

class Ajax extends TorrentPier\Legacy\Ajax {
    function __construct() {
        parent::__construct();
        $this->valid_actions = ['upload' => ['user']];
    }
    function upload() {
        $tmp = sys_get_temp_dir() . '/' . $_FILES['img']['name'];
        move_uploaded_file($_FILES['img']['tmp_name'], $tmp);
        $file = new CurlFile($tmp);
        $size = $this->request['size'];
		if (file_exists(__DIR__ . '/services/' . $this->request['service'] . '.php')) {
			require __DIR__ . '/services/' . $this->request['service'] . '.php';
			$this->response['url'] = call_user_func('upload', $file, $size);
		} else $this->response['error_msg'] = 'Сервис ' . $this->request['service'] . ' не реализован.';
        unlink($tmp);
    }
}

$ajax = new Ajax();

$ajax->init();

// Init userdata
$user->session_start();

// Position in $ajax->valid_actions['xxx']
define('AJAX_AUTH', 0); // 'guest', 'user', 'mod', 'admin', 'super_admin'

$ajax->exec();
