<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">
    <title>Jingga Kreatif</title>
</head>

<body>
    <style>
        .btn-primary {
            border-color: #ff5100;
            background-color: #ff5100 !important;
        }

        .btn-primary:hover {
            border-color: #e64900;
            background-color: #e64900 !important;
        }

        #btn-login:hover {
            background-color: #ff5100;
            color: white;
        }

        .navbar-brand:hover,
        .navbar-nav .nav-item a:hover {
            color: #ff5100 !important;
        }
    </style>
    <?php include_once("partials/navbar_portfolio.php"); ?>
    <div class="container-fluid">
        <div class="row justify-content-center p-5" style="background-color: #F5F5F7;">
            <div class="col-sm-6 col-md-8 col-lg-5 text-center">
                <h3 style="font-weight: 600;">APA ITU VENDOR ?</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Qui voluptate aliquid repellat iste dolorum voluptatum quae inventore eum, ex animi. Dignissimos pariatur neque nostrum velit, beatae debitis culpa vero laudantium soluta commodi cupiditate mollitia nemo obcaecati repellendus ipsam sapiente. Ad deserunt tenetur, fuga accusamus exercitationem atque soluta eligendi sequi blanditiis illum iure numquam dignissimos voluptates aspernatur enim assumenda nobis officia, commodi doloremque saepe ipsum modi? Reiciendis praesentium ut magnam quia omnis facere repudiandae. Magnam cupiditate eveniet optio, quidem veritatis nisi voluptas officia pariatur voluptatibus, quas eligendi odio ab facilis odit quam nemo quae ipsa iste eaque earum! Architecto, sit voluptatem!</p>
            </div>
        </div>

        <div class="row justify-content-center p-5">
            <div class="col-sm-6 col-md-8 col-lg-5 text-center">
                <h3 style="font-weight: 600;">VENDOR TERBAIK KAMI</h3>
                <p>Kami menghadirkan vendor-vendor terbaik dari yang terbaik, berikut beberapa informasi vendor-vendor yang kami tawarkan:</p>
                <br>
                <h5 style="color: #ff5100;">KLIK GAMBAR UNTUK MELIHAT INFO</h5>
            </div>
        </div>

        <style>
            .zoom {
                transition: all .1s ease-in-out;
                transition: 0.5s;
                cursor: pointer;
            }

            .zoom:hover {
                transform: scale(1.2);
            }
        </style>
        <div class="row justify-content-center p-5" style="background-color: #F5F5F7;">
            <div class="col pb-5">
                <div class="row justify-content-center">
                    <div class="col-sm-6 col-md-8 col-lg-5 text-center">
                        <h3 style="font-weight: 600;">KONSEP/TEMA</h3>
                    </div>
                </div>
                <div class="row text-center justify-content-center">
                    <div class="col-6 zoom" style="height: 250px;">
                        <img id="tradisional" src="assets/img/bg1.jpg" class="rounded-circle mb-3" style=" height: 100%; aspect-ratio: 1/1; object-fit: cover;">
                        <h5>TRADISIONAL</h5>
                    </div>
                    <div class="col-6 zoom" style="height: 250px;">
                        <img id="modern" src="assets/img/bg2.webp" class="rounded-circle mb-3" style=" height: 100%; aspect-ratio: 1/1; object-fit: cover;">
                        <h5>MODERN</h5>
                    </div>
                </div>
            </div>
        </div>

        <!-- Produksi -->
        <div class="row justify-content-center p-5">
            <div class="col pb-5">
                <div class="row justify-content-center">
                    <div class="col-sm-6 col-md-8 col-lg-5 text-center">
                        <h2 style="font-weight: 600;">PRODUKSI</h2>
                    </div>
                </div>
                <div class="row text-center justify-content-evenly">
                    <div class="col-4">
                        <h3>DEKOR</h3>
                        <div class="row mt-4">
                            <div class="col zoom" style="height: 150px;">
                                <img id="tradisional" src="assets/img/bg1.jpg" class="rounded-circle mb-3" style=" height: 100%; aspect-ratio: 1/1; object-fit: cover;">
                                <h5>DEKOR 1</h5>
                            </div>
                            <div class="col zoom" style="height: 150px;">
                                <img id="tradisional" src="assets/img/bg1.jpg" class="rounded-circle mb-3" style=" height: 100%; aspect-ratio: 1/1; object-fit: cover;">
                                <h5>DEKOR 2</h5>
                            </div>
                            <div class="col zoom" style="height: 150px;">
                                <img id="tradisional" src="assets/img/bg1.jpg" class="rounded-circle mb-3" style=" height: 100%; aspect-ratio: 1/1; object-fit: cover;">
                                <h5>DEKOR 3</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <h3>DOKUMENTASI</h3>
                        <div class="row mt-4">
                            <div class="col zoom" style="height: 150px;">
                                <img id="tradisional" src="assets/img/bg1.jpg" class="rounded-circle mb-3" style=" height: 100%; aspect-ratio: 1/1; object-fit: cover;">
                                <h5>DOKUMENTASI 1</h5>
                            </div>
                            <div class="col zoom" style="height: 150px;">
                                <img id="tradisional" src="assets/img/bg1.jpg" class="rounded-circle mb-3" style=" height: 100%; aspect-ratio: 1/1; object-fit: cover;">
                                <h5>DOKUMENTASI 2</h5>
                            </div>
                            <div class="col zoom" style="height: 150px;">
                                <img id="tradisional" src="assets/img/bg1.jpg" class="rounded-circle mb-3" style=" height: 100%; aspect-ratio: 1/1; object-fit: cover;">
                                <h5>DOKUMENTASI 3</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Equipment -->
        <div class="row justify-content-center p-5" style="background-color: #F5F5F7;">
            <div class="col pb-5">
                <div class="row justify-content-center">
                    <div class="col-sm-6 col-md-8 col-lg-5 text-center">
                        <h2 style="font-weight: 600;">EQUIPMENT</h2>
                    </div>
                </div>
                <div class="row text-center justify-content-evenly">
                    <div class="col-4">
                        <h3>LIGHTNING</h3>
                        <div class="row mt-4">
                            <div class="col zoom" style="height: 150px;">
                                <img id="tradisional" src="assets/img/bg1.jpg" class="rounded-circle mb-3" style=" height: 100%; aspect-ratio: 1/1; object-fit: cover;">
                                <h5>LIGHTNING 1</h5>
                            </div>
                            <div class="col zoom" style="height: 150px;">
                                <img id="tradisional" src="assets/img/bg1.jpg" class="rounded-circle mb-3" style=" height: 100%; aspect-ratio: 1/1; object-fit: cover;">
                                <h5>LIGHTNING 2</h5>
                            </div>
                            <div class="col zoom" style="height: 150px;">
                                <img id="tradisional" src="assets/img/bg1.jpg" class="rounded-circle mb-3" style=" height: 100%; aspect-ratio: 1/1; object-fit: cover;">
                                <h5>LIGHTNING 3</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <h3>SOUND</h3>
                        <div class="row mt-4">
                            <div class="col zoom" style="height: 150px;">
                                <img id="tradisional" src="assets/img/bg1.jpg" class="rounded-circle mb-3" style=" height: 100%; aspect-ratio: 1/1; object-fit: cover;">
                                <h5>SOUND 1</h5>
                            </div>
                            <div class="col zoom" style="height: 150px;">
                                <img id="tradisional" src="assets/img/bg1.jpg" class="rounded-circle mb-3" style=" height: 100%; aspect-ratio: 1/1; object-fit: cover;">
                                <h5>SOUND 2</h5>
                            </div>
                            <div class="col zoom" style="height: 150px;">
                                <img id="tradisional" src="assets/img/bg1.jpg" class="rounded-circle mb-3" style=" height: 100%; aspect-ratio: 1/1; object-fit: cover;">
                                <h5>SOUND 3</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Talent -->
        <div class="row justify-content-center p-5">
            <div class="col pb-5">
                <div class="row justify-content-center">
                    <div class="col-sm-6 col-md-8 col-lg-5 text-center">
                        <h2 style="font-weight: 600;">TALENT</h2>
                    </div>
                </div>
                <div class="row text-center justify-content-evenly mb-5">
                    <div class="col-4">
                        <h3>BAND</h3>
                        <div class="row mt-4">
                            <div class="col zoom" style="height: 150px;">
                                <img id="tradisional" src="assets/img/bg1.jpg" class="rounded-circle mb-3" style=" height: 100%; aspect-ratio: 1/1; object-fit: cover;">
                                <h5>BAND 1</h5>
                            </div>
                            <div class="col zoom" style="height: 150px;">
                                <img id="tradisional" src="assets/img/bg1.jpg" class="rounded-circle mb-3" style=" height: 100%; aspect-ratio: 1/1; object-fit: cover;">
                                <h5>BAND 2</h5>
                            </div>
                            <div class="col zoom" style="height: 150px;">
                                <img id="tradisional" src="assets/img/bg1.jpg" class="rounded-circle mb-3" style=" height: 100%; aspect-ratio: 1/1; object-fit: cover;">
                                <h5>BAND 3</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <h3>MC</h3>
                        <div class="row mt-4">
                            <div class="col zoom" style="height: 150px;">
                                <img id="tradisional" src="assets/img/bg1.jpg" class="rounded-circle mb-3" style=" height: 100%; aspect-ratio: 1/1; object-fit: cover;">
                                <h5>MC 1</h5>
                            </div>
                            <div class="col zoom" style="height: 150px;">
                                <img id="tradisional" src="assets/img/bg1.jpg" class="rounded-circle mb-3" style=" height: 100%; aspect-ratio: 1/1; object-fit: cover;">
                                <h5>MC 2</h5>
                            </div>
                            <div class="col zoom" style="height: 150px;">
                                <img id="tradisional" src="assets/img/bg1.jpg" class="rounded-circle mb-3" style=" height: 100%; aspect-ratio: 1/1; object-fit: cover;">
                                <h5>MC 3</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row text-center justify-content-evenly pt-5">
                    <div class="col-6">
                        <h3>MUA</h3>
                        <div class="row mt-4">
                            <div class="col zoom" style="height: 150px;">
                                <img id="tradisional" src="assets/img/bg1.jpg" class="rounded-circle mb-3" style=" height: 100%; aspect-ratio: 1/1; object-fit: cover;">
                                <h5>MUA 1</h5>
                            </div>
                            <div class="col zoom" style="height: 150px;">
                                <img id="tradisional" src="assets/img/bg1.jpg" class="rounded-circle mb-3" style=" height: 100%; aspect-ratio: 1/1; object-fit: cover;">
                                <h5>MUA 2</h5>
                            </div>
                            <div class="col zoom" style="height: 150px;">
                                <img id="tradisional" src="assets/img/bg1.jpg" class="rounded-circle mb-3" style=" height: 100%; aspect-ratio: 1/1; object-fit: cover;">
                                <h5>MUA 3</h5>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <?php include_once("partials/footer_portfolio.php"); ?>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


    <!-- Modal -->
    <div class="modal fade" id="tradisionalModal" tabindex="-1" aria-labelledby="tradisionalModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="tradisionalModalLabel">TRADISIONAL</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modernModal" tabindex="-1" aria-labelledby="modernModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modernModalLabel">MODERN</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                </div>
            </div>
        </div>
    </div>
    <script>
        $("img#tradisional").on('click', function() {
            $("#tradisionalModal .modal-body").html(`<iframe width="100%" height="350" src="https://www.youtube.com/embed/1SG2q2ZdX94" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>`);
            $("#tradisionalModal").modal('show');
        });
        $("#tradisionalModal").on("hidden.bs.modal", function() {
            $("#tradisionalModal .modal-body").text("");
        });
    </script>
    <script>
        $("img#modern").on('click', function() {
            $("#modernModal .modal-body").html(`<iframe width="100%" height="350" src="https://www.youtube.com/embed/alKGYA1W8H4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>`);
            $("#modernModal").modal('show');
        });
        $("#modernModal").on("hidden.bs.modal", function() {
            $("#modernModal .modal-body").text("");
        });
    </script>
</body>

</html>