<!DOCTYPE html>
<html>
<head>
	<title>Faktura API</title>
	<!-- Latest compiled and minified CSS -->
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  <style type="text/css">
    .row {
      margin-top: 30px;
    }
    p {
      font-weight: bold;
    }
  </style>
</head>
<body>

  <div class="row" style="margin: 30px;">
    <div class="col-md-10 col-md-offset-2">
        <h1>faktura-api Wizard</h1>
      <form action="index.php" method="POST">
      <!-- BETALNINGSMOTTAGARE !-->
        <div class="row">
          <div class="col-md-12">
            <p>Faktura</p><hr>
          </div>

          <div class="col">
            <label>Referens:</label>
            <input type="text" class="form-control" placeholder="First name">
          </div>
          <div class="col">
            <label>Faktureringsdatum:</label>
            <input type="text" class="form-control" placeholder="First name">
          </div>
          <div class="col">
            <label>Förfallodatum:</label>
            <input type="text" class="form-control" placeholder="First name">
          </div>
        </div>

        <div class="row">
          <div class="col-md-12">
            <p>Betalningsmottagare</p><hr>
          </div>

          <div class="col">
            <label> Förnamn och efternamn / Företag:</label>
            <input type="text" class="form-control" placeholder="First name">
          </div>
        </div>

        <div class="row">
          <div class="col">
             <label>Adress:</label>
            <input type="text" class="form-control" placeholder="Adress">
          </div>
          <div class="col">
             <label>Postnummer:</label>
            <input type="text" class="form-control" placeholder="Postnummer">
          </div>
          <div class="col">
             <label>Stad:</label>
            <input type="text" class="form-control" placeholder="Stad">
          </div>
          <div class="col">
             <label>Län:</label>
            <input type="text" class="form-control" placeholder="Län">
          </div>
          <div class="col">
             <label>Land:</label>
            <input type="text" class="form-control" placeholder="Land">
          </div>
        </div>

        <div class="row">
          <div class="col">
             <label>Org. nummer:</label>
            <input type="text" class="form-control" placeholder="Län">
          </div>
        </div>
      <!--BETALNINGSMOTTAGARE END !-->

        <div class="row">
          <div class="col">
            <div style="width: 100%; border: 3px solid #ddd;"></div>
          </div>
        </div>

      <!-- FAKTURAMOTTAGARE !-->
        <div class="row">
          <div class="col-md-12">
            <p>Fakturamottagare</p><hr>
          </div>
        </div>

        <div class="row">
          <div class="col">
            <label> Förnamn och efternamn / Företag:</label>
            <input type="text" class="form-control" placeholder="First name">
          </div>
        </div>

        <div class="row">
          <div class="col">
             <label>Adress:</label>
            <input type="text" class="form-control" placeholder="Adress">
          </div>
          <div class="col">
             <label>Postnummer:</label>
            <input type="text" class="form-control" placeholder="Postnummer">
          </div>
          <div class="col">
             <label>Stad:</label>
            <input type="text" class="form-control" placeholder="Stad">
          </div>
          <div class="col">
             <label>Län:</label>
            <input type="text" class="form-control" placeholder="Län">
          </div>
          <div class="col">
             <label>Land:</label>
            <input type="text" class="form-control" placeholder="Land">
          </div>
        </div>

        <div class="row">
          <div class="col">
             <label>Org. nummer:</label>
            <input type="text" class="form-control" placeholder="Län">
          </div>
        </div>


      <!-- FAKTURAMOTTAGARE END !-->


      </form>

    </div>
  </div>  

<!-- Optional theme -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
</body>
</html>