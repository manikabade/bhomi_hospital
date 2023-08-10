<!DOCTYPE html>
<html lang="en">
@include('frontend.layout.head')
<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

<!-- HEADER -->
@include('frontend.layout.header')


<!-- MENU -->
@include('frontend.layout.nav')


<!-- Medical Report detail -->
<!-- HOME -->
<section id="home" class="slider" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row">
            <div class="item item-second">
                <div class="caption">
                    <h1>Get Medical Report</h1>
                    <div class="report-info">
                        <div class="wow fadeInUp" data-wow-delay="0.8s">
                            <input type="text" id="name" placeholder="Your FullName">
                            <input type="text"  id="token_no" placeholder="Token No.">
                        </div>
                        <div>
                            <button id="submit-update" type="submit">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<table class="table">
    <thead>
    <tr>
        <th>ID</th>
        <th>Patient Name</th>
        <th>Precaution</th>
        <th>General Lab Test</th>
        <th>Report</th>
        <th>Remarks</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td scope="row">1</td>
        <td>Rabina Shrestha</td>
        <td>Take bed rest</td>
        <td>Normal</td>
        <td>Normal</td>
        <td>Normal</td>
    </tr>
    <tr>
        <td scope="row"></td>
        <td></td>
        <td></td>
    </tr>
    </tbody>
</table>

<div id="table"></div>
<!-- FOOTER -->
@include('frontend.layout.footer')

{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>--}}

<!-- SCRIPTS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.slim.min.js" integrity="sha512-5NqgLBAYtvRsyAzAvEBWhaW+NoB+vARl6QiA02AFMhCWvPpi7RWResDcTGYvQtzsHVCfiUhwvsijP+3ixUk1xw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="{{asset('front/js/bootstrap.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.slim.min.js" integrity="sha512-5NqgLBAYtvRsyAzAvEBWhaW+NoB+vARl6QiA02AFMhCWvPpi7RWResDcTGYvQtzsHVCfiUhwvsijP+3ixUk1xw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $('#submit-update').click(function (){
        console.log('ok');
        var name = $('#name').val()
        var token_no = $('#token_no').val();

        $.ajax({
            method:'POST',
            url:'{{route('filter.medical')}}',
            data:{
                '_token':'{{csrf_token()}}',
                'name':name,
                'token':'token_no'

            },



            success:function(response) {

                 var data = $.parseJSON(response)

                $('#table').html(data.html);
            }
        });
    })
</script>
</body>
</html>
