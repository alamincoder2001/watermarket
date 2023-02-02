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
                        <li class="sidebar-item">
                            <a href="{{route('admin.product.published')}}" class="sidebar-link {{Request::is('admin.product.published') ? 'active':''}}"><i class="fas fa-upload"></i><span class="hide-menu"> Product Published </span></a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{route('admin.partner.index')}}" class="sidebar-link {{Request::is('admin.partner.index') ? 'active':''}}"><i class="fas fa-handshake"></i><span class="hide-menu"> Partner </span></a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{route('admin.blog.index')}}" class="sidebar-link {{Request::is('admin.blog.index') ? 'active':''}}"><i class="fas fa-handshake"></i><span class="hide-menu"> Blog </span></a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-account-settings-variant"></i><span class="hide-menu"> Administration </span></a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="{{route('admin.district.index')}}" class="sidebar-link {{Request::is('admin.district.index') ? 'active':''}}"><i class="fas fa-list"></i><span class="hide-menu"> District </span></a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{route('admin.thana.index')}}" class="sidebar-link {{Request::is('admin.thana.index') ? 'active':''}}"><i class="fas fa-list"></i><span class="hide-menu"> Upazila </span></a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{route('admin.customer.index')}}" class="sidebar-link {{Request::is('admin.customer.index') ? 'active':''}}"><i class="fas fa-user-circle"></i><span class="hide-menu"> Customer </span></a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{route('admin.technician.index')}}" class="sidebar-link {{Request::is('admin.technician.index') ? 'active':''}}"><i class="fas fa-wrench"></i><span class="hide-menu"> Technician </span></a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-cart-plus"></i><span class="hide-menu"> Order Module </span></a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="{{route('admin.order.index')}}" class="sidebar-link {{Request::is('admin.order.index') ? 'active':''}}"><i class="fas fa-cart-plus"></i><span class="hide-menu"> Order </span></a>
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