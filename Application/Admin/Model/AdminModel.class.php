<?php
/**
 * Created by PhpStorm.
 * User: chen
 * Date: 2018/10/27
 * Time: 15:42
 */

namespace Admin\Model;
use Think\Model;

class AdminModel extends Model
{
    public function getLogin($ID,$passwd){
        $data = M('Admin');
        $result = $data->where("AdminID='$ID' and Adminpassword='$passwd'")->field('AID')->find();
        return $result;
    }
}