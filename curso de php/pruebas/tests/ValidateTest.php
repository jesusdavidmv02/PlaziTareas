<?php 

use PHPUnit\Framework\TestCase;

use App\Validate;

class  ValidateTests extends TestCase{

    public function test_email(){

        $email = Validate::email('jesusdavidmv02@gmail.com');
        $this->assertTrue($email);

    }
}