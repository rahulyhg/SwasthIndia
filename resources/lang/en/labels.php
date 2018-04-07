<?php

return [
    /*
      |--------------------------------------------------------------------------
      | Labels Language Lines
      |--------------------------------------------------------------------------
      |
      | The following language lines are used in labels throughout the system.
      | Regardless where it is placed, a label can be listed here so it is easily
      | found in a intuitive way.
      |
     */

    'general' => [
        'all' => 'All',
        'yes' => 'Yes',
        'no' => 'No',
        'copyright' => 'Copyright',
        'custom' => 'Custom',
        'actions' => 'Actions',
        'active' => 'Active',
        'buttons' => [
            'save' => 'Save',
            'update' => 'Update',
        ],
        'hide' => 'Hide',
        'inactive' => 'Inactive',
        'none' => 'None',
        'show' => 'Show',
        'toggle_navigation' => 'Toggle Navigation',
    ],
    'backend' => [
        'access' => [
            'roles' => [
                'create' => 'Create Role',
                'edit' => 'Edit Role',
                'management' => 'Role Management',
                'table' => [
                    'number_of_users' => 'Number of Users',
                    'permissions' => 'Permissions',
                    'role' => 'Role',
                    'sort' => 'Sort',
                    'total' => 'role total|roles total',
                ],
            ],
            'hospitals' => [
                'active' => 'Active Hospitals',
                'management' => 'Hospital Management',
                'create' => 'Create Hospital',
                'edit' => 'Edit Hospital',
                'view' => 'View Hospital',
                'table' => [
                    'name' => 'Hospital Name',
                    'city' => 'City',
                    'state' => 'State',
                    'address' => 'Address',
                    'active' => 'Active',
                    'created_at' => 'Created',
                    'updated_at' => 'Updated',
                    'total' => 'hospital total|hospitals total',
                ],
                'tabs' => [
                    'titles' => [
                        'overview' => 'Overview'
                    ],
                    'content' => [
                        'overview' => [
                            'name' => 'Name',
                            'city' => 'City',
                            'state' => 'State',
                            'address' => 'Address',
                            'status' => 'Status',
                            'created_at' => 'Created At',
                            'last_updated_at' => 'Updated At',
                        ],
                    ],
                ],
            ],
            'prescriptions' => [
                'management' => 'Prescription',
                'edit' => 'Edit Prescription',
                'create' => 'Create Prescription',
            ],
            'users' => [
                'active' => 'Active Users',
                'all_permissions' => 'All Permissions',
                'change_password' => 'Change Password',
                'change_password_for' => 'Change Password for :user',
                'create' => 'Create User',
                'deactivated' => 'Deactivated Users',
                'deleted' => 'Deleted Users',
                'edit' => 'Edit User',
                'management' => 'User Management',
                'no_permissions' => 'No Permissions',
                'no_roles' => 'No Roles to set.',
                'permissions' => 'Permissions',
                'table' => [
                    'confirmed'      => 'Confirmed',
                    'created'        => 'Created',
                    'email'          => 'E-mail',
                    'id'             => 'ID',
                    'last_updated'   => 'Last Updated',
                    'name'           => 'Name',
                    'first_name'     => 'First Name',
                    'last_name'      => 'Last Name',
                    'no_deactivated' => 'No Deactivated Users',
                    'no_deleted' => 'No Deleted Users',
                    'other_permissions' => 'Other Permissions',
                    'permissions' => 'Permissions',
                    'roles' => 'Roles',
                    'social' => 'Social',
                    'total' => 'user total|users total',
                ],
                'tabs' => [
                    'titles' => [
                        'overview' => 'Overview',
                        'history' => 'History',
                    ],
                    'content' => [
                        'overview' => [
                            'avatar' => 'Avatar',
                            'confirmed' => 'Confirmed',
                            'created_at' => 'Created At',
                            'deleted_at' => 'Deleted At',
                            'email' => 'E-mail',
                            'last_updated' => 'Last Updated',
                            'name' => 'Name',
                            'first_name' => 'First Name',
                            'last_name' => 'Last Name',
                            'status' => 'Status',
                        ],
                    ],
                ],
                'view' => 'View User',
            ],
            'disease' => [
                'active' => 'Active Disease',
                'create' => 'Create Disease',
                'deactivated' => 'Deactivated Disease',
                'deleted' => 'Deleted Disease',
                'edit' => 'Edit Disease',
                'management' => 'Disease Management',
                'table' => [
                    'name' => 'Disease Name',
                    'type' => 'Type',
                    'created_at' => 'Created At',
                    'updated_at' => 'Updated At',
                    'permissions' => 'Permissions',
                    'social' => 'Social',
                    'total' => 'disease total|disease total',
                ],
                'tabs' => [
                    'titles' => [
                        'overview' => 'Overview',
                        'history' => 'History',
                    ],
                    'content' => [
                        'overview' => [
                            'type' => 'Type',
                            'created_at' => 'Created At',
                            'deleted_at' => 'Deleted At',
                            'name' => 'Name',
                        ],
                    ],
                ],
                'view' => 'View User',
            ],
        ],
    ],
    'frontend' => [
        'dashboard' => [
            'notification'  => 'Notification',
            'blood_group'   => 'Blood Group',
            'prescription'  => 'Prescription Details',
            'healthy_india' => 'Healthy India',
            'add_patient'   => 'Add Patient',
            'view_patient'  => 'View Patient List',
            'add_blood_group'  => 'Add Blood Group',
            'add_prescription'  => 'Add Prescription',
        ],
        'auth' => [
            'login_box_title' => 'Login',
            'login_button' => 'Login',
            'login_with' => 'Login with :social_media',
            'register_box_title' => 'Register',
            'register_button' => 'Register',
            'remember_me' => 'Remember Me',
        ],
        'contact' => [
            'box_title' => 'Contact Us',
            'button' => 'Send Information',
        ],
        'passwords' => [
            'expired_password_box_title' => 'Your password has expired.',
            'forgot_password' => 'Forgot Your Password?',
            'reset_password_box_title' => 'Reset Password',
            'reset_password_button' => 'Reset Password',
            'update_password_button' => 'Update Password',
            'send_password_reset_link_button' => 'Send Password Reset Link',
        ],
        'user' => [
            'passwords' => [
                'change' => 'Change Password',
            ],
            'button' => [
                'update_details' => 'Update Details'
            ],

            'profile' => [
                'avatar'             => 'Avatar',
                'created_at'         => 'Created At',
                'edit_information'   => 'Edit Information',
                'email'              => 'E-mail',
                'aadhar_no'          => 'Aadhar Card Number',
                'phone'              => 'Phone Number',
                'last_updated'       => 'Last Updated',
                'name'               => 'Name',
                'first_name'         => 'First Name',
                'last_name'          => 'Last Name',
                'update_information' => 'Update Information',
            ],
            'doctor' => [
                'degree' => 'Degree',
                'specialisation' => 'Specilaisation',
                'surgeon' => 'Surgeon'
            ]
        ],
    ],
    'common' => [
        'yes' => 'Yes',
        'no'  => 'No',
    ]
];
