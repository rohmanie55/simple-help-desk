<aside class="left-sidebar" data-sidebarbg="skin6">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar" data-sidebarbg="skin6">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{ url('/') }}" aria-expanded="false">
                    <i data-feather="home" class="feather-icon"></i>
                    <span class="hide-menu">Dashboard</span></a>
                </li>
                <li class="list-divider"></li>
                <li class="nav-small-cap"><span class="hide-menu">Applications</span></li>
                @if (auth()->user()->role=='admin')
                <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{ route('user.index') }}"
                    aria-expanded="false">
                    <i class="fas fa-user"></i>
                    <span class="hide-menu">User</span></a></li>

                <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{ route('category.index') }}"
                    aria-expanded="false">
                    <i class="fas fa-list"></i>
                    <span class="hide-menu">Category</span></a></li>
                @endif
                <li class="sidebar-item"> <a class="sidebar-link" href="{{ route('ticket.index') }}"
                        aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span
                            class="hide-menu">Ticket List
                        </span></a>
                </li>
                @if (auth()->user()->role=='admin')
                <li class="sidebar-item"> <a class="sidebar-link" href="{{ route('ticket.report') }}"
                        aria-expanded="false">
                        <i class="fas fa-chart-pie"></i>
                        <span class="hide-menu">Report
                        </span></a>
                </li>
                @endif
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>