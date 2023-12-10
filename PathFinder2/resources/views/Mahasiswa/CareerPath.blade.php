<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CarrerPath</title>
    <link rel="stylesheet" href="{{ asset('css/careerPath.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap">
</head>

<body>

    <div class="left-sidebar">
        <!-- //*ganti href ke dashboard -->
        <div class="app-name" href="#">
            <img src="/images/lucide_rocket.png" alt="Rocket Icon">
            <h3>PathFinder.</h3>
        </div>

        <div class="options">
            <a href="#" class="dashboard">
                <img src="/images/lucide_home.png" alt="Settings Icon" class="dashboard-icon">
                Dashboard
            </a>
            <a href="#">
                <img src="/images/lucide_bookmark.png" alt="Settings Icon">
                Favorites
            </a>

            <div class="mainSub2">
                <a href="/careerPath" class="mainSub">
                    <img src="/images/lucide_flag-triangle-right.png" alt="Settings Icon">
                    Career Path
                </a>
            </div>

            <a href="#">
                <img src="/images/internshipFinder.png" alt="Settings Icon">
                Internship Finder
            </a>
            <a href="/courseFinderAdmin">
                <img src="/images/lucide_award.png" alt="Settings Icon">
                Course Finder
            </a>
            <a href="#">
                <img src="/images/lucide_wrench.png" alt="Settings Icon">
                Settings
            </a>
            <a href="#" class="mt-auto">
                <img src="/images/lucide_log-out.png" alt="Settings Icon">
                Log Out
            </a>

        </div>
    </div>

    <div class="content">
        <div class="judul">
            <h1>Career Path Roadmap</h1>
            <img src="/images/redFlag.png" alt="bendera">
        </div>
        <h3>Don't wait. The sooner you begin, the sooner you'll reach your destination.</h3>

        <div id="gambar">
            <img src="/images/card.png" id="gambar1" alt="Gambar 1">
            <img src="/images/card2.png" id="gambar2" alt="Gambar 2">
        </div>

        <div class="BottomContent">
            <h3>Unlock Your Career Prospects</h3>

            <div class="dataScience">
                <h4>Data Science</h4>

                <div class="dataChoices">
                    <a href="/ayen">
                        Data Scientist
                    </a>

                    <a href="#">
                        Data Analyst
                    </a>

                    <a href="/careerPath">
                        Data Engineer
                    </a>

                    <a href="#">
                        Data Architect
                    </a>

                    <a href="#">
                        Chief Data Officer
                    </a>

                </div>

            </div>

            <div class="interactiveMedia">
                <h4>Interactive Media</h4>
            </div>
        </div>


    </div>

    <div class="right-sidebar">
        <div class="profile">
            <img src="/images/profileImage.png" alt="Profile">
        </div>
    </div>

</body>
</html>