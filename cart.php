<?php

require "function.php";

// Simulasi data produk yang dipilih (dapat disesuaikan dengan implementasi sesungguhnya)
$cartItems = [
    [
        'id' => 1,
        'name' => 'Kue Kering 1',
        'price' => 50000,
        'quantity' => 2,
        'image' => 'product1.jpg'
    ],
    [
        'id' => 2,
        'name' => 'Kue Kering 2',
        'price' => 75000,
        'quantity' => 1,
        'image' => 'product2.jpg'
    ]
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 font-Poppins">
    <?php include "layout/navbar.php"; ?>

    <div class="container mx-auto mt-8">
        <h1 class="mb-4 text-2xl font-bold">Shopping Cart</h1>

        <!-- Cart Items -->
        <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
            <?php foreach ($cartItems as $item): ?>
            <div class="flex items-center p-4 space-x-4 bg-white rounded-lg shadow-md">
                <img src="assets/<?= $item['image'] ?>" alt="<?= $item['name'] ?>" class="object-cover w-24 h-24 rounded">
                <div class="flex-1">
                    <h2 class="text-lg font-semibold"><?= $item['name'] ?></h2>
                    <p class="text-gray-600">Rp<?= number_format($item['price']) ?></p>
                </div>
                <div class="flex items-center">
                    <button class="px-3 py-1 text-gray-700 bg-gray-200 rounded-md" onclick="decrementItem(<?= $item['id'] ?>)">-</button>
                    <input type="text" value="<?= $item['quantity'] ?>" class="w-12 mx-2 text-center border border-gray-300 rounded-md">
                    <button class="px-3 py-1 text-gray-700 bg-gray-200 rounded-md" onclick="incrementItem(<?= $item['id'] ?>)">+</button>
                </div>
                <button class="px-4 py-1 ml-4 text-white bg-red-500 rounded-md">Remove</button>
            </div>
            <?php endforeach; ?>
        </div>

        <!-- Total -->
        <div class="flex justify-end mt-8">
            <div class="p-4 bg-white rounded-lg shadow-md">
                <h2 class="text-lg font-semibold">Total:</h2>
                <p class="text-xl font-bold text-gray-800">Rp<?= number_format(calculateTotal($cartItems)) ?></p>
                <button class="px-6 py-2 mt-4 text-white rounded-md bg-amber-500">Checkout</button>
            </div>
        </div>
    </div>

    <script>
        function incrementItem(id) {
            // Implement increment logic here
            console.log('Increment item with ID:', id);
        }

        function decrementItem(id) {
            // Implement decrement logic here
            console.log('Decrement item with ID:', id);
        }
    </script>
</body>

</html>

<?php
// Function to calculate total price
function calculateTotal($items) {
    $total = 0;
    foreach ($items as $item) {
        $total += $item['price'] * $item['quantity'];
    }
    return $total;
}
?>
