<?php

namespace HelloWorld\Controllers;

public function sayHello(Twig $twig):string
{
    return $twig->render('HelloWorld::content.hello');
}

use Plenty\Plugin\Controller;
use Plenty\Plugin\Templates\Twig;

class ContentController extends Controller
{
    public function sayHello(Twig $twig):string
    {
        return $twig->render('HelloWorld::TEMPLATE');
    }
}
?>
