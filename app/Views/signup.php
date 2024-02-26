<?=$this->extend('layout/main')?>

<?=$this->section('content')?>

<!-- <link rel="stylesheet" href="<?=base_url()?>public/css/style.css"> -->
<link rel="stylesheet" href="<?=base_url()?>public/css/signUp-signIn.css">
<!-- <link rel="stylesheet" href="<?=base_url()?>public/css/add_data.css"> -->
<title>Create Your Account</title>

<div id="navPosition">
    <nav class="navbar navbar-expand-lg bg-body-tertiary" id="navigationBar">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?=base_url()?>" id="navTitle">EntomoloGlee</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText" id="navbarPosition">
        </div>
    </div>
    </nav>
</div>
<div id="form-container">
    <div id="errorContainer" class="nav justify-content-center">
    <?php if(session()->get('success-add-user')):?>
            <div id="Alert" class="alert alert-success" role="alert">
                <?php echo session()->get('success-add-user')?>
            </div>
        <?php endif;?>
        <?php if (isset($validation)): ?>
            <div id="Alert" class="alert alert-danger" id="error" role="alert">
                <?=$validation->listErrors();?>
            </div>
        <?php endif; ?>
    </div>
    <div class="container mt-5" div id="form_container">
            <form id="form" action="<?=base_url()?>add/user" method="post">
                <h2 class="text-center">Create Your Account</h2>
                <div class="form-group">
                    <label for="first_name">First Name:</label>
                    <input type="text" class="form-control" id="first_name" name="first_name" value="<?=set_value('first_name')?>" placeholder="Enter Your First Name.">
                </div>
                <div class="form-group">
                    <label for="middle_name">Middle Name:</label>
                    <input type="text" class="form-control" id="middle_name" name="middle_name" value="<?=set_value('middle_name')?>" placeholder="Enter Your Middle Name.">
                </div>
                <div class="form-group">
                    <label for="last_name">Last Name:</label>
                    <input type="text" class="form-control" id="last_name" name="last_name" value="<?=set_value('last_name')?>" placeholder="Enter Your Last Name.">
                </div>
                <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" class="form-control" id="username" name="username" value="<?=set_value('username')?>" placeholder="Enter Your Username.">
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Enter Your Password.">
                </div>
                <div class="form-group">
                    <label for="confirm_password">Confirm Password:</label>
                    <input type="password" class="form-control" id="password" name="confirm_password" placeholder="Confirm Your Password.">
                </div>
                <div class="container mt-3">
                    <div class="d-flex justify-content-between">
                        <div id="goBackButtonContainer">
                            <a href="<?=base_url()?>signin" class="btn btn-primary" id="goBackButton">Sign In Here</a>
                        </div>
                        <div id="submitButtonContainer">
                            <button type="submit" class="btn btn-primary" id="submitButton">Register</button>
                        </div>
                    </div>
                </div>
            </form>
    </div>
</div>

<?=$this->include('include/alertTimer.js')?>
<?=$this->endSection('content')?>