@extends('backend.layouts.app')

@section('title', __('labels.backend.newsletters.management') . ' | ' . __('labels.backend.newsletters.create'))

@push('after-styles')
    <!-- script -->
    <script src='https://cdn.tiny.cloud/1/r8a2g4ync79be5w02uy7hfjyul1v7ezxrm95bll10qef075q/tinymce/5/tinymce.min.js' referrerpolicy="origin">
    </script>
    
    <script>
        tinymce.init({
          selector: '#content',
            height: 600,
            plugins: 'link code preview image',
            //menubar: false,

            images_upload_base_path: '/{{ URL::asset('assets/img/email') }}',
            paste_data_images: true,
        
            /* enable title field in the Image dialog*/
              image_title: true,
              /* enable automatic uploads of images represented by blob or data URIs*/
              automatic_uploads: true,
              /*

            file_picker_types: 'image',
            /* and here's our custom image picker*/
            file_picker_callback: function (cb, value, meta) {
                var input = document.createElement('input');
                input.setAttribute('type', 'file');
                input.setAttribute('accept', 'image/*');

                /*
                  Note: In modern browsers input[type="file"] is functional without
                  even adding it to the DOM, but that might not be the case in some older
                  or quirky browsers like IE, so you might want to add it to the DOM
                  just in case, and visually hide it. And do not forget do remove it
                  once you do not need it anymore.
                */

                input.onchange = function () {
                    var file = this.files[0];

                    var reader = new FileReader();
                    reader.onload = function () {
                        /*
                          Note: Now we need to register the blob in TinyMCEs image blob
                          registry. In the next release this part hopefully won't be
                          necessary, as we are looking to handle it internally.
                        */
                        var id = 'blobid' + (new Date()).getTime();
                        var blobCache =  tinymce.activeEditor.editorUpload.blobCache;
                        var base64 = reader.result.split(',')[1];
                        var blobInfo = blobCache.create(id, file, base64);
                        blobCache.add(blobInfo);

                        /* call the callback and populate the Title field with the file name */
                        cb(blobInfo.blobUri(), { title: file.name });
                    };
                    reader.readAsDataURL(file);
                };

                input.click();
            },  

          /* 
          plugins: 'a11ychecker advcode casechange formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinymcespellchecker',
          toolbar: 'a11ycheck addcomment showcomments casechange checklist code formatpainter pageembed permanentpen table',
          toolbar_mode: 'floating',
          tinycomments_mode: 'embedded',
          */
        });
    </script>
@endpush

@section('content')
{{ html()->form('POST', route('admin.campaign.store'))
->class('form-horizontal')
->acceptsFiles()
->open() }}
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-5">
                    <h4 class="card-title mb-0">
                        @lang('labels.backend.newsletters.management')
                        <small class="text-muted">@lang('labels.backend.newsletters.create')</small>
                    </h4>
                </div><!--col-->
            </div><!--row-->

            <hr>

            <div class="row mt-4">
                <div class="col">

                    <div class="form-group row">
                        {{ html()->label(__('validation.attributes.backend.newsletters.fromName'))->class('col-md-2 form-control-label')->for('fromName') }}

                        <div class="col-md-10">
                            {{ html()->text('fromName')
                                ->class('form-control')
                                ->placeholder(__('validation.attributes.backend.newsletters.fromName'))
                                ->attribute('maxlength', 80) }}
                        </div><!--col-->
                    </div><!--fromName-form-group-->

                    <div class="form-group row">
                        {{ html()->label(__('validation.attributes.backend.newsletters.replyTo'))->class('col-md-2 form-control-label')->for('replyTo') }}

                        <div class="col-md-10">
                            {{ html()->email('replyTo')
                                ->class('form-control')
                                ->placeholder(__('validation.attributes.backend.newsletters.replyTo'))}}
                        </div><!--col-->
                    </div><!--replyTo-form-group-->

                    <div class="form-group row">
                        {{ html()->label(__('validation.attributes.backend.newsletters.subject'))->class('col-md-2 form-control-label')->for('subject') }}

                        <div class="col-md-10">
                            {{ html()->text('subject')
                                ->class('form-control')
                                ->placeholder(__('validation.attributes.backend.newsletters.subject'))
                                ->attribute('maxlength', 120) }}
                        </div><!--col-->
                    </div><!--title-form-group-->

                    <div class="form-group row">
                        {{ html()->label(__('validation.attributes.backend.posts.content'))->class('col-md-2 form-control-label')->for('content') }}

                        <div class="col-md-10">
                            {{ html()->textarea('content', $content, ['id' => 'content'])
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
                    {{ form_cancel(route('admin.newsletter.index'), __('buttons.general.cancel')) }}
                </div><!--col-->

                <div class="col text-right">
                    {{ form_submit(__('buttons.general.crud.create')) }}
                </div><!--col-->
            </div><!--row-->
        </div><!--card-footer-->
    </div><!--card-->
{{ html()->form()->close() }}
@endsection
