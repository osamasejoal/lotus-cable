<!-- ||||||||||
    Left Side Menu
    ||||||||||| -->
<div class="mobile-menu-left-overlay"></div>
<nav class="side-menu">

    {{-- <div class="mb-4">
            <img src="{{ asset('backend/assets/images/profile-pic') . '/' . auth()->user()->image }}"
                alt="Profile Picture" width="40%" style="display:block;margin:auto;">
            <span style="display:block;text-align:center;margin-top:10px;font-size:15px;color:green">
                {{ auth()->user()->name }}
            </span>
            <span style="display:block;text-align:center;font-size:20px;color:green">
                @if (auth()->user()->type == 1)
                    Admin
                @elseif (auth()->user()->type == 2)
                    Staff
                @endif
            </span>
        </div> --}}


    <ul class="side-menu-list">

        <!-- Dashboard -->
        <li class="purple {{ request()->routeIs('dashboard') ? 'opened active-single' : '' }}">
            <a href="{{ route('dashboard') }}">
                <i class="font-icon font-icon-dashboard"></i>
                <span class="lbl">Dashboard</span>
            </a>
        </li>


        <!-- Users -->
        <li
            class="purple with-sub 
            {{ request()->routeIs('profile.create') ? 'opened' : '' }}
            {{ request()->routeIs('admin.index') ? 'opened' : '' }}
            {{ request()->routeIs('staff.index') ? 'opened' : '' }}
            {{ request()->routeIs('customer.index') ? 'opened' : '' }}
            {{ request()->routeIs('active.customer') ? 'opened' : '' }}
            {{ request()->routeIs('deactive.customer') ? 'opened' : '' }}">
            <span>
                <i class="font-icon font-icon-users"></i>
                <span class="lbl">Users</span>
            </span>
            <ul>

                <!-- Create all types of account -->
                <li class="{{ request()->routeIs('profile.create') ? 'active' : '' }}">
                    <a href="{{ route('profile.create') }}"><span class="lbl">Add New Users</span></a>
                </li>

                <!-- Admin -->
                <li class="{{ request()->routeIs('admin.index') ? 'active' : '' }}">
                    <a href="{{ route('admin.index') }}"><span class="lbl">Admin</span></a>
                </li>

                <!-- Staffs -->
                <li class="{{ request()->routeIs('staff.index') ? 'active' : '' }}">
                    <a href="{{ route('staff.index') }}"><span class="lbl">Staff</span></a>
                </li>

                <!-- Customers -->
                <li
                    class="with-sub
                    {{ request()->routeIs('customer.index') ? 'opened' : '' }}
                    {{ request()->routeIs('active.customer') ? 'opened' : '' }}
                    {{ request()->routeIs('deactive.customer') ? 'opened' : '' }}">
                    <span>
                        <span class="lbl">Customer</span>
                    </span>
                    <ul>

                        <!-- All Customers -->
                        <li class="{{ request()->routeIs('customer.index') ? 'active' : '' }}">
                            <a href="{{ route('customer.index') }}"><span class="lbl">All Customer</span></a>
                        </li>

                        <!-- Active Customers -->
                        <li class="{{ request()->routeIs('active.customer') ? 'active' : '' }}">
                            <a href="{{ route('active.customer') }}"><span class="lbl">Active Customer</span></a>
                        </li>

                        <!-- Deactive Customers -->
                        <li class="{{ request()->routeIs('deactive.customer') ? 'active' : '' }}">
                            <a href="{{ route('deactive.customer') }}"><span class="lbl">Deactive Customer</span></a>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>


        <!-- Bill Generate -->
        <li
            class="purple with-sub 
            {{ request()->routeIs('area.create') ? 'opened' : '' }}
            {{ request()->routeIs('monthly.bill.generate') ? 'opened' : '' }}">
            <span>
                <i class="font-icon fa fa-calculator"></i>
                <span class="lbl">Bill Generate</span>
            </span>
            <ul>

                <!-- Add New Bill -->
                <li class="{{ request()->routeIs('area.create') ? 'active' : '' }}">
                    <a href="{{ route('area.create') }}"><span class="lbl">Add New Bill</span></a>
                </li>

                <!-- Generate Monthly Bill -->
                <li class="{{ request()->routeIs('monthly.bill.generate') ? 'active' : '' }}">
                    <a href="{{ route('monthly.bill.generate') }}"><span class="lbl">Generate Monthly
                            Bill</span></a>
                </li>
            </ul>
        </li>


        <!-- Bill Payment -->
        <li class="purple with-sub {{ request()->routeIs('monthly.payment') ? 'opened' : '' }}">
            <span>
                <i class="font-icon fa fa-credit-card"></i>
                <span class="lbl">Bill Payment</span>
            </span>
            <ul>

                <!-- Monthly Payment -->
                <li class="{{ request()->routeIs('monthly.payment') ? 'active' : '' }}">
                    <a href="{{ route('monthly.payment') }}"><span class="lbl">Monthly Payment</span></a>
                </li>

            </ul>
        </li>


        <!-- Bill Transaction -->
        <li class="purple with-sub 
        {{ request()->routeIs('paid.transaction') ? 'opened' : '' }}
        {{ request()->routeIs('search.paid.transaction') ? 'opened' : '' }}
        {{ request()->routeIs('due.transaction') ? 'opened' : '' }}
        {{ request()->routeIs('search.due.transaction') ? 'opened' : '' }}">
            <span>
                <i class="font-icon fa fa-university"></i>
                <span class="lbl">Bill Transaction</span>
            </span>
            <ul>
                
                <!-- Paid Transaction -->
                <li class="{{ request()->routeIs('paid.transaction') ? 'active' : '' }}
                    {{ request()->routeIs('search.paid.transaction') ? 'active' : '' }}">
                    <a href="{{ route('paid.transaction') }}"><span class="lbl">Paid Transaction</span></a>
                </li>

                <!-- Due Transaction -->
                <li class="{{ request()->routeIs('due.transaction') ? 'active' : '' }}
                    {{ request()->routeIs('search.due.transaction') ? 'active' : '' }}">
                    <a href="{{ route('due.transaction') }}"><span class="lbl">Due Transaction</span></a>
                </li>
            </ul>
        </li>


        <!-- Bill Report -->
        <li class="purple with-sub">
            <span>
                <i class="font-icon fa fa-flag"></i>
                <span class="lbl">Bill Report</span>
            </span>
            <ul>
                <li><a href="#"><span class="lbl">Daily Report</span></a></li>
                <li><a href="#"><span class="lbl">Monthly Status</span></a></li>
                <li><a href="#"><span class="lbl">Monthly Collection</span></a></li>
            </ul>
        </li>


        <!-- Settings -->
        <li
            class="purple with-sub
                {{ request()->routeIs('area.index') ? 'opened' : '' }}
                {{ request()->routeIs('package.index') ? 'opened' : '' }}
                {{ request()->routeIs('transaction-option.index') ? 'opened' : '' }}
                {{ request()->routeIs('transaction-type.index') ? 'opened' : '' }}">
            <span>
                <i class="font-icon fa fa-cog"></i>
                <span class="lbl">Settings</span>
            </span>
            <ul>

                <!-- Area -->
                <li class="{{ request()->routeIs('area.index') ? 'active' : '' }}">
                    <a href="{{ route('area.index') }}"><span class="lbl">Area</span></a>
                </li>

                <!-- Package -->
                <li class="{{ request()->routeIs('package.index') ? 'active' : '' }}">
                    <a href="{{ route('package.index') }}"><span class="lbl">Package List</span></a>
                </li>

                <!-- Transaction Option -->
                <li class="{{ request()->routeIs('transaction-option.index') ? 'active' : '' }}">
                    <a href="{{ route('transaction-option.index') }}"><span class="lbl">
                            Transaction Option</span></a>
                </li>

                <!-- Transaction Type -->
                <li class="{{ request()->routeIs('transaction-type.index') ? 'active' : '' }}">
                    <a href="{{ route('transaction-type.index') }}"><span class="lbl">
                            Transaction Type</span></a>
                </li>


            </ul>
        </li>


        <!-- Company Info -->
        <li class="purple {{ request()->routeIs('company.profile') ? 'opened active-single' : '' }}">
            <a href="{{ route('company.profile') }}">
                <i class="font-icon fa fa-building"></i>
                <span class="lbl">Company Info</span>
            </a>
        </li>


        {{-- <li class="{{ request()->routeIs('home') ? 'active' : '' }}">
                <a href="{{ url('/home') }}">
                    <i class="menu-icon fa fa-tachometer"></i>
                    <span class="menu-text"> Dashboard special </span>
                </a>

                <b class="arrow"></b>
            </li> --}}


        <!-- Demo for need -->
        {{-- <li class="purple with-sub">
                <span>
                    <i class="font-icon font-icon-comments active"></i>
                    <span class="lbl">Messages</span>
                </span>
                <ul>
                    <li><a href="messenger.html"><span class="lbl">Messenger</span></a></li>
                    <li><a href="chat.html"><span class="lbl">Messages</span><span
                                class="label label-custom label-pill label-danger">8</span></a></li>
                    <li><a href="chat-write.html"><span class="lbl">Write Message</span></a></li>
                    <li><a href="chat-index.html"><span class="lbl">Select User</span></a></li>
                </ul>
            </li>
            <li class="red">
                <a href="mail.html">
                    <i class="font-icon glyphicon glyphicon-send"></i>
                    <span class="lbl">Mail</span>
                </a>
            </li>
            <li class="purple with-sub">
                <span>
                    <span class="font-icon font-icon-burger"></span>
                    <span class="lbl">Nested Menu</span>
                </span>
                <ul>
                    <li><a href="#"><span class="lbl">Level 1</span></a></li>
                    <li><a href="#"><span class="lbl">Level 1</span></a></li>
                    <li class="with-sub">
                        <span>
                            <span class="lbl">Level 2</span>
                        </span>
                        <ul>
                            <li><a href="#"><span class="lbl">Level 2</span></a></li>
                            <li><a href="#"><span class="lbl">Level 2</span></a></li>
                            <li class="with-sub">
                                <span>
                                    <span class="lbl">Level 3</span>
                                </span>
                                <ul>
                                    <li><a href="#"><span class="lbl">Level 3</span></a></li>
                                    <li><a href="#"><span class="lbl">Level 3</span></a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li> --}}

    </ul>

</nav>
<!--.side-menu-->



<!-- ||||||||||||||
    Main content Start
    ||||||||||||||| -->
<div class="page-content">
    <div class="container-fluid">
