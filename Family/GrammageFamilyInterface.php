<?php

namespace Akeneo\Bundle\MeasureBundle\Family;

/**
 * Area measures constants
 *
 * @author    Bjoern Heneka <bheneka@codebee.de>
 * @license   http://opensource.org/licenses/MIT MIT
 */
interface GrammageFamilyInterface
{
    /**
     * Family measure name
     * @staticvar string
     */
    const FAMILY = 'Grammage';

    /**
     * @staticvar string
     */
    const GRAM_PER_SQUARE_METER          = 'GRAM_PER_SQUARE_METER';

    /**
     * @staticvar string
     */
    const GRAM_PER_SQUARE_DECIMETER      = 'GRAM_PER_SQUARE_DECIMETER';

    /**
     * @staticvar string
     */
    const GRAM_PER_SQUARE_CENTIMETER     = 'GRAM_PER_SQUARE_CENTIMETER';

}
