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
				<li><a href="<?php echo html_escape(url('items/history?search=&advanced[0][joiner]=and&advanced[0][element_id]=74&advanced[0][type]=is+exactly&advanced[0][terms]=정보사전-연표')); ?>">검색</a></li>
				<li><a href="<?php echo html_escape(url('items/historyt3')); ?>">정대협 결성과정</a></li>
				<li class="current"><a href="javascript:void(0);">국제연대</a></li>
				<li><a href="<?php echo html_escape(url('items/historyt5')); ?>">국내연대</a></li>
				<li><a href="<?php echo html_escape(url('items/historyt6')); ?>">남북한연대</a></li>
				<li><a href="<?php echo html_escape(url('items/historyt7')); ?>">법적연대</a></li>
				<li><a href="<?php echo html_escape(url('items/historyt8')); ?>">피해자지원</a></li>
				<li><a href="<?php echo html_escape(url('items/historyt9')); ?>">조사.출판.연구.기념</a></li>
			</ul>
		</div>
	</div>
</div>
<!-- 본문영역 -->
<div class="container pt-8 pb-28">

내용이 업데이트될 예정입니다...

</div>
<!-- //본문영역 -->


<?php fire_plugin_hook('public_items_browse', array('items' => $items, 'view' => $this)); ?>

<?php echo foot(); ?>
