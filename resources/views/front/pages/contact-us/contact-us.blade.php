<!--Contact Section-->
    <section class="contact-section">
    	<div class="auto-container">
        	<!--Section Title-->
            <div class="sec-title-one">
                <h2>Leave a messsge here</h2>
            </div>
            
            <div class="contact-form default-form">
                <form method="post" action="{{route('category.request')}}" id="contact-form">
                    @csrf
                    <div class="row clearfix">
                    
                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                            <input type="text" name="first_name" value="" placeholder="First Name">
                        </div>

                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                            <input type="text" name="last_name" value="" placeholder="Last Name">
                        </div>
                        
                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                            <input type="email" name="email" value="" placeholder="Email *">
                        </div>
                        
                         <div class="form-group col-md-6 col-sm-6 col-xs-12">
                            <input type="text" name="subject" value="" placeholder="Subject *">
                        </div>
                        
                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                            <input type="text" name="country_code" value="" placeholder="Country code">
                        </div>
                        
                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                            <input type="text" name="phone" value="" placeholder="phone">
                        </div>
                        
    
                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
                            <textarea name="message" placeholder="Message"></textarea>
                        </div>
                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
                            <div class="text-center"><button type="submit" class="theme-btn btn-style-one">Submit Now </button></div>
                        </div>
                    </div>
                </form>
            </div> 
       	</div>
   	</section>