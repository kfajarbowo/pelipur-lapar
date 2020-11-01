<div class="sidebar" data-color="purple" data-image="{{ asset('backend/img/sidebar-1.jpg') }}">

    <div class="logo">
        <a href="#" class="simple-text">
            Pelipur Lapar
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="{{ Request::is('admin/dashboard*') ? 'active': '' }}">
                <a href="{{ route('admin.dashboard') }}">
                    <i class="material-icons">dashboard</i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="{{ Request::is('admin/slider*') ? 'active': '' }}" style="margin-top: 10%;">
                <a href="{{ route('slider.index') }}">
                    <i class="material-icons">slideshow</i>
                    <p>Sliders</p>
                </a>
            </li>
            <li class="{{ Request::is('admin/category*') ? 'active': '' }}"style="margin-top: 10%;">
                <a href="{{ route('category.index') }}">
                    <i class="material-icons">content_paste</i>
                    <p>Categories</p>
                </a>
            </li>
            <li class="{{ Request::is('admin/item*') ? 'active': '' }}"style="margin-top: 10%;">
                <a href="{{ route('item.index') }}">
                    <i class="material-icons">library_books</i>
                    <p>Items</p>
                </a>
            </li>
            <li class="{{ Request::is('admin/reservation*') ? 'active': '' }}"style="margin-top: 10%;">
                <a href="{{ route('reservation.index') }}">
                    <i class="material-icons">chrome_reader_mode</i>
                    <p>Reservations</p>
                </a>
            </li>
            <li class="{{ Request::is('admin/contact*') ? 'active': '' }}"style="margin-top: 10%;">
                <a href="{{ route('contact.index') }}">
                    <i class="material-icons">message</i>
                    <p>Contact Message</p>
                </a>
            </li>
            <li class="{{ Request::is('admin/transaksi*') ? 'active': '' }}"style="margin-top: 10%;">
                <a href="{{ route('transaksi.index') }}">
                    <i class="material-icons">store</i>
                    <p>Transaction</p>
                </a>
            </li>

        </ul>
    </div>
</div>