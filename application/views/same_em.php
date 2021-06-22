<?php $this->load->view('inc/header')  ?>

<body>
    <div class="container col-md-4 offset-md-4 mt-5 p-4 chk">
        <h2>User email already exists.</h2>
        <h5>Use antoher email.</h5>
        <a href="<?php echo site_url('UserController'); ?>"><button type="button" class="btn btn-warning">Back</button></a>
    </div>
</body>
</html>