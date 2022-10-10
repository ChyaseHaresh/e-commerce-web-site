@extends('admin/layout')
@section('page_title', 'Manage Coupon')
@section('coupon_select', 'active')
@section('container')
    <h1 class="mb10">Manage Coupon</h1>
    <a href="{{ url('admin/coupon') }}">
        <button type="button" class="btn btn-success">
            Back
        </button>
    </a>
    <div class="row m-t-30">
        <div class="col-md-12">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('coupon.manage_coupon_process') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="title" class="control-label mb-1">Name of Coupan<sup
                                                    class="text-danger">*</sup></label>
                                            <input id="title" value="{{ $title }}" name="title" type="text"
                                                class="form-control" aria-required="true" aria-invalid="false" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="code" class="control-label mb-1">Code<sup
                                                    class="text-danger">*</sup></label>
                                            <input id="code" value="{{ $code }}" name="code" type="text"
                                                class="form-control" aria-required="true" aria-invalid="false" required>
                                            @error('code')
                                                <div class="alert alert-danger" role="alert">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="value" class="control-label mb-1">Type (Amount/Percentage)<sup
                                                    class="text-danger">*</sup></label>
                                            <select id="type" name="type" class="form-control" required>
                                                @if ($type == 'Value')
                                                    <option value="Value" selected>Ammount</option>
                                                    <option value="Per">Percentage</option>
                                                @elseif($type == 'Per')
                                                    <option value="Value">Ammount</option>
                                                    <option value="Per" selected>Percentage</option>
                                                @else
                                                    <option value="Value">Ammount</option>
                                                    <option value="Per">Percentage</option>
                                                @endif
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="value" class="control-label mb-1">Ammount/Percent<sup
                                                    class="text-danger fs-4">*</sup></label>
                                            <input id="value" value="{{ $value }}" name="value" type="text"
                                                class="form-control" aria-required="true" aria-invalid="false" required>
                                        </div>

                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="title" class="control-label mb-1">Applied in Minimum Amt. <i
                                                    class="zmdi zmdi-help-outline text-primary" data-toggle="tooltip"
                                                    data-placement="right"
                                                    title="The minimum ordering amount where coupon is applicable">

                                                </i></label>
                                            <input id="min_order_amt" value="{{ $min_order_amt }}" name="min_order_amt"
                                                type="text" class="form-control" aria-required="true"
                                                aria-invalid="false" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="code" class="control-label mb-1">IS One Time</label>
                                            <select id="is_one_time" name="is_one_time" class="form-control" required>
                                                @if ($is_one_time == '1')
                                                    <option value="1" selected>Yes</option>
                                                    <option value="0">No</option>
                                                @else
                                                    <option value="1">Yes</option>
                                                    <option value="0" selected>No</option>
                                                @endif
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                        Submit
                                    </button>
                                </div>
                                <input type="hidden" name="id" value="{{ $id }}" />
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
