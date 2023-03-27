<!-- 페이징 -->
<?php if ($this->pageCount > 1): $getParams = $_GET; ?>
	<div class="">	 	

		<?php if (isset($this->previous)): ?>
			<div class="btn-group pagination-button-1" role="group">
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
			 <div class="btn-group pagination-button-1" role="group">
				<?php $getParams['page'] = $next; ?>
					<a href="<?php echo html_escape($this->url(array(), null, $getParams)); ?>" rel="next" >다음 <i class="xi-angle-right"></i></a>
			 </div>
		<?php endif; ?>				

	</div>
<?php endif; ?>
