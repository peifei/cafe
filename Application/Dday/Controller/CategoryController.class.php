<?php
namespace Dday\Controller;
use Think\Controller;
use Common\Model\CategoryModel;
class CategoryController extends Controller {
    public function index(){

        $category=D('Category');
        $res=$category->select();
        $this->assign('categoryList',$res);
        $this->display();

    }

    public function add(){
        if(IS_POST){
            $cat=new CategoryModel();
            $cat->addNewCategory(I('post.'));
            //$this->redirect(SITE_BASE_URL.'Dday/Category',null,0);
            //redirect(SITE_BASE_URL.'Dday/Category');
            $this->success('新增成功', SITE_BASE_URL.'dday/category',0);
        }else{
            $this->assign('status',CategoryModel::$statusArr);
            $this->assign('i',1);
            $this->display();
        }
    }

    public function delete(){
        $id=I('id');
        $cat=D('Category');
        $cat->deleteCategory($id);
        $this->success('删除成功', SITE_BASE_URL.'dday/category',3);
        echo 'id is '.$id;
    }

    public function edit(){
        $id=I('get.id');
        $cat=new CategoryModel();
        if(IS_POST){
            $data=I('post.');
            $data['id']=$id;
            var_dump($data);
            $cat->editCategory($data);
            $this->success('修改成功', SITE_BASE_URL.'dday/category',3);
        }else{
            $res=$cat->where("id='".$id."'")->find();
            $this->assign('catInfo',$res);
            $this->display();
        }


    }
}