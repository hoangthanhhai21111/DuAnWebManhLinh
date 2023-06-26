@extends('frondend.layouts.master')
@section('content')
    <main id="main" class="">
        <div id="content" class="content-area page-wrapper" role="main">
            <div class="row row-main">
                <div class="large-12 col">
                    <div class="col-inner">
                        <div class="slider-wrapper relative" id="slider-1763435996">
                            <div class="slider slider-nav-circle slider-nav-large slider-nav-light slider-style-normal"
                                data-flickity-options='{
        "cellAlign": "center",
        "imagesLoaded": true,
        "lazyLoad": 1,
        "freeScroll": false,
        "wrapAround": true,
        "autoPlay": 6000,
        "pauseAutoPlayOnHover" : true,
        "prevNextButtons": true,
        "contain" : true,
        "adaptiveHeight" : true,
        "dragThreshold" : 10,
        "percentPosition": true,
        "pageDots": true,
        "rightToLeft": false,
        "draggable": true,
        "selectedAttraction": 0.1,
        "parallax" : 0,
        "friction": 0.6        }'>
                                <div style="width:100%;margin:0 auto; height:350px"
                                    class="img has-hover x md-x lg-x y md-y lg-y" id="image_1577926373">

                                    <div class="img-inner image-cover dark" style="padding-top: 600px">
                                        @foreach ($gioithieus as $images)
                                            @foreach ($images->imagePost as $image)
                                                <img style="width:100%;margin:0 auto; height:350px"
                                                    src="{{ asset($image->image) }}" class="attachment-large size-large"
                                                    alt="" loading="lazy" srcset=" "
                                                    sizes="(max-width: 1020px) 100vw, 1020px" />
                                            @endforeach
                                        @endforeach
                                    </div>

                                    <style>
                                        #image_1577926373 {
                                            width: 100%;
                                        }
                                    </style>
                                </div>
                            </div>

                            <div class="loading-spin dark large centered"></div>
                        </div>

                        <div id="gap-34720841" class="gap-element clearfix" style="display: block; height: auto">
                            <style>
                                #gap-34720841 {
                                    padding-top: 5px;
                                }
                            </style>
                        </div>

                        <section class="section" id="section_333534081">
                            <div class="bg section-bg fill bg-fill">
                                <div class="section-bg-overlay absolute fill"></div>
                            </div>

                            <div class="section-content relative">
                                @foreach ($gioithieus as $gioiThieu)
                                    <div class="row row-small align-middle" id="row-11189025">
                                        <div id="col-432948054" class="col medium-6 small-12 large-6">
                                            <div class="col-inner">
                                                <div id="text-559053682" class="text">
                                                    <h3>
                                                        Trung Tâm Đào Tạo & Sát Hạch Lái Xe
                                                        <span style="color: #ffff00">MẠNH LINH</span>
                                                    </h3>
                                                    <p>
                                                        {!! $gioiThieu->content !!}.
                                                    </p>
                                                    <style>
                                                        #text-559053682 {
                                                            color: rgb(255, 255, 255);
                                                        }

                                                        #text-559053682>* {
                                                            color: rgb(255, 255, 255);
                                                        }
                                                    </style>
                                                </div>
                                            </div>
                                        </div>

                                        <div id="col-1024094827" class="col medium-6 small-12 large-6">
                                            <div class="col-inner">
                                                <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_1762634160">
                                                    <div class="img-inner dark">
                                                        <img width="1020" height="680"
                                                            src="{{ asset($gioiThieu->image) }}"
                                                            class="attachment-large size-large" alt=""
                                                            loading="lazy" sizes="(max-width: 1020px) 100vw, 1020px" />

                                                    </div>

                                                    <style>
                                                        #image_1762634160 {
                                                            width: 100%;
                                                        }
                                                    </style>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <style>
                                #section_333534081 {
                                    padding-top: 30px;
                                    padding-bottom: 30px;
                                }

                                #section_333534081 .section-bg-overlay {
                                    background-color: #031d4a;
                                }

                                #section_333534081 .section-bg.bg-loaded {
                                    background-image: 169;
                                }
                            </style>
                        </section>
                        <div id="gap-154761090" class="gap-element clearfix" style="display: block; height: auto">
                            <style>
                                #gap-154761090 {
                                    padding-top: 20px;
                                }
                            </style>
                        </div>
                        <div class="container section-title-container">
                            <h3 class="section-title section-title-center">
                                <b></b><span class="section-title-main" style="color: rgb(251, 22, 22)"><i
                                        class="bi bi-heart-fill"></i>THÔNG ĐIỆP GỬI ĐẾN QUÝ KHÁCH
                                    HÀNG</span><b></b>
                            </h3>
                        </div>
                        <section class="section has-parallax" id="section_98417121">
                            <div class="bg section-bg fill bg-fill" data-parallax-container=".section"
                                data-parallax-background data-parallax="-10"></div>
                            <div class="section-content relative">
                                <div class="row row-small align-middle" id="row-1097609984">
                                    <div id="col-1583718957" class="col medium-4 small-12 large-4">
                                        <div class="col-inner">
                                            <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_190161367">
                                                <div class="img-inner dark">
                                                    <img width="600" height="502"
                                                        src="{{ asset('themeAdmin/images/logo/manhlinh1.jpg') }}"
                                                        class="attachment-large size-large" alt="" loading="lazy"
                                                        sizes="(max-width: 600px) 100vw, 600px" />
                                                </div>

                                                <style>
                                                    #image_190161367 {
                                                        width: 100%;
                                                    }
                                                </style>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="col-969174487" class="col medium-8 small-12 large-8">
                                        <div class="col-inner">
                                            <div id="text-584853905" class="text">
                                                <h4>
                                                    <span style="color: #ed1c24">Phương Châm Của Trung Tâm
                                                        !!!</span>
                                                </h4>
                                                <p>
                                                    Luôn ghi nhớ Sứ mệnh và Trách nhiệm là mang tới cho người dân tỉnh nhà
                                                    được trải nghiệm trên hệ thống Đào tạo và Sát hạch lái xe CHẤT LƯỢNG
                                                    NHẤT. Chúng tôi vẫn nỗ lực không ngừng nghỉ trên hành trình tạo ra những
                                                    tay lái "Vững lý thuyết - Chắc thực hành".
                                                </p>
                                                {{-- <p>
                          <span style="color: #d83131"
                            ><strong>QUANG GROUP</strong></span
                          >
                          nỗ lực không ngừng trong mọi hoàn cảnh để khẳng
                          định và nâng cao vị thế của mình trên thị trường
                          bất động sản Việt Nam, giữ vững niềm tin trong tâm
                          trí khách hàng và đối tác
                        </p> --}}
                                                <style>
                                                    #text-584853905 {
                                                        color: rgb(0, 0, 0);
                                                    }

                                                    #text-584853905>* {
                                                        color: rgb(0, 0, 0);
                                                    }
                                                </style>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row" id="row-588324582">
                                    <div id="col-1518491007" class="col medium-4 small-12 large-4">
                                        <div class="col-inner">
                                            <div class="box has-hover has-hover box-text-bottom">
                                                <div class="box-image">
                                                    <div class="">
                                                        <img style="width:100%;margin:0 auto; height:250px" width="577"
                                                            height="577"
                                                            src="{{ asset('themeAdmin/images/logo/manhlinh2.jpg') }}"
                                                            class="attachment- size-" alt="" loading="lazy"
                                                            sizes="(max-width: 577px) 100vw, 577px" />
                                                    </div>
                                                </div>
                                                {{-- <div class="box-text text-center">
                                                    <div class="box-text-inner">
                                                        <h2>
                                                            <span style="color: #d83131">Chất lượng đào tạo</span>
                                                        </h2>
                                                        <p>
                                                            Với đội ngũ giáo viên có nhiều năm kinh nghiệm giảm dạy <span
                                                                style="color: #d83131"><strong>Mạnh Linh</strong></span>
                                                            cam kết
                                                        </p>
                                                    </div>
                                                </div> --}}
                                            </div>
                                        </div>
                                    </div>

                                    <div id="col-52364943" class="col medium-4 small-12 large-4">
                                        <div class="col-inner">
                                            <div class="box has-hover has-hover box-text-bottom">
                                                <div class="box-image">
                                                    <div class="">
                                                        <img style="width:100%;margin:0 auto; height:250px"
                                                            src="{{ asset('themeAdmin/images/logo/manhlinh3.jpg') }}"
                                                            class="attachment- size-" alt="" loading="lazy"
                                                            sizes="(max-width: 577px) 100vw, 577px" />
                                                    </div>
                                                </div>

                                                {{-- <div class="box-text text-center">
                                                    <div class="box-text-inner">
                                                        <h2>
                                                            <span style="color: #d83131">Công nghệ hiện đại</span>
                                                        </h2>
                                                        <p>
                                                            Với đội ngũ nhân viên chuyên nghiệp, tận tâm,
                                                            giàu kinh nghiệm, đã tạo nên một chuỗi giá trị
                                                            dịch vụ khách hàng và giải pháp bán hàng hoàn
                                                            chỉnh, góp phần làm gia tăng giao dịch cho
                                                            khách hàng đã đầu tư sản phẩm từ
                                                            <strong><span style="color: #d83131">Quang
                                                                    Group</span></strong>.
                                                        </p>
                                                    </div>
                                                </div> --}}
                                            </div>
                                        </div>
                                    </div>
                                    <div id="col-1286940314" class="col medium-4 small-12 large-4">
                                        <div class="col-inner">
                                            <div class="box has-hover has-hover box-text-bottom">
                                                <div class="box-image">
                                                    <div class="">
                                                        <img style="width:100%;margin:0 auto; height:250px"
                                                            src="{{ asset('themeAdmin/images/logo/manhlinh4.jpg') }}"
                                                            class="attachment- size-" alt="" loading="lazy"
                                                            sizes="(max-width: 784px) 100vw, 784px" />
                                                    </div>
                                                </div>

                                                {{-- <div class="box-text text-center">
                                                    <div class="box-text-inner">
                                                        <h2>
                                                            <span style="color: #d83131">Cơ sở vất chất</span>
                                                        </h2>
                                                        <p>
                                                            Những dự án với vị trí thuận tiện, hạ tầng
                                                            hoàn chỉnh, phong cách thiết kế hiện đại, xây
                                                            dựng chất lượng, đầy đủ tiện nghi, môi trường
                                                            sống trong lành mang đến giá trị sống đích
                                                            thực cho dân cư đã, đang và sẽ luôn luôn là
                                                            điều mà
                                                            <strong><span style="color: #d83131">Quang
                                                                    Group</span></strong> hướng tới.
                                                        </p>
                                                    </div>
                                                </div> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <style>
                                #section_98417121 {
                                    padding-top: 10px;
                                    padding-bottom: 10px;
                                }

                                #section_98417121 .section-bg.bg-loaded {
                                    background-image: url(https://quanggroup.vn/wp-content/uploads/2016/08/dummy-1.jpg);
                                }
                            </style>
                        </section>

                        <div id="gap-1220091789" class="gap-element clearfix" style="display: block; height: auto">
                            <style>
                                #gap-1220091789 {
                                    padding-top: 11px;
                                }
                            </style>
                        </div>

                        <div class="container section-title-container">
                            <h3 class="section-title section-title-center">
                                <b></b><span class="section-title-main" style="color: rgb(249, 21, 21)"><i
                                        class="bi bi-envelope"></i>NHẬN THÔNG TIN TƯ VẤN</span><b></b>
                            </h3>
                        </div>
                        <div role="form" class="wpcf7" id="wpcf7-f116-p130-o1" lang="vi" dir="ltr">
                            <div class="screen-reader-response">
                                <p role="status" aria-live="polite" aria-atomic="true"></p>
                                <ul></ul>
                            </div>
                            <form action="{{ route('home.regiter') }}" method="post" id="commentform"
                                class="comment-form" novalidate>
                                @csrf
                                <p class="comment-form-comment">

                                    <input type="text" name='name' placeholder="Họ Và Tên ">
                                </p>
                                <p class="comment-form-comment">
                                    <input type="number" name='phone' placeholder="Số Điện Thoại">
                                </p>
                                <p class="comment-form-email">
                                    <input id="email" name="email" type="email" value="" size="30"
                                        maxlength="100" placeholder="Email" aria-describedby="email-notes" required />
                                </p>


                                <p class="comment-form-author">
                                    <select name="course" id="">
                                        <option value="">---Chọn Hạng---</option>
                                        <option value="Ô tô số tự động hạng B1">Ô tô số tự động hạng B1</option>
                                        <option value="ô tô số sàn hạng B2">ô tô số sàn hạng B2</option>
                                        <option value="Xe máy hạng A1">Xe máy hạng A1</option>
                                    </select>
                                </p>

                                <p class="comment-form-comment">
                                    <textarea id="comment" name="notepad" cols="45" rows="8" maxlength="65525" placeholder="Ghi Chú"></textarea>
                                </p>
                                <p class="form-submit"><input name="submit" type="submit" id="submit"
                                        class="submit" value="Đăng ký" /> <input type='hidden' name='comment_post_ID'
                                        value='694' id='comment_post_ID' />
                                    <input type='hidden' name='comment_parent' id='comment_parent' value='0' />
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
