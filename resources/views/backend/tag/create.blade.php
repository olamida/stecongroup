@extends('backend.layouts.app')

@section('title', __('labels.backend.tags.management') . ' | ' . __('labels.backend.tags.create'))

@section('content')
{{ html()->form('POST', route('admin.tag.store'))
->class('form-horizontal')
->acceptsFiles()
->open() }}
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-5">
                    <h4 class="card-title mb-0">
                        @lang('labels.backend.tags.management')
                        <small class="text-muted">@lang('labels.backend.tags.create')</small>
                    </h4>
                </div><!--col-->
            </div><!--row-->

            <hr>

            <div class="row mt-4">
                <div class="col">
                    <div class="form-group row">
                        {{ html()->label(__('validation.attributes.backend.tags.title'))
                        ->class('col-md-2 form-control-label')
                        ->for('title') }}

                        <div class="col-md-10">
                            {{ html()->text('title')
                                ->class('form-control')
                                ->placeholder(__('validation.attributes.backend.tags.title'))
                                ->attribute('maxlength', 191)
                                ->required()
                                ->autofocus() }}
                        </div><!--col-->
                    </div><!--form-group-->

                </div><!--col-->
            </div><!--row-->
        </div><!--card-body-->

        <div class="card-footer">
            <div class="row">
                <div class="col">
                    {{ form_cancel(route('admin.tag.index'), __('buttons.general.cancel')) }}
                </div><!--col-->

                <div class="col text-right">
                    {{ form_submit(__('buttons.general.crud.create')) }}
                </div><!--col-->
            </div><!--row-->
        </div><!--card-footer-->
    </div><!--card-->
{{ html()->form()->close() }}
@endsection
