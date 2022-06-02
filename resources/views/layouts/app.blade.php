<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title}}</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    @livewireStyles
</head>
<body>

    <header id="header">
        <div class="container">
            {{-- Header Bar --}}
            <div class="language">
                <ul>
                    <li>User Name: Admiin</li>
                    <li><a href="#">LogIn</a></li>
                </ul>
                <div>
                    <img src="{{asset('images/my.png')}}" alt="">
                    <img src="{{asset('images/usa.png')}}" alt="">
                </div>
            </div>

            {{-- Navigation --}}

            <nav class="navbar navbar-expand-lg navbar-dark">
                <a class="navbar-brand" href="{{route('home')}}">
                    <img src="{{asset('images/logo.png')}}" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-trigger="#main_nav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-collapse" id="main_nav">
                    <div class="offcanvas-header mt-3">
                        <button class="btn btn-outline-light btn-close float-right"> &times Close </button>
                        <h5 class="py-2 text-white">Japonavi Study</h5>
                    </div>
                    <div id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"
                                    data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">
                                    Schools
                                    Info</a>
                                <ul class="dropdown-menu fade-up">
                                    <li><a class="dropdown-item" href="#">Language Schools in Japan</a></li>
                                    <li><a class="dropdown-item" href="#">Colleges in Japan</a></li>
                                    <li><a class="dropdown-item" href="#">University in Japan</a></li>
                                    <li><a class="dropdown-item" href="#">Our partners in Japan</a></li>
                                    <li><a class="dropdown-item" href="#">Japanese Schools in Myanmar</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link  dropdown-toggle" href="#" data-bs-toggle="dropdown">
                                    Search Japanese
                                    Courses</a>
                                <ul class="dropdown-menu fade-up">
                                    <li><a class="dropdown-item" href="#">Language Schools in Japan</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link  dropdown-toggle" href="{{route('learnjapan')}}" data-bs-toggle="dropdown"> Learn Japan</a>
                                <ul class="dropdown-menu fade-up">
                                    <li>
                                        <a class="dropdown-item" href="{{route('featuredfacts')}}">Featured Facts</a>
                                    </li>
                                    <li><a class="dropdown-item" href="{{route('lifestyle')}}">Life Style</a></li>
                                    <li><a class="dropdown-item" href="{{route('jobandcareer')}}">Job & Career</a></li>
                                </ul>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link  dropdown-toggle" href="{{route('studyplan')}}" data-bs-toggle="dropdown">Study Plan</a>
                                <ul class="dropdown-menu fade-up">
                                    <li><a class="dropdown-item" href="#">Why study in Japan</a></li>
                                    <li><a class="dropdown-item" href="#">Where to study</a></li>
                                    <li><a class="dropdown-item" href="#">Length of study</a></li>
                                    <li><a class="dropdown-item" href="#">Model cases</a></li>
                                    <li><a class="dropdown-item" href="#">Study preparation</a></li>
                                    <li><a class="dropdown-item" href="#">Cost of study</a></li>
                                    <li><a class="dropdown-item" href="#">Immigration process</a></li>
                                    <li><a class="dropdown-item" href="#">Examination</a></li>
                                </ul>
                            </li>
                            <li class="nav-item active"> <a class="nav-link" href="{{route('contactus')}}">Contact Us </a> </li>
                        </ul>
                    </div>
                </div> <!-- navbar-collapse.// -->
            </nav>
        </div>
    </header>


    {{$slot}}


    {{-- Footer --}}
    <footer id="footer">
        <strong>Copyright &copy; <?php echo date('Y');?> <a href="https://www.japo-navi.com">Japo Navi
                Study</a>.</strong>
    </footer>


    @livewireScripts
    <script src="{{asset('js/script.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous">
    </script>
    <script>
    $("[data-trigger]").on("click", function() {
        var trigger_id = $(this).attr('data-trigger');
        $(trigger_id).toggleClass("show");
        $('body').toggleClass("offcanvas-active");
    });

    // close button
    $(".btn-close").click(function(e) {
        $(".navbar-collapse").removeClass("show");
        $("body").removeClass("offcanvas-active");
    });


    document.addEventListener("DOMContentLoaded", function() {
        // make it as accordion for smaller screens
        if (window.innerWidth > 992) {

            document.querySelectorAll('.navbar .nav-item').forEach(function(everyitem) {

                everyitem.addEventListener('mouseover', function(e) {

                    let el_link = this.querySelector('a[data-bs-toggle]');

                    if (el_link != null) {
                        let nextEl = el_link.nextElementSibling;
                        el_link.classList.add('show');
                        nextEl.classList.add('show');
                    }

                });
                everyitem.addEventListener('mouseleave', function(e) {
                    let el_link = this.querySelector('a[data-bs-toggle]');

                    if (el_link != null) {
                        let nextEl = el_link.nextElementSibling;
                        el_link.classList.remove('show');
                        nextEl.classList.remove('show');
                    }


                })
            });

        }
        // end if innerWidth
    });
    // DOMContentLoaded  end
    </script>
</body>
</html>
