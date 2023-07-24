<!-- حالت تاریک/روشن -->
<div class="dark-version-btn">
    <label id="switch" class="switch">
        <input type="checkbox" onchange="toggleTheme()" id="slider">
        <span class="slider round"></span>
    </label>
</div>

<!-- ناحیه نوار نوار -->
<nav class="navbar navbar-expand-lg navbar-light bg-light navbar-area-with-white-color">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <a class="navbar-brand" href="{{route("domain.home")}}">.cafe<span>book.</span></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item"><a class="nav-link" href="{{route("domain.home")}}">صفحه اصلی</a></li>


                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown">
                                دسته بندی ها
                            </a>
                            <div class="dropdown-menu">
                                @foreach(\App\Models\Category::all() as $category)
                                <a class="dropdown-item" href="{{route("category.showBySlug",$category->slug)}}">{{$category->categoryName}}</a>
                                @endforeach
                            </div>
                        </li>


                        <li class="nav-item"><a class="nav-link" href="{{route("blogs")}}">بلاگ</a></li>


                        <li class="nav-item"><a class="nav-link" href="{{route("contact.get")}}">تماس</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route("about.us.get")}}">درباره ما</a></li>
                        @auth
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown">
                                    ناحیه کاربری
                                </a>
                                <div class="dropdown-menu">
                                    @if(Auth::user()->role=='admin')
                                        <a class="dropdown-item" href="{{route("manager.home")}}">داشبورد ادمین</a>
                                       @endif
                                        <a class="dropdown-item" href="{{route("domain.profile.index")}}">پروفایل</a>
                                        <a class="dropdown-item" href="{{route("logout")}}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                           خروج</a>
                                </div>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>


                        @endauth
                    </ul>
                    <div class="others-options d-flex align-items-center">
                        @guest
                        <div class="option-item">
                            <a href="{{route("login")}}" class="default-btn with-border-radius">ورود</a>
                        </div>
                        @endguest

                    </div>

                </div>
            </div>

        </div>
    </div>
</nav>
<!-- پایان ناحیه نوار ناوبری -->
