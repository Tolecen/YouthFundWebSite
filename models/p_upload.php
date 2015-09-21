<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Administrator
 * Date: 13-9-16
 * Time: 上午11:37
 * To change this template use File | Settings | File Templates.
 */
include '../inc/common.inc.php';
include '../inc/upload.class.php';
$img=array();
$up=_upload('Filedata');
$file=$up->insertid;
if($file['file_id']>0)
{
    $img=array('dbQuery' => $file['$dbQuery'], 'file_id'=>$file['file_id'],'key_path'=>$file['key_path'],'key'=>$file['key'],'width'=>$file['width'],'height'=>$file['height'],'type'=>$file['type']);
    $img['farm']="farm1";
    $img['bucket']="hbimg";
    $img['success']=true;
    $img['ret'] = 0;
    $img['msg']="上传成功";
    $img['errorcode']=0;
    $img['file_path']=$GLOBALS['app']['scheme']."://".$GLOBALS['app']['host']."/".$file['key_path'].$file['key'];
}
else
{
    $img=$up->error;
    $img['ret'] = 1;
    $img['msg']="上传失败";
}
echo json_encode($img);