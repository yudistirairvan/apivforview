<?php

/*
 * This file is part of Laravel Hashids.
 *
 * (c) Vincent Klaiber <hello@doubledip.se>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

return [

    /*
    |--------------------------------------------------------------------------
    | Default Connection Name
    |--------------------------------------------------------------------------
    |
    | Here you may specify which of the connections below you wish to use as
    | your default connection for all work. Of course, you may use many
    | connections at once using the manager class.
    |
    */

    'default' => 'main',

    /*
    |--------------------------------------------------------------------------
    | Hashids Connections
    |--------------------------------------------------------------------------
    |
    | Here are each of the connections setup for your application. Example
    | configuration has been included, but you may add as many connections as
    | you would like.
    |
    */

    'connections' => [

        'artikel' => [
            'salt' => '3r7zuw8kfhsgmvyvhgna9n2o7vx5huvk7ky4cixujlcz5m2ee0rki7lzdlqextojdhp8xs98sldv7r0mox1l4p2ud1l5kbq5slsmp75bnygm8bxhifw1piqqtvum754ljlhq997k49saniv81flk8psvfoy3alw246amhr9ry5ezaoi0giyyynlbfm4emhtrbm3jxp35d14u203i27lt43bfr73gmgkxk52vo7wiyjljkbu953g8a2vidvw8y0ak',
            'length' => '8',
        ],

    ],

];
