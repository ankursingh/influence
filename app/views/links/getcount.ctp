<h2></h2>
<?php echo $this->Form->create('Link',array('inputDefaults' => array('div' => false,'label' => false)));?>
<table>
    <tr>
        <td><?php __('Link'); ?></td>
        <td><?php echo $this->Form->input('link');?></td>
    </tr>
    <tr>
        <td></td>
        <td><?php echo $this->Form->submit('Get Count !');?></td>

    </tr>
</table>
<?php echo $this->Form->end();?>