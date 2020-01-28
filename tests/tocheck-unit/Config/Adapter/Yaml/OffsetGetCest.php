<?php

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Phalcon\Test\Unit\Config\Adapter\Yaml;

use Phalcon\Test\Fixtures\Traits\ConfigTrait;
use UnitTester;

class OffsetGetCest
{
    use ConfigTrait;

    public function _before(UnitTester $I)
    {
        $I->checkExtensionIsLoaded('yaml');
    }

    /**
     * Tests Phalcon\Config\Adapter\Yaml :: offsetGet()
     *
     * @author Phalcon Team <team@phalcon.io>
     * @since  2018-11-13
     */
    public function configAdapterYamlOffsetGet(UnitTester $I)
    {
        $I->wantToTest('Config\Adapter\Yaml - offsetGet()');
        $this->checkOffsetGet($I, 'Yaml');
    }
}