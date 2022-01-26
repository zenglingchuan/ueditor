<?php

namespace Develop\Editor\Lib;

class Base
{
    // 配置文件信息
    protected $config;
    // Ueditor配置信息
    protected $ue_config;

    public function __construct($config)
    {
        $this->config = $config;
        $this->ue_config = $this->config();
    }


    public function config(): array
    {
        return (new EditorConfig())->config();
    }


    public function __call($method, $params)
    {
        if (method_exists($this, $method)) {
            $this->$method();
        }

        if ($this->hasUploadMethod($method)) {
            if (strpos(strtolower($method), "upload") !== false) {
                return $this->upload($method);
            } else if (strpos(strtolower($method), "list") !== false) {
                return $this->listFile($method);
            }
        }

        return array(
            'state' => 'ERROR',
            'error' => $method . ' upload method not exists'
        );
    }


    public function setUploadConfig($method)
    {
        $ue_config = $this->getUeConfig();
        $config = $this->config;
        $root_path = $config['root_path'];
        $config_prefix = ltrim($method, "upload");
        $config = array(
            "pathFormat" => $ue_config[$config_prefix . 'PathFormat'],
            "maxSize" => $ue_config[$config_prefix . 'MaxSize'],
            "allowFiles" => $ue_config[$config_prefix . 'AllowFiles'],
            "fieldName" => $ue_config[$config_prefix . 'FieldName'],
            "base64" => 'upload',
            "rootPath" => $root_path
        );
        // scrawl 上传参数
        if ($config_prefix == 'scrawl') {
            $config['oriName'] = 'scrawl.png';
            $config['base64'] = 'base64';
        }

        return $config;
    }


    public function hasUploadMethod($action_name)
    {
        $ue_config = $this->getUeConfig();
        $action = strtolower($action_name);
        if (in_array($action, $ue_config)) {
            return true;
        }
        return false;
    }


    public function getUeConfig()
    {
        $config = array();
        if (count($this->ue_config) > 1) {
            $config = $this->ue_config;
        } else {
            $config = $this->config();
        }
        return $config;
    }

}
