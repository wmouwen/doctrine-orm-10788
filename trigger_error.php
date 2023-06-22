<?php

require_once __DIR__ . '/bootstrap.php';

global $entityManager;

$locale = new \Entity\Locale();
$locale->code = \Enum\LocaleCode::Dutch;

$categoryLocale = new \Entity\CategoryLocale();
$categoryLocale->locale = $entityManager->getReference(\Entity\Locale::class, \Enum\LocaleCode::Dutch);

$entityManager->persist($categoryLocale);
$entityManager->flush();
