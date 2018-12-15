<!-- Start contact Area -->
<section class="contact-area" id="contact">
    <div class="container-fluid">
        <div class="row d-flex justify-content-end align-items-center">
            <div class="col-lg-5 col-md-12 contact-left no-padding">
                <img class="img-fluid" src="./frontend/img/contact-img.jpg" alt="">
            </div>
            <div class="col-lg-7 col-md-12 contact-right no-padding">
                <h2 class="py-3">Send me Message</h2>
                <form class="booking-form" id="myForm" action="contact.php">
                    <div class="row">
                        <div class="col-lg-12 d-flex flex-column">
                            <input name="name" placeholder="Your name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your name'" class="form-control mt-20" required="" type="text">
                        </div>
                        <div class="col-lg-12 d-flex flex-column">
                            <input name="email" placeholder="Enter email address" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" class="common-input mt-10" required="" type="email">
                        </div>									
                        <div class="col-lg-12 flex-column">
                            <textarea class="form-control mt-20" name="message" placeholder="Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'" required=""></textarea>
                        </div>
                        
                        <div class="col-lg-12 d-flex justify-content-end send-btn">
                            <button class="submit-btn primary-btn mt-20 text-uppercase ">Sent<span class="lnr lnr-arrow-right"></span></button>
                        </div>

                        <div class="alert-msg"></div>		
                    </div>
                </form>
                </div>
            </div>						
        </div>
    </div>	
</section>
<!-- End contact Area -->