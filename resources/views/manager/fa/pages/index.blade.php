@extends("manager.fa.layout.standard")
@section("content")

<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <ul class="breadcrumb breadcrumb-style">
                        <li class="breadcrumb-item 	bcrumb-1">
                            <a href="{{route("domain.home")}}">
                                <i class="material-icons">home</i>
                                خانه</a>
                        </li>
                        <li class="breadcrumb-item active">داشبورد</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Widgets -->
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="info-box7 l-bg-green order-info-box7">
                    <div class="info-box7-block">
                        <h4 class="m-b-20">سفارشات دریافت شده</h4>
                        <h2 class="text-right"><i class="fas fa-cart-plus pull-left"></i><span>358</span></h2>
                        <p class="m-b-0">18٪ بالاتر از ماه گذشته</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="info-box7 l-bg-purple order-info-box7">
                    <div class="info-box7-block">
                        <h4 class="m-b-20">سفارشات تکمیل شده</h4>
                        <h2 class="text-right"><i class="fas fa-business-time pull-left"></i><span>865</span></h2>
                        <p class="m-b-0">21٪ بالاتر از ماه گذشته</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="info-box7 l-bg-orange order-info-box7">
                    <div class="info-box7-block">
                        <h4 class="m-b-20">سفارشات جدید</h4>
                        <h2 class="text-right"><i class="fas fa-chart-line pull-left"></i><span>128</span></h2>
                        <p class="m-b-0">37٪ بالاتر از ماه گذشته</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="info-box7 l-bg-cyan order-info-box7">
                    <div class="info-box7-block">
                        <h4 class="m-b-20">مجموع درآمد</h4>
                        <h2 class="text-right"><i class="fas fa-dollar-sign pull-left"></i><span>25698 تومان</span></h2>
                        <p class="m-b-0">20٪ بالاتر از ماه گذشته</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Widgets -->
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="card">
                    <div class="header">
                        <h2>
                            <strong>نمونه</strong> نمودار</h2>
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown">
                                <a href="#" onClick="return false;" class="dropdown-toggle" data-toggle="dropdown"
                                   role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">more_vert</i>
                                </a>
                                <ul class="dropdown-menu pull-right">
                                    <li>
                                        <a href="#" onClick="return false;">اقدام</a>
                                    </li>
                                    <li>
                                        <a href="#" onClick="return false;">اقدامی دیگر</a>
                                    </li>
                                    <li>
                                        <a href="#" onClick="return false;">چیز دیگری اینجا</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <div id="chart1"></div>
                        <div class="row">
                            <div class="col-4">
                                <p class="text-muted font-15 text-truncate">هدف</p>
                                <h5>
                                    <i class="fas fa-arrow-circle-up col-green m-r-5"></i>15هزار
                                </h5>
                            </div>
                            <div class="col-4">
                                <p class="text-muted font-15 text-truncate">هفته گذشته</p>
                                <h5>
                                    <i class="fas fa-arrow-circle-down col-red m-r-5"></i>2.8هزار
                                </h5>
                            </div>
                            <div class="col-4">
                                <p class="text-muted text-truncate">ماه گذشته</p>
                                <h5>
                                    <i class="fas fa-arrow-circle-up col-green m-r-5"></i>12.5هزار
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="card">
                    <div class="header">
                        <h2>
                            <strong>نمونه</strong> نمودار</h2>
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown">
                                <a href="#" onClick="return false;" class="dropdown-toggle" data-toggle="dropdown"
                                   role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">more_vert</i>
                                </a>
                                <ul class="dropdown-menu pull-right">
                                    <li>
                                        <a href="#" onClick="return false;">اقدام</a>
                                    </li>
                                    <li>
                                        <a href="#" onClick="return false;">اقدامی دیگر</a>
                                    </li>
                                    <li>
                                        <a href="#" onClick="return false;">چیز دیگری اینجا</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <canvas id="line-chart"></canvas>
                        <div class="row">
                            <div class="col-4">
                                <p class="text-muted font-15 text-truncate">هدف</p>
                                <h5>
                                    <i class="fas fa-arrow-circle-down col-red m-r-5"></i>15هزار
                                </h5>
                            </div>
                            <div class="col-4">
                                <p class="text-muted font-15 text-truncate">هفته گذشته</p>
                                <h5>
                                    <i class="fas fa-arrow-circle-up col-green m-r-5"></i>2.8هزار
                                </h5>
                            </div>
                            <div class="col-4">
                                <p class="text-muted text-truncate">ماه گذشته</p>
                                <h5>
                                    <i class="fas fa-arrow-circle-down col-red m-r-5"></i>12.5هزار
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                <div class="card">
                    <div class="header">
                        <h2>
                            <strong>نمودار</strong> داده</h2>
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown">
                                <a href="#" onClick="return false;" class="dropdown-toggle" data-toggle="dropdown"
                                   role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">more_vert</i>
                                </a>
                                <ul class="dropdown-menu pull-right">
                                    <li>
                                        <a href="#" onClick="return false;">اقدام</a>
                                    </li>
                                    <li>
                                        <a href="#" onClick="return false;">اقدامی دیگر</a>
                                    </li>
                                    <li>
                                        <a href="#" onClick="return false;">چیز دیگری اینجا</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <canvas id="radar-chart"></canvas>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                <div class="card">
                    <div class="header">
                        <h2>
                            <strong>نمودار</strong> داده</h2>
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown">
                                <a href="#" onClick="return false;" class="dropdown-toggle" data-toggle="dropdown"
                                   role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">more_vert</i>
                                </a>
                                <ul class="dropdown-menu pull-right">
                                    <li>
                                        <a href="#" onClick="return false;">اقدام</a>
                                    </li>
                                    <li>
                                        <a href="#" onClick="return false;">اقدامی دیگر</a>
                                    </li>
                                    <li>
                                        <a href="#" onClick="return false;">چیز دیگری اینجا</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <canvas id="doughut-chart"></canvas>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                <div class="card">
                    <div class="header">
                        <h2>
                            <strong>نمودار</strong> داده</h2>
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown">
                                <a href="#" onClick="return false;" class="dropdown-toggle" data-toggle="dropdown"
                                   role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">more_vert</i>
                                </a>
                                <ul class="dropdown-menu pull-right">
                                    <li>
                                        <a href="#" onClick="return false;">اقدام</a>
                                    </li>
                                    <li>
                                        <a href="#" onClick="return false;">اقدامی دیگر</a>
                                    </li>
                                    <li>
                                        <a href="#" onClick="return false;">چیز دیگری اینجا</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <canvas id="pie-chart"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                <div class="card">
                    <div class="header">
                        <h2>
                            <strong>پروژه های </strong>جدید</h2>
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown">
                                <a href="#" onClick="return false;" class="dropdown-toggle" data-toggle="dropdown"
                                   role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">more_vert</i>
                                </a>
                                <ul class="dropdown-menu pull-right">
                                    <li>
                                        <a href="#" onClick="return false;">اقدام</a>
                                    </li>
                                    <li>
                                        <a href="#" onClick="return false;">اقدامی دیگر</a>
                                    </li>
                                    <li>
                                        <a href="#" onClick="return false;">چیز دیگری اینجا</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <div id="new-orders" class="media-list position-relative">
                            <div class="table-responsive">
                                <table id="new-orders-table" class="table table-hover table-xl mb-0">
                                    <thead>
                                    <tr>
                                        <th class="border-top-0">محصول</th>
                                        <th class="border-top-0">کارمندان</th>
                                        <th class="border-top-0">هزینه</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td class="text-truncate">آیفون ایکس</td>
                                        <td class="text-truncate">
                                            <ul class="list-unstyled order-list">
                                                <li class="avatar avatar-sm">
                                                    <img class="rounded-circle" src="assets/images/user/user1.jpg"
                                                         alt="user">
                                                </li>
                                                <li class="avatar avatar-sm">
                                                    <img class="rounded-circle" src="assets/images/user/user3.jpg"
                                                         alt="user">
                                                </li>
                                                <li class="avatar avatar-sm">
                                                    <span class="badge">+2</span>
                                                </li>
                                            </ul>
                                        </td>
                                        <td class="text-truncate">8999 تومان</td>
                                    </tr>
                                    <tr>
                                        <td class="text-truncate">پیکسل 2</td>
                                        <td class="text-truncate">
                                            <ul class="list-unstyled order-list">
                                                <li class="avatar avatar-sm">
                                                    <img class="rounded-circle" src="assets/images/user/user4.jpg"
                                                         alt="user">
                                                </li>
                                                <li class="avatar avatar-sm">
                                                    <img class="rounded-circle" src="assets/images/user/user5.jpg"
                                                         alt="user">
                                                </li>
                                                <li class="avatar avatar-sm">
                                                    <img class="rounded-circle" src="assets/images/user/user6.jpg"
                                                         alt="user">
                                                </li>
                                                <li class="avatar avatar-sm">
                                                    <span class="badge">+4</span>
                                                </li>
                                            </ul>
                                        </td>
                                        <td class="text-truncate">5550 تومان</td>
                                    </tr>
                                    <tr>
                                        <td class="text-truncate">وان پلاس</td>
                                        <td class="text-truncate">
                                            <ul class="list-unstyled order-list">
                                                <li class="avatar avatar-sm">
                                                    <img class="rounded-circle" src="assets/images/user/user7.jpg"
                                                         alt="user">
                                                </li>
                                                <li class="avatar avatar-sm">
                                                    <img class="rounded-circle" src="assets/images/user/user8.jpg"
                                                         alt="user">
                                                </li>
                                                <li class="avatar avatar-sm">
                                                    <img class="rounded-circle" src="assets/images/user/user9.jpg"
                                                         alt="user">
                                                </li>
                                                <li class="avatar avatar-sm">
                                                    <span class="badge">+3</span>
                                                </li>
                                            </ul>
                                        </td>
                                        <td class="text-truncate">9000 تومان</td>
                                    </tr>
                                    <tr>
                                        <td class="text-truncate">گلکسی</td>
                                        <td class="text-truncate">
                                            <ul class="list-unstyled order-list">
                                                <li class="avatar avatar-sm">
                                                    <img class="rounded-circle" src="assets/images/user/user1.jpg"
                                                         alt="user">
                                                </li>
                                                <li class="avatar avatar-sm">
                                                    <img class="rounded-circle" src="assets/images/user/user2.jpg"
                                                         alt="user">
                                                </li>
                                                <li class="avatar avatar-sm">
                                                    <span class="badge">+1</span>
                                                </li>
                                            </ul>
                                        </td>
                                        <td class="text-truncate">7500 تومان</td>
                                    </tr>
                                    <tr>
                                        <td class="text-truncate">موتو زد2</td>
                                        <td class="text-truncate">
                                            <ul class="list-unstyled order-list">
                                                <li class="avatar avatar-sm">
                                                    <img class="rounded-circle" src="assets/images/user/user3.jpg"
                                                         alt="user">
                                                </li>
                                                <li class="avatar avatar-sm">
                                                    <img class="rounded-circle" src="assets/images/user/user4.jpg"
                                                         alt="user">
                                                </li>
                                                <li class="avatar avatar-sm">
                                                    <img class="rounded-circle" src="assets/images/user/user5.jpg"
                                                         alt="user">
                                                </li>
                                                <li class="avatar avatar-sm">
                                                    <span class="badge">+4</span>
                                                </li>
                                            </ul>
                                        </td>
                                        <td class="text-truncate">8500 تومان</td>
                                    </tr>
                                    <tr>
                                        <td class="text-truncate">آیفون ایکس</td>
                                        <td class="text-truncate">
                                            <ul class="list-unstyled order-list">
                                                <li class="avatar avatar-sm">
                                                    <img class="rounded-circle" src="assets/images/user/user6.jpg"
                                                         alt="user">
                                                </li>
                                                <li class="avatar avatar-sm">
                                                    <img class="rounded-circle" src="assets/images/user/user7.jpg"
                                                         alt="user">
                                                </li>
                                                <li class="avatar avatar-sm">
                                                    <span class="badge">+2</span>
                                                </li>
                                            </ul>
                                        </td>
                                        <td class="text-truncate">8999 تومان</td>
                                    </tr>
                                    <tr>
                                        <td class="text-truncate">آیفون ایکس</td>
                                        <td class="text-truncate">
                                            <ul class="list-unstyled order-list">
                                                <li class="avatar avatar-sm">
                                                    <img class="rounded-circle" src="assets/images/user/user3.jpg"
                                                         alt="user">
                                                </li>
                                                <li class="avatar avatar-sm">
                                                    <img class="rounded-circle" src="assets/images/user/user7.jpg"
                                                         alt="user">
                                                </li>
                                                <li class="avatar avatar-sm">
                                                    <img class="rounded-circle" src="assets/images/user/user1.jpg"
                                                         alt="user">
                                                </li>
                                                <li class="avatar avatar-sm">
                                                    <span class="badge">+4</span>
                                                </li>
                                            </ul>
                                        </td>
                                        <td class="text-truncate">8999 تومان</td>
                                    </tr>
                                    <tr>
                                        <td class="text-truncate">پیکسل 2</td>
                                        <td class="text-truncate">
                                            <ul class="list-unstyled order-list">
                                                <li class="avatar avatar-sm">
                                                    <img class="rounded-circle" src="assets/images/user/user4.jpg"
                                                         alt="user">
                                                </li>
                                                <li class="avatar avatar-sm">
                                                    <img class="rounded-circle" src="assets/images/user/user6.jpg"
                                                         alt="user">
                                                </li>
                                                <li class="avatar avatar-sm">
                                                    <span class="badge">+3</span>
                                                </li>
                                            </ul>
                                        </td>
                                        <td class="text-truncate">5550 تومان</td>
                                    </tr>
                                    <tr>
                                        <td class="text-truncate">وان پلاس</td>
                                        <td class="text-truncate">
                                            <ul class="list-unstyled order-list">
                                                <li class="avatar avatar-sm">
                                                    <img class="rounded-circle" src="assets/images/user/user7.jpg"
                                                         alt="user">
                                                </li>
                                                <li class="avatar avatar-sm">
                                                    <img class="rounded-circle" src="assets/images/user/user8.jpg"
                                                         alt="user">
                                                </li>
                                                <li class="avatar avatar-sm">
                                                    <img class="rounded-circle" src="assets/images/user/user9.jpg"
                                                         alt="user">
                                                </li>
                                                <li class="avatar avatar-sm">
                                                    <span class="badge">+3</span>
                                                </li>
                                            </ul>
                                        </td>
                                        <td class="text-truncate">9000 تومان</td>
                                    </tr>
                                    <tr>
                                        <td class="text-truncate">سامسونگ</td>
                                        <td class="text-truncate">
                                            <ul class="list-unstyled order-list">
                                                <li class="avatar avatar-sm">
                                                    <img class="rounded-circle" src="assets/images/user/user3.jpg"
                                                         alt="user">
                                                </li>
                                                <li class="avatar avatar-sm">
                                                    <img class="rounded-circle" src="assets/images/user/user6.jpg"
                                                         alt="user">
                                                </li>
                                                <li class="avatar avatar-sm">
                                                    <img class="rounded-circle" src="assets/images/user/user1.jpg"
                                                         alt="user">
                                                </li>
                                                <li class="avatar avatar-sm">
                                                    <span class="badge">+2</span>
                                                </li>
                                            </ul>
                                        </td>
                                        <td class="text-truncate">4563 تومان</td>
                                    </tr>
                                    <tr>
                                        <td class="text-truncate">نوکیا</td>
                                        <td class="text-truncate">
                                            <ul class="list-unstyled order-list">
                                                <li class="avatar avatar-sm">
                                                    <img class="rounded-circle" src="assets/images/user/user9.jpg"
                                                         alt="user">
                                                </li>
                                                <li class="avatar avatar-sm">
                                                    <img class="rounded-circle" src="assets/images/user/user2.jpg"
                                                         alt="user">
                                                </li>
                                                <li class="avatar avatar-sm">
                                                    <img class="rounded-circle" src="assets/images/user/user5.jpg"
                                                         alt="user">
                                                </li>
                                                <li class="avatar avatar-sm">
                                                    <span class="badge">+1</span>
                                                </li>
                                            </ul>
                                        </td>
                                        <td class="text-truncate">8763 تومان</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                <div class="card">
                    <div class="header">
                        <h2>
                            <strong>تقویم</strong></h2>
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown">
                                <a href="#" onClick="return false;" class="dropdown-toggle" data-toggle="dropdown"
                                   role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">more_vert</i>
                                </a>
                                <ul class="dropdown-menu pull-right">
                                    <li>
                                        <a href="#" onClick="return false;">اقدام</a>
                                    </li>
                                    <li>
                                        <a href="#" onClick="return false;">اقدامی دیگر</a>
                                    </li>
                                    <li>
                                        <a href="#" onClick="return false;">چیز دیگری اینجا</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <div class="deskCal">
                            <div id='desktopCal'></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
@endsection
