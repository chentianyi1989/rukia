<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v4.0.0" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />

<title><?php echo $this->_var['page_title']; ?></title>



<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link href="<?php echo $this->_var['ecs_css_path']; ?>" rel="stylesheet" type="text/css" />
<link href="themes/ecmoban_suning/index.css" rel="stylesheet" type="text/css" />
<link rel="alternate" type="application/rss+xml" title="RSS|<?php echo $this->_var['page_title']; ?>" href="<?php echo $this->_var['feed_url']; ?>" />

<?php echo $this->smarty_insert_scripts(array('files'=>'jquery-2.2.3.min.js,common.js,index.js,jquery.SuperSlide.2.1.1.js')); ?>
</head>
<body class="index_page">


<?php echo $this->fetch('library/page_header.lbi'); ?>



<div class="w100">
	<div class="slideBox">
		<div class="hd">
			<ul>
				<?php $_from = $this->_var['flash']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'flash_0_40570500_1543312793');$this->_foreach['no'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['no']['total'] > 0):
    foreach ($_from AS $this->_var['flash_0_40570500_1543312793']):
        $this->_foreach['no']['iteration']++;
?>
				<li class=""><?php echo $this->_foreach['no']['iteration']; ?></li>
				<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
			</ul>
		</div>
		<div class="bd">
			<ul>
				<?php $_from = $this->_var['flash']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'flash_0_40974400_1543312793');$this->_foreach['no'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['no']['total'] > 0):
    foreach ($_from AS $this->_var['flash_0_40974400_1543312793']):
        $this->_foreach['no']['iteration']++;
?>
				<li><a href="<?php echo $this->_var['flash_0_40974400_1543312793']['url']; ?>" target='_blank'>
					<img src="<?php echo $this->_var['flash_0_40974400_1543312793']['src']; ?>" width='1000' height='600' border='0' /></a></li>
				<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
			</ul>
		</div>
		<a class="prev" href="javascript:void(0)"></a> 
		<a class="next" href="javascript:void(0)"></a>
	</div>
	<script type="text/javascript">
	$(function () {
		jQuery(".slideBox").slide({titCell:".hd ul", mainCell:".bd ul",autoPage:true,delayTime:1000,interTime:4000,autoPlay:true});
	});
	</script>
</div>


	<div style="height: 60px;"></div>


	<div class="w-img">
		<a href="index.htm"
			tppabs="http://36ecshop.shopsy.cn/36hh/affiche.php?ad_id=19&uri="
			target='_blank'><img src="http://36ecshop.shopsy.cn/36hh/data/afficheimg/1501576184725395810.jpg"
			tppabs="http://36ecshop.shopsy.cn/36hh/data/afficheimg/1501576184725395810.jpg"
			width='1000' height='358' border='0' /></a>
	</div>
	<div class="lcr clearfix">
		<div class="fl">
			<a href="index.htm"
				tppabs="http://36ecshop.shopsy.cn/36hh/affiche.php?ad_id=22&uri="
				target='_blank'><img src="http://36ecshop.shopsy.cn/36hh/data/afficheimg/1501576661146672987.jpg"
				tppabs="http://36ecshop.shopsy.cn/36hh/data/afficheimg/1501576661146672987.jpg"
				width='377' height='528' border='0' /></a>
		</div>
		<div class="fc">
			<div id="slideBox1" class="slideBox1">
				<div id="hd" class="hd1">
					<ul></ul>
				</div>
				<div id="bd" class="bd1">
					<ul>
						<a href="index.htm"
							tppabs="http://36ecshop.shopsy.cn/36hh/affiche.php?ad_id=23&uri="
							target='_blank'><img src="http://36ecshop.shopsy.cn/36hh/data/afficheimg/1501576697401376231.jpg"
							tppabs="http://36ecshop.shopsy.cn/36hh/data/afficheimg/1501576697401376231.jpg"
							width='376' height='330' border='0' /></a>
						<a href="index.htm"
							tppabs="http://36ecshop.shopsy.cn/36hh/affiche.php?ad_id=24&uri="
							target='_blank'><img src="http://36ecshop.shopsy.cn/36hh/data/afficheimg/1501576711101800670.jpg"
							tppabs="http://36ecshop.shopsy.cn/36hh/data/afficheimg/1501576711101800670.jpg"
							width='376' height='330' border='0' /></a>
					</ul>
				</div>
			</div>
			<script type="text/javascript">
				jQuery(".slideBox1").slide({
					titCell : ".hd1 ul",
					mainCell : ".bd1 ul",
					autoPage : true,
					delayTime : 1000,
					interTime : 2000,
					autoPlay : true
				});
			</script>
			<a href="index.htm"
				tppabs="http://36ecshop.shopsy.cn/36hh/affiche.php?ad_id=26&uri="
				target='_blank'><img src="http://36ecshop.shopsy.cn/36hh/data/afficheimg/1501577107798374864.jpg"
				tppabs="http://36ecshop.shopsy.cn/36hh/data/afficheimg/1501577107798374864.jpg"
				width='376' height='178' border='0' /></a>
		</div>
		<div class="fr">
			<a href="index.htm"
				tppabs="http://36ecshop.shopsy.cn/36hh/affiche.php?ad_id=25&uri="
				target='_blank'><img src="http://36ecshop.shopsy.cn/36hh/data/afficheimg/1501576743191062945.jpg"
				tppabs="http://36ecshop.shopsy.cn/36hh/data/afficheimg/1501576743191062945.jpg"
				width='376' height='528' border='0' /></a>
		</div>
	</div>

	<div style="height:60px;"></div>

	<div class="w-img">
		<a href="index.htm"
			tppabs="http://36ecshop.shopsy.cn/36hh/affiche.php?ad_id=20&uri="
			target='_blank'><img src="http://36ecshop.shopsy.cn/36hh/data/afficheimg/1501576199374898504.jpg"
			tppabs="http://36ecshop.shopsy.cn/36hh/data/afficheimg/1501576199374898504.jpg"
			width='1000' height='360' border='0' /></a>
	</div>
	<div class="lcr clearfix">
		<div class="fl">
			<a href="index.htm"
				tppabs="http://36ecshop.shopsy.cn/36hh/affiche.php?ad_id=27&uri="
				target='_blank'><img src="http://36ecshop.shopsy.cn/36hh/data/afficheimg/1501578194598287259.jpg"
				tppabs="http://36ecshop.shopsy.cn/36hh/data/afficheimg/1501578194598287259.jpg"
				width='376' height='528' border='0' /></a>
		</div>
		<div class="fc">
			<div id="slideBox1" class="slideBox2">
				<div id="hd" class="hd2">
					<ul></ul>
				</div>
				<div id="bd" class="bd2">
					<ul>
						<a href="index.htm"
							tppabs="http://36ecshop.shopsy.cn/36hh/affiche.php?ad_id=29&uri="
							target='_blank'><img src="http://36ecshop.shopsy.cn/36hh/data/afficheimg/1501578244474393046.jpg"
							tppabs="http://36ecshop.shopsy.cn/36hh/data/afficheimg/1501578244474393046.jpg"
							width='376' height='330' border='0' /></a>
						<a href="index.htm"
							tppabs="http://36ecshop.shopsy.cn/36hh/affiche.php?ad_id=30&uri="
							target='_blank'><img src="http://36ecshop.shopsy.cn/36hh/data/afficheimg/1501578263699180948.jpg"
							tppabs="http://36ecshop.shopsy.cn/36hh/data/afficheimg/1501578263699180948.jpg"
							width='376' height='330' border='0' /></a>
					</ul>
				</div>
			</div>
			<script type="text/javascript">
				jQuery(".slideBox2").slide({
					titCell : ".hd2 ul",
					mainCell : ".bd2 ul",
					autoPage : true,
					delayTime : 1000,
					interTime : 2000,
					autoPlay : true
				});
			</script>
			<a href="index.htm"
				tppabs="http://36ecshop.shopsy.cn/36hh/affiche.php?ad_id=31&uri="
				target='_blank'><img src="http://36ecshop.shopsy.cn/36hh/data/afficheimg/1501578282331940210.jpg"
				tppabs="http://36ecshop.shopsy.cn/36hh/data/afficheimg/1501578282331940210.jpg"
				width='376' height='178' border='0' /></a>
		</div>
		<div class="fr">
			<a href="index.htm"
				tppabs="http://36ecshop.shopsy.cn/36hh/affiche.php?ad_id=28&uri="
				target='_blank'><img src="http://36ecshop.shopsy.cn/36hh/data/afficheimg/1501578210580705397.jpg"
				tppabs="http://36ecshop.shopsy.cn/36hh/data/afficheimg/1501578210580705397.jpg"
				width='376' height='528' border='0' /></a>
		</div>
	</div>


	<div style="height:70px;"></div>
	
	<div class="w-img">
		<a href="index.htm"
			tppabs="http://36ecshop.shopsy.cn/36hh/affiche.php?ad_id=21&uri="
			target='_blank'><img src="http://36ecshop.shopsy.cn/36hh/data/afficheimg/1501576212448994011.jpg"
			tppabs="http://36ecshop.shopsy.cn/36hh/data/afficheimg/1501576212448994011.jpg"
			width='1000' height='360' border='0' /></a>
	</div>
	<div style="height: 70px;"></div>
	<div class="w-img">
		<img src="http://36ecshop.shopsy.cn/36hh/themes/hh/images/jiaju.jpg"
			tppabs="http://36ecshop.shopsy.cn/36hh/themes/hh/images/jiaju.jpg">
	</div>
	<div class="img3 clearfix">
		<div>
			<a href="index.htm"
				tppabs="http://36ecshop.shopsy.cn/36hh/affiche.php?ad_id=32&uri="
				target='_blank'><img src="http://36ecshop.shopsy.cn/36hh/data/afficheimg/1501579183300012946.jpg"
				tppabs="http://36ecshop.shopsy.cn/36hh/data/afficheimg/1501579183300012946.jpg"
				width='376' height='380' border='0' /></a><a href="index.htm"
				tppabs="http://36ecshop.shopsy.cn/36hh/affiche.php?ad_id=33&uri="
				target='_blank'><img src="http://36ecshop.shopsy.cn/36hh/data/afficheimg/1501579195915933701.jpg"
				tppabs="http://36ecshop.shopsy.cn/36hh/data/afficheimg/1501579195915933701.jpg"
				width='376' height='380' border='0' /></a><a href="index.htm"
				tppabs="http://36ecshop.shopsy.cn/36hh/affiche.php?ad_id=34&uri="
				target='_blank'><img src="http://36ecshop.shopsy.cn/36hh/data/afficheimg/1501579207808745978.jpg"
				tppabs="http://36ecshop.shopsy.cn/36hh/data/afficheimg/1501579207808745978.jpg"
				width='376' height='380' border='0' /></a>
		</div>
	</div>
	<div style="height: 50px;"></div>
	<div class="w-img">
		<a href="index.htm"
			tppabs="http://36ecshop.shopsy.cn/36hh/affiche.php?ad_id=35&uri="
			target='_blank'><img src="http://36ecshop.shopsy.cn/36hh/data/afficheimg/1501579533304967814.jpg"
			tppabs="http://36ecshop.shopsy.cn/36hh/data/afficheimg/1501579533304967814.jpg"
			width='1000' height='480' border='0' /></a>
	</div>
	<div style="height: 70px;"></div>
	<div class="w-img">
		<img src="http://36ecshop.shopsy.cn/36hh/themes/hh/images/shafa.jpg"
			tppabs="http://36ecshop.shopsy.cn/36hh/themes/hh/images/shafa.jpg">
	</div>
	<div class="w-img">
		<a href="index.htm"
			tppabs="http://36ecshop.shopsy.cn/36hh/affiche.php?ad_id=36&uri="
			target='_blank'><img src="http://36ecshop.shopsy.cn/36hh/data/afficheimg/1501579681424589172.jpg"
			tppabs="http://36ecshop.shopsy.cn/36hh/data/afficheimg/1501579681424589172.jpg"
			width='1000' height='380' border='0' /></a>
	</div>

	<div style="height:70px;"></div>
	<div class="w-img">
		<a href="index.htm"
			tppabs="http://36ecshop.shopsy.cn/36hh/affiche.php?ad_id=37&uri="
			target='_blank'><img src="http://36ecshop.shopsy.cn/36hh/data/afficheimg/1501579815179294259.jpg"
			tppabs="http://36ecshop.shopsy.cn/36hh/data/afficheimg/1501579815179294259.jpg"
			width='1000' height='390' border='0' /></a>
	</div>
	<div class="img2 clearfix">
		<div>
			<a href="index.htm"
				tppabs="http://36ecshop.shopsy.cn/36hh/affiche.php?ad_id=38&uri="
				target='_blank'><img src="http://36ecshop.shopsy.cn/36hh/data/afficheimg/1501580115946980848.jpg"
				tppabs="http://36ecshop.shopsy.cn/36hh/data/afficheimg/1501580115946980848.jpg"
				width='580' height='160' border='0' /></a><a href="index.htm"
				tppabs="http://36ecshop.shopsy.cn/36hh/affiche.php?ad_id=39&uri="
				target='_blank'><img src="http://36ecshop.shopsy.cn/36hh/data/afficheimg/1501580125406894912.jpg"
				tppabs="http://36ecshop.shopsy.cn/36hh/data/afficheimg/1501580125406894912.jpg"
				width='580' height='160' border='0' /></a><a href="index.htm"
				tppabs="http://36ecshop.shopsy.cn/36hh/affiche.php?ad_id=40&uri="
				target='_blank'><img src="http://36ecshop.shopsy.cn/36hh/data/afficheimg/1501580137371952728.jpg"
				tppabs="http://36ecshop.shopsy.cn/36hh/data/afficheimg/1501580137371952728.jpg"
				width='580' height='160' border='0' /></a><a href="index.htm"
				tppabs="http://36ecshop.shopsy.cn/36hh/affiche.php?ad_id=41&uri="
				target='_blank'><img src="http://36ecshop.shopsy.cn/36hh/data/afficheimg/1501580147875050173.jpg"
				tppabs="http://36ecshop.shopsy.cn/36hh/data/afficheimg/1501580147875050173.jpg"
				width='580' height='160' border='0' /></a>
		</div>
	</div>




	<?php echo $this->fetch('library/page_footer.lbi'); ?>

			
</body>
</html>
