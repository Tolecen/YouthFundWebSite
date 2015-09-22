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

    $fileSuf = end(explode('.', $file['key']));

    switch ($fileSuf)
    {
        case "jpg":
        case "jpeg":
        case "gif":
        case "bmp":
        case "png":
            $fileType = 'image';
            break;
        default:
            $fileType = 'file';
            break;
    }

    $file['type'] = $fileType;

    $file['farm'] = 'farm1';
    $file['bucket'] = 'hbimg';
    $file['host'] = $GLOBALS['app']['scheme']."://".$GLOBALS['app']['host']."/";
    $file['frames'] = 1;
    return $file;
}

function getProject_bl($project_id)
{
    global $db;
    $Project_bl = array();
    $query = "select * from " . tname('project_bl') . " where project_id=" . $project_id;
    $query = $db->query($query);
    while ($rows = $db->fetch_array($query)) {
        $rows['file'] = getfile($rows['file_id']);
        if ($rows) {
            $Project_bl[] = $rows;
        }
    }

    return $Project_bl;

}

function getProject_product($project_id)
{
    global $db;
    $Project_product = array();
    $query = "select * from " . tname('project_product') . " where project_id=" . $project_id;
    $query = $db->query($query);
    while ($rows = $db->fetch_array($query)) {
        $rows['file'] = getfile($rows['file_id']);
        if ($rows) {
            $Project_product[] = $rows;
        }
    }

    return $Project_product;

}

function getProject_qr($project_id)
{
    global $db;
    $Project_qr = array();
    $query = "select * from " . tname('project_qr') . " where project_id=" . $project_id;
    $query = $db->query($query);
    while ($rows = $db->fetch_array($query)) {
        $rows['file'] = getfile($rows['file_id']);
        if ($rows) {
            $Project_qr[] = $rows;
        }
    }

    return $Project_qr;

}

function getProject_plan($project_id)
{
    global $db;
    $Project_plan = array();
    $query = "select * from " . tname('project_plan') . " where project_id=" . $project_id;
    $query = $db->query($query);
    while ($rows = $db->fetch_array($query)) {
        $rows['file'] = getfile($rows['file_id']);
        if ($rows) {
            $Project_plan[] = $rows;
        }
    }

    return $Project_plan;

}

function getProject_gg($project_id)
{
    global $db;
    $Project_gg = array();
    $query = "select * from " . tname('project_gg') . " where project_id=" . $project_id;
    $query = $db->query($query);
    while ($rows = $db->fetch_array($query)) {
        if ($rows) {
            $Project_gg[] = $rows;
        }
    }

    return $Project_gg;

}

function getProject($project_id)
{
    global $db;
    $query = "select * from " . tname('project') . " where project_id=" . $project_id;
    $project = $db->fetch_first($query);
    if ($project['project_id'] > 0) {
        $project['bl'] = getProject_bl($project['project_id']);
        $project['product'] = getProject_product($project['project_id']);
        $project['qr'] = getProject_qr($project['project_id']);
        $project['plan'] = getProject_plan($project['project_id']);
        $project['gg'] = getProject_gg($project['project_id']);
        return $project;
    }
    return array();
}

function getAllProject($cursor = 0, $container = '', $order = '', $pagesize = 20, $sql = '')
{
    global $db;
    $projects = array();
    if (empty($sql)) {
        $sql = "select project_id from " . tname('project');
        if (!empty($container)) {
            $sql .= " where 1 " . $container;
        }
        if (!empty($order)) {
            $sql .= ' ' . $order;
        } else {
            $sql .= ' order by project_id desc ';
        }
        $sql .= " limit " . ($cursor * $pagesize) . "," . $pagesize;
    }
    $query = $db->query($sql); //这里是所有的projects
    while ($rows = $db->fetch_array($query)) {
        $project = getProject($rows['project_id']);
        if ($project) {
            $projects[] = $project;
        }
    }
    return $projects;
}