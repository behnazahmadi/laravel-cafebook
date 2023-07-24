@extends("domain.fa.layout.standard")

@section("content")

    <!-- بنر اصلی -->
    <div class="main-banner-two">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="banner-image">
                                <img src="{{asset("turacos/img/main-banner.png")}}" alt="banner-img">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="hero-content">
                                <h1>ما یک سرویس کامل هستیم <span>دیجیتال</span> <span>آژانس بازاریابی</span></h1>

                                <p>لورم ایپسوم به سادگی متن ساختگی صنعت چاپ و حروفچینی است.  لورم ایپسوم ابزار استاندارد این صنعت بوده است.</p>
                                <a href="contact.html" class="btn btn-primary">شروع به کار</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="circle-pattern-1"></div>
    </div>
    <!-- پایان بنر اصلی -->


    <!-- منطقه خدمات -->
    <section class="services-area ptb-100 bg-fbf9f8">
        <div class="container">
            <div class="section-title">
                <span>بهترین خدمات ما</span>
                <h3>بهترین خدمات بازاریابی دیجیتال را ارائه کردیم!</h3>
                <p>ما از تطبیق استراتژی‌های خود برای ارائه بهترین راه‌حل‌ها به هر مشتری که در خط مقدم صنعت هستند، لذت می‌بریم.</p>

                <a href="services-1.html" class="read-more-btn">مشاهده خدمات بیشتر</a>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="services-box">
                        <div class="icon">
                            <i class="icofont-pie-chart"></i>
                        </div>
                        <h3> استراتژی و تحقیق</h3>
                        <p>لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد صنعت بوده است.</p>
                        <a href="services-1.html" class="read-more-btn">بیشتر بخوانید</a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="services-box">
                        <div class="icon">
                            <i class="icofont-chart-arrows-axis"></i>
                        </div>
                        <h3>گزارش و تحلیل</h3>
                        <p>لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد صنعت بوده است.</p>
                        <a href="services-1.html" class="read-more-btn">بیشتر بخوانید</a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="services-box">
                        <div class="icon">
                            <i class="icofont-rocket-alt-2"></i>
                        </div>
                        <h3>مدیریت و بازاریابی</h3>
                        <p>لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد صنعت بوده است.</p>
                        <a href="services-1.html" class="read-more-btn">بیشتر بخوانید</a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="services-box">
                        <div class="icon">
                            <i class="icofont-chart-pie"></i>
                        </div>
                        <h3>محتوای اینفوگرافیک</h3>
                        <p>لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد صنعت بوده است.</p>
                        <a href="services-1.html" class="read-more-btn">بیشتر بخوانید</a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="services-box">
                        <div class="icon">
                            <i class="icofont-location-arrow"></i>
                        </div>
                        <h3>تبلیغ رسانه ای</h3>
                        <p>لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد صنعت بوده است.</p>
                        <a href="services-1.html" class="read-more-btn">بیشتر بخوانید</a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="services-box">
                        <div class="icon">
                            <i class="icofont-live-support"></i>
                        </div>
                        <h3>پشتیبانی سریع</h3>
                        <p>لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد صنعت بوده است.</p>
                        <a href="services-1.html" class="read-more-btn">بیشتر بخوانید</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- پایان خدمات منطقه -->



    <!-- منطقه وبلاگ -->
    <section class="blog-area ptb-100">
        <div class="container">
            <div class="section-title">
                <h3>آخرین بلاگ ها</h3>
                <p>ما از تطبیق استراتژی‌های خود برای ارائه بهترین راه‌حل‌ها به هر مشتری که در خط مقدم صنعت هستند، لذت می‌بریم.</p>
                <a href="{{route("blogs")}}" class="read-more-btn">مشاهده بلاگ های بیشتر</a>
            </div>

            <div class="row">
                @foreach(\App\Models\Post::where("status",1)->get()->take(3) as $blog)
                    <div class="col-lg-4 col-md-4">
                        <div class="single-blog-post">
                            <a href="{{route("blog.single",['slug' => $blog->category->slug,'id' => $blog->id])}}" class="blog-image"><img src="{{asset('client/uploads/posts/'.$blog->image)}}" alt="blog"></a>

                            <div class="blog-post-content">
                                <span>{{$blog->category->categoryName}}</span>
                                <h4><a href="{{route("blog.single",['slug' => $blog->category->slug,'id' => $blog->id])}}">{{$blog->title}}</a></h4>
                                <p>{{$blog->short_content}}</p>
                                <a href="{{route("blog.single",['slug' => $blog->category->slug,'id' => $blog->id])}}" class="read-more-btn">بیشتر بخوانید</a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>

    </section>
    <!-- پایان منطقه وبلاگ -->

    <!-- منطقه اشتراک -->
    <section class="subscribe-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="newsletter">
                        <h4>به خبرنامه ما بپیوندید</h4>
                        <form class="newsletter-form" data-bs-toggle="validator">
                            <input type="email" class="form-control" placeholder="آدرس ایمیل خود را وارد کنید" name="EMAIL" required autocomplete="off">
                            <button class="btn btn-primary" type="submit">اشتراک</button>
                            <div id="validator-newsletter" class="form-result"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- پایان منطقه اشتراک -->


@endsection
