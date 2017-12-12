<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 11/12/2017
 * Time: 13:41
 */

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;


class CoursesController extends Controller
{
    /**
     * @Route("/courses", name="courses")
     */

    public function indexAction(){
        return $this->render('courses/index.html.twig');
    }
}