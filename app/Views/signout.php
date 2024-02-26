<?=$this->extend('layout/main')?>

<?=$this->section('content')?>

    <link rel="stylesheet" href="<?=base_url()?>public/css/signout.css">
    <title>Sign Out</title>

    <div class="container" div id="form_container">
            <form id="form" action="#" method="post">
                <h2 class="text-center">Are you sure you want to sign out?</h2>
                <div class="container mt-3">
                    <div class="d-flex justify-content-between text-center">
                        <div id="goBackButtonContainer">
                            <a href="<?=base_url()?>dashboard" class="btn btn-primary" id="noButton">No</a>
                        </div>
                        <div id="submitButtonContainer" class="text-center">
                            <a href="<?=base_url()?>signout/confirmed" class="btn btn-primary" id="yesButton">Yes</a>
                        </div>
                    </div>
                </div>
            </form>
    </div>

<?=$this->endSection('content')?>