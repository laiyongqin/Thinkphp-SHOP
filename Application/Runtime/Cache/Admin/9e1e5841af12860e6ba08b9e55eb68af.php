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
      <ul class="am-icon-users"> 商品类型管理</ul>
      <dl class="am-icon-home" style="float: right;"> 当前位置： 首页 &gt; <a href="/index.php/Admin/Type/lst">商品类型列表</a></dl>
      
      <dl>
        <button type="button" id="add" class="am-btn am-btn-danger am-round am-btn-xs am-icon-plus"> 添加商品类型</button>
      </dl>
      <!--这里打开的是新页面-->
    </div>
    <form class="am-form am-g">
          <table width="100%" class="am-table am-table-bordered am-table-radius am-table-striped">
            <thead>
              <tr class="am-success">
                <th class="table-id">序号</th>
                <th class="table-title">商品类型名称</th>
                <th class="table-title">备注</th>
                <th width="150px" class="table-set">操作</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($TypeData as $k => $v): ?>
                <tr class="tr1">
                  <td class="td1"><?php echo $v['type_id'];?></td>
                  <td><?php echo $v['type_name'];?></td>
                  <td><?php echo $v['mark_up'];?></td>
                  <td>    
                        <a href="/index.php/Admin/Type/showAttr/id/<?php echo $v['type_id'] ?>"><button type="button" class="am-btn am-btn-default am-btn-xs am-text-secondary am-round" title="属性列表"><span class="am-icon-search"></span></button></a>

                        <a href="/index.php/Admin/Type/edt/id/<?php echo $v['type_id'] ?>"><button type="button" class="am-btn am-btn-default am-btn-xs am-text-secondary am-round" title="修改"><span class="am-icon-pencil-square-o"></span></button></a>

                        <a href="/index.php/Admin/Type/del/id/<?php echo $v['type_id'] ?>" onclick="return confirm('确定要删除吗')" ><button type="button" class="am-btn am-btn-default am-btn-xs am-text-secondary am-round" title="删除"><span class="am-icon-trash-o"></span></button></a>
                  </td>
                </tr>
              <?php endforeach ?>
            </tbody>
          </table>
          <ul class="am-pagination am-fr">
                <li class="am-disabled"><a href="#">«</a></li>
                <li class="am-active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">»</a></li>
              </ul>
          <hr>
    </form>
<script type="text/javascript">
$('#edit').click(function(){
      console.log($(this).parent().parent().parent().parent('.tr1').find('.td1').text());

});
  $('#add').click(function(){
    // window.location.href = "<?php echo U('User/add');?>";
    // window.location.href = '/index.php/Admin/Type/del/id/' + str;
    window.location.href = '/index.php/Admin/Type/add';
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