<?PHP

class Furby{
    
    static public function speak($sentence,$voice='f4',$language='de',$speed='100',$pitch='50',$volume='100'){
        
        $command = 'sudo espeak -v'.$language.'+'.$voice.' -s'.$speed.' -a'.$volume.' -p'.$pitch.' "'.$sentence.'"';
        
        echo $command;
        
        shell_exec($command);
        
    }
    
    public static function startEngine(){
        
        shell_exec('sudo python /var/www/python/engine_start.py');
        
    }
    
    public function stopEngine(){
        
        shell_exec('sudo python /var/www/python/engine_stop.py');
        
    }
    
}