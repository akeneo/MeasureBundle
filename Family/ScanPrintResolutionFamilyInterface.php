<?php

namespace Akeneo\Bundle\MeasureBundle\Family;

/**
 * Area measures constants
 *
 * @author    Bjoern Heneka <bheneka@codebee.de>
 * @license   http://opensource.org/licenses/MIT MIT
 */
interface ScanPrintResolutionFamilyInterface
{
    /**
     * Family measure name
     * @staticvar string
     */
    const FAMILY = 'ScanPrintResolution';

    /**
     * @staticvar string
     */
    const DOTS_PER_INCH           = 'DOTS_PER_INCH';

    /**
     * @staticvar string
     */
    const DOTS_PER_CENTIMETER           = 'DOTS_PER_CENTIMETER';

}
