@extends('backend.layouts.app')

@section('title', app_name() . ' | '. __('labels.backend.newsletters.management'))

@section('breadcrumb-links')
    @include('backend.newsletter.includes.breadcrumb-links')
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-sm-5">
                <h4 class="card-title mb-0">
                    @lang('labels.backend.newsletters.management')
                </h4>
            </div><!--col-->

            <div class="col-sm-7 pull-right">
                @include('backend.newsletter.includes.header-buttons')
            </div><!--col-->
        </div><!--row-->

        <div class="row mt-4">
            <div class="col">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>@lang('labels.backend.newsletters.table.title')</th>
                                <th>@lang('labels.backend.newsletters.table.subscribers')</th>
                                <th>@lang('labels.backend.newsletters.table.user_id')</th>
                                <th>@lang('labels.backend.access.users.table.last_updated')</th>
                                <th>@lang('labels.general.actions')</th>
                            </tr>
                        </thead>
                        <tbody>
                        @if ($newsletters->count() !== 0)
                            @foreach($newsletters as $newsletter)
                                <tr>
                                    <td>{{ ucwords($newsletter->title) }}</td>
                                    <td>{{ ucwords($newsletter->subscribers) }}</td>
                                    <td>user->last_name</td>
                                    <td>{{ ucwords($newsletter->updated_at->diffForHumans()) }}</td>

                                    <td>@include('backend.newsletter.includes.actions', ['newsletter' => $newsletter])</td>
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
                    {!! $newsletters->count() !!} {{ trans_choice('labels.backend.newsletters.table.total', $newsletters->count()) }}
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
