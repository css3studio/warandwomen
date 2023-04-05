<?php
$pageTitle = __('연표');
echo head(array('title' => $pageTitle, 'bodyclass' => 'items browse'));
?>

<div class="bg-neutral-100 pt-3">
	<div class="breadcrumb container bg-white text-xs px-4 py-1 rounded-lg">
		<div class="flex gap-[10px] text-neutral-400">
			<a class="hover:underline" href="<?php echo html_escape(url('/')); ?>">홈</a>
			<i class="xi-angle-right text-neutral-200"></i>
			<a class="hover:underline" href="<?php echo html_escape(url('items/person?search=&advanced[0][joiner]=and&advanced[0][element_id]=74&advanced[0][type]=is+exactly&advanced[0][terms]=정보사전-인물')); ?>">정보</a>
			<i class="xi-angle-right text-neutral-200"></i>
			<span class="text-primary"><?php echo $pageTitle; ?></span>
		</div>
	</div>
	<div class="container pt-14">
		<h1 class="text-3xl font-bold mb-14">연표정보</h1>
		<div class="menu-tab01 menu-tab01-01">
			<ul >
				<li><a href="<?php echo html_escape(url('items/historyt1')); ?>">개요</a></li>
				<li class="current"><a href="javascript:void(0);">검색</a></li>
				<li><a href="<?php echo html_escape(url('items/historyt3')); ?>">정대협결성</a></li>
				<li><a href="<?php echo html_escape(url('items/historyt4')); ?>">국제연대</a></li>
				<li><a href="<?php echo html_escape(url('items/historyt5')); ?>">국내연대</a></li>
				<li><a href="<?php echo html_escape(url('items/historyt6')); ?>">남북한연대</a></li>
				<li><a href="<?php echo html_escape(url('items/historyt7')); ?>">법적연대</a></li>
				<li><a href="<?php echo html_escape(url('items/historyt8')); ?>">피해자지원</a></li>
				<li><a href="<?php echo html_escape(url('items/historyt9')); ?>">조사.출판.연구</a></li>
			</ul>
		</div>
	</div>
</div>

<!-- 본문영역 -->
<div class="container pt-8 pb-28">

	<div class="mb-8 flex gap-2">
		<!-- 셀렉트 옵션 -->
		<select onchange="if(this.value) location.href=(this.value);">
			<option value="" selected>연도</option>
			<option value="<?php echo html_escape(url('items/history?search=&advanced[0][joiner]=and&advanced[0][element_id]=156&advanced[0][type]=contains&advanced[0][terms]=1988')); ?>">1988</option>
			<option value="<?php echo html_escape(url('items/history?search=&advanced[0][joiner]=and&advanced[0][element_id]=156&advanced[0][type]=contains&advanced[0][terms]=1989')); ?>">1989</option>
			<option value="<?php echo html_escape(url('items/history?search=&advanced[0][joiner]=and&advanced[0][element_id]=156&advanced[0][type]=contains&advanced[0][terms]=1990')); ?>">1990</option>
			<option value="<?php echo html_escape(url('items/history?search=&advanced[0][joiner]=and&advanced[0][element_id]=156&advanced[0][type]=contains&advanced[0][terms]=1991')); ?>">1991</option>
			<option value="<?php echo html_escape(url('items/history?search=&advanced[0][joiner]=and&advanced[0][element_id]=156&advanced[0][type]=contains&advanced[0][terms]=1992')); ?>">1992</option>
			<option value="<?php echo html_escape(url('items/history?search=&advanced[0][joiner]=and&advanced[0][element_id]=156&advanced[0][type]=contains&advanced[0][terms]=1993')); ?>">1993</option>
			<option value="<?php echo html_escape(url('items/history?search=&advanced[0][joiner]=and&advanced[0][element_id]=156&advanced[0][type]=contains&advanced[0][terms]=1994')); ?>">1994</option>
			<option value="<?php echo html_escape(url('items/history?search=&advanced[0][joiner]=and&advanced[0][element_id]=156&advanced[0][type]=contains&advanced[0][terms]=1995')); ?>">1995</option>
			<option value="<?php echo html_escape(url('items/history?search=&advanced[0][joiner]=and&advanced[0][element_id]=156&advanced[0][type]=contains&advanced[0][terms]=1996')); ?>">1996</option>
			<option value="<?php echo html_escape(url('items/history?search=&advanced[0][joiner]=and&advanced[0][element_id]=156&advanced[0][type]=contains&advanced[0][terms]=1997')); ?>">1997</option>
			<option value="<?php echo html_escape(url('items/history?search=&advanced[0][joiner]=and&advanced[0][element_id]=156&advanced[0][type]=contains&advanced[0][terms]=1998')); ?>">1998</option>
			<option value="<?php echo html_escape(url('items/history?search=&advanced[0][joiner]=and&advanced[0][element_id]=156&advanced[0][type]=contains&advanced[0][terms]=1999')); ?>">1999</option>
			<option value="<?php echo html_escape(url('items/history?search=&advanced[0][joiner]=and&advanced[0][element_id]=156&advanced[0][type]=contains&advanced[0][terms]=2000')); ?>">2000</option>
			<option value="<?php echo html_escape(url('items/history?search=&advanced[0][joiner]=and&advanced[0][element_id]=156&advanced[0][type]=contains&advanced[0][terms]=2001')); ?>">2001</option>
			<option value="<?php echo html_escape(url('items/history?search=&advanced[0][joiner]=and&advanced[0][element_id]=156&advanced[0][type]=contains&advanced[0][terms]=2002')); ?>">2002</option>
			<option value="<?php echo html_escape(url('items/history?search=&advanced[0][joiner]=and&advanced[0][element_id]=156&advanced[0][type]=contains&advanced[0][terms]=2003')); ?>">2003</option>
			<option value="<?php echo html_escape(url('items/history?search=&advanced[0][joiner]=and&advanced[0][element_id]=156&advanced[0][type]=contains&advanced[0][terms]=2004')); ?>">2004</option>
			<option value="<?php echo html_escape(url('items/history?search=&advanced[0][joiner]=and&advanced[0][element_id]=156&advanced[0][type]=contains&advanced[0][terms]=2005')); ?>">2005</option>
			<option value="<?php echo html_escape(url('items/history?search=&advanced[0][joiner]=and&advanced[0][element_id]=156&advanced[0][type]=contains&advanced[0][terms]=2006')); ?>">2006</option>
			<option value="<?php echo html_escape(url('items/history?search=&advanced[0][joiner]=and&advanced[0][element_id]=156&advanced[0][type]=contains&advanced[0][terms]=2007')); ?>">2007</option>
			<option value="<?php echo html_escape(url('items/history?search=&advanced[0][joiner]=and&advanced[0][element_id]=156&advanced[0][type]=contains&advanced[0][terms]=2008')); ?>">2008</option>
			<option value="<?php echo html_escape(url('items/history?search=&advanced[0][joiner]=and&advanced[0][element_id]=156&advanced[0][type]=contains&advanced[0][terms]=2009')); ?>">2009</option>
			<option value="<?php echo html_escape(url('items/history?search=&advanced[0][joiner]=and&advanced[0][element_id]=156&advanced[0][type]=contains&advanced[0][terms]=2010')); ?>">2010</option>
			<option value="<?php echo html_escape(url('items/history?search=&advanced[0][joiner]=and&advanced[0][element_id]=156&advanced[0][type]=contains&advanced[0][terms]=2011')); ?>">2011</option>
			<option value="<?php echo html_escape(url('items/history?search=&advanced[0][joiner]=and&advanced[0][element_id]=156&advanced[0][type]=contains&advanced[0][terms]=2012')); ?>">2012</option>
			<option value="<?php echo html_escape(url('items/history?search=&advanced[0][joiner]=and&advanced[0][element_id]=156&advanced[0][type]=contains&advanced[0][terms]=2013')); ?>">2013</option>
			<option value="<?php echo html_escape(url('items/history?search=&advanced[0][joiner]=and&advanced[0][element_id]=156&advanced[0][type]=contains&advanced[0][terms]=2014')); ?>">2014</option>
			<option value="<?php echo html_escape(url('items/history?search=&advanced[0][joiner]=and&advanced[0][element_id]=156&advanced[0][type]=contains&advanced[0][terms]=2015')); ?>">2015</option>
			<option value="<?php echo html_escape(url('items/history?search=&advanced[0][joiner]=and&advanced[0][element_id]=156&advanced[0][type]=contains&advanced[0][terms]=2016')); ?>">2016</option>
			<option value="<?php echo html_escape(url('items/history?search=&advanced[0][joiner]=and&advanced[0][element_id]=156&advanced[0][type]=contains&advanced[0][terms]=2017')); ?>">2017</option>
			<option value="<?php echo html_escape(url('items/history?search=&advanced[0][joiner]=and&advanced[0][element_id]=156&advanced[0][type]=contains&advanced[0][terms]=2018')); ?>">2018</option>
			<option value="<?php echo html_escape(url('items/history?search=&advanced[0][joiner]=and&advanced[0][element_id]=156&advanced[0][type]=contains&advanced[0][terms]=2019')); ?>">2019</option>		
		</select>		
		<select onchange="if(this.value) location.href=(this.value);">
			<option value="" selected>연표구분</option>
			<option value="<?php echo html_escape(url('items/history?search=&advanced[0][joiner]=and&advanced[0][element_id]=160&advanced[0][type]=contains&advanced[0][terms]=정의연')); ?>">정의연</option>
			<option value="<?php echo html_escape(url('items/history?search=&advanced[0][joiner]=and&advanced[0][element_id]=160&advanced[0][type]=contains&advanced[0][terms]=국내운동진영')); ?>">국내운동진영</option>
			<option value="<?php echo html_escape(url('items/history?search=&advanced[0][joiner]=and&advanced[0][element_id]=160&advanced[0][type]=contains&advanced[0][terms]=일본운동진영')); ?>">일본운동진영</option>
			<option value="<?php echo html_escape(url('items/history?search=&advanced[0][joiner]=and&advanced[0][element_id]=160&advanced[0][type]=contains&advanced[0][terms]=한국정부')); ?>">한국정부</option>
			<option value="<?php echo html_escape(url('items/history?search=&advanced[0][joiner]=and&advanced[0][element_id]=160&advanced[0][type]=contains&advanced[0][terms]=일본정부')); ?>">일본정부</option>
			<option value="<?php echo html_escape(url('items/history?search=&advanced[0][joiner]=and&advanced[0][element_id]=160&advanced[0][type]=contains&advanced[0][terms]=국제사회')); ?>">국제사회</option>
			<option value="<?php echo html_escape(url('items/history?search=&advanced[0][joiner]=and&advanced[0][element_id]=160&advanced[0][type]=contains&advanced[0][terms]=국제연대운동')); ?>">국제연대운동</option>
			<option value="<?php echo html_escape(url('items/history?search=&advanced[0][joiner]=and&advanced[0][element_id]=160&advanced[0][type]=contains&advanced[0][terms]=해외정세')); ?>">해외정세</option>
		</select>
		<select onchange="if(this.value) location.href=(this.value);">
			<option value="" selected>관할지역</option>
			<option value="<?php echo html_escape(url('items/history?search=&advanced[0][joiner]=and&advanced[0][element_id]=161&advanced[0][type]=contains&advanced[0][terms]=한국')); ?>">한국</option>
			<option value="<?php echo html_escape(url('items/history?search=&advanced[0][joiner]=and&advanced[0][element_id]=161&advanced[0][type]=contains&advanced[0][terms]=일본')); ?>">일본</option>
			<option value="<?php echo html_escape(url('items/history?search=&advanced[0][joiner]=and&advanced[0][element_id]=161&advanced[0][type]=contains&advanced[0][terms]=중국')); ?>">중국</option>
			<option value="<?php echo html_escape(url('items/history?search=&advanced[0][joiner]=and&advanced[0][element_id]=161&advanced[0][type]=contains&advanced[0][terms]=미국')); ?>">미국</option>
			<option value="<?php echo html_escape(url('items/history?search=&advanced[0][joiner]=and&advanced[0][element_id]=161&advanced[0][type]=contains&advanced[0][terms]=대만')); ?>">대만</option>
			<option value="<?php echo html_escape(url('items/history?search=&advanced[0][joiner]=and&advanced[0][element_id]=161&advanced[0][type]=contains&advanced[0][terms]=인도네시아')); ?>">인도네시아</option>
			<option value="<?php echo html_escape(url('items/history?search=&advanced[0][joiner]=and&advanced[0][element_id]=161&advanced[0][type]=contains&advanced[0][terms]=말레이시아')); ?>">말레이시아</option>
			<option value="<?php echo html_escape(url('items/history?search=&advanced[0][joiner]=and&advanced[0][element_id]=161&advanced[0][type]=contains&advanced[0][terms]=필리핀')); ?>">필리핀</option>
			<option value="<?php echo html_escape(url('items/history?search=&advanced[0][joiner]=and&advanced[0][element_id]=161&advanced[0][type]=contains&advanced[0][terms]=홍콩')); ?>">홍콩</option>
			<option value="<?php echo html_escape(url('items/history?search=&advanced[0][joiner]=and&advanced[0][element_id]=161&advanced[0][type]=contains&advanced[0][terms]=캐나다')); ?>">캐나다</option>
			<option value="<?php echo html_escape(url('items/history?search=&advanced[0][joiner]=and&advanced[0][element_id]=161&advanced[0][type]=contains&advanced[0][terms]=호주')); ?>">호주</option>
			<option value="<?php echo html_escape(url('items/history?search=&advanced[0][joiner]=and&advanced[0][element_id]=161&advanced[0][type]=contains&advanced[0][terms]=독일')); ?>">독일</option>
			<option value="<?php echo html_escape(url('items/history?search=&advanced[0][joiner]=and&advanced[0][element_id]=161&advanced[0][type]=contains&advanced[0][terms]=프랑스')); ?>">프랑스</option>
			<option value="<?php echo html_escape(url('items/history?search=&advanced[0][joiner]=and&advanced[0][element_id]=161&advanced[0][type]=contains&advanced[0][terms]=이탈리아')); ?>">이탈리아</option>
			<option value="<?php echo html_escape(url('items/history?search=&advanced[0][joiner]=and&advanced[0][element_id]=161&advanced[0][type]=contains&advanced[0][terms]=벨기에')); ?>">벨기에</option>
			<option value="<?php echo html_escape(url('items/history?search=&advanced[0][joiner]=and&advanced[0][element_id]=161&advanced[0][type]=contains&advanced[0][terms]=네덜란드')); ?>">네덜란드</option>
			<option value="<?php echo html_escape(url('items/history?search=&advanced[0][joiner]=and&advanced[0][element_id]=161&advanced[0][type]=contains&advanced[0][terms]=스위스')); ?>">스위스</option>
			<option value="<?php echo html_escape(url('items/history?search=&advanced[0][joiner]=and&advanced[0][element_id]=161&advanced[0][type]=contains&advanced[0][terms]=노르웨이')); ?>">노르웨이</option>
			<option value="<?php echo html_escape(url('items/history?search=&advanced[0][joiner]=and&advanced[0][element_id]=161&advanced[0][type]=contains&advanced[0][terms]=동티모르')); ?>">동티모르</option>
			<option value="<?php echo html_escape(url('items/history?search=&advanced[0][joiner]=and&advanced[0][element_id]=161&advanced[0][type]=contains&advanced[0][terms]=북한')); ?>">북한</option>
		</select>
		<select onchange="if(this.value) location.href=(this.value);">
			<option value="" selected>관련활동</option>
			<option value="<?php echo html_escape(url('items/history?search=&advanced[0][joiner]=and&advanced[0][element_id]=170&advanced[0][type]=contains&advanced[0][terms]=국내연대+>+과거사단체와연대')); ?>">국내연대 > 과거사단체와연대</option>
			<option value="<?php echo html_escape(url('items/history?search=&advanced[0][joiner]=and&advanced[0][element_id]=170&advanced[0][type]=contains&advanced[0][terms]=국내연대+>+기타단체와연대')); ?>">국내연대 > 기타단체와연대</option>
			<option value="<?php echo html_escape(url('items/history?search=&advanced[0][joiner]=and&advanced[0][element_id]=170&advanced[0][type]=contains&advanced[0][terms]=국내연대+>+문화예술인과의연대')); ?>">국내연대 > 문화예술인과의연대</option>
			<option value="<?php echo html_escape(url('items/history?search=&advanced[0][joiner]=and&advanced[0][element_id]=170&advanced[0][type]=contains&advanced[0][terms]=국내연대+>+수요시위')); ?>">국내연대 > 수요시위</option>
			<option value="<?php echo html_escape(url('items/history?search=&advanced[0][joiner]=and&advanced[0][element_id]=170&advanced[0][type]=contains&advanced[0][terms]=국내연대+>+여성단체와연대')); ?>">국내연대 > 여성단체와연대</option>
			<option value="<?php echo html_escape(url('items/history?search=&advanced[0][joiner]=and&advanced[0][element_id]=170&advanced[0][type]=contains&advanced[0][terms]=국내연대+>+일반')); ?>">국내연대 > 일반</option>
			<option value="<?php echo html_escape(url('items/history?search=&advanced[0][joiner]=and&advanced[0][element_id]=170&advanced[0][type]=contains&advanced[0][terms]=국제연대+>+국제노동기구')); ?>">국제연대 > 국제노동기구</option>
			<option value="<?php echo html_escape(url('items/history?search=&advanced[0][joiner]=and&advanced[0][element_id]=170&advanced[0][type]=contains&advanced[0][terms]=국제연대+>+반전평화운동')); ?>">국제연대 > 반전평화운동</option>
			<option value="<?php echo html_escape(url('items/history?search=&advanced[0][joiner]=and&advanced[0][element_id]=170&advanced[0][type]=contains&advanced[0][terms]=국제연대+>+비엔나세계인권회의')); ?>">국제연대 > 비엔나세계인권회의</option>
			<option value="<?php echo html_escape(url('items/history?search=&advanced[0][joiner]=and&advanced[0][element_id]=170&advanced[0][type]=contains&advanced[0][terms]=국제연대+>+세계각국 의회결의안')); ?>">국제연대 > 세계각국 의회결의안</option>
			<option value="<?php echo html_escape(url('items/history?search=&advanced[0][joiner]=and&advanced[0][element_id]=170&advanced[0][type]=contains&advanced[0][terms]=국제연대+>+아시아연대회의')); ?>">국제연대 > 아시아연대회의</option>
			<option value="<?php echo html_escape(url('items/history?search=&advanced[0][joiner]=and&advanced[0][element_id]=170&advanced[0][type]=contains&advanced[0][terms]=국제연대+>+유엔인권위원회')); ?>">국제연대 > 유엔인권위원회</option>
			<option value="<?php echo html_escape(url('items/history?search=&advanced[0][joiner]=and&advanced[0][element_id]=170&advanced[0][type]=contains&advanced[0][terms]=국제연대+>+일반')); ?>">국제연대 > 일반</option>
			<option value="<?php echo html_escape(url('items/history?search=&advanced[0][joiner]=and&advanced[0][element_id]=170&advanced[0][type]=contains&advanced[0][terms]=국제연대+>+일본시민사회와의협력')); ?>">국제연대 > 일본시민사회와의협력</option>
			<option value="<?php echo html_escape(url('items/history?search=&advanced[0][joiner]=and&advanced[0][element_id]=170&advanced[0][type]=contains&advanced[0][terms]=기념사업+>+기림사업')); ?>">기념사업 > 기림사업</option>
			<option value="<?php echo html_escape(url('items/history?search=&advanced[0][joiner]=and&advanced[0][element_id]=170&advanced[0][type]=contains&advanced[0][terms]=기념사업+>+전쟁과여성인권박물관')); ?>">기념사업 > 전쟁과여성인권박물관</option>
			<option value="<?php echo html_escape(url('items/history?search=&advanced[0][joiner]=and&advanced[0][element_id]=170&advanced[0][type]=contains&advanced[0][terms]=법적책임규명+>+2000년국제여성법정')); ?>">법적책임규명 > 2000년국제여성법정</option>
			<option value="<?php echo html_escape(url('items/history?search=&advanced[0][joiner]=and&advanced[0][element_id]=170&advanced[0][type]=contains&advanced[0][terms]=법적책임규명+>+국민기금반대운동')); ?>">법적책임규명 > 국민기금반대운동</option>
			<option value="<?php echo html_escape(url('items/history?search=&advanced[0][joiner]=and&advanced[0][element_id]=170&advanced[0][type]=contains&advanced[0][terms]=법적책임규명+>+법안발의.제정')); ?>">법적책임규명 > 법안발의.제정</option>
			<option value="<?php echo html_escape(url('items/history?search=&advanced[0][joiner]=and&advanced[0][element_id]=170&advanced[0][type]=contains&advanced[0][terms]=법적책임규명+>+위안부.소송')); ?>">법적책임규명 > 위안부.소송</option>
			<option value="<?php echo html_escape(url('items/history?search=&advanced[0][joiner]=and&advanced[0][element_id]=170&advanced[0][type]=contains&advanced[0][terms]=법적책임규명+>+일반')); ?>">법적책임규명 > 일반</option>
			<option value="<?php echo html_escape(url('items/history?search=&advanced[0][joiner]=and&advanced[0][element_id]=170&advanced[0][type]=contains&advanced[0][terms]=사무운영+>+사무공간 관리')); ?>">사무운영 > 사무공간 관리</option>
			<option value="<?php echo html_escape(url('items/history?search=&advanced[0][joiner]=and&advanced[0][element_id]=170&advanced[0][type]=contains&advanced[0][terms]=사무운영+>+사무공간 관리')); ?>">사무운영 > 사무공간 관리</option>
			<option value="<?php echo html_escape(url('items/history?search=&advanced[0][joiner]=and&advanced[0][element_id]=170&advanced[0][type]=contains&advanced[0][terms]=사무운영+>+일반')); ?>">사무운영 > 일반</option>
			<option value="<?php echo html_escape(url('items/history?search=&advanced[0][joiner]=and&advanced[0][element_id]=170&advanced[0][type]=contains&advanced[0][terms]=조사연구출판+>+교육')); ?>">조사연구출판 > 교육</option>
			<option value="<?php echo html_escape(url('items/history?search=&advanced[0][joiner]=and&advanced[0][element_id]=170&advanced[0][type]=contains&advanced[0][terms]=조사연구출판+>+교육')); ?>">조사연구출판 > 교육</option>
			<option value="<?php echo html_escape(url('items/history?search=&advanced[0][joiner]=and&advanced[0][element_id]=170&advanced[0][type]=contains&advanced[0][terms]=조사연구출판+>+진상조사.연구')); ?>">조사연구출판 > 진상조사.연구</option>
			<option value="<?php echo html_escape(url('items/history?search=&advanced[0][joiner]=and&advanced[0][element_id]=170&advanced[0][type]=contains&advanced[0][terms]=조사연구출판+>+홍보.캠페인')); ?>">조사연구출판 > 홍보.캠페인</option>
			<option value="<?php echo html_escape(url('items/history?search=&advanced[0][joiner]=and&advanced[0][element_id]=170&advanced[0][type]=contains&advanced[0][terms]=피해자지원+>+일반')); ?>">피해자지원 > 일반</option>
			<option value="<?php echo html_escape(url('items/history?search=&advanced[0][joiner]=and&advanced[0][element_id]=170&advanced[0][type]=contains&advanced[0][terms]=피해자지원+>+추모.추도')); ?>">피해자지원 > 추모.추도</option>
			<option value="<?php echo html_escape(url('items/history?search=&advanced[0][joiner]=and&advanced[0][element_id]=170&advanced[0][type]=contains&advanced[0][terms]=피해자지원+>+치유활동')); ?>">피해자지원 > 치유활동</option>
		</select>			
	</div>



	<!-- 검색폼 -->
	<div class="mb-14">
		<form name="search-history" action="<?php echo html_escape(url('items/history')); ?>" method="get" role="search">
		  <div style="display: none;">
			<select name="advanced[0][joiner]" id="" title="Search Joiner" class="advanced-search-joiner">
			  <option value="and" selected="selected">AND</option>
			</select>
			<select name="advanced[0][element_id]" id="" title="Search Field" class="advanced-search-element">
			  <option value="74" selected="selected">목록구분</option>
			</select>
			<select name="advanced[0][type]" id="" title="Search Type" class="advanced-search-type">
			  <option value="contains" selected="selected">contains</option>
			</select>
			<input type="text" name="advanced[0][terms]" id="" value="정보사전-연표" size="20" title="Search Terms" class="advanced-search-terms">                
			<button type="button" class="remove_search small red button" style="">Remove field</button>
			<select name="advanced[1][joiner]" id="" title="Search Joiner" class="advanced-search-joiner">
			  <option value="and" selected="selected">AND</option>
			</select>
			<select name="advanced[1][element_id]" id="" title="Search Field" class="advanced-search-element">
			  <option value="166">연표명칭</option>
			</select>
			<select name="advanced[1][type]" id="" title="Search Type" class="advanced-search-type">
			  <option value="contains" selected="selected">contains</option>
			</select>
		  </div>

		  <div class='search-form flex gap-2 max-w-[800px]'>
				<input id='query' type='text' name="advanced[1][terms]" value='' class='w-full h-[52px] bg-gray-100 border-0' autofocus placeholder="'연표'를 검색해 보세요">
				<button id='submit_search' type='submit' value='Search' onclick="document.forms['search-history'].submit();" class="flex-shrink-0 bg-primary text-white w-[84px] h-[52px] leading-[52px] hover:bg-black cursor-pointer">검색</button>
		   </div>

		  </form>
		  <script type="text/javascript" src="/application/views/scripts/javascripts/items-search.js?v=3.0.3" charset="utf-8"></script>
		  <script type="text/javascript">
			  jQuery(document).ready(function () {
				  Omeka.Search.activateSearchButtons();
			  });
		  </script>     
	</div>

	<h2>
		검색결과: <?php echo __('%s', $total_results); ?> 건
	</h2> 

	<?php // echo pagination_links(); ?>

	<!-- 리스트 -->
	<ul class="mb-28">

	<?php foreach (loop('items') as $item): ?>
	<?php 
		//기본정보 메타 출력용
		$제목 = metadata($item, array('Dublin Core', 'Title'), array('delimiter' => '; '));
		$내용 = metadata($item, array('Dublin Core', 'Description'), array('delimiter' => '; ', 'snippet' => 500));	 
		$목록구분 = metadata($item, array('Item Type Metadata', 'Classification of catalog'), array('delimiter' => '; '));	                   
		//연표 정보
		$연표명칭 = metadata($item, array('Item Type Metadata', 'Chronological Name'), array('delimiter' => '; '));	
		$연표연도 = metadata($item, array('Item Type Metadata', 'Chronological year'), array('delimiter' => '; '));	
		$연표시작일자 = metadata($item, array('Item Type Metadata', 'Chronological start date'), array('delimiter' => '; '));	
		$연표종료일자 = metadata($item, array('Item Type Metadata', 'Chronological end date'), array('delimiter' => '; '));	
		$연표구분 = metadata($item, array('Item Type Metadata', 'Classification of Chronology'), array('delimiter' => '; '));	
		$관할지역 = metadata($item, array('Item Type Metadata', 'Jurisdiction'), array('delimiter' => '; '));	
		//$연표설명 = metadata($item, array('Item Type Metadata', 'Chronology Description'), array('delimiter' => '; ', 'snippet' => 500));	            
		$정보출처 = metadata($item, array('Item Type Metadata', 'Sources of information'), array('delimiter' => '; '));               
	?>	
		<li class="p-4 flex items-center border-b border-neutral-200">
			<div class="w-[64%] flex items-center gap-4">
				<?php if (metadata($item, 'has files')) {  ?>		
					<?php echo link_to_item(item_image('square_thumbnail', array('class' => 'w-[5rem] aspect-1 object-cover'))); ?>		
				<?php } else {} ?>	
				<div>
					<?php echo link_to_item(metadata('item', array('Dublin Core', 'Title')), array('class'=>'block font-bold text-lg hover:text-primary mb-2')); ?>
					<ul class="text-sm text-neutral-700 flex gap-8">
					<!-- <?php //if ($연표시작일자!= null) { ?><li>시작일자 : <?php //echo strip_formatting($연표시작일자); ?></li><?php //} else {} ?>
					<?php //if ($연표종료일자!= null) { ?><li>종료일자 : <?php //echo strip_formatting($연표종료일자); ?></li><?php //} else {} ?> -->
					<?php if ($연표구분!= null) { ?><li>구분 : <?php echo strip_formatting($연표구분); ?></li><?php } else {} ?>
					<?php if ($관할지역!= null) { ?><li>관할지역 : <?php echo strip_formatting($관할지역); ?></li><?php } else {} ?>
					</ul>		
				</div>
			</div>
			<p class="w-[36%] line-clamp-3 text-sm text-neutral-700"><?php if ($내용!= null) { ?><?php echo strip_formatting($내용); ?><?php } else {} ?></p>
		</li>
	<?php endforeach; ?>

	</ul>
	<!-- //리스트 -->

	<div id="search-pagination-bottom">
		<?php echo pagination_links(); ?>
	</div>

</div>
<!-- //본문영역 -->


<?php fire_plugin_hook('public_items_browse', array('items' => $items, 'view' => $this)); ?>

<?php echo foot(); ?>
