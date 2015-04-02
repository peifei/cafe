<?php if (!defined('THINK_PATH')) exit();?><link href="/cafe/Public/um/themes/default/css/umeditor.css" type="text/css" rel="stylesheet">
<script type="text/javascript" charset="utf-8" src="/cafe/Public/um/umeditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="/cafe/Public/um/umeditor.min.js"></script>
<script type="text/javascript" src="/cafe/Public/um/lang/zh-cn/zh-cn.js"></script>
<form action="/cafe/dday/item/edit?id=4" method="post" id="item_form" enctype="multipart/form-data">
    <div class="form-group">
        <label for="name">请输入产品名</label>
        <input type="text" id="name" name="name" class="form-control" placeholer="产品名"<?php echo isset($name)?'value="'.$name.'"':'' ?> />
    </div>

    <div class="form-group">
        <label for="price">请输入价格</label>
        <input type="text" id="price" name="price" class="form-control" placeholer="价格" <?php echo isset($price)?'value="'.$price.'"':'' ?> />
    </div>

    <div class="radio">
        <fieldset>
            <legend class="mylegend">选择产品显示类型</legend>
            <?php if(is_array($status)): foreach($status as $k=>$vo): ?><label class="radio-inline">
                    <input type="radio" name="status" value="<?php echo ($k); ?>"
                    <?php
 if(isset($status_v)){ if($k==$status_v){ echo 'checked="checked"'; } }elseif($i==1){ echo 'checked="checked"'; } ?> id="inlineRadio<?php echo ($i++); ?>" />
                    <?php echo ($vo); ?>
                </label><?php endforeach; endif; ?>
        </fieldset>
    </div>
    <div class="form-group">
        <label for="cid">请选择产品所属类别<?php echo ($cate_v); ?></label>
        <select class="form-control" name="cid" id="cid">
            <?php if(is_array($cates)): foreach($cates as $k=>$cate): ?><option value="<?php echo ($cate['id']); ?>"
                    <?php
 if(isset($cate_v)&&$cate_v==$cate['id']){ echo 'selected="selected"'; } ?>
                ><?php echo ($cate['name']); ?></option><?php endforeach; endif; ?>
        </select>
    </div>
    <div class="form-group">
        <label for="pic">请上传产品图片</label>
        <input type="file" id="pic" name="pic" />
        <?php
 if(isset($pic)){ echo '<label>现存储图像为:</label>'; echo '<img src="http://127.0.0.1/cafe/Public/'.$pic.'" height="30px"/>'; } ?>
    </div>
    <div class="form-group">
        <label for="myEditor">请输入产品描述信息</label>
        <script type="text/plain" id="myEditor" style="width:100%;height:200px">
            <?php
 if(isset($desc)){ echo $desc; }else{ echo '<p>请输入800字以内的描述信息</p>'; } ?>

        </script>
    </div>
    <button type="submit" class="btn btn-primary btn-block">提交</button>
</form>
<script type="text/javascript">
    //实例化编辑器
    var um = UM.getEditor('myEditor');
</script>