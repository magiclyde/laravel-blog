<?php
return array(
    'host'    => env('SPH_HOST', '127.0.0.1'),
    'port'    => env('SPH_PORT', '9312'),
    'timeout' => 30,
    'indexes' => array(
        'idx_post' => array('table' => 'posts', 'column' => 'id'),
    ),
);
