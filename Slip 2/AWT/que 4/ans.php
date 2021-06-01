<?php
 interface Cyl
 {
 function area();
 function volume();
 }
 class Cylinder implements Cyl
 {
 public $PI=3.14;
 public $a;
 public $r;
 public $h;
 function __construct($r,$h)
 {
 $this->r=$r;
 $this->h=$h;
 }
 function area()
 {
 $this->a=2*$this->PI*($this->h*$this->r);
 echo"Area = ".$this->a."<br>";
 }
 function volume()
 {
 $this->a=$this->PI*$this->r*$this->r*$this->h;
 echo"Volume = ".$this->a."<br>";
 }
 }
 $c=new Cylinder(5,5);
 $c->area();
 $c->volume();
?>