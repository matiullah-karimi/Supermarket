@extends('layouts.app')
@section('content')

<div class="page-content vertical-align-middle col-md-offset-4 col-md-4">
    <div class="panel">
        <div class="panel-heading">
            <h3 class="panel-title">Add Category</h3>
        </div>
        <div class="panel-body container-fluid">
            <form autocomplete="off" action="/categories" method="POST">
                {{  csrf_field() }}
                <div class="form-group form-material floating">
                    <input type="text" class="form-control empty" name="name" required>
                    <label class="floating-label">Name</label>
                </div>

                <div class="form-group form-material floating">
                    <input type="submit" class="btn btn-success">
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
