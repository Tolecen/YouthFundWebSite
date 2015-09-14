<?php

class Nightkiss extends Controller
{
    public function index()
    {
        print 'Hello NightKiss';
    }

    public function getAllMedias()
    {
        header('Content-type:text/json');

        $page = empty($_POST['page']) ? 0 : intval(trim(strip_tags($_POST['page'])));
        $pageSize = empty($_POST['pageSize']) ? 20 : intval(trim(strip_tags($_POST['pageSize'])));

        $logStr = "page : ".$_POST['page']."\r\n";
        $logStr .= "page2 : ".$page."\r\n";
        $logStr .= "pageSize : ".$_POST['pageSize']."\r\n";
        $logStr .= "pageSize2 : ".$pageSize."\r\n";
        $logStr .= "version : ".$_POST['version']."\r\n";
        writelog($logStr);

        $json = array('medias'=>getAllMedias($page, "", "", $pageSize));
        echo proverb_encode($json);
    }

    public function getLastMedia()
    {
        header('Content-type:text/json');
        $json = array('medias'=>getAllMedias(0, "", "", 1));
        echo proverb_encode($json);
    }

    public function getAllPercent()
    {
        header('Content-type:text/json');
        $score = !empty($_POST['score']) ? trim(strip_tags($_POST['score'])) : 0;
        if($score == 0){
            echo 0;
            exit();
        }
        $json = getPercent($score);
        echo $json;
    }

//    public function writelog($str, $name = "log.txt", $writer = "a")
//    {
//        $open=fopen($name,$writer);
//        fwrite($open,$str);
//        fclose($open);
//    }
}