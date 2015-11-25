// 导航栏配置文件
var outlookbar=new outlook();
var t;

t=outlookbar.addtitle('管理首页','管理首页',1)
outlookbar.additem('管理首页',t,'index.php?con='+adminpath+'&act=main')

t=outlookbar.addtitle('新闻动态','新闻动态',1)
outlookbar.additem('新闻管理',t,'index.php?con='+adminpath+'&act=media')
outlookbar.additem('添加新闻',t,'index.php?con='+adminpath+'&act=mediamodify');

t=outlookbar.addtitle('奖学金管理','奖学金管理',1)
outlookbar.additem('奖学金管理',t,'index.php?con='+adminpath+'&act=zhiku')
outlookbar.additem('添加奖学金',t,'index.php?con='+adminpath+'&act=zhikumodify');

t=outlookbar.addtitle('项目管理','项目管理',1)
outlookbar.additem('项目管理',t,'index.php?con='+adminpath+'&act=project')

t=outlookbar.addtitle('用户管理','用户管理',1)
outlookbar.additem('用户管理',t,'index.php?con='+adminpath+'&act=manageuser')
outlookbar.additem('添加用户',t,'index.php?con='+adminpath+'&act=manageusermodify')

t=outlookbar.addtitle('站点设置','站点设置',1)
outlookbar.additem('站点信息',t,'index.php?con='+adminpath+'&act=setting&type=site')