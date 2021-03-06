<?php

namespace Develop\Editor\Lib;
class EditorConfig
{
    public function config()
    {
        return [
            "uploadType" => "qiniu",
            "qiniuUploadType" => "url",
            "uploadQiniuUrl" => "http://up-z2.qiniup.com/",
            "qiniuUploadPath" => "uploads/",
            "qiniuDatePath" => "mmdd",
            "uploadSaveType" => "date",
            "getTokenActionName" => "getToken",
            "removeImageActionName" => "remove",
            "VideoBlockFileSize" => 4194304,
            "VideoChunkFileSize" => 2097152,
            "VideoChunkMaxSize" => 10485760,
            "ChunkUploadQiniuUrl" => "http://up-z2.qiniup.com/",
            "makeFileActionName" => "makeFile",
            "QiniuRsfHost" => "http://rsf.qbox.me",
            "QiniuRsHost" => "http://rs.qbox.me",
            "QiniuIoHost" => "http://iovip.qbox.me",


            "imageActionName" => "uploadimage",
            "imageFieldName" => "file",
            "imageMaxSize" => 2048000,
            "imageAllowFiles" => [".png", ".jpg", ".jpeg", ".gif", ".bmp"],
            "imageCompressEnable" => true,
            "imageCompressBorder" => 1600,
            "imageInsertAlign" => "none",
            "imageUrlPrefix" => "",
            "imagePathFormat" => "/ueditor/php/upload/image/{yyyy}{mm}{dd}/{time}{rand:6}",


            "scrawlActionName" => "uploadscrawl",
            "scrawlFieldName" => "file",
            "scrawlPathFormat" => "/ueditor/php/upload/image/{yyyy}{mm}{dd}/{time}{rand:6}",
            "scrawlMaxSize" => 2048000,
            "scrawlUrlPrefix" => "",
            "scrawlInsertAlign" => "none",


            "snapscreenActionName" => "uploadimage",
            "snapscreenPathFormat" => "/ueditor/php/upload/image/{yyyy}{mm}{dd}/{time}{rand:6}",
            "snapscreenUrlPrefix" => "",
            "snapscreenInsertAlign" => "none",


            "catcherLocalDomain" => ["127.0.0.1", "localhost", "img.baidu.com"],
            "catcherActionName" => "catchimage",
            "catcherFieldName" => "source",
            "catcherPathFormat" => "/ueditor/php/upload/image/{yyyy}{mm}{dd}/{time}{rand:6}",
            "catcherUrlPrefix" => "",
            "catcherMaxSize" => 2048000,
            "catcherAllowFiles" => [".png", ".jpg", ".jpeg", ".gif", ".bmp"],


            "videoActionName" => "uploadvideo",
            "videoFieldName" => "file",
            "videoPathFormat" => "/ueditor/php/upload/video/{yyyy}{mm}{dd}/{time}{rand:6}",
            "videoUrlPrefix" => "",
            "videoMaxSize" => 1024000000,
            "videoAllowFiles" => [
                ".flv", ".swf", ".mkv", ".avi", ".rm", ".rmvb", ".mpeg", ".mpg",
                ".ogg", ".ogv", ".mov", ".wmv", ".mp4", ".webm", ".mp3", ".wav", ".mid"],


            "fileActionName" => "uploadfile",
            "fileFieldName" => "file",
            "filePathFormat" => "/ueditor/php/upload/file/{yyyy}{mm}{dd}/{time}{rand:6}",
            "fileUrlPrefix" => "",
            "fileMaxSize" => 51200000,
            "fileAllowFiles" => [
                ".png", ".jpg", ".jpeg", ".gif", ".bmp",
                ".flv", ".swf", ".mkv", ".avi", ".rm", ".rmvb", ".mpeg", ".mpg",
                ".ogg", ".ogv", ".mov", ".wmv", ".mp4", ".webm", ".mp3", ".wav", ".mid",
                ".rar", ".zip", ".tar", ".gz", ".7z", ".bz2", ".cab", ".iso",
                ".doc", ".docx", ".xls", ".xlsx", ".ppt", ".pptx", ".pdf", ".txt", ".md", ".xml", ".md"
            ],


            "imageManagerActionName" => "listimage",
            "imageManagerListPath" => "/ueditor/php/upload/image/",
            "imageManagerListSize" => 20,
            "imageManagerUrlPrefix" => "",
            "imageManagerInsertAlign" => "none",
            "imageManagerAllowFiles" => [".png", ".jpg", ".jpeg", ".gif", ".bmp"],


            "fileManagerActionName" => "listfile",
            "fileManagerListPath" => "/ueditor/php/upload/file/",
            "fileManagerUrlPrefix" => "",
            "fileManagerListSize" => 20,
            "fileManagerAllowFiles" => [
                ".png", ".jpg", ".jpeg", ".gif", ".bmp",
                ".flv", ".swf", ".mkv", ".avi", ".rm", ".rmvb", ".mpeg", ".mpg",
                ".ogg", ".ogv", ".mov", ".wmv", ".mp4", ".webm", ".mp3", ".wav", ".mid",
                ".rar", ".zip", ".tar", ".gz", ".7z", ".bz2", ".cab", ".iso",
                ".doc", ".docx", ".xls", ".xlsx", ".ppt", ".pptx", ".pdf", ".txt", ".md", ".xml"
            ]
        ];
    }
}