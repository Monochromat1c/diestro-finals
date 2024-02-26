<?=$this->extend('layout/main')?>

<?=$this->section('content')?>

    <link rel="stylesheet" href="<?=base_url()?>public/css/add_data.css">
    <title>Add New Data</title>
    
   
<?=$this->include('include/nav2')?>

    <div class="container mt-5" div id="form_container">
        <?php if(session()->get('success-add-data')):?>
            <div id="Alert" class="alert alert-success" role="alert">
                <?php echo session()->get('success-add-data')?>
            </div>
        <?php endif;?>
        <?php if (isset($validation)): ?>
            <div class="alert alert-danger" id="error" role="alert">
                <?=$validation->listErrors();?>
            </div>
        <?php endif; ?>
            <form id="form" action="<?=base_url()?>add/data" method="post">
                <h2 class="text-center">What insect is it?</h2>
                <div class="form-group">
                    <label for="insect_name">Insect Name:</label>
                    <input type="text" class="form-control" id="insect_name" value="<?=set_value('insect_name')?>" name="insect_name" placeholder="Enter the name of the insect.">
                </div>
                <div class="form-group">
                    <label for="insect_species">Species:</label>
                    <select class="form-control" id="insect_species" name="speciesID">
                        <option id="optionText" value="">Select Species</option>
                        <?php foreach ($species as $specie): ?>
                            <option id="optionText" value="<?= $specie->speciesID ?>"><?= $specie->species ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="insect_habitat">Natural Habitat:</label>
                    <select class="form-control" id="insect_habitat" name="habitatID">
                        <option id="optionText" value="">Select Habitat</option>
                        <?php foreach ($habitats as $habitat): ?>
                            <option id="optionText" value="<?= $habitat->habitatID ?>"><?= $habitat->habitat ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="container mt-3">
                    <div class="d-flex justify-content-between">
                        <div id="goBackButtonContainer">
                            <a href="<?=base_url()?>dashboard" class="btn btn-primary" id="goBackButton">Go Back</a>
                        </div>
                        <div id="submitButtonContainer">
                            <button type="submit" class="btn btn-primary" id="submitButton">Submit</button>
                        </div>
                    </div>
                </div>
            </form>
    </div>

<?=$this->include('include/alertTimer.js')?>
<?=$this->endSection('content')?>