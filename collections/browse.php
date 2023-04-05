<?php
$pageTitle = __('컬렉션');
echo head(array('title' => $pageTitle, 'bodyclass' => 'collections browse'));
?>

<!--
<div class="pt-3">
	<div class="breadcrumb container bg-neutral-50 text-xs px-4 py-1 rounded-lg">
		<div class="flex gap-[10px] text-neutral-400">
			<a class="hover:underline" href="/">홈</a>
			<i class="xi-angle-right text-neutral-200"></i>
			<span class="text-primary">컬렉션</span>
		</div>
	</div>
</div>
-->

<!--컬렉션 섹션-->
<div class="container pt-20 pb-28">
	<h2 class="lg:text-5xl text-3xl font-bold lg:mb-10 mb-8">컬렉션</h2>
	<div class="sub-collection">
		<ul class="text-white lg:grid grid-cols-2 gap-8">

			<!-- 컬렉션1 출력.  -->
			<?php echo $this->shortcodes('[collectionsForLarge num=1 ids=1]'); // 출력될 요소는 collections/single-collectionsForMedium.php에 들어 있음.?>

			<!-- 컬렉션2 출력.  -->
			<?php echo $this->shortcodes('[collectionsForMedium num=1 ids=2]'); // 출력될 요소는 collections/single-collectionsForMedium.php에 들어 있음.?>

			<!-- 컬렉션3 출력.  -->
			<?php echo $this->shortcodes('[collectionsForMedium num=1 ids=3]'); // 출력될 요소는 collections/single-collectionsForMedium.php에 들어 있음.?>

			<!-- 컬렉션이 이후 추가되는 경우 자동 출력. 한 줄에 3개씩 출력.  -->
			<?php echo $this->shortcodes('[collectionsForMedium num=0 ids=4-30]'); // 출력될 요소는 collections/single-collectionsForMedium.php에 들어 있음.?>

		</ul>
	</div>
</div>
<!--//컬렉션 섹션-->



<?php //echo pagination_links(); ?>
<?php //fire_plugin_hook('public_collections_browse', array('collections' => $collections, 'view' => $this)); ?>
<?php echo foot(); ?>
