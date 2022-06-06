
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" media="all" href="/css/styles.css" />
</head>
<body>

    
    
    <div class="row">

        <div class="col-lg-6">
    
            <!--item block -->
           
    
                        <!-- === room info === -->
    
                        <h2 class="title">Contact Us</h2>
                        <p>
                           
                        </p>
    
    <div>               
    @if(Session::has('message_sent'))
    <div class="alert alert-success" role="alert">

    {{Session::get('message_sent')}}
    </div>
    @endif

                        <form method="POST" action="{{route('contact.send')}}" >
                           @csrf
                                
                                        <input type="text" name="name" placeholder="Your Name" class="input-group">
                                
                                <br>
                                
                                        <input type="text" name="email" placeholder="Email Address" class="input-group">
                                   
                                <br>
    
                                
                                        <input type="text" name="phone" placeholder="Phone Number" class="input-group">
                                  
    
                                <br>
                                                             
                                        <input type="text" name="subject" placeholder="Subject" class="input-group">
                                    
                                 <br>
                                
    
                               
                                        <textarea name="message" placeholder="Write Message" class="text-area"  maxlength = "200" ></textarea>
                                    
    
                                <br>
    
                              
                                        <button type="submit" class="contact-button">Send message</button><!-- /.thm-btn contact-one__btn -->
                                    
                            
                        </form>
                    </div>
                        <!-- === room facilities === -->
    
                      
    
                  
        </div> <!--end col-->





</body>
</html>



