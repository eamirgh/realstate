<?php

require_once APP_DIR . '/app/view.php';
require_once APP_DIR . '/controller/responseHandler.php';

class servicesHandler extends responseHandler
{
    function __construct()
    {
        $html = new view(APP_DIR . '/view/pages/services.php');
        $html->title = 'خدمات ما';
        $this->res =  $html->render();
    }

    public function response(): mixed
    {
        return $this->res;
    }
}
