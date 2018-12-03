<link href="themes/ecmoban_suning/qq/images/qq.css" rel="stylesheet" type="text/css" />
 
<script type="text/javascript">
var process_request = "<?php echo $this->_var['lang']['process_request']; ?>";
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
<div id="header">
	<div class="hd_bar">
    	<div class="bd_bar_bd cle">
			<ul class="topmenu">
				<!-- <li>
					<a href="javascript:if(confirm('http://36ecshop.shopsy.cn/36hh/1  \n\nكτݾϞרԃ Teleport Ultra Ђ՘, ӲΪ ؾϱǷѨ٦كτݾδ֒սc  \n\nţЫ՚ؾϱǷʏղߪ̼?'))window.location='http://36ecshop.shopsy.cn/36hh/1'" tppabs="http://36ecshop.shopsy.cn/36hh/1" >新 品 <span>NEW</span></a>
				</li>
				<li>
					<a href="javascript:if(confirm('http://36ecshop.shopsy.cn/36hh/2  \n\nكτݾϞרԃ Teleport Ultra Ђ՘, ӲΪ ؾϱǷѨ٦كτݾδ֒սc  \n\nţЫ՚ؾϱǷʏղߪ̼?'))window.location='http://36ecshop.shopsy.cn/36hh/2'" tppabs="http://36ecshop.shopsy.cn/36hh/2" >促 销 <span>SALE</span></a>
				</li>
				<li>
			       <a href="javascript:if(confirm('http://36ecshop.shopsy.cn/36hh/3  \n\nكτݾϞרԃ Teleport Ultra Ђ՘, ӲΪ ؾϱǷѨ٦كτݾδ֒սc  \n\nţЫ՚ؾϱǷʏղߪ̼?'))window.location='http://36ecshop.shopsy.cn/36hh/3'" tppabs="http://36ecshop.shopsy.cn/36hh/3" >THE AMERICAN TASTE</a>
				</li> -->
			</ul>
	 
			<div class="cart" id="ECS_CARTINFO">
				<div onMouseOver="this.className='on'" onMouseOut="this.className=''">
					<a class="t" href="flow.php">
						<span class="navArrowTop"></span>
						<span><?php 
$k = array (
  'name' => 'cart_info',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?></span></a>
					<!-- <ul class="cart_box clearfix"> 
						<div class="ptt">您的购物车中暂无商品，<br>快去挑选自己钟爱的商品吧！</div>
					</ul> -->
				</div>
			</div>
			<div id="contactUs" onMouseOver="this.className='on'" onMouseOut="this.className=''">
				<a href="#" class="t"> 联系客服<span class="navArrowTop"></span></a>
				<div class="tips_layer">
					<ul>
						<li><a href="javascript:if(confirm('http://wpa.qq.com/msgrd?v=3&uin=392478192&site=ECSHOP模板-HARBOR HOUSE模板演示站&menu=yes  \n\nكτݾϞרԃ Teleport Ultra Ђ՘, ӲΪ ̼ˇһٶԲܲ·޶΢ҿѻʨ׃Ϊ̼քǴʼַ֘քַ֘c  \n\nţЫ՚ؾϱǷʏղߪ̼?'))window.location='http://wpa.qq.com/msgrd?v=3&uin=392478192&site=ECSHOP模板-HARBOR HOUSE模板演示站&menu=yes'" tppabs="http://wpa.qq.com/msgrd?v=3&uin=392478192&site=ECSHOP模板-HARBOR HOUSE模板演示站&menu=yes" target="_blank">腾讯QQ</a></li>
			        	<li><a href="javascript:if(confirm('http://amos1.taobao.com/msg.ww?v=2&uid=moban88com&s=2  \n\nكτݾϞרԃ Teleport Ultra Ђ՘, ӲΪ ̼ˇһٶԲܲ·޶΢ҿѻʨ׃Ϊ̼քǴʼַ֘քַ֘c  \n\nţЫ՚ؾϱǷʏղߪ̼?'))window.location='http://amos1.taobao.com/msg.ww?v=2&uid=moban88com&s=2'" tppabs="http://amos1.taobao.com/msg.ww?v=2&uid=moban88com&s=2" target="_blank">淘宝旺旺</a></li>
					</ul>
				</div>
			</div>
			<ul class="topTh fr">		            	
				<li onMouseOver="this.className='on'" onMouseOut="this.className=''">
					<a class="t" href="user.php">我的账户<span class="navArrowTop"></span></a>
			             <b></b>
			          <div class="dd">
			            	<div>
						<a class="trackref" href="user.php?act=order_list" >我的订单</a>
					</div>
			                 <div>
						<a class="trackref" href="user.php?act=bonus">我的红包</a>
					</div>
			                 <div>
						<a class="trackref" href="user.php?act=collection_list">我的收藏</a>
					</div>
			                 <div>
						<a href="user.php?act=account_log">账户余额</a>
					</div>
			             </div>
				</li>
			</ul>
			<div class="welcome" id="ECS_MEMBERZONE">
				<font id="ECS_MEMBERZONE"><div id="append_parent"></div>
					<?php if ($this->_var['user_info']): ?>
						你好，<a href="user.php"><?php echo $this->_var['user_info']['username']; ?></a> |
				 		<a href="user.php?act=logout"><?php echo $this->_var['lang']['user_logout']; ?></a> |
				 
				  	<?php else: ?> 
						欢迎光临本店，<a href="user.php">登录</a> | <a  href="user.php?act=register">注册</a> |
				 	<?php endif; ?>
				</font>
			</div>
		</div>
	</div>
	
	<div class="logo"> 
	 	<a href="index.php" tppabs="index.php" class="lizi_logo">
	 		<img src="themes/ecmoban_suning/images/logo.png" tppabs="" alt="logo"/></a></div>
	
</div>


<div class="hd_nav">
	<div class="hd_nav_bd clearfix">
		<div id="category_info">

			<?php $_from = $this->_var['navigator_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'nav');$this->_foreach['no'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['no']['total'] > 0):
    foreach ($_from AS $this->_var['nav']):
        $this->_foreach['no']['iteration']++;
?>
			<div id="tb-<?php echo ($this->_foreach['no']['iteration'] - 1); ?>" class="cat-box" 
				onMouseOver="this.className='hover cat-box'" onMouseOut="this.className='cat-box'">
				<div class="cat1">
					<a href="<?php echo htmlspecialchars($this->_var['nav']['url']); ?>"
						class="tb tb-1"><?php echo htmlspecialchars($this->_var['nav']['cat_name']); ?><span class="navArrowTop"></span></a>
				</div>
				
				<div class="cat2-box">
					
					<table width="100%" border="0" cellspacing="0" cellpadding="0">
						<tr>
							<?php $_from = $this->_var['nav']['child']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'child');if (count($_from)):
    foreach ($_from AS $this->_var['child']):
?>
							<td width="120">
								<a class="cat2" href="<?php echo $this->_var['child']['url']; ?>"><?php echo htmlspecialchars($this->_var['child']['cat_name']); ?>
									<img src="themes/ecmoban_suning/images/220.png"></a>
									
								<div class="cat3">
								<?php $_from = $this->_var['child']['child']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'childer');if (count($_from)):
    foreach ($_from AS $this->_var['childer']):
?>
									<a href="<?php echo $this->_var['childer']['url']; ?>"><?php echo htmlspecialchars($this->_var['childer']['cat_name']); ?></a>
								<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>	
								</div>
							</td>
							<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
						</tr>
					</table>
				</div>
			</div>
			<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
		</div>
	</div>
</div>




 
 

 


