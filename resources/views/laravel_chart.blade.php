@extends('layouts.app')

@section('content')
<h1>Charts</h1>
    <!-- Chart's container -->
    <div id="lineChart" style="height: 300px;"></div>
    <div id="barChart" style="height: 300px;"></div>
    <div id="pieChart" style="height: 300px;"></div>

<script>
      const line_chart = new Chartisan({
        el: '#lineChart',
        url: "@chart('line_chart')",
        hooks: new ChartisanHooks()
              .datasets(['line'])
      });

      const bar_chart = new Chartisan({
        el: '#barChart',
        url: "@chart('bar_chart')",
        hooks: new ChartisanHooks()
              .datasets(['bar'])
      });

      const pie_chart = new Chartisan({
        el: '#pieChart',
        url: "@chart('pie_chart')",
        hooks: new ChartisanHooks()
              .datasets(['pie'])
      });
    </script>
@endsection