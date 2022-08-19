<header>
    <!--logo và search box-->
    <div class="heading">
        <div class="container">
            <div class="logo">
                <a href="https://hqgroups.vn/" target="_blank">
                    <img src="./assets/frontend/img/logo.png" alt="">
                </a>

            </div>
            <div style="">
                <ul class="nav nav_destop">
                    <li><a href="#traocohoi">{{__('Về chúng tôi')}}</a></li>
                    <li><a href="#tamnhin">{{__('Tầm nhìn')}}</a></li>
                    <li><a href="#sumenh">{{__('Sứ mệnh')}}</a></li>
                    <li><a href="#company">{{__('Các thành viên')}}</a></li>

                </ul>
                <label for="nav_bar_mobile" class="nav_mobile">
                    <img src="./assets/frontend/img/nav_bar.png" alt="">

                </label>
                <input type="checkbox" hidden class="nav_bar_mobile" id="nav_bar_mobile" >
                <label for="nav_bar_mobile" class="nav_bar_mobile_overlay"></label>
                <div class="nav_bar_form_mobile">
                    <div class="nav_bar_form_mobile_detail">
                        <a href="#traocohoi">
                            {{__('Về chúng tôi')}}

                        </a>
                    </div>
                    <div class="nav_bar_form_mobile_detail">
                        <a href="#tamnhin">
                            {{__('Tầm nhìn')}}

                        </a>
                    </div>
                    <div class="nav_bar_form_mobile_detail">
                        <a href="#sumenh">
                            {{__('Sứ mệnh')}}
                        </a>
                    </div>

                    <div class="nav_bar_form_mobile_detail">
                        <a href="#company">
                            {{__('Công ty thành viên')}}
                            {{--                            Các công ty thành viên--}}
                        </a>
                    </div>
                    <div class="nav_bar_form_mobile_detail company_mobile">
                        <a href="#ikonic">
                            <img src="./assets/frontend/img/mobile_company1.png" alt="">
                        </a>
                    </div>
                    <div class="nav_bar_form_mobile_detail company_mobile">
                        <a href="#hubjs">
                            <img src="./assets/frontend/img/mobile_company2.png" alt="">
                        </a>
                    </div>
                    <div class="nav_bar_form_mobile_detail company_mobile">
                        <a href="#hqpay">
                            <img src="./assets/frontend/img/mobile_company3.png" alt="">
                        </a>
                    </div>
                    <div class="nav_bar_form_mobile_detail company_mobile">
                        <a href="#hqplay">
                            <img src="./assets/frontend/img/mobile_company4.png" alt="">
                        </a>
                    </div>
                    <div class="nav_bar_form_mobile_detail company_mobile">
                        <a href="#globalent">
                            <img src="./assets/frontend/img/mobile_company5.png" alt="">
                        </a>
                    </div>
                    <div class="nav_bar_form_mobile_detail company_mobile ">
                        <a href="#xcrcorp">
                            <img src="./assets/frontend/img/mobile_company6.png" alt="">
                        </a>
                    </div>
                    <div class="nav_bar_form_mobile_detail company_mobile ">
                        <div class="dropdown language position-relative">
                            <a href="#" class="">

                                @if(Session::has('locale'))
                                    @if(Session::get('locale') == 'en')
                                        <img src="./assets/frontend/img/usa.png" alt="">
                                        <span class="ml-2">English</span>
                                    @else
                                        <img src="./assets/frontend/img/vietnam.png" alt="">
                                        <span  class="ml-2">Việt Nam</span>
                                    @endif
                                @else
                                    <img src="./assets/frontend/img/vietnam.png" alt="">
                                    <span  class="ml-2">Việt Nam</span>
                                @endif
                            </a>
                            <ul class="position-absolute">
                                <li>
                                    <a href="{{ route('language','en') }}" class="en">
                                        <img src="./assets/frontend/img/usa.png" alt="">
                                        <span>English</span>
                                    </a>

                                </li>
                                <li>
                                    <a href="{{ route('language','vi') }}" class="vi">
                                        <img src="./assets/frontend/img/vietnam.png" alt="">
                                        <span>Việt Nam</span>
                                    </a>
                                </li>
                            </ul>

                        </div>
                    </div>

                </div>


            </div>
            <div class="d-none d-lg-flex ">
                <div class="nav_destop_hire">
                    <a href="https://tuyendung.hqgroups.vn/" target="_blank">{{__('Xem vị trí tuyển dụng')}}</a>

                </div>
                <div class="dropdown language position-relative ml-4 d-none d-lg-block">
                    <a href="#" class="">

                        @if(Session::has('locale'))
                            @if(Session::get('locale') == 'en')
                                <img src="./assets/frontend/img/usa.png" alt="">

                            @else
                                <img src="./assets/frontend/img/vietnam.png" alt="">

                            @endif
                        @else
                            <img src="./assets/frontend/img/vietnam.png" alt="">


                        @endif
                    </a>
                    <ul class="position-absolute">
                        <li>
                            <a href="{{ route('language','en') }}" class="en">
                                <img src="./assets/frontend/img/usa.png" alt="">
                                <span>English</span>
                            </a>

                        </li>
                        <li>
                            <a href="{{ route('language','vi') }}" class="vi">
                                <img src="./assets/frontend/img/vietnam.png" alt="">
                                <span>Việt Nam</span>
                            </a>
                        </li>
                    </ul>

                </div>
            </div>

{{--            <div class="dropdown">--}}
{{--                <a href="#" class="logo locale">--}}
{{--                    <img src="https://dktgroup.vn/assets/img/flag/vietnam.png" alt="">--}}
{{--                </a>--}}
{{--                <ul>--}}
{{--                    <li>--}}
{{--                        <a href="https://dktgroup.vn/language/en" class="logo locale">--}}
{{--                            <img src="https://dktgroup.vn/assets/img/flag/usa.png" alt="">--}}
{{--                            English--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        <a href="https://dktgroup.vn/language/vi" class="logo locale">--}}
{{--                            <img src="https://dktgroup.vn/assets/img/flag/vietnam.png" alt="">--}}
{{--                            Việt Nam--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </div>--}}

        </div>
    </div>
    <!--    nav-->
</header>
<div class="company_category">
    <div class="container">
        <div class="company_category_in">
            <div class="company_category_img">
                <a  href="#ikonic"  class="company_ikonic" >
                    <img src="./assets/frontend/img/company1.png" alt="">
                </a>

            </div>
            <div class="company_category_img">
                <a href="#hubjs" class="company_hubjs">
                    <img src="./assets/frontend/img/company2.png" alt="">
                </a>

            </div>
            <div class="company_category_img">
                <a href="#hqpay" class="company_hqpay">
                    <img src="./assets/frontend/img/company3.png" alt="">
                </a>

            </div>
            <div class="company_category_img">
                <a href="#hqplay" class="company_hqplay">
                    <img src="./assets/frontend/img/company4.png" alt="">
                </a>

            </div>
            <div class="company_category_img">
                <a href="#globalent" class="company_globalent">
                    <img src="./assets/frontend/img/company5.png" alt="">
                </a>

            </div>
            <div class="company_category_img">
                <a href="#xcrcorp" class="company_xcrcorp">
                    <img src="./assets/frontend/img/company6.png" alt="">
                </a>

            </div>

        </div>
    </div>

</div>
