<?php
namespace Admin\Controller;
use Think\Controller;
class ClubController extends CommonController{
	/**
   * 待审核社团
   * @author fangdong 
   */
   public function index(){
      $where['status'] = 0;  //0待审核，1通过，2驳回，3删除到回收站
      $list = M('club')->where($where)->order('id DESC')->select();
      $this->list=$list;
      $this->display();
    }
  /**
   * 社团的申请资料展示
   * @author fangdong 
   */
  public function showClub(){
      $clubID = I('id');
      if(!$clubID){
            ajax_return('缺少查询的条件',C('NoSearchCondition'),'NoSearchCondition');
        }
      $clubInfo=M('club')->where(array('id'=>$clubID))->find();
      $this->club=$clubInfo;
      $this->display();
   }
  /**
   * 通过
   * @author fangdong
   */
   public function pass(){
        $clubID = I('id');
        if(!$clubID){
            ajax_return('缺少查询的条件',C('NoSearchCondition'),'NoSearchCondition');
        }
        $data['status'] = 1;  //通过
        $alter=M('club')->where(array('id'=>$clubID))->save($data);
        if($alter){
            ajax_return('通过成功',C('Ok'),'Ok');
        }else{
            ajax_return('通过失败',C('Error'),'Error');
       }
   }
/**
 * 驳回
 * @author fangdong
 */
   public function reject(){
        $clubID = I('id');
        if(!$clubID){
            ajax_return('缺少查询的条件',C('NoSearchCondition'),'NoSearchCondition');
        }
        $data['status'] = 2; //驳回
        $alter=M('club')->where(array('id'=>$clubID))->save($data);
        if($alter){
            ajax_return('驳回成功',C('Ok'),'Ok');
        }else{
            ajax_return('驳回失败',C('Error'),'Error');
      }
   }
  /**
   * 回收站
   * @author fangdong
   */
   public function recycle(){
      $where['status'] = 3;  //删除
      $list = M('club')->where($where)->order('id DESC')->select();
      $this->list=$list;
      $this->display();
    }
  /**
   * 删除到回收站
   * @author fangdong
   */
   public function delete(){
        $clubID = I('id');
        if(!$clubID){
            ajax_return('缺少查询的条件',C('NoSearchCondition'),'NoSearchCondition');
        }
        $data['status'] = 3; //删除
        $alter=M('club')->where(array('id'=>$clubID))->save($data);
        if($alter){
            ajax_return('删除成功',C('Ok'),'Ok');
        }else{
            ajax_return('删除失败',C('Error'),'Error');
      }
   }
  /**
   * 还原
   * @author fangdong
   */

   public function recover(){
        $clubID = I('id');
        if(!$clubID){
            ajax_return('缺少查询的条件',C('NoSearchCondition'),'NoSearchCondition');
        }
        $data['status'] = 0;  //待审核
        $alter=M('club')->where(array('id'=>$clubID))->save($data);
        if($alter){
             ajax_return('还原成功',C('Ok'),'Ok');
        }else{
             ajax_return('失败',C('Error'),'Error');
      }
   }
  /**
   * 已通过社团
   * @author fangdong
   */
   public function passedClub(){
        $where['status'] = 1;  //通过
        $list = M('club')->where($where)->order('id DESC')->select();
        $this->list=$list;
        $this->display();
   }
  /**
    * 已通过社团的详细资料展示
    * @author fangdong
    */
   public function showPassedClub(){
      $clubID = I('id');
      if(!$clubID){
            ajax_return('缺少查询的条件',C('NoSearchCondition'),'NoSearchCondition');
        }
      $clubInfo=M('club')->where(array('id'=>$clubID))->find();
      $this->club=$clubInfo;
      $this->display();
   }
    /**
    * 已删除社团的详细资料展示
    * @author fangdong
    */
   public function showDeleteClub(){
      $clubID = I('id');
      if(!$clubID){
            ajax_return('缺少查询的条件',C('NoSearchCondition'),'NoSearchCondition');
        }
      $memberInfo=M('club')->where(array('id'=>$clubID))->find();
      $this->club=$memberInfo;
      $this->display();
   }
}

