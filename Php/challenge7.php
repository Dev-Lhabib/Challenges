<?php
$products = [
    ["name" => "Laptop", "category" => "tech"],
    ["name" => "Phone",  "category" => "tech"],
    ["name" => "Tablet", "category" => "tech"],
    ["name" => "Chair",  "category" => "home"],
    ["name" => "Desk",   "category" => "home"]
];

$category = $_GET["category"] ?? null;
$sort = $_GET["sort"] ?? null;

$displayProducts = [];

// Filter by category 
foreach ($products as $product) {
    if ($category === null) {
        $displayProducts[] = $product["name"];
    } elseif ($product["category"] === $category) {
        $displayProducts[] = $product["name"];
    }
}

// Filter by Sort
if ($sort === "desc") {
    rsort($displayProducts);
} else {
    sort($displayProducts);
}
?>

<!-- Affichage -->
<h3>Filter by Category:</h3>
<a href="?category=tech">Tech</a>
<a href="?category=home">Home</a>
<a href="?">All</a>

<h3>Sort:</h3>
<a href="?sort=asc<?= $category ? '&category='.$category : '' ?>">A → Z</a> |
<a href="?sort=desc<?= $category ? '&category='.$category : '' ?>">Z → A</a>

<h2>Products</h2>
<?php
foreach ($displayProducts as $name) {
    echo $name . "<br>";
}
?>