<?php $this->load->view('inc/header'); ?>

<div class="content mt-5">
  <div class="col-md-4 offset-md-4">
      <h2>Almost there!</h2>
      <h5>Hello <span><?php echo $firstName; ?></span>. Your email is: <span><?php echo $email;?></span></h5>
      <p>Enter a password to get started</p>
  <?php 
      $fattr = array('class' => 'form-signin');
      echo form_open(site_url().'auth/complete/token/'.$token, $fattr); ?>
      <div class="form-group mb-2">
        <?php echo form_password(array('name'=>'password', 'id'=> 'password', 'placeholder'=>'Password', 'class'=>'form-control', 'value' => set_value('password'))); ?>
        <?php echo form_error('password') ?>
      </div>
      <div class="form-group mb-2">
        <?php echo form_password(array('name'=>'passconf', 'id'=> 'passconf', 'placeholder'=>'Confirm Password', 'class'=>'form-control', 'value'=> set_value('passconf'))); ?>
        <?php echo form_error('passconf') ?>
      </div>
      <?php echo form_hidden('user_id', $user_id);?>
      <?php echo form_submit(array('value'=>'Complete', 'class'=>'btn btn-lg btn-primary btn-block')); ?>
      <?php echo form_close(); ?>
     
  </div>
</div>

<?php $this->load->view('inc/footer'); ?>