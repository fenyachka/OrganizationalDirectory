@extends('layouts.app')

@section('content')

<div class="container my-5">
    <div class="row">
        <div class="col-12">

            <div class="card shadow-sm">
                <div class="card-header bg-warning py-3">
                    <h5>ფიზიკური პირის რედაქტირება</h5>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('individual-update', $individual->id) }}">
                        @csrf
                        @method('PUT')
                        <div class="row mb-3">
                            <div class="col">
                                <div class="form-group">
                                    <label for="firstname" class="form-label">სახელი</label>
                                    <input type="text" class="form-control {{ $errors->has('firstname') ? 'is-invalid' : ''}}" value="{{ $individual->firstname }}" id="firstname" name="firstname" aria-describedby="firstname-validation">
                                    @if($errors->has('firstname'))
                                    <div class="invalid-feedback" id="firstname-validation">{{ $errors->first('firstname')}}</div>
                                    @endif
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="lastname" class="form-label">გვარი</label>
                                    <input type="text" class="form-control {{ $errors->has('lastname') ? 'is-invalid' : ''}}" value="{{ $individual->lastname }}" id="lastname" name="lastname" aria-describedby="lastname-validation">
                                    @if($errors->has('lastname'))
                                    <div class="invalid-feedback" id="lastname-validation">{{ $errors->first('lastname')}}</div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-6">
                                <div class="form-check">

                                    <input class="form-check-input" type="radio" name="gender" id="female" value="0" {{$individual->gender === 0 ? 'checked' : ''}}>
                                    <label class="form-check-label" for="female">
                                        მდედრობითი
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender" id="male" value="1" {{$individual->gender === 1 ? 'checked' : ''}}>
                                    <label class="form-check-label" for="male">
                                        მამრობითი
                                    </label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="personal_number" class="form-label">პირადი ნომერი</label>
                                    <input type="text" class="form-control {{ $errors->has('personal_number') ? 'is-invalid' : ''}}" value="{{ $individual->personal_number }}" id="personal_number" name="personal_number" aria-describedby="personal_number-validation">
                                    @if($errors->has('personal_number'))
                                    <div class="invalid-feedback" id="personal_number-validation">{{ $errors->first('personal_number')}}</div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="birth_date" class="form-label">დაბადების თარიღი</label>
                                    <input type="date" class="form-control {{ $errors->has('birth_date') ? 'is-invalid' : ''}}" value="{{ $individual->birth_date }}" id="birth_date" name="birth_date" aria-describedby="birth_date-validation">
                                    @if($errors->has('birth_date'))
                                    <div class="invalid-feedback" id="birth_date-validation">{{ $errors->first('birth_date')}}</div>
                                    @endif
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="city" class="form-label">ქალაქი</label>
                                    <input type="text" class="form-control {{ $errors->has('city') ? 'is-invalid' : ''}}" value="{{ $individual->city }}" id="city" name="city" aria-describedby="city-validation">
                                    @if($errors->has('city'))
                                    <div class="invalid-feedback" id="city-validation">{{ $errors->first('city')}}</div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="phone_number_1" class="form-label">ტელეფონის ნომერი 1</label>
                                    <input type="text" class="form-control {{ $errors->has('phone_number_1') ? 'is-invalid' : ''}}" value="{{$individual->phone_number_1 }}" id="phone_number_1" name="phone_number_1" aria-describedby="phone_number_1-validation">
                                    @if($errors->has('phone_number_1'))
                                    <div class="invalid-feedback" id="phone_number_1-validation">{{ $errors->first('phone_number_1')}}</div>
                                    @endif
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="phone_number_2" class="form-label">ტელეფონის ნომერი 2</label>
                                    <input type="text" class="form-control {{ $errors->has('phone_number_2') ? 'is-invalid' : ''}}" value="{{ $individual->phone_number_2 }}" id="phone_number_2" name="phone_number_2" aria-describedby="phone_number_2-validation">
                                    @if($errors->has('phone_number_2'))
                                    <div class="invalid-feedback" id="phone_number_2-validation">{{ $errors->first('phone_number_2')}}</div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-warning">რედაქტირება</button>
                        </div>
                    </form>
                </div>
            </div>


        </div>
    </div>
</div>

@endsection

<style>
    .invalid-feedback {
        display: block !important;
    }
</style>
