<?php
include './inc/db.php';
include './inc/form.php';
include './inc/select.php';
include './inc/db_close.php';
?>
<?php  include_once './patrs/header.php'; ?>





<div class="position-relative text-center bg-light">
    <div class="col-md-5 p-lg-5 mx-auto ">
    <br>
    <br>
    <img src="images/DD.png" width="300">
    <br>
    <br>
      <h1 class="display-4 fw-normal">اربح مع ضيف الله</h1>
      <p class="lead fw-normal">باقي على فتح التسجيل </p>
      <p id="demo"></p>
      <p class="lead fw-normal">للسحب على ربح نسخة مجانية من البرنامج</p>
      
    </div>

    <ul class="list-group list-group-flush">
      <div class="contai">

<ul>
      <h3>للدخول في السحب اتبع مايلي :</h3> 
    <div class="container">
  <li class="list-group-item">تابع البث على قناتي باليوتيوب بالتاريخ المذكور اعلاه</li>
  <li class="list-group-item">ساقوم ببث مباشر لمدة ساعة عبارة عن اسئلة واجوبة حرة للجميع</li>
  <li class="list-group-item">خلال فترة الساعة سيتم فتح صفحة التسجيل هنا حيث ستقوم بتسجيل اسمك وايميلك</li>
  <li class="list-group-item">بنهاية البث سيتم اختيار اسم واحد من قاعة البيانات بشكل عشوائي</li>
  <li class="list-group-item">الرابح سوف يحصل على نسخة مجانية من برنامج كامتازيا </li>
  <br>
<br>
</ul>
</div>
  </div> 
 </div>

 <div class="container">
<div class="position-relative  text-rtl">
    <div class="col-md-5 p-lg-5 mx-auto">
<form  action="<?php $_SERVER['PHP_SELF'] ?>" method = "POST">
<br>
<br>
<h3>الرجاء ادخل معلوماتك</h3>

  <div class="mb-3">
    <label for="firstName" class="form-label">الاسم الاول </label>
    <input type="text" name="firstName" id="firstName" class="form-control"  aria-describedby=>
    <div  class="form-text error"><?php echo $errors[ 'firstNameError' ] ?> </div>
  </div>

  <div class="mb-3">
    <label for="lastName" class="form-label">الاسم الاخير</label>
    <input type="text" name="lastName" id="lastName" class="form-control"  aria-describedby=>
    <div  class="form-text error"><?php echo $errors[ 'lastNameError' ] ?> </div>
  </div>

  <div class="mb-3">
    <label for="email" class="form-label">الايميل</label>
    <input type="text" name="email"  class="form-control" id="email" aria-describedby=>
    <div  class="form-text error"><?php echo $errors[ 'emailError' ] ?> 
  </div>
  </div>

  <button type="submit" name="submit" class="btn btn-primary">ارسال المعلومات </button>
</form>
</div>
</div>


<div class="loader-con">
<div id="loader">
	<canvas id="circularLoader" width="200" height="200"></canvas>
</div>
</div>

<!-- Button trigger modal -->
<div class="d-grid gap-2 col-6 mx-auto my-5">
    <button type="button" id="winner"  class="btn btn-primary" >
    اختيار الرابح
    </button>
</div> 

<!-- Modal -->

<div class="modal fade" id="modal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">

<canvas   class="confetti" id="canvas" ></canvas>

  <div class="modal-dialog  modal-dialog-centered">
  
    <div class="modal-content">

      <div class="modal-header">
      
        <h5 class="modal-title" id="modalLabel">الرابح في المسابقة </h5>

        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

      </div>
      <div class="modal-body">
        
        <?php foreach($users as $uesr): ?>
          
  
          <h1 class="display-1  text-center  modal-title"id="modalLabel"><?php echo htmlspecialchars( $uesr ['firstName']). ' ' . htmlspecialchars( $uesr ['lastName']); ?></h1>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</div>

<?php  include_once './patrs/footer.php'; ?>





