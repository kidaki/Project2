<?php
/**
 * File name: FileBased.php
 *
 * Project: Project1
 *
 * PHP version 5
 *
 * $LastChangedDate$
 * $LastChangedBy$
 */

namespace Common\Authentication;


class FileBased implements IAuthentication 
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

        if (($handle = fopen(__DIR__ . '/../../users.csv', "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                $file_user = $data[0];
                $file_pass = $data[1];
                if($username === $file_user and $password === $file_pass)
                {
                    return TRUE;
                    break;
                }
            }
            fclose($handle);
        }
        return FALSE;
    }
}
