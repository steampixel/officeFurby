<?PHP

class Furby{

    static function init(){

        //init piface board
        shell_exec('sudo python ../python/init.py');

        //force audio jack
        shell_exec('sudo amixer cset numid=3 1');
    }

    static public function speak($sentence,$voice='f4',$language='de',$speed='100',$pitch='50',$volume='100'){

        $command = 'sudo espeak -v'.$language.'+'.$voice.' -s'.$speed.' -a'.$volume.' -p'.$pitch.' "'.$sentence.'"';

        echo $command;

        shell_exec($command);
 
    }
    
    public static function startEngine(){
        
        shell_exec('sudo python ../python/engine_start.py');
        
    }
    
    public function stopEngine(){
        
        shell_exec('sudo python ../python/engine_stop.py');
        
    }

    public function startAmp(){
        
        shell_exec('sudo python ../python/amp_start.py');
        
    }

    public function stopAmp(){
        
        shell_exec('sudo python ../python/amp_stop.py');
        
    }
    
}
