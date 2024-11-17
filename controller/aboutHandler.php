<?php

require_once APP_DIR . '/app/view.php';
require_once APP_DIR . '/controller/responseHandler.php';

class aboutHandler extends responseHandler
{
    function __construct()
    {
        $html = new view(APP_DIR . '/view/pages/about.php');
        $html->title = 'درباره ما';
        $this->res =  $html->render();
    }

    public function response(): mixed
    {
        return $this->res;
    }
}
