<?php
if (!defined('IN_PROVERB')) {
    exit('Access Denied');
}

function getTopic($topic_id)
{
    global $db;
    $query = "select * from " . tname('topic') . " where topic_id=" . $topic_id;
    $topic = $db->fetch_first($query);
    if ($topic['topic_id'] > 0) {
        $topic['file'] = getfile($topic['file_id']);
        return $topic;
    }
    return array();
}


function getAllTopics($cursor = 0, $container = '', $order = '', $pagesize = 20, $sql = '')
{
    global $db;
    $topics = array();
    if (empty($sql)) {
        $sql = "select topic_id from " . tname('topic');
        if (!empty($container)) {
            $sql .= " where 1 " . $container;
        }
        if (!empty($order)) {
            $sql .= ' ' . $order;
        } else {
            $sql .= ' order by topic_id desc ';
        }
        $sql .= " limit " . ($cursor * $pagesize) . "," . $pagesize;
    }
    $query = $db->query($sql); //这里是所有的topics
    while ($rows = $db->fetch_array($query)) {
        $topic = getTopic($rows['topic_id']);
        if ($topic) {
            $topics[] = $topic;
        }
    }
    return $topics;
}

function getfile($file_id)
{
    global $db, $bidcmskey;
    $file = array();
    if ($file_id > 0) {
        $query = "select file_original as `key`,file_path as `path`,file_type as `type`,width,height from " . tname('file') . " where file_id=" . $file_id;
        $file = $db->fetch_first($query);
        if (empty($file)) {
            $file = array("key" => $bidcmskey, "type" => "image/jpeg", "width" => "180", "height" => "180");
        }
    } else {
        $file = array("key" => $bidcmskey, "type" => "image/jpeg", "width" => "180", "height" => "180");

    }
    $file['farm'] = 'farm1';
    $file['bucket'] = 'hbimg';
    $file['host'] = $GLOBALS['app']['scheme']."://".$GLOBALS['app']['host']."/";
    $file['frames'] = 1;
    return $file;
}