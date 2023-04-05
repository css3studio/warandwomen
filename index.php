<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="">
	<meta name="description" content="">
	<meta property="og:title" content="">
	<meta property="og:description" content="">
	<meta property="og:url" content="">
	<meta property="og:type" content="website">
	<meta property="og:image" content=""> 
	<?php
		if (isset($title)) { $titleParts[] = strip_formatting($title); }
		$titleParts[] = option('site_title');
	?>
	<title><?php echo implode(' &middot; ', $titleParts); ?></title>
	<?php //fire_plugin_hook('public_head', array('view'=>$this)); 활성화 시 사용 플러그인별 css와 js 로드  ?>
    <link type="text/css" rel="stylesheet" media="all" href="<?php echo html_escape(url('themes/AvantTheme/css/iconfonts.css?')); ?><?php echo date('Y h:i:s'); ?>">
    <link type="text/css" rel="stylesheet" media="all" href="<?php echo html_escape(url('themes/AvantTheme/css/style-build.css?')); ?><?php echo date('Y h:i:s'); ?>">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <link type="text/css" rel="stylesheet" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link type="text/css" rel="stylesheet" href="//cdn.jsdelivr.net/npm/xeicon@2.3.3/xeicon.min.css">
    <link type="text/css" rel="stylesheet" href="<?php echo html_escape(url('themes/AvantTheme/css/jquery.fullpage.css?')); ?><?php echo date('Y h:i:s'); ?>">
    <script type="text/javascript" src="<?php echo html_escape(url('themes/AvantTheme/javascripts/jquery.fullpage.min.js?')); ?><?php echo date('Y h:i:s'); ?>"></script>
    <script type="text/javascript" src="<?php echo html_escape(url('themes/AvantTheme/javascripts/script.js?')); ?><?php echo date('Y h:i:s'); ?>"></script>
</head>

<body>
    <div id="wrap">

        <header id="header" role="banner" class="fixed w-full lg:pt-10 pt-[34px] bg-white z-20">
            <div class="inner">
                <div class="container lg:h-14 h-11 flex justify-between items-center relative z-10">
                    <a class="brand" href="<?php echo html_escape(url('/')); ?>">
                        <img class="black lg:h-[46px] h-10 max-w-none" src="<?php echo img('logo.png'); ?>" alt="전쟁과여성인권 아카이브">
                        <img class="white lg:h-[46px] h-10 max-w-none" src="<?php echo img('logo-white.png'); ?>" alt="전쟁과여성인권 아카이브">
                    </a>
                    <a href="#" class="btn-menu-mobile  w-7 h-7 lg:hidden text-2xl flex items-center justify-center" title="모바일메뉴 열기/닫기">
                        <i class="xi-bars"></i>
                        <i class="xi-close"></i>
                    </a>
                    <nav id="top-nav" role="navigation" class="flex lg:items-center lg:flex-row flex-col lg:static absolute">
                        <?php echo public_nav_main(); ?>
                        <ul class="functions lg:ml-[12.5rem] flex gap-2 mt-4 lg:mt-0">
                            <li class="w-1/2 lg:w-auto">
                                <a href="<?php echo html_escape(url('find?query=&site=1')); ?>" class="lg:h-12 lg:w-12 h-10 flex justify-center items-center border border-white lg:border-0 hover:text-primary" title="검색">
                                    <span class="lg:hidden inline text-white">검색</span>
                                    <i class="xi-search text-2xl !hidden lg:!inline"></i>
                                </a>
                            </li>
                            <li class="w-1/2 lg:w-auto relative">
                                <a href="<?php echo html_escape(url('guest-user/user/update-account')); ?>" class="menu-my lg:h-12 lg:w-12 h-10 flex justify-center items-center border border-white lg:border-0 hover:text-primary"  title="마아페이지">
                                    <span class="lg:hidden inline text-white">마아페이지</span>
                                    <i class="xi-user-o text-2xl !hidden lg:!inline"></i>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="bg-menu"></div>
                <div class="absolute left-0 top-[104px] w-full hidden" id="menu-my-2depth">
                    <div class="container relative">
                        <ul class="absolute right-0 top-0 rounded-lg bg-neutral-50 overflow-hidden z-50">
							<?php 
								$user = current_user();
								$isLoggedIn = !empty($user);     
							?>      
							<?php 
								//if($user->role == 'super' || $user->role == 'admin' || $user->role == 'researcher')
								if ($isLoggedIn) {    
							?>
                            <li><a class="block text-neutral-900 text-sm py-2 px-3 hover:bg-neutral-200 break-keep" href="<?php echo html_escape(url('guest-user/user/update-account')); ?>">마이페이지</a></li>
                            <li><a class="block text-neutral-900 text-sm py-2 px-3 hover:bg-neutral-200 break-keep" href="<?php echo html_escape(url('users/logout')); ?>">로그아웃</a></li>
							<?php 
								} else {
							?>
                            <li><a class="block text-neutral-900 text-sm py-2 px-3 hover:bg-neutral-200 break-keep" href="<?php echo html_escape(url('users/login')); ?>">로그인</a></li>
                            <li><a class="block text-neutral-900 text-sm py-2 px-3 hover:bg-neutral-200 break-keep" href="<?php echo html_escape(url('guest-user/user/register')); ?>">회원가입</a></li>
							<?php 
								} 
							?>
                        </ul>
                    </div>

                </div>

            </div>
        </header>

        <article id="content" role="main" tabindex="-1" class="pt-0">

            <div id="fullpage">
                <!--아카이브 섹션-->
                <div class="section relative bg-[url('<?php echo img('banner-main01.png'); ?>')] bg-cover" style="background-image: url(<?php echo img('banner-main01.jpg'); ?>); background-repeat: no-repeat; background-size: cover;">
                    <div class="container text-white">
                        <h2 class="lg:text-6xl text-4xl font-bold lg:mb-6 mb-4">정의기억연대아카이브</h2>
                        <p class="lg:text-xl text-base lg:mb-11 mb-10">일본군 성노예제 문제해결을 위한 기억투쟁</p>
                        <ul class="flex lg:gap-12 gap-7 lg:text-3xl text-xl font-bold">
                            <li><a href="<?php echo html_escape(url('find/intro')); ?>" class="flex hover:text-primary">기록<i class="xi-angle-right-min ml-1 lg:text-[2.2rem] text-2xl"></i></a></li>
                            <li><a href="<?php echo html_escape(url('items/history?search=&advanced[0][joiner]=and&advanced[0][element_id]=74&advanced[0][type]=is+exactly&advanced[0][terms]=정보사전-연표')); ?>" class="flex hover:text-primary">시간<i class="xi-angle-right-min ml-1 lg:text-[2.2rem] text-2xl"></i></a></li>
                            <li><a href="<?php echo html_escape(url('exhibits/browse')); ?>" class="flex hover:text-primary">이야기<i class="xi-angle-right-min ml-1 lg:text-[2.2rem] text-2xl"></i></a></li>
                        </ul>
                    </div>
                    <div class="absolute left-1/2 -translate-x-1/2 lg:bottom-7 bottom-0 text-lg text-center text-white">
                        <p>아래로 스크롤</p>
                        <i class="xi-angle-down-min text-4xl animate-bounce"></i>
                    </div>
                </div>
                <!--//아카이브 섹션-->
                <!--컬렉션 섹션-->
                <div class="section">
                    <div class="container">
                        <h2 class="lg:text-5xl text-3xl font-bold lg:mb-10 mb-8">컬렉션</h2>
                        <div class="main-collection">
                            <ul class="text-white lg:grid grid-cols-2 gap-8 lg:max-h-[624px] lg:h-[calc(100vh-490px)] w-[343px] lg:w-auto">
                                <li class="relative mr-4 lg:mr-0 overflow-hidden lg:row-span-2">
                                    <img class="w-full lg:aspect-none aspect-[343/337] object-cover" src="<?php echo img('bg-collection-main01.png'); ?>" alt="">
                                    <dl class="absolute top-0 left-0 lg:py-10 py-8 lg:px-8 px-6">
                                        <dt class="lg:text-4xl text-2xl font-bold lg:mb-8 mb-6">아시아연대회의 컬렉션</dt>
                                        <dd><a class="hover:underline" href="<?php echo html_escape(url('collections/show/1')); ?>">컬렉션 보기</a></dd>
                                    </dl>
                                </li>
                                <li class="relative mr-4 lg:mr-0 overflow-hidden">
                                    <img class="w-full lg:aspect-none aspect-[343/337] object-cover" src="<?php echo img('bg-collection-main02.png'); ?>" alt="">
                                    <dl class="absolute top-0 left-0 lg:py-10 py-8 lg:px-8 px-6">
                                        <dt class="lg:text-4xl text-2xl font-bold lg:mb-8 mb-6">수요시위 컬렉션</dt>
                                        <dd><a class="hover:underline" href="<?php echo html_escape(url('collections/show/2')); ?>">컬렉션 보기</a></dd>
                                    </dl>
                                </li>
                                <li class="relative mr-4 lg:mr-0 overflow-hidden">
                                    <img class="w-full lg:aspect-none aspect-[343/337] object-cover" src="<?php echo img('bg-collection-main03.png'); ?>" alt="">
                                    <dl class="absolute top-0 left-0 lg:py-10 py-8 lg:px-8 px-6">
                                        <dt class="lg:text-4xl text-2xl font-bold lg:mb-8 mb-6">법적책임운동규명 컬렉션</dt>
                                        <dd><a class="hover:underline" href="<?php echo html_escape(url('collections/show/3')); ?>">컬렉션 보기</a></dd>
                                    </dl>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--//컬렉션 섹션-->
                <!--정보 섹션-->
                <div class="section">
                    <div class="container">
                        <h2 class="lg:text-5xl text-3xl font-bold lg:mb-10 mb-8">정보</h2>
                        <div class="main-info">
                            <ul class="text-white lg:grid grid-cols-3 gap-8 lg:max-h-[624px] lg:h-[calc(100vh-490px)] w-[343px] lg:w-auto">
                                <li class="relative mr-4 lg:mr-0 overflow-hidden">
                                    <img class="lg:h-full h-[499px] object-cover" src="<?php echo img('bg-collection-main03.png'); ?>" alt="">
                                    <a href="<?php echo html_escape(url('items/person?search=&advanced[0][joiner]=and&advanced[0][element_id]=74&advanced[0][type]=is+exactly&advanced[0][terms]=정보사전-인물')); ?>" class="absolute bottom-0 left-0 lg:py-8 lg:px-6 py-6 px-4 w-full flex justify-between">
                                        <span class="lg:text-4xl text-2xl font-bold">인물정보</span>
                                        <i class="xi-angle-right-min ml-1 lg:text-[2.2rem] text-2xl relative lg:-top-0.5"></i>
                                    </a>
                                </li>
                                <li class="relative mr-4 lg:mr-0 overflow-hidden">
                                    <img class="lg:h-full h-[499px] object-cover" src="<?php echo img('bg-collection-main02.png'); ?>" alt="">
                                    <a href="<?php echo html_escape(url('items/group?search=&advanced[0][joiner]=and&advanced[0][element_id]=74&advanced[0][type]=is+exactly&advanced[0][terms]=정보사전-조직')); ?>" class="absolute bottom-0 left-0 lg:py-8 lg:px-6 py-6 px-4 w-full flex justify-between">
                                        <span class="lg:text-4xl text-2xl font-bold">조직정보</span>
                                        <i class="xi-angle-right-min ml-1 lg:text-[2.2rem] text-2xl relative lg:-top-0.5"></i>
                                    </a>
                                </li>
                                <li class="relative mr-4 lg:mr-0 overflow-hidden">
                                    <img class="lg:h-full h-[499px] object-cover" src="<?php echo img('bg-collection-main01.png'); ?>" alt="">
                                    <a href="<?php echo html_escape(url('items/history?search=&advanced[0][joiner]=and&advanced[0][element_id]=74&advanced[0][type]=is+exactly&advanced[0][terms]=정보사전-연표')); ?>" class="absolute bottom-0 left-0 lg:py-8 lg:px-6 py-6 px-4 w-full flex justify-between">
                                        <span class="lg:text-4xl text-2xl font-bold">연표정보</span>
                                        <i class="xi-angle-right-min ml-1 lg:text-[2.2rem] text-2xl relative lg:-top-0.5"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--//정보 섹션-->

                <!--콘텐츠 섹션-->
                <div class="section">
                    <div class="container">
                        <h2 class="lg:text-5xl text-3xl font-bold lg:mb-10 mb-8">콘텐츠</h2>
                        <div class="main-contents">
                            <ul class="lg:grid grid-cols-3 gap-8 w-[343px] lg:w-auto">
                                <li class="mr-4 lg:mr-0">
                                    <a href="<?php echo html_escape(url('exhibits/show/e1')); ?>" class="block group">
                                        <span class="thumb block overflow-hidden mb-4">
                                            <img class="w-full lg:aspect-[405/241] aspect-[343/241] object-cover" src="<?php echo img('bg-collection-main01.png'); ?>" alt="">
                                        </span>
                                        <b class="block text-2xl font-bold mb-4 group-hover:underline">아시아연대회의 결의문 속 주요아젠다와 그 변화</b>
                                        <span class="text-neutral-700 line-clamp-3">아시아연대회의는 일본군 '위안부' 문제 관련 사안을 아시아 피해국들이 공동으로 고민하고 해결하기 위해 1992년 설립됐다. 지난 30여년 간 진행된 시아연대회의에서는 일본군 '위안부'라는 용어 사용 문제부터 강제성 문제, 법적 배상 문제, 책임자 처벌 요구, 역사왜곡 대응, 군국주의 대응, 여성폭력 이슈로의 확대와 연대, 인권운동으로서의 자리매김, 전시(戰時) 성폭력 문제에 대한 국제적 관심 조성, 2000년 법정 등 아시아 여성들이 일본군 '위안부' 문제 해결을 위해 연대해왔던 활동들에 중대한 영향을 미치면서 전개되었다. 제1차(1992년)부터 제15차(2018년)까지의 결의문 속에 담긴 각 시기별 주요 아젠다를 확인하고, 이 아젠다가 각국 운동과 활동에 미친 구체적인 영향을 살펴보고자 한다</span>
                                    </a>
                                </li>
                                <li class="mr-4 lg:mr-0">
                                    <a href="<?php echo html_escape(url('exhibits/show/e2')); ?>" class="block group">
                                        <span class="thumb block overflow-hidden mb-4">
                                            <img class="w-full lg:aspect-[405/241] aspect-[343/241] object-cover" src="<?php echo img('bg-collection-main02.png'); ?>" alt="">
                                        </span>
                                        <b class="block text-2xl font-bold mb-4 group-hover:underline">[기록 자세히 보기] 제3차 아시아연대회의 대자보</b>
                                        <span class="text-neutral-700 line-clamp-3">제3차 아시아연대회의는 전후 50년을 맞이하면서 1995년 3월에 서울에서 ‘전후 50년, 일본군위안부 문제는 왜 해결되지 않았는가’라는 주제로 개최되었다. 일본 정부의 국민모금 구상안이 회의의 주요 쟁점으로 떠올랐고, 아시아 피해국 전체가 국민기금에 반대하는 입장으로 강하게 결속했다. 대회 장소 로비에 걸려있던 대자보 속에는 한국, 일본, 필리핀, 타이완 등에서 온 참석자들의 굳은 결속과 문제해결을 위한 의지가 담겨져 있다.</span>
                                    </a>
                                </li>
                                <li class="mr-4 lg:mr-0">
                                    <a href="<?php echo html_escape(url('exhibits/show/e3')); ?>" class="block group">
                                        <span class="thumb block overflow-hidden mb-4">
                                            <img class="w-full lg:aspect-[405/241] aspect-[343/241] object-cover" src="<?php echo img('bg-collection-main03.png'); ?>" alt="">
                                        </span>
                                        <b class="block text-2xl font-bold mb-4 group-hover:underline">아시아연대회의와 증언자들</b>
                                        <span class="text-neutral-700 line-clamp-3">아시아연대회의는 아시아 각국 피해생존자의 증언을 경청하고 이를 문제해결 운동의 의제설정과 향후 활동에 반영코자 하였다. 제1회 회의에서 한국의 노청자, 김복동의 증언 이후 제15차 회의까지 피해생존자의 증언과 발언은 꾸준히 이어오고 있다. 아시아연대회의에서 증언한 피해생존자들의 증언 내용이 다른 활동에서의 증언들과 다른 지점을 발견하고, 문서(텍스트)와 사진, 영상 등 다양한 매체에 담긴 증언을 일별할 수 있도록 한다</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--//콘텐츠 섹션-->

                <div class="section fp-auto-height">
                    <footer class="py-10 bg-neutral-100">
                        <div class="container flex justify-between">
                            <div>
                                <a class="brand block mb-6" href="<?php echo html_escape(url('/')); ?>">
                                    <img class="black lg:h-14 h-10" src="<?php echo img('logo.png'); ?>" alt="전쟁과여성인권 아카이브">
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
										<a href="<?php echo html_escape(url('find/intro')); ?>">기록</a>
										<ul>
											<li>
												<a href="<?php echo html_escape(url('find/intro')); ?>">기록찾기</a>
											</li>
											<!-- li class="active">
												<a href="<?php //echo html_escape(url('find?query=&amp;site=1')); ?>">일반검색</a>
											</li>
											<li>
												<a href="<?php //echo html_escape(url('find/advanced')); ?>">상세검색</a>
											</li>
											<li>
											   <a href="<?php //echo html_escape(url('find/websearch#gsc.tab=0&gsc.q=일본군%20성노예%20피해자&gsc.sort=')); ?>">웹검색</a>
											</li -->
										</ul>
									</li>
									<li>
										<a href="<?php echo html_escape(url('items/person?search=&advanced[0][joiner]=and&advanced[0][element_id]=74&advanced[0][type]=is+exactly&advanced[0][terms]=정보사전-인물')); ?>">정보</a>
										<ul>
											<li>
												<a href="<?php echo html_escape(url('items/person?search=&advanced[0][joiner]=and&advanced[0][element_id]=74&advanced[0][type]=is+exactly&advanced[0][terms]=정보사전-인물')); ?>">인물정보</a>
											</li>
											<li>
												<a href="<?php echo html_escape(url('items/group?search=&advanced[0][joiner]=and&advanced[0][element_id]=74&advanced[0][type]=is+exactly&advanced[0][terms]=정보사전-조직')); ?>">조직정보</a>
											</li>
											<li>
												<a href="<?php echo html_escape(url('items/history?search=&advanced[0][joiner]=and&advanced[0][element_id]=74&advanced[0][type]=is+exactly&advanced[0][terms]=정보사전-연표')); ?>">연표정보</a>
											</li>
										</ul>
									</li>
									<li>
										<a href="<?php echo html_escape(url('collections/browse')); ?>">컬렉션</a>
										<ul>
											<li>
												<a href="<?php echo html_escape(url('collections/browse')); ?>">전체보기</a>
											</li>
										</ul>
									</li>
									<li>
										<a href="<?php echo html_escape(url('exhibits/browse')); ?>">콘텐츠</a>
										<ul>
											<li>
												<a href="<?php echo html_escape(url('exhibits/browse')); ?>">전체보기</a>
											</li>
										</ul>
									</li>
									<li>
										<a href="<?php echo html_escape(url('contribute')); ?>">참여</a>
										<ul>
											<li>
												<a href="<?php echo html_escape(url('contribute')); ?>">기록기증</a>
											</li>
											<li>
												<a href="<?php echo html_escape(url('event')); ?>">이벤트</a>
											</li>
											<li>
												<a href="<?php echo html_escape(url('donate')); ?>">후원</a>
											</li>
										</ul>
									</li>
									<li>
										<!-- 
										<a href="<?php //echo html_escape(url('about-01')); ?>">소개</a>
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
										<a href="<?php echo html_escape(url('about-01')); ?>">소개</a>
										<ul>
											<li>
												<a href="<?php echo html_escape(url('about-01')); ?>">소개</a>
											</li>
											<li>
												<a href="<?php echo html_escape(url('guide-01')); ?>">이용안내</a>
											</li>
											<li>
												<a href="<?php echo html_escape(url('stat-01')); ?>">현황</a>
											</li>
										</ul>
									</li>
								</ul>
                            </nav>
                        </div>
                    </footer>
                </div>
            </div>

        </article>

    </div><!-- end wrap -->

</body>

</html>