<?php
/**
 * Created by PhpStorm.
 * User: luowen
 * Date: 2017/2/20
 * Time: 22:24
 */

namespace luowen\swooleapp\frameworks;


class Application
{

    public static function init() {
        echo "Swoole App initialize....";
    }

    public function bootstrap() {
        echo "bootstrap";
    }

}