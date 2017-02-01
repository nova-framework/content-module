<?php
/**
 * Routes - all Module's specific Routes are defined here.
 *
 * @author Virgil-Adrian Teaca - virgil@giulianaeassociati.com
 * @version 4.0
 */


/** Define static routes. */

// The Adminstration Routes.
Route::group(array('prefix' => 'admin', 'namespace' => 'Content\Controllers\Admin'), function()
{
    // The User's Dashboard.
    Route::get('articles', array('before' => 'auth', 'uses' => 'Articles@index'));
});
