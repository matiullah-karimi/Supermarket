@extends('layouts.app')
@section('content')

<div class="panel">
    <div class="panel-heading padding-25">
        <a href="/items/create" type="button" style="margin:10px;" class="btn btn-success">
            <i class="icon wb-plus" aria-hidden="true"></i> Add Item
        </a>
    </div>
    <div class="panel-body">
        <div class="bootstrap-table">
            <div class="fixed-table-toolbar"></div>
            <div class="fixed-table-container" style="padding-bottom: 0px;">
                <div class="fixed-table-body">
                    <table data-card-view="true" data-mobile-responsive="true" class="table table-hover table-bordered" style="margin-top: 0px;">
                            <thead>
                                <tr>
                                    <th style="" data-field="name" tabindex="0">
                                        <div class="th-inner ">Name</div>
                                    </th>
                                    <th style="" data-field="name" tabindex="0">
                                        <div class="th-inner ">Category</div>
                                    </th>
                                    <th style="" data-field="name" tabindex="0">
                                        <div class="th-inner ">Price</div>
                                    </th>
                                    <th style="" data-field="name" tabindex="0">
                                        <div class="th-inner ">Quantity</div>
                                    </th>
                                    <th style="" data-field="star" tabindex="0">
                                        <div class="th-inner ">Actions</div>
                                    </th>
                                </tr>
                            </thead>
                        {{--  <tbody>
                            @if({{count($categories)==0}})
                                <tr class="no-records-found">
                                    <td colspan="5">No matching records found</td>
                                </tr>
                            @endif
                        </tbody>  --}}

                         <tbody>
                            @foreach($items as $item)
                                <tr>
                                    <td> {{ $item->name }} </td>
                                    <td> {{ $item->category->name }} </td>
                                    <td> {{ $item->price }} </td>
                                    <td> {{ $item->quantity }} </td>
                                    <td>
                                        <a href="/items/{{ $item->id }}/sell"> Sell </a> 
                                        <a href="/items/{{ $item->id }}/edit"> Edit </a>
                                        <form method="POST" action="/items/{{ $item->id }}">
                                            <input type="hidden" name="_method" value="delete">
                                            <button type="submit">Delete</button>
                                        </form>
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