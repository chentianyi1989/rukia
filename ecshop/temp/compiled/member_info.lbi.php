
<?php if ($this->_var['user_info']): ?>
 
<span id="topWelcomeDiv" class="heaTopHighlight">
<a href="user.php"> <?php echo $this->_var['lang']['hello']; ?>，<font style="color: #EB008D; font-weight:bold"><?php echo $this->_var['user_info']['username']; ?>&nbsp;</font>，<?php echo $this->_var['lang']['welcome_return']; ?>！</a>
<a href="user.php"><?php echo $this->_var['lang']['user_center']; ?></a>
<a href="user.php?act=logout" class="bgNone" target="_parent" onclick=""><?php echo $this->_var['lang']['user_logout']; ?></a></span>
<?php else: ?>
<span id="topLoginDiv" class="heaTopHighlight" style="display:inline-block;">
<a href="user.php" class="bgNone" >请登录</a><a href="user.php?act=register"  class="popHover">免费注册</a>
</span>
<?php endif; ?>