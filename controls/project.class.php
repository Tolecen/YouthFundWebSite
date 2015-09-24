<?php
/*
	[Bidcms.com!] (C)2009-2011 Bidcms.com.
	This is NOT a freeware, use is subject to license terms
	$author limengqi
	$Id: index.class.php 2010-08-24 10:42 $
*/
if(!defined('IN_PROVERB')) {
    exit('Access Denied');
}
class project_controller
{
    function project_controller()
    {
        include ROOT_PATH.'./models/common.php';
    }

    function index_action()
    {
        if(isMobile())
            include template('project_m');
        else
            include template('project');
    }
    function regrule_action()
    {
        include template('project_regrule');
    }
    function item_action()
    {
        $id=trim($_GET['id']);
        $project=getProject($id);
        include template('project_item');
    }
    function saveProject_action()
    {
        global $db;

        $projectName = $_POST['projectName'];
        $projectType = $_POST['projectType'];
        $projectUser = $_POST['projectUser'];
        $mobile = $_POST['mobile'];
        $weichart = $_POST['weichart'];
        $email = $_POST['email'];
        $company = $_POST['company'];
        $industry = $_POST['industry'];
        $rzjd = $_POST['rzjd'];
        $rzje = $_POST['rzje'];
        $tdgm = $_POST['tdgm'];

        // 高管职位
        $ggzws = $_POST['ggzws'];
        // 高管名称
        $ggmcs = $_POST['ggmcs'];

        // 营业执照图片
        $fjImageArr = $_POST['fjImageArr'];

        // 产品图片
        $cptpImageArr = $_POST['cptpImageArr'];

        // 二维码
        $cpewmImageArr = $_POST['cpewmImageArr'];

        // 商业计划书、战略规划
        $syjhImageArr = $_POST['syjhImageArr'];


        if($projectType ==  0){
            $projectTypeName = "社会项目";
        } else {
            $projectTypeName = "高校项目";
        }

        $db->query("insert into " . tname('project') . "(project_name,project_type,project_type_id,project_user,project_user_phone,project_user_email,project_user_weixin,project_company,project_company_type,project_company_financ_p,project_company_financ,project_company_team,created_time) values ('" . $projectName . "','" . $projectTypeName . "','" . $projectType . "','" . $projectUser . "','" . $mobile . "','" . $email . "','" . $weichart . "','" . $company . "','" . $industry . "','" . $rzjd . "','" . $rzje . "','" . $tdgm . "','" . time() . "')");

        $project_id = $db->insert_id();

        // 插入营业执照图片
        foreach($fjImageArr as $fjImage){
            $db->query("insert into " . tname('project_bl') . "(project_id,file_id,created_time) values ('" . $project_id . "','" . $fjImage . "','" . time() . "')");
        }

        // 插入产品图片
        foreach($cptpImageArr as $cptpImage){
            $db->query("insert into " . tname('project_product') . "(project_id,file_id,created_time) values ('" . $project_id . "','" . $cptpImage . "','" . time() . "')");
        }

        // 插入二维码
        foreach($cpewmImageArr as $cpewmImage){
            $db->query("insert into " . tname('project_qr') . "(project_id,file_id,created_time) values ('" . $project_id . "','" . $cpewmImage . "','" . time() . "')");
        }

        // 插入商业计划书、战略规划
        foreach($syjhImageArr as $syjhImage){
            $db->query("insert into " . tname('project_plan') . "(project_id,file_id,created_time) values ('" . $project_id . "','" . $syjhImage . "','" . time() . "')");
        }

        for($i = 0; $i < count($ggzws); $i++){
            $db->query("insert into " . tname('project_gg') . "(project_id,gg_mc,gg_zw,created_time) values ('" . $project_id . "','" . $ggmcs[$i] . "','" . $ggzws[$i] . "','" . time() . "')");
        }

        $pro['ret'] = 0;

        echo json_encode($pro);
    }

}
