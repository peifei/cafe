<?php
/**
 * Created by PhpStorm.
 * User: fxcm
 * Date: 2015/3/25
 * Time: 9:55
 */
namespace Common\Model;
use Think\Exception;
use Think\Model;

class AdminLoginModel extends Model  {
    public function generateSalt(){
        $char=array('a','b','c','d','e','f','g','h','i','j','k',
                    'l','m','n','o','p','q','r','s','t','u','v',
                    'w','x','y','z','A','B','C','D','E','F','G',
                    'H','I','J','K','L','M','N','O','P','Q','R',
                    'S','T','U','V','W','X','Y','Z','0','1','2',
                    '3','4','5','6','7','8','9'
        );
        $str='';
        for($i=0;$i<15;$i++){
            $num=rand(0,count($char));
            $str.=$char[$num];
        }
        return $str;
    }

    public function generatePwd($plainPwd,$salt){
        $pwd=md5($plainPwd.$salt);
        return $pwd;
    }

    public function editPwd(Array $info){
        $dbInfo=$this->where(array('id'=>$info['id']))->find();
        if(is_null($dbInfo)){
            throw new Exception('要编辑信息的用户不存在');
        }else{
            $salt=$this->generateSalt();
            $pwd=$this->generatePwd($info['pwd'],$salt);
            $info['pwd']=$pwd;
            $info['salt']=$salt;
            $this->where(array('id'=>$info['id']))->save($info);
        }
    }

    public function checkLogin(Array $info){
        $dbInfo=$this->where(array('name'=>$info['name']))->find();
        if(is_null($dbInfo)){
            throw new Exception('用户不存在');
        }else{
            $loginPwd=$this->generatePwd($info['pwd'],$dbInfo['salt']);
            if($loginPwd==$dbInfo['pwd']){
                return true;
            }else{
                throw new Exception('密码错误');
            }
        }
    }
}