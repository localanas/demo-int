<?php


class MyClass
{
  public $name;
  public $toto;
  public $camel;
  public  $snack_case;
  public $br1;

  public $br3;
  public $br5;


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
        $this->br2 = $br2;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getBr5()
    {
        return $this -> br5;
    }

    /**
     * @param mixed $br5
     * @return MyClass
     */
    public function setBr5($br5)
    {
        $this -> br5 = $br5;

        return $this;
    }


}