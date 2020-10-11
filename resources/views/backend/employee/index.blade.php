@extends('backend.layouts.app')

@section('title', app_name() . ' | '. __('labels.backend.employees.management'))

@section('breadcrumb-links')
    @include('backend.auth.user.includes.breadcrumb-links')
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-sm-5">
                <h4 class="card-title mb-0">
                    @lang('labels.backend.employees.management')
                </h4>
            </div><!--col-->

            <div class="col-sm-7 pull-right">
                @include('backend.employee.includes.header-buttons')
            </div><!--col-->
        </div><!--row-->

        <div class="row mt-4">
            <div class="col">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>@lang('labels.backend.employees.table.name')</th>
                                <th>@lang('labels.backend.employees.table.department')</th>
                                <th>@lang('labels.backend.employees.table.position')</th>
                                <th>@lang('labels.backend.employees.table.doj')</th>
                                <th>@lang('labels.backend.employees.table.dol')</th>
                                <th>@lang('labels.backend.access.users.table.last_updated')</th>
                                <th>@lang('labels.general.actions')</th>
                            </tr>
                        </thead>
                        <tbody>
                        @if ($employees->count() !== 0)
                            @foreach($employees as $employee)
                                <tr>
                                    <td>{{ ucwords($employee->user->last_name) }}</td>
                                    <td>{{ ucwords($employee->department->name) }}</td>
                                    <td>{{ ucwords($employee->position->first()->title) }}</td>
                                    <td>{{ ucwords($employee->doj) }}</td>
                                    <td>
                                        @isset($employee->dol)
                                            {{ ucwords($employee->dol) }}
                                        @endisset

                                        @empty($employee->dol)
                                            Still Employed
                                        @endempty
                                    </td>

                                    
                                    <td>{{ ucwords($employee->updated_at->diffForHumans()) }}</td>

                                    <td>@include('backend.employee.includes.actions', ['employee' => $employee])</td>
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
                    {!! $employees->count() !!} {{ trans_choice('labels.backend.employees.table.total', $employees->count()) }}
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
