<?php exit;?>a:3:{s:8:"template";a:11:{i:0;s:64:"D:/workspace/ecshop/rukia/ecshop/themes/ecmoban_suning/index.dwt";i:1;s:78:"D:/workspace/ecshop/rukia/ecshop/themes/ecmoban_suning/library/page_header.lbi";i:2;s:86:"D:/workspace/ecshop/rukia/ecshop/themes/ecmoban_suning/library/category_tree_index.lbi";i:3;s:75:"D:/workspace/ecshop/rukia/ecshop/themes/ecmoban_suning/library/index_ad.lbi";i:4;s:86:"D:/workspace/ecshop/rukia/ecshop/themes/ecmoban_suning/library/recommend_promotion.lbi";i:5;s:80:"D:/workspace/ecshop/rukia/ecshop/themes/ecmoban_suning/library/recommend_new.lbi";i:6;s:80:"D:/workspace/ecshop/rukia/ecshop/themes/ecmoban_suning/library/recommend_hot.lbi";i:7;s:81:"D:/workspace/ecshop/rukia/ecshop/themes/ecmoban_suning/library/recommend_best.lbi";i:8;s:76:"D:/workspace/ecshop/rukia/ecshop/themes/ecmoban_suning/library/cat_goods.lbi";i:9;s:71:"D:/workspace/ecshop/rukia/ecshop/themes/ecmoban_suning/library/help.lbi";i:10;s:78:"D:/workspace/ecshop/rukia/ecshop/themes/ecmoban_suning/library/page_footer.lbi";}s:7:"expires";i:1543136306;s:8:"maketime";i:1543132706;}<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v4.0.0" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="ECSHOP演示站" />
<meta name="Description" content="ECSHOP演示站" />
<title>ECSHOP演示站 - Powered by ECShop</title>
<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link href="themes/ecmoban_suning/style.css" rel="stylesheet" type="text/css" />
<link rel="alternate" type="application/rss+xml" title="RSS|ECSHOP演示站 - Powered by ECShop" href="feed.php" />
<script type="text/javascript" src="js/common.js"></script><script type="text/javascript" src="js/index.js"></script></head>
<body class="index_page">
<link href="themes/ecmoban_suning/qq/images/qq.css" rel="stylesheet" type="text/css" />
 
<script type="text/javascript">
var process_request = "正在处理您的请求...";
</script>
<script type="text/javascript">
//设为首页 www.ecmoban.com
function SetHome(obj,url){
    try{
        obj.style.behavior='url(#default#homepage)';
       obj.setHomePage(url);
   }catch(e){
       if(window.netscape){
          try{
              netscape.security.PrivilegeManager.enablePrivilege("UniversalXPConnect");
         }catch(e){
              alert("抱歉，此操作被浏览器拒绝！\n\n请在浏览器地址栏输入“about:config”并回车然后将[signed.applets.codebase_principal_support]设置为'true'");
          }
       }else{
        alert("抱歉，您所使用的浏览器无法完成此操作。\n\n您需要手动将【"+url+"】设置为首页。");
       }
  }
}
 
//收藏本站 bbs.ecmoban.com
function AddFavorite(title, url) {
  try {
      window.external.addFavorite(url, title);
  }
catch (e) {
     try {
       window.sidebar.addPanel(title, url, "");
    }
     catch (e) {
         alert("抱歉，您所使用的浏览器无法完成此操作。\n\n加入收藏失败，请使用Ctrl+D进行添加");
     }
  }
}
</script>
 
<div class="top_nav">
	<script type="text/javascript">
          //初始化主菜单
            function sw_nav(obj,tag)
            {
     
            var DisSub = document.getElementById("DisSub_"+obj);
            var HandleLI= document.getElementById("HandleLI_"+obj);
                if(tag==1)
                {
                    DisSub.style.display = "block";
             
                    
                }
                else
                {
                    DisSub.style.display = "none";
                
                }
     
            }
     
    </script>
    <div class="block">     
    
        <ul class="top_bav_l">
        <li class="top_sc">
           <a href="javascript:void(0);" onclick="AddFavorite('我的网站',location.href)">收藏本站</a>
</li>
            <li>关注我们：</li>
            <li style="border:none" class="menuPopup"  onMouseOver="sw_nav(1,1);" onMouseOut="sw_nav(1,0);">
            <a id="HandleLI_1" href="javascript:;" title="微博" class="attention"></a> 
            <div id=DisSub_1 class="top_nav_box  top_weibo"> 
            <a href="http://e.weibo.com/ECMBT" target="_blank" title="新浪微博" class="top_weibo"></a>
            <a href="http://e.t.qq.com/ecmoban_com" target="_blank" title="QQ微博" class="top_qq"></a> 
            </div> 
            </li> 
            <li class="menuPopup" onMouseOver="sw_nav(2,1);" onMouseOut="sw_nav(2,0);">
            <a id="HandleLI_2" href="javascript:;" title="微信" class="top_weixin"></a> 
            <div id="DisSub_2" class="weixinBox" style="display: none;"> 
		
            <img src="themes/ecmoban_suning/images/weixin.png" style="width:150px; height:190px;  background:#0000CC" width="150" height="190"> 
            </div> 
            </li>
        </ul>
    
        <div class="header_r">
        
        <script type="text/javascript" src="js/transport.js"></script><script type="text/javascript" src="js/utils.js"></script>        <font id="ECS_MEMBERZONE" >45ea207d7a2b68c49582d2d22adf953amember_info|a:1:{s:4:"name";s:11:"member_info";}45ea207d7a2b68c49582d2d22adf953a </font>
     
                  
        </div>
    </div>
</div>
<div  class="clearfix"> 
    <div class="block header">
        <div class="top">
        <a href="index.php" class="logo"><img src="themes/ecmoban_suning/images/logo.gif">  </a>
        <div class="head_r"> 
        <div class="top_search"> 
        <script type="text/javascript">
            
            <!--
            function checkSearchForm()
            {
                if(document.getElementById('keyword').value)
                {
                    return true;
                }
                else
                {
                    alert("请输入搜索关键词！");
                    return false;
                }
            }
            -->
            
            </script>
          <form id="searchForm" name="searchForm" method="get" action="search.php" onSubmit="return checkSearchForm()"  style="_position:relative; top:5px;">
          <input name="keywords" type="text" id="keyword" class="keyword" value=""  />
        <input value="" id="seachbtn" type="submit"> 
        </form>
        <div class="vjia-suggest-container"><div class="vjia-suggest-content"></div>
            <ol>
            </ol>
        </div> 
        <div style="clear:both"></div> 
                </div> 
        <div class="top_shopCart clearfix"  >
            <b>
            <span id="ECS_CARTINFO">
            45ea207d7a2b68c49582d2d22adf953acart_info|a:1:{s:4:"name";s:9:"cart_info";}45ea207d7a2b68c49582d2d22adf953a            </span>
            </b> 
            <a class="jiesuan" href="flow.php">去结算</a>
            </div> 
             
        </div>
        </div>
    </div> 
</div>
<div style="clear:both"></div>
 
<div class="menu_box clearfix"> 
<div class="block"> 
<div class="menu">
  <a href="index.php" class="cur">首页<span></span></a>
    <a href="category.php?id=16"  >
服装 <span></span>
</a>
 
   <a href="category.php?id=22"  >
移动电源 <span></span>
</a>
 
   <a href="category.php?id=25"  >
数码时尚 <span></span>
</a>
 
   <a href="category.php?id=26"  >
家用电器 <span></span>
</a>
 
   <a href="category.php?id=25"  >
数码时尚 <span></span>
</a>
 
 </div> 
</div>
</div>
<div class="block clearfix">
<div class="AreaL">
<script type="text/javascript">
          //初始化主菜单
            function sw_nav2(obj,tag)
            {
            var DisSub2 = document.getElementById("DisSub2_"+obj);
            var HandleLI2= document.getElementById("HandleLI2_"+obj);
                if(tag==1)
                {
                    DisSub2.style.display = "block";
					HandleLI2.className="current";
                }
                else
                {
                    DisSub2.style.display = "none";
					HandleLI2.className="";
                }
            }
</script>
 
    
    
  <div id="category_tree">
  <div class="tit">所有商品分类</div>
  <dl class="clearfix" >
             <div  class="dt" onMouseOver="sw_nav2(1,1);" onMouseOut="sw_nav2(1,0);" 
         
        >
        
        <div id="HandleLI2_1">
        <a    class="a    
          
"
 href="category.php?id=26">
 家用电器  <img src="themes/ecmoban_suning/images/biao8.gif">
 </a>
</div>
        
        
        
<dd  id=DisSub2_1 style="display:none"> 
 <a class="over_2" href="category.php?id=27">大家电</a>  
<div class="clearfix">
<a class="over_3" href="category.php?id=28">平板电脑</a>
<a class="over_3" href="category.php?id=29">家用空调</a>
<a class="over_3" href="category.php?id=30">家电配件</a>
<a class="over_3" href="category.php?id=31">洗衣机</a>
<a class="over_3" href="category.php?id=32">冰箱</a>
</div>   
       
</dd> 
</div>
        <div  class="dt" onMouseOver="sw_nav2(2,1);" onMouseOut="sw_nav2(2,0);" 
         
        >
        
        <div id="HandleLI2_2">
        <a    class="a    
         t 
 
"
 href="category.php?id=25">
 数码时尚  <img src="themes/ecmoban_suning/images/biao8.gif">
 </a>
</div>
        
        
        
<dd  id=DisSub2_2 style="display:none"> 
</dd> 
</div>
        <div  class="dt" onMouseOver="sw_nav2(3,1);" onMouseOut="sw_nav2(3,0);" 
         
        >
        
        <div id="HandleLI2_3">
        <a    class="a    
          
"
 href="category.php?id=18">
 智能硬件  <img src="themes/ecmoban_suning/images/biao8.gif">
 </a>
</div>
        
        
        
<dd  id=DisSub2_3 style="display:none"> 
</dd> 
</div>
        <div  class="dt" onMouseOver="sw_nav2(4,1);" onMouseOut="sw_nav2(4,0);" 
         
        >
        
        <div id="HandleLI2_4">
        <a    class="a    
         t 
 
"
 href="category.php?id=22">
 移动电源  <img src="themes/ecmoban_suning/images/biao8.gif">
 </a>
</div>
        
        
        
<dd  id=DisSub2_4 style="display:none"> 
</dd> 
</div>
        <div  class="dt" onMouseOver="sw_nav2(5,1);" onMouseOut="sw_nav2(5,0);" 
         
        >
        
        <div id="HandleLI2_5">
        <a    class="a    
          
"
 href="category.php?id=1">
 手机类型  <img src="themes/ecmoban_suning/images/biao8.gif">
 </a>
</div>
        
        
        
<dd  id=DisSub2_5 style="display:none"> 
 <a class="over_2" href="category.php?id=3">小型手机</a>  
<div class="clearfix">
</div>   
       
 <a class="over_2" href="category.php?id=4">3G手机</a>  
<div class="clearfix">
</div>   
       
</dd> 
</div>
        <div  class="dt" onMouseOver="sw_nav2(6,1);" onMouseOut="sw_nav2(6,0);" 
         
        >
        
        <div id="HandleLI2_6">
        <a    class="a    
         t 
 
"
 href="category.php?id=6">
 手机  <img src="themes/ecmoban_suning/images/biao8.gif">
 </a>
</div>
        
        
        
<dd  id=DisSub2_6 style="display:none"> 
 <a class="over_2" href="category.php?id=8">耳机</a>  
<div class="clearfix">
</div>   
       
 <a class="over_2" href="category.php?id=9">电池</a>  
<div class="clearfix">
</div>   
       
</dd> 
</div>
        <div  class="dt" onMouseOver="sw_nav2(7,1);" onMouseOut="sw_nav2(7,0);" 
         
        >
        
        <div id="HandleLI2_7">
        <a    class="a    
          
"
 href="category.php?id=12">
 充值卡  <img src="themes/ecmoban_suning/images/biao8.gif">
 </a>
</div>
        
        
        
<dd  id=DisSub2_7 style="display:none"> 
</dd> 
</div>
        <div  class="dt" onMouseOver="sw_nav2(8,1);" onMouseOut="sw_nav2(8,0);" 
         
        >
        
        <div id="HandleLI2_8">
        <a    class="a    
         t 
 
"
 href="category.php?id=16">
 服装  <img src="themes/ecmoban_suning/images/biao8.gif">
 </a>
</div>
        
        
        
<dd  id=DisSub2_8 style="display:none"> 
</dd> 
</div>
        <div  class="dt" onMouseOver="sw_nav2(9,1);" onMouseOut="sw_nav2(9,0);" 
         
        >
        
        <div id="HandleLI2_9">
        <a    class="a    
          
"
 href="category.php?id=19">
 配件  <img src="themes/ecmoban_suning/images/biao8.gif">
 </a>
</div>
        
        
        
<dd  id=DisSub2_9 style="display:none"> 
 <a class="over_2" href="category.php?id=24">数码时尚</a>  
<div class="clearfix">
</div>   
       
 <a class="over_2" href="category.php?id=20">保护壳</a>  
<div class="clearfix">
</div>   
       
</dd> 
</div>
 
</dl>
</div>
<div class="blank"></div>
    
  </div>
<div style="float:right; width:994px;"> 
<style type="text/css"> 
.container, .container *{margin:0; padding:0;}
.container{width:994px; height:405px; overflow:hidden;position:relative;}
.slider{position:absolute;}
.slider li{list-style:none;display:inline;}
.slider img{width:994px; height:405px; display:block;}
.slider2{width:2000px;}
.slider2 li{float:left;}
.num{position:absolute; right:5px; bottom:5px;}
.num li{
	float: left;
	color: #d71437;
	text-align: center;
	line-height: 16px;
	width: 16px;
	height: 16px;
	font-family: Arial;
	font-size: 12px;
	cursor: pointer;
	overflow: hidden;
	margin: 3px 1px;
	border: 1px solid #d71437;
	background-color: #fff;
}
.num li.on{
	color: #fff;
	line-height: 21px;
	width: 21px;
	height: 21px;
	font-size: 16px;
	margin: 0 1px;
	border: 0;
	background-color: #d71437;
	font-weight: bold;
}
</style>
<div class="container" id="idTransformView">
  <ul class="slider" id="idSlider">
      <li><a href="http://yunqi.shopex.cn" target="_blank"><img src="data/afficheimg/20161114nraqzu.jpg"/></a></li>
        <li><a href="http://yunqi.shopex.cn" target="_blank"><img src="data/afficheimg/20161114prfywc.jpg"/></a></li>
        <li><a href="http://yunqi.shopex.cn" target="_blank"><img src="data/afficheimg/20161114uxmgov.png"/></a></li>
        <li><a href="http://yunqi.shopex.cn" target="_blank"><img src="data/afficheimg/20161114ypdlyr.jpg"/></a></li>
    
  </ul>
  <ul class="num" id="idNum">
 
    
          <li>
    1    </li> 
         <li>
    2    </li> 
         <li>
    3    </li> 
         <li>
    4    </li> 
        
  </ul>
</div>
<script type="text/javascript">
var $ = function (id) {
	return "string" == typeof id ? document.getElementById(id) : id;
};
var Class = {
  create: function() {
	return function() {
	  this.initialize.apply(this, arguments);
	}
  }
}
Object.extend = function(destination, source) {
	for (var property in source) {
		destination[property] = source[property];
	}
	return destination;
}
var TransformView = Class.create();
TransformView.prototype = {
  //容器对象,滑动对象,切换参数,切换数量
  initialize: function(container, slider, parameter, count, options) {
	if(parameter <= 0 || count <= 0) return;
	var oContainer = $(container), oSlider = $(slider), oThis = this;
	this.Index = 0;//当前索引
	
	this._timer = null;//定时器
	this._slider = oSlider;//滑动对象
	this._parameter = parameter;//切换参数
	this._count = count || 0;//切换数量
	this._target = 0;//目标参数
	
	this.SetOptions(options);
	
	this.Up = !!this.options.Up;
	this.Step = Math.abs(this.options.Step);
	this.Time = Math.abs(this.options.Time);
	this.Auto = !!this.options.Auto;
	this.Pause = Math.abs(this.options.Pause);
	this.onStart = this.options.onStart;
	this.onFinish = this.options.onFinish;
	
	oContainer.style.overflow = "hidden";
	oContainer.style.position = "relative";
	
	oSlider.style.position = "absolute";
	oSlider.style.top = oSlider.style.left = 0;
  },
  //设置默认属性
  SetOptions: function(options) {
	this.options = {//默认值
		Up:			true,//是否向上(否则向左)
		Step:		5,//滑动变化率
		Time:		10,//滑动延时
		Auto:		true,//是否自动转换
		Pause:		2000,//停顿时间(Auto为true时有效)
		onStart:	function(){},//开始转换时执行
		onFinish:	function(){}//完成转换时执行
	};
	Object.extend(this.options, options || {});
  },
  //开始切换设置
  Start: function() {
	if(this.Index < 0){
		this.Index = this._count - 1;
	} else if (this.Index >= this._count){this.Index = 0;}
	
	this._target = -1 * this._parameter * this.Index;
	this.onStart();
	this.Move();
  },
  //移动
  Move: function() {
	clearTimeout(this._timer);
	var oThis = this, style = this.Up ? "top" : "left", iNow = parseInt(this._slider.style[style]) || 0, iStep = this.GetStep(this._target, iNow);
	
	if (iStep != 0) {
		this._slider.style[style] = (iNow + iStep) + "px";
		this._timer = setTimeout(function(){oThis.Move();}, this.Time);
	} else {
		this._slider.style[style] = this._target + "px";
		this.onFinish();
		if (this.Auto) { this._timer = setTimeout(function(){oThis.Index++; oThis.Start();}, this.Pause); }
	}
  },
  //获取步长
  GetStep: function(iTarget, iNow) {
	var iStep = (iTarget - iNow) / this.Step;
	if (iStep == 0) return 0;
	if (Math.abs(iStep) < 1) return (iStep > 0 ? 1 : -1);
	return iStep;
  },
  //停止
  Stop: function(iTarget, iNow) {
	clearTimeout(this._timer);
	this._slider.style[this.Up ? "top" : "left"] = this._target + "px";
  }
};
window.onload=function(){
	function Each(list, fun){
		for (var i = 0, len = list.length; i < len; i++) {fun(list[i], i);}
	};
	
	var objs = $("idNum").getElementsByTagName("li");
	
	var tv = new TransformView("idTransformView", "idSlider", 405, 5, {
		onStart : function(){ Each(objs, function(o, i){o.className = tv.Index == i ? "on" : "";}) }//按钮样式
	});
	
	tv.Start();
	
	Each(objs, function(o, i){
		o.onmouseover = function(){
			o.className = "on";
			tv.Auto = false;
			tv.Index = i;
			tv.Start();
		}
		o.onmouseout = function(){
			o.className = "";
			tv.Auto = true;
			tv.Start();
		}
	})
	
	////////////////////////test2
	
	var objs2 = $("idNum2").getElementsByTagName("li");
	
	var tv2 = new TransformView("idTransformView2", "idSlider2", 994, 3, {
		onStart: function(){ Each(objs2, function(o, i){o.className = tv2.Index == i ? "on" : "";}) },//按钮样式
		Up: false
	});
	
	tv2.Start();
	
	Each(objs2, function(o, i){
		o.onmouseover = function(){
			o.className = "on";
			tv2.Auto = false;
			tv2.Index = i;
			tv2.Start();
		}
		o.onmouseout = function(){
			o.className = "";
			tv2.Auto = true;
			tv2.Start();
		}
	})
	
	$("idStop").onclick = function(){tv2.Auto = false; tv2.Stop();}
	$("idStart").onclick = function(){tv2.Auto = true; tv2.Start();}
	$("idNext").onclick = function(){tv2.Index++; tv2.Start();}
	$("idPre").onclick = function(){tv2.Index--;tv2.Start();}
	$("idFast").onclick = function(){ if(--tv2.Step <= 0){tv2.Step = 1;} }
	$("idSlow").onclick = function(){ if(++tv2.Step >= 10){tv2.Step = 10;} }
	$("idReduce").onclick = function(){ tv2.Pause-=1000; if(tv2.Pause <= 0){tv2.Pause = 0;} }
	$("idAdd").onclick = function(){ tv2.Pause+=1000; if(tv2.Pause >= 5000){tv2.Pause = 5000;} }
	
	$("idReset").onclick = function(){
		tv2.Step = Math.abs(tv2.options.Step);
		tv2.Time = Math.abs(tv2.options.Time);
		tv2.Auto = !!tv2.options.Auto;
		tv2.Pause = Math.abs(tv2.options.Pause);
	}
	
}
</script>
 
 
 
 
 
 <div class="blank5"></div>
<div class="blank"></div> 
 
</div>
 
  
    <div class="blank"></div> 
 
 
  
<div class="blank"></div> 
  <div class="goodsBox_1">
  
  
  
<div class="xm-box">
<h4 class="title"><span>新品上架</span> <a class="more" href="search.php?intro=new">更多</a></h4>
<div class="blank"></div>
<div id="show_new_area" class="clearfix">
      <div class="goodsItem">
       
           <a href="goods.php?id=1"><img src="images/200905/thumb_img/1_thumb_G_1240902890710.jpg" alt="KD876" class="goodsimg" /></a><br />
           <p class="f1"><a href="goods.php?id=1" title="KD876">KD876</a></p>
           
           
 市场价：<font class="market">￥1666元</font> <br/>
      
           本店价：<font class="f1">
                     ￥1388元                     </font>      
		    
        </div>
    <div class="goodsItem">
       
           <a href="goods.php?id=8"><img src="images/200905/thumb_img/8_thumb_G_1241425513488.jpg" alt="飞利浦9@9v" class="goodsimg" /></a><br />
           <p class="f1"><a href="goods.php?id=8" title="飞利浦9@9v">飞利浦9@9v</a></p>
           
           
 市场价：<font class="market">￥479元</font> <br/>
      
           本店价：<font class="f1">
                     ￥399元                     </font>      
		    
        </div>
    <div class="goodsItem">
       
           <a href="goods.php?id=9"><img src="images/200905/thumb_img/9_thumb_G_1241511871555.jpg" alt="诺基亚E66" class="goodsimg" /></a><br />
           <p class="f1"><a href="goods.php?id=9" title="诺基亚E66">诺基亚E66</a></p>
           
           
 市场价：<font class="market">￥2758元</font> <br/>
      
           本店价：<font class="f1">
                     ￥2298元                     </font>      
		    
        </div>
   
    </div>
</div>
<div class="blank"></div>
  <div class="xm-box">
<h4 class="title"><span>热卖商品</span> <a class="more" href="search.php?intro=hot">更多</a></h4>
<div class="blank"></div>
<div id="show_hot_area" class="clearfix">
      <div class="goodsItem">
       
           <a href="goods.php?id=69"><img src="images/201605/thumb_img/69_thumb_G_1462955300971.jpg" alt="平衡车" class="goodsimg" /></a><br />
           <p class="f1"><a href="goods.php?id=69" title="平衡车">平衡车</a></p>
           
           
 市场价：<font class="market">￥2399元</font> <br/>
      
           本店价：<font class="f1">
                     ￥1999元                     </font>      
		    
        </div>
    <div class="goodsItem">
       
           <a href="goods.php?id=63"><img src="images/201605/thumb_img/63_thumb_G_1462953395609.jpg" alt="自拍杆" class="goodsimg" /></a><br />
           <p class="f1"><a href="goods.php?id=63" title="自拍杆">自拍杆</a></p>
           
           
 市场价：<font class="market">￥49元</font> <br/>
      
           本店价：<font class="f1">
                     ￥49元                     </font>      
		    
        </div>
    <div class="goodsItem">
       
           <a href="goods.php?id=64"><img src="images/201605/thumb_img/64_thumb_G_1462952811633.jpg" alt="运动相机" class="goodsimg" /></a><br />
           <p class="f1"><a href="goods.php?id=64" title="运动相机">运动相机</a></p>
           
           
 市场价：<font class="market">￥479元</font> <br/>
      
           本店价：<font class="f1">
                     ￥399元                     </font>      
		    
        </div>
   
    </div>
</div>
<div class="blank"></div>
  <div class="xm-box">
<h4 class="title"><span>精品推荐</span> <a class="more" href="search.php?intro=best">更多</a></h4>
<div class="blank"></div>
<div id="show_best_area" class="clearfix">
      <div class="goodsItem">
       
           <a href="goods.php?id=1"><img src="images/200905/thumb_img/1_thumb_G_1240902890710.jpg" alt="KD876" class="goodsimg" /></a><br />
           <p class="f1"><a href="goods.php?id=1" title="KD876">KD876</a></p>
           
           
 市场价：<font class="market">￥1666元</font> <br/>
      
           本店价：<font class="f1">
                     ￥1388元                     </font>      
		    
        </div>
    <div class="goodsItem">
       
           <a href="goods.php?id=8"><img src="images/200905/thumb_img/8_thumb_G_1241425513488.jpg" alt="飞利浦9@9v" class="goodsimg" /></a><br />
           <p class="f1"><a href="goods.php?id=8" title="飞利浦9@9v">飞利浦9@9v</a></p>
           
           
 市场价：<font class="market">￥479元</font> <br/>
      
           本店价：<font class="f1">
                     ￥399元                     </font>      
		    
        </div>
    <div class="goodsItem">
       
           <a href="goods.php?id=9"><img src="images/200905/thumb_img/9_thumb_G_1241511871555.jpg" alt="诺基亚E66" class="goodsimg" /></a><br />
           <p class="f1"><a href="goods.php?id=9" title="诺基亚E66">诺基亚E66</a></p>
           
           
 市场价：<font class="market">￥2758元</font> <br/>
      
           本店价：<font class="f1">
                     ￥2298元                     </font>      
		    
        </div>
   
    </div>
</div>
<div class="blank"></div>
  <div class="xm-box">
<h4 class="title"><span></span> <a class="more" href="">更多</a></h4>
<div class="blank"></div>
<div id="show_hot_area" class="clearfix">
 
          </div>
 
 
</div>
<div class="blank"></div>
  </div> 
  
    </div>
  
  
  
 
    <a href="http://www.ecmoban.com" class="ecmoban">ecshop模板堂</a> 
<div class="g-footer">
  <div class="serverbox">
    <div class="sn-server">
      <div class="serverlist"> 
         
                <dl  class=" g-serverlist-first_1 ">
          <dt ><a href='article_cat.php?id=5' title="新手上路 ">新手上路 </a></dt>
                    <dd><a href="article.php?id=9" title="售后流程">售后流程</a></dd>
                    <dd><a href="article.php?id=10" title="购物流程">购物流程</a></dd>
                    <dd><a href="article.php?id=11" title="订购方式">订购方式</a></dd>
                  </dl>
                <dl  class=" g-serverlist-first_2 ">
          <dt ><a href='article_cat.php?id=6' title="手机常识 ">手机常识 </a></dt>
                    <dd><a href="article.php?id=12" title="如何分辨原装电池">如何分辨原装电池</a></dd>
                    <dd><a href="article.php?id=13" title="如何分辨水货手机 ">如何分辨水货手机</a></dd>
                    <dd><a href="article.php?id=14" title="如何享受全国联保">如何享受全国联保</a></dd>
                  </dl>
                <dl  class=" g-serverlist-first_3 ">
          <dt ><a href='article_cat.php?id=7' title="配送与支付 ">配送与支付 </a></dt>
                    <dd><a href="article.php?id=15" title="货到付款区域">货到付款区域</a></dd>
                    <dd><a href="article.php?id=16" title="配送支付智能查询 ">配送支付智能查询</a></dd>
                    <dd><a href="article.php?id=17" title="支付方式说明">支付方式说明</a></dd>
                  </dl>
                <dl  class=" g-serverlist-first_4 ">
          <dt ><a href='article_cat.php?id=10' title="会员中心">会员中心</a></dt>
                    <dd><a href="article.php?id=18" title="资金管理">资金管理</a></dd>
                    <dd><a href="article.php?id=19" title="我的收藏">我的收藏</a></dd>
                    <dd><a href="article.php?id=20" title="我的订单">我的订单</a></dd>
                  </dl>
                <dl  class=" g-serverlist-first_5 ">
          <dt ><a href='article_cat.php?id=8' title="服务保证 ">服务保证 </a></dt>
                    <dd><a href="article.php?id=21" title="退换货原则">退换货原则</a></dd>
                    <dd><a href="article.php?id=22" title="售后服务保证 ">售后服务保证</a></dd>
                    <dd><a href="article.php?id=23" title="产品质量保证 ">产品质量保证</a></dd>
                  </dl>
                <dl  class=" g-serverlist-first_6 ">
          <dt ><a href='article_cat.php?id=9' title="联系我们 ">联系我们 </a></dt>
                    <dd><a href="article.php?id=24" title="网站故障报告">网站故障报告</a></dd>
                    <dd><a href="article.php?id=25" title="选机咨询 ">选机咨询</a></dd>
                    <dd><a href="article.php?id=26" title="投诉与建议 ">投诉与建议</a></dd>
                  </dl>
         
                <dl class="g-sncs">
          <dt>苏宁众包 <img class="g-sncs-new" src="http://image.suning.cn/public/images/nav-new.gif" alt=""> </dt>
          <dd style="width: 170px;
background: url(themes/ecmoban_suning/images/footsprite.png) no-repeat -205px -392px;">
           以苏宁全渠道包销为主要特点，整合全社会众包资源，扶持创新企业，推广创新产品。 <a  class="g-snsc-link" target="_blank" href="#">了解更多</a> 
          </dd>
        </dl>
      </div>
      <div class="otherinfo">
        <dl class="netserver">
          <dt>网络服务</dt>
          <dd>我们在全国300个城市有<a rel="nofollow"  target="_blank" href="#">1600</a>家门店<a  target="_blank" href="#">3000</a>个服务点为您提供最贴心的阳光服务！</dd>
        </dl>
        <dl class="searchsn">
          <dt> <a  href="#" target="_blank">搜索您身边的苏宁</a> </dt>
          <dd>搜索您身边的苏宁</dd>
        </dl>
      </div>
    </div>
  </div>
  <div class="specialbox">
    <div class="sn-specialbox" style="overflow:hidden"> <a class="slink1" href="#" title="正品有保证" target="_blank">正品有保证</a> <a  class="slink2" href="#" title="百城半日达" target="_blank">百城半日达</a> <a  class="slink3" href="#" title="服务一站式" target="_blank">服务一站式</a> </div>
  </div>
  <div class="copyrightbox">
    <div class="copyright"> 
       
            <div>
      <dl class="sncompany box_1" style="text-align:left">
        <dd class=""> 
           
          <a href="http://www.ecshop.com/" target="_blank" title="ECSHOP 网上商店管理系统"><img src="http://www.ecshop.com/images/logo/ecshop_logo.gif" alt="ECSHOP 网上商店管理系统" border="0" /></a> 
           
           
           
          <a href="http://www.maifou.net/" target="_blank" title="买否网">买否网</a> <span>|</span> 
           
          <a href="http://www.wdwd.com/" target="_blank" title="免费开独立网店">免费开独立网店</a>  
           
           
        </dd>
      </dl>
      </div>
       
       
      
      
      
      <p class="snlinks"> 
         
      </p>
      
       
      
      <div id="footer" style="height:1px; width:1px; height:1px; overflow:hidden; background:none;">
        <div class="text"> &copy; 2005-2018 ECSHOP 版权所有，并保留所有权利。<br />
            
           
           
           
           
           
           
           
           
           
           
           
           
           
           
           
           
          <br />
           
          45ea207d7a2b68c49582d2d22adf953aquery_info|a:1:{s:4:"name";s:10:"query_info";}45ea207d7a2b68c49582d2d22adf953a<br />
          <a href="http://xyunqi.com/products/ecshop?from=nav" target="_blank" style=" font-family:Verdana; font-size:11px;">Powered&nbsp;by&nbsp;<strong><span style="color: #3366FF">ECShop</span>&nbsp;<span style="color: #FF9966">v4.0.0</span></strong></a>&nbsp;<a href="http://www.ecshop.com/license.php?product=ecshop_b2c&url=http%3A%2F%2Flocalhost%2F" target="_blank"
>&nbsp;&nbsp;Licensed</a><br />
                    <div align="left"  id="rss"><a href="feed.php"><img src="themes/ecmoban_suning/images/xml_rss2.gif" alt="rss" /></a></div>
        </div>
      </div>
      <p class="rights"> © 2005-2014 ecshop模板堂(ecmoban.com) 版权所有，并保留所有权利。 常年法律顾问：上海华宏律师事务所</p>
      <div class="subfooter"> <a  href="#" title="可信网站示范单位" target="_blank"><img src="http://image4.suning.cn/images/ShoppingArea/Common/morelogo2.png"></a> <a  href="#" title="诚信网站" target="_blank"><img src="http://image5.suning.cn/images/ShoppingArea/Common/morelogo6.png"></a> <a  href="#" title="电子营业执照" target="_blank"><img src="http://image1.suning.cn/images/ShoppingArea/Common/morelogo7.png"></a> </div>
      <Div class="blank"></Div>
      <div align="center"><a href=" http://www.ecmoban.com" target="_blank"><img src="themes/ecmoban_suning/images/ecmoban.gif" alt="ECShop模板" /></a></div>
    </div>
  </div>
</div>
<div class="blank"></div>
  
<link href="ecmoban_qq/images/qq.css" rel="stylesheet" type="text/css" />
<div class="QQbox" id="divQQbox" style="width: 170px; ">
<div class="Qlist" id="divOnline" onmouseout="hideMsgBox(event);" style="display: none; " onmouseover="OnlineOver();">
    <div class="t"></div>
    <div class="infobox">我们营业的时间<br>9:00-18:00</div>
    <div class="con">
        <ul>
 
  
  
  
  
  
                                                                                  
    
  
  
  
  
  
  
  
  
  
  
	         </ul>
    </div>
    <div class="b"></div>
</div>
<div id="divMenu" onmouseover="OnlineOver();" style="display: block; "><img src="ecmoban_qq/images/qq_1.gif" class="press" alt="在线咨询"></div>
</div>
<script type="text/javascript">
//<![CDATA[
var tips; var theTop = 120/*这是默认高度,越大越往下*/; var old = theTop;
function initFloatTips() {
tips = document.getElementById('divQQbox');
moveTips();
};
function moveTips() {
var tt=50;
if (window.innerHeight) {
pos = window.pageYOffset
}
else if (document.documentElement && document.documentElement.scrollTop) {
pos = document.documentElement.scrollTop
}
else if (document.body) {
pos = document.body.scrollTop;
}
pos=pos-tips.offsetTop+theTop;
pos=tips.offsetTop+pos/10;
if (pos < theTop) pos = theTop;
if (pos != old) {
tips.style.top = pos+"px";
tt=10;
//alert(tips.style.top);
}
old = pos;
setTimeout(moveTips,tt);
}
//!]]>
initFloatTips();
function OnlineOver(){
document.getElementById("divMenu").style.display = "none";
document.getElementById("divOnline").style.display = "block";
document.getElementById("divQQbox").style.width = "170px";
}
function OnlineOut(){
document.getElementById("divMenu").style.display = "block";
document.getElementById("divOnline").style.display = "none";
}
if(typeof(HTMLElement)!="undefined")    //给firefox定义contains()方法，ie下不起作用
{   
      HTMLElement.prototype.contains=function(obj)   
      {   
          while(obj!=null&&typeof(obj.tagName)!="undefind"){ //通过循环对比来判断是不是obj的父元素
   　　　　if(obj==this) return true;   
   　　　　obj=obj.parentNode;
   　　}   
          return false;   
      };   
}  
function hideMsgBox(theEvent){ //theEvent用来传入事件，Firefox的方式
　 if (theEvent){
　 var browser=navigator.userAgent; //取得浏览器属性
　 if (browser.indexOf("Firefox")>0){ //如果是Firefox
　　 if (document.getElementById('divOnline').contains(theEvent.relatedTarget)) { //如果是子元素
　　 return; //结束函式
} 
} 
if (browser.indexOf("MSIE")>0){ //如果是IE
if (document.getElementById('divOnline').contains(event.toElement)) { //如果是子元素
return; //结束函式
}
}
}
/*要执行的操作*/
document.getElementById("divMenu").style.display = "block";
document.getElementById("divOnline").style.display = "none";
}
</script></body>
</html>