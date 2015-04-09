<?php
/**
 * Created by PhpStorm.
 * User: fxcm
 * Date: 2015/4/9
 * Time: 15:35
 */
namespace Dday\Behaviors;
use Think\Behavior;
class LoginCheckBehavior extends Behavior {
    public function run(&$param){
        if(!session('?loginAuthor')){
            if(!('Dday'==MODULE_NAME&&'Login'==CONTROLLER_NAME)){
                redirect(SITE_BASE_URL.'dday/login');
            }
        }
    }
} 