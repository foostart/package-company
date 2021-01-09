<?php

use Illuminate\Session\TokenMismatchException;

/**
 * FRONT
 */
Route::get('company', [
    'as' => 'company',
    'uses' => 'Foostart\Company\Controllers\Front\CompanyFrontController@index'
]);
Route::get('company/search/', [
    'as' => 'company',
    'uses' => 'Foostart\Company\Controllers\Front\CompanyFrontController@search'
]);
Route::get('company/{slug}', [
    'as' => 'company',
    'uses' => 'Foostart\Company\Controllers\Front\CompanyFrontController@show'
]);

/**
 * ADMINISTRATOR
 */
Route::group(['middleware' => ['web']], function () {

    Route::group(['middleware' => ['admin_logged', 'can_see', 'in_context'],
                  'namespace' => 'Foostart\Company\Controllers\Admin',
        ], function () {

        /*
          |-----------------------------------------------------------------------
          | Manage company
          |-----------------------------------------------------------------------
          | 1. List of companies
          | 2. Edit company
          | 3. Delete company
          | 4. Add new company
          | 5. Manage configurations
          | 6. Manage languages
          |
        */

        /**
         * list
         */
        Route::get('admin/company', [
            'as' => 'company.list',
            'uses' => 'CompanyAdminController@index'
        ]);

        /**
         * edit-add
         */
        Route::get('admin/company/edit', [
            'as' => 'company.edit',
            'uses' => 'CompanyAdminController@edit'
        ]);

        /**
         * copy
         */
        Route::get('admin/company/copy', [
            'as' => 'company.copy',
            'uses' => 'CompanyAdminController@copy'
        ]);

        /**
         * company
         */
        Route::post('admin/company/edit', [
            'as' => 'company.company',
            'uses' => 'CompanyAdminController@company'
        ]);

        /**
         * delete
         */
        Route::get('admin/company/delete', [
            'as' => 'company.delete',
            'uses' => 'CompanyAdminController@delete'
        ]);

        /**
         * trash
         */
         Route::get('admin/company/trash', [
            'as' => 'company.trash',
            'uses' => 'CompanyAdminController@trash'
        ]);

        /**
         * configs
        */
        Route::get('admin/company/config', [
            'as' => 'company.config',
            'uses' => 'CompanyAdminController@config'
        ]);

        Route::post('admin/company/config', [
            'as' => 'company.config',
            'uses' => 'CompanyAdminController@config'
        ]);

        /**
         * language
        */
        Route::get('admin/company/lang', [
            'as' => 'company.lang',
            'uses' => 'CompanyAdminController@lang'
        ]);

        Route::post('admin/company/lang', [
            'as' => 'company.lang',
            'uses' => 'CompanyAdminController@lang'
        ]);

    });
});
