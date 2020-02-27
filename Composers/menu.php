<?php

use LaravelAcl\Authentication\Classes\Menu\SentryMenuFactory;
use Foostart\Category\Helpers\FooCategory;
use Foostart\Category\Helpers\SortTable;

/*
|-----------------------------------------------------------------------
| GLOBAL VARIABLES
|-----------------------------------------------------------------------
|   $sidebar_items
|   $sorting
|   $order_by
|   $plang_admin = 'company-admin'
|   $plang_front = 'company-front'
*/
View::composer([
                'package-company::admin.company-edit',
                'package-company::admin.company-form',
                'package-company::admin.company-items',
                'package-company::admin.company-item',
                'package-company::admin.company-search',
                'package-company::admin.company-config',
                'package-company::admin.company-lang',
    ], function ($view) {

        //Order by params
        $params = Request::all();

        /**
         * $plang-admin
         * $plang-front
         */

        $plang_admin = 'company-admin';
        $plang_front = 'company-front';

        $fooCategory = new FooCategory();
        $key = $fooCategory->getContextKeyByRef('admin/company');

        /**
         * $sidebar_items
         */
        $sidebar_items = [
            trans('company-admin.sidebar.add') => [
                'url' => URL::route('company.edit', []),
                'icon' => '<i class="fa fa-pencil-square-o" aria-hidden="true"></i>'
            ],
            trans('company-admin.sidebar.list') => [
                "url" => URL::route('company.list', []),
                'icon' => '<i class="fa fa-list-ul" aria-hidden="true"></i>'
            ],
            trans('company-admin.sidebar.category') => [
                'url'  => URL::route('categories.list',['_key='.$key]),
                'icon' => '<i class="fa fa-sitemap" aria-hidden="true"></i>'
            ],
            trans('company-admin.sidebar.config') => [
                "url" => URL::route('company.config', []),
                'icon' => '<i class="fa fa-braille" aria-hidden="true"></i>'
            ],
            trans('company-admin.sidebar.lang') => [
                "url" => URL::route('company.lang', []),
                'icon' => '<i class="fa fa-language" aria-hidden="true"></i>'
            ],
        ];

        /**
         * $sorting
         * $order_by
         */
        $orders = [
            '' => trans($plang_admin.'.form.no-selected'),
            'id' => trans($plang_admin.'.fields.id'),
            'company_name' => trans($plang_admin.'.fields.name'),
            'company_status' => trans($plang_admin.'.fields.status'),
            'updated_at' => trans($plang_admin.'.fields.updated_at'),
        ];
        $sortTable = new SortTable();
        $sortTable->setOrders($orders);
        $sorting = $sortTable->linkOrders();



        //Order by
        $order_by = [
            'asc' => trans('category-admin.order.by-asc'),
            'desc' => trans('category-admin.order.by-des'),
        ];

        // assign to view
        $view->with('sidebar_items', $sidebar_items );
        $view->with('order_by', $order_by);
        $view->with('sorting', $sorting);
        $view->with('plang_admin', $plang_admin);
        $view->with('plang_front', $plang_front);
});
