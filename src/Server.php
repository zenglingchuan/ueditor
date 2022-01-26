<?php


namespace Develop\Editor;


use Develop\Editor\Lib\Channel;

class Server
{
    public function server($config, $action)
    {
        // 实例化处理方法
        $handle = new Channel($config);
        # 执行
        $response = $handle->dispatcher($action);
        $result = json_encode($response);
        /* 输出结果 */
        if (isset($_GET["callback"])) {
            if (preg_match("/^[\w_]+$/", $_GET["callback"])) {
                return htmlspecialchars($_GET["callback"]) . '(' . $result . ')';
            } else {
                return json_encode(array(
                    'state' => 'callback参数不合法'
                ));
            }
        } else {
            return $result;
        }
    }

}