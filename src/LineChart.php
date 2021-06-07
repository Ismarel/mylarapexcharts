<?php

namespace ismarel\LarapexCharts;


use ismarel\LarapexCharts\Contracts\MustAddComplexData;
use ismarel\LarapexCharts\Traits\ComplexChartDataAggregator;

class LineChart extends LarapexChart implements MustAddComplexData
{
    use ComplexChartDataAggregator;

    public function __construct()
    {
        parent::__construct();
        $this->type = 'line';
    }

    public function addLine(string $name, array $data) :LineChart
    {
        return $this->addData($name, $data);
    }
}