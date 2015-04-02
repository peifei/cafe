<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>cafe</title>

    <!-- Bootstrap -->
    <link href="/cafe/Public/css/bootstrap.min.css" rel="stylesheet">
    <link href="/cafe/Public/css/dashboard.css" rel="stylesheet">

    <script src="/cafe/Public/js/jquery-1.10.2.min.js"></script>
    <script src="/cafe/Public/js/bootstrap.min.js"></script>

    <!--[if lt IE 9]>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <script src="/cafe/Public/js/html5shiv.min.js"></script>
    <script src="/cafe/Public/js/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">主页</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-left">
                    <li><a href="#">类别管理</a></li>
                    <li><a href="#">商品管理</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">


<?php echo W('Common/Common/showNoticeMessage',array('success','this is message'));?>
<h3 class="page-header">分类列表<span class="pull-right"><a href="http://127.0.0.1/cafe/dday/category/add" class="btn btn-primary btn-sm">添加新分类</a> </span></h3>
<table class="table table-responsive table-striped">
    <tr>
        <th>分类编号</th>
        <th>分类名称</th>
        <th>分类字母标识</th>
        <th>分类状态</th>
        <th>操作</th>
    </tr>
    <?php if(is_array($categoryList)): foreach($categoryList as $key=>$category): ?><tr>
            <th><?php echo ($category["id"]); ?></th>
            <th><?php echo ($category["name"]); ?></th>
            <th><?php echo ($category["mark"]); ?></th>
            <th>
                <?php echo W('Common/Cate/statusConverter',array($category['status']));?>
            </th>
            <th><a href="http://127.0.0.1/cafe/dday/category/delete?id=<?php echo ($category["id"]); ?>" class="btn btn-primary btn-xs">删除</a>&nbsp;&nbsp;
                <a href="http://127.0.0.1/cafe/dday/category/edit?id=<?php echo ($category["id"]); ?>" class="btn btn-primary btn-xs">修改</a> </th>
        </tr><?php endforeach; endif; ?>
</table>
        </div><!--container-->
    </body>
</html>