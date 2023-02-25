<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('style/resuable.css') }}" />
    <link rel="icon" type="image/x-icon" href="../img/home page/logo.png">
    <link rel="stylesheet" href="{{ asset('style/freestruc.css') }}" />
    <title>Fee Structure</title>
</head>
<body>
    @include("frontend.layouts.header")
    <div class="main-box class='flex-layout-c'" style="margin-top: 10rem;">
        <div class="small-container">
            <h3>Fee Strucute</h3>
    
            <div class="table">
                <!-- ---------- title ---------- -->
                <p class="s-para bold title">class</p>
                <p class="s-para bold title">Fees South London Branch</p>
                <p class="s-para bold title">Fees North London Branch</p>
                <!-- ---------- title ---------- -->
                
                <!-- ---------- data ---------- -->
    
                <!-- row 1 -->
                <div class="fee-data">
                    <p class="bold s-para">Kindergarden</p>
                    <p class="regular s-para">Accepts children at the age of 3-5 years and children will stay here 1 or 2 years</p>
                </div>
                <div class="fee-data">
                    <p class="bold s-para">499/term/child.</p>
                    <p class="regular s-para">Early bird and yearly payment options avail discounts</p>
                </div>
                <div class="fee-data">
                    <p class="bold s-para">499/term/child.</p>
                    <p class="regular s-para">Early bird and yearly payment
                        options avail discounts</p>
                </div>
                <!-- row 1 -->
    
                <!-- row 2 -->
                <div class="fee-data">
                    <p class="bold s-para">Foundation</p>
                    <p class="regular s-para">accepts children at the age of 5-7 years and children will stay here 1 year</p>
                </div>
                <div class="fee-data">
                    <p class="bold s-para">479/term/child.</p>
                    <p class="regular s-para">Early bird and yearly payment options avail discounts</p>
                </div>
                <div class="fee-data">
                    <p class="bold s-para">470/term/child.</p>
                    <p class="regular s-para">Early bird and yearly payment
                        options avail discounts</p>
                </div>
                <!-- row 2 -->
    
                <!-- row 3 -->
                <div class="fee-data">
                    <p class="bold s-para">Level 1</p>
                    <p class="regular s-para">accepts children at the age of 7-9 years and children will stay here 1 year</p>
                </div>
                <div class="fee-data">
                    <p class="bold s-para">479/term/child.</p>
                    <p class="regular s-para">Early bird and yearly payment options avail discounts</p>
                </div>
                <div class="fee-data">
                    <p class="bold s-para expect">(Branch will open as school expands yearly)</p>
                </div>
                <!-- row 3 -->
    
                <!-- row 4 -->
                <div class="fee-data">
                    <p class="bold s-para">Level 2</p>
                    <p class="regular s-para">accepts children at the age of 9-12 years and children will stay here 1 year</p>
                </div>
                <div class="fee-data">
                    <p class="bold s-para">499(tbc)/term/child.</p>
                    <p class="regular s-para">Early bird and yearly payment options avail discounts</p>
                </div>
                <div class="fee-data">
                    <p class="bold s-para expect">(Branch will open as school expands yearly)</p>
                </div>
                <!-- row 4 -->
                
                <!-- last row  -->
                <p class="s-para medium f-f">Further Level</p>
                <p class="medium expect s-para f-f">Further branches will open as school expands and if enough children enroll per class </p>
                <!-- last row  -->
            </div>
        </div>
    
        <div class="foot" style="margin-bottom: -10px;">
            <p>Please email us for more information at <b>info@arabicclub.co.uk</b>  to discuss further or call us at <b>020 79939 010</b> </p>
        </div>
    </div>
    @include("frontend.layouts.footer")

    <script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="{{ asset('/scrolll.js.js') }}"></script>
</body>
</html>