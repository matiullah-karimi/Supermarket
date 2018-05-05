@extends('layouts.app')
@section('content')

<div class="page-content vertical-align-middle col-md-offset-4 col-md-4">
    <div class="panel">
        <div class="panel-heading">
            <h3 class="panel-title">Edit Category</h3>
        </div>
        <div class="panel-body container-fluid">
            <form autocomplete="off" action="/categories" method="POST">
                <input type="hidden" name="_method" value="put">

                @csrf
                <div class="form-group form-material">
                    <label>Name</label>
                    <input type="text" class="form-control empty" name="name" value="{{ $category->name }}">
                </div>

                <div class="form-group form-material floating">
                    <input type="submit" class="btn btn-success">
                </div>
            </form>
        </div>
    </div>
</div>

@endsection