@php
    $currentRouteName = Route::currentRouteName();
@endphp
<nav class="vertical_nav">
    <div class="left_section menu_left" id="js-menu">
        <div class="left_section">
            <ul>
                <li class="menu--item">
                    <a href="my_organisation_dashboard.html" class="menu--link" title="Dashboard" data-bs-toggle="tooltip"
                        data-bs-placement="right">
                        <i class="fa-solid fa-gauge menu--icon"></i>
                        <span class="menu--label">@lang('dashboard')</span>
                    </a>
                </li>

                {{--  <li class="menu--item">
                    <a href="my_organisation_dashboard_events.html" class="menu--link" title="Events" data-bs-toggle="tooltip" data-bs-placement="right">
                        <i class="fa-solid fa-calendar-days menu--icon"></i>
                        <span class="menu--label">Events</span>
                    </a>
                </li>
                <li class="menu--item">
                    <a href="my_organisation_dashboard_promotion.html" class="menu--link" title="Promotion" data-bs-toggle="tooltip" data-bs-placement="right">
                        <i class="fa-solid fa-rectangle-ad menu--icon"></i>
                        <span class="menu--label">Promotion</span>
                    </a>
                </li>
                <li class="menu--item">
                    <a href="my_organisation_dashboard_contact_lists.html" class="menu--link" title="Contact List" data-bs-toggle="tooltip" data-bs-placement="right">
                        <i class="fa-regular fa-address-card menu--icon"></i>
                        <span class="menu--label">Contact List</span>
                    </a>
                </li>
                <li class="menu--item">
                    <a href="my_organisation_dashboard_payout.html" class="menu--link" title="Payouts" data-bs-toggle="tooltip" data-bs-placement="right">
                        <i class="fa-solid fa-credit-card menu--icon"></i>
                        <span class="menu--label">Payouts</span>
                    </a>
                </li> --}}
                <li class="menu--item">
                    <a href="{{ route('admin.users') }}" class="menu--link @if (Str::endsWith($currentRouteName, 'users')) active @endif" title="Reports"
                        data-bs-toggle="tooltip" data-bs-placement="right">
                        <i class="fa-solid fa-users menu--icon"></i>
                        <span class="menu--label">@lang('Users')</span>
                    </a>
                </li>
                <li class="menu--item">
                    <a href="{{ route('admin.events.index') }}" class="menu--link @if (Str::startsWith($currentRouteName, 'admin.events')) active @endif" title="Dashboard"
                        data-bs-toggle="tooltip" data-bs-placement="right">
                        <i class="fa-solid fa-calendar-days me-3 menu--icon"></i>
                        <span class="menu--label">Evenements</span>
                    </a>
                </li>
                {{-- <li class="menu--item">
                    <a href="my_organisation_dashboard_subscription.html" class="menu--link" title="Subscription" data-bs-toggle="tooltip" data-bs-placement="right">
                        <i class="fa-solid fa-bahai menu--icon"></i>
                        <span class="menu--label">Subscription</span>
                    </a>
                </li>
                <li class="menu--item">
                    <a href="my_organisation_dashboard_conversion_setup.html" class="menu--link" title="Conversion Setup" data-bs-toggle="tooltip" data-bs-placement="right">
                        <i class="fa-solid fa-square-plus menu--icon"></i>
                        <span class="menu--label">Conversion Setup</span>
                    </a>
                </li>
                <li class="menu--item">
                    <a href="my_organisation_dashboard_about.html" class="menu--link" title="About" data-bs-toggle="tooltip" data-bs-placement="right">
                        <i class="fa-solid fa-circle-info menu--icon"></i>
                        <span class="menu--label">About</span>
                    </a>
                </li>
                <li class="menu--item">
                    <a href="my_organisation_dashboard_my_team.html" class="menu--link team-lock" title="My Team" data-bs-toggle="tooltip" data-bs-placement="right">
                        <i class="fa-solid fa-user-group menu--icon"></i>
                        <span class="menu--label">My Team</span>
                    </a>
                </li> --}}
            </ul>
        </div>
    </div>
</nav>
