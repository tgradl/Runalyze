<?php

namespace Runalyze\Devices\Distributor;

interface DistributorInterface
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
     * @return int[]
     */
    public function getDeviceEnumList();
}