<?php
require_once("sessioncheck.php");
require_once('./header.php');
require_once('./footer.php');
?>


<main role="main" class="container">
<h1 class="mt-5">Add Show</h1>


<form method="POST" action="insert_show.php"> 

    <div class="input-group flex-nowrap">
        <span class="input-group-text" id="addon-wrapping">Title</span>
        <input type="text" class="form-control" name="show_title" placeholder="Show Title"/>
    </div>
    <div class="input-group">
        <span class="input-group-text" id="addon-wrapping">Rating</span>
        <input type="text" class="form-control" name="show_rating" placeholder="1-5"/>
    </div>
    <div class="input-group">
        <span class="input-group-text">Show Description</span>
        <textarea class="form-control" name="show_description"></textarea>
    </div>
    <div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Add Show</button>
    </div>
</form>
