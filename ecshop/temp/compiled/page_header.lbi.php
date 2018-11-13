<script type="text/javascript">
var process_request = "<?php echo $this->_var['lang']['process_request']; ?>";
</script>
<script type="text/javascript">
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
  <div class="heaTop">
    <div class="heaTopR"> 
     <?php echo $this->smarty_insert_scripts(array('files'=>'jquery-1.9.1.min.js,jquery.json.js')); ?>
   <?php echo $this->smarty_insert_scripts(array('files'=>'transport.js,utils.js,jquery.SuperSlide.js')); ?>

   <font id="ECS_MEMBERZONE"><?php 
$k = array (
  'name' => 'member_info',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?> </font>
   <span class="heaHalving"> 
      <?php if ($this->_var['navigator_list']['top']): ?> 
      <?php $_from = $this->_var['navigator_list']['top']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'nav');$this->_foreach['nav_top_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nav_top_list']['total'] > 0):
    foreach ($_from AS $this->_var['nav']):
        $this->_foreach['nav_top_list']['iteration']++;
?> 
      <a href="<?php echo $this->_var['nav']['url']; ?>" <?php if ($this->_var['nav']['opennew'] == 1): ?> target="_blank" <?php endif; ?>><?php echo $this->_var['nav']['name']; ?></a>
       <strong style=" font-weight:100; line-height:30px">
       <?php if (! ($this->_foreach['nav_top_list']['iteration'] == $this->_foreach['nav_top_list']['total'])): ?>
             ¦
            <?php endif; ?> </strong> 
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
      <?php endif; ?> 
      </span>
       </div>
  <a href="javascript:void(0);" onclick="AddFavorite('我的网站',location.href)"><img src="themes/ecmoban_sifulan/images/fav.gif" alt="收藏夹" class="heaTopFav"></a>
     </div>
  <div class="heaInfo">
    <p class="heaLogo"> <a href="index.php" target="_parent" title="<?php echo $this->_var['shop_name']; ?>" > <img src="themes/ecmoban_sifulan/images/logo.gif" alt="<?php echo $this->_var['shop_name']; ?>"> </a> </p>
    <p class="heaGif"><a href="#" title="<?php echo $this->_var['shop_name']; ?>"><img src="themes/ecmoban_sifulan/images/logo_r.gif" alt="<?php echo $this->_var['shop_name']; ?>"></a></p>
    
    <div class="heaCar"  onmouseover="this.className='heaCar heaCar_on'" onmouseout="this.className='heaCar'" > <?php echo $this->smarty_insert_scripts(array('files'=>'transport.js')); ?>
      <div class="clearfix" id="ECS_CARTINFO" > 我的购物车<a href="flow.php"><b>&nbsp;<?php 
$k = array (
  'name' => 'cart_info',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>&nbsp;</b></a>件 
 


</div>
      <a class="heaCheck" style="background:url(themes/ecmoban_sifulan/images/jt.jpg) 50px 6px no-repeat;" href="flow.php" title="去结算">去结算</a> </div>
  </div>
  
  
  
  <div id="heaNav">
    <p class="heaNavOnly"> <a href="index.php"<?php if ($this->_var['navigator_list']['config']['index'] == 1): ?> class="cur"<?php endif; ?>><?php echo $this->_var['lang']['home']; ?></a> </p>
    <ul class="heaNavNone">
      <?php $_from = $this->_var['navigator_list']['middle']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'nav');$this->_foreach['nav_middle_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nav_middle_list']['total'] > 0):
    foreach ($_from AS $this->_var['nav']):
        $this->_foreach['nav_middle_list']['iteration']++;
?>
      <li  class="heaNav"onmouseover="this.className='heaNav heaNav_on'" onmouseout="this.className='heaNav'" > <a href="<?php echo $this->_var['nav']['url']; ?>" <?php if ($this->_var['nav']['opennew'] == 1): ?>target="_blank" <?php endif; ?> <?php if ($this->_var['nav']['active'] == 1): ?> class="cur"<?php endif; ?>  title="<?php echo $this->_var['nav']['name']; ?>" ><?php echo $this->_var['nav']['name']; ?></a> <?php if ($this->_var['nav']['cat_list']): ?>
        <div class='heaNavSec'>
          <dl>
            <?php $_from = $this->_var['nav']['cat_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat');if (count($_from)):
    foreach ($_from AS $this->_var['cat']):
?>
            <dd  > <a class="t" href="<?php echo $this->_var['cat']['url']; ?>"><?php echo htmlspecialchars($this->_var['cat']['name']); ?></a> 
             
            </dd>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
          </dl>
        </div>
        <?php endif; ?></li>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </ul>
    <div class="heaHL"><a href="search.php?intro=new" name="__menuxinpinhui" target="_parent" title="新品上市">新品上市</a><a href="search.php?intro=best" name="__menuxinpinhui" target="_parent" title="独家发售">独家发售</a></div>
  </div>
   

<div id="search"  class="clearfix">
  <form id="searchForm" name="searchForm" method="get" action="search.php" onSubmit="return checkSearchForm()" class="f_r">
   <input name="keywords" type="text" id="keyword" value="<?php echo htmlspecialchars($this->_var['search_keywords']); ?>" class="B_input f_l" />
   <input name="imageField" type="submit" value="" class="go" style="cursor:pointer;" />
   </form>
   <div class="keys f_l">
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
            alert("<?php echo $this->_var['lang']['no_keywords']; ?>");
            return false;
        }
    }
    -->
    
    </script>
    <?php if ($this->_var['searchkeywords']): ?>
   <?php echo $this->_var['lang']['hot_search']; ?> ：
   <?php $_from = $this->_var['searchkeywords']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'val');if (count($_from)):
    foreach ($_from AS $this->_var['val']):
?>
   <a href="search.php?keywords=<?php echo urlencode($this->_var['val']); ?>"><?php echo $this->_var['val']; ?></a>
   <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
   <?php endif; ?>
  </div>
   
</div>

      
   
 
</div>

