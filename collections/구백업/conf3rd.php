<?php
$pageTitle = __('컬렉션');
echo head(array('title' => $pageTitle, 'bodyclass' => 'collections browse'));
?>

<div class="pt-3">
	<div class="breadcrumb container bg-neutral-50 text-xs px-4 py-1 rounded-lg">
		<div class="flex gap-[10px] text-neutral-400">
			<a class="hover:underline" href="/">홈</a>
			<i class="xi-angle-right text-neutral-200"></i>
			<span class="text-primary">컬렉션</span>
		</div>
	</div>
</div>


<!--컬렉션 섹션-->

<!--//컬렉션 섹션-->



<?php //echo pagination_links(); ?>
<?php //fire_plugin_hook('public_collections_browse', array('collections' => $collections, 'view' => $this)); ?>
<?php echo foot(); ?>
