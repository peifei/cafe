<?php
/**
 * Created by PhpStorm.
 * User: fxcm
 * Date: 2015/3/25
 * Time: 17:27
 */

namespace Common\Widget;
use Common\Model\ItemModel;
use Common\Model\CategoryModel;
use Think\Controller;

class ItemWidget extends Controller {

    public function constructForm(Array $formData=null){
        if(!is_null($formData)){
            $this->assign('name',$formData['name']);
            $this->assign('price',$formData['price']);
            $this->assign('status_v',$formData['status']);
            $this->assign('cate_v',$formData['cid']);
            $this->assign('pic',$formData['pic']);
            $this->assign('desc',htmlspecialchars_decode($formData['desc']));
        }
        $this->assign('status',CategoryModel::$statusArr);
        $this->assign('i',1);
        $cate=new CategoryModel();
        $cates=$cate->getCategory();
        $this->assign('cates',$cates);
        layout(false);
        $this->display('Item:form');
    }


    public function statusConverter($itemStatus){
        echo ItemModel::$statusArr[$itemStatus];
    }

    /**
     * 生成form表单的状态选择html
     */
    public function renderStatusRadioHtml(){
        $this->assign('status',CategoryModel::$statusArr);
        $this->assign('i',1);
        $this->display('Category:radio');
    }

    public function showItems($cid){
        $itemDb=new ItemModel();
        $items=$itemDb->getItemsByCatIdAndStatus($cid,ItemModel::STATUS_MAINPAGE_SHOW);
        $html='';
        foreach($items as $item){
            $html.='<div class="col-md-3 col-sm-6 col-xs-12">
                <a class="imglink" href="#">
                    <img src="'.SITE_BASE_URL.'public/'.$item['pic'].'" class="img-thumbnail img-responsive"/>
                </a>
            </div>';
        }
        echo $html;
    }
} 