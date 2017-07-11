<?php
use Doctrine\ORM\Tools\Console\Helper\EntityManagerHelper;

// replace with file to your own project bootstrap
require_once __DIR__ . '/src/EntityManager.php';

$entityManager = GetEntityManager();

$helperSet = new \Symfony\Component\Console\Helper\HelperSet(array(
    'em' => new EntityManagerHelper($entityManager)
));

return $helperSet;