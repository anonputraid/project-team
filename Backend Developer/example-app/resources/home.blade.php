<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Backend Development</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        @import url("https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap");
        @import url("https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap");

        .wrapper-background {
            position: relative;
            width: 100%;
            height: 100vh;
            background-position: center;
            background-size: cover;
            background-image: url("assets/images/backend.png");
            box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
        }

        .wrapper-background .wrapper-backend {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #002352;
            font-family: "IBM Plex Mono", monospace;
            opacity: 80%;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }

        .wrapper-background .wrapper-backend .logo {
            width: 14.65vw;
            height: 14.65vw;
            background-position: center;
            background-size: cover;
            border-radius: 50%;
        }

        @media screen and (max-width: 1200px) {
            .wrapper-background .wrapper-backend .logo {
                width: 23.52vh;
                height: 23.52vh;
            }
        }

        .wrapper-background .wrapper-backend .name {
            font-family: "Kaushan Script", cursive;
            margin-top: 3.66vw;
            font-size: 4.45vw;
            color: white;
            transform: rotate(-8deg);
            margin-bottom: 2.19vw;
        }

        @media screen and (max-width: 1200px) {
            .wrapper-background .wrapper-backend .name {
                font-size: 4vh;
                margin-top: 5.88vh;
                margin-bottom: 3.52vh;
            }
        }

        .wrapper-background .wrapper-backend .profesi {
            font-size: 1.15vw;
            color: white;
        }

        @media screen and (max-width: 1200px) {
            .wrapper-background .wrapper-backend .profesi {
                font-size: 1.6vh;
            }
        }

        .wrapper-background .wrapper-backend .social-media {
            display: flex;
            gap: 0.73vw;
            margin-top: 2.19vw;
        }

        @media screen and (max-width: 1200px) {
            .wrapper-background .wrapper-backend .social-media {
                gap: 1.17vh;
                margin-top: 3.52vh;
            }
        }

        .wrapper-background .wrapper-backend .social-media .icon i {
            font-size: 3.66vw;
            color: white;
        }

        @media screen and (max-width: 1200px) {
            .wrapper-background .wrapper-backend .social-media .icon i {
                font-size: 5.88vh;
            }
        }
    </style>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <div class="wrapper-background">
        <div class="wrapper-backend">
            <div class="logo" style="background-image: url('https://avatars.githubusercontent.com/u/122470308?v=4');">
            </div>
            <div class="name">- {{ $nama }} -</div>
            <div class="profesi">{{ $profesi }}</div>
            <div class="social-media">
                <a href="https://github.com/azrulhans" class="icon"><i class='bx bxl-github'></i></a>
                <a href="https://www.instagram.com/azrulhans/" class="icon"><i class='bx bxl-instagram'></i></a>
            </div>
        </div>
    </div>

    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
