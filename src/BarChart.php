<?php

namespace ismarel\LarapexCharts;

use ismarel\LarapexCharts\Contracts\MustAddComplexData;
use ismarel\LarapexCharts\Traits\ComplexChartDataAggregator;

class BarChart extends LarapexChart implements MustAddComplexData
{
    use ComplexChartDataAggregator;

    public function __construct()
    {
        parent::__construct();
        $this->type = 'bar';
    }

    public function addBar(string $name, array $data) :BarChart
    {
        return $this->addData($name, $data);
    }
}