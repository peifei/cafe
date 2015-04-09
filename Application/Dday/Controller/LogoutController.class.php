<?php
namespace Dday\Controller;
use Think\Controller;
class LogoutController extends Controller {
    public function index(){
        if(session('?loginAuthor')){
            session('loginAuthor',null);
        }
        redirect(SITE_BASE_URL.'dday');
    }
}