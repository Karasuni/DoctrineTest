<?php

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Setup;

require_once __DIR__ . '/../vendor/autoload.php';

# http://docs.doctrine-project.org/projects/doctrine-orm/en/latest/reference/configuration.html#obtaining-an-entitymanager
# Alternatively use YAML
function GetEntityManager()
{
    $paths = array(__DIR__ . '/../config/yaml');
    $isDevMode = true;

    // the connection configuration
    $dbParams = array(
        'driver'   => 'pdo_mysql',
        'user'     => '',
        'password' => '',
        'dbname'   => '',
        // schema?
    );

    $config = Setup::createYAMLMetadataConfiguration($paths, $isDevMode);
    $entityManager = EntityManager::create($dbParams, $config);

    return $entityManager;
}