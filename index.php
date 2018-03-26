<?php include('form_process.php'); ?>
<head>
<link rel="stylesheet" href="form.css" type="text/css">
</head>
<body>
<div class="container">
  <form id="contact"  method="post" action ='ajoutR.php'>
    <h3>Contact Us</h3>
    <h4>Send us your message and we will get back to you as soon as possible!</h4>
    <fieldset>
      <input placeholder="Your name" type="text" name="full_name" value="<?= $name ?>" tabindex="1" autofocus>
      <span class="error"><?= $full_name_error ?></span>
    </fieldset>
    <fieldset>
      <input placeholder="Your Email Address" type="text" name="email" value="<?= $email ?>" tabindex="2">
      <span class="error"><?= $email_error ?></span>
    </fieldset>
    <fieldset>
      <input placeholder="Your Phone Number" type="text" name="phone" value="<?= $phone ?>" tabindex="3">
      <span class="error"><?= $phone_error ?></span>
    </fieldset>
    <fieldset>
      <label for="birthday" class="new">Today's date : </label>

        <input type="text" name="toDayDate" value="<?php echo date('d/m/Y H:i:s'); ?>"class="newcompte" id="toDayDate" tabindex="4"/>

        <span class="error"><?= $url_error ?></span>
    </fieldset>
      <fieldset>
      <input placeholder="Your id" type="text" name="id" value="<?= $id ?>" tabindex="5" >
      <span class="error"><?= $id_error ?></span>
    </fieldset>
    <fieldset>
      <textarea value="<?= $text ?>"  name="text" tabindex="6">
      </textarea>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending" name="save">Save</button>
    </fieldset>
    <div class="success"><?= $success ?></div>
  </form>
</div>
</body>