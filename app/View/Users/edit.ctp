<?php echo $this->Form->create('User');?>
			<?php  echo $this->Form->input('id'); ?>
			<?php  echo $this->Form->input('sname',array('label' => 'Username')); ?>
			<?php echo $this->Form->input('password',array('label' => 'Password')); ?>
		
<?php echo $this->Form->end('Save'); ?>
