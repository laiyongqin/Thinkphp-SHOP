<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html class="no-js">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>购物商城后台管理系统</title>
<meta name="description" content="这是一个 index 页面">
<meta name="keywords" content="index">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<meta name="renderer" content="webkit">
<meta http-equiv="Cache-Control" content="no-siteapp" />
<link rel="icon" type="image/png" href="/Public/Admin/assets/i/favicon.png">
<link rel="apple-touch-icon-precomposed" href="/Public/Admin/assets/i/app-icon72x72@2x.png">
<meta name="apple-mobile-web-app-title" content="Amaze UI" />
<link rel="stylesheet" href="/Public/Admin/assets/css/amazeui.min.css"/>
<link rel="stylesheet" href="/Public/Admin/assets/css/admin.css">
<!-- <link rel="stylesheet" href="/Public/Admin/assets/css/amazeui.datatables.min.css" /> -->
<link rel="stylesheet" href="/Public/Admin/assets/css/font_awesome.css" />
<link rel="stylesheet" href="/Public/Admin/assets/css/app.css">
<link rel="stylesheet" type="text/css" href="/Public/Lib/lightbox/css/lightbox.css">
<script src="/Public/Admin/assets/js/jquery.min.js"></script>
<script src="/Public/Admin/assets/js/app.js"></script>
<!-- 分页 -->
<style type="text/css">
a.prev{
    border: 1px solid #DDD;
    margin: 4px;
    padding: 4px;
    padding: 0.2em .7em;
    font-weight: 400;
	font-size: 14px;
	text-decoration: none;
}
a.num{
    border: 1px solid #DDD;
    margin: 3px;
    padding: 3px;
    padding: 0.2em .7em;
    font-weight: 400;
	font-size: 14px;
	text-decoration: none;
}
span.current{
    border: 1px solid #0e90d2;
    margin: 4px;
    padding: 4px;
    color: #3E9AFF;
    z-index: 2;
    color: #fff;
    background-color: #0e90d2;
    padding: 0.2em .7em;
}
a.next{
    border: 1px solid #DDD;
    margin: 4px;
    padding: 4px;
    padding: 0.2em .7em;
    text-decoration: none;
}
        </style>
</head>
<body>
<div class="daohang">
      <ul>
        <li><button id="turnIndex" type="button" class="am-btn am-btn-default am-radius am-btn-xs"> 首页 </li>
        <li><button type="button" class="am-btn am-btn-default am-radius am-btn-xs">帮助中心<a href="javascript: void(0)" class="am-close am-close-spin" data-am-modal-close="">×</a></button></li> 
      </ul>
</div>
<div class="admin-biaogelist">
    <div class="listbiaoti am-cf">
      <ul class="am-icon-flag on"> 栏目名称</ul>
      
      <dl class="am-icon-home" style="float: right;"> 当前位置： 首页 &gt; <a href="/index.php/Admin/Category/lst">栏目列表</a></dl>
    </div>
	
    <div class="fbneirong">
      <form class="am-form" action="/index.php/Admin/Category/add" method="post">
        <div class="am-form-group am-cf">
          <div class="zuo">栏目名称：</div>
          <div class="you">
            <input type="text" name="cate_name" class="am-input-sm" id="doc-ipt-email-1" placeholder="请输入栏目名称">
          </div>
        </div>
        <div class="am-form-group am-cf">
          <div class="zuo">上级栏目：</div>
          <div class="you">
            <select name="cate_pid">
              <option value="0">请选择上级栏目</option>
              <?php if(is_array($cateData)): $i = 0; $__LIST__ = $cateData;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["cate_id"]); ?>"><?php echo (str_repeat('&emsp;',$vo["level"]*2)); echo ($vo["cate_name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
            </select>
          </div>
        </div>
        <div class="am-form-group am-cf">
          <div class="you" style="margin-left: 11%;">
              <button type="button" id="btnBack" class="am-btn am-btn-success am-round">返回</button>&nbsp;   &nbsp; <button type="submit" class="am-btn am-btn-secondary am-round">提交</button>
          </div>
        </div>
      </form>
    </div>
<script type="text/javascript">
    $('#btnBack').click(function(event) {
      window.location.href = '/index.php/Admin/Category/lst';
    });
</script>
			<div class="foods">
			      <ul>版权所有@2015</ul>
			      <dl><a href="" title="返回头部" class="am-icon-btn am-icon-arrow-up"></a></dl>  
			</div>
		</div>
	</body>


<!--[if lt IE 9]>
<script src="http://libs.baidu.com/jquery/1.11.1/jquery.min.js"></script>
<script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
<script src="/Public/Admin/assets/js/polyfill/rem.min.js"></script>
<script src="/Public/Admin/assets/js/polyfill/respond.min.js"></script>
<script src="/Public/Admin/assets/js/amazeui.legacy.js"></script>
<![endif]--> 

<!--[if (gte IE 9)|!(IE)]><!--> 
<script src="/Public/Admin/assets/js/amazeui.min.js"></script>
<!--<![endif]-->

</html>