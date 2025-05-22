<?php

use Illuminate\Session\TokenMismatchException;

/**
 * ADMINISTRATOR
 */
Route::group(['middleware' => ['web']], function () {


    /**
     * Common
     */
    Route::group(['middleware' => ['admin_logged', 'can_see', 'in_context'],
        'namespace' => 'Foostart\Company\Controllers\Admin',
    ], function () {

        /**
         * configs
         */
        Route::get('admin/company/config', [
            'as' => 'Company.config',
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
            'as' => 'company.langGet',
            'uses' => 'CompanyAdminController@lang'
        ]);

        Route::post('admin/company/lang', [
            'as' => 'company.langPost',
            'uses' => 'CompanyAdminController@lang'
        ]);

    });

    /****************************************************************************
     * Company
     */
    Route::group(['middleware' => ['admin_logged', 'can_see', 'in_context'],
        'namespace' => 'Foostart\Company\Controllers\Admin',
    ], function () {

        /*
          |-----------------------------------------------------------------------
          | Manage companies
          |-----------------------------------------------------------------------
          | 1. List of companies
          | 2. Edit company
          | 3. Delete company
          | 4. Add new company
          |
        */

        /**
         * list
         */
        Route::get('admin/company', [
            'as' => 'company',
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
         * post
         */
        Route::post('admin/company/edit', [
            'as' => 'company.post',
            'uses' => 'CompanyAdminController@post'
        ]);

        /**
         * delete
         */
        Route::get('admin/company/delete', [
            'as' => 'company.delete',
            'uses' => 'CompanyAdminController@delete'
        ]);

        /**
         * restore
         */
        Route::get('admin/company/restore', [
            'as' => 'company.restore',
            'uses' => 'CompanyAdminController@restore'
        ]);

        /**
         * trash
         */
        Route::get('admin/company/trash', [
            'as' => 'company.trash',
            'uses' => 'CompanyAdminController@trash'
        ]);

        /**
         * search
         */
        Route::get('admin/company/search', [
            'as' => 'company.search',
            'uses' => 'CompanyAdminController@search'
        ]);
    });
});
