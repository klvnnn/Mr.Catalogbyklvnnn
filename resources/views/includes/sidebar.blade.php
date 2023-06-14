<!-- sidebar -->
<div class="border-right" id="sidebar-wrapper">
    <div class="sidebar-heading text-center">
        <img src="{{ asset('assets/images/favicon.png') }}" class="my-4" alt="" height="100px" />
    </div>
    <div class="list-group list-group-flush">
        @if (Auth::user()->role->name == 'Admin' || Auth::user()->role->name == 'Staff')
            <a href="{{ route('dashboard') }}" class="list-group-item list-group-item-action text-dark border-top border-bottom">
                <img src="{{ asset('assets/images/icons8-dashboard-64.png') }}" alt="" width="20" height="20"> &nbsp; Dashboard
            </a>
        @endif
        @if (Auth::user()->role->name == 'Admin')
            <a href="{{ route('user.user') }}" class="list-group-item list-group-item-action text-dark border-bottom">
                <img src="{{ asset('assets/images/icons8-user-64.png') }}" alt="" width="20" height="20"> &nbsp; User
            </a>
            <a href="{{ route('role.role') }}" class="list-group-item list-group-item-action text-dark border-bottom">
                &nbsp; &nbsp; &nbsp; &nbsp; Role
            </a>
            <a href="{{ route('slider.slider') }}" class="list-group-item list-group-item-action text-dark border-bottom">
                <img src="{{ asset('assets/images/icons8-image-64.png') }}" alt="" width="20" height="20"> &nbsp; Slider
            </a>
        @endif
        @if (Auth::user()->role->name == 'Admin' || Auth::user()->role->name == 'Staff')
            <a href="{{ route('products.products') }}" class="list-group-item list-group-item-action text-dark border-bottom">
                <img src="{{ asset('assets/images/icons8-products-64.png') }}" alt="" width="20" height="20"> &nbsp; Products
            </a>
            <a href="{{ route('categories.category') }}" class="list-group-item list-group-item-action text-dark border-bottom">
            &nbsp;<img src="{{ asset('assets/images/icons8-sorting-64.png') }}" alt="" width="15" height="20"> &nbsp; Category
            </a>
            <a href="{{ route('brands.brands') }}" class="list-group-item list-group-item-action text-dark border-bottom">
                <img src="{{ asset('assets/images/icons8-brand-64.png') }}" alt="" width="20" height="20"> &nbsp; Brands 
            </a>
        @endif
        @if (Auth::user()->role->name == 'User')
            <a href="{{ route('dashboard') }}" class="list-group-item list-group-item-action text-dark border-top border-bottom">
                <img src="{{ asset('assets/images/icons8-item-64.png') }}" alt="" width="20" height="20"> &nbsp; Your Item
            </a>
            <a href="" class="list-group-item list-group-item-action text-dark  border-bottom">
                <img src="{{ asset('assets/images/icons8-setting-64.png') }}" alt="" width="20" height="20"> &nbsp; Settings
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

