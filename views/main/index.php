<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Order Form</title>
    <link rel="stylesheet" href="./reset.css">
    <link rel="stylesheet" href="./main.css">
</head>
<style>
    body {
        font-family: Arial;
        color: white;
    }

    .split {
        height: 100%;
        width: 50%;
        position: fixed;
        z-index: 1;
        top: 0;
        overflow-x: hidden;
        padding-top: 20px;
    }

    .left {
        left: 0;
        background-color: #111;
    }

    .right {
        right: 0;
        background-color: red;
    }

    .centered {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
    }

    .centered img {
        width: 150px;
        border-radius: 50%;
    }

    /* .videoBG {
        position: fixed;
        z-index: -1;
    }

    @media (min-aspect-ratio: 16/9) {
        .videoBG {
            width: 100%;
            height: auto;
        }
    }

    @media (max-aspect-ratio: 16/9) {
        .videoBG {
            width: auto;
            height: 100%;
        }
    }

    @media (max-width: 767px) {
        .videoBG {
            display: none;
        }

        body {
            background: url('poster.jpg');
            background-size: cover;
        }
    } */
</style>

<body>
    <div id="start">


        <div class="split left">
            <div class="centered">


                <h1>aprasymas</h1>
                <h2>aprasymas2</h2>

            </div>
            <!-- <video autoplay muted loop class="videoBG">
                <source src="/PexelsVideos1625973.mp4" type="video/mp4">
            </video> -->
        </div>

        <div class="split right">
            <div class="centered">

                <h1>Aprasymas</h1>
                <h2>aprasymas2</h2>
            </div>
        </div>
    </div>




    <div id="main-container">
        <div id="header">
            <ul class="nav">
                <!-- navigacija -->
                <li><a href="/order-form">Order form</a></li>
                <li><a href="/admin/index.php?page=1">Products list</a></li>
            </ul>
            <!-- navigacija -->
        </div>
        <form id="order-form" action="/insert" method="POST">
            <div class="form-field">
                <label>Vardas</label>
                <input type="text" name="name">
            </div>
            <div class="form-field">
                <label>Pavarde</label>
                <input type="text" name="surname">
            </div>
            <div class="form-field">
                <label>Miestas</label>
                <input type="text" name="town">
            </div>
            <div class="form-field">
                <label>Kiekis</label>
                <input type="text" name="orderSize">
            </div>
            <div class="form-field">
                <label>Telefonas</label>
                <input type="text" name="phoneNumber">
            </div>
            <div class="form-field">
                <label>Komentaras</label>
                <textarea name="comment"></textarea>
            </div>
            <button type="submit">Pateikti</button>
        </form>
    </div>


</body>
<script>
    document.querySelector("#start > div.split.left").addEventListener("click", function(e) {

        document.getElementById("start").remove()
    });
    document.querySelector("#start > div.split.right").addEventListener("click", function(e) {
        console.log("ne opa");
        window.open("https://www.youraddress.com", "_self");
        // document.getElementById("start").remove()
    });
</script>

</html>