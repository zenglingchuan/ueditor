#   包制作参考
+ `https://blog.csdn.net/qq_33845254/article/details/106349865`
+ `https://packagist.org/packages/submit`
# UEditor七牛云和本地存储

## 关于地址报错

| 请修改 src/Lib/EditorConfig.php 中的 `uploadQiniuUrl`和 `ChunkUploadQiniuUrl` 参数，因为最近反馈地区错误报错比较多，举个简单的例子华南地区修改如下:

```php
"uploadQiniuUrl"     : "http://up-z2.qiniu.com/", # 七牛上传地址 
"ChunkUploadQiniuUrl": "http://up-z2.qiniu.com", # 分片上传创建的host地址 
```

具体地区的上传URL请查看七牛官方存储区域，地址:https://developer.qiniu.com/kodo/manual/1671/region-endpoint
| 使用ssl协议时，请认真查看七牛官方的上传url地址，然后打开看是否报错，有人已经反馈ssl无法上传，其实是config.json配置中的URL问题。

## 配置

| 配置两个文件，一个是 php 的配置文件 `tests/config.php` 和 Ueditor 的配置文件 `src/Lib/EditorConfig.php`

### 本地上传配置

| 修改 `config.php`

```php
'upload_type' => 'local',  // qiniu|local 【qiniu】七牛云存储 【local】本地上传
'orderby'     => 'asc',    // 可选项 [desc|asc]列出文件的排序方式，此配置仅支持本地服务器
'root_path'	  => $_SERVER['DOCUMENT_ROOT'],  // 本地上传的根目录地址
```

| 上传文件名称和保存路径可修改 config.json 中的配置信息，按照官网的配置就可以

### 上传到七牛云存储

| 修改 config.php

```php
'upload_type' => 'qiniu',    // qiniu 上传到七牛云存储服务器
/* 七牛云存储信息配置 */
'bucket'      => 'bucket', // 七牛Bucket的名称
'host'        => 'http://123.com', // 七牛绑定的域名
'access_key'  => 'KUN6xYZlOAtid2MjHm90-6VFY2M7HC90ijDH4uOR', // 七牛的access_key
'secret_key'  => 'D-K57TE5hPe3krexftxLWFKmL2xbQEKA-mtkrUfB', // 七牛的secret_key

/* 上传配置 */
'timeout'     => '3600',  // 上传时间
'save_type'   => 'date',  // 保存类型

/* 水印设置 */
'use_water'   => false,  // 是否开启水印
/* 七牛水印图片地址 */
'water_url'   => 'http://123.png',
/* 水印显示设置 */ 
'dissolve'    => 50,  // 水印透明度
'gravity'	  => 'SouthEast',  // 水印位置具体见文档图片说明和选项
'dx'		  => 10,  //边距横向位置
'dy'		  => 10   //边距纵向位置
```

### 大视频分片上传

| 修改 src/Lib/EditorConfig.php

```php
"VideoBlockFileSize" : 4194304,  /* 视频块大小,是每块4MB，所以这个不用修改 */
"VideoChunkFileSize" : 2097152,  /* 视频上传分块大小，建议是整数倍防止出错，列如1048576（1MB），524288（512KB）默认是2MB */
"VideoChunkMaxSize"  : 10485760, /* 视频文件超过多大来进行分片上传，现在默认是10MB */
"ChunkUploadQiniuUrl": "http://upload.qiniu.com", /* 分块上传的首块上传域名为：上传到华东一区的域名为up.qiniu.com、up-z0.qiniu.com和upload.qiniu.com；上传到华北一区的域名为up-z1.qiniu.com和upload-z1.qiniu.com */
"makeFileActionName" : "makeFile",  /* 合成文件的url方法 */
```