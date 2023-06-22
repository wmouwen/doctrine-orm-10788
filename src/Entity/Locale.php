<?php

namespace Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Enum\LocaleCode;

#[ORM\Entity, ORM\Table]
class Locale
{
    #[ORM\Id]
    #[ORM\Column(name: 'code', type: Types::STRING, enumType: LocaleCode::class)]
    public LocaleCode $code;
}