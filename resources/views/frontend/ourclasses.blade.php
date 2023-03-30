<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" type="image/x-icon" href="../img/home page/logo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('style/resuable.css') }}" />
    <link rel="stylesheet" href="{{ asset('style/ourclasses.css') }}" />





    <script src="{{ asset('/imporFunc.js') }}" defer></script>
        <script src="{{ asset('/script.js') }}" defer></script>
    <title>Tack - Our Class</title>
    <style>
        .our-classes {
    position: relative;
    width: 100%;
    background: url("{{asset('storage/images/'.settings('class','section_one_image'))}}");
    height: 50rem;
    background-size: cover;
    background-position: center;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: start;
    -ms-flex-pack: start;
    margin-top: 8rem;
}
    </style>
</head>

<body>
    @include("frontend.layouts.header")
    <!-- ------------------------- stikcy mnu -----------------------  -->
    @include('frontend.partials.sticky_menu')
  <!-- ------------------------- end -----------------------  -->
    <!-- ------------------------- main code start here -----------------------------  -->


    <section class="our-classes reveal">
        <!-- <div class="empty"></div> -->
        <div class="our-cls-search flex-layout-sp">
            <div class="our-cls-data">
                <h2 class="h-white">{{settings('class', 'section_one_heading')}}</h2>

                <form action="" class="cls-form">
                    <div class="select">
                        <select>
                            <option value="London">London</option>
                        </select>
                    </div>
                    
                    
                    <br>
                    <p class="white">
                        {!! settings('class', 'section_one_description') !!}
                    </p>

                    <button type="submit" class="rounded-btn">Submit</button>

                </form>
                <p class="white">please email us for more information at info@arabicclub.co.uk</span>  </p>


            </div>
        </div>
        <!-- <div class="classes-img"></div> -->
        <div class="shadowbg"></div>
    </section>


    <!-- ------------------------------ new section --------------------------  -->
    <section class="online-cls reveal">
        <img src="../img/class page/online cls.png" alt="">

        <p class="medium-para">please email us for more information at <span class="mailcol">info@arabicclub.co.uk</span> to discuss
            further<br>
            or call us at <span class="mailcol">020 79939 010</span>
        </p>

        <div class="age-btn">
            <div class="slt slt-r">
                <select>
                    <option value="3">AGE 3-7</option>
                </select>
                <label for="down"></label>
            </div>
            <div class="slt slt-g">
                <select>
                    <option value="7">AGE 7-11</option>
                </select>
            </div>
        </div>
    </section>


    <section class="baby container reveal">
        <div class="baby-left">
            <h2>{{settings('class', 'section_two_heading')}}</h2>
            {!! settings('class', 'section_two_description') !!}
        </div>

        <div class="baby-right"><img src="{{asset('storage/images/'.settings('curriculum','section_three_image'))}}" alt=""></div>
    </section>

    <section class="grey-note reveal">
        <div class="note container">
            <p class="bold">These fees are subject to vary if the distance needed to be travelled is particularly far,
                or for other reasons, such as differential abilities within the group. These would be discussed prior to
                confirming the final fee.</p>
        </div>
    </section>


    <section class="key-date container reveal">
        <div class="hr-center-heading">
            <h2>Key Dates</h2>
            <hr>
        </div>

        <p>Our each branch runs on one day of the weekend <b>either</b> Saturday <b>or</b> Sunday</p>


        <div class="baby-card flex-layout-c">
            <div class="b-card b-card1">
                <div class="card-head">
                    <p class="medium">01 June 2022 (Saturday)</p>
                </div>

                <div class="b-card-data">
                    <h5>At Lark Hall
                        Primary School
                    </h5>

                    <p class="sb-para">10am-1pm</p>
                </div>
            </div>
            <div class="b-card b-card2  ">
                <div class="card-head">
                    <p class="para-detail">08 June 2022 (Sunday )</p>
                </div>

                <div class="b-card-data">
                    <h5>At West Green
                        Primary School
                    </h5>

                    <p class="sb-para">10am-1pm</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ----------------------- classes --------------------  -->

    <section class="classes reveal">
        <div class="small-container">

            <div class="hr-center-heading">
                <h2>Our Classes</h2>
                <hr>
            </div>

            <div class="class-nav-btn flex-layout-c">
                <button class="cls-btn cls-btn1 ">class 3-5</button>
                <button class="cls-btn cls-btn2">class 5-7</button>
                <button class="cls-btn cls-btn3">class 7-9</button>
                <button class="cls-btn cls-btn4">class 9-10</button>
                <button class="cls-btn cls-btn5">class 10-11</button>
            </div>


            <div class="cls-main-data" id="cls-main-data1"> 
                <div class="cls-data-left">
                    <img src="../img/class page/main-img.png" alt="">
                </div>

                <div class="cls-data-right">
                    <img src="../img/class page/svg blue.svg" alt="" class="svg">


                    <p class="medium">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                        euismod tincidunt ut laoreet dolore magna aliquam erat. Lorem ipsum dolor sit amet, consectetuer
                        adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet
                        dolore magna aliquam erat. 1</p>

                    <a href="{{route('freestruc')}}" class="cls-ges-btn sb-para">Explore fees structure</a>
                </div>
            </div>
            <div class="cls-main-data" id="cls-main-data2"> 
                <div class="cls-data-left">
                    <img src="../img/class page/hero-img 2.png" alt="">
                </div>

                <div class="cls-data-right">
                    <img src="../img/class page/svg blue.svg" alt="" class="svg">


                    <p class="medium">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                        euismod tincidunt ut laoreet dolore magna aliquam erat. Lorem ipsum dolor sit amet, consectetuer
                        adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet
                        dolore magna aliquam erat. 2</p>

                    <a href="#" class="cls-ges-btn sb-para">Explore fees structure</a>
                </div>
            </div>
            <div class="cls-main-data" id="cls-main-data3"> 
                <div class="cls-data-left">
                    <img src="../img/class page/hero-img1.png" alt="">
                </div>

                <div class="cls-data-right">
                    <img src="../img/class page/svg blue.svg" alt="" class="svg">


                    <p class="medium">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                        euismod tincidunt ut laoreet dolore magna aliquam erat. Lorem ipsum dolor sit amet, consectetuer
                        adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet
                        dolore magna aliquam erat. 3</p>

                    <a href="#" class="cls-ges-btn sb-para">Explore fees structure</a>
                </div>
            </div>
            <div class="cls-main-data" id="cls-main-data4"> 
                <div class="cls-data-left">
                    <img src="../img/class page/hero-img 4.png" alt="">
                </div>

                <div class="cls-data-right">
                    <img src="../img/class page/svg blue.svg" alt="" class="svg">


                    <p class="medium">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                        euismod tincidunt ut laoreet dolore magna aliquam erat. Lorem ipsum dolor sit amet, consectetuer
                        adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet
                        dolore magna aliquam erat. 4</p>

                    <a href="#" class="cls-ges-btn sb-para">Explore fees structure</a>
                </div>
            </div>
            <div class="cls-main-data" id="cls-main-data5"> 
                <div class="cls-data-left">
                    <img src="../img/class page/main-img.png" alt="">
                </div>

                <div class="cls-data-right">
                    <img src="../img/class page/svg blue.svg" alt="" class="svg">


                    <p class="medium">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                        euismod tincidunt ut laoreet dolore magna aliquam erat. Lorem ipsum dolor sit amet, consectetuer
                        adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet
                        dolore magna aliquam erat. 5</p>

                    <a href="#" class="cls-ges-btn sb-para">Explore fees structure</a>
                </div>
            </div>
        </div>
    </section>


    <!-- location section  -->
    <section class="location reveal">
        <div class="location-container container">
            <div class="lctn-img"><img src="../img/class page/map.png" alt=""></div>

            <div class="location-search">
                <div class="location-data">
                    <h3>Find a Weekend School</h3>

                    <form action="" class="lctn-form">
                        <label for="city"  class="sb-para semi-bold">City</label>
                        <br>
                        <div class="select">
                            <select>
                                <option value="London">London</option>

                            </select>
                        </div>
                        <br>
                        <label for="region" class="sb-para semi-bold">Region</label>
                        <br>
                        <div class="select">
                            <select>
                                <option value="school">Lark Hall Primary School</option>
                                <option value="2">More</option>
                                <option value="3">S4fss</option>
                            </select>
                        </div>

                        <button type="submit" class="rounded-btn">Know More</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    @include("frontend.layouts.footer")


    <script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="../scrolll.js"></script>
    <script src="https://unpkg.com/scrollreveal"></script>

  <script>
    ScrollReveal().reveal('.reveal', { delay: 500 });

let btn1 = document.querySelector('.cls-btn1')
let btn2 = document.querySelector('.cls-btn2')
let btn3 = document.querySelector('.cls-btn3')
let btn4 = document.querySelector('.cls-btn4')
let btn5 = document.querySelector('.cls-btn5')
let clsMainData = document.querySelectorAll('.cls-main-data')
let btns = [btn1, btn2, btn3, btn4, btn5]

const changeDiv = (btnn,idd) => {
    clsMainData.forEach(e => {
        btnn.addEventListener('click', () => {
            btns.forEach(btn => {
                btn.classList.remove('cls-btn-active')
            })
            if(e.id === idd){
                if(window.innerWidth === '640px'){
                    e.style.display = 'flex !important'
                }
                else{
                    e.style.opacity = '1'
                e.style.display = 'grid'
                btnn.classList.add('cls-btn-active')
                }

            }else{
                e.style.display = 'none'
            }
        })
    })
    btnn.addEventListener('click', () => {
        btnn.classList.add('cls-btn-active')
        
    })

}


btn1.classList.add('cls-btn-active')
changeDiv(btn1, 'cls-main-data1')
changeDiv(btn2, 'cls-main-data2')
changeDiv(btn3, 'cls-main-data3')
changeDiv(btn4, 'cls-main-data4')
changeDiv(btn5, 'cls-main-data5')

;
  </script>
</body>

</html>