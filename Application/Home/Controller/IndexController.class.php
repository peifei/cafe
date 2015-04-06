<?php
namespace Home\Controller;
use Common\Model\CategoryModel;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $catDb=new CategoryModel();
        $cates=$catDb->getCategory(CategoryModel::STATUS_MAINPAGE_SHOW);
        $this->assign('cates',$cates);
        $this->display();
    }

    public function hello(){
        echo 'hello';
        $this->display();
    }
}