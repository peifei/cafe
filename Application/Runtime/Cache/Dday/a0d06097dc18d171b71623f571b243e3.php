<?php if (!defined('THINK_PATH')) exit();?><form action="/cafe/dday/category/add" method="post">
    <div class="form-group">
        <label for="name">请输入分类名</label>
        <input type="text" id="name" name="name" class="form-control" placeholer="分类名"<?php echo $name?'value="'.$name.'"':'' ?> />
    </div>

    <div class="form-group">
        <label for="mark">请输入分类字母标识（此标识在url中出现，请使用有意义的英文或拼音）</label>
        <input type="text" id="mark" name="mark" class="form-control" placeholer="分类字母标识" <?php echo $mark?'value="'.$mark.'"':'' ?> />
    </div>
    <div class="radio">
        <fieldset>
            <legend class="mylegend">选择分类显示类型</legend>
            <?php if(is_array($status)): foreach($status as $k=>$vo): ?><label class="radio-inline">
                    <input type="radio" name="status" value="<?php echo ($k); ?>"
                    <?php
 if(isset($status_v)){ if($k==$status_v){ echo 'checked="checked"'; } }elseif($i==1){ echo 'checked="checked"'; } ?> id="inlineRadio<?php echo ($i++); ?>" />
                    <?php echo ($vo); ?>
                </label><?php endforeach; endif; ?>
        </fieldset>

    </div>
    <button type="submit" class="btn btn-primary btn-block">添加</button>
</form>