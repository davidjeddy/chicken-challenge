<?php

/**
 * Class Application
 */
class Application
{
    /**
     * @var array|null
     */
    protected $classMap = [];

    /**
     * Get an array of all the class files in the application
     * @param       $dir
     * @param array $results
     *
     * @return array
     */
    public function getDirContents($dir){
        $files = scandir($dir);

        foreach($files as $key => $value){
            $path = realpath($dir.DIRECTORY_SEPARATOR.$value);
            if(!is_dir($path)) {
                $this->classMap[] = $path;
            } else if($value != "." && $value != "..") {
                $this->getDirContents($path, $this->classMap);
            }
        }

        var_dump($this->classMap);
        exit(1);

        return true;
    }

    /**
     * Load all the class files so we can access them in the application
     *
     * @return bool|void
     */
    public function autoload()
    {
        try {
            foreach ($this->classMap as $className) {
                //see if the file exists
                if (file_exists($className)) {
                    require_once $className;
                }
            }

        } catch (\Exception $e) {
            echo 'Exception while auto loading classes: ',  $e->getMessage(), "\n";
        }

        return true;
    }

    /**
     * Application constructor.
     *
     * @param $paramData
     */
    public function __construct($paramData)
    {
        $this->classMap = $this->getDirContents($paramData);

        $this->autoload();
    }


}

// start output buffer
ob_start();

$app = New Application('./src');

ob_end_clean();

// display results
echo "X = $x";

// one more line break for good formatting
echo "\n";
