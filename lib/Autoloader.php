<?php
 
/**
 * Class autoloading system
 * 
 * @author	Mikael Randy <mrandy@prestaconcept.net>
 * @since	20 juil. 2011 - Mikael Randy <mrandy@prestaconcept.net>
 * @version 1.0 - 20 juil. 2011 - Mikael Randy <mrandy@prestaconcept.net>
 */
class Autoloader
{
    /**
     * Enable our specific autoloading system
     * 
     * @author	Mikael Randy <mrandy@prestaconcept.net>
     * @since	20 juil. 2011 - Mikael Randy <mrandy@prestaconcept.net>
     * @version	1.0 - 20 juil. 2011 - Mikael Randy <mrandy@prestaconcept.net>
     */
    static public function register()
    {
        spl_autoload_register(array(__CLASS__, 'autoload'));
    }
 
    /**
     * Autoloading system
     * 
     * Transform namespace structure into directory structure (\NS1\NS2\NS3\className will be 
     * search into __DIR__ . '/NS1/NS2/NS3/className.class.php').
     * 
     * @author	Mikael Randy <mrandy@prestaconcept.net>
     * @since	20 juil. 2011 - Mikael Randy <mrandy@prestaconcept.net>
     * @version	1.0 - 20 juil. 2011 - Mikael Randy <mrandy@prestaconcept.net>
     * @param	string $class Class name (with entire namespace)
     */
    public static function autoload($className)
    {
        if(preg_match('#_+#',$className)){
            $tab = explode('_', $className);
        }
        else{
            $tab = explode('\\', $className);
        }
        //echo '<pre>Autoload : ' . $className;
        
        $path = __DIR__ . DIRECTORY_SEPARATOR . 'vendor'. DIRECTORY_SEPARATOR . implode(DIRECTORY_SEPARATOR, $tab) . '.php';
        //echo "\n    =&gt; $path</pre>";

        require $path;
    }
}

?>