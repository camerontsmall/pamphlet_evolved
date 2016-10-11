<?php

/**
 * Description of model
 *
 * @author Cameron
 */
class Model {
    
    public static $name;
    public $contents;
    
    public function __construct() {
        
        try{
            
            $path = "models/" . self::$name . ".json";
            $file_contents = readfile($path);
            
            $this->contents = json_decode($file_contents,true);
            
            
        }catch(Exception $e){
            
            echo "<span class=\"error\">{$e->getMessage()}</span>";
            
        }
    }
    
    
}
