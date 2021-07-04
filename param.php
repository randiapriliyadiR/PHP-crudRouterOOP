<?php
// mengambil parameter
$parameter = $_SERVER['REQUEST_URI'];
// tidak menganggap parameter yg dicantum
// contoh: /project/oop/about
// jadi  : /about
$tidak_dianggap = '/project/oop';
$param = str_replace($tidak_dianggap,'',$parameter);