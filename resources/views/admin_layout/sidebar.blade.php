<div class="page-sidebar">
    <a class="logo-box" href="index.html">
        <span>Space</span>
        <i class="icon-radio_button_unchecked" id="fixed-sidebar-toggle-button"></i>
        <i class="icon-close" id="sidebar-toggle-button-close"></i>
    </a>
    <div class="page-sidebar-inner">
        <div class="page-sidebar-menu">
            <ul class="accordion-menu">
                <li class="active-page">
                    <a href="{{ route('admin.index') }}">
                        <i class="menu-icon icon-home4"></i><span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.hotels') }}">
                        <i class="menu-icon icon-inbox"></i><span>Hotels</span>
                    </a>
                </li>
                <li>
                        <a href="{{ route('admin.orders') }}">
                            <i class="menu-icon icon-inbox"></i><span>Orders</span>
                        </a>
                    </li>
                    <li>
                            <a href="{{ route('admin.approved_orders') }}">
                                <i class="menu-icon icon-inbox"></i><span>Approved Orders</span>
                            </a>
                        </li>    
            </ul>
        </div>
    </div>
</div>