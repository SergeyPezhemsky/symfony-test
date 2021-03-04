<?php

namespace App\DTO;

use App\DTO\AbstractDto;

/**
 * Class ItemDto
 * @package App\DTO
 */
class ItemDto extends AbstractDto
{
    public $id;
    public $parentId;
    public $name;
    public $date;
    public $isLeave;
    public $responsible;
}