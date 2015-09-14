<?php
/*
	[Phpup.Net!] (C)2009-2011 Phpup.net.
	This is NOT a freeware, use is subject to license terms

	$Id: page.class.php 2010-08-24 10:42 $
*/

if(!defined('IN_PROVERB')) {
	exit('Access Denied');
}
class page
{
	var $count=0; //列表总数量,必须自定义
	var $total=0; //总页数,不用更改,自动计算
	var $absolutePage=0; //当前页
	var $pageSize=30; //每页数量
	var $getVal='page'; //通过外部传过来的参数变量 
	var $url=''; //网址,在后面会自动加上参数
	var $pageShowButton=14; //显示出来按钮页的数量
	function page($count)
	{
		$this->count=$count;
	}
	//返回分页结果
	function setPage()
	{
		$this->pageSize=$this->pageSize>0?$this->pageSize:30;
		$this->absolutePage=abs(intval(!empty($_REQUEST[$this->getVal])?$_REQUEST[$this->getVal]:0));
		$this->total=ceil($this->count/$this->pageSize);
		if($this->absolutePage>0)
		{
			$this->prevPage=$this->absolutePage<$this->total?($this->absolutePage-1<0?0:$this->absolutePage-1):($this->total-1<0?0:$this->total-1);
		}
		else
		{
			$this->prevPage=0;
		}

		if($this->absolutePage<$this->total)
		{
			$this->nextPage=$this->absolutePage+1;
		}
		else
		{
			$this->nextPage=$this->total;
		}
	}
	
	//得到格式分的分页
	function setFormatPage()
	{
		$result=array();
		$pageshow=$this->pageShowButton;
		$center=ceil($pageshow/2);
		
		if($this->absolutePage<$center)
		{
			$left=0;
			if($pageshow<=$this->total)
			{
				$right=$pageshow;
			}
			else
			{
				$right=$this->total;
			}
		}
		elseif($this->absolutePage>=$center)
		{
			
			if($this->absolutePage+$center<=$this->total)
			{
				$right=$this->absolutePage+$center;
				$left=$this->absolutePage-$center>0?$this->absolutePage-$center:0;
			}
			elseif($this->absolutePage+$center>$this->total)
			{
				$right=$this->total;
				$left=$this->total-$pageshow>0?$this->total-$pageshow:0;
			}
		}
		for($i=$left;$i<$right;$i++)
		{
			$result[]=$i;
		}
		return $result;
	}
	//解析url
	function parseurl($page)
	{
		$url=$this->url;
		if(strpos($url,'html') && $GLOBALS['setting']['seo_rewrite'])
		{
			
			$u=explode('.html',$url);
			$murl=$u[0].'-'.$this->getVal.'_'.$page.'.html';
		}
		else
		{
			if(strpos('a'.$url,'?')>0)
			{
				$de='&';
			}
			else
			{
				$de='?';
			}
			$murl=$url.$de.$this->getVal.'='.$page;
		}
		return $murl;
	}
	
	
}