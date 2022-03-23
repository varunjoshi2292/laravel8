@extends('layouts.app')

@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="http://localhost/laravel8/public/js/jquery.validate.js"></script>
<script src="http://localhost/laravel8/public/js/validation.js"></script>
<div class="row justify-content-center">

    <?php 
    if($msg_id){?>
    <div class="alert alert-success" id="msg">
  <strong>Success!</strong> Message Added successfully now please add the ticket
</div
<?php }?>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Add ticket') }}</div>

                <div class="card-body">
                    <form method="POST" action="add-ticket" id="ticketform">
                        @csrf

                        
                       
                        <div class="row mb-3">
                            <label for="author" class="col-md-4 col-form-label text-md-end">{{ __('Uid') }}</label>

                            <div class="col-md-6">
                                <input type="text" id="uid" name="uid" readonly value="<?php echo $msg_id;?>">

                            </div>
                        </div>


                        <div class="row mb-3">
                            <label for="author" class="col-md-4 col-form-label text-md-end">{{ __('Subject') }}</label>

                            <div class="col-md-6">
                                <input type="text" id="subject" name="subject">

                               
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="author" class="col-md-4 col-form-label text-md-end">{{ __('Username') }}</label>

                            <div class="col-md-6">
                                <input type="text" id="username" name="username">

                               
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="author" class="col-md-4 col-form-label text-md-end">{{ __('Email') }}</label>

                            <div class="col-md-6">
                                <input type="text" id="email" name="email">

                                
                            </div>
                        </div>


                        

                        
                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Submit') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
$(document).ready( function(){
    
    $("#msg").animate({ 'height':'toggle','opacity':'toggle'});
    window.setTimeout( function(){
        $("#msg").slideUp();
    }, 2500);
});
</script>  
<script>

   $('#ticketform').validate({
   
        rules: {
            
            subject: {
                required: true,
            },
            username: {
                required: true,
            },
            email: {
                required: true,
                email:true
            }


        },
        messages: {
            
            subject: {
                required: 'Please enter subject.',
            },
            username: {
                required: 'Please enter username.',
            },
            email: {
                required: 'Please enter email.',
                email:'Please enter a valid email.'
            }
        }
    });
    

    </script>  
@endsection
