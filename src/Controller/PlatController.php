<?php

namespace App\Controller;


use App\Repository\PlatRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;



class PlatController extends AbstractController
{
    
    #[Route('/plat', name: 'app_plat')]
    
   public function index(PlatRepository $repository): Response
    {
       
        return $this->render('home/index.html.twig', [
          
            "plats" => $repository->findAll(), 
          
        ]);  
    } 

  /*   public function index(PlatRepository $repository, EntityManagerInterface $manager): Response
    {
    $entityManager = $this->getDoctrine()->getManager();
    $platRepository = $entityManager->getRepository(Plat::class);
    $plats = $platRepository->findAll();

    return $this->render('home/index.html.twig', [
        'plats' => $plats,
    ]);
} */
}

