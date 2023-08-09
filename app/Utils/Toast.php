<?php

namespace App\Utils;


class Toast
{
    public static function info(Object $ob, $message)
    {
        $ob->dispatch(
            'toast',
            type: 'info',
            message: $message,
        );
    }

    public static function success(Object $ob, $message)
    {
        $ob->dispatch(
            'toast',
            type: 'success',
            message: $message,
        );
    }

    public static function warning(Object $ob, $message)
    {
        $ob->dispatch(
            'toast',
            type: 'warning',
            message: $message,
        );
    }

    public static function error(Object $ob, $message)
    {
        $ob->dispatch(
            'toast',
            type: 'error',
            message: $message,
        );
    }
}
