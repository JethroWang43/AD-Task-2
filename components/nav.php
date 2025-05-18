<?php
include(__DIR__.'/../handler/nav-handler.php');

function getNav(){
    global $navItems;
    $nav = "<ul class='nav-bar'>";
    if (isset($navItems) && is_array($navItems)) {
        foreach ($navItems as $label => $link) {
            $nav .= "<li><a href='$link'>$label</a></li>";
        }
    }
    $nav .= "</ul>";
    return $nav;
}
?>