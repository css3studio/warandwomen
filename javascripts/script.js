/*
Theme Name: war and women
Author: css3studio
Version:1.0
*/
var device_status = "";
var $ = jQuery;
$(window).resize(function() {
	var dw = viewport().width;
	if(dw <= 1023 && device_status == "pc"){	//PC에서 모바일로 변경시
		$("body").removeClass('pc');
		$("body").addClass('mobile');
		init_mobile();
		device_status = "mobile";
	}else if(dw > 1023 && device_status == "mobile"){	//모바일에서 PC로 변경시
		$("body").removeClass('mobile');
		$("body").addClass('pc');
		init_pc();
		device_status = "pc";
	}
});

/* 메뉴고정 */
$(window).scroll(function(e){

	if ($(window).scrollTop() > 0) {
		$("body.pc").addClass("scrolling");
	} else {
		$("body.pc").removeClass("scrolling");
	}
});

$(document).ready(function() {

	var dw = viewport().width;
	if(dw <= 1023){	//모바일
		$("body").removeClass('pc');
		$("body").addClass('mobile');
		init_mobile();
		device_status = "mobile";
	}else{	//PC
		$("body").removeClass('mobile');
		$("body").addClass('pc');
		init_pc();
		device_status = "pc";
	}


 	//검색창 열기/닫기
    $('header .menu-top .search a').on("click",function(event) {
    	//$('header .search-form').fadeIn();
    	if(!$('header').hasClass('open-search')){
	        $('header').addClass('open-search');
	        $('header .search-form input').focus();
    	}
    	event.preventDefault();
    });
    $('header .search-form a.btn-close01').on("click",function(event) {
    	//$('header .search-form').fadeOut();
        $('header').removeClass('open-search');
        event.preventDefault();
    });

    /* 메인페이지 섹션 슬라이딩 */
    $('#fullpage').fullpage({
        navigation: true,
        navigationPosition: 'right',
        navigationTooltips: ['아카이브', '컬렉션', '정보', '컨텐츠'],
        showActiveTooltip: true,
        afterRender: function(){
            $('body').addClass("transparent-mode");
        },
        afterLoad: function(anchorLink, index){
            if(index == 1) $('body').addClass("transparent-mode");
            else if(index == 5) $('body').addClass("footer-mode");
            else{
                $('body').removeClass("transparent-mode");
                $('body').removeClass("footer-mode");
            }
        }
    });

    //슬라이더 메인
	$('.slider-main .slider').on('init', function(event, slick) { //생성완료 후 보여줌
		 $('.slider-main .slider').css('visibility','visible');
	});
    $('.slider-main .slider').slick({
    	dots: true,
    	appendDots: $('.slider-main .indicator'),
    	customPaging: function (slider, i) {
      		return  '<b>' +numberPad((i + 1), 2) + '</b><em>/</em>' + numberPad(slider.slideCount, 2);
    	}
    });
    //슬라이더 멀티 4개
	$('.slider-multiple01 .slider').slick({
		slidesToShow: 4,
		slidesToScroll: 4,
		dots: true,
		responsive: [
			{
				breakpoint: 768,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1
				}
			}
		]
   	});

	//메인 탭메뉴
    $('.menu-tab01 > li > a').on("click",function(event){
    	event.preventDefault();
        $(this).parent().siblings().removeClass("active");
        $(this).parent().addClass("active");

        //개발 코드 추가 ....

    });

 	//SNS 메뉴 열기/닫기
    $('.sns-share a.btn-share').on("click",function(event) {
    	var parent = $(this).parent();
    	if(!parent.hasClass('opened')){
	        parent.addClass('opened');
    	}
    	event.preventDefault();
    });
    $('.sns-share .popup-sns .btn-close01').on("click",function(event) {
        $('.sns-share').removeClass('opened');
        event.preventDefault();
    });
    //SNS 링크 복사
    if($('.sns-share').length > 0){
        var clipboard = new ClipboardJS('.sns-share .popup-sns .copy-link a');
        $('.sns-share .popup-sns .copy-link a').attr('data-clipboard-text',location.href);

        clipboard.on('success', function(e) {
            dialog_alert('링크가 클립보드에 복사되었습니다.');
            e.clearSelection();
        });

        clipboard.on('error', function(e) {
            dialog_alert('링크 복사에 실패하였습니다.');
        });
    }
    $(".sns-share .popup-sns .copy-link a").click(function(){
        event.preventDefault();
    });


    //자주묻는 질문
    $('.list-arccordin01 li dt a').bind("click",function(event){
		var li = $(this).parents("li");
        li.siblings().removeClass("active");
        li.addClass("active");
        event.preventDefault();
    });

    //이미지 가로-세로 비율 - jquery
    $('img').each(function() {
        var img = new Image();
        img.src = $(this).attr('src');
        var this_img = $(this);
        img.onload = function() {
            var fillClass = (img.height > img.width)
                    ? 'fillheight' : 'fillwidth';
            this_img.addClass(fillClass);
        };
    });


});


//PC버젼 초기화
var is_mouse_on_sub = false;
function init_pc(){
	$("header .btn-menu-mobile").off();
	$(".navigation > li.expanded > a").off();

    //메가메뉴 높이 산출
    var menu_height = 0;
    window.setTimeout(function(){
        $('header ul.navigation > li > ul').each(function(){
            if(menu_height < $(this).height()) menu_height = $(this).height();
        })
        $('header .bg-menu').height( menu_height + 16 );
    },300);

	//서브메뉴 마우스 오버시 부모메뉴 active
    $('header ul.navigation > li > ul').on("mouseenter",function() {
        $(this).parent().addClass('active');
    });
    $('header ul.navigation > li > ul').on("mouseleave",function() {
        $(this).parent().removeClass('active');
    });

	//헤더 LNB 메뉴(PC)
	$("header ul.navigation > li > a").on("mouseenter",function(){
		setTimeout(function(){
			if(is_mouse_on_sub)	$('header').addClass('open-menu');
	  	},300);
	});
	$("header").on("mouseleave",function(){
		$('header').removeClass('open-menu');
	});
	$("header .brand, header .functions").on("mouseenter",function(){
		$('header').removeClass('open-menu');
	});
	$("header nav").on("mouseenter",function(){
	  	is_mouse_on_sub = true;
	});
	$("header nav").on("mouseleave",function(){
		is_mouse_on_sub = false;
	});

    //슬라이더 unslick
    if($('.main-collection .slick-list').length > 0){
        $('.main-collection > ul').slick('unslick');
    }
    if($('.main-info .slick-list').length > 0){
        $('.main-info > ul').slick('unslick');
    }
    if($('.main-contents .slick-list').length > 0){
        $('.main-contents > ul').slick('unslick');
    }

}
//모바일 버젼 초기화
function init_mobile(){
	$("header ul.navigation > li > a").off();
    $('header ul.navigation > li > ul').off();
	$("header").off();
	$("header nav").off();

	//헤더 LNB 메뉴(mobile)
	$("header .btn-menu-mobile").on("click",function(event){
		if($("header").hasClass('open-mobile-menu')){
			$("header").removeClass('open-mobile-menu');
		}else{
			$("header").addClass('open-mobile-menu');
		}
		event.preventDefault();
	});
    $('.navigation > li').each(function(){
        if($(this).find('ul').length > 0)   $(this).addClass('expanded');
    });
    $(".navigation > li.expanded > a").on("click",function(event){
		if($(this).parent().hasClass('active-trail')){
			$(this).parent().removeClass('active-trail');
		}else{
			$(this).parent().addClass('active-trail');
		}
		event.preventDefault();
	});

    /*
	//검색창 열기/닫기
    $('body.mobile header .menu-mobile li.search a').on("click",function(event) {
    	//$('header .search-form').fadeIn();
		if($("header").hasClass('open-search')){
			$("header").removeClass('open-search');
		}else{
			$("header").addClass('open-search');
			$('header .search-form input').focus();
		}
		event.preventDefault();
     });
     */

    //메인 컬렉션 슬라이더 생성
    $('.main-collection > ul').slick({
        dots: true,
        arrows: false,
        slidesToShow: 1,
        slidesToScroll: 1
    });
    //메인 정보 슬라이더 생성
    $('.main-info > ul').slick({
        dots: true,
        arrows: false,
        slidesToShow: 1,
        slidesToScroll: 1
    });
    //메인 정보 슬라이더 생성
    $('.main-contents > ul').slick({
        dots: true,
        arrows: false,
        slidesToShow: 1,
        slidesToScroll: 1
    });


}

function viewport() {
    var e = window, a = 'inner';
    if (!('innerWidth' in window )) {
        a = 'client';
        e = document.documentElement || document.body;
    }
    return { width : e[ a+'Width' ] , height : e[ a+'Height' ] };
}

function numberPad(n, width) {
    n = n + '';
    return n.length >= width ? n : new Array(width - n.length + 1).join('0') + n;
}


//쿠키
function setCookie(cookieName, value, exdays) {
    var exdate = new Date();
    exdate.setDate(exdate.getDate() + exdays);
    var cookieValue =
    escape(value) + (exdays == null ? "" : "; expires=" + exdate.toGMTString());
    document.cookie = cookieName + "=" + cookieValue;
}
function deleteCookie(cookieName) {
    var expireDate = new Date();
    expireDate.setDate(expireDate.getDate() - 1);
    document.cookie = cookieName + "= " + "; expires=" + expireDate.toGMTString();
}
function getCookie(cookieName) {
    cookieName = cookieName + "=";
    var cookieData = document.cookie;
    var start = cookieData.indexOf(cookieName);
    var cookieValue = "";
    if (start != -1) {
    start += cookieName.length;
    var end = cookieData.indexOf(";", start);
    if (end == -1) end = cookieData.length;
    cookieValue = cookieData.substring(start, end);
    }
    return unescape(cookieValue);
}



