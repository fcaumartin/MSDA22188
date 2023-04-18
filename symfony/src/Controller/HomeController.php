<?php

namespace App\Controller;

use App\Entity\Categorie;
use App\Repository\PlatRepository;
use App\Repository\CategorieRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(PlatRepository $repo): Response
    {
        $liste = $repo->findAll();

        return $this->render('home/index.html.twig', [
            "liste" => $liste
        ]);
    }

    #[Route('/categories', name: 'app_home2')]
    public function home2(CategorieRepository $repo): Response
    {
        $liste = $repo->findAll();

        return $this->render('home/home2.html.twig', [
            "liste" => $liste    
        ]);
    }

    #[Route('/details/{id}', name: 'app_home3')]
    public function home3($id, PlatRepository $repo): Response
    {
        
        $liste = $repo->findBy([ "categorie" => $id ]);

        // dd($liste);

        return $this->render('home/home3.html.twig', [
            "liste" => $liste
        ]);
    }

    #[Route('/details2/{id}', name: 'app_home4')]
    public function home4($id, CategorieRepository $repo): Response
    {
        
        $categorie = $repo->find($id);
        $liste = $categorie->getPlats();

        // dd($liste);

        return $this->render('home/home3.html.twig', [
            "liste" => $liste
        ]);
    }

    #[Route('/details3/{categorie}', name: 'app_home5')]
    public function home5(Categorie $categorie): Response
    {
        

        // dd($liste);

        return $this->render('home/home3.html.twig', [
            "categorie" => $categorie
        ]);
    }
}
