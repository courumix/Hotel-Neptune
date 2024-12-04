<?php


function getVar($name) {
    if (isset ( $_GET [$name] )) {
        if (! empty ( $_GET [$name] )) {
            return $_GET [$name];
        }
        return TRUE;
    }
    return FALSE;
}

    function postVar($name) {
        if (isset ( $_POST [$name] )) {
            if (! empty ( $_POST[$name] )) {
                return $_POST[$name];
            }
            return TRUE;
        }
        return FALSE;
    }
?>