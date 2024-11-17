<?php

require_once APP_DIR . '/app/view.php';
require_once APP_DIR . '/controller/responseHandler.php';

class contactHandler extends responseHandler
{
    function __construct()
    {
        $html = new view(APP_DIR . '/view/pages/contact.php');
        $html->title = 'تماس با ما';
        $this->res =  $html->render();
    }

    public function response(): mixed
    {
        return $this->res;
    }
}
