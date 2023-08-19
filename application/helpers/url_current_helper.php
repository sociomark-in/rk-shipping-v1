<?php
function identify_current($url,$text){
    return "<a class='nav-link " . ((base_url($url) == current_url())? 'active' : " "). " " .((base_url($url) == current_url())? 'aria-current="page"' : "") . " " . "href=" . base_url("") . ">".$text."</a>";
}
?>