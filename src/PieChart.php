<?php

namespace ismarel\LarapexCharts;


use ismarel\LarapexCharts\Contracts\MustAddSimpleData;
use ismarel\LarapexCharts\Traits\SimpleChartDataAggregator;

class PieChart extends LarapexChart implements MustAddSimpleData
{
    use SimpleChartDataAggregator;

    public function __construct()
    {
        parent::__construct();
        $this->type = 'pie';
    }

    public function addPieces(array $data) :PieChart
    {
        $this->addData($data);
        return $this;
    }
}