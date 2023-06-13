<!-- sidebar -->
<div class="border-right" id="sidebar-wrapper">
    <div class="sidebar-heading text-center">
        <img src="{{ asset('assets/images/favicon.png') }}" class="my-4" alt="" height="100px" />
    </div>
    <div class="list-group list-group-flush">
        @if (Auth::user()->role->name == 'Admin')
            <a href="{{ route('dashboard.admin') }}" class="list-group-item list-group-item-action active">
                Dashboard
            </a>
            <a href="" class="list-group-item list-group-item-action">
                User
            </a>
            <a href="" class="list-group-item list-group-item-action">
                Product
            </a>
            <a href="" class="list-group-item list-group-item-action">
                Slider
            </a>
        @endif
        @if (Auth::user()->role->name == 'Admin')
            <a href="" class="list-group-item list-group-item-action">
                Add User
            </a>
            <a href="" class="list-group-item list-group-item-action">
                Add Product
            </a>
            <a href="" class="list-group-item list-group-item-action">
                Add Slider
            </a>
        @endif
        @if (Auth::user()->role->name == 'Staff')
            <a href="{{ route('dashboard.staff.user') }}" class="list-group-item list-group-item-action active">
                User
            </a>
            <a href="" class="list-group-item list-group-item-action">
                Product
            </a>
            <a href="" class="list-group-item list-group-item-action">
                Slider
            </a>
        @endif
        @if (Auth::user()->role->name == 'User')
            <a href="{{ route('dashboard.user') }}" class="list-group-item list-group-item-action active">
                Your Item
            </a>
            <a href="" class="list-group-item list-group-item-action">
                Settings
            </a>
        @endif
        <form action="logout" method="POST">
            @csrf
            <a class="list-group-item list-group-item-action">
                <button class="rounded fixed-bottom m-3"
                    style="background:rgb(39, 35, 35); color:white; text-style:none; border:none; width:200px;"
                    type="submit">
                    Logout
                </button>
            </a>
        </form>
    </div>
</div>

