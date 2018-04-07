<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Alert Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain alert messages for various scenarios
    | during CRUD operations. You are free to modify these language lines
    | according to your application's requirements.
    |
    */

    'backend' => [
        'roles' => [
            'created' => 'The role was successfully created.',
            'deleted' => 'The role was successfully deleted.',
            'updated' => 'The role was successfully updated.',
        ],
        
        'hospitals' => [
            'created' => 'The hospital was successfully created.',
            'deleted' => 'The hospital was successfully deleted.',
            'updated' => 'The hospital was successfully updated.',
            'toggled' => 'The hospital status was successfully updated.',
        ],

        'users' => [
            'cant_resend_confirmation' => 'The application is currently set to manually approve users.',
            'confirmation_email'  => 'A new confirmation e-mail has been sent to the address on file.',
            'confirmed'              => 'The user was successfully confirmed.',
            'created'             => 'The user was successfully created.',
            'deleted'             => 'The user was successfully deleted.',
            'deleted_permanently' => 'The user was deleted permanently.',
            'restored'            => 'The user was successfully restored.',
            'session_cleared'      => "The user's session was successfully cleared.",
            'social_deleted' => 'Social Account Successfully Removed',
            'unconfirmed' => 'The user was successfully un-confirmed',
            'updated'             => 'The user was successfully updated.',
            'updated_password'    => "The user's password was successfully updated.",
        ],
        'doctor' => [
            'approved' => 'Doctor approved successfully',
        ],
        'disease' => [
            'created'             => 'Disease was successfully created.',
            'updated'             => 'Disease was successfully updated.'
        ],
    ],


    'frontend' => [
        'contact' => [
            'sent' => 'Your information was successfully sent. We will respond back to the e-mail provided as soon as we can.',
        ],
        'user' => [
            'register-doctor' => 'We have sent your request to the admin. You will get an update once you are verified as a doctor.'
        ],
        'prescription' => [
            'created' => 'The prescription was successfully created.'
        ]
    ],
];
