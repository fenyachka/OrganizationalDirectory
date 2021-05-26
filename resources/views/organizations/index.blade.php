@extends('layouts.app')

@section('content')

<div class="bg-white py-3 mb-4 shadow-sm">
    <div class="container">
        <div class="row px-3">
            <div class="col-12">
                <h4>ორგანიზაციების სია</h4>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="bg-white px-3 py-4 br-10 shadow">
        <div class="row">
            <div class="col-12 mb-4">
                <div class="d-flex justify-content-between flex-column flex-md-row ">
                    <div class="mb-3 mb-md-0">
                        <a href="{{ route('organizations-create') }}" class="btn btn-success">ორგანიზაციის დამატება</a>
                    </div>

                    <form action="{{ route('searchOrganizationa')}}" method="get">
                        <div class="form-group mb-2">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="ძიება..." name='search' value="@isset($search){{ $search }}@endisset">
                                <button type="submit" class="btn btn-outline-secondary"><i class="fas fa-search"></i></span>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-12">
                <div class="table-responsive">
                    <table class="table table-hover  bg-white">
                        <thead class="table-light">
                            <tr>
                                <th>დასახელება</th>
                                <th>მისამართი</th>
                                <th>საქმიანობა</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($organizations as $organization)
                            <tr>
                                <td>{{ $organization->name}}</td>
                                <td>{{ $organization->address}}</td>
                                <td>{{ $organization->activities}}</td>

                                <td class="text-center">
                                    <div class="d-flex justify-content-center align-items-center">
                                        <div class="me-3">
                                            <a href="{{ route('organization-edit', $organization->id)}}" class="btn btn-warning" data-toggle="tooltip" data-placement="top" title="რედაქტირება">
                                                <i class="far fa-edit"></i>
                                            </a>
                                        </div>
                                        <form action="{{ route('organization-destroy', $organization->id)}}" method="post">
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
                </div>
                <div class="d-flex justify-content-start">

                    {!! $organizations->links() !!}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
