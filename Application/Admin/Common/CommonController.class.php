<?php
/**
 * Created by PhpStorm.
 * User: chen
 * Date: 2018/10/27
 * Time: 15:17
 */

namespace Admin\Common;


use Think\Controller;

class CommonController extends Controller
{
    public function _initialize(){
        $AID = $_SESSION['AID'];
        if(empty($AID) || !isset($AID)){
            $this->redirect("Login/index");
        }
    }
}