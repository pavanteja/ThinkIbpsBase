	<div class="logoback"></div>
<div class="container">
 
<div class="logo"></div>
<div class="formwrapper">


 <h3 class="frmLoginTitle">Login</h3>

 
<?php echo $this->Session->flash('auth'); ?>
<?php echo $this->Form->create('User',array('inputDefaults' => array('label' => false,'div' => false),'class'=>'form-horizontal')); ?>
 
 <div class="control-group">
    <label class="control-label" for="inputUser">Username</label>
    <div class="controls">
     <?php echo $this->Form->input('username'); ?>
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputPassword">Password</label>
    <div class="controls">
     <?php echo $this->Form->input('password'); ?>
    </div>
  </div>
  <div class="control-group">
    <div class="controls">
      <label class="checkbox">
        <input type="checkbox"> Remember me
      </label>
        <?php
$options = array(
    'label' => 'Sign in',
    
        'class' => 'btn',
    
);
echo $this->Form->end($options); ?>
    </div>
  </div>

</form>
</div>
</div>
