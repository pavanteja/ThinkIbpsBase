	<div class="logoback"></div>
<div class="container">
 
<div class="logo"></div>
<div class="formwrapper">


 <h3 class="frmLoginTitle">Register</h3>

 

<?php echo $this->Form->create('User',array('inputDefaults' => array('label' => false,'div' => false),'class'=>'form-horizontal')); ?>
 
 <div class="control-group">
    <label class="control-label" for="inputUser">Firstname</label>
    <div class="controls">
     <?php echo $this->Form->input('firstname'); ?>
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputUser">Lastname</label>
    <div class="controls">
     <?php echo $this->Form->input('lastname'); ?>
    </div>
  </div>
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
    <label class="control-label" for="inputUser">Email</label>
    <div class="controls">
     <?php echo $this->Form->input('email'); ?>
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputUser">Phone</label>
    <div class="controls">
     <?php echo $this->Form->input('phone'); ?>
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputUser">State</label>
    <div class="controls">
     <?php echo $this->Form->input('state'); ?>
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputUser">City</label>
    <div class="controls">
     <?php echo $this->Form->input('city'); ?>
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputUser">Course</label>
    <div class="controls">
     <?php echo $this->Form->input('course'); ?>
    </div>
  </div>
  <div class="control-group">
    <div class="controls">
      <label class="checkbox">
        <input type="checkbox"> Remember me
      </label>
        <?php
$options = array(
    'label' => 'Register',
    
        'class' => 'btn',
    
);
echo $this->Form->end($options); ?>
    </div>
  </div>

</form>
</div>
</div>
