<?=$this->extend('layout/main')?>

<?=$this->section('content')?>

    <link rel="stylesheet" href="<?=base_url()?>public/css/viewProfile.css">
    <title>View Profile</title>

<?=$this->include('include/nav2')?>

<div class="container mt-5" div id="form_container">
    <h2 class="text-center mb-2">User Profile</h2>
    <div>
        <!-- Display Profile Picture -->
        <div class="profile-picture">
            <img src="<?= base_url('public/uploads/profile_pictures/' . $userData->profile_picture) ?>" alt="Profile Picture">
        </div>
        <div class="form-group">
            <label for="first_name">First Name:</label>
            <input type="text" class="form-control" id="first_name" value="<?= $userData->first_name ?>" disabled>
        </div>
        <div class="form-group">
            <label for="middle_name">Middle Name:</label>
            <input type="text" class="form-control" id="middle_name" value="<?= $userData->middle_name ?>" disabled>
        </div>
        <div class="form-group">
            <label for="last_name">Last Name:</label>
            <input type="text" class="form-control" id="last_name" value="<?= $userData->last_name ?>" disabled>
        </div>
        <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" class="form-control" id="username" value="<?= $userData->username ?>" disabled>
        </div>
    </div>
    <div class="container mt-3">
            <div class="d-flex justify-content-end">
                <div id="goBackButtonContainer">
                    <a href="<?=base_url()?>dashboard" class="btn btn-primary" id="goBackButton">Go Back</a>
                </div>
            </div>
        </div>
</div>

<?=$this->endSection('content')?>