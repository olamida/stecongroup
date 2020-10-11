<li class="breadcrumb-menu">
    <div class="btn-group" role="group" aria-label="Button group">
        <div class="dropdown">
            <a class="btn dropdown-toggle" href="#" role="button" id="breadcrumb-dropdown-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">@lang('menus.backend.newsletters.main')</a>

            <div class="dropdown-menu" aria-labelledby="breadcrumb-dropdown-1">
                <a class="dropdown-item" href="{{ route('admin.auth.user.index') }}">@lang('menus.backend.newsletters.all')</a>
                <a class="dropdown-item" href="{{ route('admin.auth.user.create') }}">@lang('menus.backend.newsletters.subscribe')</a>
                <a class="dropdown-item" href="{{ route('admin.auth.user.deactivated') }}">@lang('menus.backend.newsletters.create_campaign')</a>
            </div>
        </div><!--dropdown-->

        <!--<a class="btn" href="#">Static Link</a>-->
    </div><!--btn-group-->
</li>
