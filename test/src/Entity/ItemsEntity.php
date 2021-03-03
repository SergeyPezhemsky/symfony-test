<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class ItemsEntity
 * @package App\Entity
 * @ORM\Entity()
 * @ORM\Table(name="public.struct")
 */

class ItemsEntity
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

}