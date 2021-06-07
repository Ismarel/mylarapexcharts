<?php


namespace ismarel\LarapexCharts;


use ismarel\LarapexCharts\Contracts\MustAddComplexData;
use ismarel\LarapexCharts\Traits\ComplexChartDataAggregator;

class HeatMapChart extends LarapexChart implements MustAddComplexData
{
    use ComplexChartDataAggregator;

    public function __construct()
    {
        parent::__construct();
        $this->type = 'heatmap';
    }

    public function addHeat(string $name, array $data) :HeatMapChart
    {
        return $this->addData($name, $data);
    }
    public function addHeatM(string $name, array $data) :HeatMapChart
    {
        return $this->addDataM($name, $data);
    }
}