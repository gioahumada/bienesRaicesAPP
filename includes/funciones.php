<?php 

require 'app.php';

function incluirTemplate($nombre) {
    include "includes/templates/" . $nombre . ".php";
}