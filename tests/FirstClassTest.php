<?php

namespace elissaheller\my_first_library;

class FirstClassTest extends \PHPUnit\Framework\TestCase
{
  public function testEncodeStringString()
  {
      $firstclass=new FirstClass();
      $encoded=$firstclass->encodeString("string");
      $this->assertSame($encoded, "120rwp");
  }
}
