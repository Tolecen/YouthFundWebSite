<?php
if (! defined ( 'IN_PROVERB' )) {
	exit ( 'Access Denied' );
}
class admin {
	static $filelist = array ();
	
	function main_action() {
		global $db,$session;
		$uid = $session->get ( 'adminid' );
		//得到个人信息
		$userinfo = $db->fetch_first( 'select * from '.tname('admin').' where uid=' . $uid);
		include ROOT_PATH . '/views/admin/adminframe.php';
	}
	function index_action() {
		include ROOT_PATH . '/views/admin/index.php';
	}
	
	function login_action() {
		
		if (submitcheck ( 'commit' )) {
			$user = global_addslashes ( trim ( strip_tags ( $_POST ['username'] ) ) );
			$password = md52 ( $_POST ['password'] );
			$container = ' and username="' . $user . '" and passwd="' . $password . '" and usertype="adminuser"';
			
			$user_mod = new common ( 'admin' );
			$userinfo = $user_mod->GetOne ( $container );
			
			if ($userinfo) {
				$GLOBALS ['session']->set ('adminid',$userinfo ['uid']);
				$GLOBALS ['session']->set ('adminuser',$userinfo ['username']);
				echo '<SCRIPT LANGUAGE="JavaScript">
				<!--
					window.onload=function(){window.open("index.php?con=' . $GLOBALS ['setting'] ['adminpath'] . '","_top","")};
				//-->
				</SCRIPT>';
			} else {
				exit ( '<SCRIPT LANGUAGE="JavaScript">
				<!--
					alert("用户名或密码不正确!");
					parent.document.getElementById("user_pass").value="";
				//-->
				</SCRIPT>' );
			}
		} else {
			include ROOT_PATH . '/views/admin/login.php';
		}
	}
	function logout_action() {
		$GLOBALS ['session']->del ( array ('adminid', 'adminuser') );

		sheader ( 'index.php?con=' . $GLOBALS ['setting'] ['adminpath'] . '&act=login' );
	}

    //后台系统变量
    function setting_action() {

        $type = $_GET ['type'];
        switch ($type) {
            case 'site' :
                include ROOT_PATH . '/views/admin/setting_site.php';
                break;
            default :
                include ROOT_PATH . '/views/admin/setting_site.php';
                break;
        }
    }

    //处理系统提交数据
    function settingdata_action() {
        if (submitcheck ( 'commit' )) {
            unset($_POST['con']);
            unset($_POST['act']);
            $type = $_POST ['dotype'];
            unset ( $_POST ['commit'], $_POST ['dotype'] );

            $setting_mod = new common ( 'setting' );

            if ($_FILES ['site_logo'] ['name']) {
                $filename = explode ( '.', $_FILES ['site_logo'] ['name'] );
                $container = 'and variable="site_logo"';
                $data ['content'] = _upload ( 'site_logo', 'data/logo', 'logo.' . $filename [1] );
                $datalist = $setting_mod->GetOne ( $container );

                if ($datalist) {
                    $setting_mod->UpdateData ( $data, $container );
                } else {
                    $data ['variable'] = 'site_logo';
                    $setting_mod->InsertData ( $data );
                }
            }
            $changeadmin='';
            foreach ( $_POST as $k => $v ) {
                if($k=='adminpath' && $v!=$GLOBALS['setting']['adminpath'])
                {
                    $changeadmin=$v;
                }
                $container = 'and variable="' . $k . '"';
                $data ['content'] = strip_tags ( $v );
                $datalist = $setting_mod->GetOne ( $container );
                if ($datalist) {
                    $updatesql [$k] = $v;
                } else {
                    $insertsql [$k] = $v;
                }
            }

            if ($insertsql) {
                foreach ( $insertsql as $key => $val ) {
                    $setting_mod->InsertData ( array ('variable' => $key, 'content' => $val ) );
                }
            }
            if ($updatesql) {
                foreach ( $updatesql as $key => $val ) {
                    $setting_mod->UpdateData ( array ('content' => $val ), 'and variable="' . $key . '"' );
                }
            }
            if ($type == 'template') {
                $dofile = cleancache ( '', 'data/compile' );
                if (! $dofile) {
                    echo '<SCRIPT LANGUAGE="JavaScript">
					<!--
						alert("模板更新成功,清空系统编译失败,请手动清除");
					//-->
					</SCRIPT>';
                } else {
                    echo '<SCRIPT LANGUAGE="JavaScript">
					<!--
						alert("模板更新成功");
					//-->
					</SCRIPT>';
                }
            }
            deletef ( 'setting' );

            if(!empty($changeadmin))
            {
                echo '后台路径参数已修改，为了系统安全，请您继续做以下工作：<ul><li>1、连接ftp,将controls/'.$GLOBALS['setting']['adminpath'].'.class.php文件名修改为:'.$changeadmin.'.class.php</li><li>2、打开'.$changeadmin.'.class.php，将文件中'.$GLOBALS['setting']['adminpath'].'_controller替换为:'.$changeadmin.'_controller</li><li>3、修改完毕后,<a href="'.SITE_ROOT.'/?con='.$changeadmin.'" target="_top">重新进入后台</a></li></ul>';
            }
            else
            {
                if ($_REQUEST ['custom_url']) {
                    sheader ( $_REQUEST ['custom_url'], 3, '修改成功', 'redirect', true );
                } else {
                    sheader ( 'index.php?con=' . $GLOBALS ['setting'] ['adminpath'] . '&act=setting&type=' . $type, 3, '修改成功', 'redirect', true );
                }
            }
        }
    }
	
	
	//清空缓存
	function delcache_action()
	{
		$dofile=cleancache();
		if($dofile==='nowrite')
		{
			echo '<SCRIPT LANGUAGE="JavaScript">
			<!--
				parent.showDiglog("'.$GLOBALS['setting']['site_cache_dir'].'目录修改权限不足,请联系服务商");
			//-->
			</SCRIPT>';
		}
		elseif(!$dofile)
		{
			echo '<SCRIPT LANGUAGE="JavaScript">
			<!--
				parent.showDiglog("清空缓存失败,请在ftp上手动清除");
			//-->
			</SCRIPT>';
		}
		else
		{
			
			cleancache('php','data/cache/userinfo');
			cleancache('php','data/cache/usercount');
			echo '<SCRIPT LANGUAGE="JavaScript">
			<!--
				parent.showDiglog("清空缓存成功");
			//-->
			</SCRIPT>';
		}
	}
	//管理员列表
	function manageuser_action() {
		$ext='';
		$container='';
		if ($_REQUEST ['username']) {
			$container .= ' and username like "%' . global_addslashes ( $_REQUEST ['username'] ) . '%"';
			$ext = '&username=' . $_REQUEST ['username'];
		}
		
		$showpage = array ('isshow' => 1, 'currentpage' => intval ( $_REQUEST ['page'] ), 'pagesize' => 20, 'url' => 'index.php?con=' . $GLOBALS ['setting'] ['adminpath'] . '&act=admin' . $ext, 'example' => 3 );
		$user_mod = new common ( 'admin' );
		$userlist = $user_mod->GetPage ( $showpage, $container );
		
		
		include ROOT_PATH . '/views/admin/manageuser.php';
	}
	/**
	 *添加会员
	 */
	function manageusermodify_action() {

		$updateid = intval ( $_REQUEST ['updateid'] );
		$user_mod = new common ( 'admin' );
		$user = array ();
		if (submitcheck ( 'commit' )) {
			
			$data ['username'] = trim ( strip_tags ( $_POST ['username'] ) );
			$data ['usertype'] = "adminuser";
			$data ['email'] = trim ( strip_tags ( $_POST ['email'] ) );

			$author ['username'] = $data ['username'];
			$author ['urlname'] = Pinyin($data ['username']);
            $author ['email'] = $data ['email'];
            $author ['created_at'] = time();
            $author ['location'] = "";

			if ($updateid > 0) {

                $user = $user_mod->GetOne ( 'and uid=' . $updateid );

				if (! empty ( $_POST ['password'] )) {
					$data ['passwd'] = md52 ( $_POST ['password'] );
                    $author ['passwd'] = $data ['passwd'];
				}
				if ($user_mod->UpdateData ( $data, 'and uid=' . $updateid )) {

					sheader ( 'index.php?con=' . $GLOBALS ['setting'] ['adminpath'] . '&act=manageuser&type=manageuser', 3, '修改成功', 'redirect', true );
				} else {
					sheader ( 'index.php?con=' . $GLOBALS ['setting'] ['adminpath'] . '&act=manageuser&type=manageuser', 3, '修改失败', 'redirect', true );
				}
			} else {
				$data ['passwd'] = md52 ( $_POST ['password'] );
                $author ['passwd'] = $data ['passwd'];
                $user_mod->InsertData ( $data );
                sheader ( 'index.php?con=' . $GLOBALS ['setting'] ['adminpath'] . '&act=manageuser&type=manageuser', 3, '添加成功', 'redirect', true );
			}
		} else {
			if ($updateid) {
				$user_mod->GetOne ( 'and uid=' . $updateid );
			}
			include ROOT_PATH . '/views/admin/manageuser_form.php';
		}
	}

    //标签管理
    function media_action()
    {
        $data_mod=new common('topic');
        $id=intval($_REQUEST['id']);
        if($_REQUEST['type']=='del' && $id>0)
        {
            $data_mod->DeleteData('1 and topic_id='.$id);
            sheader ( 'index.php?con=' . $GLOBALS ['setting'] ['adminpath'] . '&act=media', 3, '删除成功', 'redirect', true );
        } elseif( $_REQUEST['type']=='addUse' && $id>0){
            $data ['isused'] = 1;
            $data_mod->UpdateData($data, 'and topic_id='.$id);
            sheader ( 'index.php?con=' . $GLOBALS ['setting'] ['adminpath'] . '&act=media', 3, '修改成功', 'redirect', true );
        } elseif( $_REQUEST['type']=='delUse' && $id>0){
            $data ['isused'] = 0;
            $data_mod->UpdateData($data, 'and topic_id='.$id);
            sheader ( 'index.php?con=' . $GLOBALS ['setting'] ['adminpath'] . '&act=media', 3, '修改成功', 'redirect', true );
        }
        else
        {
            $container = "";
            if(!empty($_REQUEST['keyword']))
            {
                $container.=' and topic_name like "%'.trim(strip_tags($_REQUEST['keyword'])).'%"';
            }
            $showpage=array('isshow'=>1,'currentpage'=>intval($_REQUEST['page']),'pagesize'=>20,'url'=>'index.php?con='.$GLOBALS['setting']['adminpath'].'&act=media','example'=>2);
            $taglist=$data_mod->GetPage($showpage,$container,"","","ORDER BY topic_id DESC");
            $dataCount = count($taglist['data']);
            if($dataCount > 0){
                $mediaGroup = array();
                for($i=0; $i<$dataCount; $i++){
                    $mediaGroup[] = $taglist['data'][$i];
                }
                $taglist['data'] = $mediaGroup;
            }
            include ROOT_PATH.'/views/admin/media.php';
        }
    }

    /**
     *添加标签
     */

    function mediamodify_action() {

        global $session;

        $updateid = intval ( $_REQUEST ['updateid'] );
        $media_mod = new common ( 'topic' );
        $tag = array ();
        if (submitcheck ( 'commit' )) {


//              `topic_id` bigint(20) NOT NULL AUTO_INCREMENT,
//              `topic_name` varchar(20) NOT NULL COMMENT '文章名称',
//              `isused` tinyint(1) NOT NULL COMMENT '是否关闭',
//              `topic_desc` TEXT NOT NULL COMMENT '文章内容',
//              `topic_tag` varchar(20) NOT NULL COMMENT '话题标语',
//              `created_time`

            $data ['topic_name'] = $_POST['topic_name'];
            $data ['topic_desc'] = $_POST['topic_desc'];
            $data ['topic_intro'] = $_POST['topic_intro'];
            $data ['file_id'] = $_POST['file_id'];


            if ($updateid > 0) {
                if ($media_mod->UpdateData ( $data, 'and topic_id=' . $updateid )) {
                    sheader ( 'index.php?con=' . $GLOBALS ['setting'] ['adminpath'] . '&act=media', 3, '修改成功', 'redirect', true );
                } else {
                    sheader ( 'index.php?con=' . $GLOBALS ['setting'] ['adminpath'] . '&act=media', 3, '修改失败', 'redirect', true );
                }
            } else {
                $data ['created_time'] = time();
                if ($media_mod->InsertData ( $data )) {
                    sheader ( 'index.php?con=' . $GLOBALS ['setting'] ['adminpath'] . '&act=media', 3, '添加成功', 'redirect', true );
                }
            }
        } else {
            if ($updateid) {
                $media = $media_mod->GetOne ( 'and topic_id=' . $updateid );
            }
            include ROOT_PATH . '/views/admin/media_form.php';
        }
    }

	//ajax修改添加处理
	function admin_ajax_action() {
		$key = empty ( $_GET ['primarykey'] ) ? 'id' : $_GET ['primarykey'];
		
		if (empty ( $_GET ['table'] )) {
			echo '参数有误';
			exit ();
		} elseif (empty ( $_GET ['field'] )) {
			echo '字段为空';
			exit ();
		} 

		elseif (intval ( $_GET ['primary'] ) == 0) {
			echo '主键不能为0';
			exit ();
		} 

		else {
			$obj = new common ( $_GET ['table'] );
			
			$data [$_GET ['field']] = trim ( strip_tags ( $_GET ['val'] ) );
			$container = "and " . $key . "=" . intval ( $_GET ['primary'] );
			$this->_cachedel ();
			$goods = $obj->GetOne ( $container );
			
			if ($goods && $obj->UpdateData ( $data, $container, true )) {
				exit ( '1' );
			} else {
				exit ( 'failed' );
			}
		}
	}

}