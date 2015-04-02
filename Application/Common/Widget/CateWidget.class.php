<?php
/**
 * Created by PhpStorm.
 * User: fxcm
 * Date: 2015/3/25
 * Time: 17:27
 */

namespace Common\Widget;
use Common\Model\CategoryModel;
use Think\Controller;

class CateWidget extends Controller {

    public function constructForm(Array $formData=null){
        if(!is_null($formData)){
            $this->assign('name',$formData['name']);
            $this->assign('mark',$formData['mark']);
            $this->assign('status_v',$formData['status']);
        }
        $this->assign('status',CategoryModel::$statusArr);
        $this->assign('i',1);
        layout(false);
        $this->display('Category:form');
    }

    public function cateNameConverter($cid){
        $cat=new CategoryModel();
        echo $cat->getCateNameById($cid);
    }


    public function statusConverter($catStatus){
        echo CategoryModel::$statusArr[$catStatus];
    }

    /**
     * 生成form表单的状态选择html
     */
    public function renderStatusRadioHtml(){
        $this->assign('status',CategoryModel::$statusArr);
        $this->assign('i',1);
        $this->display('Category:radio');
    }

    public function testAb($var1,$var2){
        echo 'bbbbbbbbb'.$var1;
    }
} 