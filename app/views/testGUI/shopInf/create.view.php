<?php require('app/views/testGUI/partials/header.php'); ?>

<!-- update shop information action  -->
<h1>Submit your updation shop information</h1>
<style>
    .txt-input{
        width: 38.5%;
    }
</style>

<form method="POST" action="/shopInf/create" >
    <input type="hidden" name="id" class="txt-input">
    Name: <br/>
    <input type="text" name="name" class="txt-input"><br/><br/>
    Description: <br/>
    <textarea name="description" cols="59" rows="10" ></textarea><br/><br/>
    Address: <br/>
    <input type="text" name="address" class="txt-input"><br/><br/>
    Phone: <br/>
    <input type="text" name="phone"class="txt-input"><br/><br/>
    Email: <br/>    
    <input type="text" name="email" class="txt-input"><br/><br/>
    <br/><button type="submit">Submit</button>
</form>

<?php require('app/views/testGUI/partials/footer.php'); ?>