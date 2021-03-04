<?php

namespace App\Controller;

use App\Service\ItemsService;
use Doctrine\ORM\EntityManager;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ItemsController extends AbstractController
{
    private $itemsService;

    public function __construct(ItemsService $itemsService)
    {
        $this->itemsService = $itemsService;
    }

    /**
     * @Route("/getItem/{id}", methods={"GET"})
     * @param $id
     * @return Response
     */
    public function getItem($id): Response
    {
        $item = $this->itemsService->getItems($id)->toDto();
        return new Response(json_encode($item));
    }
}