<?php 

define("APP_BASE_PATH", __DIR__);

require_once("../vendor/autoload.php");

use App\PHPLayout\PHPLayout;

$pageParams = [
    "pageTitle" => "PHPLayout Welcome - By Gazmendrx",
    "customScripts" => [
        "head" => [
            ["type" => "css", "name" => "welcome"],
            ["type" => "js", "name" => "welcome"]
        ],
        "body" => [
            ["type" => "js", "name" => "bodyScript"]
        ]
    ]
];

/**
 * loadPage(string $layoutName, string $pageName, array $pageParams)
 */
PHPLayout::loadPage("mainLayout", "welcome", $pageParams);