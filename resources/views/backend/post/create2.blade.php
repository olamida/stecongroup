@extends('backend.layouts.app')

@section('title', __('labels.backend.posts.management') . ' | ' . __('labels.backend.categories.create'))


@push('after-styles')
    <!-- script -->
    <script src='https://cdn.tiny.cloud/1/r8a2g4ync79be5w02uy7hfjyul1v7ezxrm95bll10qef075q/tinymce/5/tinymce.min.js' referrerpolicy="origin">
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
    <script>
        tinymce.init({
          selector: '#content',
            height: 300,
            plugins: 'link code',
            menubar: false,

          /* 
          plugins: 'a11ychecker advcode casechange formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinymcespellchecker',
          toolbar: 'a11ycheck addcomment showcomments casechange checklist code formatpainter pageembed permanentpen table',
          toolbar_mode: 'floating',
          tinycomments_mode: 'embedded',
          */
        });
    </script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('.js-example-basic-multiple').select2();
        });
    </script>

@endpush

@section('content')
{{ html()->form('POST', route('admin.post.store'))
    ->class('form-horizontal')
    ->acceptsFiles()
    ->open()}}
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
                        {{ html()->label(__('validation.attributes.backend.posts.description'))->class('col-md-2 form-control-label')->for('description') }}

                        <div class="col-md-10">
                            {{ html()->textarea('description')
                                ->class('form-control')
                                ->placeholder(__('validation.attributes.backend.posts.description'))}}
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
                        {{ html()->label(__('validation.attributes.backend.posts.tag'))->class('col-md-2 form-control-label')->for('tag') }}

                        <div class="col-md-10">
                            {{ html()->select('tag', $tag)
                                ->class('form-control js-example-basic-multiple')
                                ->placeholder(__('validation.attributes.backend.posts.tag'))
                                ->multiple()
                                ->attribute('size', 1) }}
                        </div><!--col-->
                    </div><!--tag-form-group-->

                    <div class="form-group row">
                        {{ html()->label(__('validation.attributes.backend.posts.category_id'))->class('col-md-2 form-control-label')->for('category') }}

                        <div class="col-md-10">
                            {{ html()->select('category_id', $category)
                                ->class('form-control')
                                ->placeholder(__('validation.attributes.backend.posts.category_id'))
                                ->attribute('maxlength', 191) }}
                        </div><!--col-->
                    </div><!--category_id-form-group-->


                    <div class="form-group row">
                        {{ html()->label(__('validation.attributes.backend.categories.image'))->class('col-md-2 form-control-label')->for('featured_image') }}

                        <div class="col-md-10">
                            {{ html()->file('featured_image')
                                ->class('form-control')
                                ->acceptImage()
                                }}
                        </div><!--col-->
                    </div><!--form-group-->

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