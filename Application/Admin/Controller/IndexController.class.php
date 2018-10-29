<?php
/**
 * Created by PhpStorm.
 * User: chen
 * Date: 2018/10/23
 * Time: 10:40
 */

namespace Admin\Controller;

use Admin\Common\CommonController;

class IndexController extends CommonController
{
    public function index(){
        echo $_SESSION['AID'];
        $this->display();
    }
}