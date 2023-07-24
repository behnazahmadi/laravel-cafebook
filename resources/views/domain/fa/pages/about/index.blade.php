@extends("domain.fa.layout.standard")

@section("pageTitle")
    | درباره ما
@endsection


@section("content")
    <!-- Features Area -->
    <section class="features-area ptb-100">

        <div class="circle-pattern-2"></div>

        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12">
                    <div class="row about-image">
                        <div class="col-6 col-lg-6 col-md-6">
                            <div class="image">
                                <img src="{{asset("turacos/img/about-img1.jpg")}}" alt="about">
                            </div>
                        </div>

                        <div class="col-6 col-lg-6 col-md-6">
                            <div class="image">
                                <img src="{{asset("turacos/img/about-img2.jpg")}}" alt="about">
                            </div>
                        </div>

                        <div class="col-6 col-lg-6 col-md-6">
                            <div class="image mt-30">
                                <img src="{{asset("turacos/img/about-img3.jpg")}}" alt="about">
                            </div>
                        </div>

                        <div class="col-6 col-lg-6 col-md-6">
                            <div class="image mt-30">
                                <img src="{{asset("turacos/img/about-img4.jpg")}}" alt="about">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12">
                    <div class="about-text">
                        <h3>درباره کافه بوک
                        </h3>
                        <p>ما خدمات بازاریابی را به استارت‌آپ‌ها و کسب‌وکارهای کوچک ارائه می‌کنیم تا به دنبال شریکی برای رسانه‌های دیجیتالی، توسعه طراحی و، تولید سرنخ و نیازهای ارتباطات باشند.  ما با شما کار می کنیم، نه برای شما.  اگرچه ما منابع بسیار خوبی داریم.</p>
                        <p>ما یک تیم مجرب و با استعداد از مشاوران پرشور هستیم که در بازاریابی موتورهای جستجو زندگی می‌کنند</p>
                        <p>ما استراتژی‌های جستجو را برای برندهای پیشرو به مشاغل کوچک و متوسط ​​در بسیاری از صنایع در بریتانیا و سراسر جهان توسعه داده‌ایم.</p>
                    </div>
                </div>
            </div>

            <div class="row ptb-100">
                <div class="col-lg-6 col-md-6">
                    <div class="features-text">
                        <h3>کافه بوک می‌خواهد چه بکند؟
                        </h3>
                        <p>دسترس‌پذیری دانش و اطلاعات در دنیای امروز، یکی از آرزوهای بزرگ بشر است.</p>
                        <ul>
                            <li>کمک به افزایش مطالعه و گسترش آگاهی
                            </li>
                            <li>برگزاری مسابقه‌های استعدادیابی در زمینه‌های متنوع نوشتار خلاق</li>
                            <li>پشتیبانی از سازمان‌های دولتی و گروه‌های مردمی در برگزاری رویدادهای فرهنگی</li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6">
                    <div class="img mb-0">
                        <img src="{{asset("turacos/img/1.png")}}" alt="01">
                    </div>
                </div>
            </div>


        </div>

        <div class="rocket"><img src="{{asset("turacos/img/rocket.png")}}" alt="rocket"></div>

        <div class="vector"><img src="{{asset("turacos/img/vector-bg.png")}}" alt="vector"></div>

    </section>
    <!-- پایان بخش ویژگی ها -->



    <!-- منطقه تاریخ -->
    <section class="history-area ptb-100 bg-fbf9f8">
        <div class="container">
            <div class="section-title">
                <span>داستان ما</span>
                <h3>داستان کافه بوک</h3>
                <p>ما از تطبیق استراتژی‌های خود برای ارائه بهترین راه‌حل‌ها به هر مشتری که در خط مقدم صنعت هستند، لذت می‌بریم.</p>

            </div>

            <div class="row">
                <div class="col-lg-12">
                    <ul class="timeline">
                        <li>
                            <div class="timeline-badge"></div>

                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>تاریخچه مختصر</h4>
                                </div>

                                <div class="timeline-body">
                                    <p>مطالعه‌ام به من اجازه می‌دهد که از انیمه‌های توآئه لاکریمیس آزاد استفاده کند.  برای این کار مخالف سرپنتیوس است.</p>
                                </div>

                                <div class="timeline-footer">
                                    <p>1988 - 1992</p>
                                </div>
                            </div>
                        </li>

                        <li class="timeline-inverted">
                            <div class="timeline-badge"></div>

                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>تاریخچه مختصر</h4>
                                </div>

                                <div class="timeline-body">
                                    <p>مطالعه‌ام به من اجازه می‌دهد که از انیمه‌های توآئه لاکریمیس آزاد استفاده کند.  برای این کار مخالف سرپنتیوس است.</p>
                                </div>

                                <div class="timeline-footer">
                                    <p>1993 - 1997</p>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="timeline-badge"></div>

                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>تاریخچه مختصر</h4>
                                </div>

                                <div class="timeline-body">
                                    <p>مطالعه‌ام به من اجازه می‌دهد که از انیمه‌های توآئه لاکریمیس آزاد استفاده کند.  برای این کار مخالف سرپنتیوس است.</p>
                                </div>

                                <div class="timeline-footer">
                                    <p>1998 - 2001</p>
                                </div>
                            </div>
                        </li>

                        <li class="timeline-inverted">
                            <div class="timeline-badge"></div>

                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>تاریخچه مختصر</h4>
                                </div>

                                <div class="timeline-body">
                                    <p>مطالعه‌ام به من اجازه می‌دهد که از انیمه‌های توآئه لاکریمیس آزاد استفاده کند.  برای این کار مخالف سرپنتیوس است.</p>
                                </div>

                                <div class="timeline-footer">
                                    <p>2001 - 2005</p>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="timeline-badge"></div>

                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>تاریخچه مختصر</h4>
                                </div>

                                <div class="timeline-body">
                                    <p>مطالعه‌ام به من اجازه می‌دهد که از انیمه‌های توآئه لاکریمیس آزاد استفاده کند.  برای این کار مخالف سرپنتیوس است.</p>
                                </div>

                                <div class="timeline-footer">
                                    <p>2005 - 2010</p>
                                </div>
                            </div>
                        </li>

                        <li class="timeline-inverted">
                            <div class="timeline-badge"></div>

                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>تاریخچه مختصر</h4>
                                </div>

                                <div class="timeline-body">
                                    <p>مطالعه‌ام به من اجازه می‌دهد که از انیمه‌های توآئه لاکریمیس آزاد استفاده کند.  برای این کار مخالف سرپنتیوس است.</p>
                                </div>

                                <div class="timeline-footer">
                                    <p>2010 - 2022</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- منطقه پایان تاریخ -->



@endsection
