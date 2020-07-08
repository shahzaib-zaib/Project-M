<?php include 'header.php'; ?>
<div class="page-heading">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page-heading-content">
                    <span><a href="index.php">Home</a>/<em>Contact Us</em></span>
                    <h1>Contact Us</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="contact-us">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="left-info">
                    <ul>
                        <li>
                            <i class="fa fa-phone"></i>
                            <h6>Phone Number</h6>
                            <span>+123 4567 8910</span>
                        </li>
                        <li>
                            <i class="fa fa-envelope"></i>
                            <h6>Email Address</h6>
                            <span>info@maheenrizvi.com</span>
                        </li>
                        <li>
                            <i class="fa fa-globe"></i>
                            <h6>Website</h6>
                            <span>www.drmaheenrizvi.com</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-8">
                <form id="ajax-contact" method="post" action="#">
                    <div class="input-field">
                        <input type="text" class="form-control" name="name" id="name" required placeholder="Name">
                    </div>
                    <div class="input-field">
                        <input type="email" class="form-control" name="email" id="email" required placeholder="Email">
                    </div>
                    <div class="input-field">
                        <textarea class="form-control" name="message" id="message" required placeholder="Message"></textarea>
                    </div>
                    <button class="button main-button" type="submit">send message</button>
                </form>
                <div id="form-messages" class="mt-3"></div>
            </div>
        </div>
    </div>
</div>
<div class="google-map">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div id="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d23481.794658246406!2d21.09932224141022!3d42.635403966818785!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x13549de02b95feb3%3A0x40df47fa2a0e9612!2sPrishtina!5e0!3m2!1sen!2s!4v1504188040281" height="520" style="border:none; background:transparent; overflow:hidden; width:100%;"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>