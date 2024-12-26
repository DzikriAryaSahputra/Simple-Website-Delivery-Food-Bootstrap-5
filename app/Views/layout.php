
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Delivery App</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">


    <style>
        body {
            background-color: #f8f9fa;
            /* Soft gray background */
            font-family: 'Arial', sans-serif;
            scroll-behavior: smooth;
        }

        .navbar {
            background-color: #2E8B57;
            /* Gunakan warna hijau yang segar untuk nuansa delivery */
            padding: 1rem 2rem;
        }

        .navbar-brand img {
            height: 40px;
            /* Atur tinggi logo sesuai kebutuhan */
            width: auto;
            /* Memastikan proporsi gambar tetap terjaga */
        }

        .navbar-brand {
            font-family: 'Poppins', sans-serif;
            font-size: 1.8rem;
            font-weight: 600;
            color: white;
        }

        .navbar-toggler-icon {
            background-color: white;
        }

        .navbar-nav .nav-item .nav-link.active {
            color: #FFD700;
            /* Ganti dengan warna teks yang diinginkan */
        }

        .navbar-nav .nav-item .nav-link {
            color: white;
            font-size: 1rem;
            padding: 0.5rem 1rem;
            transition: all 0.3s ease-in-out;
        }

        .navbar-nav .nav-item .nav-link:hover {
            color: #FFD700;
            /* Hover warna kuning */
            text-decoration: underline;
        }

        /* Tombol Order Now */
        .navbar-nav .btn-primary {
            background-color: #FFD700;
            border: none;
            font-weight: bold;
            padding: 0.6rem 1.5rem;
            border-radius: 30px;
        }

        .navbar-nav .btn-primary:hover {
            background-color: #FF6347;
            /* Hover warna merah */
            text-decoration: none;
        }

        .list-group {
            margin: 0;
            padding: 0;
            border-radius: 0;
        }

        .list-group-item {
            display: flex;
            align-items: center;
            padding: 15px;
            font-size: 1rem;
            font-weight: 500;
            color: #343a40;
            border: none;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .list-group-item:hover {
            background-color: #007bff;
            color: #ffffff;
        }

        .list-group-item.active {
            background-color: #007bff;
            color: #ffffff;
            font-weight: bold;
        }

        .menu-icon {
            font-size: 1.5rem;
            margin-right: 10px;
            color: inherit;
            transition: transform 0.3s ease;
        }

        .list-group-item:hover .menu-icon {
            transform: scale(1.2);
        }

        .form-control {
            border-radius: 25px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .alert {
            background-color: #17a2b8;
            color: #ffffff;
            border: none;
            border-radius: 25px;
        }

        .nav-tabs .nav-link {
            color: #6c757d;
            border-radius: 25px;
            padding: 8px 15px;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .nav-tabs .nav-link.active {
            background-color: #FFD700;
            color: #333;
        }

        .nav-tabs .nav-link:hover {
            background-color: #e9ecef;
        }

        .food-item img {
            width: 150px;
            height: auto;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .food-item .card-body {
            text-align: center;
        }


        .card:hover {
            transform: scale(1.05);
            /* Perbesar seluruh card saat di-hover */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            /* Tambahkan bayangan */
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            /* Efek transisi */
        }

        .food-item {
            margin-bottom: 20px;
        }

        .food-item h5 {
            font-size: 1.25rem;
            margin-top: 10px;
        }

        .food-item p {
            font-size: 0.95rem;
            color: #6c757d;
        }

        .btn.order-btn {
            border-radius: 25px;
            padding: 8px 20px;
            background-color: #FFD700;
            border: none;
            transition: background-color 0.3s ease;
        }

        .btn.order-btn:hover {
            background-color: #FF6347;
        }

        .modal-header {
            background-color: #FFD700;
            color: #333;
            border-bottom: none;
        }

        .modal-body {
            background-color: #f8f9fa;
        }

        .modal-content {
            border-radius: 10px;
        }

        .btn-block {
            border-radius: 25px;
        }

        hr {
            border-top: 1px solid #dee2e6;
        }

        .swiper {
            width: 900px;
            height: 300px;
            overflow: hidden;
            border: 5px solid #ccc;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .swiper-button-prev,
        .swiper-button-next {
            color: #ccc !important;
            transition: .2s linear;
        }

        .swiper-button-prev:hover,
        .swiper-button-next:hover {
            transform: scale(1.1);
            color: #fff !important;
        }

        .swiper-pagination-bullet {
            border: 2px solid #fff;
            transition: .2s linear;
        }

        .swiper-pagination-bullet:hover,
        .swiper-pagination-bullet-active {
            background-color: #fff;
        }

        .swiper-slide {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .swiper-slide img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
        }

        @media (max-width: 768px) {
            .swiper {
                width: 300px;
                height: 300px;
                overflow: hidden;
                border: 5px solid #ccc;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            }
        }

        .footer {
            background-color: #2b2b2b;
            color: white;
            padding: 40px 0;
        }

        .footer h3 {
            font-size: 1.2rem;
            margin-bottom: 20px;
        }

        .footer ul {
            list-style: none;
            padding: 0;
        }

        .footer a {
            color: #a0a0a0;
            text-decoration: none;
            line-height: 2;
        }

        .subscribe-form input {
            background-color: #3b3b3b;
            border: none;
            padding: 8px;
            color: white;
        }

        .subscribe-form button {
            background-color: white;
            border: none;
            padding: 8px 20px;
            border-radius: 5px;
        }

        .social-links a {
            margin: 0 10px;
        }
    </style>

</head>
<nav class="navbar navbar-expand-lg navbar-light bg-dark">
    <a class="navbar-brand" href="#" style="color:white;">
        <img src="images/duck.png" alt="Logo"> McDuck
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link active" href="<?= base_url('') ?>"><i class="fa-solid fa-house"></i> Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('delivery') ?>"><i class="fa-solid fa-person-biking"></i> Delivery</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#about-section"><i class="fas fa-circle-info"></i> About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link btn btn-primary text-white mx-2" href="<?= base_url('login') ?>">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link btn btn-danger text-white mx-2" href="<?= base_url('logout') ?>">Logout</a>
            </li>
        </ul>
    </div>
</nav>



      <?= $this->renderSection('main'); ?>  
<br>
<br>
<hr>

      <footer class="footer" id="about-section">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h3>Company</h3>
                    <ul>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Why Choose us</a></li>

                    </ul>
                </div>

                <div class="col-md-3">
                    <h3>Resources</h3>
                    <ul>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms and Condition</a></li>
                    </ul>
                </div>

                <div class="col-md-3">
                    <h3>Product</h3>
                    <ul>
                        <li><a href="#">Project management</a></li>
                        <li><a href="#">Time tracker</a></li>
                        <li><a href="#">Time schedule</a></li>

                    </ul>
                </div>
            </div>

            <hr class="mt-4">

            <div class="row mt-3">
                <div class="col-md-12 text-center">
                &copy; 2024. Dzikri Arya Sahputra UAS Pemrograman Web2.
                </div>
                <div class="col-md-6 text-end">
                    <div class="social-links">
                        <a href="#"><i class="bi bi-facebook"></i></a>
                        <a href="#"><i class="bi bi-twitter"></i></a>
                        <a href="#"><i class="bi bi-instagram"></i></a>
                        <a href="#"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script>
        function toggleCreditCardForm(show) {
            const creditCardForm = document.getElementById('creditCardForm');
            if (show) {
                creditCardForm.style.display = 'block';
            } else {
                creditCardForm.style.display = 'none';
            }
        }
        document.getElementById('cashOnDelivery').addEventListener('click', () => toggleCreditCardForm(false));
        document.getElementById('creditCard').addEventListener('click', () => toggleCreditCardForm(true));
        const swiper = new Swiper(".swiper", {
            navigation: {
                prevEl: ".swiper-button-prev",
                nextEl: ".swiper-button-next"
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true
            },
            effect: "coverflow"
        });
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>