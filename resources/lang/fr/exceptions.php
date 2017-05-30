<?php

return [
    'backend' => [
        'users' => [
            'create' => 'Erreur lors de la création de l\'utilisateur',
            'update' => 'Erreur lors de la mise à jour de l\'utilisateur',
            'delete' => 'Erreur lors de la suppression de l\'utilisateur',
        ],

        'roles' => [
            'create' => 'Erreur lors de la création du rôle',
            'update' => 'Erreur lors de la mise à jour du rôle',
            'delete' => 'Erreur lors de la suppression du rôle',
        ],
    ],

    'frontend' => [
        'user' => [
            'email_taken' => 'Cet email est déjà utilisé par un compte existant.',
            'password_mismatch' => 'L\'ancien mot de passe est incorrect.',
        ],
    ],
];
