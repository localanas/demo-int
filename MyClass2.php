<?php


class MyClass
{
  public $name;
  public $toto;
  public $camel;
  public  $snack_case;
  public $br2;

    /**
     * @return mixed
     */
    public function getBr2()
    {
        return $this -> br2;
    }

    /**
     * @param mixed $br2
     *
     * @return MyClass
     */
    public function setBr2($br2)
    {
        $this -> br2 = $br2;

        return $this;
    }

}