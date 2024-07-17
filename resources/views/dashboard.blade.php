<!doctype html> 
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Laravel 11 Multi Auth</title>
      <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.2/dist/css/bootstrap.min.css">
   </head>
   <body class="bg-light">
        <nav class="navbar navbar-expand-md bg-white shadow-lg bsb-navbar bsb-navbar-hover bsb-navbar-caret">
            <div class="container">
                <a class="navbar-brand" href="#">
                   <img src="/img/Horisontal.png" alt="unair" width="300px">
                </a>
                <button class="navbar-toggler border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                </svg>
                </button>
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1">
                        
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#!" id="accountDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Hello, {{Auth::user()->name}}</a>
                            <ul class="dropdown-menu border-0 shadow bsb-zoomIn" aria-labelledby="accountDropdown">                          
                                <li>
                                    <a class="dropdown-item" href="{{route('account.profile')}}">Profile</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{route('account.logout')}}">Logout</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                </div>
            </div>
        </nav>
        <div class="container">
           <div class="card border-0 shadow my-5">
                <div class="card-header bg-light">
                    <h3 class="h5 pt-2">Dashboard</h3>
                </div>
                <div class="card-body">
                    You are logged in !!
                </div>
           </div>
        </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
   </body>
</html> 

{{-- <!doctype html> 
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Hebat</title>
      <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.2/dist/css/bootstrap.min.css">
   </head>
   <body class="bg-light">
        <nav class="navbar navbar-expand-md bg-white shadow-lg bsb-navbar bsb-navbar-hover bsb-navbar-caret">
            <div class="container">
                <a class="navbar-brand" href="#">
                   <strong><img src="https://hebat.elearning.unair.ac.id/pluginfile.php/1/core_admin/logocompact/300x300/1711389543/kampus_merdeka_compact.png" class="logo mr-1" alt="HEBAT" style="position: relative; left: -100px;" width="150"></strong>
                </a>
                <button class="navbar-toggler border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                </svg>
                </button>
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1">
                        
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#!" id="accountDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Hello, {{ Auth::user()->name }}</a>
                            <ul class="dropdown-menu border-0 shadow bsb-zoomIn" aria-labelledby="accountDropdown">                          
                                <li>
                                    <a class="dropdown-item" href="{{ route('account.profile') }}">Profile</a>
                                    <a class="dropdown-item" href="{{ route('account.logout') }}">Logout</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                </div>
            </div>
        </nav>
        <html lang="en">
        <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        
        <link rel="shortcut icon" href="{{ asset('assets/img/favicon.png') }}">
        
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,400;1,500;1,700&display=swap" rel="stylesheet">
        
        <link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}">

        <link rel="stylesheet" href="{{ asset('assets/plugins/feather/feather.css') }}">
        
        <link rel="stylesheet" href="{{ asset('assets/plugins/icons/flags/flags.css') }}">
        
        <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/fontawesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/all.min.css') }}">
        
        <link rel="stylesheet" href="{{ asset('assets/plugins/simple-calendar/simple-calendar.css') }}">
        
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
        
        </head>
        <body>
        
        <div class="page-wrapper">
        <div class="content container-fluid">
        
        <div class="page-header">
        <div class="row">
        <div class="col-sm-12">
        <div class="page-sub-header">
        <h3 class="page-title">Welcome {{ Auth::user()->email }}!</h3>
        <ul class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('account.dashboard') }}">Home</a></li>
        <li class="breadcrumb-item active">Student</li>
        </ul>
        </div>
        </div>
        </div>
        </div>
        
        
        <div class="row">
        <div class="col-xl-3 col-sm-6 col-12 d-flex">
        <div class="card bg-comman w-100">
        <div class="card-body">
        <div class="db-widgets d-flex justify-content-between align-items-center">
        <div class="db-info">
        <h6>All Courses</h6>
        <h3>10</h3>
        </div>
        <div class="db-icon">
            <img src="{{ asset('assets/img/icons/teacher-icon-01.svg') }}" alt="Dashboard Icon">
        </div>
        </div>
        </div>
        </div>
        </div>
        <div class="col-xl-3 col-sm-6 col-12 d-flex">
        <div class="card bg-comman w-100">
        <div class="card-body">
        <div class="db-widgets d-flex justify-content-between align-items-center">
        <div class="db-info">
        <h6>All assignments</h6>
        <h3>27/30</h3>
        </div>
        <div class="db-icon">
            <img src="{{ asset('assets/img/icons/teacher-icon-02.svg') }}" alt="Dashboard Icon">
        </div>
        </div>
        </div>
        </div>
        </div>
        <div class="col-xl-3 col-sm-6 col-12 d-flex">
        <div class="card bg-comman w-100">
        <div class="card-body">
        <div class="db-widgets d-flex justify-content-between align-items-center">
        <div class="db-info">
        <h6>Quiz</h6>
        <h3>10/10</h3>
        </div>
        <div class="db-icon">
            <img src="{{ asset('assets/img/icons/student-icon-01.svg') }}" alt="Dashboard Icon">
        </div>
        </div>
        </div>
        </div>
        </div>
        <div class="col-xl-3 col-sm-6 col-12 d-flex">
        <div class="card bg-comman w-100">
        <div class="card-body">
        <div class="db-widgets d-flex justify-content-between align-items-center">
        <div class="db-info">
        <h6>Skp</h6>
        <h3>65</h3>
        </div>
        <div class="db-icon">
            <img src="{{ asset('assets/img/icons/student-icon-02.svg') }}" alt="Dashboard Icon">
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        
        
        <div class="row">
        <div class="col-12 col-lg-12 col-xl-8">
        <div class="card flex-fill comman-shadow">
        <div class="card-header">
        <div class="row align-items-center">
        <div class="col-6">
        <h5 class="card-title">Today’s Lesson</h5>
        </div>
        <div class="col-6">
        <ul class="chart-list-out">
        </ul>
        </div>
        </div>
        </div>
        <div class="dash-circle">
        <div class="row">
        <div class="col-lg-3 col-md-3 dash-widget1">
        <div class="circle-bar">
        <div class="circle-graph2" data-percent="80">
        </div>
        </div>
        </div>
        <div class="col-lg-3 col-md-3">
        <div class="dash-details">
        <div class="lesson-activity">
        <div class="lesson-imgs">
            <img src="{{ asset('assets/img/icons/lesson-icon-01.svg') }}" alt="Lesson Icon">
        </div>
        <div class="views-lesson">
        <h5>Class</h5>
        <h4>Web-Software Development (Framework)</h4>
        </div>
        </div>
        <div class="lesson-activity">
        <div class="lesson-imgs">
            <img src="{{ asset('assets/img/icons/lesson-icon-02.svg') }}" alt="Lesson Icon">
        </div>
        <div class="views-lesson">
        <h5>Lessons</h5>
        <h4>1 Lessons</h4>
        </div>
        </div>
        <div class="lesson-activity">
        <div class="lesson-imgs">
            <img src="{{ asset('assets/img/icons/lesson-icon-03.svg') }}" alt="Lesson Icon">
        </div>
        <div class="views-lesson">
        <h5>Time</h5>
        <h4>07:00-10:30</h4>
        </div>
        </div>
        </div>
        </div>
        <div class="col-lg-3 col-md-3">
        <div class="dash-details">
        <div class="lesson-activity">
        <div class="lesson-imgs">
            <img src="{{ asset('assets/img/icons/lesson-icon-04.svg') }}" alt="Lesson Icon">
        </div>
        <div class="views-lesson">
        <h5>Asignment</h5>
        <h4>1 Asignment</h4>
        </div>
        </div>
        <div class="lesson-activity">
        <div class="lesson-imgs">
            <img src="{{ asset('assets/img/icons/lesson-icon-05.svg') }}" alt="Lesson Icon">
        </div>
        <div class="views-lesson">
        <h5>lecturer</h5>
        <h4>Rachman Sinatriya Marjian</h4>
        </div>
        </div>
        <div class="lesson-activity">
        <div class="lesson-imgs">
            <img src="{{ asset('assets/img/icons/lesson-icon-06.svg') }}" alt="Lesson Icon">
        </div>
        <div class="views-lesson">
        <h5>Lesson Learned</h5>
        <h4>14/15</h4>
        </div>
        </div>
        </div>
        </div>
        <div class="col-lg-3 col-md-3 d-flex align-items-center justify-content-center">
        
        </div>
        </div>
        </div>
        </div>
        <div class="row">
        <div class="col-12 col-lg-12 col-xl-12 d-flex">
        <div class="card flex-fill comman-shadow">
        <div class="card-header">
        <div class="row align-items-center">
        <div class="col-6">

        </div>
        <div class="col-6">
     

        </ul>
        </div>
        </div>
        </div>
         <div class="card-body">
        </div>
        </div>
        </div>
        <div class="col-12 col-lg-12 col-xl-12 d-flex">
        <div class="card flex-fill comman-shadow">
        <div class="card-header d-flex align-items-center">
        <h5 class="card-title">Teaching History</h5>
        <ul class="chart-list-out student-ellips">

        </ul>
        </div>
        <div class="card-body">
        <div class="teaching-card">
     
        <ul class="activity-feed">
        <li class="feed-item d-flex align-items-center">
        <div class="dolor-activity">
        <span class="feed-text1"><a>Analysis and Design of information Systems</a></span>
        <ul class="teacher-date-list">
        <li><i class="fas fa-calendar-alt me-2"></i>September 5, 2024</li>
        <li>|</li>
        <li><i class="fas fa-clock me-2"></i>14.50  - 15.40  (50 Minutes)</li>
        </ul>
        </div>
        <div class="activity-btns ms-auto">
        <button type="submit" class="btn btn-info">Completed</button>
        </div>
        </li>
        <li class="feed-item d-flex align-items-center">
        <div class="dolor-activity">
        <span class="feed-text1"><a>Web Software Development(framework)	</a></span>
        <ul class="teacher-date-list">
        <li><i class="fas fa-calendar-alt me-2"></i>September 5, 2024</li>
        <li>|</li>
        <li><i class="fas fa-clock me-2"></i>07.00 - 08.40 (90 Minutes)</li>
        </ul>
        </div>
        <div class="activity-btns complete ms-auto">
        <button type="submit" class="btn btn-info">Completed</button>
        </div>
        </li>
        <li class="feed-item d-flex align-items-center">
        <div class="dolor-activity">
        <span class="feed-text1"><a>Linear Algebra</a></span>
        <ul class="teacher-date-list">
        <li><i class="fas fa-calendar-alt me-2"></i>September 5, 2024</li>
        <li>|</li>
        <li><i class="fas fa-clock me-2"></i>13.00 - 14.40 (100 Minutes)</li>
        </ul>
        </div>
        <div class="activity-btns ms-auto">
        <button type="submit" class="btn btn-info">Completed</button>
        </div>
        </li>
        </ul>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        <div class="col-12 col-lg-12 col-xl-4 d-flex">
        <div class="card flex-fill comman-shadow">
        <div class="card-body">
        <div id="calendar-doctor" class="calendar-container"></div>
        <div class="calendar-info calendar-info1">
        <div class="up-come-header">
        <div id="calendar-doctor" class="calendar-container"><div class="calendar"><header><h2 class="month">june <div class="year">2024</div></h2><a class="simple-calendar-btn btn-prev" href="#"></a><a class="simple-calendar-btn btn-next" href="#"></a></header><table><thead><td>sun</td><td>mon</td><td>tue</td><td>wed</td><td>thu</td><td>fri</td><td>sat</td></thead><tbody><tr><td><div class="day wrong-month disabled" data-date="2024-05-25T17:00:00.000Z">26</div></td><td><div class="day wrong-month disabled" data-date="2024-05-27T05:00:00.000Z">27</div></td><td><div class="day wrong-month disabled" data-date="2024-05-28T05:00:00.000Z">28</div></td><td><div class="day wrong-month disabled" data-date="2024-05-29T05:00:00.000Z">29</div></td><td><div class="day wrong-month disabled" data-date="2024-05-30T05:00:00.000Z">30</div></td><td><div class="day wrong-month disabled" data-date="2024-05-31T05:00:00.000Z">31</div></td><td><div class="day disabled" data-date="2024-06-01T05:00:00.000Z">1</div></td></tr><tr><td><div class="day disabled" data-date="2024-06-02T05:00:00.000Z">2</div></td><td><div class="day disabled" data-date="2024-06-03T05:00:00.000Z">3</div></td><td><div class="day disabled" data-date="2024-06-04T05:00:00.000Z">4</div></td><td><div class="day disabled" data-date="2024-06-05T05:00:00.000Z">5</div></td><td><div class="day disabled" data-date="2024-06-06T05:00:00.000Z">6</div></td><td><div class="day disabled" data-date="2024-06-07T05:00:00.000Z">7</div></td><td><div class="day disabled" data-date="2024-06-08T05:00:00.000Z">8</div></td></tr><tr><td><div class="day disabled" data-date="2024-06-09T05:00:00.000Z">9</div></td><td><div class="day disabled" data-date="2024-06-10T05:00:00.000Z">10</div></td><td><div class="day disabled" data-date="2024-06-11T05:00:00.000Z">11</div></td><td><div class="day disabled" data-date="2024-06-12T05:00:00.000Z">12</div></td><td><div class="day disabled" data-date="2024-06-13T05:00:00.000Z">13</div></td><td><div class="day disabled" data-date="2024-06-14T05:00:00.000Z">14</div></td><td><div class="day disabled" data-date="2024-06-15T05:00:00.000Z">15</div></td></tr><tr><td><div class="day disabled" data-date="2024-06-16T05:00:00.000Z">16</div></td><td><div class="day disabled" data-date="2024-06-17T05:00:00.000Z">17</div></td><td><div class="day disabled" data-date="2024-06-18T05:00:00.000Z">18</div></td><td><div class="day disabled" data-date="2024-06-19T05:00:00.000Z">19</div></td><td><div class="day has-event" data-date="2024-06-20T05:00:00.000Z">20</div></td><td><div class="day has-event" data-date="2024-06-21T05:00:00.000Z">21</div></td><td><div class="day today disabled" data-date="2024-06-22T05:00:00.000Z">22</div></td></tr><tr><td><div class="day has-event" data-date="2024-06-23T05:00:00.000Z">23</div></td><td><div class="day disabled" data-date="2024-06-24T05:00:00.000Z">24</div></td><td><div class="day disabled" data-date="2024-06-25T05:00:00.000Z">25</div></td><td><div class="day disabled" data-date="2024-06-26T05:00:00.000Z">26</div></td><td><div class="day disabled" data-date="2024-06-27T05:00:00.000Z">27</div></td><td><div class="day disabled" data-date="2024-06-28T05:00:00.000Z">28</div></td><td><div class="day disabled" data-date="2024-06-29T05:00:00.000Z">29</div></td></tr></tbody></table><div class="event-container"><div class="close"></div><div class="event-wrapper"></div></div></div></div>
        <span><a href="javascript:;"><i class="feather-plus"></i></a></span>
        </div>
        <div class="upcome-event-date">
        <h3>23 Juni</h3>
        </div>
        <div class="calendar-box normal-bg">
        <div class="calandar-event-name">
        <h4>Web-Software Development (Framework)</h4>
        <h5>Responsi Uas Laravel</h5>
        </div>
        <span>07:00 - 10:30 am</span>
        </div>
        </div>

        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-3">
                    <div class="card">
                        <img src="https://cdn.pixabay.com/photo/2017/06/14/13/11/background-2402133_960_720.png" class="card-img-top" alt="Card Image">
                        <div class="card-body">
                            <h5 class="card-title">Pengembangan Perangkat lunak Web (Framework) (Praktikum) - D4 - Teknik Informatika - 2022 - TI-A5
                                </h5>
                            <p class="card-text"><small class="text-muted">Diposting 2 Menit Lalu</small></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="https://cdn.pixabay.com/photo/2017/06/14/13/11/background-2402133_960_720.png" class="card-img-top" alt="Card Image">
                        <div class="card-body">
                            <h5 class="card-title">Pengembangan Perangkat lunak Web (Framework) - D4 - Teknik Informatika - 2022 - TI-A2</h5>
                            <p class="card-text"><small class="text-muted">Diposting 2 Menit Lalu</small></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="https://cdn.pixabay.com/photo/2017/06/14/13/11/background-2402133_960_720.png" class="card-img-top" alt="Card Image">
                        <div class="card-body">
                            <h5 class="card-title"> Analisa dan Desain Sistem Informasi (Praktium) - D4 - Teknik Informatika - 2022 - TI-A5</h5>
                            <p class="card-text"><small class="text-muted">Diposting 2 Menit Lalu</small></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="https://cdn.pixabay.com/photo/2017/06/14/13/11/background-2402133_960_720.png" class="card-img-top" alt="Card Image">
                        <div class="card-body">
                            <h5 class="card-title">Analisa dan Desain Sistem Informasi - D4 - Teknik Informatika - 2022 - TI-A2</h5>
                            <p class="card-text"><small class="text-muted">Diposting 2 Menit Lalu</small></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="https://cdn.pixabay.com/photo/2017/06/14/13/11/background-2402133_960_720.png" class="card-img-top" alt="Card Image">
                        <div class="card-body">
                            <h5 class="card-title">Basis Data Relasional (Praktikum) - D4 - Teknik Informatika - 2022 - TI-A5</h5>
                            <p class="card-text"><small class="text-muted">Diposting 2 Menit Lalu</small></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="https://cdn.pixabay.com/photo/2017/06/14/13/11/background-2402133_960_720.png" class="card-img-top" alt="Card Image">
                        <div class="card-body">
                            <h5 class="card-title">Basis Data Relasional - D4 - Teknik Informatika - 2022 - TI-A2</h5>
                            <p class="card-text"><small class="text-muted">Diposting 2 Menit Lalu</small></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="https://cdn.pixabay.com/photo/2017/06/14/13/11/background-2402133_960_720.png" class="card-img-top" alt="Card Image">
                        <div class="card-body">
                            <h5 class="card-title">Logika dan Pemikiran Kritis - S1 - Program Mkwu - 2021 - PDB75 </h5>
                            <p class="card-text"><small class="text-muted">Diposting 2 Menit Lalu</small></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="https://cdn.pixabay.com/photo/2017/06/14/13/11/background-2402133_960_720.png" class="card-img-top" alt="Card Image">
                        <div class="card-body">
                            <h5 class="card-title">Pengantar Kolaborasi Keilmuan - S1 - Program Mkwu - 2021 - PDB75</h5>
                            <p class="card-text"><small class="text-muted">Diposting 2 Menit Lalu</small></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="https://cdn.pixabay.com/photo/2017/06/14/13/11/background-2402133_960_720.png" class="card-img-top" alt="Card Image">
                        <div class="card-body">
                            <h5 class="card-title">Komunikasi dan Pengembangan Diri - S1 - Program Mkwu - 2021 - PDB75</h5>
                            <p class="card-text"><small class="text-muted">Diposting 2 Menit Lalu</small></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="https://cdn.pixabay.com/photo/2017/06/14/13/11/background-2402133_960_720.png" class="card-img-top" alt="Card Image">
                        <div class="card-body">
                            <h5 class="card-title">Aljabar Linier - D4 - Teknik Informatika - 2022 - TI-A2</h5>
                            <p class="card-text"><small class="text-muted">Diposting 2 Menit Lalu</small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer">
            <div class="container">
                <p class="mb-0">© 2024 Universitas Airlangga. All rights reserved.</p>
            </div>
        </footer>
        </div>
        </div>
        
        <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>

        <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        
        <script src="{{ asset('assets/js/feather.min.js') }}"></script>
        
        <script src="{{ asset('assets/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>
        
        <script src="{{ asset('assets/plugins/apexchart/apexcharts.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/apexchart/chart-data.js') }}"></script>
        
        <script src="{{ asset('assets/plugins/simple-calendar/jquery.simple-calendar.js') }}"></script>
        <script src="{{ asset('assets/js/calander.js') }}"></script>
        
        <script src="{{ asset('assets/js/circle-progress.min.js') }}"></script>
        
        <script src="{{ asset('assets/js/script.js') }}"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        </body>
        </html>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
   </body>
</html> --}}