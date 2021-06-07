<?php

namespace ismarel\LarapexCharts\Traits;

trait ComplexChartDataAggregator
{
    public function addData(string $name, array $data) :self
    {
        $this->dataset = json_decode($this->dataset);

        $this->dataset[] = [
            'name' => $name,
            'data' => $data
        ];

        $this->dataset = json_encode($this->dataset);

        return $this;
    }
    public function addDataM(string $name, array $data) :self
    {
        $this->datasetM = json_decode($this->datasetM);

        $this->datasetM[] = [
            'name' => $name,
            'data' => $data
        ];

        $this->datasetM = json_encode($this->datasetM);

        return $this;
    }
}