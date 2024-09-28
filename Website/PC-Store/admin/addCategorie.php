<?php
include '../db.php';
if (empty($_SESSION)) {
    session_start();
}

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Espace Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <meta name="msapplication-tap-highlight" content="no">
    <link href="./main.css" rel="stylesheet">
</head>

<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        <div class="app-header header-shadow">
            <div class="app-header__logo">
                <div class="logo-src"></div>
                <div class="header__pane ml-auto">
                    <div>
                        <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="app-header__mobile-menu">
                <div>
                    <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
            <div class="app-header__menu">
                <span>
                    <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                        <span class="btn-icon-wrapper">
                            <i class="fa fa-ellipsis-v fa-w-6"></i>
                        </span>
                    </button>
                </span>
            </div>
            <div class="app-header__content">
                <div class="app-header-right">
                    <div class="header-btn-lg pr-0">
                        <div class="widget-content p-0">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left">
                                </div>
                                <img width="42" class="rounded-circle" src="assets/images/avatars/avatar-admin.png" alt="">
                                <div class="widget-content-left  ml-3 header-user-info">
                                    <div class="widget-heading">
                                        <?php echo $_SESSION["userName"] . ' ' . $_SESSION["userFirstName"] ?>
                                    </div>
                                    <div class="widget-subheading">
                                        Admin
                                    </div>
                                </div>
                                <div class="widget-content-right header-user-info ml-3">
                                    <button type="button" class="btn-shadow p-1 btn btn-primary btn-sm">
                                        <i class="fa text-white fa-calendar pr-1 pl-1"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="app-main">
            <div class="app-sidebar sidebar-shadow">
                <div class="app-header__logo">
                    <div class="logo-src"></div>
                    <div class="header__pane ml-auto">
                        <div>
                            <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="app-header__mobile-menu">
                    <div>
                        <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
                <div class="app-header__menu">
                    <span>
                        <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                            <span class="btn-icon-wrapper">
                                <i class="fa fa-ellipsis-v fa-w-6"></i>
                            </span>
                        </button>
                    </span>
                </div>
                <div class="scrollbar-sidebar">
                    <div class="app-sidebar__inner">
                        <ul class="vertical-nav-menu">
                            <li class="app-sidebar__heading">Général</li>
                            <li>
                                <a href="index.php">
                                    <i class="metismenu-icon pe-7s-rocket"></i>
                                    Informations Générales
                                </a>
                            </li>
                            <li class="app-sidebar__heading">Catégories</li>
                            <li>
                                <a href="addCategorie.php" class="mm-active">
                                    <i class="metismenu-icon pe-7s-diamond"></i>
                                    Ajouter une catégorie
                                    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                </a>
                            </li>
                            <li>
                                <a href="handleCategories.php">
                                    <i class="metismenu-icon pe-7s-car"></i>
                                    Gérer les catégories
                                    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                </a>
                            </li>
                            <li class="app-sidebar__heading">Produits</li>
                            <li>
                                <a href="addProduct.php">
                                    <i class="metismenu-icon pe-7s-eyedropper"></i>
                                    Ajouter un produit
                                </a>
                                <a href="handleProducts.php">
                                    <i class="metismenu-icon pe-7s-display2"></i>
                                    Gérer les produits
                                </a>
                            </li>
                            <li class="app-sidebar__heading">Clients</li>
                            <li>
                                <a href="handleClients.php">
                                    <i class="metismenu-icon pe-7s-mouse">
                                    </i>Gérer les clients
                                </a>
                            </li>
                            <li class="app-sidebar__heading">Commandes</li>
                            <li>
                                <a href="handleSells.php">
                                    <i class="metismenu-icon pe-7s-graph2">
                                    </i>Gérer les commandes
                                </a>
                            </li>
                            <li class="app-sidebar__heading">Déconnexion</li>
                            <li>
                                <a href="../destroy.php">
                                    <i class="metismenu-icon pe-7s-power">
                                    </i>Se déconnecter
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="app-main__outer">
                <div class="app-main__inner">
                    <div class="app-page-title">
                        <div class="page-title-wrapper">
                            <div class="page-title-heading">
                                <div class="page-title-icon">
                                    <i class="pe-7s-upload text-success">
                                    </i>
                                </div>
                                <div>Ajouter une catégorie
                                    <div class="page-title-subheading">Ajouter des catégories et des sous-catégories.
                                    </div>
                                </div>
                            </div>
                            <div class="page-title-actions">
                                <button type="button" data-toggle="tooltip" title="Espace Admin" data-placement="left" class="btn-shadow mr-3 btn btn-dark">
                                    <i class="fa fa-star"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <ul class="body-tabs body-tabs-layout tabs-animated body-tabs-animated nav">
                        <li class="nav-item">
                            <a role="tab" class="nav-link active" id="tab-0" data-toggle="tab" href="#tab-content-0">
                                <span>Catégorie</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a role="tab" class="nav-link" id="tab-1" data-toggle="tab" href="#tab-content-1">
                                <span>Sous-catégorie</span>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                            <div class="main-card mb-3 card">
                                <div class="card-body">
                                    <h5 class="card-title">Ajouter une catégorie parente</h5>
                                    <form id="addCat-form" method="post" action="redirect.php">
                                        <div class="form-row">
                                            <div class="col-md-6">
                                                <div class="position-relative form-group"><label for="exampleEmail11" class="">Nom de la catégorie</label><input name="nomCat" id="exampleEmail11" placeholder="ex : PC Gamer" class="form-control"></div>
                                            </div>
                                        </div>
                                        <div class="position-relative form-group"><label for="exampleAddress" class="">Description</label><input name="desCat" id="exampleAddress" placeholder="ex : original PC builds" type="text" class="form-control"></div>
                                        <button type="submit" class="mt-2 btn btn-primary">Ajouter</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane tabs-animation fade" id="tab-content-1" role="tabpanel">
                            <div class="main-card mb-3 card">
                                <div class="card-body">
                                    <h5 class="card-title">Ajouter une sous-catégorie</h5>
                                    <form id="addCat-form" method="post" action="redirect.php">
                                        <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Sous-Catégorie</label>
                                            <div class="col-sm-10"><input name="nomSCat" id="exampleEmail" placeholder="ex : INTEL Build" type="text" class="form-control"></div>
                                        </div>
                                        <div class="position-relative row form-group"><label for="exampleSelect" class="col-sm-2 col-form-label">Catégorie Parente</label>
                                            <div class="col-sm-10"><select name="selectCat" id="exampleSelect" class="form-control">
                                                    <?php
                                                    $sql = "SELECT idCategorie,desp_cat FROM categorie WHERE idCat_parente = 0";
                                                    $result = mysqli_query($con, $sql);
                                                    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                                                        echo '<option value="' . $row['idCategorie'] . '">' . $row['desp_cat'] . '</option>';
                                                    }
                                                    ?>
                                                </select></div>
                                        </div>
                                        <div class="position-relative row form-group"><label for="exampleText" class="col-sm-2 col-form-label">Description</label>
                                            <div class="col-sm-10"><textarea name="text" id="exampleText" class="form-control"></textarea></div>
                                        </div>
                                        <div class="position-relative row form-check">
                                            <div class="col-sm-10 offset-sm-2">
                                                <button type="submit" class="btn btn-primary">Ajouter la sous-catégorie</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="./assets/scripts/main.js"></script>
</body>

</html>