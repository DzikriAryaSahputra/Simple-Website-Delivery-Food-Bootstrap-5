<?= $this->extend('layout');?>

<?= $this->section('main')?>

    <div class="container">
        <div class="row">

            <!-- Main Content -->
            <div class="col-md-12">
                <div class="my-3">
                    <input type="text" class="form-control" placeholder="Search food">
                </div>
                <div class="mb-3">
                    <div class="swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="images/banner1.png" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="images/banner2.png" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="images/20220624-urban-icon-banner.jpg" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="images/banner3.png" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="images/banner4.png" alt="">
                            </div>
                        </div>

                        <div class="swiper-pagination"></div>

                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                    </div>
                </div>
                <ul class="nav nav-tabs mb-3">
                    <li class="nav-item"><a class="nav-link active" href="#">AllMenu</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Best Seller</a></li>
                </ul>
                <div class="row">
                    <?php foreach ($product as $pro): ?>
                        <div class="col-md-3">
                            <div class="card food-item">
                                <img src="<?= base_url($pro['thumbnail_url']) ?>" alt="<?= $pro['product_name'] ?>" class="img-thumbnail" style="width: auto; height:auto;">
                                <div class="card-body text-center">
                                    <h5 class="card-title"><?= $pro['product_name']; ?></h5>
                                    <p class="card-text"><?= $pro['product_description']; ?> - Rp.<?= $pro['price']; ?></p> <button class="btn btn-primary order-btn"
                                        data-toggle="modal" data-target="#orderSummaryModal">Pesan</button>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>

                    <!-- Add more food items here as needed -->
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Order Summary -->
    <div class="modal fade" id="orderSummaryModal" tabindex="-1" aria-labelledby="orderSummaryModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="orderSummaryModalLabel">Pesanan Saya</h5> <button type="button"
                        class="close" data-dismiss="modal" aria-label="Close"> <span
                            aria-hidden="true">&times;</span> </button>
                </div>
                <div class="modal-body">
                    <p>Delivery address: 1342 Morris Street</p>
                    <p>Estimated delivery time: 40 mins</p>
                    <hr>
                    <div class="order-item">
                        <p>Burger Mozza XL <span class="float-right">Rp. 40000.00</span></p>
                        <div class="quantity"> <button class="btn btn-secondary btn-sm">-</button>
                            <span>1</span> <button class="btn btn-secondary btn-sm">+</button>
                        </div>
                    </div>
                    <hr>
                    <p>Fee <span class="float-right">Rp. 10000.00</p>
                    <hr>
                    <p>Sub Total <span class="float-right">Rp. 161000.00</span></p>
                    <hr>
                    <h5>Total <span class="float-right">Rp. 171000</span></h5>
                    <hr>
                    <div class="payment-methods">
                        <p>Select Payment Method:</p>
                        <div class="form-check"> <input class="form-check-input" type="radio"
                                name="paymentMethod" id="cashOnDelivery" value="cash"> <label
                                class="form-check-label" for="cashOnDelivery"> Bayar di Tempat </label> </div>
                        <div class="form-check"> <input class="form-check-input" type="radio"
                                name="paymentMethod" id="creditCard" value="credit"
                                onclick="toggleCreditCardForm(true)"> <label class="form-check-label"
                                for="creditCard"> Kartu Kredit </label> </div>
                    </div>
                    <div id="creditCardForm" style="display: none;">
                        <hr>
                        <div class="form-group"> <label for="creditCardNumber">Nomor Kartu Kredit</label> <input
                                type="text" class="form-control" id="creditCardNumber"
                                placeholder="Masukkan nomor kartu kredit"> </div>
                    </div> <a href="<?= base_url('delivery') ?>" class="btn btn-warning btn-block mt-3">Pesan Sekarang</a>
                </div>
            </div>
        </div>
    </div>
    
    <?= $this->endSection();?>