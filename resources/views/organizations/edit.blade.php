@extends('layouts.app')

@section('content')
    <div class="container my-5">
        <div class="row">
            <div class="col-12">

                <div class="card shadow-sm">
                    <div class="card-header bg-warning py-3">
                        <h5>ორგანიზაციის რედაქტირება</h5>
                    </div>
                    <div class="card-body">

                        <form method="POST" action="{{ route('organization-update', $organization->id) }}">
                            @csrf
                            @method('PUT')
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name"  class="form-label">დასახელება</label>
                                        <input type="text" class="form-control {{ $errors->has('name') ? 'is-invalid' : ''}}" value="{{ $organization->name }}" id="name" name="name" aria-describedby="name-validation">
                                        @if($errors->has('name'))
                                        <div class="invalid-feedback" id="name-validation">{{ $errors->first('name')}}</div>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="address" class="form-label">მისამართი</label>
                                        <input type="text" class="form-control {{ $errors->has('address') ? 'is-invalid' : ''}}" value="{{ $organization->address }}" id="address"
                                        name="address" aria-describedby="address-validation">
                                        @if($errors->has('address'))
                                        <div class="invalid-feedback" id="address-validation">{{ $errors->first('address')}}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="activities"  class="form-label">საქმიანობა</label>
                                        <input type="text" class="form-control {{ $errors->has('activities') ? 'is-invalid' : ''}}" value="{{ $organization->activities }}"
                                        id="activities" name="activities" aria-describedby="activities-validation">
                                        @if($errors->has('activities'))
                                        <div class="invalid-feedback" id="activities-validation">{{ $errors->first('activities')}}</div>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mb-4">
                                        <label for="individuals"  class="form-label">ფიზიკური პირები</label>
                                        <select name="individuals[]" class="form-control"  size="5" multiple>
                                            @foreach($individuals as $individual)
                                                <option value="{{$individual->id}}"
                                                @if($organization->individuals->contains($individual->id)) selected @endif >
                                                {{ $individual->firstname}} {{ $individual->lastname}} - {{$individual->personal_number}}</option>
                                            @endforeach
                                        </select>
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
