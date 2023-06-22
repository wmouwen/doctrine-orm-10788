<?php

namespace Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity, ORM\Table]
class CategoryLocale
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: 'id', type: Types::INTEGER)]
    public int $id;

    #[ORM\ManyToOne(targetEntity: \Entity\Locale::class, cascade: ['persist'])]
    #[ORM\JoinColumn(name: 'locale_code', referencedColumnName: 'code', nullable: false)]
    public Locale $locale;
}