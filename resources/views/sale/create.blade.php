@extends('layouts.app')
@section('content')

<div class="page-content vertical-align-middle col-md-offset-1 col-md-8">
    <div class="panel">
        <div class="panel-heading">
            <h3 class="panel-title">Sell {{ $item->name }} </h3>
        </div>
        <div class="panel-body container-fluid">
            <form autocomplete="off" action="/sales" method="POST">
                {{  csrf_field() }}

                <input type="hidden" name="item_id" value="{{ $item->id }}">

                <div class="form-group form-material floating">
                    <input type="text" class="form-control empty" name="customer_name" required>
                    <label class="floating-label">Customer Name</label>
                </div>

                <div class="form-group form-material floating">
                    <input type="number" class="form-control empty" name="customer_phone" required>
                   <label class="floating-label">Customer Phone</label>
                </div>

                <div class="form-group form-material floating">
                    <input type="number" class="form-control empty" name="quantity" required>
                    <label class="floating-label">Quantity</label>
                </div>

                <div class="form-group form-material floating">
                    <input type="number" class="form-control empty" name="price" required value="{{$item->price}}">
                    <label class="floating-label">Price</label>
                </div>

                <div class="form-group form-material floating">
                    <input type="number" class="form-control empty" name="paid" required>
                    <label class="floating-label">Paid Amount</label>
                </div>

                
                <div class="form-group form-material floating">
                    <input type="submit" class="btn btn-success">
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
