<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Form\PostType;
use App\Entity\Post;

class MainController extends AbstractController
{
    #[Route('/', name: 'app_main')]
    public function index(): Response
    {
        return $this->render('main/index.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }

    #[Route('/create-post', name: 'create-post')]
    public function createPost(): Response
    {
        $post = new Post();
        $form = $this->createForm(PostType::class, $post);
        return $this->render('main/create-post.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
