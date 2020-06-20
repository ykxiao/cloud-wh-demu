<?php
/**
 * Author: ykxiao
 * Date: 2020/6/20
 * Time: 12:42
 * Description:
 */

use CloudWhDemu\CloudMonth;

if (!function_exists('cloud_d')){
    /**
     * @return bool|CloudMonth
     */
    function cloud_d()
    {
        $arguments = func_get_args();

        $month = app(CloudMonth::class);

        if (empty($arguments)) {
            return $month;
        }

        if (is_string($arguments[0])) {
            $robot = $arguments[1] ?? 'default';
            return $month->with($robot)->text($arguments[0]);
        }
    }
}