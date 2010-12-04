<div class="links form">
<?php echo $this->Form->create('Link');?>
	<fieldset>
 		<legend><?php __('Add Link'); ?></legend>
	<?php
		echo $this->Form->input('link');
		echo $this->Form->input('influence_count');
		echo $this->Form->input('time');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Links', true), array('action' => 'index'));?></li>
	</ul>
</div>