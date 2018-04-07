<?php

Breadcrumbs::register('admin.hospital.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard');
    $breadcrumbs->push(__('labels.backend.access.users.management'), route('admin.hospital.index'));
});
