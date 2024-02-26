<?=$this->extend('layout/main')?>

<?=$this->section('content')?>

<!-- <link rel="stylesheet" href="<?=base_url()?>public/css/add_data.css"> -->
<link rel="stylesheet" href="<?=base_url()?>public/css/dashboard.css">
<title>DASHBOARD</title>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#" id="navTitle">EntomoloGlee</a>
        <button class="navbar-toggler" type="button" d ata-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <form id="searchForm" class="d-flex" role="search">
            <input id="searchInput" class="form-control me-2" type="search" placeholder="Search an insect." aria-label="Search">
        </form>
        </ul>
        <div id="dropdownLink">
            <li id="nav-item-dropdown" class="nav-item dropdown text-decoration-none">
            <a class="nav-link dropdown-toggle text-decoration-none" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <?=session()->get('myFullName')?>
            </a>
            <ul class="dropdown-menu" id="dropdownMenu">
                <li><a class="dropdown-item" href="<?=base_url()?>view/profile">View Profile</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="<?=base_url()?>edit/profile">Edit Profile</a></li>
                
            </ul>
            </li>
        </div>
        </li>
            <a id="logout" class="nav-link active" aria-current="page" href="<?=base_url()?>signout">Sign Out</a>
        </div>
    </div>
</nav>
    <h1 class="text-center">Insect Record</h1>
    <div class="container" id="tableContainer">
        <?php if(session()->get('success-update-insect')):?>
            <div id="updateAlert" class="alert alert-success" role="alert">
                <?php echo session()->get('success-update-insect')?>
            </div>
        <?php endif;?>
        <?php if(session()->get('success-delete-insect')):?>
            <div id="deleteAlert" class="alert alert-success" role="alert">
                <?php echo session()->get('success-delete-insect')?>
            </div>
        <?php endif;?>
        <table class="table">
            <thead class="tableHeader" class="sticky-top" id="tableHeader">
                <tr class="text-center">
                <th scope="col" id="thead">ID</th>
                <th scope="col" id="thead">Insect Name</th>
                <th scope="col" id="thead">Species</th>
                <th scope="col" id="thead">Habitat</th>
                <th scope="col" id="thead">Action</th>
                </tr>
            </thead>
            <tbody id="tableBody">
                <?php foreach($insects as $insect):?>
                <tr class="text-center">
                    <td><?=$insect->insectID?></td>
                    <td><?=$insect->insect_name?></td>
                    <td><?=$insect->species?></td>
                    <td><?=$insect->habitat?></td>
                    <td>
                        <div class="d-flex flex-row justify-content-center">
                            <a href="<?=base_url()?>view/data/<?=$insect->insectID?>" class="btn btn-outline-primary viewButton px-2" id="tableButton">View</a>
                            <a href="<?=base_url()?>edit/data/<?=$insect->insectID?>" class="btn btn-outline-warning editButton px-2" id="tableButton">Edit</a>
                            <a href="<?=base_url()?>delete/data/<?=$insect->insectID?>" class="btn btn-outline-danger deleteButton px-2" id="tableButton">Delete</a>
                        </div>
                    </td>
                </tr>
                <?php endforeach;?>
            </tbody>
        </table>
    </div>
    <div class="nav justify-content-center mt-3">
        <a href="<?=base_url()?>add/data" class="btn btn-primary" id="submitButton">Add New Data</a>
    </div>

<?=$this->include('include/search.js')?>
<?=$this->include('include/alertTimer.js')?>
<?=$this->endSection('content')?>