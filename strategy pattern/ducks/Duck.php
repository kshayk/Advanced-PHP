<?php
/**
 * Created by PhpStorm.
 * User: kshay
 * Date: 13/01/2019
 * Time: 19:58
 */

abstract class Duck
{
    protected $qb; //quack behavior
    protected $fb; //fly behavior
    protected $db; //display behavior

    public function __construct(IQuackBehavior $qb, IFlyBehavior $fb, IDisplayBehavior $db)
    {
        $this->qb = $qb;
        $this->fb = $fb;
        $this->db = $db;
    }

    public function quack()
    {
        return $this->qb->quack();
    }

    public function fly()
    {
        return $this->fb->fly();
    }

    public function display()
    {
        return $this->db->display();
    }
}