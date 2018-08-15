<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MC MEDIA PHOTOGRAPHY</title>
    <link rel="stylesheet" type="text/css" href="./assets/css/app.css"/>
    <link href="https://fonts.googleapis.com/css?family=Nanum+Gothic" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="./assets/js/index.js"></script>
  </head>
  <body>
    <?php include './partials/nav.php'?>

<div>
      <h1>Contact</h1>
      <form class="inquery-form" action="./mailer.php">
        <label>Name:</label>
        <input type="text" id="name" name="name" required />
        <br/>
        <br/>
        <label>Email:</label>
        <input type="email" id="email" name="email" required />
        <br/>
        <br/>
        <label>Message:</label><br/>
        <textarea class="inquery-message" type="text" id="message" name="message" required >
        </textarea>
        <br/><br/>
        <button class="button" name="submit" type="submit">Submit</button>
      </form>
</div>
<?php include './partials/footer.php'?>
</body>
