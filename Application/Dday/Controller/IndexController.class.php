<?php
namespace Dday\Controller;
use Think\Controller;
use Home\Model\CategoryModel;
class IndexController extends Controller {
    public function index(){
        $this->display();
    }
}