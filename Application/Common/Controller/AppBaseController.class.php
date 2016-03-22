<?php

/**
 * Created by PhpStorm.
 * User: shangbl
 * Date: 2016/3/23
 * Time: 1:36
 */

namespace Common\Controller;

use Think\Controller;

class AppBaseController extends Controller
{
    /**
     * 自动定位模板文件
     * @access protected
     * @param string $template 模板文件规则
     * @return string
     */
    public function parseTemplate($template = '')
    {
        $depr     = C('TMPL_FILE_DEPR');
        $template = str_replace(':', $depr, $template);

        // 获取当前模块
        $module = MODULE_NAME;
        if (strpos($template, '@')) { // 跨模块调用模版文件
            list($module, $template) = explode('@', $template);
        }
        // 获取当前主题的模版路径
        defined('THEME_PATH') or define('THEME_PATH', C("THEME_PATH"));

        // 分析模板文件规则
        if ('' == $template) {
            // 如果模板文件名为空 按照默认规则定位
            $template = MODULE_NAME . "/" . CONTROLLER_NAME . $depr . ACTION_NAME;
        } elseif (FALSE === strpos($template, $depr)) {
            $template = MODULE_NAME . "/" . CONTROLLER_NAME . $depr . $template;
        }
        $file = C("VIEW_PATH") . "/" . THEME_PATH . $template . C('TMPL_TEMPLATE_SUFFIX');
        if (C('TMPL_LOAD_DEFAULTTHEME') && THEME_NAME != C('DEFAULT_THEME') && !is_file($file)) {
            // 找不到当前主题模板的时候定位默认主题中的模板
            $file = dirname(THEME_PATH) . '/' . C('DEFAULT_THEME') . '/' . $template . C('TMPL_TEMPLATE_SUFFIX');
        }
        return $file;
    }

    /**
     * 模板显示 调用内置的模板引擎显示方法，
     * @access protected
     * @param string $templateFile 指定要调用的模板文件
     * 默认为空 由系统自动定位模板文件
     * @param string $charset 输出编码
     * @param string $contentType 输出类型
     * @param string $content 输出内容
     * @param string $prefix 模板缓存前缀
     * @return void
     */
    protected function display($templateFile = '', $charset = '', $contentType = '', $content = '', $prefix = '')
    {
        parent::display($this->parseTemplate($templateFile), $charset, $contentType, $content, $prefix);
    }

    /**
     * Ajax方式返回数据到客户端
     * @access protected
     * @param mixed $data 要返回的数据
     * @param String $type AJAX返回数据格式
     * @return void
     */
    protected function ajaxReturn($data, $type = '')
    {
        if (func_num_args() > 2) {// 兼容3.0之前用法
            $args = func_get_args();
            array_shift($args);
            $info           = [];
            $info['data']   = $data;
            $info['info']   = array_shift($args);
            $info['status'] = array_shift($args);
            $data           = $info;
            $type           = $args ? array_shift($args) : '';
        }
        //返回格式
        $return = [
            //跳转地址
            "referer" => $data['url'] ? $data['url'] : "",
            //提示类型，success fail
            "state"   => $data['status'] ? "success" : "fail",
            //提示内容
            "info"    => $data['info'],
            "status"  => $data['status'],
            //数据
            "data"    => $data['data'],
        ];

        if (empty($type)) {
            $type = C('DEFAULT_AJAX_RETURN');
        }
        switch (strtoupper($type)) {
            case 'JSON' :
                // 返回JSON数据格式到客户端 包含状态信息
                header('Content-Type:text/html; charset=utf-8');
                exit(json_encode($return));
            case 'XML' :
                // 返回xml格式数据
                header('Content-Type:text/xml; charset=utf-8');
                exit(xml_encode($return));
            case 'JSONP':
                // 返回JSON数据格式到客户端 包含状态信息
                header('Content-Type:application/json; charset=utf-8');
                $handler = isset($_GET[C('VAR_JSONP_HANDLER')]) ? $_GET[C('VAR_JSONP_HANDLER')] : C('DEFAULT_JSONP_HANDLER');
                exit($handler . '(' . json_encode($return) . ');');
            case 'EVAL' :
                // 返回可执行的js脚本
                header('Content-Type:text/html; charset=utf-8');
                exit($return);
            default :
                // 用于扩展其他返回格式数据
                tag('ajax_return', $return);
        }
    }
}