<?php
/*
	[Phpup.Net!] (C)2009-2011 Phpup.net.
	This is NOT a freeware, use is subject to license terms

	$Id: global.func.php 2010-08-24 10:42 $
*/

if (!defined('IN_PROVERB')) {
    exit('Access Denied');
}

function writelog($str, $name = "log.txt", $writer = "a")
{
    $open=fopen($name,$writer);
    fwrite($open,$str);
    fclose($open);
}

function stripslashes_deep($value)
{
    if (get_magic_quotes_gpc()) {
        $value = is_array($value) ? array_map('stripslashes_deep', $value) : stripslashes($value);
    }
    return str_replace('\\', '', $value);
}

function checkUrl($weburl)
{
    return (ereg("^http(s)*://[_a-zA-Z0-9-]+(.[_a-zA-Z0-9-]+)*$", $weburl) || ereg("^[_a-zA-Z0-9-]+(.[_a-zA-Z0-9-]+)*$", $weburl));
}

function checkEmail($email)
{
    return (strlen($email) > 6) && preg_match("/^[\w\-\.]+@[\w\-\.]+(\.\w+)+$/", $email);
}

function checkUrlname($urlname)
{
    return ereg("^[a-z]+[a-z0-9]*$", $urlname);
}


function gbSubstr($string, $start, $length = 0)
{
    if (strlen($string) > $length) {
        $str = null;
        if ($length > 0) {
            $len = $start + $length;
        } else {
            $len = strlen($string);
        }
        for ($i = $start; $i < $len; $i++) {
            if (ord(substr($string, $i, 1)) > 0xa0) {
                $str .= substr($string, $i, 2);
                $i++;
            } else {
                $str .= substr($string, $i, 1);
            }
        }
        return $str;
    } else {
        return $string;
    }

}

function global_addslashes($string, $force = 1)
{
    if ($force) {
        $string = stripslashes_deep($string);
        if (is_array($string)) {
            foreach ($string as $key => $val) {
                $string[$key] = global_addslashes($val, $force);
            }
        } else {
            $source = array('select', '`', 'where', 'and', 'update', 'insert', 'delete', '<script', '<?', '?>', 'or', 'eval');
            $dst = array('', '', '', '', '', '', '', '', '', '', '', '');
            $string = str_replace($source, $dst, addslashes($string));
        }
    } else {
        $string = stripslashes_deep($string);
    }
    return $string;
}

function template($file, $tpldir = '', $stuffix = '.php')
{

    $tpldir = $tpldir ? $tpldir : 'views/' . TPL_DIR;
    $tplfile = ROOT_PATH . './' . $tpldir . '/' . $file . $stuffix;
    if (!file_exists($tplfile)) {
        $tplfile = ROOT_PATH . './views/default/' . $file . $stuffix;
        if (!$tplfile) {
            exit('views/default/' . $file . $stuffix . '文件不存在');
        }
    }

    return $tplfile;
}

function getUnicode($word)
{
    //获取其字符的内部数组表示，所以本文件应用utf-8编码！
    if (is_array($word))
        $arr = $word;
    else
        $arr = str_split($word);
    //此时，$arr应类似array(228, 189, 160)
    //定义一个空字符串存储
    $bin_str = '';
    //转成数字再转成二进制字符串，最后联合起来。
    foreach ($arr as $value)
        $bin_str .= decbin(ord($value));
    //此时，$bin_str应类似111001001011110110100000,如果是汉字"你"
    //正则截取
    $bin_str = preg_replace('/^.{4}(.{4}).{2}(.{6}).{2}(.{6})$/', '$1$2$3', $bin_str);
    // 此时， $bin_str应类似0100111101100000,如果是汉字"你"
    return bindec($bin_str); //返回类似20320， 汉字"你"
    //return dechex(bindec($bin_str)); //如想返回十六进制4f60，用这句
}

function waptag($str)
{
    $source = array('<', '>', '\'', '"', '&', '$', '-');
    $dst = array('&lt', '&gt', '&apos', '&quot', '&amp', '$$', '&shy');
    return str_replace($source, $dst, $str);

}

/**
 * get user real ip
 *
 * @return  string
 */
function real_ip()
{
    static $realip = NULL;

    if ($realip !== NULL) {
        return $realip;
    }

    if (isset($_SERVER)) {
        if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $arr = explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']);

            foreach ($arr AS $ip) {
                $ip = trim($ip);

                if ($ip != 'unknown') {
                    $realip = $ip;

                    break;
                }
            }
        } elseif (isset($_SERVER['HTTP_CLIENT_IP'])) {
            $realip = $_SERVER['HTTP_CLIENT_IP'];
        } else {
            if (isset($_SERVER['REMOTE_ADDR'])) {
                $realip = $_SERVER['REMOTE_ADDR'];
            } else {
                $realip = '0.0.0.0';
            }
        }
    } else {
        if (getenv('HTTP_X_FORWARDED_FOR')) {
            $realip = getenv('HTTP_X_FORWARDED_FOR');
        } elseif (getenv('HTTP_CLIENT_IP')) {
            $realip = getenv('HTTP_CLIENT_IP');
        } else {
            $realip = getenv('REMOTE_ADDR');
        }
    }

    preg_match("/[\d\.]{7,15}/", $realip, $onlineip);
    $realip = !empty($onlineip[0]) ? $onlineip[0] : '0.0.0.0';

    return $realip;
}

//get real address
function ip2city($ip = '', $ipdatafile = '')
{
    include ROOT_PATH . '/inc/curl.class.php';
    $curl = new curl();
    $ip = empty($ip) ? real_ip() : $ip;
    $api = 'http://int.dpool.sina.com.cn/iplookup/iplookup.php?format=text&ip=' . $ip;
    $result = $curl->get($api);

    $arr = explode("\t", $result);

    if (isset($arr[5])) {
        $city = charset_encode($arr[5], $GLOBALS['proverbcharset'], 'gbk');

        if (empty($city)) {
            $city = !empty($_REQUEST['city']) ? $_REQUEST['city'] : '全国';
        }
    } else {
        $city = '全国';
    }
    return $city;

}

function rad($d)
{
    return $d * M_PI / 180.0;
}

//ip转经纬度 
function getIPLoc()
{
    $ip = real_ip();
    //$ip='116.255.170.112';
    $url = 'http://int.dpool.sina.com.cn/iplookup/iplookup.php?format=js&ip=' . $ip;
    $result = proverb_fsockopen($url);
    return $result;
}

//截取字符串
function sysSubStr($sourcestr, $cutlength)
{
    if (!$cutlength) {
        return $sourcestr;
    }
    $returnstr = "";
    $i = 0;
    $n = 0;
    $str_length = strlen($sourcestr); //字符串的字节数
    while (($n < $cutlength) and ($i <= $str_length)) {
        $temp_str = substr($sourcestr, $i, 1);
        $ascnum = Ord($temp_str); //得到字符串中第$i位字符的ascii码
        if ($ascnum >= 224) //如果ASCII位高与224，
        {
            $returnstr = $returnstr . substr($sourcestr, $i, 3); //根据UTF-8编码规范，将3个连续的字符计为单个字符
            $i = $i + 3; //实际Byte计为3
            $n++; //字串长度计1
        } elseif ($ascnum >= 192) //如果ASCII位高与192，
        {
            $returnstr = $returnstr . substr($sourcestr, $i, 2); //根据UTF-8编码规范，将2个连续的字符计为单个字符
            $i = $i + 2; //实际Byte计为2
            $n++; //字串长度计1
        } elseif ($ascnum >= 65 && $ascnum <= 90) //如果是大写字母，
        {
            $returnstr = $returnstr . substr($sourcestr, $i, 1);
            $i = $i + 1; //实际的Byte数仍计1个
            $n++; //但考虑整体美观，大写字母计成一个高位字符
        } else //其他情况下，包括小写字母和半角标点符号，
        {
            $returnstr = $returnstr . substr($sourcestr, $i, 1);
            $i = $i + 1; //实际的Byte数计1个
            $n = $n + 0.5; //小写字母和半角标点等与半个高位字符宽…
        }
    }

    if ($str_length > $cutlength) {
        $returnstr = $returnstr . ""; //超过长度时在尾处加上省略号
    }

    return $returnstr;
}


//表前缀
function tname($table)
{
    global $proverbdbname, $proverbtable_prefix;
    return '`' . $proverbdbname . '`.`' . $proverbtable_prefix . $table . '`';
}

//md5加密
function md52($str)
{
    $str = substr(md5($str), 3, 20);
    return $str;
}


//读取文件内容
function readf($file)
{
    if (function_exists('file_get_contents')) {
        $content = file_get_contents($file);
    } else {
        $fp = fopen($file, 'r');
        while (!feof($fp)) {
            $content = fgets($fp, 1024);
        }
        fclose($fp);
    }
    return $content;
}

//错误
function messageError($message)
{
    exit($message);
}

//保存图片
function savethumb($filename, $url)
{
    if (!empty($url)) {

        $image = imagecreatefromjpeg($url);
        $size = getimagesize($url);
        $image_p = imagecreatetruecolor($size[0], $size[1]);
        imagecopyresampled($image_p, $image, 0, 0, 0, 0, $size[0], $size[1], $size[0], $size[1]);
        mkdir2(dirname($filename));
        imagepng($image_p, $filename);
    }
}

//判断缓存时间
function checkfile($file, $cachetime = 60)
{
    $file = ROOT_PATH . '/data/cache/' . $file . '.php';

    if (is_file($file)) {
        if ((filemtime($file) + $cachetime > time()) || !$cachetime) {
            return true; //不更新文件
        } else {
            return false; //更新文件
        }
    }
    return false;
}

//写缓存内容
function write($file, $content, $dir = '')
{
    $dir = ROOT_PATH . '/data/cache/' . $dir;
    if (!is_dir($dir)) {
        mkdir2($dir);
    }
    $file = $dir . '/' . $file . '.php';
    if (is_array($content)) {
        $content = var_export($content, 1);
    } else {
        $content = 'array()';
    }
    $content = str_replace("=>", "  =>  ", $content);
    $content = preg_replace("#[\s]{2,}#", "", $content);
    $content = '<?php if(!defined("IN_PROVERB")){?>error<?php }?><?php $content=' . $content . ';?>';
    if (function_exists('file_put_contents')) {

        /*
        $content=str_replace(",    ",",",$content);
        $content=str_replace("(    ","(",$content);
        $content=str_replace("  )",")",$content);
        $content=str_replace("(\n","(",$content);
        $content=str_replace(" =>   ","=>",$content);
        */
        file_put_contents($file, $content);
    } else {
        $fp = fopen($file, 'w');
        fwrite($fp, $content);
        fclose($fp);
    }
}

//写文件
function writefile($file, $content)
{
    if (function_exists('file_put_contents')) {
        return file_put_contents($file, $content);
    } else {
        $fp = fopen($file, 'w');
        return fwrite($fp, $content);
        fclose($fp);
    }
}

//读文件
function read($file, $dir = '')
{
    $cachedir = 'data/cache';
    $file = ROOT_PATH . '/' . $cachedir . '/' . $dir . '/' . $file . '.php';
    include($file);
    return $content;
}

//删除文件
function deletef($file)
{
    $cachedir = 'data/cache';
    $file = ROOT_PATH . '/' . $cachedir . '/' . $file . '.php';
    if (is_file($file)) {
        unlink($file);
    }
}

//扫描目录

function proverbscandir($dir)
{
    $dirs = array();
    if (!function_exists('scandir')) {
        if ($handle = opendir($dir)) {
            while (false !== ($file = readdir($handle))) {
                $dirs[] = $file;
            }
            closedir($handle);
        }
    } else {
        $dirs = scandir($dir);
    }
    return $dirs;
}

//清空缓存
function cleancache($type = 'php', $mdir = '')
{
    $path = $mdir ? $mdir : 'data/cache';
    $path = ROOT_PATH . '/' . str_replace(ROOT_PATH, '', $path);
    if (!is_writable($path)) {
        return 'nowrite';
    }
    $dir = proverbscandir($path);
    $nullfile = '';
    if ($type) {
        foreach ($dir as $k => $v) {
            $newfile = $path . '/' . $v;
            if ($v != '.' && $v != '..' && is_file($newfile)) {
                if (strpos($newfile, $type)) {
                    $a = unlink($newfile);
                    $nullfile .= $newfile;
                }
            }
        }
    } else {
        foreach ($dir as $k => $v) {
            $newfile = $path . '/' . $v;

            if ($v != '.' && $v != '..' && is_file($newfile)) {
                $a = unlink($newfile);
                $nullfile .= $newfile;
            }
        }
    }
    if (empty($nullfile)) {
        return 'null';
    } else {
        return $a;
    }
}

//清除js和style
function clearJs($str)
{
    $str = str_replace('<style', '<div class="limengqitemp" style="display:none"', $str);
    $str = str_replace('</style>', '</div>', $str);
    $str = str_replace('<script', '<div class="limengqitemp" style="display:none"', $str);
    $str = str_replace('</script>', '</div>', $str);
    $str = str_replace("\n", '', $str);
    $str = str_replace("\r", '', $str);
    return $str;
}

//实现多种字符编码方式
function charset_encode($input, $_output_charset = 'utf-8', $_input_charset = "utf-8")
{
    $output = $input;
    if (!isset($_output_charset)) $_output_charset = $GLOBALS['charset'];
    if ($_input_charset == $_output_charset || $input == null) {
        $output = $input;
    } elseif (function_exists("mb_convert_encoding")) {
        $output = mb_convert_encoding($input, $_output_charset, $_input_charset);
    } elseif (function_exists("iconv")) {
        $output = iconv($_input_charset, $_output_charset, $input);
    }
    return $output;
}


//按指定字数分组
function chunksplit($data)
{
    return chunk_split(base64_encode($data), 20);
}

//建立目录
function mkdir2($dir)
{
    if (!is_dir(dirname($dir))) {
        mkdir2(dirname($dir));
    }
    !is_dir($dir) && mkdir($dir);
}

//单个上传
function _upload($upfile)
{
    global $db, $proverbkey;
    $up = new upload($upfile);
    $c = "abcdefghigklmnopqrstuvwxyz0123456789";
    $d = substr($c, rand(0, 20), 2) . '/' . substr($c, rand(0, 10), 2);
    $dir = 'data/upload';
    $uploaddir = ROOT_PATH . $dir;
    $up->max_upload = 10486000;
    $up->insertid = array();
    $up->updir = $uploaddir ? $uploaddir : 'data/upload';
    $img = array();
    $imgtype = array('jpg' => '0', 'gif' => '1', 'png' => '2', 'bmp' => '3');
    if ($up->checkIsFile() && $up->checkStatus() && $up->checkType() && $up->checkSize()) {
        if ($file = $up->execute()) {
            $r = getimagesize($file);
            $filePath = str_replace(ROOT_PATH, "", $uploaddir) . "/";
            $pos = strrpos($file, '/') + 1;
            $fileName = substr($file, $pos);
            $filekey = $proverbkey . $imgtype[$up->suffpix] . $up->fname[0] . str_replace('/', '', $d);

            $fh = fopen($uploaddir."/".$fileName,'r');
            fclose($fh);
            $dbQuery = $db->query("insert into " . tname("file") . "(`file_key`, `file_path`, `file_original`, `file_type`, `width`, `height`, `isused`)values('".$filekey."','" .$filePath . "','" . $fileName . "','" . $r['mime'] . "','" . $r['0'] . "','" . $r[1] . "', 1)");
            $up->insertid = array('dbQuery' => $dbQuery, 'file_id' => $db->insert_id(), 'key_path' => $filePath, 'key' => $fileName, 'type' => $r['mime'], 'width' => $r[0], 'height' => $r[1]);
        }
    }
    return $up;
}

//单个上传
function _uploadYPY($upfile)
{
    global $db, $bidcmskey;
    $up = new upload($upfile);
    $upyun = new UpYun("imgbuket", "tolecen", "11311451167llx");
    $c = "abcdefghigklmnopqrstuvwxyz0123456789";
    $d = substr($c, rand(0, 20), 2) . '/' . substr($c, rand(0, 10), 2);
    $dir = 'data/upload';
    $uploaddir = ROOT_PATH . '/' . $dir;
    $up->max_upload = 10486000;
    $up->insertid = array();
    $up->updir = $uploaddir ? $uploaddir : 'data/upload';
    $img = array();
    $imgtype = array('jpg' => '0', 'gif' => '1', 'png' => '2', 'bmp' => '3');
    if ($up->checkIsFile() && $up->checkStatus() && $up->checkType() && $up->checkSize()) {
        if ($file = $up->execute()) {
            $r = getimagesize($file);
            $filePath = str_replace(ROOT_PATH, "", $uploaddir) . "/";
            $pos = strrpos($file, '/') + 1;
            $fileName = substr($file, $pos);
            $filekey = $bidcmskey . $imgtype[$up->suffpix] . $up->fname[0] . str_replace('/', '', $d);

            $fh = fopen($uploaddir."/".$fileName,'r');
            $upyun->writeFile("/".$fileName, $fh);
            fclose($fh);
            if(is_file($uploaddir."/".$fileName)){
                @unlink($uploaddir."/".$fileName);
            }
            $db->query("insert into " . tname("file") . "(`file_key`, `file_path`, `file_original`, `file_type`, `width`, `height`)values('".$filekey."','" .$filePath . "','" . $fileName . "','" . $r['mime'] . "','" . $r['0'] . "','" . $r[1] . "')");
            $up->insertid = array('file_id' => $db->insert_id(), 'key_path' => $filePath, 'key' => $fileName, 'type' => $r['mime'], 'width' => $r[0], 'height' => $r[1]);
        }
    }
    return $up;
}

//获取远程图片
function _loadimg($url)
{
    global $db, $proverbkey;
    $upYun = new UpYun("imgbuket", "tolecen", "11311451167llx");
    $fname = md5($url);
    $file = array();
    $oldfile = $db->fetch_first("select * from " . tname("file") . " where SUBSTRING(file_key,12,32)='" . $fname . "'");
    if ($oldfile['file_id'] > 0) {
        return array('id' => $oldfile['file_id'], 'farm' => 'farm1', 'bucket' => 'hbimg', 'key_path'=>$oldfile['file_path'], 'key' => $oldfile['file_original'], 'type' => $oldfile['file_type'], 'width' => $oldfile['width'], 'height' => $oldfile['height']);
        exit();
    }
    $f = array('id' => 1, 'farm' => 'farm1', 'bucket' => 'hbimg', 'key_path'=>'', 'key' => '', 'type' => 'image/jpeg', 'width' => '180', 'height' => '180');
    $r = proverb_getimagesize($url);
    $imgtype = array('jpg' => '0', 'gif' => '1', 'png' => '2', 'bmp' => '3');
    $stuffix = 'jpg';
    if (isset($r[0]) && $r[0] > 0) {
        $c = "abcdefghigklmnopqrstuvwxyz0123456789";
        $d = substr($c, rand(0, 20), 2) . '/' . substr($c, rand(0, 10), 2);
        $dir = ROOT_PATH . '/data/upload';
        mkdir2($dir);

        switch ($r['mime']) {
            case 'image/gif':
                $stuffix = 'gif';
                break;
            case 'image/png':
                $stuffix = 'png';
                break;
            case 'image/bmp':
                $stuffix = 'bmp';
                break;
            default:
                $stuffix = 'jpg';
                break;
        }
        file_put_contents($dir.'/'.$fname.'.'.$stuffix, bidcms_fsockopen($url, $url));
        $fileName = $fname.'.'.$stuffix;
        $filePath = str_replace(ROOT_PATH, "", $dir) . "/";
        $filekey = $proverbkey . $imgtype[$stuffix] . $fname . str_replace('/', '', $d);
        $fh = fopen($dir."/".$fileName,'r');
        $upYun->writeFile("/".$fileName, $fh);
        fclose($fh);
        if(is_file($dir."/".$fileName)){
            @unlink($dir."/".$fileName);
        }
        $db->query("insert into " . tname("file") . "(`file_key`, `file_path`, `file_original`, `file_type`, `width`, `height`) values('".$filekey."','" . $filePath . "','" . $fileName . "','" . $r['mime'] . "','" . $r['0'] . "','" . $r[1] . "')");
        $file_id = $db->insert_id();
        if ($file_id) {
            $f = array('id' => $file_id, 'farm' => 'farm1', 'bucket' => 'hbimg', 'key_path'=>$filePath, 'key' => $fileName, 'type' => $r['mime'], 'width' => $r[0], 'height' => $r[1]);
        }
    }
    return $f;
}

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

function delPathFile($directory){
    $myDir = dir($directory);
    while ($file = $myDir->read()) {
        if ((is_dir("$directory/$file")) and ($file != ".") and ($file != "..")) {
            tree("$directory/$file");
        } else {
            unlink($file);
        }
    }
    $myDir->close();
}

//判断表单提交
function submitcheck($submitbutton)
{
    if (empty($_REQUEST[$submitbutton])) {
        return false;
    } else {
        if (($_SERVER['REQUEST_METHOD'] == 'POST' && empty($_SERVER['HTTP_X_FLASH_VERSION']) && (empty($_SERVER['HTTP_REFERER']) ||
                preg_replace("/https?:\/\/([^\:\/]+).*/i", "\\1", $_SERVER['HTTP_REFERER']) == preg_replace("/([^\:]+).*/", "\\1", $_SERVER['HTTP_HOST'])))
        ) {
            return true;
        }
        return false;
    }
}

//执行一般sql,并写入缓存
function getData($sql)
{
    $cachefile = md52($sql);
    if (!checkfile($cachefile)) {
        $data = array();
        $query = $GLOBALS['db']->query($sql);
        while ($d = $GLOBALS['db']->fetch_array($query)) {
            $data[] = $d;
        }
        write($cachefile, $data);
        return $data;
    } else {
        return read($cachefile);
    }
}

function proverb_getimagesize($url)
{
    $r = @getimagesize($url);
    if (isset($r[0]) && $r[0] > 0) {
        return $r;
    } else {
        $content = proverb_fsockopen($url, $url);
        if (!empty($content)) {
            $f = ROOT_PATH . '/data/temp/' . md5($url) . '.jpg';
            file_put_contents($f, $content);
            $r = @getimagesize($f);
            return $r;
        }
    }
    return false;
}


//页面转向
function sheader($url, $time = 0, $message = '', $template = 'redirect', $admin = false)
{
    if ($time > 0) {
        include template('redirect');
    } elseif (0 == $time) {
        header("location:" . $url);
    }

    exit;
}


//打印格式化的数组
function print_rr($data)
{
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}

//编辑器
function edit($content = '', $textareaid = 'content', $textareaname = 'content', $textwidth = '800', $textheight = '457', $showtextarea = 'mini')
{
    //$str='<textarea name="'.$textareaname.'" id="'.$textareaid.'" style="display:'.$showtextarea.';">'.$content.'</textarea><iframe src="proverb/editor/editor.htm?id='.$textareaid.'&ReadCookie='.$autosave.'" frameBorder="0" marginHeight="0" marginWidth="0" scrolling="No" width="'.$textwidth.'" height="'.$textheight.'"></iframe>';
    $str = '<textarea id="' . $textareaid . '" name="' . $textareaname . '" style="width: ' . $textwidth . 'px;height:' . $textheight . 'px;">' . $content . '</textarea>';
    $str .= '<script type="text/javascript" src="proverb/editor/xheditor-1.1.14-zh-cn.min.js" reload="1"></script><script type="text/javascript" src="proverb/editor/xheditor_plugins/ubb.min.js" reload="1"></script>';
    $str .= '<script type="text/javascript" reload="1">function pageInit(){jQuery(\'#' . $textareaid . '\').xheditor({tools:\'' . $showtextarea . '\',beforeSetSource:ubb2html,beforeGetSource:html2ubb,upImgUrl:\'!{editorRoot}xheditor_plugins/multiupload/multiupload.html?uploadurl={editorRoot}demos/upload.php%3Fimmediate%3D1&ext=图片文件(*.jpg;*.jpeg;*.gif;*.png)\'});}pageInit();</script>';

    return $str;
}

function parseIP($ip)
{
    $ip = explode('.', $ip);
    foreach ($ip as $k => $v) {
        if ($k > 1) {
            $ip[$k] = '*';
        }
    }
    return implode('.', $ip);
}

function parseMobile($mobile)
{
    if ($mobile) {
        $mobile1 = substr($mobile, 0, 3);
        $mobile2 = substr($mobile, 7);
    }
    return $mobile1 . '****' . $mobile2;
}

function parseDate($datetime)
{
    $cTime      =   time();
    $dTime      =   $cTime - $datetime;
    $dDay       =   intval(date("z",$cTime)) - intval(date("z",$datetime));
    //$dDay     =   intval($dTime/3600/24);
    $dYear      =   intval(date("Y",$cTime)) - intval(date("Y",$datetime));

    if( $dTime < 60 ){
        if($dTime < 10){
            return '刚刚';    //by yangjs
        }else{
            return intval(floor($dTime / 10) * 10)."秒前";
        }
    }elseif( $dTime < 3600 ){
        return intval($dTime/60)."分钟前";
        //今天的数据.年份相同.日期相同.
    }elseif( $dYear==0 && $dDay == 0  ){
        //return intval($dTime/3600)."小时前";
        return '今天'.date('H:i',$datetime);
    }else{
        return date("Y-m-d",$datetime);
    }
}


//多维数组转化成一维数组
function array_multi2single($array)
{
    static $result_array = array();
    foreach ($array as $value) {
        if (is_array($value)) {
            array_multi2single($value);
        } else {
            $result_array[] = $value;
        }
    }
    return $result_array;
}

function proverb_encode($data)
{
    if (!function_exists('json_encode')) {
        include ROOT_PATH . '/inc/json.class.php';
        $json = new Services_JSON();
        return $json->encode($data);
    } else {
        return json_encode($data);
    }
}

function proverb_decode($data)
{
    if (!function_exists('json_decode')) {
        include ROOT_PATH . '/inc/json.class.php';
        $json = new Services_JSON();
        return $json->decode($data);
    } else {
        return json_decode($data);
    }
}

function proverb_fsockopen($url, $referer = '')
{
    $content = @file_get_contents($url);
    if (empty($content)) {
        include_once(ROOT_PATH . '/inc/http/fsockopenHttp.class.php');
        $f = new fsockopenHttp();
        $f->setHeader('Referer', $referer);
        $content = $f->Get($url);
    }
    if (empty($content)) {
        include_once(ROOT_PATH . '/inc/http/curlHttp.class.php');
        $f = new curlHttp();
        $f->_option[CURLOPT_REFERER] = $referer;
        $content = $f->Get($url);
    }
    return $content;
}

function Pinyin($_String, $_Code = '')
{
    $s = array('深圳', '重庆');
    $d = array('shenzhen', 'chongqing');
    $_String = str_replace($s, $d, $_String);

    $_DataKey = "a|ai|an|ang|ao|ba|bai|ban|bang|bao|bei|ben|beng|bi|bian|biao|bie|bin|bing|bo|bu|ca|cai|can|cang|cao|ce|ceng|cha" .

        "|chai|chan|chang|chao|che|chen|cheng|chi|chong|chou|chu|chuai|chuan|chuang|chui|chun|chuo|ci|cong|cou|cu|" .

        "cuan|cui|cun|cuo|da|dai|dan|dang|dao|de|deng|di|dian|diao|die|ding|diu|dong|dou|du|duan|dui|dun|duo|e|en|er" .

        "|fa|fan|fang|fei|fen|feng|fo|fou|fu|ga|gai|gan|gang|gao|ge|gei|gen|geng|gong|gou|gu|gua|guai|guan|guang|gui" .

        "|gun|guo|ha|hai|han|hang|hao|he|hei|hen|heng|hong|hou|hu|hua|huai|huan|huang|hui|hun|huo|ji|jia|jian|jiang" .

        "|jiao|jie|jin|jing|jiong|jiu|ju|juan|jue|jun|ka|kai|kan|kang|kao|ke|ken|keng|kong|kou|ku|kua|kuai|kuan|kuang" .

        "|kui|kun|kuo|la|lai|lan|lang|lao|le|lei|leng|li|lia|lian|liang|liao|lie|lin|ling|liu|long|lou|lu|lv|luan|lue" .

        "|lun|luo|ma|mai|man|mang|mao|me|mei|men|meng|mi|mian|miao|mie|min|ming|miu|mo|mou|mu|na|nai|nan|nang|nao|ne" .

        "|nei|nen|neng|ni|nian|niang|niao|nie|nin|ning|niu|nong|nu|nv|nuan|nue|nuo|o|ou|pa|pai|pan|pang|pao|pei|pen" .

        "|peng|pi|pian|piao|pie|pin|ping|po|pu|qi|qia|qian|qiang|qiao|qie|qin|qing|qiong|qiu|qu|quan|que|qun|ran|rang" .

        "|rao|re|ren|reng|ri|rong|rou|ru|ruan|rui|run|ruo|sa|sai|san|sang|sao|se|sen|seng|sha|shai|shan|shang|shao|" .

        "she|shen|sheng|shi|shou|shu|shua|shuai|shuan|shuang|shui|shun|shuo|si|song|sou|su|suan|sui|sun|suo|ta|tai|" .

        "tan|tang|tao|te|teng|ti|tian|tiao|tie|ting|tong|tou|tu|tuan|tui|tun|tuo|wa|wai|wan|wang|wei|wen|weng|wo|wu" .

        "|xi|xia|xian|xiang|xiao|xie|xin|xing|xiong|xiu|xu|xuan|xue|xun|ya|yan|yang|yao|ye|yi|yin|ying|yo|yong|you" .

        "|yu|yuan|yue|yun|za|zai|zan|zang|zao|ze|zei|zen|zeng|zha|zhai|zhan|zhang|zhao|zhe|zhen|zheng|zhi|zhong|" .

        "zhou|zhu|zhua|zhuai|zhuan|zhuang|zhui|zhun|zhuo|zi|zong|zou|zu|zuan|zui|zun|zuo";

    $_DataValue = "-20319|-20317|-20304|-20295|-20292|-20283|-20265|-20257|-20242|-20230|-20051|-20036|-20032|-20026|-20002|-19990" .

        "|-19986|-19982|-19976|-19805|-19784|-19775|-19774|-19763|-19756|-19751|-19746|-19741|-19739|-19728|-19725" .

        "|-19715|-19540|-19531|-19525|-19515|-19500|-19484|-19479|-19467|-19289|-19288|-19281|-19275|-19270|-19263" .

        "|-19261|-19249|-19243|-19242|-19238|-19235|-19227|-19224|-19218|-19212|-19038|-19023|-19018|-19006|-19003" .

        "|-18996|-18977|-18961|-18952|-18783|-18774|-18773|-18763|-18756|-18741|-18735|-18731|-18722|-18710|-18697" .

        "|-18696|-18526|-18518|-18501|-18490|-18478|-18463|-18448|-18447|-18446|-18239|-18237|-18231|-18220|-18211" .

        "|-18201|-18184|-18183|-18181|-18012|-17997|-17988|-17970|-17964|-17961|-17950|-17947|-17931|-17928|-17922" .

        "|-17759|-17752|-17733|-17730|-17721|-17703|-17701|-17697|-17692|-17683|-17676|-17496|-17487|-17482|-17468" .

        "|-17454|-17433|-17427|-17417|-17202|-17185|-16983|-16970|-16942|-16915|-16733|-16708|-16706|-16689|-16664" .

        "|-16657|-16647|-16474|-16470|-16465|-16459|-16452|-16448|-16433|-16429|-16427|-16423|-16419|-16412|-16407" .

        "|-16403|-16401|-16393|-16220|-16216|-16212|-16205|-16202|-16187|-16180|-16171|-16169|-16158|-16155|-15959" .

        "|-15958|-15944|-15933|-15920|-15915|-15903|-15889|-15878|-15707|-15701|-15681|-15667|-15661|-15659|-15652" .

        "|-15640|-15631|-15625|-15454|-15448|-15436|-15435|-15419|-15416|-15408|-15394|-15385|-15377|-15375|-15369" .

        "|-15363|-15362|-15183|-15180|-15165|-15158|-15153|-15150|-15149|-15144|-15143|-15141|-15140|-15139|-15128" .

        "|-15121|-15119|-15117|-15110|-15109|-14941|-14937|-14933|-14930|-14929|-14928|-14926|-14922|-14921|-14914" .

        "|-14908|-14902|-14894|-14889|-14882|-14873|-14871|-14857|-14678|-14674|-14670|-14668|-14663|-14654|-14645" .

        "|-14630|-14594|-14429|-14407|-14399|-14384|-14379|-14368|-14355|-14353|-14345|-14170|-14159|-14151|-14149" .

        "|-14145|-14140|-14137|-14135|-14125|-14123|-14122|-14112|-14109|-14099|-14097|-14094|-14092|-14090|-14087" .

        "|-14083|-13917|-13914|-13910|-13907|-13906|-13905|-13896|-13894|-13878|-13870|-13859|-13847|-13831|-13658" .

        "|-13611|-13601|-13406|-13404|-13400|-13398|-13395|-13391|-13387|-13383|-13367|-13359|-13356|-13343|-13340" .

        "|-13329|-13326|-13318|-13147|-13138|-13120|-13107|-13096|-13095|-13091|-13076|-13068|-13063|-13060|-12888" .

        "|-12875|-12871|-12860|-12858|-12852|-12849|-12838|-12831|-12829|-12812|-12802|-12607|-12597|-12594|-12585" .

        "|-12556|-12359|-12346|-12320|-12300|-12120|-12099|-12089|-12074|-12067|-12058|-12039|-11867|-11861|-11847" .

        "|-11831|-11798|-11781|-11604|-11589|-11536|-11358|-11340|-11339|-11324|-11303|-11097|-11077|-11067|-11055" .

        "|-11052|-11045|-11041|-11038|-11024|-11020|-11019|-11018|-11014|-10838|-10832|-10815|-10800|-10790|-10780" .

        "|-10764|-10587|-10544|-10533|-10519|-10331|-10329|-10328|-10322|-10315|-10309|-10307|-10296|-10281|-10274" .

        "|-10270|-10262|-10260|-10256|-10254";

    $_TDataKey = explode('|', $_DataKey);

    $_TDataValue = explode('|', $_DataValue);

    $_Data = array_combine($_TDataKey, $_TDataValue);

    arsort($_Data);

    reset($_Data);

    $_Res = '';

    for ($i = 0; $i < strlen($_String); $i++) {

        $_P = ord(substr($_String, $i, 1));

        if ($_P > 160) {

            $_Q = ord(substr($_String, ++$i, 1));
            $_P = $_P * 256 + $_Q - 65536;

        }

        $_Res .= _Pinyin($_P, $_Data);

    }

    return preg_replace("/[^a-z0-9]*/", '', $_Res);

}

function _Pinyin($_Num, $_Data)
{

    if ($_Num > 0 && $_Num < 160) {

        return chr($_Num);

    } elseif ($_Num < -20319 || $_Num > -10247) {

        return '';

    } else {

        foreach ($_Data as $k => $v) {
            if ($v <= $_Num) break;
        }

        return $k;

    }

}

function _U2_Utf8_Gb($_C)
{

    $_String = '';

    if ($_C < 0x80) {

        $_String .= $_C;

    } elseif ($_C < 0x800) {

        $_String .= chr(0xC0 | $_C >> 6);

        $_String .= chr(0x80 | $_C & 0x3F);

    } elseif ($_C < 0x10000) {

        $_String .= chr(0xE0 | $_C >> 12);

        $_String .= chr(0x80 | $_C >> 6 & 0x3F);

        $_String .= chr(0x80 | $_C & 0x3F);

    } elseif ($_C < 0x200000) {

        $_String .= chr(0xF0 | $_C >> 18);

        $_String .= chr(0x80 | $_C >> 12 & 0x3F);

        $_String .= chr(0x80 | $_C >> 6 & 0x3F);

        $_String .= chr(0x80 | $_C & 0x3F);

    }

    return $_String;

}

/**
 * 是否是手机浏览
 * @return bool
 */
function isMobile()
{
    //判断手机发送的客户端标志
    if (isset($_SERVER['HTTP_USER_AGENT'])) {
        $userAgent = strtolower($_SERVER['HTTP_USER_AGENT']);
        $clientKeywords = array(
            'nokia', 'sony', 'ericsson', 'mot', 'samsung', 'htc', 'sgh', 'lg', 'sharp', 'sie-'
        , 'philips', 'panasonic', 'alcatel', 'lenovo', 'iphone', 'ipod', 'blackberry', 'meizu',
            'android', 'netfront', 'symbian', 'ucweb', 'windowsce', 'palm', 'operamini',
            'operamobi', 'opera mobi', 'openwave', 'nexusone', 'cldc', 'midp', 'wap', 'mobile'
        );
        // 从HTTP_USER_AGENT中查找手机浏览器的关键字
        if (preg_match("/(" . implode('|', $clientKeywords) . ")/i", $userAgent) && strpos($userAgent, 'ipad') === false) {
            return true;
        }
    }
    return false;
}