<?php 

define("APP_BASE_PATH", __DIR__);

require_once("vendor/autoload.php");

use App\PHPLayout\PHPLayout;

$phpLayout = new PHPLayout(APP_BASE_PATH);
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
$phpLayout->loadPage("mainLayout", "welcome", $pageParams);