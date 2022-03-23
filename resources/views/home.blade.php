@extends('layouts.app')

@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script src="http://localhost/laravel8/public/js/jquery.validate.js"></script>
<script src="http://localhost/laravel8/public/js/validation.js"></script>
<div class="row justify-content-center">
  <?php 
    if($ticket_id){?>
    <div class="alert alert-success" id="msg">
  <strong>Success!</strong> Ticket Added successfully
</div
<?php }?>   
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Add message') }}</div>

                <div class="card-body">
                    <form method="POST" action="add-message" id="userform">
                        @csrf

                        
                       
                        <div class="row mb-3">
                            <label for="author" class="col-md-4 col-form-label text-md-end">{{ __('Author') }}</label>

                            <div class="col-md-6">
                                <select name="author" id="author">
                                   <option value="">Select</option>  
                                  <option value="client">Client</option>
                                  <option value="manager">Manager</option>
                                  
                                </select>

                                
                            </div>
                        </div>


                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Content') }}</label>

                            <div class="col-md-6">
                                <textarea id="content" name="content" rows="4" cols="50"></textarea>

                                
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

   $('#userform').validate({
   
        rules: {
            
            author: {
                required: true,
            },
            content: {
                required: true,
            }


        },
        messages: {
            
            author: {
                required: 'Please select author.',
            },
            content: {
                required: 'Please enter content.',
            }
        }
    });
    

    </script>
@endsection
 