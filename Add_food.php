<?php

include_once './inc/header.php';
include_once '../Database/env.php';
$query="SELECT * FROM categories WHERE status='1'";
$data=mysqli_query($con,$query);
$categories=mysqli_fetch_all($data,1);
print_r($categories);

?>
<h2>Foods</h2>
<?php
    if(isset( $_SESSION['errors'])){
        ?>

        <div class="toast show" role="alert" aria-live="assertive" aria-atomic="true" style="position:absolute; bottom:10px;right:30px;">
        <div class="d-flex">
          <div class="toast-body">
          <?=$_SESSION['errors']?>
          </div>
          <button type="button" class="btn-close me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
      </div>
      <br><br>
      <?php
   
    }
?>

<div class="card">
    <div class="card-header bg-primary text-light">
        Add Foods items Here"""
    </div>
   

    <div class="card-body">
        <form action="../controller/store_foods.php" method="POST" enctype="multipart/form-data">
            <div class="row aling-item-center">
                <div class="col-lg-3">
                    <label for="foodimg">
                    <img class="ImgPlaceholder" src="https://www.shutterstock.com/image-vector/ui-image-placeholder-wireframes-apps-260nw-1037719204.jpg" alt="" style="width: 100%;display:block;">
                    <input type="file" class="d-none imgInputing" id="foodimg" name="food_img">
                    <?php
                         if(isset($_SESSION['error']['food_img'])){
                            ?>
                            <span class="text-danger">
                                <?=$_SESSION['error']['food_img']?>
                            </span>
                            <?php
                         }
                          ?>
                    </div>
                    
                    <div class="col-lg-9">
                        <label class="w-100">
                            Insert a title <span class="text-danger">*</span>
                         <input type="text" name="title" class="form-control">
                         <?php
                         if(isset($_SESSION['error']['title'])){
                            ?>
                            <span class="text-danger">
                                <?=$_SESSION['error']['title']?>
                            </span>
                            <?php
                         }
                          ?>
                        </label>
                    
                       
                        <label class="w-100">
                            Insert Detail<span class="text-danger">*</span>
                         <input type="text" name="detail" class="form-control">
                         <?php
                         if(isset($_SESSION['error']['detail'])){
                            ?>
                            <span class="text-danger">
                                <?=$_SESSION['error']['detail']?>
                            </span>
                            <?php
                         }
                         ?>
                        </label>
                        <label class="w-100">
                            Insert Food price <span class="text-danger">*</span>
                         <input type="text" name="price" class="form-control">
                         <?php
                         if(isset($_SESSION['error']['price'])){
                            ?>
                            <span class="text-danger">
                                <?=$_SESSION['error']['price']?>
                            </span>
                            <?php
                         }
                         ?>
                        </label>
                        <label class="w-100">
                            Insert a Cetagory<span class="text-danger">*</span>
                            <select name="category_id" class="form-control">
                                <option disabled selected>SELECT CETAGORY</option>
                                <?php
                                foreach($categories as $category){
                                    ?>
                                    <option value="<?=$category['id']?>"><?=ucwords($category['category'])?></option>
                                    <?php
                                }
                                ?>
                            </select>
                         <?php
                         if(isset($_SESSION['error']['category_id'])){
                            ?>
                            <span class="text-danger">
                                <?=$_SESSION['error']['category_id']?>
                            </span>
                            <?php
                         }
                         ?>
                        </label>
                        </div>
                      </div>
                        <button name="submit"class="btn btn-primary float-right" >Insert</button>
                   
                     </form>
                    </div>
          
            </div>
        

<?php

include_once './inc/footer.php';
unset($_SESSION['error']);
?>
<script>
  let input = document.querySelector('.imgInputing')
    let image = document.querySelector('.ImgPlaceholder')
     input.addEventListener('change',function(e){ 
    let url = window.URL.createObjectURL(e.target.files[0])
    image.src = url
 }) 

</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
