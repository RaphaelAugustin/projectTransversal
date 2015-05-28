<?php
/**
 * Created by PhpStorm.
 * User: Taf
 * Date: 03/05/2015
 * Time: 18:46
 */

namespace Taf\Controllers;

use Symfony\Component\HttpFoundation\Request;
class UserController extends AbstractBaseController {
    protected $twig;

    public function __construct(\Twig_Environment $twig)
    {
        $this->twig =$twig;
    }

    public function userConnection(Request $request) {
        $userManager =  $this->getUserManager();
        $params = $request->request->all();
        $userManager->connect_user($params['login'], $params['password']);
        header('Location: index.php?p=home');
    }

    public function userCreate(Request $request) {
        $userManager = $this->getUserManager();
        $params = $request->request->all();
        var_dump($params);
        foreach ($params AS $data) {
            if (strlen($data) == 0) {
                header('Location: index.php?p=signIn');
                exit;

            }
        }

        $userManager->create_user($params);

    }
}