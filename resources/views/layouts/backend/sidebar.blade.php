<aside class="left-sidebar" data-sidebarbg="skin5">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="sidebar-item {{Request::is('admin.dashboard') ? 'selected':''}}">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link {{Request::is('admin.dashboard') ? 'active':''}}" href="{{route('admin.dashboard')}}" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Dashboard</span></a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-earth"></i><span class="hide-menu"> Website Content </span></a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="{{route('admin.banner.index')}}" class="sidebar-link {{Request::is('admin.banner.index') ? 'active':''}}"><i class="fas fa-sliders-h"></i><span class="hide-menu"> Banner </span></a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{route('admin.brand.index')}}" class="sidebar-link {{Request::is('admin.brand.index') ? 'active':''}}"><i class="fab fa-bimobject"></i><span class="hide-menu"> Brand </span></a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{route('admin.category.index')}}" class="sidebar-link {{Request::is('admin.category.index') ? 'active':''}}"><i class="fas fa-list-alt"></i><span class="hide-menu"> Category </span></a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{route('admin.subcategory.index')}}" class="sidebar-link {{Request::is('admin.subcategory.index') ? 'active':''}}"><i class="fas fa-list-alt"></i><span class="hide-menu"> Sub-Category </span></a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{route('admin.unit.index')}}" class="sidebar-link {{Request::is('admin.unit.index') ? 'active':''}}"><i class="fas fa-list-alt"></i><span class="hide-menu"> Unit </span></a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{route('admin.product.index')}}" class="sidebar-link {{Request::is('admin.product.index') ? 'active':''}}"><i class="fab fa-product-hunt"></i><span class="hide-menu"> Product </span></a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-account-settings-variant"></i><span class="hide-menu"> Administration </span></a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="{{route('admin.district.index')}}" class="sidebar-link {{Request::is('admin.district.index') ? 'active':''}}"><i class="fas fa-sliders-h"></i><span class="hide-menu"> District </span></a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{route('admin.thana.index')}}" class="sidebar-link {{Request::is('admin.thana.index') ? 'active':''}}"><i class="fas fa-sliders-h"></i><span class="hide-menu"> Upazila </span></a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{route('admin.supplier.index')}}" class="sidebar-link {{Request::is('admin.supplier.index') ? 'active':''}}"><i class="fas fa-user"></i><span class="hide-menu"> Supplier </span></a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-cart-plus"></i><span class="hide-menu"> Purchase Module </span></a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="{{route('admin.purchase.index')}}" class="sidebar-link {{Route::is('admin.purchase.index') || Route::is('admin.purchase.edit') ? 'active':''}}"><i class="fas fa-cart-plus"></i><span class="hide-menu"> Purchase </span></a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{route('admin.purchase.purchaseList')}}" class="sidebar-link {{Request::is('admin.purchase.purchaseList') ? 'active':''}}"><i class="fas fa-clipboard-list"></i><span class="hide-menu"> Purchase List </span></a>
                        </li>
                    </ul>
                </li>

                <li class="sidebar-item {{Request::is('admin.setting') ? 'selected':''}}">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link {{Request::is('admin.setting') ? 'active':''}}" href="{{route('admin.setting')}}" aria-expanded="false"><i class="mdi mdi-settings"></i><span class="hide-menu">Settings</span></a>
                </li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>