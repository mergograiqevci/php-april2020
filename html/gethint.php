<?php
// Array with names
    $emri[] = "Jon";
    $emri[] = "Lum";
    $emri[] = "Blerim";
    $emri[] = "Edon";
    $emri[] = "Dardan";
    $emri[] = "Vlera";
    $emri[] = "Zana";
    $emri[] = "Mergim";
    $emri[] = "Lirim";
    $emri[] = "Qlirim";
    $emri[] = "Ben";
    $emri[] = "Andy";
    $emri[] = "Eren";
    $emri[] = "Mikasa";
    $emri[] = "Aron";
    $emri[] = "Erwin";
    $emri[] = "Vicky";
// get the q parameter from URL
    $p = $_REQUEST["emri"];
    $hint = "";
// lookup all hints from array if $p is different from ""
    if ($p !== "") {
        $p = strtolower($p);
        $len = strlen($p);
        foreach ($emri as $name) {
            if (stristr($p, substr($name, 0, $len))) {
                $hint .= '<option value="' . $name . '">';
            }
        }
    }
    echo $hint;


