@extends('backend.layouts.app')

@section('title', app_name() . ' | '. __('labels.backend.categories.management'))

@section('content')
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-sm-5">
                <h4 class="card-title mb-0">
                    @lang('labels.backend.categories.management')
                </h4>
            </div><!--col-->

            <div class="col-sm-7 pull-right">
                @include('backend.category.includes.header-buttons')
            </div><!--col-->
        </div><!--row-->

        <div class="row mt-4">
            <div class="col">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="text-center">
                                    <svg class="c-icon">
                                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-people"></use>
                                    </svg>
                                </th>
                                <th>@lang('labels.backend.categories.table.name')</th>
                                <th>@lang('labels.backend.categories.table.slug')</th>
                                <th>@lang('labels.backend.categories.table.description')</th>
                                <th>@lang('labels.backend.categories.table.featured')</th>
                                <th>@lang('labels.backend.access.users.table.last_updated')</th>
                                <th>@lang('labels.general.actions')</th>
                            </tr>
                        </thead>
                        <tbody>
                        @if ($categories->count() !== 0)
                            @foreach($categories as $category)
                                <tr>
                                    <td class="text-center">
                                        <div class="c-avatar"><img class="c-avatar-img" src="{{ asset($category->featured_image) }}" alt="usersr@email.com" style="width:50px; height: 50px "><span class="c-avatar-status bg-success"></span></div>
                                    </td>
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

                                    <td>@include('backend.category.includes.actions', ['category' => $category])</td>
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
                    {!! $categories->count() !!} {{ trans_choice('labels.backend.categories.table.total', $categories->count()) }}
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
