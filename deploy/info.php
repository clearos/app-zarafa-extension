<?php

/////////////////////////////////////////////////////////////////////////////
// General information
/////////////////////////////////////////////////////////////////////////////

$app['basename'] = 'zarafa_extension';
$app['version'] = '2.3.0';
$app['release'] = '1';
$app['vendor'] = 'ClearCenter';
$app['packager'] = 'ClearCenter';
$app['license'] = 'ClearCenter';
$app['license_core'] = 'ClearCenter';
$app['description'] = lang('zarafa_extension_app_description');

/////////////////////////////////////////////////////////////////////////////
// App name and categories
/////////////////////////////////////////////////////////////////////////////

$app['name'] = lang('zarafa_extension_app_name');
$app['category'] = lang('base_category_server');
$app['subcategory'] = lang('base_subcategory_directory');
$app['menu_enabled'] = FALSE;

/////////////////////////////////////////////////////////////////////////////
// Packaging
/////////////////////////////////////////////////////////////////////////////

$app['core_only'] = TRUE;

$app['core_requires'] = array(
    'app-contact-extension-core',
    'app-mail-extension-core',
    'app-openldap-directory-core',
    'app-smtp-plugin-core',
    'app-users',
);

$app['core_file_manifest'] = array( 
   'zarafa.php' => array(
        'target' => '/var/clearos/openldap_directory/extensions/70_zarafa.php'
    ),
);

$app['delete_dependency'] = array();
