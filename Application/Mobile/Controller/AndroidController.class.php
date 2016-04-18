<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 15-5-19
 * Time: 下午1:50
 */
namespace Mobile\Controller;
use Mobile\Libs\Response;
class AndroidController extends CommonController {
    /**
     * 手机升级检测
     */
    public function version(){
        $model=M('MobileVersion');
        $list=$model->order('id desc')->find();
        if($list){
            $data=array(
                'version'       =>  $list['version'],
                'introduction'  =>  $list['introduction'],
                'force'         =>  $list['force'],
                'download'      =>  $list['download'],
            );
            Response::json(1,'操作成功', $data);
        }else{
            $data=array(
                'data' => '',
            );
            Response::json(0,'操作失败，请重试', $data);
        }
    }
}