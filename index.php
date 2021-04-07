
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Donate to MSS Eye Care Program</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="res/logo_small.png"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <style type="text/css">
    label.focus{
        color: #f7f5f0 !important;
        background-color: #826203 !important;
        border-color: #d39e00 !important;
      }

      .btn-donate{

        background-color: #313d8d;
        color: #fff;
        border: 2px solid #313d8d;
        font-size: 14px;
        font-weight: 500;
        letter-spacing: 2px;
        line-height: 1.1;
        overflow: hidden;
        padding: 0.7rem 1.375rem;
        position: relative;
        text-transform: uppercase;
        width: 100%;
      }

   

      .btn-donate:hover, .btn-donate:focus, .btn-donate:active{
          background-color: transparent;
          color: #313d8d;
      }

      .required{
        color: #ec008e;
      }

      .form-group {
          margin-bottom: 0.6rem;
      }

      body, .form-control, .btn {
          font-size: 0.95rem;
      }

      .logo{
        text-align: center;
      }

      input#amount {
       padding: 18px 30px;
      }

    </style>
  </head>
  <body>
    <div class="row" style="border-bottom: 1px solid #ccc; margin-right: 0px;margin-left: 0px;margin-bottom: 15px;">
      <div class="col-md-12">
        <div class="logo">
          <img src="res/logo.png" style="padding: 3px; margin: 3px">
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <!-- <div class="col-md-8">
          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="border: 1px solid #ccc;">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100" src="https://www.brac.net/covid19/donate/progress1bn6.png" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="https://www.brac.net/covid19/donate/progress1bn5.png" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="https://www.brac.net/covid19/donate/progress1bn4.png" alt="Third slide">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <div style="background: #ec008e;">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </div>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <div style="background: #ec008e;">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </div>
            </a>
          </div>
        </div>-->
        <div class="col-md-4">&nbsp;</div>

        <div class="col-md-4">
          <div style="border: 1px solid #e1e1e1; padding: 15px 15px; border-radius: 10px;">
            <form method="post">
              <div class="btn-group btn-group-toggle" data-toggle="buttons">
                <label class="btn btn-info active">
                  <input type="radio" name="cur" value="BDT" id="option1" autocomplete="off" checked /> BDT
                </label>

                <input type="number" step="20.0" name="amount" id="amount" class="form-control text-center" autocomplete="off" placeholder="Enter your amount" required="1" /><label class="btn btn-info" style="border: 0px solid #CCC;" id="cur_symbol">৳</label>
              </div>

              <div class="form-group" style="margin: 2px 5px; text-align: right;height: 22px;">
                <label for="full_name">Total Amount</label>
                <b id="amount_inbdt">0.00</b>
                <input type="hidden" name="amounti" id="amounti" />
              </div>

              <div class="form-group">
                <label for="full_name">Full name <span class="required">*</span></label>
                <input type="text" required="1" class="form-control" id="full_name" name="full_name" placeholder="Enter your name">
              </div>
              <div class="form-group">
                <label for="email">Email address <span class="required">*</span></label>
                <input type="email" required="1" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email">
              </div>
              <div class="form-group">
                <label for="phone">Phone <span class="required">*</span></label>
                <input type="tel" required="1" class="form-control" id="phone" name="phone" placeholder="Enter phone">
              </div>

              <div class="form-group">
                <label for="Donate">Donate For <span class="required">*</span></label>
                <select required="1" id="donate" class="form-control" name="nationality" onchange="myFunction()">
                  <option value="EYE CARE PROGRAM" id="myCausea" selected="selected">Choose what you donate for</option>
                  <option value="EYE CARE PROGRAM" id="myCauseb">Eye Care Program</option>
                  <option value="DAY CARE CENTER" id="myCause1">Day Care Center</option>
                  <option value="NON-FORMAL PRIMARY EDUCATION" id="myCause2">Non-Formal Primary Educarion</option>
                </select>
              </div>


              <div class="form-group">
                  <label for="selectcause">Select where you want to spend</label>
                  <select id="selectcause" class="form-control" name="nationality"></select>
              </div>

              
              <div class="form-group">
                <label for="nationality">Nationality</label>
                <select id="nationality" class="form-control" name="nationality">
                    <option value="Afghanistan">Afghanistan</option>
                    <option value="Albania">Albania</option>
                    <option value="Algeria">Algeria</option>
                    <option value="American Samoa">American Samoa</option>
                    <option value="Andorra">Andorra</option>
                    <option value="Angola">Angola</option>
                    <option value="Anguilla">Anguilla</option>
                    <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                    <option value="Argentina">Argentina</option>
                    <option value="Armenia">Armenia</option>
                    <option value="Aruba">Aruba</option>
                    <option value="Australia">Australia</option>
                    <option value="Austria">Austria</option>
                    <option value="Azerbaijan">Azerbaijan</option>
                    <option value="Bahamas">Bahamas</option>
                    <option value="Bahrain">Bahrain</option>
                    <option value="Bangladesh" selected="selected">Bangladesh</option>
                    <option value="Barbados">Barbados</option>
                    <option value="Belarus">Belarus</option>
                    <option value="Belgium">Belgium</option>
                    <option value="Belize">Belize</option>
                    <option value="Benin">Benin</option>
                    <option value="Bermuda">Bermuda</option>
                    <option value="Bhutan">Bhutan</option>
                    <option value="Bolivia">Bolivia</option>
                    <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                    <option value="Botswana">Botswana</option>
                    <option value="Brazil">Brazil</option>
                    <option value="British Virgin Islands">British Virgin Islands</option>
                    <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                    <option value="Brunei">Brunei</option>
                    <option value="Bulgaria">Bulgaria</option>
                    <option value="Burkina Faso">Burkina Faso</option>
                    <option value="Burundi">Burundi</option>
                    <option value="Cambodia">Cambodia</option>
                    <option value="Cameroon">Cameroon</option>
                    <option value="Canada">Canada</option>
                    <option value="Cape Verde">Cape Verde</option>
                    <option value="Cayman Islands">Cayman Islands</option>
                    <option value="Central African Republic">Central African Republic</option>
                    <option value="Chad">Chad</option>
                    <option value="Chile">Chile</option>
                    <option value="China">China</option>
                    <option value="Christmas Island">Christmas Island</option>
                    <option value="Colombia">Colombia</option>
                    <option value="Comoros Islands">Comoros Islands</option>
                    <option value="Congo, Democratic Republic of the">Congo, Democratic Republic of the</option>
                    <option value="Congo, Republic of the">Congo, Republic of the</option>
                    <option value="Cook Islands">Cook Islands</option>
                    <option value="Costa Rica">Costa Rica</option>
                    <option value="Cote D'ivoire">Cote D'ivoire</option>
                    <option value="Croatia">Croatia</option>
                    <option value="Cyprus">Cyprus</option>
                    <option value="Czech Republic">Czech Republic</option>
                    <option value="Denmark">Denmark</option>
                    <option value="Djibouti">Djibouti</option>
                    <option value="Dominica">Dominica</option>
                    <option value="Dominican Republic">Dominican Republic</option>
                    <option value="East Timor">East Timor</option>
                    <option value="Ecuador">Ecuador</option>
                    <option value="Egypt">Egypt</option>
                    <option value="El Salvador">El Salvador</option>
                    <option value="Equatorial Guinea">Equatorial Guinea</option>
                    <option value="Eritrea">Eritrea</option>
                    <option value="Estonia">Estonia</option>
                    <option value="Ethiopia">Ethiopia</option>
                    <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                    <option value="Faroe Islands">Faroe Islands</option>
                    <option value="Fiji">Fiji</option>
                    <option value="Finland">Finland</option>
                    <option value="France">France</option>
                    <option value="French Guiana">French Guiana</option>
                    <option value="French Polynesia">French Polynesia</option>
                    <option value="French Southern Territories">French Southern Territories</option>
                    <option value="Gabon">Gabon</option>
                    <option value="Gambia">Gambia</option>
                    <option value="Georgia">Georgia</option>
                    <option value="Germany">Germany</option>
                    <option value="Ghana">Ghana</option>
                    <option value="Gibraltar">Gibraltar</option>
                    <option value="Greece">Greece</option>
                    <option value="Greenland">Greenland</option>
                    <option value="Grenada">Grenada</option>
                    <option value="Guadeloupe">Guadeloupe</option>
                    <option value="Guam">Guam</option>
                    <option value="Guatemala">Guatemala</option>
                    <option value="Guinea">Guinea</option>
                    <option value="Guinea-Bissau">Guinea-Bissau</option>
                    <option value="Guyana">Guyana</option>
                    <option value="Haiti">Haiti</option>
                    <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                    <option value="Honduras">Honduras</option>
                    <option value="Hong Kong">Hong Kong</option>
                    <option value="Hungary">Hungary</option>
                    <option value="Iceland">Iceland</option>
                    <option value="India">India</option>
                    <option value="Indonesia">Indonesia</option>
                    <option value="Iraq">Iraq</option>
                    <option value="Republic of Ireland">Republic of Ireland</option>
                    <option value="Israel">Israel</option>
                    <option value="Italy">Italy</option>
                    <option value="Jamaica">Jamaica</option>
                    <option value="Japan">Japan</option>
                    <option value="Jordan">Jordan</option>
                    <option value="Kazakhstan">Kazakhstan</option>
                    <option value="Kenya">Kenya</option>
                    <option value="Kiribati">Kiribati</option>
                    <option value="South Korea">South Korea</option>
                    <option value="Kosovo">Kosovo</option>
                    <option value="Kuwait">Kuwait</option>
                    <option value="Kyrgyzstan">Kyrgyzstan</option>
                    <option value="Laos">Laos</option>
                    <option value="Latvia">Latvia</option>
                    <option value="Lebanon">Lebanon</option>
                    <option value="Lesotho">Lesotho</option>
                    <option value="Liberia">Liberia</option>
                    <option value="Libya">Libya</option>
                    <option value="Liechtenstein">Liechtenstein</option>
                    <option value="Lithuania">Lithuania</option>
                    <option value="Luxembourg">Luxembourg</option>
                    <option value="Macau">Macau</option>
                    <option value="Macedonia">Macedonia</option>
                    <option value="Madagascar">Madagascar</option>
                    <option value="Malawi">Malawi</option>
                    <option value="Malaysia">Malaysia</option>
                    <option value="Maldives">Maldives</option>
                    <option value="Mali">Mali</option>
                    <option value="Malta">Malta</option>
                    <option value="Marshall Islands">Marshall Islands</option>
                    <option value="Martinique">Martinique</option>
                    <option value="Mauritania">Mauritania</option>
                    <option value="Mauritius">Mauritius</option>
                    <option value="Mayotte">Mayotte</option>
                    <option value="Mexico">Mexico</option>
                    <option value="Micronesia">Micronesia</option>
                    <option value="Moldova, Republic of">Moldova, Republic of</option>
                    <option value="Monaco">Monaco</option>
                    <option value="Mongolia">Mongolia</option>
                    <option value="Montenegro">Montenegro</option>
                    <option value="Montserrat">Montserrat</option>
                    <option value="Morocco">Morocco</option>
                    <option value="Mozambique">Mozambique</option>
                    <option value="Myanmar">Myanmar</option>
                    <option value="Namibia">Namibia</option>
                    <option value="Nauru">Nauru</option>
                    <option value="Nepal">Nepal</option>
                    <option value="Netherlands">Netherlands</option>
                    <option value="Netherlands Antilles">Netherlands Antilles</option>
                    <option value="New Caledonia">New Caledonia</option>
                    <option value="New Zealand">New Zealand</option>
                    <option value="Nicaragua">Nicaragua</option>
                    <option value="Niger">Niger</option>
                    <option value="Nigeria">Nigeria</option>
                    <option value="Niue">Niue</option>
                    <option value="Norfolk Island">Norfolk Island</option>
                    <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                    <option value="Norway">Norway</option>
                    <option value="Oman">Oman</option>
                    <option value="Pakistan">Pakistan</option>
                    <option value="Palau">Palau</option>
                    <option value="Panama">Panama</option>
                    <option value="Papua New Guinea">Papua New Guinea</option>
                    <option value="Paraguay">Paraguay</option>
                    <option value="Peru">Peru</option>
                    <option value="Philippines">Philippines</option>
                    <option value="Pitcairn Island">Pitcairn Island</option>
                    <option value="Poland">Poland</option>
                    <option value="Portugal">Portugal</option>
                    <option value="Puerto Rico">Puerto Rico</option>
                    <option value="Qatar">Qatar</option>
                    <option value="Reunion">Reunion</option>
                    <option value="Romania">Romania</option>
                    <option value="Russian Federation">Russian Federation</option>
                    <option value="Rwanda">Rwanda</option>
                    <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                    <option value="Saint Lucia">Saint Lucia</option>
                    <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
                    <option value="Samoa">Samoa</option>
                    <option value="San Marino">San Marino</option>
                    <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                    <option value="Saudi Arabia">Saudi Arabia</option>
                    <option value="Senegal">Senegal</option>
                    <option value="Serbia">Serbia</option>
                    <option value="Seychelles">Seychelles</option>
                    <option value="Sierra Leone">Sierra Leone</option>
                    <option value="Singapore">Singapore</option>
                    <option value="Slovakia">Slovakia</option>
                    <option value="Slovenia">Slovenia</option>
                    <option value="Solomon Islands">Solomon Islands</option>
                    <option value="Somalia">Somalia</option>
                    <option value="South Africa">South Africa</option>
                    <option value="South Sudan">South Sudan</option>
                    <option value="Spain">Spain</option>
                    <option value="Sri Lanka">Sri Lanka</option>
                    <option value="St. Helena">St. Helena</option>
                    <option value="St. Pierre and Miquelon">St. Pierre and Miquelon</option>
                    <option value="Suriname">Suriname</option>
                    <option value="Swaziland">Swaziland</option>
                    <option value="Sweden">Sweden</option>
                    <option value="Switzerland">Switzerland</option>
                    <option value="Taiwan">Taiwan</option>
                    <option value="Tajikistan">Tajikistan</option>
                    <option value="Tanzania">Tanzania</option>
                    <option value="Thailand">Thailand</option>
                    <option value="Togo">Togo</option>
                    <option value="Tokelau">Tokelau</option>
                    <option value="Tonga">Tonga</option>
                    <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                    <option value="Tunisia">Tunisia</option>
                    <option value="Turkey">Turkey</option>
                    <option value="Turkmenistan">Turkmenistan</option>
                    <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                    <option value="Tuvalu">Tuvalu</option>
                    <option value="Uganda">Uganda</option>
                    <option value="Ukraine">Ukraine</option>
                    <option value="United Arab Emirates">United Arab Emirates</option>
                    <option value="United Kingdom">United Kingdom</option>
                    <option value="United States">United States</option>
                    <option value="Uruguay">Uruguay</option>
                    <option value="Uzbekistan">Uzbekistan</option>
                    <option value="Vanuatu">Vanuatu</option>
                    <option value="Venezuela">Venezuela</option>
                    <option value="Viet Nam">Viet Nam</option>
                    <option value="Virgin Islands (U.S.)">Virgin Islands (U.S.)</option>
                    <option value="Wallis and Futuna Islands">Wallis and Futuna Islands</option>
                    <option value="Western Sahara">Western Sahara</option>
                    <option value="Yemen">Yemen</option>
                    <option value="Zambia">Zambia</option>
                    <option value="Zimbabwe">Zimbabwe</option>
                </select>
              </div>


              <div class="form-group">
              <button class="btn-donate" id="sslczPayBtn"
                      token="if you have any token validation"
                      postdata="your javascript arrays or objects which requires in backend"
                      order="If you already have the transaction generated for current order"
                      endpoint="checkout_ajax.php"> Donate Now
              </button>
                <!-- <span style="font-size: 0.85rem; color:#ec008e;">By donating you are agree with our terms & policy</span> -->
              </div>
            </form>

          </div>
        </div>

        <div class="col-md-4">&nbsp;</div>

      </div>
    </div>

    <div class="row" style="border-top: 1px solid #ccc; margin: 15px 0 0 0;">
      <!-- <span style="text-align: center; width: 100%;"> 
        <a href="https://mssbd.org/privacy-policy/">Privacy policy</a> &nbsp;&nbsp;&nbsp;&nbsp;
        <a href="https://mssbd.org/terms-condition/">Terms of use</a>
      </span> -->
      <span style="text-align: center; width: 100%; font-size: 0.85rem; padding: 10px 0px; color: #313d8d">Copyright: MSS &copy; 2021. Developed and maintained by MSS Media Unit</span>
    </div>


    <script>
      var options = "";
      $("#donate").on("change", function () {
        var value = $(this).val();

        if (value == "EYE CARE PROGRAM") {
          options =
            "<option>---Select where you want to spend---</option>" +
            "<option value='val1'>Provide cost for Eye Camp</option>" +
            "<option value='val2'>Provide cost for Eye Glasses</option>"+
            "<option value='val3'>Provide cost for Cataract Surgery</option>"+
            "<option value='val4'>Provide cost for School Sight Testing Program</option>";
          $("#selectcause").html(options);
        } else if (value == "NON-FORMAL PRIMARY EDUCATION") {
          options =
            "<option>---Select where you want to spend---</option>" +
            '<option value="val1">Provide Education Facility for (3 Children) /Per Month</option>'+
            '<option value="val2">Provide Uniform (2 PCS) for (2 Children)/Per Year</option>'+
            '<option value="val3">Provide School Supplies for (2 Children)/ Per Year</option>'+
            '<option value="val4">Provide Health Care & Medicine Facility for (5 Children)/ Per 3 Month</option>';

          $("#selectcause").html(options);
        } else if (value == "DAY CARE CENTER") {
          options =
            "<option>---Select where you want to spend---</option>" +
            '<option value="val1">Provide Daycare Facility for (1 Kids) /Per Month</option>'+
            '<option value="val2">Provide Cloth for (3 kids)/Per Year</option>'+
            '<option value="val3">Provide Daycare Supplies for (3 kids)/ Per Year</option>'+
            '<option value="val4">Provide Health Care & Medicine Facility for (5 kids)/ Per 3 Month</option>';
          $("#selectcause").html(options);
        } else $("#selectcause").find("option").remove();
      });
    </script>

    <script type="text/javascript">
      var rateInBDT = "1";

      $(document).ready(function(){
        
        $("input[type=radio][name=cur]").change(function(){

          if( $(this).val() == "BDT" ){
            $("#cur_symbol").html("৳");
            calculateAmountInBDT();

        }

        });

        //$("input[type=number][name=amount]").change(function(){
        $("input[type=number][name=amount]").bind('keyup mouseup', function () {
          calculateAmountInBDT();
        });

      });

      function calculateAmountInBDT(){
        var curr = $("input[name='cur']:checked"). val();
        var amount = $("input[type=number][name=amount]").val();

        if( typeof amount == 'undefined' || amount == "" ){
          amount = 0;
        }

        var rate = 1;

        if( curr == "BDT" ){
          rate = rateInBDT;
        }

        var actualVal = parseFloat(rate)*parseFloat(amount);
        $("b#amount_inbdt").html(actualVal.toFixed(2));
      }

    </script>
    <script>
    (function (window, document) {
        var loader = function () {
            var script = document.createElement("script"), tag = document.getElementsByTagName("script")[0];
            script.src = "https://sandbox.sslcommerz.com/embed.min.js?" + Math.random().toString(36).substring(7);
            tag.parentNode.insertBefore(script, tag);
        };

        window.addEventListener ? window.addEventListener("load", loader, false) : window.attachEvent("onload", loader);
    })(window, document);
   </script>
  </body>
</html>