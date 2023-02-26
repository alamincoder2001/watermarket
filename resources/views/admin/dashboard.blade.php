@extends("layouts.backend_master")

@section("title", "Admin Dashboard")
@section("breadcrumb_title", "Admin Dashboard")
@section("breadcrumb_item", "Admin Dashboard")

@section("content")
<!-- Column -->
<div class="col-md-4 col-lg-4 col-xlg-4">
    <div class="card card-hover">
        <div class="box bg-warning text-center">
            <h1 class="font-light text-white">
                {{count($total['today_order'])}}
            </h1>
            <h6 class="text-white">Today Order</h6>
        </div>
    </div>
</div>
<!-- Column -->
<div class="col-md-4 col-lg-4 col-xlg-4">
    <div class="card card-hover">
        <div class="box bg-danger text-center">
            <h1 class="font-light text-white">
                {{count($total['monthly_order'])}}
            </h1>
            <h6 class="text-white">Monthly Order</h6>
        </div>
    </div>
</div>
<!-- Column -->
<div class="col-md-4 col-lg-4 col-xlg-4">
    <div class="card card-hover">
        <div class="box bg-info text-center">
            <h1 class="font-light text-white">
                {{count($total['yearly_order'])}}
            </h1>
            <h6 class="text-white">Yearly Order</h6>
        </div>
    </div>
</div>
<!-- Column -->
<div class="col-md-4 col-lg-4 col-xlg-4">
    <div class="card card-hover">
        <div class="box bg-warning text-center">
            <h1 class="font-light text-white">
                {{$total['today_sold'][0]->total_amount}}
            </h1>
            <h6 class="text-white">Today Sold</h6>
        </div>
    </div>
</div>
<!-- Column -->
<div class="col-md-4 col-lg-4 col-xlg-4">
    <div class="card card-hover">
        <div class="box bg-danger text-center">
            <h1 class="font-light text-white">
                {{$total['monthly_sold'][0]->total_amount}}
            </h1>
            <h6 class="text-white">Monthly Sold</h6>
        </div>
    </div>
</div>
<!-- Column -->
<div class="col-md-4 col-lg-4 col-xlg-4">
    <div class="card card-hover">
        <div class="box bg-info text-center">
            <h1 class="font-light text-white">
                {{$total['yearly_sold'][0]->total_amount}}
            </h1>
            <h6 class="text-white">Yearly Sold</h6>
        </div>
    </div>
</div>
@endsection