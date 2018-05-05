@extends('layouts.app')
@section('content')

<div class="panel">
    <div class="panel-heading padding-30">
        <h4> Sales </h4>
        {{--  <a href="/items/create" type="button" style="margin:10px;" class="btn btn-success">
            <i class="icon wb-plus" aria-hidden="true"></i> Add Item
        </a>  --}}
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
                                        <div class="th-inner ">Item Name</div>
                                    </th>
                                    <th style="" data-field="name" tabindex="0">
                                        <div class="th-inner ">Price</div>
                                    </th>
                                    <th style="" data-field="name" tabindex="0">
                                        <div class="th-inner ">Quantity</div>
                                    </th>
                                    <th style="" data-field="name" tabindex="0">
                                        <div class="th-inner ">Customer</div>
                                    </th>
                                    <th style="" data-field="name" tabindex="0">
                                        <div class="th-inner ">Paid Amount</div>
                                    </th>
                                    <th style="" data-field="name" tabindex="0">
                                        <div class="th-inner ">Due Amount</div>
                                    </th>
                                     <th style="" data-field="name" tabindex="0">
                                        <div class="th-inner ">Sold On</div>
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
                            @foreach($sales as $sale)
                                <tr>
                                    <td> {{ $sale->item->name }} </td>
                                    <td> {{ $sale->price }} </td>
                                    <td> {{ $sale->quantity }} </td>
                                    <td title="{{$sale->customer->phone}}"> {{ $sale->customer->username }} </td>
                                    <td> {{ $sale->paid }} </td>
                                    <td> {{ ($sale->price * $sale->quantity) - $sale->paid}} </td>
                                    <td> {{ $sale->created_at->diffForHumans() }} </td>
                                    <td>
                                        <a href="/sales/{{ $sale->id }}/edit"> Edit </a>
                                        
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