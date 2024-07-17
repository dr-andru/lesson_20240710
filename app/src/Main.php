<?php

class Main 
{
    public string $public = 'var1';
    protected $protected = 'var1';
    private $private = 'var1';

    public static $ps = 'public static';

    public function func(int $int): string
    {
        return $this->private;
    }

    public static function statFunc(int $int): array
    {
        $int++;

        return [$int, 2];
    }
}
/*
interface FirstNameAbleInterface
{
    public function getFirstName(): string;
}

abstract class User implements FirstNameAbleInterface
{
    private string $firstName;

    public function __construct(string $firstName)
    {
        $this->firstName = $firstName;
    }

    public function getFirstName(): string
    {
        return $this->firstName;
    }
}

class Client extends User
{


}

class Admin extends User
{


}

class Moder extends User
{


}





class Render
{
    public function render(FirstNameAbleInterface $obj)
    {
        echo get_class($obj);
    }
}

$admin = new Admin('admin name');

$client = new Client('client name');

$render = new Render();

$render->render($admin);
echo PHP_EOL;
$render->render($client);
*/


//echo "hi";


print_r($_GET);
print_r($_POST);
print_r($_FILES);

if (isset($_FILES['uploadFile'])) {
    move_uploaded_file(
        $_FILES['uploadFile']['tmp_name'], 
    '/app/public/'. $_FILES['uploadFile']['name']
);
}
