<?php
/**
 * @link https://cms.skeeks.com/
 * @copyright Copyright (c) 2010 SkeekS
 * @license https://cms.skeeks.com/license/
 * @author Semenov Alexander <semenov@skeeks.com>
 */

namespace common\themes\app;

use skeeks\cms\themes\unifyshop\UnifyShopTheme;

/**
 * @author Semenov Alexander <semenov@skeeks.com>
 */
class AppTheme extends UnifyShopTheme
{
    /**
     * @var array
     */
    public $pathMap = [
        '@app/views' => [
            '@common/themes/app/views',
            '@skeeks/cms/themes/unifyshop/views',
            '@skeeks/cms/themes/unify/views',
        ],
    ];

    //public $themeAssetClass = 'common\themes\app\assets\AppThemeAsset';
}