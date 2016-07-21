<?php

return array(

    'multi' => array(
        'admin' => array(
            'driver' => 'database',
            'table' => 'admins'
        )

    ),

    'reminder' => array(

        'email' => 'emails.auth.reminder',

        'table' => 'password_reminders',

        'expire' => 60,

    ),


);