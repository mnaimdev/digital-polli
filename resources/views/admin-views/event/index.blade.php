@extends('layouts.back-end.app')

@section('title', \App\CPU\translate('Event'))

@section('content')
    <div class="container my-5">
        <a href="{{ route('admin.event.create') }}" class="btn btn-primary my-3">Create New</a>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="m-auto">
                            Event List
                        </h3>
                    </div>
                    <div class="card-body">
                        <table class="display" id="myTable">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>District</th>
                                    <th>Location</th>
                                    <th>Image Caption</th>
                                    <th>Image</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($events as $sl => $event)
                                    <tr>
                                        <td>{{ $sl + 1 }}</td>
                                        <td>{{ $event->name }}</td>
                                        <td>{!! $event->desc !!}</td>
                                        <td>{{ $event->district->name }}</td>
                                        <td>{{ $event->location }}</td>
                                        <td>{{ $event->image_caption }}</td>
                                        <td>
                                            <img src="{{ asset('/uploads/event') }}/{{ $event->image }}" width="100"
                                                height="100"alt="">
                                        </td>

                                        <td>{{ date('d-m-Y', strtotime($event->date)) }}</td>
                                        <td>
                                            <a href="" class="btn btn-primary">Edit</a>

                                            <a href="" class="btn btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
