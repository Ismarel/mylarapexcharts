<script>
    var options = {
        chart: {
            type: '{!! $chart->type() !!}',
            height: {!! $chart->height() !!},
            width: '{!! $chart->width() !!}',
            toolbar: {!! $chart->toolbar() !!},
            zoom: {!! $chart->zoom() !!},
            animations: {
                enabled: true,
                easing: 'swing',
                animateGradually: {
                    enabled: true
                },
                dynamicAnimation: {
                    enabled: false
                }
            }
        },
        plotOptions: {
            bar: {!! $chart->horizontal() !!}
        },
        colors: {!! $chart->colors() !!},
        series: {!! $chart->dataset() !!},
        seriesM: {!! $chart->datasetM() !!},
        dataLabels: {!! $chart->dataLabels() !!},
        @if ($chart->labels())
            labels: {!! json_encode($chart->labels(), true) !!},
        @endif
        title: {
            text: "{!! $chart->title() !!}"
        },
        subtitle: {
            text: '{!! $chart->subtitle() !!}',
            align: '{!! $chart->subtitlePosition() !!}'
        },
        xaxis: {
            categories: {!! $chart->xAxis() !!}
        },
        grid: {!! $chart->grid() !!},
        markers: {!! $chart->markers() !!},
        theme: {
            mode: '{!! $chart->mode() !!}'
        },
        @if ($chart->stroke())
            stroke: {!! $chart->stroke() !!},
        @endif
    }

    var {!! $chart->name() !!} = new ApexCharts(document.querySelector("#{!! $chart->id() !!}"), options);
    {!! $chart->name() !!}.render();
</script>
