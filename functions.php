<?php

function getCurrentTitle(array $titleHead) : string
{
    $currentPage = $_SERVER['REQUEST_URI'];
    $titlePage = $titleHead[$currentPage];

    return $titlePage;
}