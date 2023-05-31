<?php 

namespace Custom;

function Route(): void {
    if (isset($_GET['route'])) {
        header("Location: " . INCLUDE_PATH . "Pages/" . $_GET['route']);
        die;
    }
}