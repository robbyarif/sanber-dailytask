# Day#4 Week 2 - OOP with PHP

## Objectives

Create an `index.php` file inside `oop` directory in your `htdocs` folder.

Create `Animal` class with constructor `name`, default property `legs` = `2` and `cold_blooded` = `false` inside `animal.php` file.
Don't forget to import the class with `require` or `require_one` method from `index.php`. 

Test it
```
$sheep = new Animal("shaun");

echo $sheep->name; // "shaun"
echo $sheep->legs; // 2
echo $sheep->cold_blooded // false

// NB: Boleh juga menggunakan method get (get_name(), get_legs(), get_cold_blooded())
```

Create `Frog` and `Ape` class which inherit `Animal` inside `Frog.php` and `Ape.php`. Note that frog does not inherit the default legs value.
`Ape` class has `yell()` function that prints "Auooo" and `Frog` class has `jump()` function that prints "hop hop"

```
$sungokong = new Ape("kera sakti");
$sungokong->yell() // "Auooo"

$kodok = new Frog("buduk");
$kodok->jump() ; // "hop hop"
```
 

