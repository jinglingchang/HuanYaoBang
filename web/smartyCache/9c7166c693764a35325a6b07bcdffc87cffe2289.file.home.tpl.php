<?php /* Smarty version Smarty-3.0-RC2, created on 2016-05-16 19:29:07
         compiled from "/Users/shanhaokun/Desktop/Lev/Sites/employer_tool/Lib/Homepage/Tpl/Homepage/home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15301894575739af0367da86-97413578%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9c7166c693764a35325a6b07bcdffc87cffe2289' => 
    array (
      0 => '/Users/shanhaokun/Desktop/Lev/Sites/employer_tool/Lib/Homepage/Tpl/Homepage/home.tpl',
      1 => 1463395854,
    ),
  ),
  'nocache_hash' => '15301894575739af0367da86-97413578',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html>
<html>
<head>
  <title>Colossus</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <link href="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/layout/styles/layout.css" rel="stylesheet" type="text/css" media="all"></head>

<body id="top">

  <div class="wrapper row1">
    <header id="header" class="clear" style="height: 70px;"></header>
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <div class="wrapper" style="background: url('<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/image/slide22.jpg')">
    <div id="slider" class="clear" style="background:background: url('<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/image/slide22.jpg')">
      <!-- ################################################################################################ -->
      <div class="flexslider basicslider" style="width: 100%; height: 93vh">
            <div class="txtoverlay" style=" background: rgba(0,0,0,0.5);">
              <div class="cmentralise">
                <div class="verticalwrap" style="color: #fff">
                    <div>
                      <div style="height:180px;"></div>
                      <div style="font-size: 45px;">合众人之才</div> 
                      <div style="font-size: 18px;margin-top: 25px;">
                        共享 共赢  让闲置简历发挥价值
                      </div> 
                      <div style="width: 672px; margin: 0 auto; margin-top: 40px;">
                        <input type="text" name="serarch" placeholder="请输入关键字进行搜索" style="width: 550px;height: 54px;float: left; border: none;border-radius: 2px 0px 0px 2px;color: #333;padding-left: 10px;" id="searchValue" />
                        <button class="startSearch" style="height: 54px;border: none;width: 120px;font-size: 18px;font-weight: bold;background: #3398ff;border-radius: 0px 2px 2px 0px; cursor: pointer;">开始搜索</button>

                        <div style="clear: both;"></div>
                      </div>
                    </div>
                </div>
              </div>
            </div>
      </div>
      <!-- ################################################################################################ --> </div>
  </div>

  <div style="border:solid 1px none;">
     <?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('path')->value)."/footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
  </div>
  <!-- ################################################################################################ -->

  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->

  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->

  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->

  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->

  <script src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/javascript/check.js"></script>

  <script>
// meiqie
    (function(m, ei, q, i, a, j, s) {
        m[a] = m[a] || function() {
            (m[a].a = m[a].a || []).push(arguments)
        };
        j = ei.createElement(q),
            s = ei.getElementsByTagName(q)[0];
        j.async = true;
        j.charset = 'UTF-8';
        j.src = i + '?v=' + new Date().getUTCDate();
        s.parentNode.insertBefore(j, s);
    })(window, document, 'script', '//eco-api.meiqia.com/dist/meiqia.js', '_MEIQIA');
    _MEIQIA('entId', 8659);

    $(".startSearch").click(function(){

      var searchVal = $('#searchValue').val();

      if (!check.isEmpty(searchVal)) {
        goToSearchList(searchVal);
      }

    })
    $('#searchValue').bind('keypress',function(event){

      if(event.keyCode == "13")    
        {
         var searchVal = $('#searchValue').val();

          if (!check.isEmpty(searchVal)) {
            goToSearchList(searchVal);
          }
        }
    });


    function goToSearchList(key) {
      // body...

      window.location.href='<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
resume/newSearchResume?key='+key;

    }
</script>


  <!-- JAVASCRIPTS -->
  <script src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/layout/scripts/jquery.backtotop.js"></script>
  <script src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/layout/scripts/jquery.mobilemenu.js"></script>
  <script src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/layout/scripts/jquery.flexslider-min.js"></script>
</body>
</html>