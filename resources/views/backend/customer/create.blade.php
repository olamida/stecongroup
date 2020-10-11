@extends('backend.layouts.app')

@section('title', __('labels.backend.customers.management') . ' | ' . __('labels.backend.customers.create'))

@section('content')
{{ html()->form('POST', route('admin.customer.store'))
->class('form-horizontal')
->acceptsFiles()
->open() }}
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-5">
                    <h4 class="card-title mb-0">
                        @lang('labels.backend.customers.management')
                        <small class="text-muted">@lang('labels.backend.customers.create')</small>
                    </h4>
                </div><!--col-->
            </div><!--row-->

            <hr>

            <div class="row mt-4">
                <div class="col">

                    <div class="form-group row">
                        {{ html()->label(__('validation.attributes.backend.customers.fname'))
                            ->class('col-md-2 form-control-label')->for('fname') }}

                        <div class="col-md-10">
                            {{ html()->text('fname')
                                ->class('form-control')
                                ->placeholder(__('validation.attributes.backend.customers.fname'))
                                ->attribute('maxlength', 30) }}
                        </div><!--col-->
                    </div><!--fname-form-group-->

                    <div class="form-group row">
                        {{ html()->label(__('validation.attributes.backend.customers.lname'))
                            ->class('col-md-2 form-control-label')->for('lname') }}

                        <div class="col-md-10">
                            {{ html()->text('lname')
                                ->class('form-control')
                                ->placeholder(__('validation.attributes.backend.customers.lname'))
                                ->attribute('maxlength', 30) }}
                        </div><!--col-->
                    </div><!--lname-form-group-->

                    <div class="form-group row">
                        {{ html()->label(__('validation.attributes.backend.customers.type'))->class('col-md-2 form-control-label')->for('type') }}

                        <div class="col-md-10">
                            {{ html()->select('type' , ['General' => 'General', 'Farmer' => 'Farmer', 'Transporter' => 'Transporter'])
                                ->class('form-control')
                                ->placeholder(__('validation.attributes.backend.customers.type'))
                                ->attribute('maxlength', 191) }}
                        </div><!--col-->
                    </div><!--type-form-group-->

                    <div class="form-group row">
                        {{ html()->label(__('validation.attributes.backend.customers.email'))
                            ->class('col-md-2 form-control-label')->for('email') }}

                        <div class="col-md-10">
                            {{ html()->email('email')
                                ->class('form-control')
                                ->placeholder(__('validation.attributes.backend.customers.email'))
                                ->attribute('maxlength', 191) }}
                        </div><!--col-->
                    </div><!--email-form-group-->

                    <div class="form-group row">
                        {{ html()->label(__('validation.attributes.backend.customers.dob'))
                        ->class('col-md-2 form-control-label')
                        ->for('dob') }}

                        <div class="col-md-10">
                            {{ html()->date('dob')
                                ->class('form-control')
                                ->placeholder(__('validation.attributes.backend.customers.dob'))
                                ->attribute('maxlength', 191)
                                ->required()}}
                        </div><!--col-->
                    </div><!--dob-form-group-->

                    <div class="form-group row">
                        {{ html()->label(__('validation.attributes.backend.customers.country'))->class('col-md-2 form-control-label')->for('country') }}

                        <div class="col-md-10">
                            {{ html()->select('phonenumber_country' , $country)
                                ->class('form-control')
                                ->placeholder(__('validation.attributes.backend.customers.country'))
                                ->attribute('maxlength', 191) }}
                        </div><!--col-->
                    </div><!--country-form-group-->

                    <div class="form-group row">
                        {{ html()->label(__('validation.attributes.backend.customers.phone'))
                        ->class('col-md-2 form-control-label')->for('phone') }}

                        <div class="col-md-10">
                            {{ html()->text('phonenumber')
                                ->class('form-control')
                                ->placeholder(__('validation.attributes.backend.customers.phone'))
                                ->attribute('maxlength', 26)
                                ->required()}}
                        </div><!--col-->
                    </div><!--phone-form-group-->

                </div><!--col-->
            </div><!--row-->
        </div><!--card-body-->

        <div class="card-footer">
            <div class="row">
                <div class="col">
                    {{ form_cancel(route('admin.customer.index'), __('buttons.general.cancel')) }}
                </div><!--col-->

                <div class="col text-right">
                    {{ form_submit(__('buttons.general.crud.create')) }}
                </div><!--col-->
            </div><!--row-->
        </div><!--card-footer-->
    </div><!--card-->
{{ html()->form()->close() }}
@endsection
