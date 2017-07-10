<?php

require_once "EntityManager.php";

$em = GetEntityManager();

$groupRepository = $em->getRepository('Group');
$groups = $groupRepository->findAll();

foreach ($groups as $group) {
    echo sprintf("-$s\n", $group->getName());
}