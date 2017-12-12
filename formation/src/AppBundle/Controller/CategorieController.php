<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 12/12/2017
 * Time: 13:22
 */

namespace AppBundle\Controller;

use AppBundle\Entity\Categorie;
use AppBundle\Entity\Livres;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class CategorieController extends Controller
{
    /**
     * @Route("/categorie", name="categorie")
     */

    public function indexCategorie(){
        $doctrine = $this->getDoctrine();
        $repository = $doctrine->getRepository(Categorie::class);
        $results = $repository->findAll();
        return $this->render('categorie/index.html.twig', [
            'results' => $results
        ]);
    }


    /**
     * @Route("/categorie/{id}", name="categorieList", defaults={"id" = null})
     */
    public function listCateg($id)
    {
        $doctrine = $this->getDoctrine();
        $repository = $doctrine->getRepository(Categorie::class);
        $results = $repository->find($id);
        return $this->render('categorie/livre.html.twig', [
            'results'=>$results
        ]);
    }
    /**
     * @Route("categorie/livre/{id}", name="detail.id", defaults={"id" = null})
     */
    public function detail($id)
    {
        $doctrine = $this->getDoctrine();
        $repository = $doctrine->getRepository(Livres::class);
        $results = $repository->find($id);
        return $this->render('categorie/detail.html.twig', [
            'result'=>$results
        ]);
    }
}