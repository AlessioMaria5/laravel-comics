<footer>
<div class="dc-footer">
        <div class="footer-nav">
            <div class="nav-links">
                <ul>
                    <h3>DC COMICS</h3>
                    @for ($i = 0; $i < 3; $i++)
                    <li>
                    <a href="#" class="upperText">Link</a>
                    </li>
                    @endfor

                    <ul class="inner-ul">
                    <h3>SHOP</h3>
                    @for ($i = 0; $i < 5; $i++)
                    <li>
                    <a href="#" class="upperText">Link</a>
                    </li>
                    @endfor
                </ul>

                </ul>
                <ul>
                    <h3>DC</h3>
                    @for ($i = 0; $i < 8; $i++)
                    <li>
                    <a href="#" class="upperText">Link</a>
                    </li>
                    @endfor
                </ul>

                <ul>
                    <h3>SITES</h3>
                    @for ($i = 0; $i < 8; $i++)
                    <li>
                    <a href="#" class="upperText">Link</a>
                    </li>
                    @endfor
                </ul>

            </div>
            <div class="footer-bg-img">
                <img src="{{asset('images/dc-logo-bg.png')}}" alt="">
            </div>
        </div>
        <div class="footer-signup">
            <a href="#" class="button">Sign-Up Now!</a>
            <div class="social-icons">
                <a href="#">follow us</a>
                    <ul>
                        <li><a href="#"><img src="{{asset('/images/footer-facebook.png')}}" alt=""></a></li>
                        <li><a href="#"><img src="{{asset('/images/footer-twitter.png')}}" alt=""></a></li>
                        <li><a href="#"><img src="{{asset('/images/footer-youtube.png')}}" alt=""></a></li>
                        <li><a href="#"><img src="{{asset('/images/footer-periscope.png')}}" alt=""></a></li>
                    </ul>
            </div>
        </div>
    </div>
</footer>

