<?php

require_once __DIR__ . '/bootstrap.php';

global $entityManager;

// Create entity with BackedEnum as primary key.
$locale = new \Entity\Locale();
$locale->code = \Enum\LocaleCode::Dutch;

// Persist entity, clear manager.
$entityManager->persist($locale);
$entityManager->flush();
$entityManager->clear();

// Create entity with an association to the entity with BackedEnum key.
// Note that the use of a proxy class is required for the error to show.
$categoryLocale = new \Entity\CategoryLocale();
$categoryLocale->locale = $entityManager->getReference(\Entity\Locale::class, \Enum\LocaleCode::Dutch);

// Attempt to persist, throws an error.
$entityManager->persist($categoryLocale);
$entityManager->flush();
