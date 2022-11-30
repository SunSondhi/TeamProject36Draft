<!DOCTYPE html>
<html lang="en">

@section('title','| Basket')
@include('layouts/head')

<body>
    @include('layouts/nav')

    <div class="container">
        <div class="contact-parent">
            <div class="contact-child child1">
                <p>
                    <i class="fa fa-map-marker"></i> Address <br />
                    <span> My Moms House
                        <br />
                        London, UK
                    </span>
                </p>
                <p>
                    <i class="fa fa-phone"></i> Let's Talk <br />
                    <span> 01234567891</span>
                </p>
                <p>
                    <i class="fa fa-envelope"></i> General Support <br />
                    <span>contact@pegasusjewel.com</span>
                </p>
            </div>
            <div class="contact-child child2">
                <div class="inside-contact">
                    <h2>Contact Us</h2>
                    <h3>
                        <span id="confirm">
                    </h3>
                    <p>Name *</p>
                    <input id="txt_name" type="text" Required="required">
                    <p>Email *</p>
                    <input id="txt_email" type="text" Required="required">
                    <p>Phone *</p>
                    <input id="txt_phone" type="text" Required="required">
                    <p>Subject *</p>
                    <input id="txt_subject" type="text" Required="required">
                    <p>Message *</p>
                    <textarea id="txt_message" rows="4" cols="20" Required="required"></textarea>
                    <input type="submit" id="btn_send" value="SEND">
                </div>
            </div>
        </div>
    </div>
    @include('layouts/footer')
</body>

</html>