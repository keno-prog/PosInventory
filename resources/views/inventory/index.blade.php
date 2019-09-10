<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <style type="text/css">
        .btn{
            width: 100%;
        }
        input{
            width: 100%;
            height: 50px;

            border: 2px solid #000;
        }
        .wrapper{
            padding-top: 80px;
        }
        #quantity, #enter{
            margin-top: 20px;
        }
        #cash, #checkout{
            margin-top: 20px;
        }
        .number{
            margin: 8px 8px 8px 8px;
        }
    </style>

    <body>

        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <input type="text" name="screen" class="screen" id="screen">
                        <div class="row">
                            <div class="col-md-6">
                                <button class="btn btn-primary" id="quantity" name="quantity">Quantity</button>
                            </div>
                            <div class="col-md-6">
                                <button class="btn btn-success cash" id="cash" name="cash">Cash</button>
                            </div>                            
                            <div class="col-md-6">
                                <button class="btn btn-primary checkout" id="checkout" name="cash">Checkout</button>
                            </div>                            
                            <div class="col-md-6">
                                <button class="btn btn-success enter" id="enter" name="cash">Enter</button>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="screen" class="hidden" id="hdn_total" value="">
                    <div class="col-md-6 calculator">
                        <div class="row">
                            <div class="col-md-4">
                                <button class="btn btn-default number">1</button>
                            </div>
                            <div class="col-md-4">
                                <button class="btn btn-default number">2</button>
                            </div>
                            <div class="col-md-4">
                                <button class="btn btn-default number">3</button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <button class="btn btn-default number">4</button>
                            </div>
                            <div class="col-md-4">
                                <button class="btn btn-default number">5</button>
                            </div>
                            <div class="col-md-4">
                                <button class="btn btn-default number">6</button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <button class="btn btn-default number">7</button>
                            </div>
                            <div class="col-md-4">
                                <button class="btn btn-default number">8</button>
                            </div>
                            <div class="col-md-4">
                                <button class="btn btn-default number">9</button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                
                            </div>
                            <div class="col-md-4">
                                <button class="btn btn-default number">0</button>
                            </div>
                            <div class="col-md-4">
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <button class="btn btn-success lemon">Lemon Classic</button>
                    </div>
                    <div class="col-md-3"></div>
                    <div class="col-md-3"></div>
                    <div class="col-md-3"></div>
                </div>
            </div>
        </div>
<script type="text/javascript">
$( document ).ready(function() {
    $('.lemon').on('click', function(event){
        $('#screen').val('55');

        $('.number').on('click', function(event){
          var price =  $('#screen').val();

          var quantity = $(this).text();

          var total = price * quantity;

          $('#screen').val(total);
        });
    });

    

    $('.cash').on('click', function(event){
      var total =  $('#screen').val();

      $('#hdn_total').val(total);
      $('#screen').val('');



      $('.number').on('click', function(event){
        var total =  $('#screen').val();
        var cash = $(this).text();
          var t =  $('#hdn_total').val(cash);

            if(t != null){
                $('#hdn_total').val(t + cash);
            }
        var inputCash = $('#screen').val(cash);
        // if(inputCash != null)
        // {
        //     $('.number').on('click', function(event){
        //         var newCash = $(this).text();
        //         var cash2 = inputCash.concat(newCash);
        //         $('#screen').val(cash2);
        //     });
           
        // }

      });      

      $('.checkout').on('click', function(event){
        var total =  $('#screen').val();
        $('#screen').val('');

      });

    });

});

</script>
    </body> 
</html>