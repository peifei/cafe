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

class CategoryModel extends Model  {
    const STATUS_NORMAL=0;          //普通状态
    const STATUS_HIDDEN=1;          //隐藏状态
    const STATUS_MAINPAGE_SHOW=2;   //主页显示

    public static $statusArr=array(
        self::STATUS_NORMAL         => '普通',
        self::STATUS_HIDDEN         => '隐藏',
        self::STATUS_MAINPAGE_SHOW  => '主页显示'
    );


    /**
     * @param array $data category data
     */
    public function addNewCategory(Array $data){
        $this->add($data);
    }

    public function deleteCategory($id){
        $this->startTrans();
        try{
            $this->where('id='.$id)->delete();
            //TODO 删除分类下商品
            $this->commit();
        }catch (Exception $e){
            $this->rollback();
        }
    }

    public function editCategory(Array $data){
        $this->where('id='.$data['id'])->save($data);
    }

    public function getCategory($status=null){
        if(is_null($status)){
            return $this->select();
        }else{
            return $this->where(array('status'=>$status))->select();
        }
    }

    public function getCateNameById($id){
        $res=$this->where(array('id'=>$id))->find();
        return $res['name'];
    }
}