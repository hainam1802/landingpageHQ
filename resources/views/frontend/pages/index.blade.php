@extends('layouts.master')

@section('content')
<section>
    <div class="background_content">
        <div class="background_content-header">
            <div class="background_content-header-img">
                <img src="./assets/frontend/img/background.png" alt="">
            </div>
            <!--            <div class="background_content-header-content">-->
            <!--                <h1>We Take Care of the Future</h1>-->
            <!--                <p>We know how large objects will act, but things on a small scale just do not act that way.</p>-->
            <!--                <div class="background_content-header-content-button">-->

            <!--                    <div class="">-->
            <!--                        <a href="">Get Quote Now</a>-->
            <!--                    </div>-->
            <!--                    <div class="">-->
            <!--                        <a href="">Learn More</a>-->
            <!--                    </div>-->
            <!--                </div>-->
            <!--            </div>-->
        </div>
    </div>
</section>
<!--cơ hội-->
<section>
    <div class="opportunity aos-init aos-animate" data-aos="fade-up" id="traocohoi">
        <div class="container">
            <div class="opportunity_title">
                {{__('TRAO CƠ HỘI CHO CHÚNG TÔI VÀ BẠN')}}

            </div>
            <div class="opportunity_content">
                <div>
                    {{__('HQ Group là tập đoàn đầu tư, hoạt động trong đa lĩnh vực, luôn khát vọng đổi mới song hành cùng sự phát triển bền vững.')}}
                </div>
                <div>
                    {{__('HQ Group mong muốn tìm kiếm những “New Start-up” - Tổ chức có đam mê, khát vọng, trí tuệ để định hướng, đồng hành và phát triển.')}}

                </div>
                <div>
                    {{__('Cùng với sự phát triển của tổ chức, HQ Group đặc biệt chú trọng phát triển đội ngũ nhân sự - tài sản quan trọng nhất của doanh nghiệp, để cùng chia sẻ những cơ hội và lợi ích trong tương lai.')}}

                </div>

            </div>
        </div>

    </div>
</section>
<!--lĩnh vực-->
<section>
    <div class="field aos-init aos-animate" data-aos="fade-up">
        <div class="container">
            <div class="field_title">
                {{__('Các lĩnh vực HQ Group hướng tới:')}}


            </div>
            <div class="field_content">
                <div>
                    <img src="./assets/frontend/img/field_1.png" alt="">
                    <p class="field_content_text"> {{__('Giải trí')}}</p>
                </div>
                <div>
                    <img src="./assets/frontend/img/field_2.png" alt="">
                    <p class="field_content_text"> {{__('Công nghệ')}}</p>
                </div>
                <div>
                    <img src="./assets/frontend/img/field_3.png" alt="">
                    <p class="field_content_text"> {{__('Thanh toán')}}</p>
                </div>
                <div class="field_content_sport">
                    <img src="./assets/frontend/img/field_4.png" alt="">
                    <p class="field_content_text"> {{__('Thể thao điện tử')}}</p>
                </div>
                <div class="field_content_invest">
                    <img src="./assets/frontend/img/field_5.png" alt="">
                    <p class="field_content_text"> {{__('Đầu tư & góp vốn')}}</p>
                </div>
            </div>
            <div class="ads_button text-center my-4 d-lg-none">
                <a href="https://tuyendung.hqgroups.vn/" target="_blank" class="text-uppercase">
                    {{__('Xem vị trí tuyển dụng')}}
                </a>
            </div>
        </div>
    </div>
</section>
<!--/*hành trình định hướng phát triển*/-->
<section>
    <div class="ads" id="statistic">
        <div class="ads_bg" style="background:#000 url('./assets/frontend/img/ads1.png') center no-repeat;    background-size: cover">
            <div class="container">
                <div class="ads_content ads_1" >
                    <p>
                        {{__('HÀNH TRÌNH ĐỊNH HƯỚNG &')}}
                        <br> {{__('PHÁT TRIỂN BỀN VỮNG CÙNG CÁC DOANH NGHIỆP')}}
                    </p>
                    <div class="ads_content_line">

                    </div>
                    <p>
                        {{__('HQ Group tự hào vì đã đồng hành cùng các tổ chức, hỗ trợ, định hướng và phát triển toàn diện.')}}

                    </p>
                    <div class="ads_1_content_out row">
                        <div class="col-md-4">
                            <div class="ads_1_content">
                                <img src="./assets/frontend/img/ads1_content_1.png" alt="">
                                <div class="ads_1_content_title"><span class="counter-value" data-count="10">0</span>+</div>
                                <p> {{__('Chi nhánh văn phòng')}}</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="ads_1_content">
                                <img src="./assets/frontend/img/ads1_content_2.png" alt="">
                                <div class="ads_1_content_title">0<span class="counter-value" data-count="06">0</span>+</div>
                                <p>{{__('Công ty thành viên')}} </p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="ads_1_content">
                                <img src="./assets/frontend/img/ads1_content_1.png" alt="">
                                <div class="ads_1_content_title"><span class="counter-value" data-count="300">0</span>+</div>
                                <p>{{__('Chuyên gia & nhân sự')}} </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!--tầm nhìn, sứ mệnh, giá trị cốt lõi-->
<section>
    <div class="vision "   >
        <div class="container vision_content">
            <div class="vision_content_in aos-init aos-animate" data-aos="fade-left" id="tamnhin">
                <div class="vision_img">
                    <img src="./assets/frontend/img/vision_1.png" alt="">
                </div>
                <div class="vision_title">
                    <p>{{__('Tầm nhìn')}} </p>
                    <p>
                        {{__('Với khát vọng đổi mới không ngừng cùng sự phát triển bền vững. Mục tiêu của HQ Group là trở thành một trong những tập đoàn đầu tư hàng đầu tại Việt Nam')}}
                    </p>
                </div>
            </div>
            <div class="vision_content_in aos-init aos-animate" data-aos="fade-left" id="sumenh">
                <div class="vision_title">
                    <p>{{__('Sứ mệnh')}}</p>
                    <p>
                        {{__('Đem lại cho đối tác - khách hàng giá trị - dịch vụ chất lượng cùng độ tin cậy nhất, và kiến tạo những giá trị bền vững, nhân văn cho xã hội')}}
                    </p>
                </div>
                <div class="vision_img">
                    <img src="./assets/frontend/img/vision_2.png" alt="">
                </div>

            </div>
            <div class="vision_content_in aos-init aos-animate" data-aos="fade-right">
                <div class="vision_img">
                    <img src="./assets/frontend/img/vision_3.png" alt="">
                </div>
                <div class="vision_title">
                    <p>{{__('GIÁ TRỊ CỐT LÕI')}}</p>
                    <div class="vision_title_in">
                        <span>{{__('Đồng hành')}}</span>
                        <br>{{__('Tìm kiếm và hỗ trợ các tổ chức trong hành trình gây dựng và phát triển sự nghiệp.')}}
                    </div>
                    <div class="vision_title_in">
                        <span>{{__('Quyết liệt')}}</span>
                        <br>{{__('Đặt mục tiêu rõ ràng và quyết tâm hành động tới cùng.')}}
                    </div>

                    <div class="vision_title_in">
                        <span>{{__('Uy tín')}}</span>
                        <br>{{__('Luôn cam kết giá trị với khách hàng, cổ đông, đối tác, cộng đồng và đất nước.')}}
                    </div>
                    <div class="vision_title_in">
                        <span>{{__('Đồng thắng lợi')}}</span>
                        <br>{{__('Xã hội win - Đối tác win - Chúng tôi win')}}
                        <br>{{__('Đóng góp cho sự phát triển của xã hội, đem lại thắng lợi cho đối tác, khách hàng và nhận về những giá trị tích cực cho tổ chức của chúng tôi.')}}
                    </div>



                </div>
            </div>
        </div>
    </div>
</section>

<!--hoạt động gắn bó-->
<section>
    <div class="activity">
        <div class="container">
            <div class="activity_title aos-init aos-animate" data-aos="fade-up">
                <p>{{__('Hoạt động gắn kết nội bộ')}}</p>
                <div class="activity_line"></div>
                <p>
                    {{__('HQ luôn đặt mục tiêu chú trọng phát triển con người, tạo sự gắn kết giữa những cá nhân để tạo nên một tập thể vững chắc, đồng lòng')}}

                </p>
            </div>
            <div class="activity_content aos-init aos-animate" data-aos="fade-up">
                <div class="row">
                    <div class=" col-12 col-md-4 ">
                        <div class="activity_content_title">
                            <span>01</span>
                            <div class="activity_content_line"></div>
                            <span>{{__('Phát triển chuyên môn')}}</span>

                        </div>
                    </div>
                    <div class="col-12 col-md-8  ">
                        <div class="row">
                            <div class="col-6 col-md-6 ">
                                <div class="activity_content_in">
                                    <img src="./assets/frontend/img/acitvity_1.png" alt="">
                                    <div class="activity_content_detail">{{__('Đào tạo nội bộ')}}</div>
                                </div>
                            </div>
                            <div class="col-6 col-md-6 ">
                                <div class="activity_content_in">
                                    <img src="./assets/frontend/img/acitvity_2.png" alt="">
                                    <div class="activity_content_detail">{{__('Chiến binh toàn năng')}}</div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="activity_content_reverse row ">
                    <div class="col-12 col-md-8  ">
                        <div class="row">
                            <div class="col-6 col-md-6 ">
                                <div class="activity_content_in">
                                    <img src="./assets/frontend/img/acitvity_3.png" alt="">
                                    <div class="activity_content_detail">{{__('Đồng hành cũng HQer mùa dịch')}}</div>
                                </div>
                            </div>
                            <div class="col-6 col-md-6 ">
                                <div class="activity_content_in">
                                    <img src="./assets/frontend/img/acitvity_4.png" alt="">
                                    <div class="activity_content_detail">{{__('Sinh nhật thành viên hàng tháng')}}</div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class=" col-12 col-md-4 ">
                        <div class="activity_content_title">
                            <span>02</span>
                            <div class="activity_content_line"></div>
                            <span>{{__('Sức khỏe tinh thần')}}</span>

                        </div>
                    </div>


                </div>
                <div class="row">
                    <div class=" col-12 col-md-4 ">
                        <div class="activity_content_title">
                            <span>03</span>
                            <div class="activity_content_line"></div>
                            <span>{{__('Kết nối tập thể')}}</span>

                        </div>
                    </div>
                    <div class="col-12 col-md-8  ">
                        <div class="row">
                            <div class="col-6 col-md-6 ">
                                <div class="activity_content_in">
                                    <img src="./assets/frontend/img/acitvity_5.png" alt="">
                                    <div class="activity_content_detail">Team building</div>
                                </div>
                            </div>
                            <div class="col-6 col-md-6 ">
                                <div class="activity_content_in">
                                    <img src="./assets/frontend/img/acitvity_6.png" alt="">
                                    <div class="activity_content_detail">{{__('Sự kiện vào ngày lễ trong năm.')}}</div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!--văn hóa doanh nghiệp-->
<section>
    <div class="cultural aos-init aos-animate" data-aos="fade-right">
        <div class="container">
            <div class="activity_title">
                <p>{{__('Văn hóa doanh nghiệp')}}</p>
                <div class="activity_line"></div>

            </div>
            <div class="cultural_content">
                <div class="row">
                    <div class="col-6 col-sm-6 col-md-4">
                        <div class="cultural_content_in">
                            <img src="./assets/frontend/img/cultural_1.png" alt="">
                            <div class="cultural_content_title">
                                {{__('Tinh thần đồng đội')}}

                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-6 col-md-4">
                        <div class="cultural_content_in">
                            <img src="./assets/frontend/img/cultural_2.png" alt="">
                            <div class="cultural_content_title">
                                {{__('Tôn trọng quan điểm cá nhân')}}

                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-6 col-md-4">
                        <div class="cultural_content_in">
                            <img src="./assets/frontend/img/cultural_3.png" alt="">
                            <div class="cultural_content_title">
                                {{__('Phát triển năng lực nhân sự')}}


                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-6 col-md-4">
                        <div class="cultural_content_in">
                            <img src="./assets/frontend/img/cultural_4.png" alt="">
                            <div class="cultural_content_title">
                                {{__('Cam kết & chủ động')}}


                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-6 col-md-4">
                        <div class="cultural_content_in">
                            <img src="./assets/frontend/img/cultural_5.png" alt="">
                            <div class="cultural_content_title">
                                {{__('Chuyên nghiệp')}}


                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-6 col-md-4">
                        <div class="cultural_content_in">
                            <img src="./assets/frontend/img/cultural_6.png" alt="">
                            <div class="cultural_content_title">
                                {{__('Trách nhiệm xã hội')}}


                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!--tìm kiếm nhân tài đồng hành-->
<section>
    <div class="ads">
        <div class="ads_bg" style="background:#000 url('./assets/frontend/img/ads2.png') center no-repeat;    background-size: cover">
            <div class="container">
                <div class="ads_content ads_2">
                    <p> {{__('HQ GROUP TÌM KIẾM NHÂN TÀI ĐỒNG HÀNH!')}}</p>

                    <p> {{__('Nếu bạn đang tìm kiếm cơ hội nghề nghiệp và phù hợp với các giá trị của HQ Group, hãy gia nhập đội ngũ tài năng của chúng tôi')}}</p>
                    <div class="ads_button">
                        <a href="https://tuyendung.hqgroups.vn/category-jobs/all?company=HQ%20GROUP" target="_blank">
                            {{__('Xem vị trí tuyển dụng')}}
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!--Công ty thành viên-->
<section>
    <div class="activity " id="company">
        <div class="container">
            <div class="activity_title aos-init aos-animate" data-aos="fade-left" >
                <p>{{__('Công ty thành viên')}}</p>
                <div class="activity_line"></div>

            </div>
            <div class="activity_content aos-init aos-animate" data-aos="fade-right">
                <div class="row activity_content_desktop">
                    <div class="col-md-4 ">
                        <div class="member_company_content_out">
                            <div class="member_company_content">
                                <img src="./assets/frontend/img/member_company_1.png" alt="">
                            </div>
                            <div class="member_company_content_hover">
                                <div class="member_company_content_hover_in">
                                    <img src="./assets/frontend/img/member_company_1.png" alt="">
                                    <div class="member_company_content_title">
                                        <p>iKONIX</p>
                                        <p>
                                            {{__('Hoạt động trong lĩnh vực truyền thông, Ikonix là một trong những đơn vị hàng đầu Việt Nam trong lĩnh vực Quản lý, đào tạo và phát triển tài năng trẻ như KOLs, Influencers, Streamer')}}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="member_company_content_out">
                            <div class="member_company_content">
                                <img src="./assets/frontend/img/member_company_2.png" alt="">
                            </div>
                            <div class="member_company_content_hover">
                                <div class="member_company_content_hover_in">
                                    <img src="./assets/frontend/img/member_company_2.png" alt="">
                                    <div class="member_company_content_title">
                                        <p>HUB-JS</p>
                                        <p>
                                            {{__('Tiên phong trong công nghệ tiếp thị và tùy chỉnh dữ liệu khách hàng')}}

                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="member_company_content_out">
                            <div class="member_company_content">
                                <img src="./assets/frontend/img/member_company_3.png" alt="">
                            </div>
                            <div class="member_company_content_hover">
                                <div class="member_company_content_hover_in">
                                    <img src="./assets/frontend/img/member_company_3.png" alt="">
                                    <div class="member_company_content_title">
                                        <p>HQ PAY</p>
                                        <p>
                                            {{__('HQ PAY cung cấp nền tảng mua hàng & thanh toán trực tuyến, cung cấp cho khách hàng trải nghiệm thanh toán một chạm')}}

                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="member_company_content_out">
                            <div class="member_company_content">
                                <img src="./assets/frontend/img/member_company_4.png" alt="">
                            </div>

                            <div class="member_company_content_hover">
                                <div class="member_company_content_hover_in">

                                    <img src="./assets/frontend/img/member_company_4.png" alt="">
                                    <div class="member_company_content_title">
                                        <p>HQ E-SPORT</p>
                                        <p>
                                            {{__('HQ Esport nuôi dưỡng và phát triển các tài năng trẻ của các bộ môn Esports và xây dựng nền Esports Việt Nam thêm lớn mạnh')}}

                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="member_company_content_out">
                            <div class="member_company_content">
                                <img src="./assets/frontend/img/member_company_5.png" alt="">
                            </div>

                            <div class="member_company_content_hover">
                                <div class="member_company_content_hover_in">
                                    <img src="./assets/frontend/img/member_company_5.png" alt="">
                                    <div class="member_company_content_title">
                                        <p>GLOBAL ENTERTAIMENT</p>
                                        <p>
                                            {{__('Hoạt động trong lĩnh vực giải trí, đi đầu trong việc khai thác dịch vụ Idol, KOL, Streamer dành cho thị trường B2C')}}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="member_company_content_out">
                            <div class="member_company_content">
                                <img src="./assets/frontend/img/member_company_6.png" alt="">
                            </div>
                            <div class="member_company_content_hover">
                                <div class="member_company_content_hover_in">
                                    <img src="./assets/frontend/img/member_company_6.png" alt="">
                                    <div class="member_company_content_title">
                                        <p>XRG Corp</p>
                                        <p>
                                            {{__('Social Media Agency hàng đầu tại Việt Nam, cung cấp các chiến dịch độc đáo, sáng tạo, hiệu quả cho ngành bán lẻ và dịch vụ')}}
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="row activity_content_mobile">
                    <div class="col-6 col-md-6 p-m-8">
                        <div class="member_company_content_mobile">
                            <div class="member_company_content_hover_in">
                                <img src="./assets/frontend/img/member_company_1.png" alt="">
                                <div class="member_company_content_title">
                                    <p>iKONIX</p>
                                    <p>
                                        {{__('Hoạt động trong lĩnh vực truyền thông, Ikonix là một trong những đơn vị hàng đầu Việt Nam trong lĩnh vực Quản lý, đào tạo và phát triển tài năng trẻ như KOLs, Influencers, Streamer')}}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-6 p-m-8">
                        <div class="member_company_content_mobile">
                            <div class="member_company_content_hover_in">
                                <img src="./assets/frontend/img/member_company_2.png" alt="">
                                <div class="member_company_content_title">
                                    <p>HUB-JS</p>
                                    <p>
                                        {{__('Tiên phong trong công nghệ tiếp thị và tùy chỉnh dữ liệu khách hàng')}}

                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-6 p-m-8">
                        <div class="member_company_content_mobile">
                            <div class="member_company_content_hover_in">
                                <img src="./assets/frontend/img/member_company_3.png" alt="">
                                <div class="member_company_content_title">
                                    <p>HQ PAY</p>
                                    <p>
                                        {{__(' HQ PAY cung cấp nền tảng mua hàng & thanh toán trực tuyến, cung cấp cho khách hàng trải nghiệm thanh toán một chạm')}}

                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-6 p-m-8">
                        <div class="member_company_content_mobile">
                            <div class="member_company_content_hover_in">
                                <img src="./assets/frontend/img/member_company_4.png" alt="">
                                <div class="member_company_content_title">
                                    <p>HQ E-SPORT</p>
                                    <p>
                                        {{__('HQ Esport nuôi dưỡng và phát triển các tài năng trẻ của các bộ môn Esports và xây dựng nền Esports Việt Nam thêm lớn mạnh')}}

                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-6 p-m-8">
                        <div class="member_company_content_mobile">
                            <div class="member_company_content_hover_in">
                                <img src="./assets/frontend/img/member_company_5.png" alt="">
                                <div class="member_company_content_title">
                                    <p>GLOBAL ENTERTAIMENT</p>
                                    <p>
                                        {{__('Hoạt động trong lĩnh vực giải trí, đi đầu trong việc khai thác dịch vụ Idol, KOL, Streamer dành cho thị trường B2C')}}

                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-md-6 p-m-8">
                        <div class="member_company_content_mobile">
                            <div class="member_company_content_hover_in">
                                <img src="./assets/frontend/img/member_company_6.png" alt="">
                                <div class="member_company_content_title">
                                    <p>XRG Corp</p>
                                    <p>
                                        {{__('Social Media Agency hàng đầu tại Việt Nam, cung cấp các chiến dịch độc đáo, sáng tạo, hiệu quả cho ngành bán lẻ và dịch vụ')}}

                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Ikonix-->
<section>
    <div class="ikonix" id="ikonic">
        <img src="./assets/frontend/img/ikonix.png" alt="">
        <div class="ikonix_bg">
            <img src="./assets/frontend/img/ikonix_bg.png" alt="">
        </div>
        <div class="container">
            <div class="ikonix_title aos-init aos-animate" data-aos="fade-up">
                <p>
                    {{__('Là một trong những đơn vị hàng đầu Việt Nam trong lĩnh vực quản lý, đào tạo và phát triển các bạn Kols, Influencer, Streamer, Youtuber. Hệ thống Kols với số lượng và chất lượng tuyệt vời, trải dài ở nhiều lĩnh vực từ gaming đến non-gaming (beauty, đời sống, ẩm thực,...)')}}


                </p>
                <br>
                <p>
                    {{__('Có nhiều kinh nghiệm trong việc xây dựng và triển khai chiến dịch quảng bá và truyền thông cho sản phẩm.')}}

                </p>
            </div>
            <div class="ikonix_line"></div>
            <div class="ikonix_about">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="ikonix_about_detail aos-init aos-animate" data-aos="fade-right">
                            <img src="./assets/frontend/img/ikonix_about_1.png" alt="">
                            <div class="ikonix_about_title">
                                <p> {{__('Tầm nhìn')}}</p>
                                <p>
                                    {{__('Trở thành công ty hàng đầu trong lĩnh vực truyền thông, sáng tạo nội dung và phát triển tài năng trẻ')}}


                                </p>
                            </div>
                        </div>

                    </div>

                    <div class="col-12 col-md-6">
                        <div class="ikonix_about_detail aos-init aos-animate" data-aos="fade-left">
                            <img src="./assets/frontend/img/ikonix_about_2.png" alt="">
                            <div class="ikonix_about_title">
                                <p>{{__('Sứ mệnh')}}</p>
                                <p>
                                    {{__('Làm cầu nối giúp doanh nghiệp kết nối với khách hàng qua các dịch vụ và giải pháp truyền thông cho sản phẩm')}}


                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="ikonix_achievement aos-init aos-animate" data-aos="fade-up">
                <div class="activity_title">
                    <p> {{__('Thành tựu nổi bật')}}</p>
                    <div class="activity_line"></div>

                </div>
                <div class="ikonix_achievement_content">
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                            <div class="ikonix_achievement_content_in">
                                <img src="./assets/frontend/img/thanhtuu1.png" alt="">
                                <div class="ikonix_achievement_content_title">
                                    <span>90</span>+
                                    <p> {{__('Nhân sự & chuyên viên')}} </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                            <div class="ikonix_achievement_content_in">
                                <img src="./assets/frontend/img/ikonix_thanhtuu1.png" alt="">
                                <div class="ikonix_achievement_content_title">
                                    <span>100</span>+
                                    <p> {{__('KOLs/ Influencers độc quyền')}} </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                            <div class="ikonix_achievement_content_in">
                                <img src="./assets/frontend/img/ikonix_thanhtuu2.png" alt="">
                                <div class="ikonix_achievement_content_title">
                                    <span>500</span>+
                                    <p> {{__('KOLs/ Influencers hợp tác hình ảnh')}} </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                            <div class="ikonix_achievement_content_in">
                                <img src="./assets/frontend/img/ikonix_thanhtuu3.png" alt="">
                                <div class="ikonix_achievement_content_title">
                                    <span>500</span>+
                                    <p> {{__('Đối tác, khách hàng')}} </p>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
            <!--            SỞ HỮU DÀN KOLS HÙNG HẬU-->

            <div class="ikonix_kol">
                <div class="activity_title">
                    <p> {{__('Sở hữu dàn KOls hùng hậu')}}</p>
                    <div class="activity_line"></div>

                </div>
                <div class="ikonix_kol_content">
                    <div class="row" style="position: relative">
                        <div class="col-12 ikonix_kol_content_slide" >
                            <div class="swiper-container ikonix_kol_content_slide_detail">
                                <div class="swiper-wrapper">

                                    <div class="swiper-slide" >
                                        <div class="ikonix_kol_content_slide_detail_in">
                                            <div class="ikonix_kol_content_slide_img">
                                                <img src="./assets/frontend/img/kol_1.png" alt="">
                                            </div>
                                            <div class="ikonix_kol_content_slide_detail_layout">
                                                <img src="./assets/frontend/img/kol_layout.png" alt="">
                                            </div>
                                            <div class="ikonix_kol_content_slide_detail_name">
                                                Bác Gấu
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" >
                                        <div class="ikonix_kol_content_slide_detail_in">
                                            <div class="ikonix_kol_content_slide_img">
                                                <img src="./assets/frontend/img/kol_2.png" alt="">
                                            </div>
                                            <div class="ikonix_kol_content_slide_detail_layout">
                                                <img src="./assets/frontend/img/kol_layout.png" alt="">
                                            </div>
                                            <div class="ikonix_kol_content_slide_detail_name">
                                                Tiền Zombie

                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" >
                                        <div class="ikonix_kol_content_slide_detail_in">
                                            <div class="ikonix_kol_content_slide_img">
                                                <img src="./assets/frontend/img/kol_3.png" alt="">
                                            </div>
                                            <div class="ikonix_kol_content_slide_detail_layout">
                                                <img src="./assets/frontend/img/kol_layout.png" alt="">
                                            </div>
                                            <div class="ikonix_kol_content_slide_detail_name">
                                                Vương Anh Ole

                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" >
                                        <div class="ikonix_kol_content_slide_detail_in">
                                            <div class="ikonix_kol_content_slide_img">
                                                <img src="./assets/frontend/img/kol_4.png" alt="">
                                            </div>
                                            <div class="ikonix_kol_content_slide_detail_layout">
                                                <img src="./assets/frontend/img/kol_layout.png" alt="">
                                            </div>
                                            <div class="ikonix_kol_content_slide_detail_name">
                                                Deas Tiến Đạt

                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" >
                                        <div class="ikonix_kol_content_slide_detail_in">
                                            <div class="ikonix_kol_content_slide_img">
                                                <img src="./assets/frontend/img/kol_5.png" alt="">
                                            </div>
                                            <div class="ikonix_kol_content_slide_detail_layout">
                                                <img src="./assets/frontend/img/kol_layout.png" alt="">
                                            </div>
                                            <div class="ikonix_kol_content_slide_detail_name">
                                                Như Hexi

                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" >
                                        <div class="ikonix_kol_content_slide_detail_in">
                                            <div class="ikonix_kol_content_slide_img">
                                                <img src="./assets/frontend/img/kol_6.png" alt="">
                                            </div>
                                            <div class="ikonix_kol_content_slide_detail_layout">
                                                <img src="./assets/frontend/img/kol_layout.png" alt="">
                                            </div>
                                            <div class="ikonix_kol_content_slide_detail_name">
                                                SAM Gaming

                                            </div>
                                        </div>
                                    </div>




                                </div>

                            </div>
                            <div class="swiper-pagination1"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!--           ĐỐi tác-->
            <div class="ikonix_partner">
                <div class="activity_title">
                    <p> {{__('Đối tác')}}</p>
                    <div class="activity_line"></div>

                </div>
                <div class="ikonix_kol_content">
                    <div class="row" style="position: relative">
                        <div class="col-12 ikonix_partner_content_slide" >
                            <div class="swiper-container ikonix_partner_content_slide_detail">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide" >
                                        <div class="ikonix_kol_content_slide_detail_in">
                                            <div class="ikonix_partner_img">
                                                <img src="./assets/frontend/img/ikonix_partner1.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" >
                                        <div class="ikonix_kol_content_slide_detail_in">
                                            <div class="ikonix_partner_img">
                                                <img src="./assets/frontend/img/ikonix_partner2.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" >
                                        <div class="ikonix_kol_content_slide_detail_in">
                                            <div class="ikonix_partner_img">
                                                <img src="./assets/frontend/img/ikonix_partner3.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" >
                                        <div class="ikonix_kol_content_slide_detail_in">
                                            <div class="ikonix_partner_img">
                                                <img src="./assets/frontend/img/ikonix_partner4.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" >
                                        <div class="ikonix_kol_content_slide_detail_in">
                                            <div class="ikonix_partner_img">
                                                <img src="./assets/frontend/img/ikonix_partner5.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" >
                                        <div class="ikonix_kol_content_slide_detail_in">
                                            <div class="ikonix_partner_img">
                                                <img src="./assets/frontend/img/ikonix_partner6.png" alt="">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="swiper-slide" >
                                        <div class="ikonix_kol_content_slide_detail_in">
                                            <div class="ikonix_partner_img">
                                                <img src="./assets/frontend/img/ikonix_partner7.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" >
                                        <div class="ikonix_kol_content_slide_detail_in">
                                            <div class="ikonix_partner_img">
                                                <img src="./assets/frontend/img/ikonix_partner8.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" >
                                        <div class="ikonix_kol_content_slide_detail_in">
                                            <div class="ikonix_partner_img">
                                                <img src="./assets/frontend/img/ikonix_partner9.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" >
                                        <div class="ikonix_kol_content_slide_detail_in">
                                            <div class="ikonix_partner_img">
                                                <img src="./assets/frontend/img/ikonix_partner10.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" >
                                        <div class="ikonix_kol_content_slide_detail_in">
                                            <div class="ikonix_partner_img">
                                                <img src="./assets/frontend/img/ikonix_partner11.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" >
                                        <div class="ikonix_kol_content_slide_detail_in">
                                            <div class="ikonix_partner_img">
                                                <img src="./assets/frontend/img/ikonix_partner12.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" >
                                        <div class="ikonix_kol_content_slide_detail_in">
                                            <div class="ikonix_partner_img">
                                                <img src="./assets/frontend/img/ikonix_partner13.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" >
                                        <div class="ikonix_kol_content_slide_detail_in">
                                            <div class="ikonix_partner_img">
                                                <img src="./assets/frontend/img/ikonix_partner14.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" >
                                        <div class="ikonix_kol_content_slide_detail_in">
                                            <div class="ikonix_partner_img">
                                                <img src="./assets/frontend/img/ikonix_partner15.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" >
                                        <div class="ikonix_kol_content_slide_detail_in">
                                            <div class="ikonix_partner_img">
                                                <img src="./assets/frontend/img/ikonix_partner16.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" >
                                        <div class="ikonix_kol_content_slide_detail_in">
                                            <div class="ikonix_partner_img">
                                                <img src="./assets/frontend/img/ikonix_partner17.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" >
                                        <div class="ikonix_kol_content_slide_detail_in">
                                            <div class="ikonix_partner_img">
                                                <img src="./assets/frontend/img/ikonix_partner18.png" alt="">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="swiper-slide" >
                                        <div class="ikonix_kol_content_slide_detail_in">
                                            <div class="ikonix_partner_img">
                                                <img src="./assets/frontend/img/ikonix_partner19.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" >
                                        <div class="ikonix_kol_content_slide_detail_in">
                                            <div class="ikonix_partner_img">
                                                <img src="./assets/frontend/img/ikonix_partner20.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" >
                                        <div class="ikonix_kol_content_slide_detail_in">
                                            <div class="ikonix_partner_img">
                                                <img src="./assets/frontend/img/ikonix_partner21.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="swiper-pagination2"></div>
                        </div>
                    </div>
                </div>
            </div>


        </div>

    </div>
</section>
<!--iKONIX TÌM KIẾM TÀI NĂNG-->
<section>
    <div class="ads">
        <div class="ads_bg" style="background:#000 url('./assets/frontend/img/ads_ikonix.png') center no-repeat;    background-size: cover">
            <div class="container">
                <div class="ads_content ads_2">
                    <p> {{__('iKONIX TÌM KIẾM TÀI NĂNG')}}</p>

                    <p> {{__('Nếu bạn mong muốn thử sức trong lĩnh vực giải trí, hãy gia nhập với chúng tôi')}}</p>
                    <div class="ads_button">
                        <a href="https://tuyendung.hqgroups.vn/category-jobs/all?company=iKonix" target="_blank">
                            {{__('Xem vị trí tuyển dụng')}}
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!--hub js-->
<section>
    <div class="hub-js" id="hubjs" >
        <div class="container">
            <img src="./assets/frontend/img/hub-js.png" alt="">
            <div class="hub-js_title_mobile"  style="background:#000 url('./assets/frontend/img/hub-js_about_mobile.png') center no-repeat;    background-size: cover">
                <p>
                    {{__('HUB-JS giúp kết nối và phát triển doanh nghiệp')}} <br> {{__('trực tuyến tại Việt Nam và Châu Á Thái Bình Dương, tiên phong công nghệ tiếp thị và tùy chỉnh dữ liệu khách hàng')}}
                </p>

            </div>
            <div class="hub-js_title">
                <p>
                    {{__('HUB-JS giúp kết nối và phát triển doanh nghiệp trực tuyến tại Việt Nam và Châu Á Thái Bình Dương, tiên phong công nghệ tiếp thị và tùy chỉnh dữ liệu khách hàng')}}
                </p>
                <p>
                    {{__('Sở hữu đội ngũ nhân sự có kỹ năng chuyên môn cao và giàu kinh nghiệm, HUB-JS đã đạt được những thành tựu nổi bật chỉ sau 2 năm đi vào hoạt động:')}}

                </p>
            </div>
            <div class="hub-js_content">
                <div class="row" style="justify-content: center">
                    <div class="col-12 col-lg-5 row">
                        <div class="col-6 col-md-6 p-8">
                            <div class="hub-js_content_in">
                                <p><span class="counter-value" data-count="100">0</span>+</p>
                                <p>
                                    {{__('Nhân sự & chuyên gia.')}}

                                </p>
                            </div>

                        </div>
                        <div class="col-6  col-md-6 p-8">
                            <div class="hub-js_content_in">
                                <p><span class="counter-value" data-count="10">0</span>+</p>
                                <p>
                                    {{__('Sản phẩm công nghệ cốt lõi.')}}


                                </p>
                            </div>
                        </div>
                        <div class="col-6  col-md-6 p-8">
                            <div class="hub-js_content_in">
                                <p><span class="counter-value" data-count="16">0</span>+</p>
                                <p>
                                    {{__('Dự án phần mềm, giải pháp công nghệ.')}}


                                </p>
                            </div>

                        </div>
                        <div class="col-6 col-md-6 p-8">
                            <div class="hub-js_content_in">
                                <p><span class="counter-value" data-count="50">0</span>+</p>
                                <p>
                                    {{__('Khách hàng & đối tác.')}}


                                </p>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-5 hub-js_content_in_img">
                        <img src="./assets/frontend/img/hub-js_about.png" alt="">
                    </div>
                </div>

            </div>


            <div class="hub-js_about">
                <div class="row">
                    <div class="col-12 col-lg-4">
                        <div class="hub-js_about_content">
                            <img src="./assets/frontend/img/ikonix_about_1.png" alt="">
                            <div class="hub-js_about_content_title">
                                <p> {{__('Tầm nhìn')}}</p>
                                <p>
                                    {{__('Trở thành doanh nghiệp dẫn đầu tích hợp công nghệ dựa trên dữ liệu trực tuyến tại APAC')}}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="hub-js_about_content">
                            <img src="./assets/frontend/img/ikonix_about_2.png" alt="">
                            <div class="hub-js_about_content_title">
                                <p> {{__('Sứ mệnh')}}</p>
                                <p>
                                    {{__('Tiên phong chuyển đổi số vận hành')}}
                                    <br>  {{__('Marketing - Sale- Service cho doanh nghiệp vừa và nhỏ')}} .
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="hub-js_about_content">
                            <img src="./assets/frontend/img/ikonix_about_3.png" alt="">
                            <div class="hub-js_about_content_title">
                                <p>{{__('Giá trị cốt lõi')}}</p>
                                <p>
                                    {{__('Dữ liệu - Hiểu biết - Hành động')}}  <br>
                                    {{__('Chúng tôi mang lại những hiểu biết từ dữ liệu và biến chúng trở thành hành động giúp khách hàng ra quyết định kinh doanh nhanh hơn')}}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ikonix_achievement hqpay_achievement hub-js_achievement ">
                <div class="activity_title">
                    <p>  {{__('SẢN PHẨM CỐT LÕI')}}</p>
                    <div class="activity_line"></div>

                </div>

                <div class="hqpay_achievement_content ">
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                            <div class="hqpay_achievement_content_in hub-js_achievement_content_in">
                                <div>
                                    <img src="./assets/frontend/img/hub-js_achievement1.png" alt="">
                                </div>

                                <div class="hqpay_achievement_content_title">
                                    <p>1. CUS.ASIA</p>
                                    <p>Collect Data & Data Analytics <br> Customer Experience Management</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                            <div class="hqpay_achievement_content_in hub-js_achievement_content_in">
                                <div>
                                    <img src="./assets/frontend/img/hub-js_achievement2.png" alt="">
                                </div>
                                <div class="hqpay_achievement_content_title">
                                    <p>2. EX TECH</p>
                                    <p>A/B/C testing <br> Design & Optimize Customer Journey</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                            <div class="hqpay_achievement_content_in hub-js_achievement_content_in">
                                <div>
                                    <img src="./assets/frontend/img/hub-js_achievement3.png" alt="">
                                </div>
                                <div class="hqpay_achievement_content_title">
                                    <p>3. HRM.MOBI</p>
                                    <p>Data Integration <br> Human Resource Management</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                            <div class="hqpay_achievement_content_in hub-js_achievement_content_in">
                                <div>
                                    <img src="./assets/frontend/img/hub-js_achievement4.png" alt="">
                                </div>
                                <div class="hqpay_achievement_content_title">
                                    <p>4. MYRETAIL.ME</p>
                                    <p>Intergrate the data form POS and CRM<br>Multi-channel customer interaction</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                            <div class="hqpay_achievement_content_in hub-js_achievement_content_in">
                                <div>
                                    <img src="./assets/frontend/img/hub-js_achievement5.png" alt="">
                                </div>
                                <div class="hqpay_achievement_content_title">
                                    <p>5. SaaS-vn.Network</p>
                                    <p>Data Integration <br> Design Automation Workflow <br> The 1st SAAS product listing and review in Vietnam</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                            <div class="hqpay_achievement_content_in hub-js_achievement_content_in">
                                <div>
                                    <img src="./assets/frontend/img/hub-js_achievement6.png" alt="">
                                </div>
                                <div class="hqpay_achievement_content_title">
                                    <p>6. UID TECH</p>
                                    <p>Identify & Build Customer Profile <br> Custom Customer Profile</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                            <div class="hqpay_achievement_content_in hub-js_achievement_content_in">
                                <div>
                                    <img src="./assets/frontend/img/hub-js_achievement7.png" alt="">
                                </div>
                                <div class="hqpay_achievement_content_title">
                                    <p>7. TESTFLOW.BIZ
                                    </p>
                                    <p>Data Integration <br> Design Automation Workflow</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                            <div class="hqpay_achievement_content_in hub-js_achievement_content_in">
                                <div>
                                    <img src="./assets/frontend/img/hub-js_achievement8.png" alt="">
                                </div>
                                <div class="hqpay_achievement_content_title">
                                    <p>8. ADSME DIGITAL</p>
                                    <p>Data Syndication & Integration <br> Reporting</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                            <div class="hqpay_achievement_content_in hub-js_achievement_content_in">
                                <div>
                                    <img src="./assets/frontend/img/hub-js_achievement9.png" alt="">
                                </div>
                                <div class="hqpay_achievement_content_title">
                                    <p>9. MINI CRM</p>
                                    <p>Manage the customer's information, deal and ticket  <br> Lead nurturing automation</p>
                                </div>
                            </div>
                        </div>



                    </div>
                </div>
            </div>
            <!--khách hàng-->
            <div class="ikonix_partner">
                <div class="activity_title">
                    <p> {{__('KHÁCH HÀNG THÂN THIẾT & ĐỐI TÁC')}} </p>
                    <div class="activity_line"></div>

                </div>
                <div class="ikonix_kol_content">
                    <div class="row" style="position: relative">
                        <div class="col-12 hub-js_partner_content_slide" >
                            <div class="swiper-container hub-js_partner_content_slide_detail">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide" >
                                        <div class="ikonix_kol_content_slide_detail_in">
                                            <div class="ikonix_partner_img">
                                                <img src="./assets/frontend/img/hubjs-customer1.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" >
                                        <div class="ikonix_kol_content_slide_detail_in">
                                            <div class="ikonix_partner_img">
                                                <img src="./assets/frontend/img/hubjs-customer2.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" >
                                        <div class="ikonix_kol_content_slide_detail_in">
                                            <div class="ikonix_partner_img">
                                                <img src="./assets/frontend/img/hubjs-customer3.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" >
                                        <div class="ikonix_kol_content_slide_detail_in">
                                            <div class="ikonix_partner_img">
                                                <img src="./assets/frontend/img/hubjs-customer4.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" >
                                        <div class="ikonix_kol_content_slide_detail_in">
                                            <div class="ikonix_partner_img">
                                                <img src="./assets/frontend/img/hubjs-customer5.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" >
                                        <div class="ikonix_kol_content_slide_detail_in">
                                            <div class="ikonix_partner_img">
                                                <img src="./assets/frontend/img/hubjs-customer6.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" >
                                        <div class="ikonix_kol_content_slide_detail_in">
                                            <div class="ikonix_partner_img">
                                                <img src="./assets/frontend/img/hubjs-customer7.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" >
                                        <div class="ikonix_kol_content_slide_detail_in">
                                            <div class="ikonix_partner_img">
                                                <img src="./assets/frontend/img/hubjs-customer8.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <!--                                    <div class="swiper-slide" >-->
                                    <!--                                        <div class="ikonix_kol_content_slide_detail_in">-->
                                    <!--                                            <div class="ikonix_partner_img">-->
                                    <!--                                                <img src="./assets/frontend/img/hubjs-customer9.png" alt="">-->
                                    <!--                                            </div>-->
                                    <!--                                        </div>-->
                                    <!--                                    </div>-->
                                    <!--                                    <div class="swiper-slide" >-->
                                    <!--                                        <div class="ikonix_kol_content_slide_detail_in">-->
                                    <!--                                            <div class="ikonix_partner_img">-->
                                    <!--                                                <img src="./assets/frontend/img/hubjs-customer10.png" alt="">-->
                                    <!--                                            </div>-->
                                    <!--                                        </div>-->
                                    <!--                                    </div>-->
                                    <!--                                    <div class="swiper-slide" >-->
                                    <!--                                        <div class="ikonix_kol_content_slide_detail_in">-->
                                    <!--                                            <div class="ikonix_partner_img">-->
                                    <!--                                                <img src="./assets/frontend/img/hubjs-customer11.png" alt="">-->
                                    <!--                                            </div>-->
                                    <!--                                        </div>-->
                                    <!--                                    </div>-->
                                    <!--                                    <div class="swiper-slide" >-->
                                    <!--                                        <div class="ikonix_kol_content_slide_detail_in">-->
                                    <!--                                            <div class="ikonix_partner_img">-->
                                    <!--                                                <img src="./assets/frontend/img/hubjs-customer12.png" alt="">-->
                                    <!--                                            </div>-->
                                    <!--                                        </div>-->
                                    <!--                                    </div>-->
                                    <!--                                    <div class="swiper-slide" >-->
                                    <!--                                        <div class="ikonix_kol_content_slide_detail_in">-->
                                    <!--                                            <div class="ikonix_partner_img">-->
                                    <!--                                                <img src="./assets/frontend/img/hubjs-customer13.png" alt="">-->
                                    <!--                                            </div>-->
                                    <!--                                        </div>-->
                                    <!--                                    </div>-->
                                    <!--                                    <div class="swiper-slide" >-->
                                    <!--                                        <div class="ikonix_kol_content_slide_detail_in">-->
                                    <!--                                            <div class="ikonix_partner_img">-->
                                    <!--                                                <img src="./assets/frontend/img/hubjs-customer14.png" alt="">-->
                                    <!--                                            </div>-->
                                    <!--                                        </div>-->
                                    <!--                                    </div>-->
                                    <!--                                    <div class="swiper-slide" >-->
                                    <!--                                        <div class="ikonix_kol_content_slide_detail_in">-->
                                    <!--                                            <div class="ikonix_partner_img">-->
                                    <!--                                                <img src="./assets/frontend/img/hubjs-customer15.png" alt="">-->
                                    <!--                                            </div>-->
                                    <!--                                        </div>-->
                                    <!--                                    </div>-->
                                    <!--                                    <div class="swiper-slide" >-->
                                    <!--                                        <div class="ikonix_kol_content_slide_detail_in">-->
                                    <!--                                            <div class="ikonix_partner_img">-->
                                    <!--                                                <img src="./assets/frontend/img/hubjs-customer16.png" alt="">-->
                                    <!--                                            </div>-->
                                    <!--                                        </div>-->
                                    <!--                                    </div>-->
                                </div>
                            </div>
                            <div class="swiper-paginationhubjs"></div>
                        </div>
                    </div>
                </div>

                <div class="ikonix_kol_content" style="margin-top: 40px">
                    <div class="row" style="position: relative">
                        <div class="col-12 hub-js_custom_content_slide" >
                            <div class="swiper-container hub-js_custom_content_slide_detail">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide" >
                                        <div class="ikonix_kol_content_slide_detail_in">
                                            <div class="ikonix_partner_img">
                                                <img src="./assets/frontend/img/hubjs-partner1.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" >
                                        <div class="ikonix_kol_content_slide_detail_in">
                                            <div class="ikonix_partner_img">
                                                <img src="./assets/frontend/img/hubjs-partner2.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" >
                                        <div class="ikonix_kol_content_slide_detail_in">
                                            <div class="ikonix_partner_img">
                                                <img src="./assets/frontend/img/hubjs-partner3.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" >
                                        <div class="ikonix_kol_content_slide_detail_in">
                                            <div class="ikonix_partner_img">
                                                <img src="./assets/frontend/img/hubjs-partner4.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" >
                                        <div class="ikonix_kol_content_slide_detail_in">
                                            <div class="ikonix_partner_img">
                                                <img src="./assets/frontend/img/hubjs-partner5.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" >
                                        <div class="ikonix_kol_content_slide_detail_in">
                                            <div class="ikonix_partner_img">
                                                <img src="./assets/frontend/img/hubjs-partner6.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" >
                                        <div class="ikonix_kol_content_slide_detail_in">
                                            <div class="ikonix_partner_img">
                                                <img src="./assets/frontend/img/hubjs-partner7.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" >
                                        <div class="ikonix_kol_content_slide_detail_in">
                                            <div class="ikonix_partner_img">
                                                <img src="./assets/frontend/img/hubjs-partner8.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-paginationhubjscustom"></div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>

<!--GIA NHẬP ĐỘI NGŨ TINH NHUỆ CỦA HUB-JS-->
<section>
    <div class="ads">
        <div class="ads_bg" style="background:#000 url('./assets/frontend/img/hub-js_bg.png') center no-repeat;    background-size: cover">
            <div class="container">
                <div class="ads_content ads_2">
                    <p> {{__('GIA NHẬP ĐỘI NGŨ TINH NHUỆ CỦA HUB-JS')}}</p>

                    <p> {{__('HUB-JS luôn mong muốn tìm kiếm cộng sự để cùng chia sẻ thành quả, đồng cảm những khó khăn và tiến về phía trước.')}} </p>
                    <div class="ads_button">
                        <a href="https://tuyendung.hqgroups.vn/category-jobs/all?company=Hub-js" target="_blank">
                            {{__('Xem vị trí tuyển dụng')}}
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!--hqpay-->
<section>
    <div class="ikonix" id="hqpay">
        <img src="./assets/frontend/img/hqpay.png" alt="">

        <div class="container">
            <div class="ikonix_title hqpay_title">
                <p>
                    {{__('HQ PAY cung cấp nền tảng mua hàng & thanh toán trực tuyến, phân phối các dịch vụ nội dung số giúp thúc đẩy nền kinh tế không tiền mặt và cung cấp cho khách hàng trải nghiệm thanh toán một chạm (One Touch Payment).')}}

                </p>
            </div>
            <div class="ikonix_line"></div>
            <div class="ikonix_about">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="ikonix_about_detail hqpay_about_detail">
                            <img src="./assets/frontend/img/ikonix_about_1.png" alt="">
                            <div class="ikonix_about_title">
                                <p> {{__('Tầm nhìn')}}</p>
                                <p>
                                    {{__('Trở thành đơn vị hàng đầu trong lĩnh vực thanh toán điện tử. Cung cấp nền tảng mua hàng và giải pháp thanh toán trực tuyến, thúc đẩy nền kinh tế không tiền mặt.')}}

                                </p>
                            </div>
                        </div>

                    </div>

                    <div class="col-12 col-md-6">
                        <div class="ikonix_about_detail hqpay_about_detail">
                            <img src="./assets/frontend/img/ikonix_about_2.png" alt="">
                            <div class="ikonix_about_title">
                                <p> {{__('Sứ mệnh')}}</p>
                                <p>
                                    {{__('Sứ mệnh của HQ Pay là mang đến cho khách hàng những trải nghiệm tuyệt vời cùng với các dịch vụ chất lượng.')}}

                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="ikonix_achievement hqpay_achievement">
                <div class="activity_title">
                    <p> {{__('DỊCH VỤ CỦA HQ PAY')}}</p>
                    <div class="activity_line"></div>

                </div>
                <p>
                    {{__('HQ PAY hiện đã liên kết trực tiếp với hơn 25 ngân hàng. Người dùng HQ PAY có thể thanh toán mọi tiện ích, dịch vụ và hoàn toàn an tâm vì HQ PAY hiện đang đáp ứng bộ tiêu chuẩn khắt khe nhất trong ngành tài chính ngân hàng quốc tế. Người dùng HQ PAY có thể thanh toán mọi tiện ích, dịch vụ bao gồm:')}}

                </p>
                <div class="hqpay_achievement_content">
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                            <div class="hqpay_achievement_content_in">
                                <img src="./assets/frontend/img/hqpay_achievement1.png" alt="">
                                <div class="hqpay_achievement_content_title">
                                    <p> {{__('Mua thẻ game online của 17 loại tài khoản game từ các nhà cung cấp.')}}</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                            <div class="hqpay_achievement_content_in">
                                <img src="./assets/frontend/img/hqpay_achievement2.png" alt="">
                                <div class="hqpay_achievement_content_title">
                                    <p> {{__('Mua thẻ điện thoại của 05 nhà mạng')}} </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                            <div class="hqpay_achievement_content_in">
                                <img src="./assets/frontend/img/hqpay_achievement3.png" alt="">
                                <div class="hqpay_achievement_content_title">
                                    <p> {{__('Nạp điện thoại trả trước, trả sau của 03 nhà mạng')}}</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                            <div class="hqpay_achievement_content_in">
                                <img src="./assets/frontend/img/hqpay_achievement4.png" alt="">
                                <div class="hqpay_achievement_content_title">
                                    <p> {{__('Nạp và mua mã thẻ Data 3G / 4G / 5G của 03 nhà mạng')}} </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                            <div class="hqpay_achievement_content_in">
                                <img src="./assets/frontend/img/hqpay_achievement5.png" alt="">
                                <div class="hqpay_achievement_content_title">
                                    <p> {{__('Thanh toán hóa đơn điện, nước, internet, truyền hình, tài chính, bảo hiểm')}}</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                            <div class="hqpay_achievement_content_in">
                                <img src="./assets/frontend/img/hqpay_achievement6.png" alt="">
                                <div class="hqpay_achievement_content_title">
                                    <p> {{__('Đặt phòng khách sạn')}}</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                            <div class="hqpay_achievement_content_in">
                                <img src="./assets/frontend/img/hqpay_achievement7.png" alt="">
                                <div class="hqpay_achievement_content_title">
                                    <p> {{__('Mua vé máy bay, xổ số')}}</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                            <div class="hqpay_achievement_content_in">
                                <img src="./assets/frontend/img/hqpay_achievement8.png" alt="">
                                <div class="hqpay_achievement_content_title">
                                    <p> {{__('Chuyển tiền 24/7')}}</p>
                                </div>
                            </div>
                        </div>



                    </div>
                </div>
            </div>

            <!--           ĐỐi tác-->
            <div class="ikonix_partner">
                <div class="activity_title">
                    <p> {{__('Đối tác')}}</p>
                    <div class="activity_line"></div>

                </div>
                <div class="ikonix_kol_content">
                    <div class="row" style="position: relative">
                        <div class="col-12 hqpay_partner_content_slide" >
                            <div class="swiper-container hqpay_partner_content_slide_detail">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide" >
                                        <div class="ikonix_kol_content_slide_detail_in">
                                            <div class="ikonix_partner_img">
                                                <img src="./assets/frontend/img/hqpay_partner1.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" >
                                        <div class="ikonix_kol_content_slide_detail_in">
                                            <div class="ikonix_partner_img">
                                                <img src="./assets/frontend/img/hqpay_partner2.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" >
                                        <div class="ikonix_kol_content_slide_detail_in">
                                            <div class="ikonix_partner_img">
                                                <img src="./assets/frontend/img/hqpay_partner4.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" >
                                        <div class="ikonix_kol_content_slide_detail_in">
                                            <div class="ikonix_partner_img">
                                                <img src="./assets/frontend/img/hqpay_partner5.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" >
                                        <div class="ikonix_kol_content_slide_detail_in">
                                            <div class="ikonix_partner_img">
                                                <img src="./assets/frontend/img/hqpay_partner6.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" >
                                        <div class="ikonix_kol_content_slide_detail_in">
                                            <div class="ikonix_partner_img">
                                                <img src="./assets/frontend/img/hqpay_partner7.png" alt="">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="swiper-slide" >
                                        <div class="ikonix_kol_content_slide_detail_in">
                                            <div class="ikonix_partner_img">
                                                <img src="./assets/frontend/img/hqpay_partner8.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" >
                                        <div class="ikonix_kol_content_slide_detail_in">
                                            <div class="ikonix_partner_img">
                                                <img src="./assets/frontend/img/hqpay_partner9.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" >
                                        <div class="ikonix_kol_content_slide_detail_in">
                                            <div class="ikonix_partner_img">
                                                <img src="./assets/frontend/img/hqpay_partner10.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" >
                                        <div class="ikonix_kol_content_slide_detail_in">
                                            <div class="ikonix_partner_img">
                                                <img src="./assets/frontend/img/hqpay_partner11.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" >
                                        <div class="ikonix_kol_content_slide_detail_in">
                                            <div class="ikonix_partner_img">
                                                <img src="./assets/frontend/img/hqpay_partner12.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" >
                                        <div class="ikonix_kol_content_slide_detail_in">
                                            <div class="ikonix_partner_img">
                                                <img src="./assets/frontend/img/hqpay_partner13.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" >
                                        <div class="ikonix_kol_content_slide_detail_in">
                                            <div class="ikonix_partner_img">
                                                <img src="./assets/frontend/img/hqpay_partner14.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" >
                                        <div class="ikonix_kol_content_slide_detail_in">
                                            <div class="ikonix_partner_img">
                                                <img src="./assets/frontend/img/hqpay_partner15.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" >
                                        <div class="ikonix_kol_content_slide_detail_in">
                                            <div class="ikonix_partner_img">
                                                <img src="./assets/frontend/img/hqpay_partner16.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" >
                                        <div class="ikonix_kol_content_slide_detail_in">
                                            <div class="ikonix_partner_img">
                                                <img src="./assets/frontend/img/hqpay_partner17.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="swiper-paginationhqpay"></div>
                        </div>
                    </div>
                </div>
            </div>



        </div>

    </div>
</section>
<!--GIA NHẬP ĐỘI NGŨ TINH NHUỆ CỦA HUB-JS-->
<section>
    <div class="ads">
        <div class="ads_bg" style="background:#000 url('./assets/frontend/img/ads_hqpay.png') center no-repeat;    background-size: cover">
            <div class="container">
                <div class="ads_content ads_2">
                    <p> {{__('HQ PAY TÌM KIẾM NHÂN SỰ TÀI NĂNG')}}</p>

                    <p> {{__('Rất nhiều vị trí tại HQ Pay đang chờ bạn ứng tuyển!')}}</p>
                    <div class="ads_button">
                        <a href="https://tuyendung.hqgroups.vn/category-jobs/all?company=Pay" target="_blank">
                            {{__('Xem vị trí tuyển dụng')}}
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!--hq esport-->
<section>
    <div class="ikonix" id="hqplay">
        <img src="./assets/frontend/img/hqesport.png" alt="">
        <div class="ikonix_bg">
            <img src="./assets/frontend/img/hqesport_bg.png" alt="">
        </div>
        <div class="container">
            <div class="ikonix_title">
                <p>
                    {{__('HQ Esports được thành lập với mục đích nuôi dưỡng và phát triển các tài năng trẻ của các bộ môn Esports và xây dựng nền Esports Việt Nam thêm lớn mạnh.')}}
                </p>

            </div>
            <div class="ikonix_line"></div>
            <div class="hqesport_about">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="hqesport_about_detail">
                            <div class="hqesport_about_detail_img">
                                <img src="./assets/frontend/img/hqesport_about1.png" alt="">
                            </div>

                            <div class="hqesport_about_title">
                                {{__('Xây dựng và đào tạo các đội tuyển thi đấu.')}}

                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="hqesport_about_detail">
                            <div class="hqesport_about_detail_img">
                                <img src="./assets/frontend/img/hqesport_about2.png" alt="">
                            </div>

                            <div class="hqesport_about_title">
                                {{__('Tổ chức hệ thống giải đấu cộng đồng và bán chuyên lớn nhất Việt Nam')}}


                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--            định hướng-->
            <div class="hqesport_orientation">
                <div class="row">
                    <div class="col-md-4">
                        <div class="hqesport_orientation_title">
                            <p> {{__('Tầm nhìn')}}</p>
                            <div class="hqesport_orientation_line"></div>
                            <p> {{__('Trở thành công ty đào tạo phát triển thể thao điện tử Esports & giải đấu hàng đầu Việt Nam')}}</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="hqesport_orientation_title">
                            <p> {{__('Sứ mệnh')}}</p>
                            <div class="hqesport_orientation_line"></div>
                            <p> {{__('Nơi cất cánh thực hiện giấc mơ cho các bạn trẻ đam mê Esports')}}
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="hqesport_orientation_title">
                            <p> {{__('Giá trị cốt lõi')}}
                            </p>
                            <div class="hqesport_orientation_line"></div>
                            <p> {{__('Đam mê - Ước mơ - Hành động')}}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!--           thành tựu-->
            <div class="ikonix_kol">
                <div class="activity_title">
                    <p> {{__('Thành tích')}}</p>
                    <div class="activity_line"></div>

                </div>
                <div class="ikonix_kol_content">
                    <div class="row" style="position: relative">
                        <div class="col-12 hpesport_content_slide" >
                            <div class="swiper-container hpesport_content_slide_detail">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide" >
                                        <div class="ikonix_kol_content_slide_detail_in">
                                            <div class="ikonix_kol_content_slide_img">
                                                <img src="./assets/frontend/img/hqesport1.png" alt="">
                                            </div>
                                            <div class="hpesport_content_slide_detail_name">
                                                {{__('Free Fire Word Series 2021')}}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" >
                                        <div class="ikonix_kol_content_slide_detail_in">
                                            <div class="ikonix_kol_content_slide_img">
                                                <img src="./assets/frontend/img/hqesport2.png" alt="">
                                            </div>
                                            <div class="hpesport_content_slide_detail_name">
                                                {{__(' ĐTST Mùa Xuân 2021')}}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" >
                                        <div class="ikonix_kol_content_slide_detail_in">
                                            <div class="ikonix_kol_content_slide_img">
                                                <img src="./assets/frontend/img/hqesport3.png" alt="">
                                            </div>
                                            <div class="hpesport_content_slide_detail_name">
                                                {{__('VFL Winter 2021')}}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" >
                                        <div class="ikonix_kol_content_slide_detail_in">
                                            <div class="ikonix_kol_content_slide_img">
                                                <img src="./assets/frontend/img/hqesport4.png" alt="">
                                            </div>
                                            <div class="hpesport_content_slide_detail_name">
                                                {{__(' Asia Champion Ship')}}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" >
                                        <div class="ikonix_kol_content_slide_detail_in">
                                            <div class="ikonix_kol_content_slide_img">
                                                <img src="./assets/frontend/img/hqesport5.png" alt="">
                                            </div>
                                            <div class="hpesport_content_slide_detail_name">
                                                {{__('Vietnam Fire Pro Scrim')}}

                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" >
                                        <div class="ikonix_kol_content_slide_detail_in">
                                            <div class="ikonix_kol_content_slide_img">
                                                <img src="./assets/frontend/img/hqesport6.png" alt="">
                                            </div>
                                            <div class="hpesport_content_slide_detail_name">
                                                {{__('Fire Pro SEA Scrim')}}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" >
                                        <div class="ikonix_kol_content_slide_detail_in">
                                            <div class="ikonix_kol_content_slide_img">
                                                <img src="./assets/frontend/img/hqesport7.png" alt="">
                                            </div>
                                            <div class="hpesport_content_slide_detail_name">
                                                {{__(' Champions Tour')}}
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="swiper-paginationesport"></div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>
<!--HQ ESPORT TÌM KIẾM NHÂN SỰ TÀI NĂNG-->
<section>
    <div class="ads">
        <div class="ads_bg" style="background:#000 url('./assets/frontend/img/ads_hqesport.png') center no-repeat;    background-size: cover">
            <div class="container">
                <div class="ads_content ads_2">
                    <p> {{__('HQ ESPORT TÌM KIẾM NHÂN SỰ TÀI NĂNG')}}</p>

                    <p> {{__('Rất nhiều vị trí đang chờ bạn ứng tuyển!')}}</p>
                    <div class="ads_button">
                        <a href="https://tuyendung.hqgroups.vn/category-jobs/all?company=HQ%20Esport" target="_blank">
                            {{__('Xem vị trí tuyển dụng')}}
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!--globalent-->
<section>
    <div class="ikonix" id="globalent">
        <img src="./assets/frontend/img/globalent.png" alt="">
        <div class="ads">
            <div class="ads_bg" style="background:#000 url('./assets/frontend/img/globalent_bg.png') center no-repeat;    background-size: cover">
                <div class="container">
                    <div class="ads_content  globalent_bg">
                        <p> {{__(' GLOBAL ENTERTAINMENT')}}</p>

                        <p> {{__('Global Entertainment là công ty phát triển các sản phẩm Công nghệ phục vụ cho lĩnh vực Giải trí, nhằm tạo ra một hệ sinh thái toàn diện trong lĩnh vực Game & Giải trí.')}}
                        </p>

                    </div>
                </div>

            </div>
        </div>
        <div class="container">

            <!--            định hướng-->
            <div class=" global_orientation">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="hqesport_orientation_title global_orientation_title">
                            <p> {{__('Tầm nhìn')}}</p>
                            <div class="hqesport_orientation_line global_orientation_line"></div>
                            <p> {{__('Trở thành công ty giải trí dẫn đầu trong khu vực sở hữu hệ sinh thái toàn diện về Game & giải trí')}}</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="hqesport_orientation_title global_orientation_title">
                            <p> {{__('Sứ mệnh')}}</p>
                            <div class="hqesport_orientation_line global_orientation_line"></div>
                            <p> {{__('Nâng tầm vị thế của nền thể thao điện tử và ngành dịch vụ giải trí Việt Nam trên trường quốc tế')}}
                            </p>
                        </div>
                    </div>

                </div>
            </div>
            <!-- về chúng tôi-->
            <div class="global_about_img_mobile">
                <img src="./assets/frontend/img/global_achievement.png" alt="">
            </div>
            <div class="global_about">
                <div class="activity_title">
                    <p> {{__('GLOBAL ENTERTAINMENT CUNG CẤP')}}</p>
                    <div class="activity_line"></div>

                </div>

                <div class="global_about_content">
                    <div class="global_about_detail">
                        <div class="global_about_detail_in">
                            <div class="global_about_detail_img">
                                <img src="./assets/frontend/img/globalent_about1.png" alt="">
                            </div>
                            <div class="global_achievement_detail_title">
                                <p> {{__('Hệ sinh thái toàn diện')}}</p>
                                <p> {{__('Xây dựng hệ sinh thái toàn diện trong lĩnh vực Game & Giải trí cho thị trường Việt Nam và khu vực.')}}</p>
                            </div>
                        </div>
                        <div class="global_about_detail_in">
                            <div class="global_about_detail_img">
                                <img src="./assets/frontend/img/globalent_about2.png" alt="">
                            </div>
                            <div class="global_achievement_detail_title">
                                <p> {{__('Tiên phong')}}</p>
                                <p> {{__('Một trong những đơn vị đi đầu trong việc khai thác mảng dịch vụ KOLs, Influencers, Streamers dành cho thị trường khách hàng cá nhân.')}}</p>
                            </div>
                        </div>
                        <div class="global_about_detail_in">
                            <div class="global_about_detail_img">
                                <img src="./assets/frontend/img/globalent_about3.png" alt="">
                            </div>
                            <div class="global_achievement_detail_title">
                                <p> {{__('Cộng đồng chuyên nghiệp')}}</p>
                                <p> {{__('Sở hữu cộng đồng lớn với nhiều KOLs, Streamers triển vọng, cùng các dịch vụ tuyển dụng, xây dựng thương hiệu cá nhân cho các bạn trẻ yêu thích Game & Giải trí .')}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="global_about_img">
                        <img src="./assets/frontend/img/global_achievement.png " alt="">
                    </div>
                </div>
            </div>

            <!--            thành tựu-->
            <div class="global_achievement">
                <div class="activity_title">
                    <p> {{__('Thành tựu nổi bật')}}</p>
                    <div class="activity_line"></div>

                </div>
                <p>
                    {{__('Nâng tầm vị thế của nền thể thao điện tử và ngành dịch vụ giải trí Việt Nam trên trường quốc tế')}}


                </p>
                <div class="global_achievement_content">
                    <div class="row">
                        <div class="  col-12 col-md-12 col-lg-4">
                            <div class="global_achievement_detail">
                                <p><span class="counter-value" data-count="10">0</span>.000+</p>
                                <p> {{__('Game thủ')}}</p>
                                <p>
                                    {{__('Cộng đồng quy tụ hơn 10.000 game thủ trên khắp cả nước.')}}
                                </p>
                            </div>
                        </div>
                        <div class=" col-12 col-md-12 col-lg-4">
                            <div class="global_achievement_detail">
                                <p><span class="counter-value" data-count="100">0</span>+</p>
                                <p> {{__('Game thủ chuyên nghiệp')}}</p>
                                <p>
                                    {{__('Hơn 100 game thủ chuyên nghiệp đã tham gia nhiều giải đấu trong nước và quốc tế.')}}

                                </p>
                            </div>
                        </div>
                        <div class="  col-12 col-md-12 col-lg-4">
                            <div class="global_achievement_detail">
                                <p><span class="counter-value" data-count="20">0</span>+</p>
                                <p> {{__('Đối tác')}} Talent house</p>
                                <p>
                                    {{__('Đối tác 20+ Talent House trong lĩnh vực Game và Giải trí, tạo ra cơ hội phát chuyên nghiệp cho Game thủ')}}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!--GLOBAL ENTERTAINMENT TÌM KIẾM ĐỒNG NỘI TÀI NĂNG-->
<section>
    <div class="ads">
        <div class="ads_bg" style="background:#000 url('./assets/frontend/img/ads_globalent.png') center no-repeat;    background-size: cover">
            <div class="container">
                <div class="ads_content ads_2">
                    <p> {{__('GLOBAL ENTERTAINMENT TÌM KIẾM ĐỒNG ĐỘI TÀI NĂNG')}}</p>

                    <p> {{__('Nếu bạn yêu thích, có niềm tin và muốn khẳng định giá trị tích cực của Game Online, hãy cùng Global Entertaiment thực hiện điều này!')}}</p>
                    <div class="ads_button">
                        <a href="https://tuyendung.hqgroups.vn/category-jobs/all?company=Globalent" target="_blank">
                            {{__('Xem vị trí tuyển dụng')}}
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


<!--xcrcorp-->
<section>
    <div class="ikonix xcrcorp" id="xcrcorp">
        <img src="./assets/frontend/img/xcrcorp.png" alt="">
        <div class="ads">
            <div class="ads_bg" style="background:#000 url('./assets/frontend/img/xcrcorp_bg.png') center no-repeat;    background-size: cover">
                <div class="container">
                    <div class="ads_content xcrcorp_bg">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="xcrcorp_bg_img">
                                    <img src="./assets/frontend/img/hqesport_bg1.png" alt="">
                                </div>
                                <div class="xcrcorp_bg_title">
                                    {{__('Là một trong những agency hàng đầu tại Việt Nam về lĩnh vực Social Media, cung cấp các chiến dịch độc đáo, sáng tạo, hiệu quả cho ngành bán lẻ và dịch vụ để tạo độ phủ thị trường')}}
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="xcrcorp_bg_img">
                                    <img src="./assets/frontend/img/hqesport_bg2.png" alt="">
                                </div>
                                <div class="xcrcorp_bg_title">
                                    {{__('Hỗ trợ, định hướng về vấn đề build cộng đồng cho nhãn hàng, doanh nghiệp, dự án.')}}

                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
        <div class="container">


            <!--            thành tựu-->
            <div class="xcrcorp_achievement">
                <div class="activity_title">
                    <p> {{__('Thành tích nổi bật')}}</p>
                    <div class="activity_line"></div>

                </div>

                <div class="xcrcorp_achievement_content">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                            <div class="xcrcorp_achievement_detail">
                                <div class="xcrcorp_achievement_detail_in">
                                    <div class="xcrcorp_achievement_img">
                                        <img src="./assets/frontend/img/xcrcorp_achievement1.png " alt="">
                                    </div>
                                    <span class="counter-value" data-count="30">0</span>+
                                    <p> {{__('Fanpage')}}</p>
                                </div>

                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                            <div class="xcrcorp_achievement_detail">
                                <div class="xcrcorp_achievement_detail_in">
                                    <div class="xcrcorp_achievement_img">
                                        <img src="./assets/frontend/img/xcrcorp_achievement2.png " alt="">
                                    </div>
                                    <span class="counter-value" data-count="110">0</span>+
                                    <p> {{__('Group')}}</p>
                                </div>

                            </div>
                        </div>
                        <div class="col-12  col-sm-12 col-md-4 col-lg-4">
                            <div class="xcrcorp_achievement_detail">
                                <div class="xcrcorp_achievement_detail_in">
                                    <div class="xcrcorp_achievement_img">
                                        <img src="./assets/frontend/img/xcrcorp_achievement3.png " alt="">
                                    </div>
                                    <span class="counter-value" data-count="70">0</span>M+
                                    <p > {{__('Tương tác/tháng')}}
                                    </p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!--            đối tác-->
            <div class="ikonix_partner">
                <div class="activity_title">
                    <p> {{__('Được tin tưởng bởi')}}</p>
                    <div class="activity_line"></div>

                </div>
                <div class="ikonix_kol_content">
                    <div class="row" style="position: relative">
                        <div class="col-12 xcr_content_slide" >
                            <div class="swiper-container xcr_content_slide_detail">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide" >
                                        <div class="ikonix_kol_content_slide_detail_in">
                                            <div class="ikonix_partner_img">
                                                <img src="./assets/frontend/img/xcrcorp_believe1.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" >
                                        <div class="ikonix_kol_content_slide_detail_in">
                                            <div class="ikonix_partner_img">
                                                <img src="./assets/frontend/img/xcrcorp_believe2.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" >
                                        <div class="ikonix_kol_content_slide_detail_in">
                                            <div class="ikonix_partner_img">
                                                <img src="./assets/frontend/img/xcrcorp_believe3.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" >
                                        <div class="ikonix_kol_content_slide_detail_in">
                                            <div class="ikonix_partner_img">
                                                <img src="./assets/frontend/img/xcrcorp_believe4.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" >
                                        <div class="ikonix_kol_content_slide_detail_in">
                                            <div class="ikonix_partner_img">
                                                <img src="./assets/frontend/img/xcrcorp_believe5.png" alt="">
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                            <div class="swiper-paginationxcrcorp"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!--Bạn muốn làm việc trong môi trường chuyên nghiệp và bài bản, chúng tôi đang tìm kiếm tài năng của bạn.-->


<section>
    <div class="ads" style="margin-top: -40px">
        <div class="ads_bg" style="background:#000 url('./assets/frontend/img/ads_general.png') center no-repeat;    background-size: cover">
            <div class="container">
                <div class="ads_content ads_general">
                    <p> {{__('Bạn muốn làm việc trong môi trường chuyên nghiệp và bài bản, chúng tôi đang tìm kiếm tài năng của bạn.')}}</p>
                    <p> {{__('MONG ĐƯỢC GẶP BẠN TẠI ĐẠI GIA ĐÌNH HQ GROUP!')}}</p>
                    <div class="ads_button">
                        <a href="https://tuyendung.hqgroups.vn/category-jobs/all?company=HQ%20GROUP" target="_blank">
                            {{__('Xem vị trí tuyển dụng')}}
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection
