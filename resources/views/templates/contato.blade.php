<!-- Contact -->
<div id="contact" class="content-section-a">
    <div class="container">
        <div class="row">

            <div class="col-md-6 col-md-offset-3 text-center wrap_title">
                <h2>Contato</h2>
                <p class="lead" style="margin-top:0">Alguma duvida ou sujestão? Contate-nos.</p>
            </div>

            @yield('contact_form')

            <hr class="featurette-divider hidden-lg">
            <div class="col-md-5 col-md-push-1 address">
                {{--<address>
                    <h3>Contatos</h3>
                    <p class="lead"><a href="https://www.google.com/maps/preview?ie=UTF-8&q=The+Pentagon&fb=1&gl=us&hq=1400+Defense+Pentagon+Washington,+DC+20301-1400&cid=12647181945379443503&ei=qmYfU4H8LoL2oATa0IHIBg&ved=0CKwBEPwSMAo&safe=on">The Pentagon<br>
                            Washington, DC 20301</a><br>
                        Phone: XXX-XXX-XXXX<br>
                        Fax: XXX-XXX-YYYY</p>
                </address>--}}


            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        $('#InputName').keyup(function () {
            if ($('#InputName').val().length > 0) {
                $('#name').css("background-color", 'green');
                return true;
            }
            $('#name').css("background-color", 'gray');
        });

        $('#InputEmail').keyup(function () {
            if (isEmail($('#InputEmail').val())) {
                $('#mail').css("background-color", 'green');
                return true;
            }
            $('#mail').css("background-color", 'gray');
        });

        $('#InputMessage').keyup(function () {
            if ($('#InputMessage').val().length > 0) {
                $('#message').css("background-color", 'green');
                return true;
            }
            $('#message').css("background-color", 'gray');
        });
    });

    function isEmail(email) {
        var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        return regex.test(email);
    }


</script>