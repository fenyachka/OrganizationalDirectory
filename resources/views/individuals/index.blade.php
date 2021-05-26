@extends('layouts.app')

@section('content')
<div class="bg-white py-3 mb-4 shadow-sm">
    <div class="container">
        <div class="row px-3">
            <div class="col-12">
                <h4>ფიზიკური პირების სია</h4>
            </div>
        </div>
    </div>
</div>


<div class="container">
    <div class="bg-white px-3 py-4 br-10 shadow">
        <div class="row">
            <div class="col-12 mb-4">
                <div class="d-flex justify-content-between">
                    <div> <a href="{{ route('individual-create')}}" class="btn btn-success">ფიზიკური პირის დამატება</a></div>
                    <form action="{{ route('searchIndividual')}}" method="get">
                        <div class="form-group mb-2">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="ძიება..." name='search'>
                                <button type="submit" class="btn btn-outline-secondary"><i class="fas fa-search"></i></span>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-12">
                <table class="table table-hover bg-white">
                    <thead class="table-light">
                        <tr>
                            <th>სახელი</th>
                            <th>გვარი</th>
                            <th>სქესი</th>
                            <th>პირადი ნომერი</th>
                            <th>დაბადების თარიღი</th>
                            <th>ქალაქი</th>
                            <th>ტელეფონის ნომრები</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($individuals as $individual)
                        <tr>
                            <td>{{ $individual->firstname}}</td>
                            <td>{{ $individual->lastname}}</td>
                            <td>{{ $individual->gender===0 ? 'მდედრობითი' : 'მამრობითი'}}</td>
                            <td>{{ $individual->personal_number}}</td>
                            <td>{{ $individual->birth_date}}</td>
                            <td>{{ $individual->city}}</td>
                            <td>{{ $individual->phone_number_1}} {{ $individual->phone_number_2}}</td>

                            <td class="text-center">
                                <div class="d-flex justify-content-around align-items-center">
                                    <div>
                                        <a href="{{ route('individual-edit', $individual->id)}}" class="btn btn-warning" data-toggle="tooltip" data-placement="top" title="რედაქტირება">
                                            <i class="far fa-edit"></i>
                                        </a>
                                    </div>
                                    <div>
                                        <a href="{{ route('individual-show', $individual->id) }}" class="btn btn-info btn-dm" data-toggle="tooltip" data-placement="top" title="პროფილის ნახვა">
                                            <i class="far fa-user"></i>
                                        </a>
                                    </div>
                                    <form action="{{ route('individual-destroy', $individual->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="sumit" class="btn btn-danger btn-md" data-toggle="tooltip" data-placement="top" title="წაშლა"><i class="fas fa-trash"></i></button>
                                    </form>
                                </div>



                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="8" class="text-center"><small>მონაცემები არ არის</small></td>
                        </tr>
                        @endforelse

                    </tbody>
                </table>
                <div class="d-flex justify-content-start">

                    {!! $individuals->links() !!}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
