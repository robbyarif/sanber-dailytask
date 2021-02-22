# Day#4 Javascript

## Objectives

Create a simple single page javascript mini e-commerce that can

1. Display a series of products in form of html card element
2. User can search item by keyword
3. Add to cart feature which add item to the cart element (optional)

Use `index.html`
```
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan DOM</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script defer src="https://use.fontawesome.com/releases/v5.8.1/js/all.js" integrity="sha384-g5uSoOSBd7KkhAMlnQILrecXvzst9TdC09/VM+pjDTCM+1il8RHz5fKANTFFb+gQ" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-light bg-light">
            <a class="navbar-brand">Mini Ecommerce</a>
            <form class="form-inline" id="formItem">
                <input class="form-control mr-sm-2" type="search" placeholder="Search"  id="keyword" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit" id="searchItem">Search</button>
            </form>
            <button class="btn btn-primary" id="cart"><i class="fas fa-shopping-cart"></i>(0)</button>
        </nav>
        <div class="row">
            <div class="col-md-12 mt-2"  id="listBarang" >
                
            </div>
        </div>
    </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
```

Sample data
```
var items = [
    ['001', 'Keyboard Logitek', 60000, 'Keyboard yang mantap untuk kantoran', 'logitek.jpeg'], 
    ['002', 'Keyboard MSI', 300000, 'Keyboard gaming MSI mekanik', 'msi.jpeg'],
    ['003', 'Mouse Genius', 50000, 'Mouse Genius biar lebih pinter', 'genius.jpeg'],
    ['004', 'Mouse Jerry', 30000, 'Mouse yang disukai kucing', 'jerry.jpeg']
]
```

Card html template 
```
<!-- Component Card dari Bootstrap -->

<div class="card" style="width: 18rem;">
    <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title" id="itemName">Nama</h5>
        <p class="card-text" id="itemDesc">Deskripsi barang</p>
        <p class="card-text">Rp Harga</p>
        <a href="#" class="btn btn-primary" id="addCart">Tambahkan ke keranjang</a>
    </div>
</div>
```
Image assets from this [link](https://drive.google.com/drive/folders/1lD0sYljThT5UrUKOnq1R21tI_2ByKu-J?usp=sharing)

## Result
Display items and search
![Display items and search](./release-1-dom-challenge.gif "Display items and search")
Add to cart
![Add to cart](./release-2-dom-challenge.gif "Add to cart")