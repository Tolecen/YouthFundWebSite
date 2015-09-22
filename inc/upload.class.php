<?php
/*
	[Phpup.Net!] (C)2009-2011 Phpup.net.
	This is NOT a freeware, use is subject to license terms

	$Id: upload.class.php 2010-08-24 10:42 $
*/
/**
 *图片/文件上传类
 *功能:上传单个文件并提示错误
 *-------------------------------------------------------------------------------------------------
 */


if(!defined('IN_PROVERB')) {
    exit('Access Denied');
}
class upload
{
    var $stuffix=array('image/jpg','image/gif','image/png','image/x-png',"image/pjpeg","image/jpeg");
    var $max_upload=2097152000;
    var $updir='';
    var $handle;
    var $width=192;
    var $height=192;
    var $insertid=0;
    function upload($handle)
    {
        $this->handle=$handle;
        $this->error='';
    }

    //检查是否有上传的文件
    function checkIsFile()
    {
        if(empty($_FILES[$this->handle]['name']))
        {
            $this->error['msg']='没有上传中的文件。';
            $this->error['err']=101;
            return false;
        }
        return true;
    }
    //上传错误信息
    function checkStatus()
    {
        switch($_FILES[$this->handle]['error'])
        {
            case 1:
                $error="UPLOAD_ERR_INI_SIZE:上传的文件超过了 php.ini 中 upload_max_filesize 选项限制的值。 \n";
                break;
            case 2:
                $error="UPLOAD_ERR_FORM_SIZE:上传文件的大小超过了 HTML 表单中 MAX_FILE_SIZE 选项指定的值。\n";
                break;
            case 3:
                $error="UPLOAD_ERR_PARTIAL:文件只有部分被上传\n";
                break;
            case 4:
                $error="UPLOAD_ERR_NO_FILE:没有文件被上传。\n";
                break;
            case 6:
                $error="UPLOAD_ERR_NO_TMP_DIR:找不到临时文件夹。\n";
                break;
            case 7:
                $error="UPLOAD_ERR_CANT_WRITE:文件写入失败。\n";
                break;
            default:
                $error="";
                break;
        }
        if(!empty($error))
        {
            $this->error['msg']=$error;
            $this->error['err']=104;
            return false;
        }
        return true;
    }

    //检查文件类型
    function checkType()
    {
        $this->suffpix=$this->get_extension($_FILES[$this->handle]['name']);
//		if('unknown'==$this->suffpix)
//		{
//			$this->error['msg']="文件类型不被允许,只允许上传jpg,gif,png,bmp";
//			$this->error['err']=107;
//			return false;
//		}
        return true;
    }

    //检查文件尺寸
    function checkSize()
    {
        if($_FILES[$this->handle]['size']>$this->max_upload)
        {
            $size=($this->max_upload/1024/1024);
            $size = substr($size, 0, 4);
            if($size<1)
            {
                $error="文件大小不能超过".ceil($size*1000)."K。 \n";
            }
            else
            {
                $error="文件大小不能超过".$size."M。 \n";
            }
            $this->error['msg']=$error;
            $this->error['err']=109;
            return false;
        }
        return true;
    }
    function is_upload_file($source) {
        return $source && ($source != 'none') && (is_uploaded_file($source) || is_uploaded_file(str_replace('\\\\', '\\', $source)));
    }
    //上传文件
    function execute($newfile='',$mkdir=true)
    {
        $this->newFileName($newfile);
        $fileName = $newfile;
        if($mkdir && !is_dir($this->updir))
        {
            $this->mkdir2($this->updir);
        }
        $newfile=$newfile?trim(strip_tags($this->updir.'/'.$newfile)):trim($this->updir.'/'.$this->fname[0].'.'.$this->suffpix);

        if($this->is_upload_file($_FILES[$this->handle]['tmp_name']))
        {
            if(function_exists('move_uploaded_file') && @move_uploaded_file($_FILES[$this->handle]['tmp_name'],$newfile))
            {
//                $pos = strrpos($newfile, '/') + 1;
//                $fileName = substr($newfile, $pos);
//                $this->setThumb($newfile,$this->updir."/_fw554".$fileName,554,0);
//                $this->setThumb($newfile,$this->updir."/_fw236".$fileName,236,0);
//                $this->setThumb($newfile,$this->updir."/_sq75".$fileName,75,0);
                return $newfile;
            }
            elseif(@copy($_FILES[$this->handle]['tmp_name'],$newfile))
            {
//                $pos = strrpos($newfile, '/') + 1;
//                $fileName = substr($newfile, $pos);
//                $this->setThumb($newfile,$this->updir."/_fw554".$fileName,554,0);
//                $this->setThumb($newfile,$this->updir."/_fw236".$fileName,236,0);
//                $this->setThumb($newfile,$this->updir."/_sq75".$fileName,75,0);
                return $newfile;
            }
            elseif(file_put_contents($newfile,$_FILES[$this->handle]['tmp_name']))
            {
//                $pos = strrpos($newfile, '/') + 1;
//                $fileName = substr($newfile, $pos);
//                $this->setThumb($newfile,$this->updir."/_fw554".$fileName,554,0);
//                $this->setThumb($newfile,$this->updir."/_fw236".$fileName,236,0);
//                $this->setThumb($newfile,$this->updir."/_sq75".$fileName,75,0);
                return $newfile;
            }
            else
            {
                $this->error.="未上传成功可能原因:\n";
                if(!is_dir($this->updir))
                {
                    $this->error.=$this->updir."目录不存在\n";
                }
                elseif(!is_writeable($this->updir))
                {
                    $this->error.=$this->updir."目录没有写权限\n";
                }
                return false;
            }
        }
        return false;
    }
    function mkdir2($dir)
    {
        if(!is_dir(dirname($dir)))
        {
            $this->mkdir2(dirname($dir));
        }
        return mkdir($dir);
    }

    // 获取文件后缀
    function get_extension($file)
    {
        return pathinfo($file, PATHINFO_EXTENSION);
    }


    //进一步判断文件后缀
    function getFileType($filename)
    {
        $file =fopen($filename, "rb");
        $bin = fread($file, 2); //只读2字节
        fclose($file);
        $strInfo = @unpack("C2chars", $bin);
        $typeCode = intval($strInfo['chars1'].$strInfo['chars2']);
        $fileType = '';
        switch ($typeCode)
        {
            case 255216:
                $fileType = 'jpg';
                break;
            case 7173:
                $fileType = 'gif';
                break;
            case 6677:
                $fileType = 'bmp';
                break;
            case 13780:
                $fileType = 'png';
                break;
            case 7790:
                //$fileType = 'exe';
                //break;
            case 7784:
                $fileType = 'midi';
                break;
            case 8297:
                $fileType = 'rar';
                break;
            case 208207:
                $fileType = 'doc';
                break;
            default:
                $fileType = 'unknown';
                break;
        }
        return $fileType;
    }
    //新建文件名(重复的概率很小)
    function newFileName($filename='')
    {
        if($filename=='')
        {
            $this->fname=md5($_FILES[$this->handle]['tmp_name'].$_FILES[$this->handle]['size'].$_FILES[$this->handle]['name'].microtime());
        }
        else
        {
            $this->fname=$filename;
        }
        $this->fname=array($this->fname,$_FILES[$this->handle]); //返回上传后的文件，和原图片的信息
    }
    //缩略图
    function setThumb($file,$thumb,$width=0,$height=0)
    {
        $type=getimagesize($file);
        switch($type['mime'])
        {
            case 'image/jpeg':
                $func="imagecreatefromjpeg";
                $func2="imagejpeg";
                break;
            case 'image/gif':
                $func="imagecreatefromgif";
                $func2="imagegif";
                break;
            case 'image/png':
                $func="imagecreatefrompng";
                $func2="imagepng";
                break;
            case 'image/bmp':
                $func="imagecreatefrombmp";
                $func2="imagebmp";
                break;
            default:
                $func="imagecreatefromjpeg";
                $func2="imagejpeg";
                break;
        }
        if($width>0)
        {
            if($type[0]>$width)
            {
                $w=$width;
                $h=ceil(($width/$type[0])*$type[1]);
            }
            else
            {
                $w=$type[0];
                $h=$type[1];
            }
        }
        elseif($height>0)
        {

            if($type[1]>$height)
            {
                $h=$height;
                $w=ceil(($height/$type[1])*$type[0]);
            }
            else
            {
                $w=$type[0];
                $h=$type[1];
            }
        }
        if($w>0 && $h>0)
        {
            $dst=imagecreatetruecolor($w,$h);
            $source=$func($file);
            imagecopyresized($dst,$source,0,0,0,0,$w,$h,$type[0],$type[1]);
            $func2($dst,$thumb);
        }
    }
}