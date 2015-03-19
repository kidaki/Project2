<?php
/**
 * File name: InMemory.php
 *
 * Project: Project1
 *
 * PHP version 5
 *
 * $LastChangedDate$
 * $LastChangedBy$
 */

namespace Common\Authentication;


class InMemory implements IAuthentication 
{
    /**
     * Function authenticate
     *
     * @param string $username
     * @param string $password
     * @return mixed
     *
     * @access public
     */
    public function authenticate($username, $password)
    {
        if($username === 'david' and $password === 'test')
        {
            return TRUE;
        }
        return FALSE;
    }
}
