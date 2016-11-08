<?php

/**
 * Created by PhpStorm.
 * User: liuzezhong
 * Date: 2016/11/8
 * Time: 13:52
 */
namespace Home\Model;
use Think\Model;

class UploadImageModel extends Model {
    private $_uploadObj = '';
    const UPLOAD = 'upload';    //定义上传文件夹

    public function __construct() {
        $this->_uploadObj = new  \Think\Upload();

        $this->_uploadObj->rootPath = './'.self::UPLOAD.'/';
        $this->_uploadObj->subName = date(Y) . '/' . date(m) .'/' . date(d);
    }

    public function imageUpload() {
        $res = $this->_uploadObj->upload();
        if($res) {
            return '/uploadify_thinkphp/' . self::UPLOAD . '/' . $res['file']['savepath'] . $res['file']['savename'];
        }else{
            return false;
        }
    }
}