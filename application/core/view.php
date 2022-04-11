<?php

class View{
    function render($content_view, $template_view, $title, $data = null){

        include 'application/views/' . $template_view;
    }
}

?>