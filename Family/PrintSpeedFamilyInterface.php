<?php

namespace Akeneo\Bundle\MeasureBundle\Family;

/**
 * Area measures constants
 *
 * @author    Bjoern Heneka <bheneka@codebee.de>
 * @license   http://opensource.org/licenses/MIT MIT
 */
interface PrintSpeedFamilyInterface
{
    /**
     * Family measure name
     * @staticvar string
     */
    const FAMILY = 'PrintSpeed';

    /**
     * @staticvar string
     */
    const PAGES_PER_HOUR           = 'PAGES_PER_HOUR';

    /**
     * @staticvar string
     */
    const PAGES_PER_MINUTE         = 'PAGES_PER_MINUTE';

}
