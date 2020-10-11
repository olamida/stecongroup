@extends('backend.layouts.app')

@section('title', app_name() . ' | '. __('labels.backend.posts.management'))

@section('content')
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-sm-5">
                <h4 class="card-title mb-0">
                    @lang('labels.backend.posts.management')
                </h4>
            </div><!--col-->

            <div class="col-sm-7 pull-right">
                @include('backend.post.includes.header-buttons')
            </div><!--col-->
        </div><!--row-->

        <div class="row mt-4">
            <div class="col">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>@lang('labels.backend.posts.table.title')</th>
                                <th>@lang('labels.backend.posts.table.description')</th>
                                <th>@lang('labels.backend.posts.table.authur')</th>
                                <th>@lang('labels.backend.posts.table.featured')</th>
                                <th>@lang('labels.backend.posts.table.comment')</th>
                                <th>@lang('labels.backend.posts.table.status')</th>
                                <th>@lang('labels.backend.posts.table.last_update')</th>
                                <th>@lang('labels.general.actions')</th>
                            </tr>
                        </thead>
                        <tbody>
                        @if ($posts->count() !== 0)
                            @foreach($posts as $post)
                                <tr>
                                    <td>{{ ucwords($post->title) }}</td>
                                    <td>{{ ucwords($post->description) }}</td>
                                    <td>{{ ucwords($post->user->first_name) }}</td>
                                    <td>
                                        @if ($post->featured !== 0)
                                            <span class="badge badge-success">@lang('labels.general.yes')</span>
                                        @else
                                            <span class="badge badge-danger" style="cursor:pointer">@lang('labels.general.no')</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($post->comment !== 0)
                                            <span class="badge badge-success">@lang('labels.general.yes')</span>
                                        @else
                                            <span class="badge badge-danger" style="cursor:pointer">@lang('labels.general.no')</span>
                                        @endif
                                    </td>
                                    <td>{{ ucwords($post->status) }}</td>
                                    <td>{{ ucwords($post->updated_at->diffForHumans()) }}</td>
                                    <td>@include('backend.post.includes.actions', ['posts' => $post])</td>
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
                    {!! $posts->count() !!} {{ trans_choice('labels.backend.posts.table.total', $posts->count()) }}
                </div>
            </div><!--col-->

            <div class="col-5">
                <div class="float-right">
                   -
                </div>
            </div><!--col-->
        </div><!--row-->
    </div><!--card-body-->
</div><!--card-->
@endsection
