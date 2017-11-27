<?php

namespace Akeneo\Bundle\MeasureBundle\Family;

/**
 * Area measures constants
 *
 * @author    Bjoern Heneka <bheneka@codebee.de>
 * @license   http://opensource.org/licenses/MIT MIT
 */
interface LuminanceFamilyInterface
{
    /**
     * Family measure name
     * @staticvar string
     */
    const FAMILY = 'Luminance';

    /**
     * @staticvar string
     */
    const CANDELA_PER_SQUARE_METER        = 'CANDELA_PER_SQUARE_METER';

    /**
     * @staticvar string
     */
    const CANDELA_PER_SQUARE_DECIMETER    = 'CANDELA_PER_SQUARE_DECIMETER';

    /**
     * @staticvar string
     */
    const CANDELA_PER_SQUARE_CENTIMETER   = 'CANDELA_PER_SQUARE_CENTIMETER';

}
