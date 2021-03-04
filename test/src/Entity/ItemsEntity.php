<?php

namespace App\Entity;

use App\DTO\ItemDto;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class ItemsEntity
 * @package App\Entity
 * @ORM\Entity()
 * @ORM\Table(name="public.struct")
 */

class ItemsEntity extends TransferableEntity
{

    /**
     * @ORM\Id()
     * @ORM\Column(name="id", type="integer")
     * @var integer
     */
    private $id;

    /**
     * @ORM\Column(name="parent_id", type="integer")
     * @var integer
     */
    private $parentId;

    /**
     * @ORM\Column(name="name", type="string")
     * @var string
     */
    private $name;

    /**
     * @ORM\Column(name="date", type="string")
     * @var string
     */
    private $date;

    /**
     * @ORM\Column(name="is_leave", type="boolean")
     * @var boolean
     */
    private $isLeave;

    /**
     * @ORM\Column(name="responsible", type="string")
     * @var string
     */
    private $responsible;

    /**
     * @return int
     */
    public function getId(): int {
        return $this->id;
    }

    /**
     * @return int
     */
    public function getParentId(): ?int {
        return $this->parentId;
    }

    /**
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getDate(): ?string
    {
        return $this->date;
    }


    /**
     * @return string
     */
    public function getResponsible(): ?string
    {
        return $this->responsible;
    }


    /**
     * @return bool
     */
    public function getIsLeave(): ?bool
    {
        return $this->isLeave;
    }

    /**
     * @return ItemDto
     */
    public function getEntityDtoObject(): ItemDto
    {
        return new ItemDto();
    }
}