@extends('admin.layout')
@section('content')
<div class="content">
<div class="row">
    <div class="col-md-6 col-lg-4 col-xl-3">
        <div class="widget-block rounded bg-primary  d-flex">
            <div class="widget-info align-self-center w-50">
                <h3 class="text-white mb-2">71,503</h3>
                <p>Online Signups</p>
            </div>
            <div class="widget-chart w-50">
                <canvas id="barChart2"></canvas>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-4 col-xl-3">
        <div class="widget-block rounded bg-warning  d-flex">
            <div class="widget-info align-self-center w-50">
                <h3 class="text-white mb-2">9,503</h3>
                <p>Weekly Visitors</p>
            </div>
            <div class="widget-chart w-50">
                <canvas id="linechart2"></canvas>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-4 col-xl-3">
        <div class="widget-block rounded bg-danger  d-flex">
            <div class="widget-info align-self-center w-50">
                <h3 class="text-white mb-2">71,503</h3>
                <p>Weekly Total Order</p>
            </div>
            <div class="widget-chart w-50">
                <canvas id="areaChart2"></canvas>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-4 col-xl-3">
        <div class="widget-block rounded bg-success  d-flex">
            <div class="widget-info align-self-center w-50">
                <h3 class="text-white mb-2">10,503</h3>
                <p>Revenue This Week</p>
            </div>
            <div class="widget-chart w-50">
                <canvas id="gline2"></canvas>
            </div>
        </div>
    </div>
</div>
</div>
@endsection