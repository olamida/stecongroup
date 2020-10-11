<div class="sidebar">
    <nav class="sidebar-nav">
        <ul class="nav">
            <li class="nav-title">
                @lang('menus.backend.sidebar.general')
            </li>
            <li class="nav-item">
                <a class="nav-link {{
                    active_class(Route::is('admin/dashboard'))
                }}" href="{{ route('admin.dashboard') }}">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    @lang('menus.backend.sidebar.dashboard')
                </a>
            </li>


            @if ($logged_in_user->isAdmin())
                <li class="nav-title">
                    @lang('menus.backend.sidebar.system')
                </li>

                <li class="nav-item nav-dropdown {{
                    active_class(Route::is('admin/*'), 'open')
                    }}">
                    <a class="nav-link nav-dropdown-toggle {{
                            active_class(Route::is('admin/*'))
                        }}" href="#">
                        <i class="nav-icon fas fa-book"></i> @lang('menus.backend.customers.main')
                    </a>

                    <ul class="nav-dropdown-items">
                        <li class="nav-item">
                            <a class="nav-link {{
                            active_class(Route::is('admin.customer'))
                            }}" href="{{ route('admin.customer.index') }}">
                                @lang('menus.backend.customers.main')
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link {{
                            active_class(Route::is('admin.product'))
                            }}" href="{{ route('admin.product.index') }}">
                                @lang('menus.backend.customers.product')
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link {{
                            active_class(Route::is('admin.category'))
                            }}" href="{{ route('admin.category.index') }}">
                                @lang('menus.backend.customers.category')
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link {{
                            active_class(Route::is('admin.order'))
                            }}" href="{{ route('admin.order.index') }}">
                                @lang('menus.backend.customers.order')
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link {{
                            active_class(Route::is('admin.discount'))
                            }}" href="{{ route('admin.discount.index') }}">
                                @lang('menus.backend.customers.discount')
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link {{
                            active_class(Route::is('admin.promotion'))
                            }}" href="{{ route('admin.promotion.index') }}">
                                @lang('menus.backend.customers.promotion')
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link {{
                            active_class(Route::is('admin.delivery'))
                            }}" href="{{ route('admin.delivery.index') }}">
                                @lang('menus.backend.customers.delivery')
                            </a>
                        </li>

                    </ul>
                </li>

                <li class="divider"></li>

                <li class="nav-item nav-dropdown {{
                    active_class(Route::is('admin/*'), 'open')
                    }}">
                    <a class="nav-link nav-dropdown-toggle {{
                            active_class(Route::is('admin/*'))
                        }}" href="#">
                        <i class="nav-icon fas fa-book"></i> @lang('menus.backend.office.main')
                    </a>

                    <ul class="nav-dropdown-items">
                        <li class="nav-item">
                            <a class="nav-link {{
                            active_class(Route::is('admin.post'))
                            }}" href="{{ route('admin.post.index') }}">
                                @lang('menus.backend.office.post')
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link {{
                            active_class(Route::is('admin.newsletter'))
                            }}" href="{{ route('admin.newsletter.index') }}">
                                @lang('menus.backend.office.newsletter')
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link {{
                            active_class(Route::is('admin.event'))
                            }}" href="{{ route('admin.event.index') }}">
                                @lang('menus.backend.office.event')
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link {{
                            active_class(Route::is('admin.appointment'))
                            }}" href="{{ route('admin.appointment.index') }}">
                                @lang('menus.backend.office.appointment')
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link {{
                            active_class(Route::is('admin.project'))
                            }}" href="{{ route('admin.task.index') }}">
                                @lang('menus.backend.office.project')
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link {{
                            active_class(Route::is('admin.task'))
                            }}" href="{{ route('admin.task.index') }}">
                                @lang('menus.backend.office.task')
                            </a>
                        </li>

                    </ul>
                </li>

                <li class="divider"></li>

                <li class="nav-item nav-dropdown {{
                    active_class(Route::is('admin/*'), 'open')
                    }}">
                    <a class="nav-link nav-dropdown-toggle {{
                            active_class(Route::is('admin/*'))
                        }}" href="#">
                        <i class="nav-icon fas fa-book"></i> @lang('menus.backend.human-resource.main')
                    </a>

                    <ul class="nav-dropdown-items">
                        <li class="nav-item">
                            <a class="nav-link {{
                            active_class(Route::is('admin.employee'))
                            }}" href="{{ route('admin.employee.index') }}">
                                @lang('menus.backend.human-resource.employee')
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link {{
                            active_class(Route::is('admin.event'))
                            }}" href="{{ route('admin.position.index') }}">
                                @lang('menus.backend.human-resource.position')
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link {{
                            active_class(Route::is('admin.attendance'))
                            }}" href="{{ route('admin.attendance.index') }}">
                                @lang('menus.backend.human-resource.attendance')
                            </a>
                        </li>

                    </ul>
                </li>

                <li class="divider"></li>

                <li class="nav-item nav-dropdown {{
                    active_class(Route::is('admin/auth*'), 'open')
                    }}">
                    <a class="nav-link nav-dropdown-toggle {{
                        active_class(Route::is('admin/auth*'))
                    }}" href="#">
                        <i class="nav-icon far fa-user"></i>
                        @lang('menus.backend.access.title')

                        @if ($pending_approval > 0)
                            <span class="badge badge-danger">{{ $pending_approval }}</span>
                        @endif
                    </a>

                    <ul class="nav-dropdown-items">
                        <li class="nav-item">
                            <a class="nav-link {{
                                active_class(Route::is('admin/auth/user*'))
                            }}" href="{{ route('admin.auth.user.index') }}">
                                @lang('labels.backend.access.users.management')

                                @if ($pending_approval > 0)
                                    <span class="badge badge-danger">{{ $pending_approval }}</span>
                                @endif
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{
                                active_class(Route::is('admin/auth/role*'))
                            }}" href="{{ route('admin.auth.role.index') }}">
                                @lang('labels.backend.access.roles.management')
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="divider"></li>

                <li class="nav-item nav-dropdown {{
                    active_class(Route::is('admin/log-viewer*'), 'open')
                    }}">
                        <a class="nav-link nav-dropdown-toggle {{
                            active_class(Route::is('admin/log-viewer*'))
                        }}" href="#">
                        <i class="nav-icon fas fa-list"></i> @lang('menus.backend.log-viewer.main')
                    </a>

                    <ul class="nav-dropdown-items">
                        <li class="nav-item">
                            <a class="nav-link {{
                            active_class(Route::is('admin/log-viewer'))
                        }}" href="{{ route('log-viewer::dashboard') }}">
                                @lang('menus.backend.log-viewer.dashboard')
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{
                            active_class(Route::is('admin/log-viewer/logs*'))
                        }}" href="{{ route('log-viewer::logs.list') }}">
                                @lang('menus.backend.log-viewer.logs')
                            </a>
                        </li>
                    </ul>
                </li>

            @endif
        </ul>
    </nav>

    <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div><!--sidebar-->
