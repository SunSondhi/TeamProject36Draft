@include('layouts/head')
@section('title',' About Us')

<body>
    @include('layouts/nav')

    <div class="about-us-flex-container">
        <div class="about-us-left">
            <img src="{{asset('images/hands.jpg')}}" />
        </div>
        <div class="about-us-right">
            <h1>About Us</h1>
            <p>We are Pegasus jewellers, we're a team of 7 jewellers teamed filling the void of good bespoke jewellery in today’s market.
                With a beautiful range of stock and a great team we've been selling bespoke jewels and other pieces to many people since
                we were established in 2022. We have 7 experts with different ideas and opinions we can assure that when shopping with Pegasus jewellery
                you will leave satisfied with no idea left unattended to. Our aim is to show that Pegasus jewellery is the only jewellers that anyone needs.
                <br><br>
                Pegasus was opened due to a lack of satisfaction from jewellery buyers up and down the country, we had seen that clients and customers
                we’re not well done by, and we felt that are team of experts could cater massively to this declining industry and fill the hole being left by many
                sellers. We have a team of expert craftsman who utilise cutting technology to create top quality and durable pieces of jewellery
                ready to find a piece of jewellery right for you and your needs.
                <br><br>
                We make and sell jewellery for any occasion, whether it’s that time where you need to buy a ring for that special someone, or just a loving gift
                to someone or even a treat for yourself Pegasus jewellery is here to help and will help. At Pegasus we pride ourselves on professionalism and so we put our full efforts
                into making our customers happy, therefore we can assure you that you will never leave disappointed.
            </p>
            <h1><i>Pegasus Jewellery</i></h1>
        </div>
    </div>



    @include('layouts/footer')
</body>

</html>