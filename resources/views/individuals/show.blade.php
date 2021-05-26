@extends('layouts.app')

@section('content')
<div class="container mt-5">

    <div class="row">
        <div class="col-12">
            <div class="card shadow-sm">
                <h5 class="card-header  py-3">დეტალური ინფორმაცია</h5>

                <div class="card-body">
                    <dl class="row">
                        <dt class="col-sm-4">სახელი</dt>
                        <dd class="col-sm-8">{{ $individual->firstname }} </dd>

                        <dt class="col-sm-4">გვარი</dt>
                        <dd class="col-sm-8">{{$individual->lastname}}</dd>

                        <dt class="col-sm-4">სქესი</dt>
                        <dd class="col-sm-8">{{ $individual->gender==0 ? 'მდედრობითი' : 'მამრობითი'}}</dd>

                        <dt class="col-sm-4">პირადი ნომერი</dt>
                        <dd class="col-sm-8">{{$individual->personal_number}}</dd>

                        <dt class="col-sm-4">დაბადების თარიღი</dt>
                        <dd class="col-sm-8">{{$individual->birth_date}}</dd>

                        <dt class="col-sm-4">ქალაქი</dt>
                        <dd class="col-sm-8">{{$individual->city}}</dd>

                        <dt class="col-sm-4">ტელეფონის ნომერი 1</dt>
                        <dd class="col-sm-8">{{$individual->phone_number_1}}</dd>

                        <dt class="col-sm-4">ტელეფონის ნომერი 2</dt>
                        <dd class="col-sm-8">{{$individual->phone_number_2}}</dd>

                    </dl>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
