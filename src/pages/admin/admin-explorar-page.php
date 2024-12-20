<?php include '../sesion.php'; ?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta
        name="viewport"
        content="width=
    , initial-scale=1.0" />
    <link rel="icon" href="../../assets/logo1.webp" />
    <link rel="stylesheet" href="../../styles/admin/admin-explorar-page.css" />
    <script src="../../scripts/admin/admin-explorar-page.js" defer></script>
    <title>Explorar</title>
</head>


<body>

    <!-- VENTANAS MODAL -->
    <!-- ---------------------------------------------------------------- -->


    <!-- ---------------------------------------------------------------- -->
    <!-- MODAL MOSTRAR LIBRO -->
    <!-- ---------------------------------------------------------------- -->

    <dialog class="modal" id="modal-libro">

        <input type="hidden" id="isbn-modal-mostrar-libro">

        <div class="modal-content" id="modal-content-mostrar-libro">
            <section>
                <img
                    src="../../assets/jardinmariposas.jpg"
                    class="modal-img-libro"
                    alt=""
                    id="modal-img-libro" />
            </section>
            <section class="libro-info-container">
                <div class="titulo-modal-container">
                    <h3 id="libro-titulo"></h3>
                </div>
                <div>
                    <h3 class="libro-info-h3" id="libro-autor"></h3>
                </div>
                <div class="editorial-modal-container">
                    <h3 class="libro-info-h3" id="libro-editorial"></h3>
                </div>
                <div class="categoria-modal-container">
                    <h3 id="libro-categoria"></h3>
                </div>
                <div class="sinopsis-modal-container">
                    <p id="libro-sinopsis"></p>
                </div>
            </section>
        </div>
    </dialog>

    <!-- ---------------------------------------------------------------- -->
    <!-- MODAL TRAMITAR PRESTAMO -->
    <!-- ---------------------------------------------------------------- -->
 
  
    <aside class="aside-nav-section">
        <div class="library-title">
            <img src="../../assets/logo1.webp" alt="" id="imgL" />
            <h1>Biblioteca</h1>
        </div>
        <nav class="nav-section">
            <ul class="nav-options-list">
                <li class="nav-element">
                    <a href="../../pages/admin/admin-principal-page.php">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-home">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M5 12l-2 0l9 -9l9 9l-2 0" />
                            <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
                            <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" />
                        </svg>
                        <h4>Home</h4>
                    </a>
                </li>
                <li class="nav-element">
                    <a href="../admin/admin-usuarios-page.php">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-users">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M9 7m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                            <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                            <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                            <path d="M21 21v-2a4 4 0 0 0 -3 -3.85" />
                        </svg>
                        <h4>Usuarios</h4>
                    </a>
                </li>
                <li class="nav-element">
                    <a href="../admin/admin-explorar-page.php">
                    <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-world-search"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M21 12a9 9 0 1 0 -9 9" /><path d="M3.6 9h16.8" /><path d="M3.6 15h7.9" /><path d="M11.5 3a17 17 0 0 0 0 18" /><path d="M12.5 3a16.984 16.984 0 0 1 2.574 8.62" /><path d="M18 18m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" /><path d="M20.2 20.2l1.8 1.8" /></svg>
                        <h4>Explorar</h4>
                    </a>
                </li>
            </ul>
            <hr />
            <ul class="user-menu">
                <li class="nav-element">
                    <a href="../admin/admin-perfil-page.php">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-user">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                            <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                        </svg>
                        <h4>Perfil</h4>
                    </a>
                </li>
                <li class="nav-element">
                    <a href="../login.php  ">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-logout-2">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M10 8v-2a2 2 0 0 1 2 -2h7a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-7a2 2 0 0 1 -2 -2v-2" />
                            <path d="M15 12h-12l3 -3" />
                            <path d="M6 15l-3 -3" />
                        </svg>
                        <h4>Cerrar Sesión</h4>
                    </a>
                </li>
            </ul>
        </nav>
    </aside>
    <main>
        <section class="explorar-libros">
            <header class="header-explorar">
                <h1>Explorar Libros</h1>
                <form action="" method="get">
                    <input type="text" placeholder="Buscar libro" name="busqueda">
                </form>
            </header>
            <div class="explorar-container">

                <?php
                require_once '../../db/Database.php';
                try {
                    $db = new Database();
                    $pdo = $db->getConnection();

                    // Obtener el término de búsqueda, si existe
                    $busqueda = isset($_GET['busqueda']) ? trim($_GET['busqueda']) : '';
                    $sql = "SELECT isbn, imagen, titulo, autor FROM libros";

                    // Solo agregar filtro si hay un término de búsqueda
                    if (!empty($busqueda)) {
                        $sql .= " WHERE isbn LIKE :busqueda 
                              OR titulo LIKE :busqueda 
                              OR autor LIKE :busqueda";
                    }

                    $stmt = $pdo->prepare($sql);

                    // Si hay término de búsqueda, vincular parámetro
                    if (!empty($busqueda)) {
                        $searchParam = '%' . $busqueda . '%';
                        $stmt->bindParam(':busqueda', $searchParam, PDO::PARAM_STR);
                    }

                    $stmt->execute();
                    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

                    if (count($result) == 0) { //El HTML que mostrara en caso de que no encuentre libros
                        echo '<h4 style="text-align:center;">No se encontraron libros</h4>';
                    } else {
                        foreach ($result as $libro) { //Estructura html de la carta del libro, ya con sus datos correspondientes
                            echo '<div class="book-card" id="' . htmlspecialchars($libro['isbn']) . '">
                            <img
                                src="' . htmlspecialchars($libro['imagen']) . '"
                                alt=""
                                class="img-book-card"
                            />
                            <div class="book-card-info-container">
                                <h4 class="book-name">
                                    ' . htmlspecialchars($libro['titulo']) . '
                                </h4>
                                <h5>' . htmlspecialchars($libro['autor']) . '</h5>
                            </div>
                        </div>';
                        }
                    }
                } catch (PDOException $e) { // Si hubo un error en la consulta , mostrar el siguiente html
                    echo '<h4 style="text-align:center;">Error en la consulta: ' . $e->getMessage() . '</h4>';
                }
                ?>
            </div>
        </section>


    </main>
</body>

</html>