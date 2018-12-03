


<?php if ($this->_var['img_links'] || $this->_var['txt_links']): ?>
<div id="footer">友情链接：
	<div class="clearfix footbar w1200">
		<ul class="block3">
			<?php $_from = $this->_var['img_links']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'link');$this->_foreach['bottom'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['bottom']['total'] > 0):
    foreach ($_from AS $this->_var['link']):
        $this->_foreach['bottom']['iteration']++;
?> 
				<a href="<?php echo $this->_var['link']['url']; ?>" target="_blank" title="<?php echo $this->_var['link']['name']; ?>"><img src="<?php echo $this->_var['link']['logo']; ?>" alt="<?php echo $this->_var['link']['name']; ?>" border="0" /></a>
				<?php if (! ($this->_foreach['bottom']['iteration'] == $this->_foreach['bottom']['total'])): ?>
					<span>|</span>
				<?php endif; ?> 
          	<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
			<?php $_from = $this->_var['txt_links']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'link');$this->_foreach['bottom'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['bottom']['total'] > 0):
    foreach ($_from AS $this->_var['link']):
        $this->_foreach['bottom']['iteration']++;
?> 
				<a href="<?php echo $this->_var['link']['url']; ?>" target="_blank" title="<?php echo $this->_var['link']['name']; ?>"><?php echo $this->_var['link']['name']; ?></a> 
				<?php if (! ($this->_foreach['bottom']['iteration'] == $this->_foreach['bottom']['total'])): ?>
					<span>|</span>
				<?php endif; ?> 
			<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
		</ul>
	</div>
</div>
<?php endif; ?> 

<div id="footer">
	<div class="clearfix footbar w1200">
		<ul class="block3">
			<?php if ($this->_var['helps']): ?> 
				<?php $_from = $this->_var['helps']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'help_cat');$this->_foreach['no'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['no']['total'] > 0):
    foreach ($_from AS $this->_var['help_cat']):
        $this->_foreach['no']['iteration']++;
?>
				<li>
					<h4><a href='<?php echo $this->_var['help_cat']['cat_id']; ?>' title="<?php echo $this->_var['help_cat']['cat_name']; ?>"><?php echo $this->_var['help_cat']['cat_name']; ?></a></a></h4>
					<div class="boxx">
						<?php $_from = $this->_var['help_cat']['article']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
						<a href="<?php echo $this->_var['item']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['item']['title']); ?>"><?php echo $this->_var['item']['short_title']; ?></a>
						<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
	  		  		</div>
				</li>
				
				<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
			<?php endif; ?>
			
			<li>
				<div class="special fl">
		            <dl>
		                <dt><img src="http://36ecshop.shopsy.cn/36hh/themes/hh/images/wx.jpg"></dt>
		                <dd>关注官方微信</dd>
		            </dl>
		            <dl>
		                <dt><img src="http://36ecshop.shopsy.cn/36hh/themes/hh/images/wb.jpg"></dt>
		                <dd><span class="sinaIcon"></span>官方微博</dd>
		            </dl>
		        </div>
			</li>
			<li>
				<?php echo $this->_var['shop_address']; ?> <?php echo $this->_var['shop_postcode']; ?> 
				<?php if ($this->_var['service_phone']): ?> 
					Tel: <?php echo $this->_var['service_phone']; ?> 
				<?php endif; ?> 
				<?php if ($this->_var['service_email']): ?> 
					E-mail: <?php echo $this->_var['service_email']; ?><br />
				<?php endif; ?> 
				<?php $_from = $this->_var['qq']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'im');if (count($_from)):
    foreach ($_from AS $this->_var['im']):
?> 
				<?php if ($this->_var['im']): ?> 
					<a href="http://wpa.qq.com/msgrd?V=1&amp;Uin=<?php echo $this->_var['im']; ?>&amp;Site=<?php echo $this->_var['shop_name']; ?>&amp;Menu=yes" target="_blank"><img src="http://wpa.qq.com/pa?p=1:<?php echo $this->_var['im']; ?>:4" height="16" border="0" alt="QQ" /> <?php echo $this->_var['im']; ?></a> 
				<?php endif; ?> 
				<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
			</li>
		</ul>
	</div>
</div>




<div class="ft_nav"> 
           
	<a href="index.htm" tppabs="http://36ecshop.shopsy.cn/36hh/" class="noborder" rel="nofollow">返回首页</a> 
	<a href="message.php.htm" tppabs="http://36ecshop.shopsy.cn/36hh/message.php"    rel="nofollow">留言板</a> 
	<a href="quotation.php.htm" tppabs="http://36ecshop.shopsy.cn/36hh/quotation.php"    rel="nofollow">报价单</a> 
	<a href="user.php.htm" tppabs="http://36ecshop.shopsy.cn/36hh/user.php"    rel="nofollow">用户中心</a> 
	<a href="javascript:if(confirm('http://36ecshop.shopsy.cn/article.php?id=9  \n\nكτݾϞרԃ Teleport Ultra Ђ՘, ӲΪ ̼ˇһٶԲܲ·޶΢ҿѻʨ׃Ϊ̼քǴʼַ֘քַ֘c  \n\nţЫ՚ؾϱǷʏղߪ̼?'))window.location='http://36ecshop.shopsy.cn/article.php?id=9'" tppabs="http://36ecshop.shopsy.cn/article.php?id=9"    rel="nofollow">售后服务</a> 
   
</div>
<div class="w1200">
      <div class="ft_txt">
        <p><?php echo $this->_var['copyright']; ?> <?php echo $this->_var['shop_address']; ?> <?php echo $this->_var['shop_postcode']; ?> 
        		<a href="javascript:if(confirm('http://www.miitbeian.gov.cn/  \n\nكτݾϞרԃ Teleport Ultra Ђ՘, ӲΪ ̼ˇһٶԲܲ·޶΢ҿѻʨ׃Ϊ̼քǴʼַ֘քַ֘c  \n\nţЫ՚ؾϱǷʏղߪ̼?'))window.location='http://www.miitbeian.gov.cn/'" tppabs="http://www.miitbeian.gov.cn/" target="_blank" rel="nofollow"></a></p>
                  <p class="link" style="display:none;"> 友情链接：         
		        <a href="javascript:if(confirm('http://www.ecshop.com/  \n\nكτݾϞרԃ Teleport Ultra Ђ՘, ӲΪ ̼ˇһٶԲܲ·޶΢ҿѻʨ׃Ϊ̼քǴʼַ֘քַ֘c  \n\nţЫ՚ؾϱǷʏղߪ̼?'))window.location='http://www.ecshop.com/'" tppabs="http://www.ecshop.com/" target="_blank" title="ECSHOP 网上商店管理系统">ECSHOP 网上商店管理系统</a>
                <a href="javascript:if(confirm('http://www.maifou.net/  \n\nكτݾϞרԃ Teleport Ultra Ђ՘, ӲΪ ̼ˇһٶԲܲ·޶΢ҿѻʨ׃Ϊ̼քǴʼַ֘քַ֘c  \n\nţЫ՚ؾϱǷʏղߪ̼?'))window.location='http://www.maifou.net/'" tppabs="http://www.maifou.net/" target="_blank" title="买否网">买否网</a>
        <a href="javascript:if(confirm('http://www.wdwd.com/  \n\nكτݾϞרԃ Teleport Ultra Ђ՘, ӲΪ ̼ˇһٶԲܲ·޶΢ҿѻʨ׃Ϊ̼քǴʼַ֘քַ֘c  \n\nţЫ՚ؾϱǷʏղߪ̼?'))window.location='http://www.wdwd.com/'" tppabs="http://www.wdwd.com/" target="_blank" title="免费开独立网店">免费开独立网店</a>
                
         </p>
              </div>
          
      <div class="banquan" style="display:none;">
      	<a href="javascript:if(confirm('http://xyunqi.com/products/ecshop?from=nav  \n\nكτݾϞרԃ Teleport Ultra Ђ՘, ӲΪ ̼ˇһٶԲܲ·޶΢ҿѻʨ׃Ϊ̼քǴʼַ֘քַ֘c  \n\nţЫ՚ؾϱǷʏղߪ̼?'))window.location='http://xyunqi.com/products/ecshop?from=nav'" tppabs="http://xyunqi.com/products/ecshop?from=nav" target="_blank" style=" font-family:Verdana; font-size:11px;">Powered&nbsp;by&nbsp;<strong><span style="color: #3366FF">ECShop</span>&nbsp;<span style="color: #FF9966">v3.6.0</span></strong></a>&nbsp;<a href="javascript:if(confirm('http://www.ecshop.com/license.php?product=ecshop_b2c&url=http%3A%2F%2F36ecshop.shopsy.cn%2F36hh%2F  \n\nكτݾϞרԃ Teleport Ultra Ђ՘, ӲΪ ̼ˇһٶԲܲ·޶΢ҿѻʨ׃Ϊ̼քǴʼַ֘քַ֘c  \n\nţЫ՚ؾϱǷʏղߪ̼?'))window.location='http://www.ecshop.com/license.php?product=ecshop_b2c&url=http%3A%2F%2F36ecshop.shopsy.cn%2F36hh%2F'" tppabs="http://www.ecshop.com/license.php?product=ecshop_b2c&url=http%3A%2F%2F36ecshop.shopsy.cn%2F36hh%2F" target="_blank"
>&nbsp;&nbsp;Licensed</a></div>
 
</div>







  
  
  
  
  
  
  

 
