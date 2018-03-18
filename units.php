<?

abstract class Unit {
	private $experience	= 0;
	private $power		= 10;
	private $agility	= 0;
	private $intellect	= 80;
	private $name;
	
	function __construct( $name, Perk $perk, IntellectPerk $intell ) {
		$this->name			= $name;
		$this->power		= $this->power + $perk->power;
		$this->intellect	= $this->intellect + $intell->intellect;
	}
	function getExperience() {
		print "Unit experience	 	= " 	. $this->experience . "\n";
	}
	function getPower() {
		print "Unit power			= "		. $this->power . "\n";
	}
	function getAgility() {
		print "Unit agility 		= " 	. $this->agility . "\n";
	}
	function getIntellect() {
		print "Unit iq 			= " 	. $this->intellect . "\n";
	}
	function getName() {
		print "Unit name 			= " 		. $this->name . "\n";
	}
	
}

class Knight extends Unit {}

class Cavalry extends Unit {}

class Archer extends Unit{}

class Canon extends Unit{}

abstract class Perk {
	
}

class PowerPerk extends Perk{
	public $power = 100;
}
class IntellectPerk extends Perk {
	public $intellect = 20;
}

$warrior = new Knight( "Василий *the Brave one* Рыцарь", new PowerPerk, new IntellectPerk );
$warrior->getPower();
$warrior->getAgility();
$warrior->getIntellect();
$warrior->getExperience();
$warrior->getName();

?>