<?php

/**
 * Created by PhpStorm.
 * User: alive
 * Date: 7/18/18
 * Time: 4:25 AM
 */
namespace Alive2212\LaravelSettingService\Http\Controller;

use Alive2212\LaravelSettingService\AliveSettingServiceMeta;
use Alive2212\LaravelSmartRestful\BaseController;

class AliveSettingServiceMetaController extends BaseController
{
    protected $LOCALE_PREFIX = 'setting_service';
    /**
     * init controller model and middleware
     */
    public function initController()
    {
        $this->model = new AliveSettingServiceMeta();

        $this->middleware([

        ]);
    }
}