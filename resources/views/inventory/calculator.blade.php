<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

        <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'roboto', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
                padding-top: 5%;
                
            }
            .calculator
            {
                width:400px;
                height:400px;
                background-color:#fff;
                /*border:2px solid #CCCCCC;*/
                margin:auto;
                /*padding-left:5px;
                padding-bottom:5px;*/

                -webkit-box-shadow: -1px 10px 26px -8px rgba(0,0,0,0.45);
                -moz-box-shadow: -1px 10px 26px -8px rgba(0,0,0,0.45);
                box-shadow: -1px 10px 26px -8px rgba(0,0,0,0.45);
            }
            .calculator td 
            {
                    height:15.66%;
            }
            .calc_td_result
            {
                    text-align:center;
            }
            .calc_result
            {
                    width:100%;
                    text-align:right;

                    border: none; 
            }
            input:focus{
                outline: none;
            }
            .calc_td_calculs
            {
                    text-align:center;
            }
            .calc_calculs
            {
                    width:90%;
                    text-align:left;
            }
            .calc_td_btn
            {
                    width:25%;
                    height:100%;
            }
            .calc_btn
            {
                    width:100%;
                    height:100%;
                    font-size:1em;

                    border: none;
            }
            .menu{
                border: none;
                height: 100%;
                padding: 10px 10px 10px 10px;

                margin: 0;
            }
            .menu_row{
                margin-top: 20px; 
                margin-bottom: 20px;
            }
        </style>
    </head>
    <body>


        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <table class="calculator" id="calc">
                        <tr>
                            <td colspan="4"  class="calc_td_result ">
                                <input type="text"style="height: 50px;font-size: 2em;" readonly="readonly" name="calc_result" id="calc_result" class="calc_result" onkeydown="javascript:key_detect_calc('calc',event);" />
                            </td>
                        </tr>
                        <tr>
                            <td class="calc_td_btn">
                                    <input type="button" class="calc_btn" value="CE" onclick="javascript:f_calc('calc','ce');" />
                            </td>
                             <td class="calc_td_btn">
                                    <input type="button" class="calc_btn" value=Cash onclick="javascript:f_calc('calc','-');" />
                            </td>
                             <td class="calc_td_btn">
                                    <input type="button" class="calc_btn" value="Quantity" onclick="javascript:f_calc('calc','*');" />
                            </td>
                            <!-- <td class="calc_td_btn">
                                    <input type="button" class="calc_btn" value="&larr;" onclick="javascript:f_calc('calc','nbs');" />
                            </td> -->
                            <!-- <td class="calc_td_btn">
                                    <input type="button" class="calc_btn" value="%" onclick="javascript:f_calc('calc','%');" />
                            </td> -->
                           <!--  <td class="calc_td_btn">
                                    <input type="button" class="calc_btn" value="+" onclick="javascript:f_calc('calc','+');" />
                            </td> -->
                        </tr>
                        <tr>
                            <td class="calc_td_btn">
                                    <input type="button" class="calc_btn" value="7" onclick="javascript:add_calc('calc',7);" />
                            </td>
                            <td class="calc_td_btn">
                                    <input type="button" class="calc_btn" value="8" onclick="javascript:add_calc('calc',8);" />
                            </td>
                            <td class="calc_td_btn">
                                    <input type="button" class="calc_btn" value="9" onclick="javascript:add_calc('calc',9);" />
                            </td>

                           <!--  <td class="calc_td_btn">
                                    <input type="button" class="calc_btn" value=Cash onclick="javascript:f_calc('calc','-');" />
                            </td> -->
                        </tr>
                                    <tr>
                            <td class="calc_td_btn">
                                    <input type="button" class="calc_btn" value="4" onclick="javascript:add_calc('calc',4);" />
                            </td>
                            <td class="calc_td_btn">
                                    <input type="button" class="calc_btn" value="5" onclick="javascript:add_calc('calc',5);" />
                            </td>
                            <td class="calc_td_btn">
                                    <input type="button" class="calc_btn" value="6" onclick="javascript:add_calc('calc',6);" />
                            </td>
                           <!--  <td class="calc_td_btn">
                                    <input type="button" class="calc_btn" value="Quantity" onclick="javascript:f_calc('calc','*');" />
                            </td> -->
                        </tr>
                        <tr>
                            <td class="calc_td_btn">
                                    <input type="button" class="calc_btn" value="1" onclick="javascript:add_calc('calc',1);" />
                            </td>
                            <td class="calc_td_btn">
                                    <input type="button" class="calc_btn" value="2" onclick="javascript:add_calc('calc',2);" />
                            </td>
                            <td class="calc_td_btn">
                                    <input type="button" class="calc_btn" value="3" onclick="javascript:add_calc('calc',3);" />
                            </td>
                            <!-- <td class="calc_td_btn">
                                    <input type="button" class="calc_btn" value="&divide;" onclick="javascript:f_calc('calc','');" />
                            </td> -->
                        </tr>
                        <tr>
                            <td class="calc_td_btn">
                                    <input type="button" class="calc_btn" value="," onclick="javascript:add_calc('calc','.');" />
                            </td>
                            
                          <!--   <td class="calc_td_btn">
                                    <input type="button" class="calc_btn" value="&plusmn;" onclick="javascript:f_calc('calc','+-');" />
                            </td> -->
                            <td class="calc_td_btn">
                                    <input type="button" class="calc_btn" value="0" onclick="javascript:add_calc('calc',0);" />
                            </td>
                            
                            <td class="calc_td_btn">
                            <input type="button" class="calc_btn" value="Enter" onclick="javascript:f_calc('calc','=');" />
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="col-md-5">
                    <h5>Menu</h5>
                    <div class="row menu_row">
                        <div class="col-md-4 calc_td_result">
                            <button class="menu" id="" name="" value="">Lemon Classic</button>
                        </div>
                        <div class="col-md-4">
                            <button class="menu" id="" name="" value="">Lemon Classic</button>
                        </div>
                        <div class="col-md-4">
                            <button class="menu" id="" name="" value="">Lemon Classic</button>
                        </div>
                    </div>
                    <div class="row menu_row">
                        <div class="col-md-4 calc_td_result">
                            <button class="menu" id="" name="" value="">Lemon Classic</button>
                        </div>
                        <div class="col-md-4">
                            <button class="menu" id="" name="" value="">Lemon Classic</button>
                        </div>
                        <div class="col-md-4">
                            <button class="menu" id="" name="" value="">Lemon Classic</button>
                        </div>
                    </div>
                    <div class="row menu_row">
                        <div class="col-md-4 calc_td_result">
                            <button class="menu" id="" name="" value="">Lemon Classic</button>
                        </div>
                        <div class="col-md-4">
                            <button class="menu" id="" name="" value="">Lemon Classic</button>
                        </div>
                        <div class="col-md-4">
                            <button class="menu" id="" name="" value="">Lemon Classic</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
        <script type="text/javascript">
                document.getElementById('calc').onload=init_calc('calc');
        </script>
    </body>
</html>
