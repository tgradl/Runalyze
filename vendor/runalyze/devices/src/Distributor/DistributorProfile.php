<?php

namespace Runalyze\Devices\Distributor;

use Runalyze\Common\Enum\AbstractEnum;
use Runalyze\Common\Enum\AbstractEnumFactoryTrait;

class DistributorProfile extends AbstractEnum
{
    use AbstractEnumFactoryTrait;

    /** @var int */
    const GARMIN = 1;
    
    /** @var int */
    const POLAR = 2;
    
    /** @var int */
    const SUUNTO = 3;
    
    /** @var int */
    const TOM_TOM = 4;

    /** @var int */
    const EPSON = 5;
}