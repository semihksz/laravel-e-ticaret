<footer class="site-footer border-top">
    <div class="container">
        <div class="row d-flex justify-content-center mx-auto ">
            <div class="col-md-4 col-sm-4 mb-5 ">
                <div class="col-md-12">
                    <h3 class="footer-heading mb-4">Menus</h3>
                </div>
                <div class="col-md-6 col-sm-4">
                    <ul class="list-unstyled">
                        <li><a href="{{ route('aboutus') }}">About Me</a></li>
                        <li><a href="{{ route('product') }}">Product</a></li>
                        <li><a href="{{ route('contact') }}">Contact</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-md-4 col-sm-4">
                <div class="block-5 mb-5">
                    <h3 class="footer-heading mb-4">Contact Info</h3>
                    <ul class="list-unstyled">
                        <li class="address">{{ $settings['Address'] }}</li>
                        <li class="phone"><a href="tel://23923929210">{{ $settings['Phone'] }}</a></li>
                        <li class="email">{{ $settings['E-Mail'] }}</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="block-5 mb-5">
                    <form action="#" method="post">
                        <label for="callyou" class="footer-heading">Let's Call You</label>
                        <div class="form-group">
                            <input type="text" class="form-control mb-2" id="name_callyou"
                                placeholder="Name Surname">
                            <input type="text" class="form-control mb-2" id="phone_callyou"
                                placeholder="Phone Number">
                            <input type="submit" class="btn btn-sm btn-primary" value="Send">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
            <div class="col-md-12">
                <p>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;
                    {{ date('Y') }} All Rights Reserved.
                </p>
            </div>
        </div>
    </div>
</footer>
