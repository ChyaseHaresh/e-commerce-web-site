@extends('admin/layout')
@section('page_title','Settings')
@section('settings_select','active')
@section('container')

<div class="row">
    <h1>Settings</h1>
</div>
<div class="" style="width: 500px">
    <form class="needs-validation" action="{{ route('settings.save') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row g-3">
            <div class="col-sm-12">
                <label for="firstName" class="form-label">Website name</label>
                <input type="text" class="form-control" name="name" value="{{ $data[0]->website_name }}"
                    required="">
                <div class="invalid-feedback">
                    Valid first name is required.
                </div>
            </div>


            <div class="col-12">
                <label class="form-label">Website logo</label>
                <div class="input-group">
                    <input type="file" name="logo" accept=".png" class="form-control"
                        value="{{ $data[0]->logo }}" required>
                </div>
            </div>

            <div class="col-12">
                <label for="email" class="form-label">Primary Color </label>
                <input type="color" class="form-control" value="{{ $data[0]->primary_color }}" name="p_color"
                    required>
            </div>

            <div class="col-12">
                <label for="email" class="form-label">Secondary Color </label>
                <input type="color" class="form-control" name="s_color" value="{{ $data[0]->secondary_color }}"
                    required>
            </div>


            {{-- <div class="col-12">
                <label for="address" class="form-label">Font Family</label>
                <input type="text" class="form-control" id="address" placeholder="1234 Main St" required="">
                <div class="invalid-feedback">
                    Please enter your shipping address.
                </div>
            </div> --}}

            <div class="col-12">
                <label for="address2" class="form-label">Phone number</label>
                <input type="number" class="form-control" name="number" required value="{{ $data[0]->phone_number }}">
            </div>

            <div class="col-12">
                <label for="address2" class="form-label">Site Map</label>
                <input type="file" class="form-control" accept=".xml" name="s_map"
                    value="{{ $data[0]->site_map }}" required>
            </div>

            <div class="col-12">
                <label for="address2" class="form-label">Robot</label>
                <input type="file" class="form-control" accept=".txt" name="robot" required
                    value="{{ $data[0]->robot }}">
            </div>


            <div class="col-12">
                <label for="address2" class="form-label">Custom Code</label>
                <input type="text" class="form-control" name="c_code" value="{{ $data[0]->custome_code }}">
            </div>


            <hr class="my-4">

            <button class="w-100 btn btn-primary btn-lg" type="submit">Save Settings</button>
    </form>
</div>
@endsection
