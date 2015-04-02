<?php
/**
 * Created by PhpStorm.
 * User: fxcm
 * Date: 2015/3/25
 * Time: 17:27
 */

namespace Common\Widget;
use Think\Controller;

class CommonWidget extends Controller {
    public function showNoticeMessage($msgType,$msg){
        $msgHtml='<div class="alert alert-'.$msgType.' alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>'.$msg.'
                 </div>';
        echo $msgHtml;
    }

} 