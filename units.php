<!DOCTYPE=html>
<html>
<head>
<meta charset = 'utf-8'>
</head>
<p>
<?

abstract class Unit {
	private $experience	= 0;
	private $power		= 0;
	private $agility	= 0;
	private $intellect	= 0;
	private $name;
	
	function __construct( $name ) {
		$this->power	= $power;
		$this->name		= $name;
		
	}
	function getExperience() {
		print "Unit experience = " 	. $this->experience . "\n";
	}
	function getPower() {
		print "Unit power = " 		. $this->power . "\n";
	}
	function getAgility() {
		print "Unit agility = " 	. $this->agility . "\n";
	}
	function getIntellect() {
		print "Unit intellect = " 	. $this->intellect . "\n";
	}
	function getName() {
		print "Unit name = " 		. $this->name . "\n";
	}
	
}

class Knight extends Unit {}

class Cavalry extends Unit {}

class Archer extends Unit{}

class Canon extends Unit{}

abstract class Perk {}
class PowerPerk extends Perk{
	function addPower( Unit $unit ) {
		return $unit->getPower ($this) + 11;
	}
}

$skill = new PowerPerk;

$warrior = new Knight( "Василий the Brave" );
$warrior->getPower();
$warrior->getAgility();
$warrior->getIntellect();
$warrior->getExperience();
$warrior->getName();


?>
</p>
</html>