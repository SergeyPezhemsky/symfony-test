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
     * @param Request $request
     * @return Response
     */
    public function getItem(Request $request)
    {
        $id = $request->query->get('id');
        $item = $this->itemsService->getItems($id);

        return new Response('hj');
    }
}