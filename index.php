<?php 

    $title ="CRUD";
    include "header.php";

?>


    <section class="indexsection vh-100 mt-4">
        <div class="container h-100">
            <div class="row h-100 pt-depart-relative">
                <div class="bg-gif col-4 go-down-positon">

                </div>
                <div class="col-8 center-item-column">
                    <h1 class="title grow-up-text">BIENVENUE DANS CRUD</h1>
                    <h1 class="subtitle grow-down-title">"votre meilleur outil dans le domaine des ressources humaines"</h1>
                </div>
                <div class="masque"></div>
            </div>
        </div>
    </section>
    <div class="sectionservice container">
        <h1 class="text-lg-center shadow subtitle color-link grow-up-text mt-4">NOS SERVICES</h1>
        <div class="container">
            <div class="row justify-content-between">
                <div class="col card mb-3 align-items-center justify-content-center" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                        <img src="access.png" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Accessibilité</h5>
                            <p class="card-text">Nous fournissons un service accessible à tous, avec un site web totalement conçue pour être le pluis intuitive possible</p>
                            <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="col card mb-3 align-items-center justify-content-center" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4 center-item-column">
                            <img src="security.png" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Sécurité</h5>
                            <p class="card-text">Nous sommes encore en phase de développement, mais une fois le projet totalement fnis nous pourrions garantir une sécurité sans failles sur vos données personnelles.</p>
                            <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include_once "footer.php"; ?>