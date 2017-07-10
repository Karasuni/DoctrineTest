<?php
use Entity\Group;

require_once "EntityManager.php";

$em = GetEntityManager();

$newGroupName = $argv[1];

$group = new Group();
$group->setName($newGroupName);

$em->persist($group);
$em->flush();

echo "Created Group with ID :" . $group->getId() . "\n";