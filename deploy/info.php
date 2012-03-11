<?php

/////////////////////////////////////////////////////////////////////////////
// General information
/////////////////////////////////////////////////////////////////////////////

$app['basename'] = 'zarafa_extension';
$app['version'] = '1.0.5';
$app['release'] = '1';
$app['vendor'] = 'ClearFoundation';
$app['packager'] = 'ClearFoundation';
$app['license'] = 'GPLv3';
$app['license_core'] = 'LGPLv3';
$app['description'] = lang('zarafa_extension_app_description');

/////////////////////////////////////////////////////////////////////////////
// App name and categories
/////////////////////////////////////////////////////////////////////////////

$app['name'] = lang('zarafa_extension_app_name');
$app['category'] = lang('base_category_system');
$app['subcategory'] = 'Accounts Manager'; // FIXME
$app['menu_enabled'] = FALSE;

/////////////////////////////////////////////////////////////////////////////
// Packaging
/////////////////////////////////////////////////////////////////////////////

$app['core_only'] = TRUE;

$app['core_requires'] = array(
    'app-openldap-directory-core',
    'app-contact-extension-core',
    'app-users',
);

$app['core_file_manifest'] = array( 
   'zarafa.php' => array(
        'target' => '/var/clearos/openldap_directory/extensions/70_zarafa.php'
    ),
);
