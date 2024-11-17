<?php

require_once APP_DIR . '/app/view.php';
require_once APP_DIR . '/controller/responseHandler.php';

class errorHandler extends responseHandler
{
    function __construct($code = 404)
    {
        $html = new view(APP_DIR . '/view/pages/error.php');
        $html->title = 'خطای ' . $code;
        $html->message =  'مشکلی پیش آمده! ' . $html->title;
        $html->code = $code;
        $this->res =  $html->render();
    }

    public function response(): mixed
    {
        return $this->res;
    }
}
