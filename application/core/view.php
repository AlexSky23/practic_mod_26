<?php
 
class View
{

   /* private $model;
    private $controller;
    public function __construct($controller,$model) {
        $this->controller = $controller;
        $this->model = $model;
        
    }*/



    function generate($content_view, $template_view, $data = null){
        include 'application/views/'.$template_view;
       // echo "view.php-ok";
    }

    public function output() {
      //  return '<p><a href=""' . $this->model->string . "</a></p>";
    }
// <a href="mvc.php?action=clicked"' . $this->model->string . "</a>
}
