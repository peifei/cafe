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

class ItemModel extends Model  {
    const STATUS_NORMAL=0;          //普通状态
    const STATUS_HIDDEN=1;          //隐藏状态
    const STATUS_MAINPAGE_SHOW=2;   //主页显示

    public static $statusArr=array(
        self::STATUS_NORMAL         => '普通',
        self::STATUS_HIDDEN         => '隐藏',
        self::STATUS_MAINPAGE_SHOW  => '主页显示'
    );


    /**
     * @param array $data Item data
     */
    public function addNewItem(Array $data){
        $this->add($data);
    }

    public function deleteItem($id){
        $this->where(array('id'=>$id))->delete();
    }

    public function editItem(Array $data){
        $this->where(array('id'=>$data['id']))->save($data);
    }

    public function getItemsByCatIdAndStatus($catId,$status=null){
        if(is_null($status)){
            return $this->select();
        }else{
            return $this->where(array('cid'=>$catId,'status'=>$status))->select();
        }
    }
}