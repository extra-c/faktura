<!DOCTYPE html>
<html>
<head>
  <title>Faktura API</title>
  <!-- Latest compiled and minified CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
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
    <div class="col-md-12">
        <h1>faktura-api Guide</h1>
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

        <div class="row">
          <div class="col-md-12">
            <p>Betalningsinformation</p><hr>
          </div>

          <div class="col">
            <label>Text & Villkor:</label>
            <textarea rows="5" class="form-control"></textarea>
          </div>
        </div>

        <div class="row">
          <div class="col">
            <label>Status:</label>
            <select class="form-control">
              <option>Inte betald</option>
              <option>Betald</option>
            </select>
          </div>
          <div class="col">
            <label>Moms:</label>
            <select id="moms_sats" class="form-control">
              <option>0%</option>
              <option>10%</option>
              <option>25%</option>
            </select>
          </div>
        </div>

        <div class="row">
          <div class="col">
            <label>Välj antal produkter/tjänster:</label>
            <select id="products" class="form-control" name="products">
              <option value="0">0</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
              <option>6</option>
            </select>
          </div>
        </div>

        <div class="product"></div>

        <div class="row">
          <div class="col">
            Total summa exklusive moms: <b><span id="exmoms">NULL</span></b>
          </div>
          <div class="col">
            Moms <span id="moms"></span>: <b>NULL</b>
          </div>
          <div class="col">
            Totalt att betala: <b>NULL</b>
          </div>
        </div>

      <!-- FAKTURAMOTTAGARE END !-->


      </form>

    </div>
  </div>  

<!-- JS !-->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha256-3edrmyuQ0w65f8gfBsqowzjJe2iM6n0nKciPUp8y+7E=" crossorigin="anonymous"></script>
<script type="text/javascript">
$(document).ready(function(){ 
var product_id = 0;

 


  $("#products").change(function(){
    var products = $("#products option:selected").text();
    $(".product").html("");

            var fdata = 0;
            var odata = 0;

            var odataC = 0;
            var fdataC = 0;
            var tot = 0;

odata = $("#product_"+product_id).val();
      for(var i = 0; i < products; i++) {
        product_id = i+1;
        var products_list = "<div class='row'><div class='col-md-12'><p>Produkt "+ product_id + "</p><hr></div><div class='col'><label>Produkt:</label> <input type='text' name='product_data' class='form-control'></div> <div class='col'><label>Antal:</label><input type='text' name='antal' class='form-control'></div><div class='col'><label>Startavgift:</label><input type='text' name='startavgift' class='form-control'></div><div class='col'><label>Pris:</label><input type='text' name='pris' class='form-control'></div><div class='col'><label>Totalt:</label><input type='text' name='totalt' id='product_"+product_id+"' class='form-control'></div></div>";
        $(".product").append(products_list);
        
        console.log("div:" +product_id+ " data:" + $("#product_"+product_id).val()); 

           $("#product_"+product_id).keyup(function() {
             fdata = $(this).val();
             

             odataC = (odata) ;
             fdataC = (fdata);
             tot = (odataC) + (fdataC);
              

              console.log("Cdiv:" +product_id+ " Cdata:" + tot); 
               $("#exmoms").html(tot);
            })
            .keyup();

      }




      var exmoms = 0;


 $("input[name=totalt]").each(function(){
          var exmomsString = $(this).val();
           exmoms = exmomsString;
          });





  });


   


  var moms = "0%";
  $("#moms").html(moms);
  $("#moms_sats").change(function(){
    moms = $("#moms_sats option:selected").text();
    $("#moms").html(moms);
  });

  var total_summa = "0";
  $("#products").change(function(){
    $("input[name=totalt]").each(function(){
       $('#exmoms').text($(this).val());
        total_product = $(this).val();
        total_summa = total_summa + total_product;
         //alert(total_summa);
      });
    //alert(total_summa);
  });

var nameValue = "";
$("#total").change(function(){
  nameValue = $(this).html();
  alert($(this).val());
  alert("Detta är: " + nameValue);
});
  






});
</script>
<!-- Optional theme -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js">
</body>
</html>