<?php 


require_once 'vendor/autoload.php';
 
use B_Module3\Game;
use B_Module3\Music;
use B_Module3\Movie;
use B_Module3\Catelog;
use B_Module3\Product;




 
$game = new Game("GTA V", "An action-packed adventure",8.00,"losers","horror", ["8GB RAM"]);
$music = new Music("Top Hits", "A collection of chart-topping songs", "Sony Music", 5.99, 9, ["3:45"]);
$movie = new Movie("Wolf of Wall Street", "A captivating drama", "Paramount Pictures", 5.99, 9, ["3:45"]);
 

$catelog = new Catelog();
 

$catelog->addProduct($game);
$catelog->addProduct($music);
$catelog->addProduct($movie);
 

foreach ($catelog->getProducts() as $product) {
    print_r($game->getInfo());
 
}
 

$catelog->removeProduct($game);
$catelog->removeProduct($music);
 
 
echo "Prijs" . $catelog->getAveragePrice();

 
