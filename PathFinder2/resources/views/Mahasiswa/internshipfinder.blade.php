<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InternshipFinder</title>
    <link rel="stylesheet" href="{{ asset('css/internshipfinder.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap">
</head>

<body>

    <div class="left-sidebar">
        <!-- //*ganti href ke dashboard -->
        <div class="app-name" href="/careerPath/{{ $namePengguna }}">
            <img src="/images/lucide_rocket.png" alt="Rocket Icon">
            <h3>PathFinder.</h3>
        </div>

        <div class="options">
            <a href="/careerPath/{{ $namePengguna }}" class="dashboard">
                <img src="/images/lucide_home.png" alt="Settings Icon" class="dashboard-icon">
                Dashboard
            </a>
            <a href="#">
                <img src="/images/lucide_bookmark.png" alt="Settings Icon">
                Favorites
            </a>

            <a href="/careerPath/{{ $namePengguna }}">
                <img src="/images/lucide_flag-triangle-right-2.png" alt="Settings Icon">
                    Career Path
            </a>
            

            <div class="mainSub2">
                <a href="/internshipfinder/{{ $namePengguna }}"  class="mainSub">
                    <img src="/images/internshipFinder-2.png" alt="Settings Icon">
                    Internship Finder
                </a>
            </div>

            <a href="/coursefinder/{{ $namePengguna }}">
                <img src="/images/lucide_award.png" alt="Settings Icon">
                Course Finder
            </a>
            <a href="#">
                <img src="/images/lucide_wrench.png" alt="Settings Icon">
                Settings
            </a>
            <a href="/sesi/logout" class="mt-auto">
                <img src="/images/lucide_log-out.png" alt="Settings Icon">
                Log Out
            </a>

        </div>
    </div>

    <div class="content">

        <div class="judul">
            <h1>Internship Finder</h1>
            <img src="/images/computer.png" alt="computer">
        </div>

        <h3>Discover Your Path to Professional Success with Internship Finder!</h3>

        <div class="search-box">
            <input text="type" placeholder="Search your role...">
            <!-- <div class="search-btn">
                <img src="/images/search.png" alt="search">
            </div> -->
        </div>

        <div class="box">
            <!--DATA SCIENCE-->
            <div class="headline">
                <h3>Data Science</h3>
                <a href="/datascience">Show more</a>
            </div>
        </div>

        <div class="card-container row">
            @foreach($internship as $intern)
            @if($intern->stream == "DataScience")
            <a href="/interndetail" class="card">
                <div class="company">
                    <div class="logo">
                        <img src="/images/logo-gojek.png" alt="">
                    </div>

                    <div class="title">
                        <p class="role">
                            {{$intern->role}}
            
                        </p>
                        <p class="perusahaan">
                            {{$intern->perusahaan}}
                            
                        </p>
                    </div>
                </div>

                <div class="details">
                    <div class="list row">
                        <img src="/images/timer.png" alt="">
                        <p class="durasi">
                            {{$intern->durasi}}
                       
                        </p>
                    </div>
                    <div class="list row">
                        <img src="/images/place.png" alt="">
                        <p class="lokasi">
                            {{$intern->lokasi}}
                        </p>
                    </div>
                </div>
            </a>
            @endif
            @endforeach
        </div>
   
        <div class="box">
            <!--INTERACTIVE MEDIA-->
            <div class="headline">
                    <h3>Interactive Media</h3>
                    <a href="/interactivemedia">Show more</a>
            </div>
        </div>

        <div class="card-container row">
            @foreach($internship as $intern)
            @if($intern->stream == "InteractiveMedia")
            <a href="/interndetail" class="card">
                <div class="company">
                    <div class="logo">
                        <img src="/images/logo-gojek.png" alt="">
                    </div>

                    <div class="title">
                        <p class="role">
                            {{$intern->role}}
            
                        </p>
                        <p class="perusahaan">
                            {{$intern->perusahaan}}
                            
                        </p>
                    </div>
                </div>

                <div class="details">
                    <div class="list row">
                        <img src="/images/timer.png" alt="">
                        <p class="durasi">
                            {{$intern->durasi}}
                       
                        </p>
                    </div>
                    <div class="list row">
                        <img src="/images/place.png" alt="">
                        <p class="lokasi">
                            {{$intern->lokasi}}
                        </p>
                    </div>
                </div>
            </a>
            @endif
            @endforeach       
        </div>
        
    </div>

</body>
</html>