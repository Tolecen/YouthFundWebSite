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
            $sql .= " where 1 and locked=0 " . $container;
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