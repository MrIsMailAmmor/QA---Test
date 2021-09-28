
<?php 

class professor
{

    public $text;
    public $title;
    
    function __construct()
    {
        echo "a professor has been created ";
    }
    function creatExam($title,$text){
        
        $this->title = $title;
        $this->text = $text;

    }
    function __get($name)
    {
        return $name;
    }

}


?>