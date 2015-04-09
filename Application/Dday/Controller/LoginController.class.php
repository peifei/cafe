<?php
namespace Dday\Controller;
use Think\Controller;
use Common\Model\AdminLoginModel;
use Think\Exception;

class LoginController extends Controller {
    public function index(){
        try{
            if(IS_POST){
                $post=I('post.');
                $adminLoginMd=new AdminLoginModel();
                if($adminLoginMd->checkLogin($post)){
                    session('loginAuthor',true);
                    redirect(SITE_BASE_URL.'dday');
                }
            }else{
                $this->display();
            }
        }catch (Exception $e){
            $this->assign('emsg',$e->getMessage());
            $this->display();
        }

    }

}