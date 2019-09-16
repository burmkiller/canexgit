<?php

return [
    'client_id' => env('PAYPAL_CLIENT_ID','AYdHHGkogT5NQAGzznHOmmujRUrv4VR4HhlCzbwdXhSKce_poxza1JkN23EHHqhc4D_dPcf97JZ3neeH'),
    'secret' => env('PAYPAL_SECRET','EEst6wr2arL-S6ihExQ-YWzuFRKzfHgoD8zeMofS5UX-bnKs3NdXhXzm0rlZjzY8AhTCzKNfpwQMFkIr'),
    'settings' => array(
        'mode' => env('PAYPAL_MODE','sandbox'),
        'http.ConnectionTimeOut' => 90,
        'log.LogEnabled' => true,
        'log.FileName' => storage_path() . '/logs/paypal.log',
        'log.LogLevel' => 'ERROR'
    ),
];
