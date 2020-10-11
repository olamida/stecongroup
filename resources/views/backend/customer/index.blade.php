@extends('backend.layouts.app')

@section('title', app_name() . ' | '. __('labels.backend.customers.management'))

@section('content')
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-sm-5">
                <h4 class="card-title mb-0">
                    @lang('labels.backend.customers.management')
                </h4>
            </div><!--col-->

            <div class="col-sm-7 pull-right">
                @include('backend.customers.includes.header-buttons')
            </div><!--col-->
        </div><!--row-->

        <div class="row mt-4">
            <div class="col">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>@lang('labels.backend.customers.table.name')</th>
                                <th>@lang('labels.backend.customers.table.type')</th>
                                <th>@lang('labels.backend.customers.table.email')</th>
                                <th>@lang('labels.backend.customers.table.phone')</th>
                                <th>@lang('labels.backend.access.users.table.last_updated')</th>
                                <th>@lang('labels.general.actions')</th>
                            </tr>
                        </thead>
                        <tbody>
                        @if ($customers->count() !== 0)
                            @foreach($customers as $customer)
                                <tr>
                                    <td>
                                        {{ ucwords($customer->fname ) }} 
                                        {{ ucwords($customer->lname) }}
                                    </td>
                                    <td>{{ ucwords($customer->type) }}</td>
                                    <td>{{ ucwords($customer->email) }}</td>
                                    <td>{{ ucwords($customer->phone) }}</td>
                                    
                                    <td>{{ ucwords($customer->updated_at->diffForHumans()) }}</td>

                                    <td>@include('backend.customers.includes.actions', ['customer' => $customer])</td>
                                </tr>
                            @endforeach
                        @else
                            <tr><td>N/A</td></tr>
                        @endif
                    </table>
                </div>
            </div><!--col-->
        </div><!--row-->
        <div class="row">
            <div class="col-7">
                <div class="float-left">
                    {!! $customers->count() !!} {{ trans_choice('labels.backend.customers.table.total', $customers->count()) }}
                </div>
            </div><!--col-->

            <div class="col-5">
                <div class="float-right">
                   Render
                </div>
            </div><!--col-->
        </div><!--row-->
    </div><!--card-body-->
</div><!--card-->
@endsection
