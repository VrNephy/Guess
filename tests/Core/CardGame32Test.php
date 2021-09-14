<?PHP

namespace App\Tests\Core;

use App\Core\CardGame32;
use PHPUnit\Framework\TestCase;
use App\Core\Card;

class cardgame32Test extends TestCase
{
  //teste la fonction Tostring
  public function testToString()
  {
    $cardGame = new CardGame32([new Card ('As','Trèfle')]);
    $this->assertEquals('CardGame32 : 1 carte(s)',$cardGame->__toString());
  }
  
  //teste la onction ToString mais avec 2 cartes
  public function testToString2Cards()
  {
    $cardGame = new CardGame32([new Card ('As','Pique'), new Card('Roi','Pique')]); 
    $this->assertEquals('CardGame32 :  carte(s)',$cardGame->__toString());
  }

  //teste la fonction getCard qui pioche une carte dans le jeu
  public function testGetCards(){
    $cardGame = CardGame32 ::factoryCardGame32();
    $index = 1;
    $card1 = $cardGame ->getCard($index);
    $this->assertEquals('Roi', $card1->getName());
    $this->assertEquals('Trèfle', $card1->getColor());
  }

  // teste la fonction shuffle (mélange)
  public function testShuffle(){
    $cardGame = CardGame32::factoryCardGame32();
    $cardGame->shuffle();
    $cardGame2 = CardGame32::factoryCardGame32();
    $this->assertNotEquals($cardGame,$cardGame2);
  }

  //teste si la fonction reOrder fonctionne
  public function testreOrder(){
    $cardGame = CardGame32::factoryCardGame32();
    $cardGame->shuffle();
    $cardGame->reOrder();
    $cardGame2 = CardGame32::factoryCardGame32();
    $this->assertNotEquals($cardGame,$cardGame2);
  }
}


?>