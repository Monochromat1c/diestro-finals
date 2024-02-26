<?=$this->extend('layout/main')?>

<?=$this->section('content')?>

<!-- <link rel="stylesheet" href="<?=base_url()?>public/css/style.css"> -->
<link rel="stylesheet" href="<?=base_url()?>public/css/signUp-signIn.css">
<!-- <link rel="stylesheet" href="<?=base_url()?>public/css/add_data.css"> -->
<title>Sign in to continue</title>

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
            <?php if(session()->get('invalid')):?>
                <div id="Alert" class="alert alert-danger" role="alert">
                    <?php echo session()->get('invalid')?>
                </div>
            <?php endif;?>
            <?php if (isset($validation)): ?>
                <div id="Alert" class="alert alert-danger" id="error" role="alert">
                    <?=$validation->listErrors();?>
                </div>
            <?php endif; ?>
    </div>
    <div class="container mt-5" div id="form_container">
            <form id="form" action="<?=base_url()?>signin" method="post">
                <h2 class="text-center">Sign In To Continue!</h2>
                <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" class="form-control" id="username" name="username" value="<?=set_value('username')?>" placeholder="Enter your Username.">
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Enter your Password.">
                </div>
                <div class="container mt-3">
                    <div class="d-flex justify-content-between">
                        <div id="goBackButtonContainer">
                            <a href="<?=base_url()?>signup" class="btn btn-primary" id="goBackButton">Sign Up Here</a>
                        </div>
                        <div id="submitButtonContainer">
                            <button type="submit" class="btn btn-primary" id="submitButton">Sign In</button>
                        </div>
                    </div>
                </div>
            </form>
    </div>
</div>
<?=$this->include('include/alertTimer.js')?>
<?=$this->endSection('content')?>