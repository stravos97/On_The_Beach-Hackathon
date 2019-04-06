<?php
session_start();

$_SESSION['places'] = [
    ["Ise Sueyoshi", "Soups", 35.658667, 139.7213043, 'logo.png'],
    ["Tapas Molecular Bar","Sushi - unique", 35.6869135, 139.7705901, 'logo.png'],
    ["Nabezo", "Vegetarian", 35.6910035, 139.7004164, 'logo.png'],
    ["Teppan Baby Shinjuku", "Sushi", 35.6940334, 139.6990221, 'logo.png'],
    ["Asakusa Okonomiyaki Sometaro", "Vegetarian", 35.7119483, 139.7887391, 'logo.png'],
    ["Ichiran, Shibuya", "quick bite", 35.6611282, 139.698796, 'logo.png'],
    ["Girandole", "Vegetarian - french", 35.6855151, 139.6886437, 'logo.png'],
    ["TOKYO ONE PIECE TOWER", 35.6585928, 139.7432527, 'logo.png'],
    ["Asakusa Guided Tour",35.7147651, 139.7944666, 'logo.png'],
    ["Hozomon", 35.7139299,	139.7944431, 'logo.png'],
    ["Tokyo Skytree", 35.7100627,	139.8085117, 'logo.png'],
    ["Keio Plaza Hotel in Shinjuku", 35.6900509,	139.6921749, 'logo.png'],
    ["Robot Restaurant Kabukicho", 35.6943187,	139.7006545, 'logo.png'],
    ["Imperial Palace Hama Rikyu Gardens", 35.6597374,	139.7613038, 'logo.png'],
    ["Roppongi Hills, Shop & Restaurant", 35.659737,	139.7548487, 'logo.png'],
    ["Mount Fuji Yamanakako Onsen Benifujinoyu", 35.4301518,	138.8403026, 'logo.png'],
    ["Kegon Falls Nikko Tosho-gu", 36.7571715,	139.5977953, 'logo.png'],
    ["Tokyo Tower Imperial Palace", 35.685175,	139.7506108, 'logo.png'],

];

//var_dump($_SESSION['places'][1][4]);
//die();

$view = new stdClass();
$view->pageTitle = 'Homepage';
require_once('Views/index.phtml');
