<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Uploadify With ThinkPHP</title>

        <script src="/uploadify_thinkphp/Public/js/jquery/jquery.js" type="text/javascript"></script>
        <script src="/uploadify_thinkphp/Public/js/uploadify/jquery.uploadify.min.js" type="text/javascript"></script>
        <script src="/uploadify_thinkphp/Public/js/image/image.js" type="text/javascript"></script>
        <link rel="stylesheet" type="text/css" href="/uploadify_thinkphp/Public/css/uploadify/uploadify.css">

        <style type="text/css">
            body {
                font: 13px Arial, Helvetica, Sans-serif;
            }
        </style>
    </head>

    <body>
        <h1>Uploadify_ThinkPHP Demo</h1>
        <form>
            <div id="queue"></div>
            <input id="file_upload" name="file_upload" type="file" multiple="true">
            <img style="display: none" id="upload_org_code_img" src="" width="150" height="150">   <!--显示缩略图-->
            <input id="file_upload_image" name="thumb" type="hidden" multiple="true" value="">
        </form>
    </body>

    <script>
        var SCOPE = {
            'ajax_upload_swf' : '/uploadify_thinkphp/Public/css/uploadify/uploadify.swf',
            'ajax_upload_image_url' : '/uploadify_thinkphp/index.php?m=home&c=index&a=ajaxUploadImage',
        };

    </script>
</html>