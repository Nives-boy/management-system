<?php $this->load->view('inc/header') ?>
<div class="container upform col-sm-4 mt-40 p-4">
    <h5 class="text-center">Update User</h5>
    <form method="post" action="<?php echo site_url('UserController/update'); ?>/<?php echo $row->id; ?>">
        <div class="form-group">
            <label class="col-sm-4 col-form-label" for="firstname">First Name</label>
            <input type="text" class="form-control" id="firstname" name="firstname" value="<?php echo $row->firstname; ?>">
        </div>
        <div class="form-group">
            <label class="col-sm-4 col-form-label mt-2" for="lastname">Last Name</label>
            <input type="text" class="form-control" id="lastname" name="lastname" value="<?php echo $row->lastname; ?>">
        </div>
        <div class="form-group">
            <label class="col-sm-4 col-form-label mt-2" for="username">Username</label>
            <input type="text" class="form-control" id="username" name="username" value="<?php echo $row->username; ?>">
        </div>
        <div class="form-group">
            <label class="col-sm-4 col-form-label mt-2" for="email">Email</label>
            <input type="text" class="form-control" id="email" name="email" value="<?php echo $row->email; ?>">
        </div>
        <div class="form-group">
            <label class="col-sm-4 col-form-label mt-2" for="contact_no">Contact No</label>
            <input type="text" class="form-control" id="contact_no" name="contact_no" value="<?php echo $row->contact_no; ?>">
        </div>
        <button type="submit" class="btn btn-primary mt-4" value="save">Save changes</button>
        <a href="<?php echo site_url('UserController'); ?>"><button type="button" class="btn btn-danger mt-4">Cancel</button>
        </a>
    </form>
</div>
</body>
</html>