<?php
// connect to database
require_once('../database.php');

// Setting variables for the contents of the form
$title = filter_input(INPUT_POST, 'title');
$genre = filter_input(INPUT_POST, 'genre');
$cast = filter_input(INPUT_POST, 'cast');
$director = filter_input(INPUT_POST, 'director');
$producer = filter_input(INPUT_POST, 'producer');
$synopsis = filter_input(INPUT_POST, 'synopsis');
$review = filter_input(INPUT_POST, 'review');
$rating = filter_input(INPUT_POST, 'rating');

try {
    // Querying the database
    $query = 'INSERT INTO movie
        (title, genre, cast, director, producer, synopsis, reviews, trailer_picture, trailer_video, mpaa_rating)
        VALUES 
        (:_title, :_genre, :_cast, :_director, :_producer, :_synopsis, :_reviews, :_trailer_picture, :_trailer_video, :_mpaa_rating)';
    $statement = $db->prepare($query);
    $statement->bindValue(':_title', $title);
    $statement->bindValue(':_genre', $genre);
    $statement->bindValue(':_cast', $cast);
    $statement->bindValue(':_director', $director);
    $statement->bindValue(':_producer', $producer);
    $statement->bindValue(':_synopsis', $synopsis);
    $statement->bindValue(':_reviews', $review);
    $statement->bindValue(':_trailer_picture', "test");
    $statement->bindValue(':_trailer_video', "test");
    $statement->bindValue(':_mpaa_rating', $rating);


    $statement->execute();
    $statement->closeCursor();

    // Redirecting to the sign_in page
    header("Location: ../../view/adminPortal/manageMovies.html");

} catch(PDOException $e) {
    echo 'Error!';
    echo $e;
}

?>