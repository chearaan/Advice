<?php

if (!function_exists('advice')) {
    /**
     * Return app instance of Notify.
     * 
     * @return Chearaan\Advice\Advicer
     */
    function advice() {
        return app('advice');
    }
}
