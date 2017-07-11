<?php

use Doctrine\ORM\Tools\Setup;

require_once __DIR__ . "/../vendor/autoload.php";

function GetEntityManager()
{

    $isDevMode = true;
    $config = Setup::createYAMLMetadataConfiguration(array(__DIR__ . "/../config/yaml"), $isDevMode);

    // TODO Use YML instead?
    $file_json = json_decode(file_get_contents(__DIR__ . '/../config/database-secret.json', true), true);

    // the connection configuration
    $dbParams = array(
        'driver'   => $file_json['driver'],
        'host'     => $file_json['host'],
        'dbname'   => $file_json['dbname'],
        'user'     => $file_json['user'],
        'password' => $file_json['password']
    );

    // obtaining the entity manager
    $entityManager = \Doctrine\ORM\EntityManager::create($dbParams, $config);

    return $entityManager;
}