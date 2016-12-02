<?PHP

class Furby{

    static function init(){
	
	//init piface
	//For some reason spl needs sudo privileges. Thats one reason why www-data belongs to the sodoers.
        shell_exec('sudo python ../python/init.py');

        //force audio jack
	//For some reason my pi wont save this permanently. So i will force it on every  request.
        shell_exec('sudo amixer cset numid=3 1');
    }

    static public function speak($sentence,$voice='f4',$language='de',$speed='100',$pitch='50',$volume='100'){
        
        //Remove quotes because the furby will read quotes as \ because escapeshellcmd will add backslashes before quotes
        $sentence = str_replace("'",'',$sentence);
        $sentence = str_replace('"','',$sentence);
        
        //$command = 'sudo espeak -v'.escapeshellcmd($language).'+'.escapeshellcmd($voice).' -s'.escapeshellcmd($speed).' -a'.escapeshellcmd($volume).' -p'.escapeshellcmd($pitch).' "'.escapeshellcmd($sentence).'"';

	//Test with aplay to avoid espeak from getting slow and sounding broken when playing long texts
	//Note aplay must run in sudo as well because you cannot pipe output from a sudo process to a process with lower permissions.
	//Iam not sure why i use espeak with sudo...This is not neccessarry.
	$command = '(sudo espeak --stdout -v'.escapeshellcmd($language).'+'.escapeshellcmd($voice).' -s'.escapeshellcmd($speed).' -a'.escapeshellcmd($volume).' -p'.escapeshellcmd($pitch).' "'.escapeshellcmd($sentence).'" | sudo aplay)';

        echo $command;

        shell_exec($command);
	//system($command);
 
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

