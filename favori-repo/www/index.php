<?php
// リクエスト URI のパス部分から、必要なスクリプトを読み込みます。
switch (@parse_url($_SERVER['REQUEST_URI'])['path']) {
    // 例
    case '/phpinfo.php':
        require 'phpinfo.php';
        break;

    // 上記以外は 404
    default:
        http_response_code(404);
        exit('Not Foundだよ');
}