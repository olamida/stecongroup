@extends('backend.layouts.app')

@section('title', __('labels.backend.departments.management') . ' | ' . __('labels.backend.departments.edit'))

@section('content')
{{ html()->modelForm($departments, 'PATCH', route('admin.department.update', $departments))->class('form-horizontal')->acceptsFiles()->open() }}
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-5">
                    <h4 class="card-title mb-0">
                        @lang('labels.backend.departments.management')
                        <small class="text-muted">@lang('labels.backend.departments.edit')</small>
                    </h4>
                </div><!--col-->
            </div><!--row-->
            <!--row-->

            <hr />

            <div class="row mt-4">
                <div class="col">
                    <div class="form-group row">
                        {{ html()->label(__('validation.attributes.backend.departments.name'))
                        ->class('col-md-2 form-control-label')
                        ->for('name') }}

                        <div class="col-md-10">
                            {{ html()->text('name')
                                ->class('form-control')
                                ->placeholder(__('validation.attributes.backend.departments.name'))
                                ->attribute('maxlength', 191)
                                ->required()
                                ->autofocus() }}
                        </div><!--col-->
                    </div><!--form-group-->

                    <div class="form-group row">
                        {{ html()->label(__('validation.attributes.backend.departments.code'))
                        ->class('col-md-2 form-control-label')
                        ->for('code') }}

                        <div class="col-md-10">
                            {{ html()->text('code')
                                ->class('form-control')
                                ->placeholder(__('validation.attributes.backend.departments.code'))
                                ->attribute('maxlength', 191)
                                ->required()}}
                        </div><!--col-->
                    </div><!--form-group-->

                    <div class="form-group row">
                        {{ html()->label(__('validation.attributes.backend.departments.picture'))->class('col-md-2 form-control-label')->for('picture') }}

                        <div class="col-md-10">
                            {{ html()->file('picture')
                                ->class('form-control')
                                ->acceptImage()
                                }}
                        </div><!--col-->
                    </div><!--form-group-->


                    <div class="form-group row">
                        {{ html()->label(__('validation.attributes.backend.departments.description'))->class('col-md-2 form-control-label')->for('description') }}

                        <div class="col-md-10">
                            {{ html()->textarea('description')
                                ->class('form-control')
                                ->placeholder(__('validation.attributes.backend.departments.description'))
                                ->attribute('maxlength', 191) }}
                        </div><!--col-->
                    </div><!--form-group-->

                </div><!--col-->
            </div><!--row-->
        </div><!--card-body-->

        <div class="card-footer">
            <div class="row">
                <div class="col">
                    {{ form_cancel(route('admin.department.index'), __('buttons.general.cancel')) }}
                </div><!--col-->

                <div class="col text-right">
                    {{ form_submit(__('buttons.general.crud.update')) }}
                </div><!--col-->
            </div><!--row-->
        </div><!--card-footer-->
    </div><!--card-->
{{ html()->closeModelForm() }}
@endsection