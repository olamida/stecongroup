@extends('backend.layouts.app')

@section('title', __('labels.backend.employees.management') . ' | ' . __('labels.backend.employees.create'))

@section('content')
{{ html()->form('POST', route('admin.employee.store'))
->class('form-horizontal')
->acceptsFiles()
->open() }}
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-5">
                    <h4 class="card-title mb-0">
                        @lang('labels.backend.employees.management')
                        <small class="text-muted">@lang('labels.backend.employees.create')</small>
                    </h4>
                </div><!--col-->
            </div><!--row-->

            <hr>

            <div class="row mt-4">
                <div class="col">

                    <div class="form-group row">
                        {{ html()->label(__('validation.attributes.backend.employees.user'))->class('col-md-2 form-control-label')->for('user') }}

                        <div class="col-md-10">
                            {{ html()->select('user_id', $users)
                                ->class('form-control')
                                ->placeholder(__('validation.attributes.backend.employees.user'))
                                ->attribute('maxlength', 191) }}
                        </div><!--col-->
                    </div><!--user_id-form-group-->

                    <div class="form-group row">
                        {{ html()->label(__('validation.attributes.backend.employees.department'))->class('col-md-2 form-control-label')->for('department') }}

                        <div class="col-md-10">
                            {{ html()->select('department_id', $departments)
                                ->class('form-control')
                                ->placeholder(__('validation.attributes.backend.employees.department'))
                                ->attribute('maxlength', 191) }}
                        </div><!--col-->
                    </div><!--department_id-form-group-->

                    <div class="form-group row">
                        {{ html()->label(__('validation.attributes.backend.employees.position'))->class('col-md-2 form-control-label')->for('position') }}

                        <div class="col-md-10">
                            {{ html()->select('position_id', $positions)
                                ->class('form-control')
                                ->placeholder(__('validation.attributes.backend.employees.position'))
                                ->attribute('maxlength', 191) }}
                        </div><!--col-->
                    </div><!--position_id-form-group-->

                    <div class="form-group row">
                        {{ html()->label(__('validation.attributes.backend.employees.gender'))->class('col-md-2 form-control-label')->for('status') }}

                        <div class="col-md-10">
                            {{ html()->select('gender' , ['Male' => 'Male', 'Female' => 'Female'])
                                ->class('form-control')
                                ->placeholder(__('validation.attributes.backend.employees.gender'))
                                ->required()}}
                        </div><!--col-->
                    </div><!--gender-form-group-->

                    <div class="form-group row">
                        {{ html()->label(__('validation.attributes.backend.employees.doj'))
                        ->class('col-md-2 form-control-label')
                        ->for('doj') }}

                        <div class="col-md-10">
                            {{ html()->date('doj')
                                ->class('form-control')
                                ->placeholder(__('validation.attributes.backend.employees.doj'))
                                ->attribute('maxlength', 191)
                                ->required()}}
                        </div><!--col-->
                    </div><!--doj-form-group-->

                    <div class="form-group row">
                        {{ html()->label(__('validation.attributes.backend.employees.dol'))
                        ->class('col-md-2 form-control-label')
                        ->for('dol') }}

                        <div class="col-md-10">
                            {{ html()->date('dol')
                                ->class('form-control')
                                ->placeholder(__('validation.attributes.backend.employees.dol'))
                                ->attribute('maxlength', 191)
                                ->required()}}
                        </div><!--col-->
                    </div><!--dol-form-group-->

                    <div class="form-group row">
                        {{ html()->label(__('validation.attributes.backend.employees.details'))->class('col-md-2 form-control-label')->for('details') }}

                        <div class="col-md-10">
                            {{ html()->textarea('details')
                                ->class('form-control')
                                ->placeholder(__('validation.attributes.backend.employees.details'))
                                ->attribute('maxlength', 191) }}
                        </div><!--col-->
                    </div><!--details-form-group-->

                </div><!--col-->
            </div><!--row-->
        </div><!--card-body-->

        <div class="card-footer">
            <div class="row">
                <div class="col">
                    {{ form_cancel(route('admin.service.index'), __('buttons.general.cancel')) }}
                </div><!--col-->

                <div class="col text-right">
                    {{ form_submit(__('buttons.general.crud.create')) }}
                </div><!--col-->
            </div><!--row-->
        </div><!--card-footer-->
    </div><!--card-->
{{ html()->form()->close() }}
@endsection
