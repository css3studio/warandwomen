        </article>
        <footer class="py-10 border-t border-neutral-400">
            <div class="container flex justify-between">
                <div>
                    <a class="brand block mb-6" href="/">
                        <img class="black lg:h-14 h-10" src="/themes/AvantTheme/images/logo.png" alt="전쟁과여성인권 아카이브">
                    </a>
                    <div class="text-xs text-neutral-400">
                        (재)일본군성노예제문제해결을위한정의기억연대<br>
                        고유번호 637-82-00114 | 대표자 이나영전화 02-365-4016 <span class="hidden lg:inline">|</span><br class="block lg:hidden"> 팩스 02-365-4017 <span class="lg:hidden inline">|</span><br class="lg:block hidden">
                        이메일 <a href="mailto:info@womenandwar.net">info@womenandwar.net</a>  <span class="hidden lg:inline">|</span><br class="block lg:hidden"> 주소 서울시 마포구 월드컵북로 11길12, 1층(03967)
                    </div>
                </div>
                <nav class="hidden lg:block">
                    <ul class="navigation-footer">
                        <li class="active">
                            <a href="/items/intro">기록</a>
                            <ul>
                                <li>
                                    <a href="/items/intro">기록찾기</a>
                                </li>
                                <li class="active">
                                    <a href="/find?query=&amp;site=1">일반검색</a>
                                </li>
                                <li>
                                    <a href="/find/advanced">상세검색</a>
                                </li>
                                <li>
                                    <a href="/items/googlesearch">웹검색</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="/items/person">정보</a>
                            <ul>
                                <li>
                                    <a href="/items/person">인물정보</a>
                                </li>
                                <li>
                                    <a href="/items/group">단체정보</a>
                                </li>
                                <li>
                                    <a href="/items/history">연표정보</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="/collections/browse">컬렉션</a>
                            <ul>
                                <li>
                                    <a href="/collections/browse">전체보기</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="/exhibits/browse">콘텐츠</a>
                            <ul>
                                <li>
                                    <a href="/exhibits/browse">전체보기</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="/contribute">참여</a>
                            <ul>
                                <li>
                                    <a href="/contribute">기록기증</a>
                                </li>
                                <li>
                                    <a href="/event">이벤트</a>
                                </li>
                                <li>
                                    <a href="/donate">후원</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="/about-01">소개</a>
                            <ul>
                                <li>
                                    <a href="/about-01">아카이브 소개</a>
                                </li>
                                <li>
                                    <a href="/guide-01">아카이브 이용안내</a>
                                </li>
                                <li>
                                    <a href="/stat-01">아카이브 현황</a>
                                </li>
                            </ul>
							<!-- 
                            <ul>
                                <li>
                                    <a href="/about-01">소개</a>
                                </li>
                                <li>
                                    <a href="/about-02">구축과정</a>
                                </li>
                                <li>
                                    <a href="/guide-01">이용방법</a>
                                </li>
                                <li>
                                    <a href="/guide-02">FAQ</a>
                                </li>
                                <li>
                                    <a href="/contact">문의하기</a>
                                </li>
                                <li>
                                    <a href="/notice">공지사항</a>
                                </li>
                                <li>
                                    <a href="/stat-01">소장정보</a>
                                </li>
                                <li>
                                    <a href="/stat-02">이용현황</a>
                                </li>
                            </ul>
							// -->
                        </li>
                    </ul>
                </nav>
            </div>
        </footer>
        <!-- 이전 코드
       <footer id="footer" role="contentinfo">
            <div id="footer-text">
                <?php
                $avantLogicLink = "Created by <a href='https://avantlogic.com/' target='_blank' title='AvantLogic Corporation' rel='noreferrer noopener'>AvantLogic</a>";
                $loginUrl = url('users/login');
                $logoutUrl = url('users/logout');

                // Emit both login and logout links, but only one will appear depending whether the 'logged-out'
                // or the 'logged-in' class has been dynamically emitted by AvantAdmin::emitDynamicCss().
                $loginLogoutLink = "<a class='logged-out' href='$loginUrl'>Login</a><a class='logged-in' href='$logoutUrl'>Logout</a>";

                $copyright = "© " . date("Y");
                $siteTitle = get_option('site_title');
                $footer = "$copyright $siteTitle — $avantLogicLink — $loginLogoutLink";

                $themeOptionFooterText = get_theme_option('Footer Text');
                if ($themeOptionFooterText)
                {
                    $footer = "$themeOptionFooterText<br/>";
                }
                else
                {
                    $footer = "$copyright $siteTitle";
                }
                $footer = "<div>$footer</div><div id='footer-loginout'><span>$avantLogicLink — $loginLogoutLink</span></div>";
                echo $footer;

                fire_plugin_hook('public_footer', array('view'=>$this));
                ?>
			</div>
        </footer>
        -->
    </div><!-- end wrap -->

    <script>
    var state = false;
    jQuery(document).ready(function() {
        Omeka.showAdvancedForm();
        Omeka.skipNav();
        Avant.megaMenu();
		jQuery("#nav-toggle").click(function(){
			jQuery("#top-nav").slideToggle(function(){ if (state) {jQuery(this).removeAttr( 'style' )}; state = ! state; } );
		});
		jQuery("#menu").show();
    });
    </script>

</body>
</html>
