<?php
/**
 * Created by PhpStorm.
 * User: TaF
 * Date: 21/05/2015
 * Time: 12:47
 */

namespace Taf\Controllers;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class PageController {

    protected $twig;

    public function __construct(\Twig_Environment $twig)
    {
        $this->twig =$twig;
    }

    public function getHome()
    {
        return new Response(
            $this->render('index.html.twig', array())
        );
    }
    public function getContact()
    {
        return new Response(
            $this->render('contact.html.twig', array())
        );
    }

    public function getFaq()
    {
        return new Response(
            $this->render('faq.html.twig', array())
        );
    }

    public function getLogIn()
    {
        return new Response(
            $this->render('logIn.html.twig', array())
        );
    }

    public function getSignIn()
    {
        return new Response(
            $this->render('signIn.html.twig', array())
        );
    }
    public function getSignIn2()
    {
        return new Response(
            $this->render('signIn2.html.twig', array())
        );
    }
    protected function render($template, $variables)
    {
        $template =$this->twig->loadTemplate($template);

        return $template->render($variables);
    }
}