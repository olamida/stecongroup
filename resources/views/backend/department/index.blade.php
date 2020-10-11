@extends('backend.layouts.app')

@section('title', app_name() . ' | '. __('labels.backend.departments.management'))

@section('content')
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-sm-5">
                <h4 class="card-title mb-0">
                    @lang('labels.backend.departments.management')
                </h4>
            </div><!--col-->

            <div class="col-sm-7 pull-right">
                @include('backend.department.includes.header-buttons')
            </div><!--col-->
        </div><!--row-->

        <div class="row mt-4">
            <div class="col">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>@lang('labels.backend.departments.table.name')</th>
                                <th>@lang('labels.backend.departments.table.code')</th>
                                <th>@lang('labels.backend.access.users.table.last_updated')</th>
                                <th>@lang('labels.general.actions')</th>
                            </tr>
                        </thead>
                        <tbody>
                        @if ($departments->count() !== 0)
                            @foreach($departments as $department)
                                <tr>
                                    <td>{{ ucwords($department->name) }}</td>
                                    <td>{{ ucwords($department->code) }}</td>
                                    
                                    <td>{{ ucwords($department->updated_at->diffForHumans()) }}</td>

                                    <td>@include('backend.department.includes.actions', ['department' => $department])</td>
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
                    {!! $departments->count() !!} {{ trans_choice('labels.backend.departments.table.total', $departments->count()) }}
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
