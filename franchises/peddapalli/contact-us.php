<?php

include('header.php');
?>

    <!--Start Page Banner-->
    <div class="page-banner bg-1 ptb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <div class="page-banner-content">
                        <h1>Contact Us</h1>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li>Contact Us</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="page-banner-img">
                        <!-- <img src="assets/images/page-header/page-header-img-2.png" alt="Image"> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Page Banner-->

    <!--Start Branches-->
    <div class="container mt-4">
        <div class="row">
            <div class="col-lg-4">
                <div class="d-flex flex-column align-items-center border text-center p-2 h-100">
                    <i class="ri-building-4-line" style="font-size: 60px;color:#038137"></i>
                    <h3>Address</h3>
                    <p class="text-muted fw-medium">Pallavi Model School, Peddapalli, Telangana
                    </p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="d-flex flex-column align-items-center border h-100 p-2">
                    <i class="ri-phone-line" style="font-size: 60px;color:#038137"></i>
                    <h3>Phone Number</h3>
                    <p class="text-muted fw-medium mb-0">
                        <!-- Let Us Help -->
                        NUMBER
                    </p>
                    <p class="text-muted fw-medium">
                        NUMBER
                    </p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="d-flex flex-column align-items-center h-100 border p-2">
                    <i class="ri-mail-line" style="font-size: 60px;color:#038137"></i>
                    <h3>Email</h3>
                    <p class="text-muted fw-medium text-center">admissions_pdpl@pallavimodelschools.org
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!--End Branches-->

    <!--Start Contact Area-->
    <div class="contact-area ptb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="contact-img">
                        <img src="assets/images/pallavi_school/contact_us_image.jpg" alt="Image">
                    </div>
                </div>
                <div class="col-lg-6">

                    <div class="contact-form">
                        <div class="information">
                            <h3>Your Information</h3>
                            <?php include('queryform.php')?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Contact Area-->

    <!--Start Map ARea-->
    <div class="map-area mb-5">
        <div class="container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3810.9404473629093!2d78.60613597516115!3d17.22167808363749!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMTfCsDEzJzE4LjAiTiA3OMKwMzYnMzEuNCJF!5e0!3m2!1sen!2sin!4v1702962913559!5m2!1sen!2sin" width="300" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
    <!--End Map ARea-->

<?php

include('footer.php');
?>