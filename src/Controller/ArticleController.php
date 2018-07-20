<?php
namespace App\Controller; 
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route ;
use Symfony\Component\HttpFoundation\Response ; 

class ArticleController 

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
            return new Response(sprintf('artcile  %s',$id));
        }
}


?>