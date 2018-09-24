    <footer id="footer">
      <div class="inr">
        <div class="col-two">
            <div class="l">
                <img src="/img/flogo.png" width="88" height="29" ="M&S Partners" />
            </div>
            <div class="r">
                <ul>
                   <li class="icon-phone">+81-(0)3-6420-0297</li>
                   <li class="icon-fax">+81-(0)3-3495-0811</li>
                </ul>
            </div>
        </div>
        <div id="footer-right" class="col-two">
            <div class="col-two footer-nav">
                <ul id="footer-menus" class="footer-menu">
                    <li class="on">About
                        <ul>
                            <li><a href="/about/">About</a></li>
                            <li><a href="/patent-attorneys/">Patent Attorneys</a></li>
                            <li class="line"></li>
                        </ul>
                    </li>
                    <li>Services
                        <ul>
                            <li><a href="/services/">Services</a></li>
                            <li><a href="/three-core-skills/">Three Core Skills</a></li>
                            <li class="line"></li>
                        </ul>
                    </li>
                    <li>Rules
                        <ul>
                            <li><a href="/privacy-policy/">Privacy Policy</a></li>
                            <li class="line"></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="col-two footer-contact">
                <a class="btn default" href="/contact/">Contact</a>
              </div>
        </div>
      </div>
        <div id="footer-canvas"></div>
<div class="copyright">
<p>&copy; 2018 M&S Partners.</p>
</div>
    </footer>

                    <div id="particles-js"></div>
                    <div class="count-particles"><span class="js-count-particles"></span>particles</div>
				</div>

                <?php
                    if (get_locale() == 'en_US' && get_post_status(73) == 'publish') {
                        echo '<div class="st-content-inner"><div id="st-trigger-effects"><button data-effect="st-effect-14"><img src="/img/bnr-recruit-jp.png" width="320" height="auto" alt="" /><p>現在、弁理士を1名募集しております。</p></button></div></div>';
                    } elseif (get_locale() == 'ja' && get_post_status(71) == 'publish') {
                        echo '<div class="st-content-inner"><div id="st-trigger-effects"><button data-effect="st-effect-14"><img src="/img/bnr-recruit-jp.png" width="320" height="auto" alt="" /><p>現在、弁理士を1名募集しております。</p></button></div></div>';
                    }
                ?>

                <div class="st-menu st-effect-14" id="menu-14">
                <?php
                    if (get_locale() == 'en_US' && get_post_status(73) == 'publish') {
                        $post = get_post(73, 'OBJECT', 'raw');
                        $title = apply_filters( 'the_title',$post->post_title);
                        $content = apply_filters( 'the_content',$post->post_content);
                        echo "<section class='recruit-wrap'><h1>" . $title . "</h1><h2>採用情報</h2>";
                        echo '<div class="recruit-content"><img id="recruit-close" src="/img/icon-close.png" width="" height=""/>' . $content . "</div></section>";
                    } elseif (get_locale() == 'ja' && get_post_status(71) == 'publish') {
                        $post = get_post(71, 'OBJECT', 'raw');
                        $title = apply_filters( 'the_title',$post->post_title);
                        $content = apply_filters( 'the_content',$post->post_content);
                        echo "<section class='recruit-wrap'><h1>" . $title . "</h1><h2>採用情報</h2>";
                        echo '<div class="recruit-content"><img id="recruit-close" src="/img/icon-close.png" width="" height=""/>' . $content . "</div></section>";
                    }
                ?>

				</div>
			</div>
		</div>
    <script src="//cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js" type="text/javascript" charset="utf-8"></script>
    <script src="//threejs.org/examples/js/libs/stats.min.js"></script>
    <script src="//threejs.org/build/three.min.js" type="text/javascript" charset="utf-8"></script>
    <script src="//threejs.org/examples/js/renderers/Projector.js" type="text/javascript" charset="utf-8"></script>
    <script src="/js/modernizr.custom.js"></script>
    <script src="/js/footerCanvas.js"></script>
    <script src="/js/classie.js"></script>
    <script src="/js/sidebarEffects.js"></script>
    <script src="/js/main.js"></script>
    <?php
        if(is_home()) {
            echo '<script src="/js/canvas.js"></script><script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyBgKpa4q1oNczif6s2ezayy6ULnAw1xHaI"></script><script type="text/javascript" src="/js/gmap.js"></script><script type="text/javascript"> window.onload = initialize()</script>';
        } elseif( is_page_template('ja_about.php') || is_page_template('en_about.php')) {
            echo '<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyBgKpa4q1oNczif6s2ezayy6ULnAw1xHaI"></script><script type="text/javascript" src="/js/gmap.js"></script><script type="text/javascript"> window.onload = initialize()</script>';
        } elseif (is_page_template('en_services.php') || is_page_template('ja_services.php') ) {
            echo '<script src="/js/canvas.js"></script>';
        }
    ?>
    <?php wp_footer(); ?>
</body>
</html>
