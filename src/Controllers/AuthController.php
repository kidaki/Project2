<?php
/**
 * File name: AuthController.php
 *
 * Project: Project1
 *
 * PHP version 5
 *
 * $LastChangedDate$
 * $LastChangedBy$
 */

namespace Controllers;

use Common\Authentication\FileBased;
use Common\Authentication\InMemory;
use Common\Authentication\DataBaseAuthentication;
use Common\Authentication\MySQL;
use Common\Authentication\SQLite;

use Views\AuthenticationSuccessView;
use Views\AuthenticationFailView;

/**
 * Class AuthController
 */
class AuthController extends Controller
{
    /**
     * Function execute
     *
     * @access public
     */
    public function action()
    {
        $authentications = [
            'filebased'     =>  new FileBased(),
            'inmemory'      =>  new InMemory(),
            'mysql'         =>  new DataBaseAuthentication('mysql'),
            'sqlite'        =>  new DataBaseAuthentication('sqlite'),
        ];
        
        $postData = $this->request->getPost();
        $auth = $authentications[$postData->auth];
        
        $view = new AuthenticationFailView();
        if($auth->authenticate($postData->username,$postData->password))
        {
            $view = new AuthenticationSuccessView();
        }
        
        $view->show();
        
    }
}
