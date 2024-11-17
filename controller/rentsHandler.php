<?php

require_once APP_DIR . '/app/view.php';
require_once APP_DIR . '/controller/responseHandler.php';

class rentsHandler extends responseHandler
{
    function __construct()
    {
        $html = new view(APP_DIR . '/view/pages/rents.php');
        $html->title = 'موارد اجاره ای';
        $this->res =  $html->render();
    }

    public function response(): mixed
    {
        return $this->res;
    }
}
