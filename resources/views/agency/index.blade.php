@extends('layouts.nav')
@section('content')
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Agency List</h6>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <a href="{{ route('agency.create') }}" class="btn bg-gradient-success" style="margin-left: 93%; font-size: 15px;">+</a>
                    <div class="table-responsive p-0" style="margin-left: 5%; margin-right: 5%;">
                        <table class="table align-items-center mb-5">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Logo</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Agency Name</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">CEO</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($data as $d)
                                <tr>
                                    <td>
                                        <img src="{{ $d->logo }}" style="max-height: 80px; border-radius: 50%;">
                                    </td>
                                    <td>{{ $d->name }}</td>
                                    <td>{{ $d->CEO }}</td>
                                    <td class="text-center">
                                        <x-delete-button :id="$d->id" :action="route('agency.destroy', $d->id)" />

                                        <a href="{{ route('agency.edit', $d->id) }}" class="btn btn-icon btn-2 btn bg-gradient-warning">
                                            <span class="btn-inner--icon"><i class="fa-solid fa-edit"></i></span>
                                        </a>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="3" class="text-center">
                                        <img class="p-5" height="300" src="{{ asset('assets/img/nodata.png') }}"
                                            alt="Data not found">
                                    </td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
