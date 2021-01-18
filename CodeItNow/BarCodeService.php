<?php

namespace CodeItNow;

use think\Config;
use think\Route;
use think\Service;

class BarCodeService extends Service
{
    public function boot()
    {
        $this->registerRoutes(function (Route $route) {
            $route->get('info/barcode', function (Config $config) {
                $data = $config->get('extra.product', []);
                $data['conposer']  = 'BarCode';
                $data['statement'] = 'Cma';

                foreach ($data as $key => $value) {
                    echo $key . '：' . $value;
                    echo '<br>';
                }
            })->ext('cs');
        });
    }
}
