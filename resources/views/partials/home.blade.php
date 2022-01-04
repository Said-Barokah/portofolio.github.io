<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Spline+Sans:wght@300;400;500;600&display=swap"
        rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <title>Said | Programmer, Editor, Mentor</title>
    <style>
        body {
            font-family: 'Spline Sans', sans-serif;
        }
        .avatar-home {
            width: 250px;
        }

        .hero-body h1.title {
            font-family: 'Spline Sans', sans-serif;
            font-weight: 700;
        }

        .hero-body h2.subtitle {
            font-family: 'Spline Sans', sans-serif;
            font-weight: lighter;
        }

        section#biografi {
            font-family: 'Spline Sans', sans-serif;
        }

        section#biografi .container {
            margin-bottom: 9rem;
        }

        section#skills {
            margin-top: -14rem;
            padding-bottom: 1rem;
            padding: 5rem 1.5rem;
        }

        .box {
            background-color: white;
            box-shadow: 0px 1px 4px rgb(160, 160, 160);
        }

        section#skills .column {
            padding: 70px 45px;
            border-bottom: 0px solid #E6ECF8;
            border-right: 1px solid #E6ECF8;
        }

        section#skills .list-title {
            color: #08abfa;
        }

        footer {
            background-color: #08abfa;
        }

    </style>
</head>

<body>
    @include('layouts.navbar')
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>



    <section id="introduction" class="mt-5">
        <div class="hero-body mb-5">
            <div class="container">
                <div class="d-flex justify-content-center">
                    <div class="text-center">
                        <h1 class="title fs-1 mb-4">Designer,
                            Full-stack Developer &amp; Mentor</h1>
                        <h2 class="subtitle fs-4 mb-5">I design and code beautifully simple things, and I love
                            what I do.</h2><img class="avatar-home" src="img/avatar.png">
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-foot text-center pt-5">
            <div class="container">
                <img class="is-bottom" src="img/icon-lain.png">
            </div>
        </div>
    </section>
    <section class="section p-5 bg-info text-center w-100" id="biografi">
        <div class="container">
            <div class="columns p-5">
                <div class="column p-3">
                    <h1 class="title fs-3 fs-sm-4 fw-bold text-light">Hi, I’m Said. Nice to meet you.</h1>
                    <h2 class="subtitle fs-6 fw-light text-light lh-lg">Since beginning my journey as a freelance
                        designer nearly 3 years ago, I've done remote work for agencies, consulted for startups, and
                        collaborated with talented people to create digital products for both business and consumer use.
                        I'm quietly confident, naturally curious, and perpetually working on improving my chops one
                        design problem at a time.</h2>
                </div>
            </div>
        </div>
    </section>

    <section class="text-center" id="skills">
        <div class="container is-narrow">
            <div class="box rounded ">
                <div class="content">
                    <div class="d-flex justify-content-center">
                        <div class="column">
                            <figure class="image"><img class="is-skill-icon" src="img/icon-skill-designer.png"></figure>
                            <h1 class="title fs-4 fw-bold py-4">Designer</h1>
                            <p class="fw-light">I value simple content structure, clean design patterns, and thoughtful interactions.</p>
                            <p class="list-title has-text-weight-normal">Things I enjoy designing:</p>
                            <p class="fw-light">UX, UI, Web, Logos, poster</p>
                            <p class="list-title has-text-weight-normal">Design Tools:</p>
                            <ul class="list-unstyled fw-light">
                                <li>Inkscape</li>
                                <li>GIMP</li>
                                <li>Photoshop</li>
                                <li>Snapseed</li>
                                <li>Picsart</li>
                                <li>Lightroom</li>
                                <li>LD</li>
                                <li>Figma</li>
                            </ul>
                        </div>
                        <div class="column">
                            <figure class="image"><img class="is-skill-icon"
                                    src="img/icon-skill-full-stack-devoloper.png"></figure>
                            <h1 class="title fs-4 fw-bold py-4">Full-stack Developer</h1>
                            <p class="fw-light">I like to code things from scratch, and enjoy bringing ideas to life in the browser.</p>
                            <p class="list-title has-text-weight-normal">Languages I speak:</p>
                            <p class="fw-light">Javascript, PHP, Laravel, SQL</p>
                            <p class="list-title has-text-weight-normal">Dev Tools:</p>
                            <ul class="list-unstyled fw-light">
                                <li>Visual Studio Code</li>
                                <li>PHP My Admin</li>
                                <li>Bootstrap</li>
                                <li>W3Schools</li>
                                <li>Codepen</li>
                                <li>Github</li>
                                <li>Terminal</li>
                            </ul>
                        </div>
                        <div class="column">
                            <figure class="image"><img class="is-skill-icon" src="img/icon-skill-mentor.png"></figure>
                            <h1 class="title fs-4 fw-bold py-4">Mentor</h1>
                            <p class="fw-light">I genuinely care about people, and love helping fellow designers work on their craft.</p>
                            <p class="list-title has-text-weight-normal">Experiences I draw from:</p>
                            <p class="fw-light">UX/UI, Product design, Mentor</p>
                            <p class="list-title has-text-weight-normal">Mentor Stats:</p>
                            <ul class="list-unstyled fw-light">
                                <li>1 years experience Via Superprof</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="text-center" id="projects">
        <div class="container is-narrow">
            <h1 class="title fs-3 fs-sm-4 fw-bold">My Recent Work</h1>
            <h2 class="subtitle fs-5 fw-light">Here are a few design projects I've worked on recently. Want to see
                more? <a href="mailto:matt@pendeavor.com">Email me</a>.</h2>
        </div>
    </section>



    @include('layouts.footer')


</body>

</html>
