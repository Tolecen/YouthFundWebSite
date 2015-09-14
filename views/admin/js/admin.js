ns4 = (document.layers) ? true : false;
ie4 = (document.all) ? true : false;
function modifyValue(objval)
{
	var obj=objval.replace('input','');
	$("#"+obj).hide();
	$("#"+objval).val(trim($("#"+obj).html()));
	$("#"+objval).show();
}

function trim(str) {
  return str.replace(/(^\s+)|(\s+$)/g, "");
}

function confirmValue(mytable,mval,obj,key,url)
{
	
	var url=url?url:"index.php?con="+adminpath+"&act=admin_ajax";
	
	url=url+"&rand="+Math.random();
	var objid=obj.replace('input','');
	var s=objid.split('-');
	var field=s[0];
	var id=s[1];


	$.get(url, {table:mytable,field: field,val:mval,primary:id,primarykey:key},
		   function(data){
				if(parseInt(data)==1)
				{
					if(document.getElementById(obj).tagName.toUpperCase()=='SELECT')
					{
							var index=document.getElementById(obj).selectedIndex; //序号，取当前选中选项的序号  
							$("#"+objid).html(trim(document.getElementById(obj).options[index].text)); 
							return true;
					}
					else
					{
						if($('#'+obj).attr('title')!='nochange')
						{
							$("#"+objid).html(trim(mval));
							return true;
						}
						
					}
					
				}
				else
				{
					alert(data);
					return false;
				}
			}
		);
	$("#"+objid).show();
	$("#"+obj).hide();	
	return true;
}

function deleteVal(mtable,primary,actionobj,primarykey)
{
	if(confirm('确认删除此条记录？删除后无法恢复'))
	{
		var url="index.php?con="+adminpath+"&act=admin_delete";
		url=url+"&rand="+Math.random();
		$.get(url, {table:mtable,val:primary,key:primarykey},  
				function(data){
					if(parseInt(data)==1)
					{
						alert('删除成功');
						$('#'+actionobj).remove();
					}
					else
					{
						alert('数据未发生变化，删除不成功');
					}
			});
	}
}
function updateVal(mytable,obj,key,url,mdata)
{
	if(confirmValue(mytable,$('#'+obj).val(),obj,key,url))
	{
		var objid=obj.replace('input','');
		var a=!parseInt($('#'+obj).val())*1;
		$('#'+obj).val(a);
		//alert('#'+objid);
		$('#'+objid).html(mdata[a]);
	}
	
}

function checkallgroup(obj)
{
	if($(obj).attr('checked'))
	{
		$('.nocheck').attr('checked',true);
	}
	else
	{
		$('.nocheck').attr('checked',false);
	}
}



function upispassed(id,type)
{

	$.post(
	 'index.php',
	 { 'con':adminpath,
	   'act':'upispassed',
	   'id' :id,
       'type':type
	 },
	function(data)
	{
	   //alert(data);
	   span_id =  "#ispassed"+id;
	   $(span_id).empty();
	   $(span_id).append(data);
	   //$(span_id).html(data);
	}
	);

}

function version(code)
{
	var url="http://localhost/test.php";
	$.get(url, {key:code},
		   function(data){
				if(data)
				{
					$('#code').html(data);
				}
			}
		);
}

function movebrand(type)
{
	var old=encodeURIComponent($('#tempbrand').val());
	
	var newbrand=$('#brand').val();
	var url=site_root+"/models/movebrand.php?brandid="+newbrand+"&tempbrand="+old+"&type="+type;
			$.get(url,{},function(data){
				if(data=='success')
				{
					window.location.reload();
				}
				else
				{
					alert(data);
				}
			});
}
function movecate(type)
{
	var newcate=0;
	$('.tempcate').each(function(){if($(this).val()>0){newcate=$(this).val();}});
	
	if(newcate>0)
	{
		var old=encodeURIComponent($('#tempcate').val());
		var url=site_root+"/models/movecate.php?cateid="+newcate+"&tempcate="+old+"&type="+type;
				$.get(url,{},function(data){
					if(data=='success')
					{
						window.location.reload();
					}
					else
					{
						alert(data);
					}
				});
	}
	else
	{
		alert('请选择分类');
	}
}

function getselectcate(name,obj,catename,tempcate)
{

	var  pid = $(obj).val();
	var  url=site_root+"/models/getselectcate.php?pid="+pid+"&rand="+Math.random();
	$.getJSON(url,function(data){
		
		var level = data.level;
		var info  = data.info;
		var leve_arr = new Array("一", "二", "三", "四", "五", "六", "七", "八", "九", "十"); 

		var domstr="<select  name='"+catename+"' class='"+tempcate+"'  onchange=\"getselectcate('"+name+"',this,'"+catename+"','"+tempcate+"');\"  ><option value='0'>第"+leve_arr[level-1]+"级分类</option>";
		for(i=0;i<info.length;i++)
		{
			domstr+="<option value='"+info[i].id+"' >"+info[i].catename+"</option>";
		}
		domstr+="</select>";


		if( $('#'+name+'-level-'+level).length > 0 ) {
				
			var count=$('.'+tempcate).size();
			var i=parseInt(level)+1;
			for(i;i<=count;i++)
			{
				$('#'+name+'-level-'+i).remove();
			}

			if(info != '')
			{
				$('#'+name+'-level-'+level).html(domstr);
			}
		}else{
	
			domstr='<span id="'+name+'-level-'+level+'">'+domstr+'</span>';

			if(info != '')
			{
				$('#'+name).append(domstr);

			}
		}
	});
	
}


function getselectpcate(name,obj,catename,tempcate)
{

	var  pid = $(obj).val();
	var  url=site_root+"/models/getselectpcate.php?pid="+pid+"&rand="+Math.random();
	$.getJSON(url,function(data){
		
		var level = data.level;
		var info  = data.info;
		var leve_arr = new Array("一", "二", "三", "四", "五", "六", "七", "八", "九", "十"); 

		var domstr="<select  name='"+catename+"' class='"+tempcate+"'  onchange=\"getselectpcate('"+name+"',this,'"+catename+"','"+tempcate+"');\"  ><option value='0'>第"+leve_arr[level-1]+"级分类</option>";
		for(i=0;i<info.length;i++)
		{
			domstr+="<option value='"+info[i].id+"' >"+info[i].catename+"</option>";
		}
		domstr+="</select>";


		if( $('#'+name+'-level-'+level).length > 0 ) {
				
			var count=$('.'+tempcate).size();
			var i=parseInt(level)+1;
			for(i;i<=count;i++)
			{
				$('#'+name+'-level-'+i).remove();
			}

			if(info != '')
			{
				$('#'+name+'-level-'+level).html(domstr);
			}
		}else{
	
			domstr='<span id="'+name+'-level-'+level+'">'+domstr+'</span>';

			if(info != '')
			{
				$('#'+name).append(domstr);

			}
		}
	});
	
}