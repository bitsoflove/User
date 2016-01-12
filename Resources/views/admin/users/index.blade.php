@extends('fields::layouts.index', [
    'title' => trans('user::users.title.users'),
    'breadcrumbs' => [
        [
            'title' => trans('core::core.breadcrumb.home'),
            'href' => route('dashboard.index'),
            'icon' => 'fa-dashboard',
            'class' => '',
        ], [
            'title' => trans('user::users.title.users'),
            'href' => '',
            'icon' => '',
            'class' => 'active',
        ],
    ],

    'create' => [
       'route' => route('admin.user.user.create'),
       'title' => trans('user::users.button.create user'),
    ],

    'collection' => [
        'collection' => $users,
        'edit-href' => 'admin.user.user.edit',
        'delete-href' => 'admin.user.user.destroy'
    ],
    'table' => [
        'columns' => [
            //'id' => 'ID',
            'first_name' => 'First name',
            'last_name' => 'Last name',
            'email' => 'Email',
        ],
    ],
    'actions' => [
        'view' => false,
        'edit' => true,
        'delete' => true,
    ]
])
