<?php

Breadcrumbs::for('admin.dashboard', function ($trail) {
    $trail->push(__('strings.backend.dashboard.title'), route('admin.dashboard'));
});


//extra added for post
Breadcrumbs::for('admin.post.index', function ($trail) {
    $trail->push(__('strings.backend.posts.title'), route('admin.post.index'));
});

Breadcrumbs::for('admin.post.create', function ($trail) {
    $trail->parent('admin.post.index');
    $trail->push(__('menus.backend.posts.create'), route('admin.post.create'));
});

Breadcrumbs::for('admin.post.edit', function ($trail, $id) {
    $trail->parent('admin.post.index');
    $trail->push(__('menus.backend.posts.edit'), route('admin.post.edit', $id));
});


Breadcrumbs::for('admin.post.show', function ($trail, $id) {
    $trail->parent('admin.post.index');
    $trail->push(__('menus.backend.posts.show'), route('admin.post.show', $id));
});

//extra added for post-category
Breadcrumbs::for('admin.category.index', function ($trail) {
    $trail->push(__('strings.backend.categories.title'), route('admin.category.index'));
});

Breadcrumbs::for('admin.category.create', function ($trail) {
    $trail->parent('admin.category.index');
    $trail->push(__('menus.backend.categories.create'), route('admin.category.create'));
});

Breadcrumbs::for('admin.category.edit', function ($trail, $id) {
    $trail->parent('admin.category.index');
    $trail->push(__('menus.backend.categories.edit'), route('admin.category.edit', $id));
});

//extra added for post-Tag
Breadcrumbs::for('admin.tag.index', function ($trail) {
    $trail->push(__('strings.backend.tags.title'), route('admin.tag.index'));
});

Breadcrumbs::for('admin.tag.create', function ($trail) {
    $trail->parent('admin.tag.index');
    $trail->push(__('menus.backend.tags.create'), route('admin.tag.create'));
});

Breadcrumbs::for('admin.tag.edit', function ($trail, $id) {
    $trail->parent('admin.tag.index');
    $trail->push(__('menus.backend.tags.edit'), route('admin.tag.edit', $id));
});

//extra added for calendar event
Breadcrumbs::for('admin.event.index', function ($trail) {
    $trail->push(__('strings.backend.events.title'), route('admin.event.index'));
});

Breadcrumbs::for('admin.event.create', function ($trail) {
    $trail->parent('admin.event.index');
    $trail->push(__('menus.backend.events.create'), route('admin.event.create'));
});

Breadcrumbs::for('admin.event.edit', function ($trail, $id) {
    $trail->parent('admin.event.index');
    $trail->push(__('menus.backend.events.edit'), route('admin.event.edit', $id));
});

//extra added for services event
Breadcrumbs::for('admin.service.index', function ($trail) {
    $trail->push(__('strings.backend.services.title'), route('admin.service.index'));
});

Breadcrumbs::for('admin.service.create', function ($trail) {
    $trail->parent('admin.service.index');
    $trail->push(__('menus.backend.services.create'), route('admin.service.create'));
});

Breadcrumbs::for('admin.service.edit', function ($trail, $id) {
    $trail->parent('admin.service.index');
    $trail->push(__('menus.backend.services.edit'), route('admin.service.edit', $id));
});

//extra added for positions 
Breadcrumbs::for('admin.position.index', function ($trail) {
    $trail->push(__('strings.backend.positions.title'), route('admin.position.index'));
});

Breadcrumbs::for('admin.position.create', function ($trail) {
    $trail->parent('admin.position.index');
    $trail->push(__('menus.backend.positions.create'), route('admin.position.create'));
});

Breadcrumbs::for('admin.position.edit', function ($trail, $id) {
    $trail->parent('admin.position.index');
    $trail->push(__('menus.backend.positions.edit'), route('admin.service.edit', $id));
});

//extra added for departments 
Breadcrumbs::for('admin.department.index', function ($trail) {
    $trail->push(__('strings.backend.departments.title'), route('admin.department.index'));
});

Breadcrumbs::for('admin.department.create', function ($trail) {
    $trail->parent('admin.department.index');
    $trail->push(__('menus.backend.departments.create'), route('admin.department.create'));
});

Breadcrumbs::for('admin.department.edit', function ($trail, $id) {
    $trail->parent('admin.department.index');
    $trail->push(__('menus.backend.departments.edit'), route('admin.department.edit', $id));
});

//extra added for employee 
Breadcrumbs::for('admin.employee.index', function ($trail) {
    $trail->push(__('strings.backend.employees.title'), route('admin.employee.index'));
});

Breadcrumbs::for('admin.employee.create', function ($trail) {
    $trail->parent('admin.employee.index');
    $trail->push(__('menus.backend.employees.create'), route('admin.employee.create'));
});

Breadcrumbs::for('admin.employee.edit', function ($trail, $id) {
    $trail->parent('admin.employee.index');
    $trail->push(__('menus.backend.employees.edit'), route('admin.employee.edit', $id));
});

//extra added for newsletter 
Breadcrumbs::for('admin.newsletter.index', function ($trail) {
    $trail->push(__('strings.backend.newsletters.title'), route('admin.newsletter.index'));
});

Breadcrumbs::for('admin.newsletter.create', function ($trail) {
    $trail->parent('admin.newsletter.index');
    $trail->push(__('menus.backend.newsletters.create'), route('admin.newsletter.create'));
});

Breadcrumbs::for('admin.newsletter.edit', function ($trail, $id) {
    $trail->parent('admin.newsletter.index');
    $trail->push(__('menus.backend.newsletters.edit'), route('admin.newsletter.edit', $id));
});

//extra added for campaign 
Breadcrumbs::for('admin.campaign.index', function ($trail) {
    $trail->push(__('strings.backend.campaigns.title'), route('admin.campaign.index'));
});

Breadcrumbs::for('admin.campaign.create', function ($trail) {
    $trail->parent('admin.campaign.index');
    $trail->push(__('menus.backend.campaigns.create'), route('admin.campaign.create'));
});

Breadcrumbs::for('admin.campaign.edit', function ($trail, $id) {
    $trail->parent('admin.campaign.index');
    $trail->push(__('menus.backend.campaigns.edit'), route('admin.campaign.edit', $id));
});

//extra added for customer 
Breadcrumbs::for('admin.customer.index', function ($trail) {
    $trail->push(__('strings.backend.customers.title'), route('admin.customer.index'));
});

Breadcrumbs::for('admin.customer.create', function ($trail) {
    $trail->parent('admin.customer.index');
    $trail->push(__('menus.backend.customers.create'), route('admin.customer.create'));
});

Breadcrumbs::for('admin.customer.edit', function ($trail, $id) {
    $trail->parent('admin.customer.index');
    $trail->push(__('menus.backend.customers.edit'), route('admin.customer.edit', $id));
});


require __DIR__.'/auth.php';
require __DIR__.'/log-viewer.php';
