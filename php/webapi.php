<?PHP
include('Furby.php');

if(isset($_POST['text'])){

    Furby::init();

    Furby::startAmp();

    $sentences = explode("\n",$_POST['text']);

    foreach($sentences as $sentence){
        
        Furby::startEngine();
        sleep(0.5);
        Furby::stopEngine();
        
        Furby::speak($sentence,$_POST['voice'],$_POST['language'],$_POST['speed'],$_POST['pitch'],$_POST['volume']);
        
    }
    
    Furby::startEngine();
    sleep(0.5);
    Furby::stopEngine();
    
    Furby::stopAmp();

}


