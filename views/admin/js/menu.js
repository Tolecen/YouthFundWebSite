var preClassName = "man_nav_1";
function list_sub_nav(Id,sortname){
  $('#top_menu li').removeClass('on');
  $('#'+Id).addClass('on');
  outlookbar.getbyitem(sortname);
}
function outlook() {
    this.titlelist = new Array();
    this.itemlist = new Array();
    this.addtitle = addtitle;
    this.additem = additem;
	this.getbyitem = getbyitem;
}
function theitem(intitle, insort, inkey, inisdefault) {
    this.sortname = insort;
    this.key = inkey;
    this.title = intitle;
    this.isdefault = inisdefault
}
function addtitle(intitle, sortname, inisdefault) {
    outlookbar.itemlist[outlookbar.titlelist.length] = new Array();
    outlookbar.titlelist[outlookbar.titlelist.length] = new theitem(intitle, sortname, 0, inisdefault);
    return (outlookbar.titlelist.length - 1)
}
function additem(intitle, parentid, inkey) {
    if (parentid >= 0 && parentid <= outlookbar.titlelist.length) {
        insort = "item_" + parentid;
        outlookbar.itemlist[parentid][outlookbar.itemlist[parentid].length] = new theitem(intitle, insort, inkey, 0);
        return (outlookbar.itemlist[parentid].length - 1)
    } else additem = -1
}

function getbytitle(sortname) {
    var output = "<ul>";
    for (i = 0; i < outlookbar.titlelist.length; i++) {
        if (outlookbar.titlelist[i].sortname == sortname) {
            output += "<li id=left_nav_" + i + " onclick=\"list_sub_detail(id,'" + outlookbar.titlelist[i].title + "')\" class=left_back>" + outlookbar.titlelist[i].title + "</li>"
        }
    }
    output += "</ul>";
	alert(output);
}
function getbyitem(item) {
    var output = "";
	$('#current_pos').html(item);
    for (i = 0; i < outlookbar.titlelist.length; i++) {
		if (outlookbar.titlelist[i].sortname == item) {
            output+= '<h3 class="f14"><span class="switchs cu on"></span>'+outlookbar.titlelist[i].title;
            output += "</h3>";
            output += "<ul id=sub_detail_" + i + " style='display:block;'>";
            for (j = 0; j < outlookbar.itemlist[i].length; j++) {
                output += "<li id=" + outlookbar.itemlist[i][j].sortname + "_" + j + " class=\"sub_menu\"  onclick=\"changeframe('" + outlookbar.itemlist[i][j].title + "','" + outlookbar.titlelist[i].title + "','" + outlookbar.itemlist[i][j].key + "',this)\"><a href=#>" + outlookbar.itemlist[i][j].title + "</a></li>"
            }
            output += "</ul>"
        }
    }
    $('#leftMain').html(output);
}

function changeframe(item, sortname, src,id) {
    if (item != "" && sortname != "") {
        $('#current_pos').html(sortname + "&gt;&gt;" + item);
		$('.sub_menu').attr('className','sub_menu');
		$(id).attr('className','sub_menu on fb blue');
    }
    if (src != "") {
		window.open(src,'right','');
    }
}