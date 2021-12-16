<?php

class Mensajes {

    static function info($m) {

        echo '<div class = "alert alert-info m-0 row justify-content-center">' .
        ' <strong class="m-0 row justify-content-center">Info!</strong> ' .$m.
        '</div>';
    }
    static function success($m) {

        echo '<div class = "alert alert-success m-0 row justify-content-center">' .
        ' <strong class="m-0 row justify-content-center">Ok</strong> ' .$m.
        '</div>';
    }
    static function danger($m) {

        echo '<div class = "alert alert-danger m-0 row justify-content-center">' .
        ' <strong class="m-0 row justify-content-center">Error </strong> ' .$m.
        '</div>';
    }

}