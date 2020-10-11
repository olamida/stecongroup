@extends('backend.layouts.app')

@section('title', app_name() . ' | '. __('labels.backend.services.management'))

@section('content')
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-sm-5">
                <h4 class="card-title mb-0">
                    @lang('labels.backend.services.management')
                </h4>
            </div><!--col-->

            <div class="col-sm-7 pull-right">
                @include('backend.service.includes.header-buttons')
            </div><!--col-->
        </div><!--row-->

        <div class="row mt-4">
            <div class="col">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="text-center">
                                </th>
                                <th>@lang('labels.backend.services.table.name')</th>
                                <th>@lang('labels.backend.services.table.description')</th>
                                <th>@lang('labels.general.actions')</th>
                            </tr>
                        </thead>
                        <tbody>
                        @if ($services->count() !== 0)
                            @foreach($services as $service)
                                <tr>
                                    <td>{{ ucwords($service->name) }}</td>
                                    <td>{{ ucwords($service->slug) }}</td>
                                    <td>{{ ucwords($service->description) }}</td>
                                    
                                    <td>{{ ucwords($service->updated_at->diffForHumans()) }}</td>

                                    <td>@include('backend.service.includes.actions', ['service' => $service])</td>
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
                    {!! $services->count() !!} {{ trans_choice('labels.backend.services.table.total', $services->count()) }}
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
