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
</head>

<body>
    @include("frontend.layouts.header")
    <!-- ------------------------- stikcy mnu -----------------------  -->
<div class="sticky-menu">
    <!-- --------------- menu ------------------  -->
    <div class="tabber">
      <label for="tab-checkbox" class="tab-menu"><img src="../img/menu img/menu.svg" class="menu-svg" alt=""></label>
      <input type="checkbox" name="tab-checkbox" id="tab-checkbox" class="tab-checkbox">
    </div>

    <!-- ---------------- navigation --------------------- -->
    <div class="sticky-navigation">
      <ul class="tab-imgs">
        <!-- 1 img  -->
        <li class="tab-img "><img src="../img/menu img/top 1.svg" class="my-svg hoverImg"  data-title-id="title-1" alt="">
          <div class="title-cont" id="title-1">
            <p class=" bold title title-right"> <img src="../img/menu img/stick.svg" class="stick" alt=""> Our Weekend School 1</p>

          <ul class="tab-ul">
            <li class="tab-li md-para"><a href="#" class="tab-link h-red">School Value</a></li>
            <li class="tab-li md-para"><a href="#" class="tab-link h-red">Newsletter</a></li>
            <li class="tab-li md-para"><a href="#" class="tab-link h-red">Photogallery</a></li>
            <li class="tab-li md-para"><a href="#" class="tab-link h-red">Testimonials & review</a></li>
          </ul>
          </div>
        </li>
        <!-- 2nd img -->
        <li class="tab-img"><img src="../img/menu img/top 2.svg" class="my-svg hoverImg" data-title-id="title-2" alt="">
          <div class="title-cont" id="title-2">
            <p class=" bold title title-right"> <img src="../img/menu img/stick.svg" class="stick" alt=""> Our Weekend School 2</p>

          <ul class="tab-ul">
            <li class="tab-li md-para"><a href="#" class="tab-link h-green">School Value</a></li>
            <li class="tab-li md-para"><a href="#" class="tab-link h-green">Newsletter</a></li>
            <li class="tab-li md-para"><a href="#" class="tab-link h-green">Photogallery</a></li>
            <li class="tab-li md-para"><a href="#" class="tab-link h-green">Testimonials & review</a></li>
          </ul>
          </div>
        </li>
        <!-- 3rd img -->
        <li class="tab-img"><img src="../img/menu img/top 3.svg" class="my-svg hoverImg" data-title-id="title-3" alt="">
          <div class="title-cont" id="title-3">
            <p class=" bold title title-right"> <img src="../img/menu img/stick.svg" class="stick" alt=""> Our Weekend School 3</p>

          <ul class="tab-ul">
            <li class="tab-li md-para"><a href="#" class="tab-link h-blue">School Value</a></li>
            <li class="tab-li md-para"><a href="#" class="tab-link h-blue">Newsletter</a></li>
            <li class="tab-li md-para"><a href="#" class="tab-link h-blue">Photogallery</a></li>
            <li class="tab-li md-para"><a href="#" class="tab-link h-blue">Testimonials & review</a></li>
          </ul>
          </div>
        </li>
        <!-- 4th img  -->
        <li class="tab-img"><img src="../img/menu img/top 4.svg" class="my-svg hoverImg"data-title-id="title-4" alt="">
          <div class="title-cont" id="title-4">
            <p class=" bold title title-right"> <img src="../img/menu img/stick.svg" class="stick" alt=""> Our Weekend School 4</p>

          <ul class="tab-ul">
            <li class="tab-li md-para"><a href="#" class="tab-link h-yellow">School Value</a></li>
            <li class="tab-li md-para"><a href="#" class="tab-link h-yellow">Newsletter</a></li>
            <li class="tab-li md-para"><a href="#" class="tab-link h-yellow">Photogallery</a></li>
            <li class="tab-li md-para"><a href="#" class="tab-link h-yellow">Testimonials & review</a></li>
          </ul>
          </div>
        </li>
      </ul>
    </div>
  </div>
  <!-- ------------------------- end -----------------------  -->
    <!-- ------------------------- main code start here -----------------------------  -->


    <section class="our-classes reveal">
        <!-- <div class="empty"></div> -->
        <div class="our-cls-search flex-layout-sp">
            <div class="our-cls-data">
                <h2 class="h-white">Our Weekend  School</h2>

                <form action="" class="cls-form">
                    <div class="select">
                        <select>
                            <option value="London">London</option>

                        </select>
                    </div>
                    
                    
                    <br>
                    <p class="white">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer
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
            <h2>The Arabic Club for Babies and <br>Toddlers TACK babies?</h2>
            <h5>Private Tution</h5>

            <p>We also cater to requests for private tuition. Private tuition is usually given at the child’s home. An
                allocated responsible parent/guardian/carer would need to be at the residence throughout the time that
                private tuition is given. Our private tuition tailors learning towards individual children and small
                group learning, including planning and review supporting the teaching.

                <span>Our current fees for private tuition are generally:</span>
            </p>

            <p class="para-detail">1:1, 55 pounds/hour + transport <br>
                2:1, 65 pounds/hour (or 32.5 pounds/child) + transport~ <br>
                larger groups - please email us to discuss further. <br>
            </p>

        </div>

        <div class="baby-right"><img src="../img/class page/baby boy.png" alt=""></div>
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

                    <a href="#" class="cls-ges-btn sb-para">Explore fees structure</a>
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