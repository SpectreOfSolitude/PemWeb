<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tangent</title>
    <link rel="stylesheet" href="{{ asset('homeStyles.css') }}">
</head>

<body>
    <?php
        require "logout.php";
    ?>
    <div id="atas">
        <h1 id="head">Tangent</h1>
        <nav>
            <ul id="navlist">
                <li>
                    <a href="#">Home</a>
                </li>
                <li>
                    <a href="">Links</a>
                </li>
                <li>
                    <a href="">Works</a>
                </li>
                <li>
                    <form action="logout.php" method="post">
                        <button type="submit" name="logout"> logout </button>
                    </form>
                </li>
            </ul>
        </nav>
    </div>
    <div id="tepi">
        <h4 id="">Prove your worth!</h4>
        <button id="editProfile">Edit Profile</button>
    </div>
    <div id="gridBody">
        <img src="{{asset('/Elements/Matt_CPU.jpg')}}" width="250px" id="profpic">
        <div id="main">
            <h2>Kristian Suriyadharma</h2>
            <p><i class="fa fa-map-marker"></i>Seorang petarung handal yang berani membela kebenaran.
                Terbukti memiliki toko dan barang dagangan yang berkualitas.</p>
        </div>
        <ul id="Dimension-ul">Dimensions
            <li><a href="https://github.com/SpectreOfSolitude/">Github</a></li>
            <li><a href="https://www.linkedin.com/in/akasyah-arsyi-93455a217/">LinkedIn </a></li>
        </ul>
        <div id="About">
            <h5>ABOUT</h5>
            <p>
                A game Enthusiast. I'm not a programmer, I'm an artist. And my artwork is games.
            </p>
        </div>
        <div id="education">
            <h5>Education</h5>
            <ul>
                <li>Tadika Mesra</li>
                <li>SD Mawar</li>
                <li>SMPN 48</li>
                <li>SMA Bina Amerta</li>
            </ul>
        </div>
        <div id="experience">
            <h5>Experience</h5>
            <ul>
                <li>Volunteer HR</li>
                <li>HouseKeeping</li>
                <li>Artist</li>
                <li>CEO</li>
            </ul>
        </div>
        <div id="feeds">
            <form action="">
                <h5>Post Something to your feeds!</h5>
                <input type="text" id="inputPost">
                <button type="submit" onsubmit="posting()" onclick="posting()">Post</button>
            </form>
            
        </div>
    </div>
    <script src="{{ asset('script.js') }}"></script>
</body>

</html>