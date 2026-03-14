<?php 
class File{
    private $filename;
    private $location;

    public function __construct($filename,$mode = 'r'){
        $this->filename = $filename;
        $this->location = fopen($filename,$mode);
    }

    public function __destruct(){
        if($this->location){
            fclose($this->location);
        }
    }

    public function read(){
        return fread($this->location, filesize($this->filename));
    }

    public function delete(){
        if(file_exists($this->filename)){
            unlink($this->filename);
        }
    }

    public function write($content){
        if($this->filename){
            file_put_contents($this->filename, $content);
            // fwrite($this->location, $content);
        }
    }
}

$f = new File('image.jpg');
$x = new File('example.txt');
// header('Content-Type: image/jpeg');
// echo $f->read();
echo $x->write("Hello, World!");
echo $x->write("IM JOHN");
echo $x->read();