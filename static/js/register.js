$(function () {
    var currentUrl = "http://182.254.159.182/photos/";
    // 图片hover 事件
    function imgHover(){
        $('.info-box-uploaded-item').hover(function(){
            $(this).find(".info-del").show();
        },function(){
            $(this).find(".info-del").hide();
        });
    }
    $(".info-box-uploaded-item").each(function() {
        $(this).dblclick(function(){
            $(this).remove();
        })
    });
    function fileDel(){
        $(".file-del").on('click',function(){
            $(this).parents(".file-upload").remove();
        });
    }
    function imgDel(){
        $(".info-box-uploaded-item").on('dblclick',function(){
            $(this).remove();
        });
        $(".info-box-uploaded-look").click(function(){
            var url = $("[name='upload_relative']").val();
            var val = $(this).parent().parent('div').find("input[class^=upload_pic]").val();
            $(this).attr('href',currentUrl+url+val)
        })
    }
    function showDialog(msg, flag) {
        var str = '<div class="dialog"><div class="title"></div><div class="content"><p><img src="/images/web/tou.gif" /></p><p>' + msg + '</p></div><div class="btns"><a class="close" href="javascript:void(0)">确定</a></div></div>'
        if (flag) {
            var str = '<div class="dialog"><div class="title"></div><div class="content"><p><img src="/images/web/success_msg.jpg" /></p><p>' + msg + '</p></div><div class="btns"><a class="close" href="javascript:void(0)">确定</a></div></div>'
        }

        var $str = $(str)
        $.blockUI({
            message: $str,
            css: {
                width: "240px",
                border: "none",
                background: "none",
                left: "50%",
                top: "50%",
                'margin-left': "-120px"
            }
        })
        $str.find(".close").click(function () {
            $.unblockUI()
        })
    }

    function nullValidate(value) {
        if (value == null || value == undefined || value == "") {
            return true;
        }
    }

    $("#id_save_btn").click(function () {
        var nickName = $("#id_nickname").val();
        var qq = $("#id_qq").val();
        var mobile = $("#id_mobile").val();
        var weichart = $("#id_weichart").val();
        var email = $("#id_email").val();
        var company = $("#id_company").val();
        var industry = $("#id_industry").val();
        var rzjd = $("#id_rzjd").val();
        var rzje = $("#id_rzje").val();
        var tdgm = $("#id_tdgm").val();
        var ggzws = [];
        var ggmcs = [];
        var gg_zhiwei = false;
        var reg_rule_id = $("#reg_rule_id").attr("class");
        if(reg_rule_id==undefined){
            showDialog("请您确认已阅读并同意遵守腾讯创业用户注册规则", false);
            return false;
        }
        //图片名称啥的
        if (nullValidate(nickName)) {
            showDialog("昵称不能为空", false);
            return false;
        }
        if (nullValidate(qq)) {
            showDialog("绑定QQ不能为空", false);
            return false;
        }else{
            if(!(/^[1-9][0-9]{4,9}$/.test(qq))){
                showDialog("请输入正确的qq号码",false);
                return false;
            }
        }
        if(!(/^1[3|4|5|8][0-9]\d{4,8}$/.test(mobile))){
            showDialog("手机号格式不正确",false);
            return false;
        }
        if(!(/^([a-zA-Z0-9_-])+@([a-zA-Z0-9_-])+(.[a-zA-Z0-9_-])+/.test(email))){
            showDialog("邮箱格式不正确",false);
            return false;
        }
        if (nullValidate(mobile) && nullValidate(weichart) && nullValidate(email)) {
            showDialog("联系方式至少填写一种", false);
            return false;
        }
        if (nullValidate(company)) {
            showDialog("公司名称不能为空", false);
            return false;
        }
        if (nullValidate(industry)) {
            showDialog("行业不能为空", false);
            return false;
        }
        if (nullValidate(tdgm)) {
            showDialog("团队规模不能为空", false);
            return false;
        }
        $(".ggzw").each(function () {
            var value = $(this).val();
            if (nullValidate(value)||value=="请填写职位") {
                gg_zhiwei = true;
                showDialog("高管职位不能为空", false);
                return false;
            }
            ggzws.push(value);
        })
        if(gg_zhiwei){
            showDialog("高管职位不能为空", false);
            return false;
        }
        var gg_name = false;
        $(".ggxm").each(function () {
            var value = $(this).val();
            if (nullValidate(value)||value=="请填写姓名") {
                gg_name = true;
                showDialog("高管姓名不能为空", false);
                return false;
            }
            ggmcs.push(value);
        })
        if(gg_name) {
            showDialog("高管姓名不能为空", false);
            return false;
        }
        var image_url = $("[name='upload_relative']").val();
        var headImageArr  = [];
        $(".upload_pic_browse").each(function () {
            var value = $(this).val();
            headImageArr.push(value);
        })
        if(headImageArr==null || headImageArr.length==0){
            showDialog("头像不能为空", false);
            return false;
        }
        console.log("头像");
        console.log(headImageArr);
        var fjImageArr = [];
        $(".upload_pic_browse_fj").each(function () {
            var value = $(this).val();
            fjImageArr.push(value);
        })
        var cptpImageArr = [];
        $(".upload_pic_browse_cptp").each(function () {
            var value = $(this).val();
            cptpImageArr.push(value);
        })
        if(cptpImageArr==null || cptpImageArr.length==0){
            showDialog("产品图片不能为空", false);
            return false;
        }
        console.log("产品图片");
        console.log(cptpImageArr);
        var cpewmImageArr = [];
        $(".upload_pic_browse_cpewm").each(function () {
            var value = $(this).val();
            cpewmImageArr.push(value);
        })

        var syjhImageArr =[];
        $(".upload_pic_browse_syjh").each(function () {
            var value = $(this).val();
            syjhImageArr.push(value);
        })
        $.ajax(
            {
                url: '/web/user/saveuserinfo',
                dataType: 'json',
                data: {
                    nickName: nickName,
                    qq: qq,
                    mobile: mobile,
                    weichart: weichart,
                    email: email,
                    company: company,
                    industry: industry,
                    rzjd: rzjd,
                    rzje: rzje,
                    tdgm: tdgm,
                    ggzws: ggzws,
                    ggmcs: ggmcs,
                    image_url:image_url,
                    headImageArr:headImageArr,
                    fjImageArr:fjImageArr,
                    cptpImageArr:cptpImageArr,
                    cpewmImageArr:cpewmImageArr,
                    syjhImageArr:syjhImageArr
                },
                type: 'post',
                success: function (data) {
                    if(data.ret==0) {
                        showDialog("注册成功,我们会在三个工作日内审核您的资料", true);
                        setTimeout(function () {
                            //window.location.href="/web/";
                            window.location.href="http://startup.qq.com/web/user/register";
                        }, 2000);
                    }else{
                        showDialog(data.msg, false);
                    }
                }
            }
        )
        return false;
    })


    var uploaders = ['browse', 'browse_fj', 'browse_cptp', 'browse_cpewm', 'browse_syjh'];
    var fileExtensions = "doc,docx,ppt,pptx,xlsx,xls,jpg";
    var imgExtensions =  "jpg,gif,png,tif";
    for (var i = 0; i < uploaders.length; i++) {
        var name = uploaders[i];
        var extension = imgExtensions;
        if(name=="browse_syjh"){
            extension = fileExtensions;
        }
        uploaders[i] = new plupload.Uploader({ //实例化一个plupload上传对象
            browse_button: name,
            runtimes: 'html5,flash,silverlight,html4',
            url: '/web/user/upload?browse=' + uploaders[i],
            flash_swf_url: '/js/web/js/Moxie.swf',
            silverlight_xap_url: '/js/web/js/Moxie.xap',
            mydef: uploaders[i],
            filters: {
                mime_types: [ //只允许上传图片文件
                    {title: "文件", extensions: extension}
                ],
                max_file_size: '5mb'
            }
        });
        uploaders[i].init(); //初始化

        //绑定文件添加进队列事件
        uploaders[i].bind('FilesAdded', function (uploader, files) {
            //if($("."+uploader.settings.mydef).html()!=''&&$("."+uploader.settings.mydef).html()!=undefined){
            //    showDialog("只能上传一个文件");
            //    return;
            //}
            if (files.length > 1) {
                alert("只能上传一个文件");
                return;
            }
            for (var i = 0, len = files.length; i < len; i++) {
                //上传预览附件
                if(uploader.settings.mydef == "browse_syjh"){
                    var file_name = files[i].name; //文件名
                    var html = "<div class='file-upload' id='file-" + files[i].id + "' style='position:relative;'>" +
                        "<p class='file-name' style='display: inline-block'> " + file_name + "</p>"+
                        "<a href='javascript:;' class='file-del'>&nbsp;&nbsp;删除</a>"+
                        "<div class='upload-progress'><p style='text-align: center;margin-top:40px;'>等待上传</p></div>";
                    $(html).appendTo("." + uploader.settings.mydef);
                    fileDel();
                }
                !function (i) {
                    previewImage(files[i], function (imgsrc) {
                        if (uploader.settings.mydef == "browse") {
                            var html = "<div id='file-" + files[i].id + "' style='position:relative;'>" +
                                "</div>";
                            console.log(i);
                            $(html).prependTo(".headbrowse");
                            $("#J_headImg").attr("src", imgsrc);
                        }else{
                            var html = "<div id='file-" + files[i].id + "' class='info-box-uploaded-item' style='position:relative;'>" +
                                "<div class='upload-progress' style='height:118px;width:88px;background-color: #000;opacity: .75;position: absolute;top:0;left:0;text-align: center;color:#FFF;font-size: 16px;'><p style='text-align: center;margin-top:40px;'>等待上传</p></div>"+
                                "<a target='_blank' class='info-box-uploaded-look'>预览</a> " +
                                "<div class='info-del'></div>" +
                                "</div>";
                            $(html).prependTo("." + uploader.settings.mydef);
                            $('#file-' + files[i].id).prepend("<img class='fl'style='height:118px;width:88px;' src='" + imgsrc + "'>");
                            imgDel();
                        }
                    });
                }(i);
            }
            uploader.start();
        });

        //绑定文件添加进队列事件
        uploaders[i].bind('UploadProgress', function (uploader, file) {
            var fileId = file.id;
            if (!fileId) return;
            var block = $("#file-" + fileId + " .upload-progress p");
            if (block.length < 1) return;
            block.html("已上传" + file.percent + "%");
        });

        uploaders[i].bind('FileUploaded', function (uploader, file, resp) {
            var fileId = file.id;
            if (!fileId) return;
            var block = $("#file-" + fileId + " .upload-progress p");
            if (block.length < 1 && uploader.settings.mydef != "browse" &&  uploader.settings.mydef != "browse_syjh") return;
            if (resp.status != "200") {
                block.css("font-size", "14px").css("color", "red").html("上传失败:HTTP_ERROR");
                return;
            }
            resp = resp.response;
            resp = eval('(' + resp + ')');
            if (resp.ret != 0) {
                block.css("font-size", "14px").css("color", "red").html("上传失败:" + resp.msg);
            } else {
                resp.msg = eval('(' + resp.msg + ')');
                block.parent("div.upload-progress").hide();
                var form = $("form");
                if (form.length < 1)return;
                var relativeValArea = $("input[name='upload_relative']", form);
                var uploadValArea = $("input[name='upload_pic_"+uploader.settings.mydef+"']", form);
                if (relativeValArea.length < 1) {
                    form.append("<input type='hidden' name='upload_relative' value='" + resp.msg.relative + "'>");
                }

                var uploadedItemEl = $("#file-" + fileId);
                if (uploadedItemEl.length < 1) return;
                uploadedItemEl.append("<input type='hidden' class ='upload_pic_"+uploader.settings.mydef+"' name='upload_pic_"+uploader.settings.mydef+"' value='" + resp.msg.pic + "'>");
                $("#file-" + fileId + " .arm-set-album-cover").show();
                var imgEl = $("#file-" + fileId + " img");
                if (imgEl.length < 1) return;
                //imgEl.attr("src", picServerBase + "/" + resp.msg.relative + "/" + resp.msg.pic_sq);
            }
        });
        function previewImage(file, callback) {//file为plupload事件监听函数参数中的file对象,callback为预览图片准备完成的回调函数
            if (!file || !/image\//.test(file.type)) return; //确保文件是图片
            if (file.type == 'image/gif') {//gif使用FileReader进行预览,因为mOxie.Image只支持jpg和png
                var fr = new mOxie.FileReader();
                fr.onload = function () {
                    callback(fr.result);
                    fr.destroy();
                    fr = null;
                }
                fr.readAsDataURL(file.getSource());
            } else {
                var preloader = new mOxie.Image();
                preloader.onload = function () {
                    preloader.downsize(120, 120);//先压缩一下要预览的图片,宽300，高300
                    var imgsrc = preloader.type == 'image/jpeg' ? preloader.getAsDataURL('image/jpeg', 80) : preloader.getAsDataURL(); //得到图片src,实质为一个base64编码的数据
                    callback && callback(imgsrc); //callback传入的参数为预览图片的url
                    preloader.destroy();
                    preloader = null;
                };
                preloader.load(file.getSource());
            }
        }
    }

    //点击增加减少高官输入框
    $("#reduceGg").click(function () {
        if ($(".ggdiv").length > 1) {
            $(".ggdiv:last").remove();
        } else {
            alert("最少要有一个高管")
        }
        return false;
    })
    $("#addGg").click(function () {
        $(".ggdiv:last").after("<div class='ggdiv fl cl' style='padding-left: 108px;padding-top: 8px;'><input class='ggxm' placeholder='请填写姓名' type='text'/><input  class = 'ggzw' type='text' placeholder='请填写职位'/></div>");

        return false;
    })
})