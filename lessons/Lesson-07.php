<?php
 abstract class A
 {
    public $salary=6500;
    public function getResult()
    {
       return $this->salary;
    }
    public function setResult($salary)
    {
        $this->salary = $salary;
    }

    public $month=3;
    public function getBar()
    {
        return $this->month;
    }
    public function setBar($month)
    {
        $this->month=$month;
    }
  abstract public function pow($sal);

}

class B extends A
{
    public $days=22;
    public function getBar()
    {
        return $this->days;
    }

    public function setBar($days)
    {
        $this->days=$days;
    }

    public function f1($days)
    {
        return $this->salary/days;
    }

    public function pow($sal)
    {
        $pow = $sal*$sal;
        return $pow;
    }

}
$salary3month = new B;

print $salary3month->month*$salary3month->salary.'<br>';

class C extends A
{
    public $allDays=31;
    public function getBar()
    {
        return $this->allDays;
    }

    public function setBar($allDays)
    {
        $this->allDays=$allDays;
    }

    public function f2($allDays)
    {
        return $this->salary/$allDays;
    }
    public function pow($sal)
    {
        $pow = $sal*$sal;
        return $pow;
    }

}

$salareFor1Day=new C;

print $salareFor1Day->salary/$salareFor1Day->allDays.'<br>';

class E extends A
{
    public $e=500;
    public function getResult4()
    {
        return $this->e;
    }

    public function setResult4($e)
    {
        $this->e=$e;
    }
    public function f3($e)
    {
        return $this->salary-$e;
    }
    public function pow($sal)
    {
        $pow = $sal*$sal;
        return $pow;
    }
}
$dont= new E;

print $dont->f3(2)+$dont->pow(1).'<br>';

class Firm2 extends C
{
    public $salaryPlus=13000;
    public function getPremia()
    {
        return $this->salaryPlus;
    }
    public function setPremia($salaryPlus)
    {
        $this->salaryPlus=$salaryPlus;
    }
    public function k1($salaryPlus)
    {
        return $this->month*$salaryPlus;
    }
    public function k2($salaryPlus)
    {
        return $this->salary+$salaryPlus;
    }
    public function pow($sal)
    {
        $pow = $sal*$sal;
        return $pow;
    }
}
$SalaryFirm2 = new Firm2();
print $SalaryFirm2->k2(1)+$SalaryFirm2->pow(2).'<br>';

class Firm extends B
{
    public $m= 2;
    public function getBar()
    {
        return $this->m;
    }

    public function setBar ($m)
    {
        $this->m=$m;
    }
    public function f5($m)
    {
        return $this->salary/$m;
    }
    public function f7($m)
    {
        return $this->month*$m;
    }
}
$resultMin= new Firm;
print $resultMin->f5(1)+$resultMin->salary;
