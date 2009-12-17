<?php

class Benchmark
{
  private $start = 0; 
  private $end = 0;

  function now()
  {
    list($usec, $sec) = explode(" ", microtime());
    return ((float)$usec + (float)$sec);
  }

  function start()
  {
    $this->start = $this->now();
  }

  function end()
  {
    $this->end = $this->now();
    return ($this->end - $this->start);
  }
}
