<?php

return [

    /*
    |-----------------------------------------------------------------------
    | MAIN MENU
    |-----------------------------------------------------------------------
    | Top menu
    |
    */
    'menus' => [
        'top-menu' => 'Companies'
    ],





    /*
    |-----------------------------------------------------------------------
    | SIDEBAR
    |-----------------------------------------------------------------------
    | Left side bar
    |
    |
    |
    */
    'sidebar' => [
        'list' => 'Items',
        'add' => 'Add new',
        'trash' => 'Trash',
        'config' => 'Configurations',
        'lang' => 'Languages',
        'category' => 'Categories',
        'job' => 'Jobs',
        'sample' => 'Sample',
        'list_companies' => 'Companies',
        'list_patterns' => 'Patterns',
        'add_pattern' => 'New pattern',
        'tags' => 'Tags',
        'questions' => 'Questions',
        'list_jobs' => 'Jobs',
        'list_categories' => 'Categories',
    ],





    /*
    |-----------------------------------------------------------------------
    | Table column
    |-----------------------------------------------------------------------
    | The list of columns in table
    |
    */
    'columns' => [
        'order' => 'Order',
        '#' => '#',
        'counter' => '#',
        'id' => 'Id',
        'name' => 'Crawler name',
        'operations' => 'Operations',
        'updated_at' => 'Updated at',
        'filename' => 'File name',
        'status'    => 'Status',
        'user_id_assigner' => 'User ID Assigner',
        'answer' => 'Answer',
        'title' => 'Title',
        'email' => 'Email',
        'message' => 'Message',
        'company_name' => 'Site name',
        'pattern_name' => 'Pattern name',
        'machine_name' => 'Machine name',
        'regular_expression_value' => 'Value',
        'view_pattern' => 'Patterns',
        'num_questions' => 'Questions',
        'tag_name' => 'Tag name',
        'tag_num_questions' => 'Questions',
        'question_name' => 'Question name',
        'question_description' => 'Question description',
        'answer_description' => 'Answer description',
        'job_name' => 'Job name',
        'category_name' => 'Category name',
    ],


    /*
    |-----------------------------------------------------------------------
    | Pages
    |-----------------------------------------------------------------------
    | Pages
    |
    */
    'pages' => [
        'title-list' => 'List of companies',
        'title-list-pattern' => 'List of patterns',
        'title-list-search' => 'Search results',
        'title-list-pattern-search' => 'Search results',
        'title-edit' => 'Edit company',
        'title-add' => 'Add new company',
        'title-delete' => 'Delete company',
        'title-config' => 'Current configurations',
        'title-lang' => 'Manage list of languages',
        'title-company' => 'List of companies',
        'title-pattern' => 'List of patterns',
        'title-list-search-company' => 'Search companies',
        'title-list-search-pattern' => 'Search patterns',
        'title-edit-tag' => 'Edit tag',
        'title-questions' => 'List of questions',
        'title-edit-question' => 'Edit questions',
        'title-list-search-answers' => 'Search answers',
        'title-edit-answer' => 'Edit answer',
        'title-jobs' => 'List of jobs',
        'title-list-search-jobs' => 'Search jobs',
        'title-list-edit-job' => 'Edit job',
        'title-edit-job' => 'Edit job',
        'title-categories' => 'List of categories',
        'title-list-search-categories' => 'Search categories',
        'title-list-edit-category' => 'Edit category',
        'title-edit-category' => 'Edit category',
        'title-categories' => 'List of categories',
        'title-list-pattern' => 'List of patterns',

    ],





    /*
    |-----------------------------------------------------------------------
    | Button
    |-----------------------------------------------------------------------
    | The list of buttons
    |
    */
    'buttons' => [
        'search' => 'Search',
        'reset' => 'Resest',
        'add' => 'Add',
        'save' => 'Save',
        'delete' => 'Delete',
        'delete-in-trash' => 'In trash',
        'delete-forever' => 'Forever',
        'sent' => 'Sent',
        'crawl_tag' => 'Crawl tag',
        'crawl_question' => 'Crawl question',
        'crawl_answer' => 'Crawl answer',
        'restore' => 'Restore',
        'export' => 'Export',
    ],





    /*
    |-----------------------------------------------------------------------
    | Form
    |-----------------------------------------------------------------------
    | The list of elements in form
    |
    |
    */
    'form' => [
        'keyword' => 'Keyword',
        'category_id' => 'Category',
        'sorting' => 'Sorting',
        'no-selected' => 'No selected',
        'status' => 'Status',
        'company_id' => 'Site',
        'company' => 'Site',
        'company_type' => 'Site type',
    ],





    /*
    |-----------------------------------------------------------------------
    | Description
    |-----------------------------------------------------------------------
    | Description
    |
    */
    'descriptions' => [
        'form' => 'Crawler form',
        'company_address' => 'Company address',
        'category_id' => 'Category',
        'update' => 'Update crawler',
        'name' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
        'category' => 'Click <a href=":href">here</a> to manage list of categories by token.',
        'overview' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
        'image' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
        'files' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
        'list' => 'List of items',
        'counters' => 'There are <b>:number</b> items',
        'counter' => 'There is <b>:number</b> item',
        'not-found' => 'Not found items',
        'config' => 'List of configurations',
        'lang' => 'List of languages',
        'status' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
        'member'    => 'Search member',
        'email'    => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
        'message'    => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
        'answer'    => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
        'title'    => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
        'company_name' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
        'company_url' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
        'company_description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
        'company_form' => 'Company form',
        'company_id' => 'Company ID',
        'company_image' => 'Company image',
        'pattern_name' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
        'pattern_machine_name' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
        'pattern_form' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
        'regular_expression' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
        'tag_form' => 'Tag form',
        'tag_name' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
        'tag_url' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
        'tag_overview' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
        'tag_other' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
        'tag_num_questions' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
        'question_description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
        'question_form' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
        'answer_url_user' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
        'answer_description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
        'answer_form' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
        'category_form' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
        'job_name' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
        'job_description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
        'job_requirements' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
        'job_url' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
        'job_name' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
        'category_name' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
        'category_description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
        'category_url' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
        'category_name' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
        'slug' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
        'company_type' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
        'pattern_description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
        'job_overview' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
        'company_website' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
    ],



    /*
    |-----------------------------------------------------------------------
    | Error
    |-----------------------------------------------------------------------
    | Show error message
    |
    |
    |
    */
    'errors' => [
        'required' => ':attribute is required',
        'required_length' => '<b> :attribute </b> allows from: <b>:minlength</b> to <b>:maxlength</b> characters.',
        'required_min_length' =>'<b> :attribute </b> allows from: <b>:minlength</b> characters.',
    ],




    /*
    |-----------------------------------------------------------------------
    | FIELDS
    |-----------------------------------------------------------------------
    | Column name in table
    |
    |
    |
    */
    'fields' => [
        'id' => 'ID',
        'name' => 'Crawler name',
        'description' => 'Crawler description',
        'overview' => 'Crawler overview',
        'slug' => 'Slug',
        'updated_at' => 'Updated at',
        'user-id'   => 'ID',
        'last-name' => 'Last name',
        'first-name'    => 'First name',
        'status' => 'Status',
        'title' => 'Title',
        'company-name' => 'Name',
        'company-pattern' => 'Pattern',
        'company_id' => 'ID',
        'tag_name' => 'Tag name',
        'tag_url' => 'Tag url',
        'question_name' => 'Question name',
        'job_name' => 'Job name',
        'category_id' => 'Category ID',
        'category_name' => 'Category name',
        'company_name' => 'Company name',
        'pattern_name' => 'Pattern name',
        'pattern_machine_name' => 'Pattern name',

    ],




    /*
    |-----------------------------------------------------------------------
    | LABLES
    |-----------------------------------------------------------------------
    | The lables of element in form
    |
    |
    |
    */
    'labels' => [
        'name' => 'Company name',
        'company_address' => 'Company address',
        'overview' => 'Crawler overview',
        'description' => 'Crawler description',
        'image' => 'Crawler image',
        'files' => 'Crawler files',
        'category' => 'Category name',
        'title-search' => 'Search crawler',
        'title-categories' => 'Search categories',
        'title-search-company' => 'Search companies',
        'title-search-pattern' => 'Search patterns',
        'company-search' => 'Search company',
        'title-backup' => 'Backups',
        'config' => 'Configurations',
        'crawler-status'    => 'Status',
        'assigner'        => 'Add assigner',
        'search'        => 'Search User Data',
        'total-data'    => 'Total Data :',
        'email'        => 'Email',
        'message'        => 'Message',
        'answer'        => 'Answer',
        'title'        => 'Title',
        'phone' => 'Phone',
        'company_name' => 'Company name',
        'company_url' => 'Company url',
        'company_image' => 'Company image',
        'company_description' => 'Company description',
        'pattern_name' => 'Pattern name',
        'pattern_machine_name' => 'Pattern machine name',
        'pattern_description' => 'Pattern description',
        'regular_expression' => 'Regular expression',
        'tag_name' => 'Tag name',
        'tag_url' => 'Tag URL',
        'tag_overview' => 'Tag overview',
        'tag_other' => 'Tag other',
        'tag_num_questions' => 'Number questions',
        'title-search-tag' => 'Search tags',
        'unknown' => 'Unknown',
        'title-search-question' => 'Search questions',
        'question_name' => 'Question name',
        'question_url' => 'Question URL',
        'question_description' => 'Question description',
        'question_url_user' => 'URL user',
        'title-search-answer' => 'Search answers',
        'answer_url_user' => 'URL user',
        'answer_description' => 'Description',
        'title-search-answer' => 'Search answers',
        'id' => 'ID',
        'category_id' => 'ID',
        'title-search-jobs' => 'Search jobs',
        'job_name' => 'Job name',
        'job_url' => 'Job url',
        'job_description' => 'Job description',
        'job_requirements' => 'Job requirements',
        'category_name' => 'Category name',
        'category_url' => 'Category url',
        'category_description' => 'Category description',
        'title-search-categories' => 'Search categories',
        'category_overview' => 'Category overview',
        'slug' => 'Company slug',
        'job_overview' => 'Job overview',
        'company_website' => 'Website',
        'category_id' => 'Category',
    ],





    /*
    |-----------------------------------------------------------------------
    | TABS
    |-----------------------------------------------------------------------
    | The name of tab
    |
    |
    |
      */
    'tabs' => [
        'menu-1' => 'Basic',
        'menu-2' => 'Advance',
        'menu-3' => 'Other',
        'menu-4' => 'Assigner',
        'menu-5' => 'Answer',
        'menu-6' => 'Menu 6',
        'menu-7' => 'Menu 7',
        'menu-8' => 'Menu 8',
        'menu-9' => 'Menu 9',
        'menu-9' => 'Menu 9',
        'guide'  => 'Guide',
        'other'  => 'Other',
        'basic'  => 'Basic',
        'advance' => 'Advance',
    ],





    /*
    |-----------------------------------------------------------------------
    | HEADING
    |-----------------------------------------------------------------------
    |
    |
    |
    |
    */
    'headings' => [
        'form-search' => 'Search crawlers',
        'list' => 'List of crawlers',
        'search' => 'Search results',
    ],





    /*
    |-----------------------------------------------------------------------
    | CONFIRMS
    |-----------------------------------------------------------------------
    | List of messages for confirm
    |
    |
    |
    */
    'confirms' => [
        'delete' => 'Are you sure you want to delete this item?',
    ],





    /*
    |-----------------------------------------------------------------------
    | ACTIONS
    |-----------------------------------------------------------------------
    |
    |
    |
    |
    */
    'actions' => [
        'add-ok' => 'Add item successfully',
        'add-error' => 'Add item failed',
        'edit-ok' => 'Edit item successfully',
        'edit-error' => 'Edit item failed',
        'delete-ok' => 'Delete item successfully',
        'delete-error' => 'Delete item failed',
    ],
];
