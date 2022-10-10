<div class="contact-content">
    <div class="column left">
        <div class="text">
            Get in Touch</div>
        <p>
            If you got any questions, please do not hesitate to send us a message. We reply within 24 hours !</p>
        <div class="icons">
            <div class="row">
                <i class="fas fa-user"></i>
                <div class="info">
                    <div class="head">
                        Name</div>
                    <div class="sub-title">
                        Kamrul hassan</div>
                </div>
            </div>
            <div class="row">
                <i class="fas fa-map-marker-alt"></i>
                <div class="info">
                    <div class="head">
                        Address</div>
                    <div class="sub-title">
                       Thana-road,Dhamrai, Dhaka</div>
                </div>
            </div>
            <div class="row">
                <i class="fas fa-envelope"></i>
                <div class="info">
                    <div class="head">
                        Email</div>
                    <div class="sub-title">
                        Kamrulhassan5343@gmail.com</div>
                </div>
            </div>
        </div>
    </div>
    <div class="column right">
        <div class="text">
            Message me</div>

            <div class="alert alert-success alert-dismissible fade show ShowMsg" role="alert"  style="display: none">
                <strong>Great!</strong> "You'r Message sent Successfully"
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>




        <small> <span id="ERRORshowMsg"></span> </small>

        <form  method="POST" id="addData">
         @csrf
            <div class="fields">

                <div class="field name">
                    <input type="text" name="name" id="name" placeholder="Name" required>

                </div>
                <div class="field email">
                    <input type="email" name="email" id="email" placeholder="Email" required>

                </div>
            </div>
            <div class="field">

                <textarea  id="message"  name="message" placeholder="Writte something..." required cols="40" rows="5"></textarea>


            </div>
           <div class="field textarea">
                <!-- Due to more textarea, I got an error so I changed the tag name of this textarea into changeit. -->
                <changeit cols="30" name="message" rows="10" placeholder="Message.." required></changeit>
            </div>

            <div class="button addData">
                <button type="submit" class="addData">Send message</button>
            </div>
        </form>



    </div>
</div>



<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

@section('script')

<script>

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });


//alert('hello');



$(document).ready(function(){

    $(document).on('click', '.addData',function(e){

        e.preventDefault();

       /// alert('oky..?')

       let  Name =$('#name').val();
       let  Email =$('#email').val();
       let  Message =$('#message').val();

       //console.log(Name+Email+Message);

       $.ajax({

url:"{{ url('/contact') }}",

type:"post",


data: {name:Name, email:Email, message:Message},


success:function(res){

//if(res.status == 'success'){
   // $('#addMoadal').modal('hide');

   console.log(res);


     $('.ShowMsg').show();

    $('#addData')[0].reset();


},   error:function(err){

    let error = err.responseJSON;

    $.each(error.errors, function(index, value){

        $('#ERRORshowMsg').append('<spand class="text-danger">'+ value+ '<spand>'+ '<br>' )

    });


       },

       });

    })

})


</script>
