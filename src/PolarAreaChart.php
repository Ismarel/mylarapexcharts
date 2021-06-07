<?php

namespace ismarel\LarapexCharts;


use ismarel\LarapexCharts\Contracts\MustAddSimpleData;
use ismarel\LarapexCharts\Traits\SimpleChartDataAggregator;

class PolarAreaChart extends LarapexChart implements MustAddSimpleData
{
    use SimpleChartDataAggregator;

    public function __construct()
    {
        parent::__construct();
        $this->type = 'polarArea';
    }

    public function addPolarAreas(array $data) :PolarAreaChart
    {
        $this->addData($data);
        return $this;
    }
}