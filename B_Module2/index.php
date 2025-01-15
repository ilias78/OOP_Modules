<?php

require_once 'Book.php';
require_once 'BookCatalog.php';


$book1 = new Book('Leren programmeren in C#', 'Michiel Rotteveel', 45.00);
$book2 = new Book('Android en Kotlin', 'Krijn Hoogendorp', 44.00);
$book3 = new Book('Leren programmeren, meten en sturen met de arduino', 'Jacco de Jong', 27.95);


$catalog = new BookCatalog();


echo "Boek: {$book1->getTitle()} is toegevoegd<br>";
$catalog->addBook($book1);

echo "Boek: {$book2->getTitle()} is toegevoegd<br>";
$catalog->addBook($book2);

echo "Boek: {$book3->getTitle()} is toegevoegd<br>";
$catalog->addBook($book3);


echo "<br>Lijst van boeken is nu:<br>";
echo "<table border='1' style='border-collapse: collapse; width: 100%; text-align: left;'>";
echo "<tr><th>Title</th><th>Autheur</th><th>Prijs</th></tr>";

foreach ($catalog->getCatalog() as $book) {
    echo "<tr>";
    echo "<td>{$book->getTitle()}</td>";
    echo "<td>{$book->getAuthor()}</td>";
    echo "<td>€{$book->getPrice()}</td>";
    echo "</tr>";
}

echo "</table>";


echo "<br>De gemiddelde prijs is: €" . number_format($catalog->getAvgPrice(), 2) . "<br>";


echo "<br>Boek: {$book2->getTitle()} is verwijderd<br>";
$catalog->removeBook($book2);


echo "<br>Lijst van boeken is nu:<br>";
echo "<table border='1' style='border-collapse: collapse; width: 100%; text-align: left;'>";
echo "<tr><th>Title</th><th>Autheur</th><th>Prijs</th></tr>";

foreach ($catalog->getCatalog() as $book) {
    echo "<tr>";
    echo "<td>{$book->getTitle()}</td>";
    echo "<td>{$book->getAuthor()}</td>";
    echo "<td>€{$book->getPrice()}</td>";
    echo "</tr>";
}

echo "</table>";


echo "<br>De nieuwe gemiddelde prijs is: €" . number_format($catalog->getAvgPrice(), 2) . "<br>";
