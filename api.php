<?php
/* *
 *Author: Hwei
 *Created Time: 2014-10-17
 *Description: 
 */

/**
 *param: string $host e.g. http://www.example.com  http://182.92.105.123
 *return: boolean 如果已成功安装返回true,未成功安装返回false
 */
function hasInstall( $host ){
    $url = $host.'/?/api/account/login_process/';
    $ret = @file_get_contents( $url );
    if( empty( $ret ) ) return false;
    $ret = json_decode( $ret );
    if( is_null( $ret ) ) return false;
    return true;
}

//用法举例
/*
$host = 'http://w.hihwei.com/';
$ret = hasInstall( $host );
print_r( $ret );
*/
