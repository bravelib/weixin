<?php
/**
 * Created by PhpStorm.
 * User: shangbl
 * Date: 2016/3/23
 * Time: 5:02
 */


/**创建不可逆的密文密码
 *
 * @param passwd
 * @return string 密文
 */
function creat_pwd_string($passwd)
{
    return md5("DCD6CFD1F03E52FC" . $passwd);
}

/**
 * @return bool|string 返回当前年月日时分秒
 */
function c_time()
{
    return date("Y-m-d H:i:s");
}