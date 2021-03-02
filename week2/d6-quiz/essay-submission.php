<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
function xo($str) {

//Code disini
    $x_count = 0;
    $o_count = 0;

    for($i=0; $i<strlen($str); $i++) {
        ($str[$i] == 'x' ? $x_count++ : $o_count++);
    }

    return ($x_count == $o_count ? "Benar" : "Salah") . "<br>";
}


// Test Cases
// echo xo('xoxoxo'); // "Benar"
// echo xo('oxooxo'); // "Salah"
// echo xo('oxo'); // "Salah"
// echo xo('xxxooo'); // "Benar"
// echo xo('xoxooxxo'); // "Salah"
?>


<?php


function pagar_bintang($integer){
//code disini
    $isodd = true;
    for ($i=1; $i<=$integer; $i++) {
        for ($j=1; $j<=$integer; $j++) {
            echo ($isodd ? "#" : "*");
        }
        $isodd = !$isodd;
        echo "<br>";
    }
}


echo pagar_bintang(5);
echo pagar_bintang(8);
echo pagar_bintang(10);


?>
    
</body>
</html>

<!-- 
CREATE TABLE customers(
    id int(8) auto_increment,
    name varchar(255),
    email varchar(255),
    password varchar(255),
    primary key(id)
);

CREATE TABLE orders(
    id int(8) auto_increment,
    amount int(8),
    customer_id int(8),
    primary key (id),
    foreign key(customer_id) references customers(id)
);

SELECT c.name as customer_name, SUM(o.amount) as total_amount 
FROM orders o 
INNER JOIN customers c
   on o.customer_id = c.id
GROUP BY 
   c.id; 


insert into customers (name, email, password)
values ('John Doe', 'john@doe.com', 'john123'),
       ('Jane Doe', 'jane@doe.com', 'jenita123');
 


insert into orders (amount, customer_id)
values (500, 1),
       (200, 2),
       (750, 2),
       (250, 1),
       (400, 2);


 -->