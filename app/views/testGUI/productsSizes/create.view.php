<?php require('app/views/testGUI/partials/header.php'); ?>

<!-- update products_sizes action  -->
<h1>Submit your updation product_size</h1>

<form method="POST" action="">
    <input type="hidden" name="id" >
    Product: <br/>
    <input type="text" name="productId" ><br/>
    Size: <br/>
    <input type="text" name="sizeId" ><br/>
    <button type="submit">Submit</button>
</form>

<?php require('app/views/testGUI/partials/footer.php'); ?>