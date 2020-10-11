@extends('backend.layouts.app')

@section('title', app_name() . ' | '. __('labels.backend.posts.management'))

@section('content')
<div class="card">
    <div class="card">
        <div class="card-body">
                    <div class="row">
                        <div class="col col-sm-4 order-1 order-sm-2  mb-4">
                            <div class="card mb-4 bg-light">
                                <img class="card-img-top" src="{{ $logged_in_user->picture }}" alt="Profile Picture">

                                <div class="card-body">
                                    <h4 class="card-title">
                                        Settings<br/>
                                    </h4>

                                    <p class="card-text">
                                        <medium>
                                            <i class="fas fa-envelope"></i>Featured: 
                                            @if ($posts->featured !== 0)
                                                <span class="badge badge-success">@lang('labels.general.yes')</span>
                                            @else
                                                <span class="badge badge-danger" style="cursor:pointer">@lang('labels.general.no')</span>
                                            @endif<br/>

                                            <i class="fas fa-envelope"></i>Allow Comments:  
                                            @if ($posts->comment !== 0)
                                                <span class="badge badge-success">@lang('labels.general.yes')</span>
                                            @else
                                                <span class="badge badge-danger" style="cursor:pointer">@lang('labels.general.no')</span>
                                            @endif<br/>

                                            <i class="fas fa-envelope"></i>Post Status: 
                                            
                                            @if ($posts->status == 'draft')
                                                <span class="badge badge-warning">@lang('labels.backend.posts.status.draft')</span>
                                            @elseif($posts->status == 'publish')
                                                <span class="badge badge-success" style="cursor:pointer">@lang('labels.backend.posts.status.Publish')</span>
                                            @else
                                                <span class="badge badge-danger" style="cursor:pointer">@lang('labels.backend.posts.status.unpublish')</span>
                                            @endif<br/>

                                            <i class="fas fa-calendar-check"></i> Created at: 
                                            {{ timezone()->convertToLocal($logged_in_user->created_at, 'F jS, Y') }}
                                        </medium>
                                    </p>

                                    <p class="card-text">

                                        <a href="{{ route('admin.post.edit', $posts->id)}}" class="btn btn-info btn-sm mb-1">
                                            <i class="fas fa-user-circle"></i> @lang('navs.backend.post.edit')
                                        </a>

                                        @can('view backend')
                                             &nbsp;<a href="{{ route('admin.post.destroy', $posts->id)}}" 
                                            class="btn btn-danger btn-sm mb-1"
                                            data-method="delete"
                                            data-trans-button-cancel="@lang('buttons.general.cancel')"
                                            data-trans-button-confirm="@lang('buttons.general.crud.delete')"
                                            data-trans-title="@lang('strings.backend.general.are_you_sure')"
                                            class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="@lang('buttons.general.crud.delete')">
                                            <i class="fas fa-trash"></i>  @lang('navs.backend.post.delete')
                                            </a>
                                        @endcan
                                    </p>
                                </div>
                            </div>

                        </div><!--col-md-4-->

                        <div class="col-md-8 order-2 order-sm-1">
                            <div class="row">
                                <div class="col">
                                    <div class="card mb-4">
                                        <div class="card-header">
                                            Title: <h5>{{ ucwords($posts->title) }}</h5>
                                        </div><!--card-header-->

                                        <div class="card-body">
                                            {{ ucwords($posts->description) }}
                                        </div><!--card-body-->
                                    </div><!--card-->
                                </div><!--col-md-6-->
                            </div><!--row-->

                            <div class="row">
                                <div class="col">
                                    <div class="card mb-4">
                                        <div class="card-header">
                                           Post Content
                                        </div><!--card-header-->

                                        <div class="card-body">
                                            {!! ucwords($posts->content) !!}
                                            Comments
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th>Approved</th>
                                                            <th>Name</th>
                                                            <th>Comment</th>
                                                            <th>Last Updated</th>
                                                            <th>@lang('labels.general.actions')</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach($posts->comment as $comment)
                                                            <tr>
                                                                <td>
                                                                    @if ($comment->approval === 1)
                                                                        <span class="badge badge-success">@lang('labels.general.yes')</span>
                                                                    @else
                                                                        <span class="badge badge-danger" style="cursor:pointer">@lang('labels.general.no')</span>
                                                                    @endif
                                                                </td>
                                                                <td>{{ ucwords($comment->user->first_name) }}</td>
                                                                <td>{{ ucwords($comment->body) }}</td>
                                                                <td>{{ ucwords($comment->updated_at->diffForHumans()) }}</td>
                                                                <td>@include('backend.post.includes.actions', ['posts' => $posts])</td>
                                                            </tr>
                                                        @endforeach
                                                </table>
                                            </div>
                                            <hr/>
                                            {{ html()->form('POST', route('frontend.comments.store', $posts->id))
                                                ->class('form-horizontal')
                                                ->acceptsFiles()
                                                ->open() }}

                                                <div class="row">
                                                    <div class="col-sm-5">
                                                        <h4 class="card-title mb-0">
                                                            <small class="text-muted">Create Comment</small>
                                                        </h4>
                                                    </div><!--col-->
                                                </div><!--row-->

                                                <hr>

                                                <div class="row mt-4">
                                                    <div class="col">
                                                        <div class="form-group row">
                                                            {{ html()
                                                            ->label(__('validation.attributes.backend.posts.submit_comment'))
                                                            ->class('col-md-2 form-control-label')
                                                            ->for('body') }}

                                                            <div class="col-md-10">
                                                                {{ html()->textarea('body', '', ['id' => 'body'])
                                                                    ->class('form-control content')
                                                                    ->placeholder(__('validation.attributes.backend.posts.submit_comment'))
                                                                    ->attribute('maxlength', 191) }}
                                                                    
                                                            </div><!--col-->
                                                        </div><!--content-form-group-->

                                                    </div><!--col-->
                                                </div><!--row-->

                                        </div><!--card-body-->
                                        <div class="card-footer">
                                            <div class="row">
                                                <div class="col">
                                                    {{ form_cancel(route('admin.category.index'), __('buttons.general.cancel')) }}
                                                </div><!--col-->

                                                <div class="col text-right">
                                                    {{ form_submit(__('buttons.general.crud.create')) }}
                                                </div><!--col-->
                                            </div><!--row-->
                                        </div><!--card-footer-->
                                    </div><!--card-->
                                </div><!--col-md-6-->
                            </div><!--row-->

                        </div><!--col-md-8-->
                    </div><!-- row -->
                </div> <!-- card-body -->

    </div><!--card-->
</div><!--card-->
@endsection
