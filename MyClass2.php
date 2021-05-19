<?php


class MyClass
{
  public $name;
  public $toto;
  public $camel;
  public  $snack_case;
  public $br1;

    /**
     * @return mixed
     */
    public function getBr1()
    {
        return $this->br1;
    }

    /**
     * @param mixed $br1
     *
     * @return MyClass
     */
    public function setBr1($br1)
    {
        $this -> br1 = $br1;

        return $this;
    }



}