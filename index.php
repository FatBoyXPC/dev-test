<?php

// Cast to int which might end up as 0,
// then force to 1 as we don't want page 0!
$pageNumber = isset($_GET['page']) ? (int) $_GET['page'] : 1;
$pageNumber = $pageNumber ?: 1;

$url = "http://swapi.co/api/starships/?page=$pageNumber";
$starshipsInfo = json_decode(file_get_contents($url));

$starshipsPagesCount = ceil($starshipsInfo->count / count($starshipsInfo->results));

function getStarshipImageName($name)
{
    return strtolower(str_replace(' ', '-', $name)) . '.png';
}

require 'layout.php';
