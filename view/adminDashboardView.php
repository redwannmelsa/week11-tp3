<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Tableau de Bord Admin</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php">Ma Boutique</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Boutique</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="admin_dashboard.php">Dashboard Admin</a>
      </li>
      <?php if (isset($_SESSION['admin_logged_in']) && $_SESSION['admin_logged_in']): ?>
        <li class="nav-item">
          <a class="nav-link" href="admin_logout.php">Déconnexion Admin</a>
        </li>
      <?php endif; ?>
    </ul>
  </div>
</nav>

<div class="dashboard-section">
    <div class="container">
        <h2 class="mb-4 text-center">Tableau de Bord Admin</h2>
        <div class="card shadow-lg mb-4">
            <div class="card-body">
                <table class="table table-striped">
                    <thead class="thead-dark">
                    <tr>
                        <th>Titre</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($products as $id => $product) : ?>
                        <tr>
                            <td><?php echo $product['title']; ?></td>
                            <td>
                                <a href="edit_product.php?id=<?php echo $id; ?>" class="btn btn-info btn-sm">Éditer</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
                <a href="add_product.php" class="btn btn-primary btn-lg">Ajouter un Produit</a>
            </div>
        </div>
    </div>
</div>

<style>
    body, html {
    margin: 0;
    padding: 0;
    height: 100%;
    font-family: 'Arial', sans-serif;
}

.dashboard-section {
    background-color: #f8f9fa;
    color: #333333;
    min-height: 100vh;
    padding: 40px 0;
}

.container {
    max-width: 800px;
    margin: auto;
}

h2 {
    font-size: 2.5rem;
}

.card {
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: 0.3s;
}

.card:hover {
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
}

.table thead {
    background-color: #007bff;
    color: white;
}

.btn-lg {
    padding: 10px 40px;
    font-size: 1.2rem;
}

</style>
</body>
</html>