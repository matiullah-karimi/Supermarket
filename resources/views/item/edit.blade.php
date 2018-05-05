@extends('layouts.app')
@section('content')

<div class="page-content vertical-align-middle col-md-offset-1 col-md-8">
    <div class="panel">
        <div class="panel-heading">
            <h3 class="panel-title">Add Category</h3>
        </div>
        <div class="panel-body container-fluid">
            <form autocomplete="off" action="/items" method="POST">
                {{  csrf_field() }}

                <div class="form-group form-material floating">
                    <input type="text" class="form-control empty" name="name" required value="{{ $item->name }}">
                    <label class="floating-label">Name</label>
                </div>

                <div class="form-group form-material floating">
                    <textarea class="form-control empty" rows="3" name="description" value="{{ $item->desc }}"></textarea> 
                   <label class="floating-label">Description</label>
                </div>

                <div class="form-group form-material floating">
                   <select class="form-control" id="select" name="category_id">
                        @foreach($categories as $cat)
                            <option value="{{ $cat->id }}"> {{ $cat->name }} </option>
                        @endforeach
                    </select>  
                   <label class="floating-label">Category</label>
                </div>

                <div class="form-group form-material floating">
                    <input type="number" class="form-control empty" name="price" required value="{{ $item->price }}">
                    <label class="floating-label">Price</label>
                </div>

                <div class="form-group form-material floating">
                    <input type="number" class="form-control empty" name="quantity" required value="{{ $item->quantity }}">
                    <label class="floating-label">Quantity</label>
                </div>
             

                <div class="form-group form-material floating">
                    <input type="submit" class="btn btn-success">
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
