<?php

require_once APP_DIR . '/app/view.php';
require_once APP_DIR . '/controller/responseHandler.php';

class indexHandler extends responseHandler
{
    function __construct()
    {
        $html = new view(APP_DIR . '/view/pages/index.php');
        $html->title = 'صفحه اصلی';
        $this->res =  $html->render();
    }

    public function response(): mixed
    {
        return $this->res;
    }
}
