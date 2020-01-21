<?php

//rotas 

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbastractController;
use Symfony\Component\Routing\Annotation\Route;

class PhotoController extends Controller{

    //@Route("/test", name="test_list")

    public function list()
    {
        //list
        
        $photo = random_int(0,100);

        //return $this->render('blog/test.php'), [
          //  'number' => $photo,
        //]);

    }
}

