<?php
class Employee
{
    public $eid, $ename, $edesg;
    function __construct($a, $b, $c)
    {
        $this->eid = $a;
        $this->ename = $b;
        $this->edesg = $c;
    }
    public function getdata()
    {
        return $this->sal;
    }
    public function display()
    {
        echo $this->eid . "</br>";
        echo $this->ename . "</br>";
        echo $this->edesg . "</br>";
        //echo $this->ename."</br>";
        
    }
}
class Emp_account extends Employee
{
    public $ac_no, $jdate;
    public static $total1 = 0;
    function __construct($a, $b, $c, $d, $e)
    {
        parent::__construct($a, $b, $c);
        $this->ac_no = $d;
        $this->jdate = $e;
    }
}
class Emp_sal extends Emp_account
{
    public $b_pay, $er, $dud;
    
    function __construct($a, $b, $c, $d, $e, $f, $g, $h)
    {
        parent::__construct($a, $b, $c, $d, $e);
        $this->b_pay = $f;
        $this->er = $g;
        $this->dud = $h;
    }
    public function max($ob)
    {
        
        $total = $this->b_pay + $this->er;
        $total = $total - $this->dud;
        if ($total > self::$total1)
        {
            self::$total1 = $total;
            return $this;
        }
        else
        {
            return $ob;
        }
    }
    public function min($ob)
    {
        
        $total = $this->b_pay + $this->er;
        $total = $total - $this->dud;
        if ($total < self::$total1)
        {
            self::$total1 = $total;
            return $this;
        }
        else
        {
            return $ob;
        }
    }
    public function display()
    {
        echo "<br>";
        echo "ID : ";
        echo $this->eid;
        echo "<br>";
        echo " NAME : ";
        echo $this->ename;
        echo "<br>";
        echo " SALARY : ";
        echo $this->b_pay;

    }
}
$ob = new Emp_sal(0, "ABC", "", 0, "", 0, 0, 0);
$temp = new Emp_sal(0, "ABC", "", 0, "", 0, 0, 0);

$ob1 = new Emp_sal(1, "aaaaa", "HOD", 123411, "12-10-2018", 28000, 2000, 500);
$ob = $ob1->max($ob);
$temp = $ob1->min($temp);

$ob2 = new Emp_sal(1, "bbbbb", "HOD", 123411, "12-10-2018", 48000, 2000, 500);
$ob = $ob2->max($ob);
$temp = $ob2->min($temp);

$ob3 = new Emp_sal(1, "ccccc", "HOD", 123411, "12-10-2018", 58000, 2000, 500);
$ob = $ob3->max($ob);
$temp = $ob3->min($temp);

$ob4 = new Emp_sal(1, "ddddd", "HOD", 123411, "12-10-2018", 8000, 2000, 500);
$ob = $ob4->max($ob);
$temp = $ob4->min($temp);

$ob5 = new Emp_sal(1, "eeeee", "HOD", 123411, "12-10-2018", 7000, 2000, 500);
$ob = $ob5->max($ob);
$temp = $ob5->min($temp);

echo "person with the higest salary is : ";
$ob->display();
echo "<br>";

echo "person with the lowest salary is : ";
$temp->display();
?>
