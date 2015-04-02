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


<?php if(is_array($status)): foreach($status as $k=>$vo): ?><label class="radio-inline">
        <input type="radio" name="status" value="<?php echo ($k); ?>"<?php if(($i == 1)): ?>checked<?php endif; ?> id="inlineRadio<?php echo ($i++); ?>">
        <?php echo ($vo); ?>
    </label><?php endforeach; endif; ?>

        </div><!--container-->
    </body>
</html>