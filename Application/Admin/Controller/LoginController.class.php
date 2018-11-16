<?php
/**
 * Created by PhpStorm.
 * User: chen
 * Date: 2018/10/23
 * Time: 10:52
 */

namespace Admin\Controller;


use Admin\Model\AdminModel;
use Think\Controller;

class LoginController extends Controller
{
    public function index(){
        $this->display();
    }

    public function loginAction()
    {
        $user['ID'] = $_POST['ID'];
        $user['password'] = md5($_POST['password']);
        echo json_encode($user);

//        $data = new AdminModel();
//        $result = $data->getLogin($ID,$password);
//
//        if(empty($result)){
//            echo 'fail';
//        }else{
//            $_SESSION['AID']=$result['AID'];
//            $_SESSION['admin']=$ID;
//            $this->redirect('Index/index');
//        }
    }
}