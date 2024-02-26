<?=$this->extend('layout/main')?>

<?=$this->section('content')?>

    <link rel="stylesheet" href="<?=base_url()?>public/css/viewProfile.css">
    <title>Edit Profile</title>

    <?=$this->include('include/nav2')?>

    <div class="container mt-5" id="form_container">
        <?php if(session()->get('success-update-profile')):?>
            <div id="updateAlert" class="alert alert-success" role="alert">
                <?php echo session()->get('success-update-profile')?>
            </div>
        <?php endif;?>
        <?php if (isset($validation)): ?>
            <div id="alert" class="alert alert-danger" role="alert">
                <?=$validation->listErrors();?>
            </div>
        <?php endif; ?>
        <h2 class="text-center mb-2">Edit User Profile</h2>
        <div>
            <form action="<?= base_url('profile/updateProfile') ?>" method="post" enctype="multipart/form-data">
                <!-- Display Profile Picture -->
                <div class="profile-picture">
                    <img src="<?= base_url('public/uploads/profile_pictures/' . $userData->profile_picture) ?>" alt="Profile Picture">
                    <!-- Upload/Change Profile Picture -->
                    <input type="file" class="form-control upload-input" id="profile_picture" name="profile_picture">
                </div>

                <!-- Profile Information -->
                <div class="form-group">
                    <label for="first_name">First Name:</label>
                    <input type="text" class="form-control" id="first_name" name="first_name" value="<?= $userData->first_name ?>">
                </div>
                <div class="form-group">
                    <label for="middle_name">Middle Name:</label>
                    <input type="text" class="form-control" id="middle_name" name="middle_name" value="<?= $userData->middle_name ?>">
                </div>
                <div class="form-group">
                    <label for="last_name">Last Name:</label>
                    <input type="text" class="form-control" id="last_name" name="last_name" value="<?= $userData->last_name ?>">
                </div>
                <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" class="form-control" id="username" value="<?= session()->get('myUsername') ?>" disabled>
                </div>
                
                <!-- Buttons -->
                <div class="container mt-3">
                    <div class="d-flex justify-content-between">
                        <div id="goBackButtonContainer">
                            <a href="<?=base_url()?>dashboard" class="btn btn-primary" id="goBackButton">Go Back</a>
                        </div>
                        <button type="submit" class="btn btn-primary" id="goBackButton">Update Profile</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

<?=$this->include('include/alertTimer.js')?>
<?=$this->endSection('content')?>
