<?php $this->load->view('inc/header'); ?>

<div class="content mt-5">
  <div class="col-md-4 offset-md-4">
    <?php $this->load->view('_flash_message') ?>
    <h2>Login here</h2>
    <?php $fattr = array('class' => 'form-signin');
    echo form_open(base_url() . 'auth/login', $fattr); ?>
    <div class="logform p-4">
      <div class="form-group mb-2">
        <?php echo form_input(array(
          'name' => 'email',
          'id' => 'email',
          'placeholder' => 'Email',
          'class' => 'form-control',
          'value' => set_value('email')
        )); ?>
        <?php echo form_error('email') ?>
      </div>
      <div class="form-group mb-2">
        <?php echo form_password(array(
          'name' => 'password',
          'id' => 'password',
          'placeholder' => 'Password',
          'class' => 'form-control',
          'value' => set_value('password')
        )); ?>
        <?php echo form_error('password') ?>
      </div>
      <?php echo form_submit(array('value' => 'Login', 'class' => 'btn btn-primary btn-block')); ?>
      <?php echo form_close(); ?>
    </div>
    <p class="mt-2">Don't have an account? Click to <a href="<?php echo base_url(); ?>auth/register">Register</a></p>
    <p>Forgot Password? <a href="<?php echo base_url(); ?>auth/forgot">Reset password</a></p>
  </div>
</div>

<?php $this->load->view('inc/footer'); ?>