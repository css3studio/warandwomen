<!-- 페이징 -->
<?php if ($this->pageCount > 1): $getParams = $_GET; ?>
	<div class="">	 	

		<?php if (isset($this->first)): ?>
		<div class="btn-group pagination-button-0 first" role="group">
			<?php $getParams['page'] = $first; ?>
			<a href="<?php echo html_escape($this->url(array(), null, $getParams)); ?>" rel="first"><i class="xi-angle-left relative -right-4"></i><i class="xi-angle-left"></i> 처음</a>
		</div>
		<?php endif; ?>		

		<?php if (isset($this->previous)): ?>
			<div class="btn-group pagination-button-1 prev" role="group">
				<?php $getParams['page'] = $previous; ?>
				<a href="<?php echo html_escape($this->url(array(), null, $getParams)); ?>" rel="prev"><i class="xi-angle-left"></i> 이전</a>
			</div>
		<?php endif; ?>		
		
		<?php foreach ($this->pagesInRange as $page): ?>
			 <div class="btn-group pagination-button-2" role="group">
				<?php if ($page != $this->current): ?>										
					<a href="<?php echo html_escape($this->url(array(), null, $getParams)); ?>&page=<?php echo $page; ?>" rel="<?php echo $page; ?>"><span><?php echo $page; ?></span></a>		
				<?php else: ?>
					<a class="current" href="<?php echo html_escape($this->url(array(), null, $getParams)); ?>"><span><?php echo $page; ?></span></a>
				<?php endif; ?>
			</div>
		<?php endforeach; ?>		

		<?php if (isset($this->next)): ?>
			 <div class="btn-group pagination-button-1 next" role="group">
				<?php $getParams['page'] = $next; ?>
					<a href="<?php echo html_escape($this->url(array(), null, $getParams)); ?>" rel="next">다음 <i class="xi-angle-right"></i></a>
			 </div>
		<?php endif; ?>		

		<?php if (isset($this->last)): ?>
		<div class="btn-group pagination-button-0 last" role="group">
			<?php $getParams['page'] = $last; ?>
			<a href="<?php echo html_escape($this->url(array(), null, $getParams)); ?>" rel="last">마지막 <i class="xi-angle-right"></i><i class="xi-angle-right relative -left-4"></i></a>
		</div>
		<?php endif; ?>	

	</div>
<?php endif; ?>
