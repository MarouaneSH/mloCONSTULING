 <?php
             $english = false;
            if(Request::is("en*"))
            {
              $english = true;
            }
 ?>


<div class="popup-contact" style="min-height: 60vh;">
        <form action="contact" method="GET" id="contactForm" >
            <div class="contact-message alert alert-danger" style="display:none"></div>
            <div class="form-group" >
               <?php if($english==true): ?>
                <label for="">Company name   :</label><br>
               <?php else: ?>
                <label for="">Raison sociale    :</label><br>
               <?php endif; ?>  
                <input type="text" name="social" class="form-control">
            </div>
            <div class="form-group">
                <?php if($english==true): ?>
                 <label for="">Your name :</label><br>
                <?php else: ?>
                 <label for="">Votre nom :</label><br>
                <?php endif; ?>
                <input type="text" name="nom" class="form-control">
            </div>
             <div class="form-group">
                <?php if($english==true): ?>
                   <label for="">Email address :</label>
                <?php else: ?>
                  <label for="">Email  :</label>
                <?php endif; ?>
                <input type="text" name="email" class="form-control">
            </div>
             <div class="form-group">
                <label for="">Message :</label>
                <textarea  name="message" class="form-control" rows="5"></textarea>
            </div>
            <center>
            <button type="submit" style="background:rgb(157, 0, 84);color:white;padding:8px 20px;border:none;border-radius:8px">
             <?php if($english==true): ?>
              Send
             <?php else: ?>
                Envoyer
             <?php endif; ?> 
            </button>
            </center>
        </form>
        <i class="fa fa-times" aria-hidden="true"></i>
        <div class="msg-success" style="text-align:center">
            <h3>Votre Message a été envoyé avec succès</h3>
        </div>
        <div class="loading-msg">

							<!--Loading SVG-->
							<svg width='120px' height='120px' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid" class="uil-ring-alt"><rect x="0" y="0" width="100" height="100" fill="none" class="bk"></rect><circle cx="50" cy="50" r="40" stroke="#ececfc" fill="none" stroke-width="10" stroke-linecap="round"></circle><circle cx="50" cy="50" r="40" stroke="#1cb9c8" fill="none" stroke-width="6" stroke-linecap="round"><animate attributeName="stroke-dashoffset" dur="2s" repeatCount="indefinite" from="0" to="502"></animate><animate attributeName="stroke-dasharray" dur="2s" repeatCount="indefinite" values="150.6 100.4;1 250;150.6 100.4"></animate></circle></svg>

	    </div>


</div>