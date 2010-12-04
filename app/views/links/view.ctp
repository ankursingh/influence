<div class="links view">
<h2><?php  __('Link');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $link['Link']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Link'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $link['Link']['link']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Influence Count'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $link['Link']['influence_count']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Time'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $link['Link']['time']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Link', true), array('action' => 'edit', $link['Link']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Link', true), array('action' => 'delete', $link['Link']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $link['Link']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Links', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Link', true), array('action' => 'add')); ?> </li>
	</ul>
</div>
