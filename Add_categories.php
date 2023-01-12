<?php
include_once './inc/header.php';
?>
<div class="card">
    <div class="card-header">
     <h2>Add Categories</h2>
    </div>
    <div class="card-body">
        <form action="../controller/categories_store.php" method="POST">
            <input type="text" name="category" placeholder="category_name" class="form-control w-100">
            
            <?php
                         if(isset($_SESSION['error']['category'])){
                            ?>
                            <span class="text-danger">
                                <?=$_SESSION['error']['category']?>
                            </span>
                            <?php
                         }
                         ?>
     
            <button name="submit" class="btn w-100 btn-primary my-3">Submit</button>
        </form>
    </div>
</div>
<?php
include_once './inc/footer.php';
?>




