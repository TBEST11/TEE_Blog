 <!-- footer -->
 <footer>
  <div class="container">
     <div class="row">
        <div class="col-lg-4 col-md-6">
           <a href="#"><img src="{{asset('uploads/tee_logo.jpg')}}" alt="#" /></a>
           <ul class="contact_information">
              <li><span><img src="{{asset('uploads/location_icon.png')}}" alt="#" /></span><span class="text_cont">#3 ABS Crescent Aboluma<br>Rivers State</span></li>
              <li><span><img src="{{asset('uploads/phone_icon.png')}}" alt="#" /></span><span class="text_cont">+2349038096507<br>+2349070813949</span></li>
              <li><span><img src="{{asset('uploads/mail_icon.png')}}" alt="#" /></span><span class="text_cont">okpaniorjimba@gmail.com<br>support@gmail.com</span></li>
           </ul>
           <ul class="social_icon">
              <li><a href="#"><i class="far fa-facebook"></i></a></li>
              <li><a href="#"><i class="far fa-twitter"></i></a></li>
              <li><a href="#"><i class="far fa-linkedin"></i></a></li>
              <li><a href="#"><i class="far fa-google-plus"></i></a></li>
           </ul>
        </div>
        <div class="col-lg-2 col-md-6">
           <div class="footer_links">
              <h3>Quick link</h3>
              <ul>
                 <li><a href="#"><i class="far fa-angle-right" aria-hidden="true"></i> Home</a></li>
                 <li><a href="#"><i class="far fa-angle-right" aria-hidden="true"></i> Features</a></li>
                 <li><a href="#"><i class="far fa-angle-right" aria-hidden="true"></i> Evens</a></li>
                 <li><a href="#"><i class="far fa-angle-right" aria-hidden="true"></i> Markrting</a></li>
                 <li><a href="#"><i class="far fa-angle-right" aria-hidden="true"></i> Blog</a></li>
                 <li><a href="#"><i class="far fa-angle-right" aria-hidden="true"></i> Testimonial</a></li>
                 <li><a href="#"><i class="far fa-angle-right" aria-hidden="true"></i> Contact</a></li>
              </ul>
           </div>
        </div>
        <div class="col-lg-3 col-md-6">
           <div class="footer_links">
              <h3>Instagram</h3>
              <ol>
                 <li><img class="img-responsive" src="{{asset('uploads/footer_blog.png')}}" alt="#" /></li>
                 <li><img class="img-responsive" src="{{asset('uploads/footer_blog.png')}}" alt="#" /></li>
                 <li><img class="img-responsive" src="{{asset('uploads/footer_blog.png')}}" alt="#" /></li>
                 <li><img class="img-responsive" src="{{asset('uploads/footer_blog.png')}}" alt="#" /></li>
              </ol>
           </div>
        </div>
        <div class="col-lg-3 col-md-6">
           <div class="footer_links">
              <h3>Contact us</h3>
              <form method="POST" action="{{route('contact.store')}}" >
               @csrf
                 <fieldset>
                    <div class="field">
                       <input type="text" name="fullname" placeholder="Your Name" required="" />
                    </div>
                    <div class="field">
                       <input type="email" name="email" placeholder="Email" required="" />
                    </div>
                    <div class="field">
                       <input type="text" name="subject" placeholder="Subject" required="" />
                    </div>
                    <div class="field">
                       <textarea placeholder="Message" name="message"></textarea>
                    </div>
                    <div class="field">
                       <div class="center">
                          <button type="submit" class="reply_bt">Send</button>
                       </div>
                    </div>
                 </fieldset>
              </form>
           </div>
        </div>
     </div>
  </div>
</footer>
<div class="cpy">
  <div class="container">
     <div class="row">
        <div class="col-md-12">
           <p>Copyright © 2024 Design by <a href="#">TBEST</a></p>
        </div>
     </div>
  </div>
</div>
<!-- end footer -->