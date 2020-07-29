<?php

namespace Runalyze\Devices\Device;

use Runalyze\Devices\Distributor\DistributorInterface;

interface DeviceInterface
{
    /**
     * @return int
     */
    public function getEnum();

    /**
     * @return string
     */
    public function getName();

    /**
     * @return string device name with distributor name as prefix
     * 
     * @codeCoverageIgnore
     */
    public function getFullName();

    /**
     * @return int
     */
    public function getDistributorEnum();

    /**
     * @return DistributorInterface
     */
    public function getDistributor();

    /**
     * @return bool
     * 
     * @codeCoverageIgnore
     */
    public function hasBarometer();
}