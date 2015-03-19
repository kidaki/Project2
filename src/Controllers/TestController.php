<?php
/**
 * File name: TestController.php
 *
 * Project: Project1
 *
 * PHP version 5
 *
 * $LastChangedDate$
 * $LastChangedBy$
 */

namespace Controllers;


use Views\TestView;

/**
 * Class TestController
 */
class TestController extends Controller
{

    /**
     * Function execute - Executes the controllers main action
     *
     * @return mixed
     *
     * @access public
     */
    public function action()
    {
        phpinfo();
        var_dump($config);
        $view = new TestView();
        $view->show();
    }
}
