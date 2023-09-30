<?php
/*
 * Định nghĩa các url cần thiết được sử dụng trong website
 */
$ROOT_URL = '/DuanMautranghttpc02468';
$CONTENT_URL = "$ROOT_URL/content";
$ADMIN_URL = "$ROOT_URL/admin";
$SITE_URL = "$ROOT_URL/site";

function exit_param($fieldname){
    return array_key_exists($fieldname, $_REQUEST);
}