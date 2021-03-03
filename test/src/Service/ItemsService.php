<?php


namespace App\Service;


use App\Entity\ItemsEntity;
use Doctrine\ORM\EntityManagerInterface;

class ItemsService
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function getItems(int $id) : ItemsEntity
    {
        /** @var ItemsEntity $item */
        $item = $this->entityManager->getRepository(ItemsEntity::class)->findOneBy(
            ['id' => $id]);

        return $item;
    }
}