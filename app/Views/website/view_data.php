<?=$this->extend('layout/main')?>

<?=$this->section('content')?>

    <link rel="stylesheet" href="<?=base_url()?>public/css/add_data.css">
    <title>View Data</title>

<?=$this->include('include/nav2')?>

    <div class="container mt-5" div id="form_container">
    <form id="form" action="<?=base_url()?>edit/data/<?=$insect->insectID?>" method="post">
        <h2 class="text-center">What insect is it?</h2>
        <div class="form-group">
            <label for="insect_name">Insect Name:</label>
            <input type="text" class="form-control" id="insect_name" value="<?=$insect->insect_name?>" name="insect_name" disabled>
        </div>
        <div class="form-group">
            <label for="insect_species">Species:</label>
            <input type="text" class="form-control" id="insect_species" value="<?=$insect->species?>" name="insect_species" disabled>
        </div>
        <div class="form-group">
            <label for="insect_habitat">Natural Habitat:</label>
            <input type="text" class="form-control" id="insect_habitat" value="<?=$insect->habitat?>" name="insect_habitat" disabled>
        </div>
        <div class="container mt-3">
            <div class="d-flex justify-content-end">
                <div id="goBackButtonContainer">
                    <a href="<?=base_url()?>dashboard" class="btn btn-primary" id="goBackButton">Go Back</a>
                </div>
            </div>
        </div>
    </form>
</div>

<?=$this->endSection('content')?>