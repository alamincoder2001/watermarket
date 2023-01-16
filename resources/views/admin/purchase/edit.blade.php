@extends("layouts.backend_master")

@section("title", "Admin Purchase Edit")
@section("breadcrumb_title", "Purchase Edit")
@section("breadcrumb_item", "Purchase  Edit")

@section("content")
    <purchase_edit invoice-number="{{$id}}"></purchase_edit>
@endsection