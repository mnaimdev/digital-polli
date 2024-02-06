@extends('layouts.back-end.app')

@section('title', \App\CPU\translate('Event Create'))

@section('content')
    <div class="container my-3">
        <a href="{{ route('admin.event.index') }}" class="btn btn-primary my-3">List</a>
        <div class="row">

            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="m-auto">Create Event</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.event.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="row">
                                <div class="col-lg-6 my-2">
                                    <label>Event Name</label>
                                    <input type="text" name="name"
                                        class="form-control @error('name')
                                            is-invalid
                                        @enderror"
                                        value="{{ old('name') }}" placeholder="Event Name">
                                    @error('name')
                                        <strong class="text-danger">
                                            {{ $message }}
                                        </strong>
                                    @enderror
                                </div>



                                <div class="col-lg-6 my-2">
                                    <label>Select District</label>
                                    <select name="district_id"
                                        class="form-control js-select2-custom @error('district_id')
                                        is-invalid
                                    @enderror">

                                        @php
                                            $districts = App\Model\District::all();
                                        @endphp



                                        <option selected disabled>District</option>
                                        @foreach ($districts as $district)
                                            <option value="{{ $district->id }}">{{ $district->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('district_id')
                                        <strong class="text-danger">
                                            {{ $message }}
                                        </strong>
                                    @enderror
                                </div>



                                <div class="col-lg-12 my-2">
                                    <label>Event Description</label>
                                    <textarea name="desc"
                                        class="ckeditor form-control @error('desc')
                                        is-invalid
                                    @enderror">{{ old('desc') }}</textarea>
                                    @error('desc')
                                        <strong class="text-danger">
                                            {{ $message }}
                                        </strong>
                                    @enderror
                                </div>




                                <div class="col-lg-12 my-2">
                                    <label>Event Date</label>
                                    <input type="date" name="date" value="{{ old('date') }}" class="form-control">
                                    @error('date')
                                        <strong class="text-danger">
                                            {{ $message }}
                                        </strong>
                                    @enderror
                                </div>


                                <div class="col-lg-12 my-2">
                                    <label>Event Location</label>
                                    <input type="text" name="location" value="{{ old('location') }}"
                                        class="form-control" placeholder="Event Location">
                                    @error('location')
                                        <strong class="text-danger">
                                            {{ $message }}
                                        </strong>
                                    @enderror
                                </div>



                                <div class="col-lg-6 my-2">
                                    <label>Event Image Caption</label>
                                    <input type="text" name="image_caption"
                                        class="form-control @error('image_caption')
                                        is-invalid
                                    @enderror">

                                    @error('image_caption')
                                        <strong class="text-danger">
                                            {{ $message }}
                                        </strong>
                                    @enderror

                                </div>


                                <div class="col-lg-6 my-2">
                                    <label>Event Image</label>
                                    <input type="file" name="image"
                                        class="form-control @error('image')
                                        is-invalid
                                    @enderror"
                                        onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">

                                    @error('image')
                                        <strong class="text-danger">
                                            {{ $message }}
                                        </strong>
                                    @enderror

                                    <div class="my-3">
                                        <img id="blah" width="100" alt="">
                                    </div>

                                </div>
                            </div>


                            <div class="my-2">
                                <button class="btn btn-primary" type="submit">
                                    Submit
                                </button>
                            </div>


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
