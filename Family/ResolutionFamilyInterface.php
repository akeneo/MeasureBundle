<?php

namespace Akeneo\Bundle\MeasureBundle\Family;

/**
 * Area measures constants
 *
 * @author    Bjoern Heneka <bheneka@codebee.de>
 * @license   http://opensource.org/licenses/MIT MIT
 */
interface ResolutionFamilyInterface
{
    /**
     * Family measure name
     * @staticvar string
     */
    const FAMILY = 'Resolution';

    /**
     * @staticvar string
     */
    const PIXEL           = 'PIXEL';

    /**
     * @staticvar string
     */
    const MEGAPIXEL       = 'MEGAPIXEL';

    /**
     * @staticvar string
     */
    const KILOPIXEL       = 'KILOPIXEL';
}
