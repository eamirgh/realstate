<?php

require_once APP_DIR . '/app/view.php';
require_once APP_DIR . '/controller/responseHandler.php';

class salesHandler extends responseHandler
{
    function __construct()
    {
        $html = new view(APP_DIR . '/view/pages/sales.php');
        $html->title = 'موارد فروشی';
        $this->res =  $html->render();
    }

    public function response(): mixed
    {
        return $this->res;
    }
}
