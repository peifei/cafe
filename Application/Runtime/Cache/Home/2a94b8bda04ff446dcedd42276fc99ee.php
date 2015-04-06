<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>cafe</title>

    <!-- Bootstrap -->
    <link href="/cafe/Public/css/bootstrap.min.css" rel="stylesheet">
    <link href="/cafe/Public/css/theme.css" rel="stylesheet">

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="/cafe/Public/js/jquery-1.10.2.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/cafe/Public/js/bootstrap.min.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="/cafe/Public/js/html5shiv.min.js"></script>
    <script src="/cafe/Public/js/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="container">
    <div id="header" style="position: relative">
        <div style="position: absolute;width: 100%" id="xytn">
            <nav class="navbar navbar-default navbar-static-top">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <div class="col-lg-11 col-md-10 col-sm-10 col-xs-4 col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-xs-offset-1">
                            <a class="my-brand1" href="http://127.0.0.1/cafe/">
                                <img src="./public/images/decorator/logo_with_shadow.png" class="img-responsive"/>
                            </a>
                        </div>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                            <?php echo W('Common/Cate/showNavCat');?>
                        </ul>
                    </div><!--/.nav-collapse -->
                </div>
            </nav>

        </div>

        <img src="./public/images/decorator/head_bg_2.jpg" class="img-responsive"/>

    </div>



    <div id="content">
        <div id="content">
    <?php if(is_array($cates)): foreach($cates as $key=>$cate): ?><div class="column">
            <div class="column-title clearfix">
                <span class="col-lg-3 col-md-3 col-sm-3 col-xs-4"><img src="./public/images/decorator/left.png" class="img-responsive"/></span>
                <span class="col-lg-1 col-md-2 col-sm-2 col-xs-3" style="text-align: center"><?php echo ($cate["name"]); ?></span>
                <span class="col-lg-3 col-md-3 col-sm-3 col-xs-4"><img src="./public/images/decorator/right.png" class="img-responsive"/></span>
            </div>
            <div class="row" style="padding: 0 20px">
                <?php echo W('Common/Item/showItems',array($cate['id']));?>
            </div>
        </div><?php endforeach; endif; ?>

    </div>
<div id="footer">
    <div class="clearfix brown_line"></div>
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
            <div class="footer_info">
                <h4>西亚.唐尼 咖啡</h4>
                <p>地址：这里是地址这里是地址这里是地址这里是地址</p>
                <p>电话：1232131232313</p>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">

        </div>
    </div>
</div>
</div>
</body>
</html>