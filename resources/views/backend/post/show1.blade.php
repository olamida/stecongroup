@extends('backend.layouts.app')

@section('title', __('labels.backend.posts.management') . ' | ' . __('labels.backend.categories.create'))

@push('after-styles')
<!-- script -->
    <script src='https://cdn.tiny.cloud/1/r8a2g4ync79be5w02uy7hfjyul1v7ezxrm95bll10qef075q/tinymce/5/tinymce.min.js' referrerpolicy="origin">
    </script>
    <script>
        tinymce.init({
          selector: '#content',
            height: 300,
          plugins: 'a11ychecker advcode casechange formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinymcespellchecker',
          toolbar: 'a11ycheck addcomment showcomments casechange checklist code formatpainter pageembed permanentpen table',
          toolbar_mode: 'floating',
          tinycomments_mode: 'embedded',
        });
    </script>
@endpush

@section('content')
{{ html()->form('POST', route('admin.post.store'))->class('form-horizontal')->open() }}
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-5">
                    <h4 class="card-title mb-0">
                        @lang('labels.backend.posts.management')
                        <small class="text-muted">@lang('labels.backend.posts.create')</small>
                    </h4>
                </div><!--col-->
            </div><!--row-->

            <hr>

            <div class="row mt-4">
                <div class="col">
                    
                    <div class="form-group row">
                        {{ html()->label(__('validation.attributes.backend.posts.title'))->class('col-md-2 form-control-label')->for('post') }}

                        <div class="col-md-10">
                            {{ html()->text('title')
                                ->class('form-control')
                                ->placeholder(__('validation.attributes.backend.posts.title'))
                                ->attribute('maxlength', 191)
                                ->required()
                                ->autofocus() }}
                        </div><!--col-->
                    </div><!--title-form-group-->

                    <div class="form-group row">
                        {{ html()->label(__('validation.attributes.backend.posts.slug'))->class('col-md-2 form-control-label')->for('slug') }}

                        <div class="col-md-10">
                            {{ html()->text('slug')
                                ->class('form-control')
                                ->placeholder(__('validation.attributes.backend.posts.slug'))
                                ->attribute('maxlength', 191)
                                ->required()
                                ->autofocus() }}
                        </div><!--col-->
                    </div><!--slug-form-group-->

                    <div class="form-group row">
                        {{ html()->label(__('validation.attributes.backend.posts.description'))->class('col-md-2 form-control-label')->for('description') }}

                        <div class="col-md-10">
                            {{ html()->textarea('description')
                                ->class('form-control')
                                ->placeholder(__('validation.attributes.backend.posts.description'))
                                ->attribute('maxlength', 191) }}
                        </div><!--col-->
                    </div><!--description-form-group-->

                    <div class="form-group row">
                        {{ html()->label(__('validation.attributes.backend.posts.status'))->class('col-md-2 form-control-label')->for('status') }}

                        <div class="col-md-10">
                            {{ html()->select('status' , ['draft' => 'Draft', 'publish' => 'Publish', 'unpublish' => 'Unpublish'])
                                ->class('form-control')
                                ->placeholder(__('validation.attributes.backend.posts.status'))
                                ->required()}}
                        </div><!--col-->
                    </div><!--status-form-group-->

                    <div class="form-group row">
                        {{ html()->label(__('validation.attributes.backend.posts.category_id'))->class('col-md-2 form-control-label')->for('category') }}

                        <div class="col-md-10">
                            {{ html()->select('category', $category)
                                ->class('form-control')
                                ->placeholder(__('validation.attributes.backend.posts.category_id'))
                                ->attribute('maxlength', 191) }}
                        </div><!--col-->
                    </div><!--category-form-group-->

                    <div class="form-group row">
                        {{ html()->label(__('validation.attributes.backend.posts.content'))->class('col-md-2 form-control-label')->for('content') }}

                        <div class="col-md-10">
                            {{ html()->textarea('content', 'Your Post Content goes here......', ['id' => 'content'])
                                ->class('form-control content')
                                ->placeholder(__('validation.attributes.backend.posts.content'))
                                ->attribute('maxlength', 191) }}
                                
                        </div><!--col-->
                    </div><!--content-form-group-->

                </div><!--col-->
            </div><!--row-->
        </div><!--card-body-->

        <div class="card-footer">
            <div class="row">
                <div class="col">
                    {{ form_cancel(route('admin.post.index'), __('buttons.general.cancel')) }}
                </div><!--col-->

                <div class="col text-right">
                    {{ form_submit(__('buttons.general.crud.create')) }}
                </div><!--col-->
            </div><!--row-->
        </div><!--card-footer-->
    </div><!--card-->
{{ html()->form()->close() }}
@endsection
