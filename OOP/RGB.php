<?php
class RGB
{
    private $color;
    private $red;
    private $green;
    private $blue;

    public function __construct($colorCode = '')
    {
        $this->color = ltrim($colorCode, '#');
        $this->parseColor();
    }

    public function setcolor($colorCode)
    {
        $this->color = ltrim($colorCode, '#');
        $this->parseColor();
    }

    public function getColor()
    {
        return $this->color;
    }


    public function getRGB()
    {
        return array($this->red, $this->green, $this->blue);
    }


    public function readRGBColor()
    {
        echo "Red={$this->red}\nGreen={$this->green}\nBlue={$this->blue}";
    }

  
    public function parseColor()
    {
        if ($this->color) {
            list($this->red, $this->green, $this->blue) = sscanf($this->color, "%02x%02x%02x");
        } else {
            list($this->red, $this->green, $this->blue) = array(0, 0, 0);
        }
    }

    function getRed()
    {
        return $this->red;
    }

    function getGreen()
    {
        return $this->green;
    } 

    function getBlue()
    {
        return $this->blue;
    }
}

$myColor = new RGB("#ffef2f");
$myColor->readRGBColor();
echo "<br>";
echo $myColor->getGreen();
echo "<br>";
print_r($myColor->getRGB());
echo $myColor->getColor(); 

