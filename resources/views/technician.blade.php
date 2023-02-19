@extends("layouts.fronted_master")
@section("title", " - Technician List")
@section("content")
<nav class="breadcrumb-section section-py bg-light2">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="bread-crumb-title">Technician List</h3>
            </div>
        </div>
        <div class="bg-secondary p-3">
            Hello
        </div>
    </div>
</nav>

<section class="bg-light" style="padding-bottom: 25px;">
    <div class="container">
        <div class="row">
            @if(count($technician) > 0)
            @foreach($technician as $item)
                <div class="col-lg-2">
                    <a href="#" title="{{$item->name}}">
                        <div class="card">
                            <img class="card-img-top" style="height: 150px;" src="{{asset('nouser.png')}}" />
                            <div class="card-body">
                                <p class="m-0">{{$item->name}}</p>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
            @else
                <div class="text-center">Not Found Data</div>
            @endif
        </div>
    </div>
</section>
@endsection