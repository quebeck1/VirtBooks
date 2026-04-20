<!DOCTYPE html>
<html>
<head>
    <title>Bookshelf</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        .card {
            height: 100%;
        }
        .book-image {
            max-width: 100%;
            max-height: 100%;
        }
        .book-card {
            margin-bottom: 20px;
        }
        .download-button {
            text-align: center;
            margin-top: 10px;
        }
    </style>
</head>
<body>
	<?php require "parts/header-light.php" ?>

    <div class="container mt-5">
        <h1>Bookshelf</h1>
        <div class="row">
            <?php
						$db = new Database;

            $query = "SELECT books.id, books.title, authors.name as author, categories.name as category
                      FROM books
                      JOIN authors ON books.author_id = authors.id
                      JOIN categories ON books.category_id = categories.id";

            $result = $db->query($query);

            while ($row = $result->fetch_assoc()) {
                echo '<div class="col-md-3 book-card">';
                echo '<div class="card">';
                $image_filename = '../img/books/' . str_replace(' ', '_', $row['title']) . '.jpg';
                echo '<img src="' . $image_filename . '" class="card-img-top book-image" alt="' . $row['title'] . '">';
                echo '<div class="card-body">';
                echo '<h5 class="card-title">' . $row['title'] . '</h5>';
                echo '<p class="card-text">' . $row['author'] . '</p>';
                echo '</div>';
                echo '<div class="download-button">';
                $pdf_filename = '../pdf/' . str_replace(' ', '_', $row['title']) . '.pdf';
                echo '<a class="btn btn-success mb-2" href="' . $pdf_filename . '" download>Download PDF</a>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
            }

            $result->free();
            ?>
        </div>
    </div>

	<?php require "parts/footer.php" ?>
</body>
</html>
