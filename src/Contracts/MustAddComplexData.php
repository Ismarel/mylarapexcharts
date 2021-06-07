<?php


namespace ismarel\LarapexCharts\Contracts;


interface MustAddComplexData
{
    public function addData(string $name, array $data);
    
    public function addDataM(string $name, array $data);
}