<?php
namespace Home\Controller;
use Common\Model\ItemModel;
use Think\Controller;
class ItemController extends Controller {
    public function index(){
        $id=I('id');
        $itemMd=new ItemModel();
        $item=$itemMd->getItemById($id);
        $this->assign('item',$item);
        $this->display();
    }

}