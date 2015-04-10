<?php if (!defined('THINK_PATH')) exit(); if(session('?loginAuthor')){ ?>
<!DOCTYPE html>
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
                <a class="navbar-brand" href="http://127.0.0.1/cafe/dday">西娅.唐尼-后台</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-left">
                    <li><a href="http://127.0.0.1/cafe/dday/category">类别管理</a></li>
                    <li><a href="http://127.0.0.1/cafe/dday/item">商品管理</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="http://127.0.0.1/cafe/dday/logout">退出</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">


<?php }else{ ?>
<!DOCTYPE html>
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
                <a class="navbar-brand" href="http://127.0.0.1/cafe/dday">西娅.唐尼-后台</a>
            </div>
        </div>
    </nav>
    <div class="container">


<?php } ?>
<!--<?php echo W('Common/Common/showNoticeMessage',array('success','this is message'));?>-->
<h3 class="page-header">产品列表<span class="pull-right"><a href="http://127.0.0.1/cafe/dday/item/add" class="btn btn-primary btn-sm">添加新产品</a> </span></h3>

<div id="item_list">
<?php if(is_array($itemList)): foreach($itemList as $key=>$item): ?><div class="row">
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 picp">
            <img src="http://127.0.0.1/cafe//Public/<?php echo ($item["pic"]); ?>" class="img-responsive img-thumbnail" />
        </div>
        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 textp">
            <p><b>产品id：</b><?php echo ($item["id"]); ?></p>
            <p><b>产品名称：</b><?php echo ($item["name"]); ?></p>
            <p><b>产品价格：</b><?php echo ($item["price"]); ?></p>
            <p><b>所属分类：</b><?php echo W('Common/Cate/cateNameConverter',array($item['cid']));?></p>
            <p><b>产品状态：</b><?php echo W('Common/Item/statusConverter',array($item['status']));?></p>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 btnp">
            <span class="col-lg-12 col-md-12 col-sm-12 col-xs-2">
                <a href="http://127.0.0.1/cafe/dday/item/delete?id=<?php echo ($item["id"]); ?>" class="btn btn-primary btn-sm">删除</a>
            </span>
            <span class="col-lg-12 col-md-12 col-sm-12 col-xs-2">
                <a href="http://127.0.0.1/cafe/dday/item/edit?id=<?php echo ($item["id"]); ?>" class="btn btn-primary btn-sm">修改</a>&nbsp;&nbsp;
            </span>
            <span class="col-lg-12 col-md-12 col-sm-12 col-xs-2">
                <a href="http://127.0.0.1/cafe/home/item?id=<?php echo ($item["id"]); ?>" class="btn btn-primary btn-sm" target="_blank">查看页面</a>
            </span>
        </div>
    </div><?php endforeach; endif; ?>

</div>
        </div><!--container-->
    </body>
</html>