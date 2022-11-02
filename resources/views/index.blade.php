<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SOLAR SURVEY</title>
    <link rel="stylesheet" href="{{ asset("css/app.css") }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js" type="text/javascript">

    </script>


</head>
<body>
    <div class="main_wrapper">


        <div class="header_section">
            <div class="main_header_wrapper">
                <img src="{{ URL('./images/company_logo.png') }}" alt="Image Not Found">
            </div>
        </div>

        <div class="hero_image_wrapper">
            <img src="{{ URL('./images/solar.png') }}" alt="Image Not Found">
        </div>
        <div class="arrow_image">
            <img src="{{ URL('./images/arrow.gif') }}" alt="Image Not Found">
        </div>


        <div class="container-fluid ">
            {{-- <div class="progress">
                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
            </div> --}}
            <div class="row justify-content-center">
                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 text-center d-flex justify-content-center align-items-center ">

                    <div class="card mb-3">

                        <form id="msform">
                            <fieldset>
                                <div class="form-card">
                                    <div class="row">
                                        <div class="steps_settings col-md-12 pt-2 pb-2 ">
                                            <h3 class="steps ">
                                                <span>
                                                    Step 1 of 7
                                                </span></h3>
                                        </div>
                                    </div>
                                    <h3 class="step_heading">
                                        What is the main reason you are interested in solar?</h3>
                                    <div class="row card_setting ">
                                        <div class="card custom_card_inner">
                                            <img class="step_one_image" data-step_one="" name="Lower My Electric Bill" src="{{ URL('./images/lower.png') }}" alt="Image Not Found" />
                                        </div>
                                        <div class="  card custom_card_inner ">
                                            <img class="step_one_image" data-step_one="" name="Power Outages" src="{{ URL('./images/poutages.png') }}" alt="Image Not Found" />
                                        </div>
                                        <div class="card custom_card_inner ">
                                            <img class="step_one_image" name="Go Green" data-step_one="" src="{{ URL('./images/gogreen.png') }}" alt="Image Not Found" />
                                        </div>
                                        <div class="card custom_card_inner ">
                                            <img class="step_one_image" name="Increase Home Value" data-step_one="" src="{{ URL('./images/homevalue.png') }}" alt="Image Not Found" />
                                        </div>
                                        <div class="card  custom_card_inner ">
                                            <img class="step_one_image" name="Adding Panels To My System" data-step_one="" src="{{ URL('./images/addingpanels.png') }}" alt="Image Not Found" />
                                        </div>

                                    </div>
                                </div>
                                <input type="button" name="next" class="next action-button" value="Next" />
                            </fieldset>
                            <fieldset>
                                <div class="form-card">
                                    <div class="row">
                                        <div class="steps_settings col-md-12 pt-2 pb-2 ">
                                            <h2 class="steps " style="text-transform:uppercase;">Step 2 of 7</h2>
                                        </div>

                                    </div>
                                    <h3 class="step_heading">
                                        How Much is Your Average Power Bill?</h3>
                                    <div class="row card_setting ">

                                        <div class="card custom_card_inner">
                                            <img class="step_two" name="0-100$ " src="{{ URL('./images/0.png') }}" alt="Image Not Found" />
                                        </div>
                                        <div class="  card custom_card_inner ">
                                            <img class="step_two" name="101-125$" src="{{ URL('./images/1.png') }}" alt="Image Not Found" />
                                        </div>
                                        <div class="card custom_card_inner ">
                                            <img class="step_two" name="125-150$" src="{{ URL('./images/2.png') }}" alt="Image Not Found" />
                                        </div>
                                        <div class="card custom_card_inner ">
                                            <img class="step_two" name="150-250$" src="{{ URL('./images/3.png') }}" alt="Image Not Found" />
                                        </div>
                                        <div class="card  custom_card_inner ">
                                            <img class="step_two" name="$250+" src="{{ URL('./images/4.png') }}" alt="Image Not Found" />
                                        </div>

                                    </div>

                                </div> <input type="button" name="next" class="next action-button" value="Next" /> <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                            </fieldset>

                            <fieldset>
                                <div class="form-card">
                                    <div class="row">
                                        <div class="steps_settings col-md-12 pt-2 pb-2 ">
                                            <h2 class="steps " style="text-transform:uppercase;">Step 3 of 7</h2>
                                        </div>
                                    </div>
                                    <h3 class="step_heading">
                                        Do you own your home?</h3>

                                    <div class="row card_setting ">

                                        <div class="card custom_card_inner ">
                                            <img class="step_three" name="I Own My Home" src="{{ URL('./images/own.png') }}" alt="Image Not Found" />
                                        </div>
                                        <div class="card  custom_card_inner ">
                                            <img class="step_three" name="I Rent My House" src="{{ URL('./images/rent.png') }}" alt="Image Not Found" />
                                        </div>

                                    </div>

                                </div> <input type="button" name="next" class="next action-button" value="Next" /> <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                            </fieldset>

                            <fieldset>
                                <div class="form-card">
                                    <div class="row">
                                        <div class="steps_settings col-md-12 pt-2 pb-2 ">
                                            <h2 class="steps " style="text-transform:uppercase;">Step 4 of 7</h2>
                                        </div>
                                    </div>
                                    <div class="row card_setting">
                                        <h3 class="step_heading">
                                            What is your zip code? </h3>
                                        <span style="font-weight: bold;padding:10px;">
                                            We will check to see if the program is being offered near you.</span>
                                    </div>


                                    <div class="row card_setting ">
                                        <span class="zipcode_error" style="text-align: center"></span>
                                        <input type="number" required id="zipcode" name="zipcode" placeholder="Enter your zip code" />

                                        <br>
                                        <span style="text-align: center;color:gray">
                                            Zip code : 27613</span>
                                    </div>


                                </div> <input type="button" name="next" class="next action-button zipcodeChecker" value="Next" /> <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                            </fieldset>

                            <fieldset>
                                <div class="form-card">
                                    <div class="row">
                                        <div class="steps_settings col-md-12 pt-2 pb-2 ">
                                            <h2 class="steps " style="text-transform:uppercase;">Step 5 of 7</h2>
                                        </div>
                                    </div>
                                    <div class="row card_setting">
                                        <h3>
                                            Congrat's , you qualifies. Let's be friends!</h3>
                                    </div>
                                    <div style="display: flex; justify-content:center">
                                        <img src="{{ URL('./images/hand.png') }}" width="100" height="100" alt="Image Not Found" />
                                    </div>
                                    <div class="row card_setting">
                                        <h3>
                                            What's your name?</h3>
                                    </div>
                                    <div class="row card_setting ">

                                        <input type="email" name="email" placeholder="First Name " />

                                    </div>
                                    <div class="row card_setting ">

                                        <input type="email" name="email" placeholder="Last Name " />

                                    </div>


                                </div> <input type="button" name="next" class="next action-button" value="Next" /> <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                            </fieldset>

                            <fieldset>
                                <div class="form-card">
                                    <div class="row">
                                        <div class="steps_settings col-md-12 pt-2 pb-2 ">
                                            <h2 class="steps " style="text-transform:uppercase;">Step 6 of 7</h2>
                                        </div>
                                    </div>
                                    <div style="display: flex; justify-content:center">
                                        <img src="{{ URL('./images/thumb.png') }}" width="100" height="100" alt="Image Not Found" />
                                    </div>
                                    <div class="row card_setting">
                                        <h3>
                                            Nice to meet you, sad! What's your email address?</h3>
                                        <h5 style="padding: 10px; color:gray">

                                            Don’t worry, we respect your privacy and will not share your email with unaffiliated third parties 🔒</h5>
                                    </div>


                                    <div class="row card_setting ">

                                        <input type="email" name="email" placeholder="Email " />

                                    </div>



                                </div>
                                <div style="display: flex; justify-content:center">
                                    <img src="{{ URL('./images/review.png') }}" width="200" height="200" alt="Image Not Found" />
                                </div>
                                <input type="button" name="next" class="next action-button" value="Next" /> <input type="button" name="previous" class="previous action-button-previous" value="Previous" />


                            </fieldset>

                            <fieldset>
                                <div class="form-card">
                                    <div class="row">
                                        <div class="steps_settings col-md-12 pt-2 pb-2 ">
                                            <h2 class="steps " style="text-transform:uppercase;">Step 7 of 7</h2>
                                        </div>
                                    </div>
                                    <div style="display: flex; justify-content:center">
                                        <img src="{{ URL('./images/check.png') }}" width="100" height="100" alt="Image Not Found" />
                                    </div>
                                    <div class="row card_setting">
                                        <h3>
                                            Congrats Saad, You are so close!
                                            What's the best number to share your results to?</h3>
                                    </div>
                                    <div class="row card_setting">
                                        <h4>
                                            Don't worry, we respect your privacy and will never send you an unwanted call or text 😊</h4>
                                    </div>


                                    <div class="row card_setting ">

                                        <input type="number" name="phone" placeholder="Phone " />

                                    </div>

                                    <div class="row card_setting">
                                        <p>
                                            👍 By clicking "NEXT" and submitting this form, (i) I agree GC Solar/L Ventures, Inc can use
                                            automated technology to call or text my phone number
                                            (provided above) or email me for marketing purposes and I may revoke this consent at
                                            any time, and (ii) I agree to the <a> TERMS & CONDITIONS/PRIVACY POLICY </a>, I understand
                                            that my authorization to receive calls, texts and emails via automated technology
                                            is not a condition of purchasing of any goods or services. Text message frequency
                                            varies. Msg & data rates may apply. Reply STOP to cancel. Reply HELP for assistance</p>
                                    </div>

                                </div>
                                <div style="display: flex; justify-content:center">
                                    <img src="{{ URL('./images/review.png') }}" width="200" height="200" alt="Image Not Found" />
                                </div>
                                <input type="button" name="next" class="next action-button" value="Next" /> <input type="button" name="previous" class="previous action-button-previous" value="Previous" />


                            </fieldset>

                            <fieldset>
                                <div class="form-card">
                                    <div class="row">
                                        <div class="row card_setting">
                                            <h3>
                                                There is a special offer available for homeowners in New Canton, VA!</h3>
                                        </div>
                                    </div>
                                    <div class="row card_setting">
                                        <h4>
                                            Finish your quiz to see if you qualify for solar panels + battery for NO COST at install².</h4>
                                    </div>
                                    <div class="row card_setting">
                                        <h3>
                                            Is your household income above or below $40,000?</h3>
                                    </div>
                                    <div class="row card_setting ">

                                        <div class="card custom_card_inner ">
                                            <img src="{{ URL('./images/i_up.png') }}" alt="Image Not Found" />
                                        </div>
                                        <div class="card  custom_card_inner ">
                                            <img src="{{ URL('./images/i_below.png') }}" alt="Image Not Found" />
                                        </div>

                                    </div>
                                </div> <input type="button" name="next" class="next action-button" value="Submit" /> <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                            </fieldset>

                            <fieldset>
                                <div class="form-card">
                                    <div class="row">
                                        <div class="col-7">
                                            <h2 class="fs-title">Finish:</h2>
                                        </div>
                                        <div class="col-5">
                                            <h2 class="steps">Step 4 - 4</h2>
                                        </div>
                                    </div> <br><br>
                                    <h2 class="purple-text text-center"><strong>SUCCESS !</strong></h2> <br>
                                    <div class="row justify-content-center">
                                        <div class="col-3"> <img src="https://i.imgur.com/GwStPmg.png" class="fit-image"> </div>
                                    </div> <br><br>
                                    <div class="row justify-content-center">
                                        <div class="col-7 text-center">
                                            <h5 class="purple-text text-center">You Have Successfully Signed Up</h5>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer_wrapper">
            <h2 style="text-align: center">
                Complete The Above Quiz To Qualify For:
            </h2>
            <div class="footer_images">
                <div class="footer_image_left">
                    <img src="{{ URL("./images/footer_left.png") }}" />
                </div>
                <div class="footer_image_right">
                    <img src="{{ URL("./images/footer_right.png") }}" />
                </div>

            </div>

            <div class="footer_content">



                <p style="">
                    ¹ Available with approved credit. Must be 18+ / homeowner. Contact us for additional details. | ² To qualify, you must have federal income tax liability at least equal to the value of the tax credit. We make no guarantees regarding eligibility for any tax credits.
                    We do not provide tax advice. Contact your personal tax advisor for eligibility requirements.

                </p>
                <div class="copyright_settings">
                    <span style="copyright">
                        © 2022 Pro Custom Solar LLC D|B|A Momentum Solar All Rights Reserved.
                    </span>

                </div>

            </div>
        </div>

    </div>

</body>
<script>
    $(document).ready(function() {

        var data = [];


        var current_fs, next_fs, previous_fs; //fieldsets
        var opacity;

        var current = 1;
        var steps = $("fieldset").length;

        /* FIRST STEP STORING VALUE */

        $('.step_one_image').click(function() {

            $('.step_one_image').css({
                "backgroundColor": "transparent"
            });

            $(this).css({
                "backgroundColor": "#32CD32"
            });
            data.push($(this).attr('name'));

        });


        /* Average Bill Value  */

        $('.step_two').click(function() {
            $('.step_two').css({
                "backgroundColor": "transparent"
            });
            $(this).css({
                "backgroundColor": "#32CD32"
            });

            data.push($(this).attr('name'));

        });


        /*  Step 3  */
        $('.step_three').click(function() {
            $('.step_three').css({
                "backgroundColor": "transparent"
            });
            $(this).css({
                "backgroundColor": "#32CD32"
            });

            data.push($(this).attr('name'));

        });

        /* Zip Code  */
        $(".zipcodeChecker").on('click', function() {

            let zip_code = $("#zipcode").val();
            if (zip_code == "") {
                $("#zipcode").css({
                    "border": "1px solid red"
                });
                $(".zipcode_error").css({
                    "color": "red"
                });
                $(".zipcode_error").html("Required *");
                return false;
            } else if (zip_code < 5) {
                $(".zipcode_error").css({
                    "color": "red"
                });
                $(".zipcode_error").html("Enter 5 digit zip code  *");
            } else if (zip_code > 5) {
                $(".zipcode_error").css({
                    "color": "red"
                });
                $(".zipcode_error").html("Enter 5 digit zip code  *");

            } else {
                data.push(zip_code);
            }

        });


        setProgressBar(current);

        $(".next").click(function() {
            console.log(data)
            current_fs = $(this).parent();
            next_fs = $(this).parent().next();

            //Add Class Active
            $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

            //show the next fieldset
            next_fs.show();
            //hide the current fieldset with style
            current_fs.animate({
                opacity: 0
            }, {
                step: function(now) {
                    // for making fielset appear animation
                    opacity = 1 - now;

                    current_fs.css({
                        'display': 'none'
                        , 'position': 'relative'
                    });
                    next_fs.css({
                        'opacity': opacity
                    });
                }
                , duration: 500
            });
            setProgressBar(++current);
        });

        $(".previous").click(function() {
            data.pop();
            current_fs = $(this).parent();
            previous_fs = $(this).parent().prev();

            //Remove class active
            $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

            //show the previous fieldset
            previous_fs.show();

            //hide the current fieldset with style
            current_fs.animate({
                opacity: 0
            }, {
                step: function(now) {
                    // for making fielset appear animation
                    opacity = 1 - now;

                    current_fs.css({
                        'display': 'none'
                        , 'position': 'relative'
                    });
                    previous_fs.css({
                        'opacity': opacity
                    });
                }
                , duration: 500
            });
            setProgressBar(--current);
        });

        function setProgressBar(curStep) {
            var percent = parseFloat(100 / steps) * curStep;
            percent = percent.toFixed();
            $(".progress-bar")
                .css("width", percent + "%")
        }

        $(".submit").click(function() {
            return false;
        })

    });

</script>




</html>
