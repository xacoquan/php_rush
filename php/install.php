#!/usr/bin/php
<?PHP

if (file_exists("../private") == false)
  mkdir("../private");

$tab[] = array("id" => 0, "name" => "Artemis Missile", "photo" => "../img/Artemis.png", "type" => "Missile", "desc" => "Standard missile launcher on most Federation ships", "price" => 38);
$tab[] = array("id" => 1, "name" => "Hermes Missile", "photo" => "../img/Hermes.png", "type" => "Missile", "desc" => "Standard but powerful missile", "price" => 50);
$tab[] = array("id" => 2, "name" => "Breach Missile", "photo" => "../img/Hermes.png", "type" => "Missile", "desc" => "Most powerful missile designed", "price" => 70);
$tab[] = array("id" => 3, "name" => "Hull Missile", "photo" => "../img/Hermes.png", "type" => "Missile", "desc" => "These missiles are designed to cause maximum destruction to ship hull armor", "price" => 75);
$tab[] = array("id" => 4, "name" => "Pegasus Missile", "photo" => "../img/Artemis.png", "type" => "Missile", "desc" => "Creative missile design allows for two projectiles for the cost of one!", "price" => 80);
$tab[] = array("id" => 5, "name" => "Burst Laser I", "photo" => "../img/Burst1.png", "type" => "Laser", "desc" => "This simple burst laser isn't flashy but it gets the job done", "price" => 50);
$tab[] = array("id" => 6, "name" => "Burst Laser II", "photo" => "../img/Burst2.png", "type" => "Laser", "desc" => "Slightly improved version of the burst laser that fires more shots per charge", "price" => 80);
$tab[] = array("id" => 7, "name" => "Burst Laser III", "photo" => "../img/Burst3.png", "type" => "Laser", "desc" => "Powerful burst laser that fires off an impressive barrage", "price" => 110);
$tab[] = array("id" => 8, "name" => "Heavy Laser I", "photo" => "../img/Heavy1.png", "type" => "Laser", "desc" => "Heavy lasers can wreak more havoc than their smaller, burst laser counterparts", "price" => 55);
$tab[] = array("id" => 9, "name" => "Heavy Laser II", "photo" => "../img/Heavy2.png", "type" => "Laser", "desc" => "This heavy laser fires two shots quick succession, each dealing 2 damage", "price" => 75);
$tab[] = array("id" => 10, "name" => "Hull Laser I", "photo" => "../img/HLaser.png", "type" => "Laser", "desc" => "Fires 2 shots that deal 1 damage to rooms with a system or subsystem and double damage to rooms without either", "price" => 65);
$tab[] = array("id" => 11, "name" => "Hull Laser II", "photo" => "../img/HLaser.png", "type" => "Laser", "desc" => "Designed to maximize hull damage", "price" => 100);
$tab[] = array("id" => 12, "name" => "Mini Beam", "photo" => "../img/MiniBeam.png", "type" => "Beam", "desc" => "Extremely cheap beam weapon", "price" => 50);
$tab[] = array("id" => 13, "name" => "Pike Beam", "photo" => "../img/PikeBeam.png", "type" => "Beam", "desc" => "Can cut across entire ships, assuming there's no shield to stop it", "price" => 60);
$tab[] = array("id" => 14, "name" => "Halberd Beam", "photo" => "../img/HalberdBeam.png", "type" => "Beam", "desc" => "Slow but reliably powerful standard beam weapon", "price" => 70);
$tab[] = array("id" => 15, "name" => "Fire Beam", "photo" => "../img/FireBeam.png", "type" => "Beam", "desc" => "This terrifying beam does no physical damage but ignites fires", "price" => 70);
$tab[] = array("id" => 16, "name" => "Hull Beam", "photo" => "../img/HullBeam.png", "type" => "Beam", "desc" => "This beam is most powerful when targeting large, empty sections of hull", "price" => 70);
$tab[] = array("id" => 17, "name" => "Glaive Beam", "photo" => "../img/Glaive.png", "type" => "Beam", "desc" => "One of the most powerful weapons of war ever created. Known to take out some ships in a single blast", "price" => 120);
$tab[] = array("id" => 18, "name" => "Anti-Bio Beam", "photo" => "../img/AntibioBeam.png", "type" => "Beam", "desc" => "This terrifying beam does no physical damage, but rips through organic material, dealing heavy damage to crew members", "price" => 50);
$tab[] = array("id" => 19, "name" => "Healing Burst", "photo" => "../img/HBurst.png", "type" => "Bomb", "desc" => "Self-teleporting healing unit that instantly heals all friendly crew in the room. Can target your own ship", "price" => 40);
$tab[] = array("id" => 20, "name" => "Small Bomb", "photo" => "../img/SBomb.png", "type" => "Bomb", "desc" => "Self-teleporting explosive that damages systems and crew but not the hull. Can target your own ship", "price" => 55);
$tab[] = array("id" => 21, "name" => "Fire Bomb", "photo" => "../img/FBomb.png", "type" => "Bomb", "desc" => "Self-teleporting explosive designed to damage crew members and light fires. Can target your own ship", "price" => 55);
$tab[] = array("id" => 22, "name" => "Ion Bomb", "photo" => "../img/IBomb.png", "type" => "Bomb", "desc" => "Self-teleporting explosive that uses ion damage to disable systems. Can target your own ship", "price" => 65);
$tab[] = array("id" => 23, "name" => "Breach Bomb I", "photo" => "../img/BBomb.png", "type" => "Bomb", "desc" => "Self-teleporting explosive designed to damage systems and causes a breach. Can target your own ship", "price" => 70);
$tab[] = array("id" => 24, "name" => "Breach Bomb II", "photo" => "../img/BBomb.png", "type" => "Bomb", "desc" => "Slower than Mark 1 but breaches and does more damage to systems. Can target your own ship", "price" => 70);
$tab[] = array("id" => 25, "name" => "Crystal Bomb", "photo" => "../img/LBomb.png", "type" => "Bomb", "desc" => "Self-teleporting explosive that does no damage but creates a dense wall preventing movement in or out of the room. Can target your own ship", "price" => 60);
$tab[] = array("id" => 26, "name" => "Crystal Burst I", "photo" => "../img/CBurst1.png", "type" => "Crystal", "desc" => "Modified projectile weapon that fires shield piercing crystals", "price" => 20);
$tab[] = array("id" => 27, "name" => "Crystal Burst II", "photo" => "../img/CBurst2.png", "type" => "Crystal", "desc" => "Modified projectile weapon that fires shield piercing crystals", "price" => 20);
$tab[] = array("id" => 28, "name" => "Heavy Crystal I", "photo" => "../img/HCrystal1.png", "type" => "Crystal", "desc" => "Modified projectile weapon that fires shield piercing crystals", "price" => 20);
$tab[] = array("id" => 29, "name" => "Heavy Crystal II", "photo" => "../img/HCrystal2.png", "type" => "Crystal", "desc" => "Modified projectile weapon that fires shield piercing crystals", "price" => 20);

$str = serialize($tab);
file_put_contents("../private/product", $str);

$mdp = "admin";
$pass = hash("whirlpool", $mdp);
$log[] = array("login" => "admin", "passwd" => $pass);
$str = serialize($log);
file_put_contents("../private/Passwd", $str);

header("Location: ../index.php");

?>
