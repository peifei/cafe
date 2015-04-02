<?php
namespace Dday\Controller;
use Common\Model\CategoryModel;
use Think\Controller;
use Common\Model\ItemModel;
use Think\Exception;

class ItemController extends Controller {
    public function index(){

        $category=D('Item');
        $res=$category->select();
        $this->assign('itemList',$res);
        $this->display();

    }

    public function add(){
        try {
            if (IS_POST) {
                $postData = I('post.');
                $upload = new \Think\Upload();
                $upload->maxSize = 3145728;
                $upload->exts = array('jpg', 'gif', 'png', 'jpeg');
                $upload->rootPath = PUBLIC_PATH . 'images/items/';
                $upload->savePath = '';
                // 上传文件
                $info = $upload->upload();
                if (!$info) {// 如果出错
                    throw new Exception($upload->getError());
                } else {// 上传成功
                    //$this->success('上传成功！');
                    $postData['pic'] = 'images/items/' . $info['pic']['savepath'] . $info['pic']['savename'];
                    $postData['desc'] = $postData['editorValue'];
                    unset($postData['editorValue']);
                    var_dump($postData);
                    $item = new ItemModel();
                    $item->addNewItem($postData);
                }
                $this->success('添加新产品成功',SITE_BASE_URL.'dday/item',0);
            } else {
                $this->display();
            }
        } catch (Exception $e) {
            $this->error($e->getMessage());
        }
    }

    public function delete(){
        $id=I('id');
        $item=D('Item');
        $item->deleteItem($id);
        $this->success('删除成功', SITE_BASE_URL.'dday/item',3);
    }

    public function edit(){
        $id=I('get.id');
        $item=D('Item');
        if(IS_POST){
            $data=I('post.');
            $data['id']=$id;
            var_dump($data);
            if(!empty($_FILES['pic']['name'])){
                $upload = new \Think\Upload();
                $upload->maxSize = 3145728;
                $upload->exts = array('jpg', 'gif', 'png', 'jpeg');
                $upload->rootPath = PUBLIC_PATH . 'images/items/';
                $upload->savePath = '';
                // 上传文件
                $info = $upload->upload();
                if (!$info) {// 如果出错
                    throw new Exception($upload->getError());
                } else {// 上传成功
                    $data['pic'] = 'images/items/' . $info['pic']['savepath'] . $info['pic']['savename'];
                }
            }

            $data['desc'] = $data['editorValue'];
            unset($data['editorValue']);
            var_dump($data);
            $item = new ItemModel();
            $item->editItem($data);
            $this->success('添加新产品成功',SITE_BASE_URL.'dday/item',0);
        }else{
            $res=$item->where(array('id'=>$id))->find();
            $this->assign('item',$res);
            var_dump($res);
            $this->display();
        }


    }
}