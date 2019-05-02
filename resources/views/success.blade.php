@extends('layouts.illustrate')

@section('code', 'Success!')
@section('title', __('Payment Success'))

@section('image')
<div style="background-image: url('/images/order.svg');" class="absolute pin bg-cover bg-no-repeat md:bg-left lg:bg-center">
</div>
@endsection

@section('message', __('Thanks!!, you have paid the product we are going to ship to your door.'))
