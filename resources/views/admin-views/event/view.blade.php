@extends('layouts.back-end.app')

@section('title', \App\CPU\translate('Event Show'))

@section('content')
    <div class="container my-3">

        <a href="{{ route('admin.event.index') }}" class="btn btn-primary my-3 btn-sm py-2">List</a>

        <div class="row">

            <div class="col-lg-12 col-sm-12 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="mt-2 m-auto">Event View</h3>
                    </div>
                    <div class="card-body">

                        <table class="table">
                            <tr>
                                <th class="text-dark">
                                    <h3>Item</h3>
                                </th>
                                <th class="text-dark">
                                    <h3>Value</h3>
                                </th>

                            </tr>

                            <tr>
                                <td>Event Name</td>
                                <td>:{{ $event->name }}</td>
                            </tr>

                            <tr>
                                <td>Event Description</td>
                                <td>:{!! $event->desc !!}</td>
                            </tr>

                            <tr>
                                <td>District</td>
                                <td>:{{ $event->district->name }}</td>
                            </tr>


                            <tr>
                                <td>Event Location</td>
                                <td>:{{ $event->location }}</td>
                            </tr>


                            <tr>
                                <td>Date</td>
                                <td>:{{ date('d-m-Y', strtotime($event->date)) }}</td>
                            </tr>


                            <tr>
                                <td>Event Image Caption</td>
                                <td>:{{ $event->image_caption }}</td>
                            </tr>



                            <tr>
                                <td>Image</td>
                                <td>:<img src="{{ asset('/uploads/event') }}/{{ $event->image }}" alt=""
                                        width="100" height="100" class="mx-1"></td>
                            </tr>


                        </table>

                    </div>
                </div>
            </div>



        </div>
    </div>
@endsection
