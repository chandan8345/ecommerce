<aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="images/user.png" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">John Doe</div>
                    <div class="email">john.doe@example.com</div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">group</i>Followers</a></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">shopping_cart</i>Sales</a></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">favorite</i>Likes</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">input</i>Sign Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                    <li>
                        <a href="{{ URL::to('/dashboard') }}">
                            <i class="material-icons">home</i>
                            <span>Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ URL::to('/products') }}">
                            <i class="material-icons">text_fields</i>
                            <span>Products</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ URL::to('/brand') }}">
                            <i class="material-icons">layers</i>
                            <span>Brand</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ URL::to('/category') }}">
                            <i class="material-icons">widgets</i>
                            <span>Category</span>
                        </a>
                    </li>
                    <li>
                                <a href="{{ URL::to('/subcategory') }}">
                                <i class="material-icons">widgets</i>
                                    <span>Subcategory</span>
                                </a>
                    </li>
                            <li>
                                <a href="{{ URL::to('/subsubcategory') }}">
                                <i class="material-icons">widgets</i>
                                    <span>Sub SubCategory</span>
                                </a>
                            </li>
                    </li>
                    <li>
                        <a href="{{ URL::to('/invoice') }}">
                            <i class="material-icons">assignment</i>
                            <span>Invoices</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ URL::to('/user') }}"">
                            <i class="material-icons">view_list</i>
                            <span>Users</span>
                        </a>
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <!-- <div class="legal">
                <div class="copyright">
                    &copy; 2016 - 2017 <a href="javascript:void(0);">AdminBSB - Material Design</a>.
                </div>
                <div class="version">
                    <b>Version: </b> 1.0.5
                </div>
            </div> -->
            <!-- #Footer -->
        </aside>