<?php
    /**
    * @backupGlobals disabled
    * @backupStaticAttributes disabled
    */

    require_once "src/Brand.php";
    require_once "src/Store.php";

    $server = 'mysql:host=localhost;dbname=shoes_test';
    $username = 'root';
    $password = 'root';
    $DB = new PDO($server, $username, $password);

    class BrandTest extends PHPUnit_Framework_TestCase
    {
        protected function tearDown()
        {
            // Brand::deleteAll();
            // Store::deleteAll();
        }

        function test_getBrandName()
        {
            //Arrange
            $name = "Nike";
            $price_range = "Medium";
            $id = 1;
            $test_brand = new Brand($name, $price_range, $id);

            //Act
            $result = $test_brand->getName();

            //Assert
            $this->assertEquals($name, $result);
        }

        function test_setBrandId()
        {
            //Arrange
            $name = "Nike";
            $price_range = "Medium";
            $id = 1;
            $test_brand = new Brand($name, $price_range, $id);

            //Act
            $new_id = 2;
            $result = $test_brand->setId($new_id);

            //Assert
            $this->assertEquals($new_id, $result);
        }
    }
?>