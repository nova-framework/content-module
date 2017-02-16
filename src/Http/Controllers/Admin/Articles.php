<?php
/**
 * Dasboard - Implements a simple Administration Dashboard.
 *
 * @author Virgil-Adrian Teaca - virgil@giulianaeassociati.com
 * @version 3.0
 */

namespace Modules\Content\Http\Controllers\Admin;

use Nova\Support\Facades\View;

use App\Core\BackendController;


class Articles extends BackendController
{

    public function index()
    {
        return $this->getView()
            ->shares('title', __d('articles', 'Articles'));
    }

}
