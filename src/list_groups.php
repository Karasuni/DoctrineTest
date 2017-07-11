<?php

require_once "EntityManager.php";

$em = GetEntityManager();

$groupRepository = $em->getRepository('Entity\Group');
$groups = $groupRepository->findAll();

foreach ($groups as $group) {
    echo sprintf("- %s\n", $group->getName());
}