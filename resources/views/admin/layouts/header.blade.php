<div class="container-fluid no-gutters">
    <div class="row">
        <div class="col-lg-12 p-0 ">
            <div class="header_iner d-flex justify-content-end align-items-center">
                <div class="sidebar_icon d-lg-none">
                    <i class="ti-menu"></i>
                </div>
                <!-- <div class="serach_field-area d-flex align-items-center">
                    <div class="search_inner">
                        <form action="#">
                            <div class="search_field">
                                <input type="text" placeholder="Search here..." >
                            </div>
                            <button type="submit"> <img src="{{ asset('admin_layout/img/icon/icon_search.svg') }}" alt=""> </button>
                        </form>
                    </div>
                    <span class="f_s_14 f_w_400 ml_25 white_text text_white" >Apps</span>
                </div> -->
                    <div class="header_right d-flex justify-content-end align-items-center">
                       
                        <div class="profile_info">
                            <img src="{{ asset('admin_layout/img/client_img.png') }}" alt="#">
                            <div class="profile_info_iner">
                                <div class="profile_info_details">
                                    <a  href="{{ route('admin.change_password') }}" aria-expanded="false">
                                        <span>Change Password</span>
                                    </a>
                                    <a  href="{{ route('admin.logout') }}" aria-expanded="false">
                                        <span>Logout</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>