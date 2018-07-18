<?php
/**
 * Created by PhpStorm.
 * User: alive
 * Date: 7/18/18
 * Time: 3:11 AM
 */

namespace Alive2212\LaravelSettingService;

use Alive2212\LaravelSmartRestful\BaseModel;

class AliveSettingServiceMeta extends BaseModel
{
    /**
     * @var array
     */
    protected $fillable = [
        'user_id',
        'key',
        'value',
        'extra_value',
        'scope',
        'revoked',
    ];
}