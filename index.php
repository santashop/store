
<?php
session_start();

if (!isset($_SESSION['username']) AND !isset($_SESSION['password'])) {

    header("location:login.php");

    exit();

}
?>

<!DOCTYPE html>
<!-- Designined by CodingLab | www.youtube.com/codinglabyt -->
<html lang="en">


  <head>
    <link rel="stylesheet" type="text/css" href="santa_shop\index\js\bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="santa_shop\index\css\style.css">
    <!--ppppppppppppppppppppppppppppppppp-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <title>Santa_Shop</title>
    <link rel="stylesheet" href="santa_shop\index\style.css">
    <!-- Boxiocns CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>

 
  <section class="gallery min-vh-100">
    <div class="container-lg">
       <div class="row gy-4 row-cols-1 row-cols-sm-2 row-cols-md-3">
          <div class="col">
             <img src="img/ad.jpg" class="gallery-item1" alt="gallery">
          </div>
          <div class="col">
             <img src="img/2.jpg" class="gallery-item2" alt="gallery">
          </div>
          <div class="col">
             <img src="img/3.jpg" class="gallery-item3" alt="gallery">
          </div>
          <div class="col">
             <img src="img/4.jpg" class="gallery-item4" alt="gallery">
          </div>
          <div class="col">
             <img src="img/5.jpg" class="gallery-item5" alt="gallery">
          </div>
          <div class="col">
           <img src="img/6.jpg" class="gallery-item6" alt="gallery">
         </div>
     
         <div class="col">
           <img src="img/4.jpg" class="gallery-item8"alt="gallery" >
        </div>
        
           <div class="col">
             <img src="img/1.jpg" class="gallery-item7"alt="gallery" >
          </div>
    
        </div>
         
       </div>
    </div>
 </section>


 <!-- Modal1 -->
<div class="modal fade" id="gallery-modal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"  >
 <div class="modal fade" id="gallery-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"  ></div>
 
 <div class="modal-dialog">
   <div class="modal-ig"> 
    
   </div>

   
   <div class="modal-content">
     <div class="modal-header">
       <h5 class="modal-title" id="exampleModalLabel">price:300$</h5> 
       <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
     </div>
 
     <div class="modal-body">
        <img src="img/1.jpg" class="modal-img" alt="modal img">
     </div>
   </div>
 </div>
</div>



 <!-- Modal2 -->
 <div class="modal fade" id="gallery-modal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"  >
   <div class="modal fade" id="gallery-modal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"  ></div>
   
   <div class="modal-dialog">
     <div class="modal-ig"> 
      
     </div>
 
     
     <div class="modal-content">
       <div class="modal-header">
         <h5 class="modal-title" id="exampleModalLabel">price:1000$</h5> 
         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
       </div>
   
       <div class="modal-body">
          <img src="img/2.jpg" class="modal-img" alt="modal img">
       </div>
     </div>
   </div>
 </div>

 <!--end part-->


   <!-- Modal -->
<div class="modal fade" id="gallery-modal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"  >
 <div class="modal fade" id="gallery-moda3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"  ></div>
 
 <div class="modal-dialog">
   <div class="modal-ig"> 
    
   </div>

   
   <div class="modal-content">
     <div class="modal-header">
       <h5 class="modal-title" id="exampleModalLabel">price:900$</h5> 
       <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
     </div>
 
     <div class="modal-body">
        <img src="img/3.jpg" class="modal-img" alt="modal img">
     </div>
   </div>
 </div>
</div>
<!--end-->
 <!-- Modal -->
 <div class="modal fade" id="gallery-modal4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"  >
   <div class="modal fade" id="gallery-moda4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"  ></div>
   
   <div class="modal-dialog">
     <div class="modal-ig"> 
      
     </div>
 
     
     <div class="modal-content">
       <div class="modal-header">
         <h5 class="modal-title" id="exampleModalLabel">price:600&</h5> 
         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
       </div>
   
       <div class="modal-body">
          <img src="img/4.jpg" class="modal-img" alt="modal img">
       </div>
     </div>
   </div>
 </div>
 <!--end part-->
   <!-- Modal -->
<div class="modal fade" id="gallery-modal5" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"  >
 <div class="modal fade" id="gallery-moda5" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"  ></div>
 
 <div class="modal-dialog">
   <div class="modal-ig"> 
    
   </div>

   
   <div class="modal-content">
     <div class="modal-header">
       <h5 class="modal-title" id="exampleModalLabel">price:500$</h5> 
       <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
     </div>
 
     <div class="modal-body">
        <img src="img/5.jpg" class="modal-img" alt="modal img">
     </div>
   </div>
 </div>
</div>
<!--end part-->
 <!-- Modal -->
 <div class="modal fade" id="gallery-modal6" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"  >
   <div class="modal fade" id="gallery-moda6" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"  ></div>
   
   <div class="modal-dialog">
     <div class="modal-ig"> 
      
     </div>
 
     
     <div class="modal-content">
       <div class="modal-header">
         <h5 class="modal-title" id="exampleModalLabel">price:100$</h5> 
         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
       </div>
   
       <div class="modal-body">
          <img src="img/6.jpg" class="modal-img" alt="modal img">
       </div>
     </div>
   </div>
 </div>

<!--end part-->

 <!-- Modal1 -->
 <div class="modal fade" id="gallery-modal7" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"  >
   <div class="modal fade" id="gallery-moda7" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"  ></div>
   
   <div class="modal-dialog">
     <div class="modal-ig"> 
      
     </div>
 
     
     <div class="modal-content">
       <div class="modal-header">
         <h5 class="modal-title" id="exampleModalLabel">price:300$</h5> 
         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
       </div>
   
       <div class="modal-body">
          <img src="img/1.jpg" class="modal-img" alt="modal img">
       </div>
     </div>
   </div>
 </div> 


<script src="santa_shop/index/js/bootstrap.bundle.min.js"></script>




  <div class="sidebar close">
    <div class="logo-details">
      <i class='bx bxl-c-plus-plus'></i>
      <span class="logo_name">Santa_Shop</span>
    </div>
    <ul class="nav-links">
      <li>
        <a href="#">
          <i class='bx bx-grid-alt' ></i>
          <span class="link_name">Home</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="">Home</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="index.php">
            <i class='bx bx-collection' ></i>
            <span class="link_name">Home</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Menu</a></li>
          <li><a href="santa_shop/man/index.html">Man</a></li>
          <li><a href="santa_shop/girl/index.html">Woman</a></li>
          <li><a href="santa_shop/Baby/index.html">Baby</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="#">
            <i class='bx bx-book-alt' ></i>
            <span class="link_name">House</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">House</a></li>
          <li><a href="#">Salon</a></li>
          <li><a href="#">Bed room</a></li>
          <li><a href="#">Kitchen</a></li>
        </ul>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-pie-chart-alt-2' ></i>
          <span class="link_name">Accessories</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Accessories</a></li>
        </ul>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-line-chart' ></i>
          <span class="link_name">Make_up</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Make_up</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="#">
            <i class='bx bx-plug' ></i>
            <span class="link_name">Gift</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Gift</a></li>
          <li><a href="#">toys</a></li>
          <li><a href="#">Baby boy</a></li>
          <li><a href="#">Baby girl</a></li>
        </ul>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-compass' ></i>
          <span class="link_name">electrical tool</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">electrical tool</a></li>
        </ul>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-history'></i>
          <span class="link_name">Garden</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">We accept cryptocurrency </a></li>
        </ul>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-cog' ></i>
          <span class="link_name"></span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="http://Wa.me/+96181106192">To order the product</a></li>
        </ul>
      </li>
      <li>
    <ul>
      <a href="logout.php"><i class='bx bx-log-out' ></i></a>
    </ul>
</ul>


  <script src="santa_shop\index\script.js"></script>
  <script src="santa_shop\index\js\main.js"></script>

</body>

</html>
</form>