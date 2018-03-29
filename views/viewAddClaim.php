<?php ?>

<head>
    <link rel="stylesheet" href="form.css" type="text/css">
</head>
<body>
<div class="container">
    <form id="claimForm" method="post" action =''>
        <h3>Contact Us</h3>
        <h4>Send us your message and we will get back to you as soon as possible!</h4>
        <fieldset>
            <input value="bayrek" placeholder="Your name" type="text" name="userName" tabindex="1" autofocus>
        </fieldset>
        <fieldset>
            <input value="bayrek@gmail.com" placeholder="Your Email Address" type="text" name="email" tabindex="2">
        </fieldset>
        <fieldset>
            <input value="4578787" placeholder="Your Phone Number" type="text" name="phoneNumber" tabindex="3">
        </fieldset>
        <fieldset>
            <label for="birthday" class="new">Today's date : </label>
            <input type="text" name="date" value="<?php echo date('d/m/Y H:i:s'); ?> "class="newcompte" id="toDayDate" tabindex="4"/>
        </fieldset>
       <!-- <fieldset>
            <input placeholder="Your id" type="text" name="id" tabindex="5" >
        </fieldset>
        <fieldset>-->
      <textarea name="text" tabindex="6">
      </textarea>
        </fieldset>
        <fieldset>
            <button name="submitClaim" type="submit" id="description" data-submit="...Sending" name="description">SEND CLAIM</button>
        </fieldset>
    </form>
</div>
</body>
