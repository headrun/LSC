@extends('layout.sidebar1')
@section('content')
<!DOCTYPE html>
<html lang="en">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">


    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Activity8</title>
    <link rel="stylesheet" href="Unit4Activity1/css/bootstrap.min.css">
    <link rel="stylesheet" href="Unit4Activity1/css/fontawesome.css">
    <link rel="stylesheet" href="Unit4Activity1/fontawsome/css/all.css">
    <link rel="stylesheet" href="Unit4Activity1/css/style.css">
    <link rel="stylesheet" href="Unit4Activity1/css/introjs.css">
    <link rel="stylesheet" href="Unit4Activity1/fonts.css">
    <link rel="stylesheet" href="Unit4Activity1/css/jquery-ui.css">

</head>

<body class="newbg2">
    <div class="container">
        <div class="simulate">
            <div class="simulatequs">
                <h2>You own a helmet store. You can buy a maximum of 10 helmets over 5 days. Expected demand is 2 helmets per day (Max: 4 per day).</h2>
                <h2>Can you satisfy your demand?</h2>
            </div>
            <div class="row">
                <div class="col-12 col-sm-12 col-md-9 col-lg-10 col-xl-10">
                    <div class="simulateboldcontent">
                        <h3>P.S: For every helmet you have left at end of day you lose <span class="boldcontentcolor">50 Rs.</span></h3>
                        <h3>For every demand you don’t satisfy, you lose <span class="boldcontentcolor">100 Rs.</span></h3>
                        <h3>Drag & drop to purchase cell: <img id="helmet_to_drop" width="50" src="Unit4Activity1/images/helmet.png" /></h3>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-3 col-lg-2 col-xl-2">
                    <div class="simulate_right">
                        -200
                    </div>
                </div>
            </div>
            <div class="simulate_table">
                <table class="table text-center simultetablecontent">
                    <tr>
                        <th></th>
                        <th>Day 1</th>
                        <th>Day 2</th>
                        <th>Day 3</th>
                        <th>Day 4</th>
                        <th>Day 5</th>
                    </tr>

                    <tr>
                        <td>
                            <h4>Stock at beginning</h4>
                        </td>
                        <td><input type="text" placeholder="Drop here" oninput="this.value = this.value.replace(/[^0-4.]/g, '').replace(/(\..*)\./g, '$1');" class="tablefield" rel="1" step="stock" id="stock_1" value="0" /></td>
                        <td><input type="text" oninput="this.value = this.value.replace(/[^0-4.]/g, '').replace(/(\..*)\./g, '$1');" class="tablefield" rel="2" step="stock" id="stock_2" readonly /></td>
                        <td><input type="text" oninput="this.value = this.value.replace(/[^0-4.]/g, '').replace(/(\..*)\./g, '$1');" class="tablefield" rel="3" step="stock" id="stock_3" readonly /></td>
                        <td><input type="text" oninput="this.value = this.value.replace(/[^0-4.]/g, '').replace(/(\..*)\./g, '$1');" class="tablefield" rel="4" step="stock" id="stock_4" readonly /></td>
                        <td><input type="text" oninput="this.value = this.value.replace(/[^0-4.]/g, '').replace(/(\..*)\./g, '$1');" class="tablefield" rel="5" step="stock" id="stock_5" readonly /></td>
                    </tr>

                    <tr>
                        <td>
                            <h4>Purchase</h4>
                        </td>
                        <td>
						<img class="purchimg purch_1 dragimagehelmet" style="display:none;" height="30px" width="30px" src="Unit4Activity1/images/helmet.png"/>
						<input type="text" oninput="this.value = this.value.replace(/[^0-4.]/g, '').replace(/(\..*)\./g, '$1');" class="tablefield" rel="1" step="purch" id="purch_1" placeholder="Drag helmet to here"/>
						</td>
                        <td>
						<img class="purchimg purch_2 dragimagehelmet" style="display:none;" height="30px" width="30px" src="Unit4Activity1/images/helmet.png"/>
						<input type="text" oninput="this.value = this.value.replace(/[^0-4.]/g, '').replace(/(\..*)\./g, '$1');" class="tablefield" rel="2" step="purch" id="purch_2" placeholder="Drag helmet to here"/>
						</td>
                        <td>
						<img class="purchimg purch_3 dragimagehelmet" style="display:none;" height="30px" width="30px" src="Unit4Activity1/images/helmet.png"/>
						<input type="text" oninput="this.value = this.value.replace(/[^0-4.]/g, '').replace(/(\..*)\./g, '$1');" class="tablefield" rel="3" step="purch" id="purch_3" placeholder="Drag helmet to here"/>
						</td>
                        <td>
						<img class="purchimg purch_4 dragimagehelmet" style="display:none;" height="30px" width="30px" src="Unit4Activity1/images/helmet.png"/>
						<input type="text" oninput="this.value = this.value.replace(/[^0-4.]/g, '').replace(/(\..*)\./g, '$1');" class="tablefield" rel="4" step="purch" id="purch_4" placeholder="Drag helmet to here"/>
						</td>
                        <td>
						<img class="purchimg purch_5 dragimagehelmet" style="display:none;" height="30px" width="30px" src="Unit4Activity1/images/helmet.png"/>
						<input type="text" oninput="this.value = this.value.replace(/[^0-4.]/g, '').replace(/(\..*)\./g, '$1');" class="tablefield" rel="5" step="purch" id="purch_5" placeholder="Drag helmet to here"/>
						</td>
                    </tr>

                    <tr>
                        <td>
                            <h4>Demand</h4>
                        </td>
                        <td>
                            <h4 id="demand_1" style="display:none;">2</h4>
                        </td>
                        <td>
                            <h4 id="demand_2" style="display:none;">4</h4>
                        </td>
                        <td>
                            <h4 id="demand_3" style="display:none;">0</h4>
                        </td>
                        <td>
                            <h4 id="demand_4" style="display:none;">3</h4>
                        </td>
                        <td>
                            <h4 id="demand_5" style="display:none;">1</h4>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <h4>Closing stock</h4>
                        </td>
                        <td>
                            <h4 id="closing_1"></h4>
                        </td>
                        <td>
                            <h4 id="closing_2"></h4>
                        </td>
                        <td>
                            <h4 id="closing_3"></h4>
                        </td>
                        <td>
                            <h4 id="closing_4"></h4>
                        </td>
                        <td>
                            <h4 id="closing_5"></h4>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <h4>Money lost</h4>
                        </td>
                        <td>
                            <h4 id="money_1"></h4>
                        </td>
                        <td>
                            <h4 id="money_2"></h4>
                        </td>
                        <td>
                            <h4 id="money_3"></h4>
                        </td>
                        <td>
                            <h4 id="money_4"></h4>
                        </td>
                        <td>
                            <h4 id="money_5"></h4>
                        </td>
                    </tr>

                </table>
				<button type="submit" onClick="Refresh();" class="resetbtn">Reset</button>
            </div>
            <button id = "back" style="color: white; float: left; background-color: red;" class="btn btn-primary btn-lg"> Back</button>
        <button id = "next" style="color: white; float: right; background-color: red;" class="btn btn-primary btn-lg"> Next</button>

        </div>
        <script type="text/javascript">
          $(document).on('click', '#next', function(){
            window.location = "{{url()}}/InventoryModuleUnit4";
          });
          $(document).on('click', '#back', function(){
            window.location = "{{url()}}/InventoryModule1Act3";
          });
    </script>
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="Unit4Activity1/js/popper.min.js" type="text/javascript"></script>
        <script src="Unit4Activity1/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="Unit4Activity1/js/intro.js" type="text/javascript"></script>
        <script src="Unit4Activity1/js/jquery-ui.js"></script>
        <script src="Unit4Activity1/js/activity.js"></script>
        <script src="Unit4Activity1/js/bootbox.min.js"></script>
        <script src="Unit4Activity1/js/sweetalert.min.js"></script>
        <script>
            $(document).ready(function() {
                $(".simulate_right").hide();
                $(".tablefield").keypress(function(e) {
                  e.preventDefault();
                });
                $( ".tablefield" ).droppable({
                  drop: function( event, ui ) {
                    var rel = $(this).attr('rel');
                    if(isNaN(parseInt($(this).val())))
                    {
                      this_value = 0;
                    }
                    else {
                      this_value = parseInt($(this).val());
                    }
                    if (this_value < 4) {
                      switch(this_value)
                      {
                        case 0:
                        {
                          $(this).val(1);
                          break;
                        }
                        case 1:
                        {
                          $(this).val(2);
                          break;
                        }
                        case 2:
                        {
                          $(this).val(3);
                          break;
                        }
                        case 3:
                        {
                          $(this).val(4);
                          break;
                        }
                      }
          						if(rel==1){
          							Remove_tag(1,0);
          							Remove_tag(2);
          							Remove_tag(3);
          							Remove_tag(4);
          							Remove_tag(5);
          						}else if(rel==2){
          							Remove_tag(2,0);
          							Remove_tag(3);
          							Remove_tag(4);
          							Remove_tag(5);
          						}else if(rel==3){
          							Remove_tag(3,0);
          							Remove_tag(4);
          							Remove_tag(5);
          						}else if(rel==4){
          							Remove_tag(4,0);
          							Remove_tag(5);
          						}else{
          							Remove_tag(5,0);
          						}
                      var step = $(this).attr('step');
                      if (step == 'purch') {
                          Final_Calculation(rel);
                      }
                    } else {
                        var step = $(this).attr('step');
                        if (step == 'purch') {
                            Final_Calculation(rel);
                        }
                    }
                  }
                });
                $('#helmet_to_drop').draggable({
                  helper: "clone"
                });
            });
			function Remove_tag(rel,check=1){
        if(check==1){$("#stock_" + rel).val('');
  				$("#demand_" + rel).hide();
  				$("#purch_" + rel).val('');
				$(".purch_" + rel).hide();
  				$("#closing_" + rel).text('');
  				$("#money_" + rel).text('');
        }
        else {
          $("#demand_" + rel).show();
        }
				var tot1 = parseFloat(($("#money_1").text() == '') ? 0 : $("#money_1").text());
				var tot2 = parseFloat(($("#money_2").text() == '') ? 0 : $("#money_2").text());
				var tot3 = parseFloat(($("#money_3").text() == '') ? 0 : $("#money_3").text());
				var tot4 = parseFloat(($("#money_4").text() == '') ? 0 : $("#money_4").text());
				var tot5 = parseFloat(($("#money_5").text() == '') ? 0 : $("#money_5").text());
				var ToTal = parseFloat(tot1) + parseFloat(tot2) + parseFloat(tot3) + parseFloat(tot4) + parseFloat(tot5);
				if (ToTal > 0) {
				$(".simulate_right").text('-' + ToTal);
				} else {
				$(".simulate_right").text('-0');
				}
			}
            function Final_Calculation(rel) {
                var purch = parseFloat($("#purch_" + rel).val());
                if(!isNaN(purch)){
                    $("#demand_" + rel).show();
                    $(".purch_" + rel).show();
                    var purch = parseFloat($("#stock_" + rel).val()) + parseFloat(purch);
                    var dem = $("#demand_" + rel).text();
                    var final_val = parseFloat(purch) - parseFloat(dem);
                    $("#closing_" + rel).text(final_val);
                    if (final_val > 0) {
                        var mn = parseFloat(final_val) * parseFloat(50);
                    } else {
                        var mult = -1;
                        var calc = parseFloat(final_val) * parseFloat(mult);
                        var mn = parseFloat(calc) * parseFloat(100);
                    }
                    $("#money_" + rel).text(mn);
                    var tot1 = parseFloat(($("#money_1").text() == '') ? 0 : $("#money_1").text());
                    var tot2 = parseFloat(($("#money_2").text() == '') ? 0 : $("#money_2").text());
                    var tot3 = parseFloat(($("#money_3").text() == '') ? 0 : $("#money_3").text());
                    var tot4 = parseFloat(($("#money_4").text() == '') ? 0 : $("#money_4").text());
                    var tot5 = parseFloat(($("#money_5").text() == '') ? 0 : $("#money_5").text());
                    var ToTal = parseFloat(tot1) + parseFloat(tot2) + parseFloat(tot3) + parseFloat(tot4) + parseFloat(tot5);
                    if (ToTal > 0) {
                        $(".simulate_right").text('-' + ToTal);
                    } else {
                        $(".simulate_right").text('-0');
                    }
                    $(".simulate_right").show();
                    var id = parseFloat(rel) + parseFloat(1);
                    var nextstock = (final_val > 0) ? final_val : 0;
                    $("#stock_" + id).val(nextstock);
                    Final_Calculation(id);
                }
            }
			function Refresh(){location.reload();}
        </script>
</body>

</html>
@stop
