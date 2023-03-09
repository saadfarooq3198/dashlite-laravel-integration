  <!-- ---------------------------- Footer start ---------------------------  -->
  <footer class="footer reveal" style="margin-top: 5rem;">
    <div class="footer-container container">
      <!-- social media start ----------------- -->
      <a href="#header" class="upperLink"><iconify-icon icon="material-symbols:keyboard-arrow-up-rounded"></iconify-icon></a>
      <div class="f-header">
        <div class="f-logo">
          <img src="../img/home page/footer.svg" alt="footer logo">
          <div>
            <p class="s-para">{!! settings('footer', 'section_one_description') !!}</p>
          </div>
        </div>
        <ul class="social-media">
          <li class="media-icon"><a href="{{settings('footer', 'facebook')}}" class="media-link"><iconify-icon
                icon="ic:round-facebook"></iconify-icon></a></li>
          <li class="media-icon"><a href="{{settings('footer', 'twitter')}}" class="media-link"><iconify-icon
                icon="entypo-social:twitter-with-circle"></iconify-icon></a></li>
          <li class="media-icon"><a href="{{settings('footer', 'instagram')}}" class="media-link"><iconify-icon
                icon="bxl:instagram-alt"></iconify-icon></a></li>
          <li class="media-icon"><a href="{{settings('footer', 'linkedin')}}" class="media-link"><iconify-icon
                icon="entypo-social:linkedin-with-circle"></iconify-icon></a></li>
        </ul>
      </div>
      <!-- end of social media --------------------- -->

      <div class="f-middle">
        <!-- ------------ number section ------------------  -->
        <div class="number-section">
          <h5 class="semi-bold m-2">For enquiries: <span>{{settings('footer', 'for_enquiries')}}</span></h5>
          <h5 class="semi-bold m-2">For in school enquiries: <span> {{settings('footer', 'for_in_school_enquiries')}}</span></h5>

          <div class="search-div reverse">
            <h5 class="semi-bold m-2">Subscribe to Newsletter</h5>

            <form action="" class="newsletter">
              <input type="text" name="" id="search-input" placeholder="Email">
              <button type="submit" class="submit-btn">Submit <iconify-icon
                  icon="material-symbols:arrow-right-alt-rounded"></iconify-icon></button>
            </form>
          </div>
        </div>

        <!-- ------------- nav-link --------------  -->
        <ul class="f-nav">
          <h5 class="semi-bold m-2">Quick Links</h5>
          <li class="f-nav-list"><a href="#" class="f-nav-link">Home</a></li>
          <li class="f-nav-list"><a href="#" class="f-nav-link s-link">Our Commitment to
              Research & Development
            </a></li>
          <li class="f-nav-list"><a href="#" class="f-nav-link">Our Ethos</a></li>
          <li class="f-nav-list"><a href="#" class="f-nav-link">Our Curriculum</a></li>
          <li class="f-nav-list"><a href="#" class="f-nav-link">Contact Us</a></li>

        </ul>
      </div>
      
      <!-- --------------- middle end -----------------  -->
      <div class="f-footer center">
        <ul class="terms flex-box gap">
          <li class="term-list"><a href="#" class="term-link">Terms of Use</a></li>
          <li class="term-list"><a href="#" class="term-link">Privacy Policy</a></li>
          <li class="term-list"><a href="#" class="term-link">Cookie Settings</a></li>
        </ul>

        <div class="reserve">
          <p>© 2022 TACK design, all rights reserved.</p>
        </div>
      </div>
    </div>
  </footer>