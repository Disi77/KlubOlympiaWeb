<?php
if(isset( $_POST['name']))
$name = $_POST['name'];
if(isset( $_POST['email']))
$email = $_POST['email'];
if(isset( $_POST['message']))
$message = $_POST['message'];


$content="From: $name \n Email: $email \n Message: $message";
$recipient = "disi77@gmail.com";
$mailheader = "From: $email \r\n";
mail($recipient, $content, $mailheader) or die("Error!");
echo "Email sent!";
?>


<!--Section: Contact v.2-->
<section class="mb-4">

  <!--Section heading-->
  <h2 class="h1-responsive font-weight-bold text-center my-4">Objednejte si lístky</h2>
  <!--Section description-->
  <p class="text-center w-responsive mx-auto mb-5">Vyplňte formulář a přijdou vám informace, jak lístky zaplatit, kde si je vyzvednout. </p>

  <div class="row">

    <!--Grid column-->
    <div class="col-md-9 mb-md-0 mb-5">
      <form id="contact-form" name="contact-form" action="mail.php" method="POST">

        <!--Grid row-->
        <div class="row">

          <!--Grid column-->
          <div class="col-md-6">
            <div class="md-form mb-0">
              <input type="text" id="name" name="name" class="form-control">
              <label for="name" class="">Jméno</label>
            </div>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-md-6">
            <div class="md-form mb-0">
              <input type="text" id="email" name="email" class="form-control">
              <label for="email" class="">Email</label>
            </div>
          </div>
          <!--Grid column-->

        </div>
        <!--Grid row-->

        <!--Grid row-->
        <div class="row">

          <!--Grid column-->
          <div class="col-md-12">

            <div class="md-form">
              <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
              <label for="message">Kolik lístků si objednáváte?</label>
            </div>

          </div>
        </div>
        <!--Grid row-->

      </form>

      <div class="text-center text-md-left">
        <a class="btn btn-primary" onclick="document.getElementById('contact-form').submit();">OBJEDNAT</a>
      </div>
      <div class="status"></div>
    </div>
    <!--Grid column-->

  </div>

</section>
<!--Section: Contact v.2-->
