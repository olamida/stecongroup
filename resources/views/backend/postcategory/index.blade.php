@extends('backend.layouts.app')

@section('title', app_name() . ' | '. __('labels.backend.post_category.management'))

@section('content')
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-sm-5">
                <h4 class="card-title mb-0">
                    @lang('labels.backend.post_category.management')
                </h4>
            </div><!--col-->

            <div class="col-sm-7 pull-right">
                @include('backend.postcategory.includes.header-buttons')
            </div><!--col-->
        </div><!--row-->

        <div class="row mt-4">
            <div class="col">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>@lang('labels.backend.post_category.table.name')</th>
                                <th>@lang('labels.backend.post_category.table.slug')</th>
                                <th>@lang('labels.backend.post_category.table.description')</th>
                                <th>@lang('labels.backend.post_category.table.featured')</th>
                                <th>@lang('labels.backend.access.users.table.last_updated')</th>
                                <th>@lang('labels.general.actions')</th>
                            </tr>
                        </thead>
                        <tbody>
                        @if ($categories->count() !== 0)
                            @foreach($categories as $category)
                                <tr>
                                    <td>{{ ucwords($category->name) }}</td>
                                    <td>{{ ucwords($category->slug) }}</td>
                                    <td>{{ ucwords($category->description) }}</td>
                                    <td>
                                        @if ($category->featured !== 0)
                                            <span class="badge badge-success">@lang('labels.general.yes')</span>
                                        @else
                                            <span class="badge badge-danger" style="cursor:pointer">@lang('labels.general.no')</span>
                                        @endif
                                    </td>
                                    <td>{{ ucwords($category->updated_at->diffForHumans()) }}</td>

                                    <td>@include('backend.postcategory.includes.actions', ['category' => $category])</td>
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
                    {!! $category->count() !!} {{ trans_choice('labels.backend.post_category.table.total', $category->count()) }}
                </div>
            </div><!--col-->

            <div class="col-5">
                <div class="float-right">
                   Render
                </div>
            </div><!--col-->
        </div><!--row-->
    </div><!--card-body-->
</div><!--card-->
@endsection
