<?PHP
include('Furby.php');

Furby::init();

Furby::startAmp();

Furby::startEngine();
sleep(0.5);
Furby::stopEngine();

Furby::speak('Hallo welt','f1','de',80,50,100);

Furby::startEngine();
sleep(0.5);
Furby::stopEngine();

Furby::stopAmp();




