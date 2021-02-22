<?php
class Controller_o_nas extends Controller{

    function action_index(){
        $this->view->generate('o_nas_view.php', 'template_view.php');
    }
}