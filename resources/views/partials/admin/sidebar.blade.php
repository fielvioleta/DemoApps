<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">
        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">

                <li class="{{ Route::is('dashboard') ? 'active' : '' }}">
                    <a href="{{ route('dashboard') }}"><i class="menu-icon fa fa-laptop"></i>Dashboard </a>
                </li>

                <li class="{{ 
                    Route::is('categories.index') ||
                    Route::is('categories.create') ||
                    Route::is('categories.edit') 
                    ? 'active' : '' }}">
                    <a href="{{ route('categories.index') }}"><i class="menu-icon fa fa-list-alt"></i>Categories</a>
                </li>

                <li class="{{ 
                    Route::is('products.index') ||
                    Route::is('products.create') ||
                    Route::is('products.edit') 
                    ? 'active' : '' }}">
                    <a href="{{ route('products.index') }}"><i class="menu-icon fa fa-product-hunt"></i>Products</a>
                </li>
                
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</aside>