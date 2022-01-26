<?php

namespace Develop\Editor\Lib;

class Channel
{

    private $config;

    private $handle = null;

    public function __construct($config)
    {
        // 上传类型
        $type = strtolower(trim($config['upload_type']));
        // 类名称
        $class_name = ucfirst($type);
        // 判断是否存在
        if (!isset($class_name)) {
            return array(
                'state' => 'ERROR',
                'error' => $class_name . ' class not exists'
            );
        } else {
            if ($class_name == 'Qiniu') {
                $this->handle = new Qiniu($config);
            } else {
                $this->handle = new Local($config);
            }

        }

    }

    public function dispatcher($action)
    {
        return call_user_func(
            array(
                $this->handle,
                htmlspecialchars($action)
            )
        );
    }

}