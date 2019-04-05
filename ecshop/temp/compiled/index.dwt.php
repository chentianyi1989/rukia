<!DOCTYPE html>
<html>
<head>
<meta name="Generator" content="ECSHOP v4.0.0" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />

<title><?php echo $this->_var['page_title']; ?></title>

<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link href="<?php echo $this->_var['ecs_css_path']; ?>" rel="stylesheet" type="text/css" />
<link rel="alternate" type="application/rss+xml" title="RSS|<?php echo $this->_var['page_title']; ?>" href="<?php echo $this->_var['feed_url']; ?>" />

<link rel="stylesheet" type="text/css" href="themes/default/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="themes/default/css/style.css">
<link rel="stylesheet" type="text/css" href="themes/default/css/swiper.min.css">


<?php echo $this->smarty_insert_scripts(array('files'=>'common.js,index.js')); ?>
<script language='javascript' src='themes/default/js/swiper.min.js' type='text/javascript' charset='utf-8'></script>
<script language='javascript' src='themes/default/js/home.js' type='text/javascript' charset='utf-8'></script>

</head>
<body>



	<?php echo $this->fetch('library/page_header.lbi'); ?>






	<div class="indexpage clearfix" >
			
		<?php echo $this->fetch('library/hours.lbi'); ?>
			
		<div class="index-banner">
			<?php echo $this->fetch('library/my/index_banner.lbi'); ?>
		</div>
	</div>
	
	<div class="index-body">
		<div class="indexpage">
			<div class="body-goods">
				<div class="goods-title">装修效果图</div>
				<div class="clearfix goods-wrap">
					
					<?php echo $this->fetch('library/my/index_zxxg.lbi'); ?>
					
				</div>	
			</div>
			
			<div class="body-goods">
				<div class="goods-title">家居套装</div>
				<div class="clearfix goods-wrap">
					
					<?php echo $this->fetch('library/my/index_jjtz.lbi'); ?>
					
				</div>	
			</div>
			
			<div class="body-goods" style="height: 300px">
				<div class="goods-title">知识学堂</div>
				<div class="clearfix goods-wrap">
					
					<?php echo $this->fetch('library/my/index_zxxzs.lbi'); ?>
					
				</div>	
			</div>
		</div>
	</div>
	
<?php echo $this->fetch('library/page_footer.lbi'); ?>
</body>
</html>
