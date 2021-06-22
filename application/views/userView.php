<?php $this->load->view('inc/header') ?>
<div class="container mt-40">
    <button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Add User
    </button>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">User Registration</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="p-2" method="post" action="<?php echo site_url('UserController/create') ?>">
                        <div class="form-group">
                            <label for="firstname">First Name</label>
                            <input type="text" class="form-control mb-2" id="firstname" required name="firstname">
                        </div>
                        <div class="form-group">
                            <label for="lastname">Last Name</label>
                            <input type="text" class="form-control mb-2" id="lastname" required name="lastname">
                        </div>
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control mb-2" id="username" required name="username">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control mb-2" id="email" required name="email">
                        </div>
                        <div class="form-group">
                            <label for="contact_no">Contact No</label>
                            <input type="text" class="form-control mb-2" id="contact_no" required name="contact_no">
                        </div>
                        <div class="form-group">
                            <label class="pr-4" for="gender">Gender</label>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="M">
                                <label class="form-check-label" for="inlineRadio1">Male</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="F">
                                <label class="form-check-label" for="inlineRadio2">Female</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="mt-2" for="password">Password</label>
                            <input type="password" class="form-control mb-2" id="password" required name="password">
                        </div>
                        <div class="form-group">
                            <label for="confirm_password">Confirm Password</label>
                            <input type="password" class="form-control mb-2" id="confirm_password" required name="confirm_password">
                        </div>
                        <button type="submit" class="btn btn-primary mt-2" value="save">Save user</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table">
            <thead class="table-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Firstname</th>
                    <th scope="col">Lastname</th>
                    <th scope="col">Username</th>
                    <th scope="col">Email</th>
                    <th scope="col">Contact No</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($result as $row) { ?>
                    <tr>
                        <th scope="row"><?php echo $row->id ?></th>
                        <td><?php echo $row->firstname ?></td>
                        <td><?php echo $row->lastname ?></td>
                        <td><?php echo $row->username ?></td>
                        <td><?php echo $row->email ?></td>
                        <td><?php echo $row->contact_no ?></td>
                        <td><?php echo $row->gender ?></td>
                        <td><a href="<?php echo site_url('UserController/edit'); ?>/<?php echo $row->id; ?>"><button type="button" class="btn action btn-primary">Edit</button></a> |
                            <a href="<?php echo site_url('UserController/delete'); ?>/<?php echo $row->id; ?>"><button type="button" class="btn action btn-danger">Delete</button></a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
</body>

</html>