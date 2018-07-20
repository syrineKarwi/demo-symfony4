<?php
namespace App\Controller; 
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route ;
use Symfony\Component\HttpFoundation\Response ; 
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ArticleController extends AbstractController

{
         /**
         * @Route("/")
         */
    public function homepage ()
    {
        return new Response('omg');
    }

         /**
         * @Route("/news/{id}")
         */
        public function show ($id)
        {
            $comments =[
              'coment1 hfrieesiulsqeuuuuuuuuuuuuuuuuuu',
              'coment2 gyy::::::::::::::::::::fffffffff' ,
              'coment3 yzulzteattyezaaaaaaaaaaaaaeyzaez'  ,
            ];
            dump($id,$this);
         return $this->render('article/show.html.twig',[
             'comments' => $comments ,
             ]);
        }
}


?>