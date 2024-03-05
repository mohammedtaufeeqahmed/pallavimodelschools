<?php include "header.php";?>
<!-- Start Page Banner -->
<div class="page-banner-area">
  <div class="d-table">
    <div class="d-table-cell">
      <div class="container">
        <div class="page-banner-content">
          <h2>Contact</h2>
          <ul>
            <li> <a href="index.php">Home</a> </li>
            <li>Contact</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End Page Banner -->
<!-- Start Contact Area -->
<section class="contact-area ptb-100">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-7 col-md-12">
        <div class="quote-item">
          <div class="content"> <span>Enquiry</span>
            <h3>Ready to Get Started?</h3>
          </div>
          <form method="post" id="frm_health" class="main-from">
		   <input type="hidden" name="form_action" value="Send Request" />
        <label for='FirstName'>Name *</label>
        <br/>
        <input type='text' name='customer_name' maxlength='100' value=''  placeholder="Your Name" autocomplete='off' required='required' />
        <br/>
        <label for='EmailAddress'>Email *</label>
        <br/>
        <input type='text'  name='customer_email' maxlength='100' placeholder="Email Address" value='' autocomplete='off' required='required' />
        <br/>
        <label for='Phone'>Phone Number *</label>
        <br/>
        <input type='text'  name='customer_phone' maxlength='10' value='' placeholder="Mobile No" autocomplete='off' required='required' />
        <br/>
        <label for='mx_Location'>Location</label>
        <br/>
        <!-- <select name='customer_category'  >
          <option value='' selected="true"></option>
          <option value='Hubsiguda' >Hubsiguda</option>
          <option value='Tarnaka' >Tarnaka</option>
          <option value='DD Colony' >DD Colony</option>
          <option value='AS Rao Nagar' >AS Rao Nagar</option>
          <option value='Alwal' >Alwal</option>
          <option value='Hafeezpet' >Hafeezpet</option>
          <option value='Gajularamaram' >Gajularamaram</option>
          <option value='Hanmakonda' >Hanmakonda</option>
        </select> -->
        <textarea  name='customer_msg' autocomplete='off' placeholder="Your Location"  ></textarea>
        <br/>
        <label for='mx_Query'>Query</label>
        <br/>
        <textarea  name='customer_msg' autocomplete='off' placeholder="Type Your Requirements"  ></textarea>
        <br/>
        <button  type="submit">Submit <span class="loader" style="padding-left:10px;"></span></button>
        <br />
      
      </form>
        </div>
      </div>
      <div class="col-lg-5 col-md-12">
        <div class="contact-information">
          <h3>Contact Us</h3>
          <ul class="contact-list">
            <li><i class='bx bx-map'></i> Location: <span>Head Office:<br>K-Innovative Hub Pvt. Ltd behind BSNL Telephone exchange, Nacharam, Hyderabad, Telangana 500076</span></li>
            <li><i class='bx bx-phone-call'></i> Call Us: <a href="tel:+91 9281067892">+91 9281067892</a></li>
            <!-- <li><i class='bx bx-phone-call'></i> Head Office: <a href="tel:+918374910077">+91 837491 0077</a></li> -->
            <li><i class='bx bx-envelope'></i> Email Us: <a href="mailto:franchise@pallavimodelschools.org">franchise@pallavimodelschools.org</a></li>
          </ul>
          <h3>Opening Hours:</h3>
          <ul class="opening-hours">
            <li><span>Monday - Saturday:</span> 9AM to 6PM</li>
            <li><span>Sunday:</span> Holiday</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Contact Area -->
<!-- Map -->
<div id="map">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3806.40813816602!2d78.55087941077825!3d17.440168901213347!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb9b91c5e62ea9%3A0x7c4b1e92b2b45900!2sK-Innovative%20Hub%20Pvt.Ltd!5e0!3m2!1sen!2sin!4v1708961704165!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
<!-- End Map -->
<!-- Start Footer Area -->
<?php include "footer.php";?>

<script type="text/javascript">

$(document).ready(function () {  

  $("#frm_health").submit(function(){

    console.log('Form');



    //validation

    $("#frm_health .error").remove();

    var qdiv,qresp,qrcount=0,qrdiv,qerror=0;

    var q_error = 0;

    $('#frm_health .question').each(function() {

      qdiv = $(this).parents('.marginbtm');

      qrdiv = qdiv.find('.rowbg');

      qresp = qdiv.find('.response');

      qrcount=qresp.length;

      console.log(qrcount);

      qerror=0;

      if(qrcount==1) {

        if( qresp.val()=='' ||  qresp.val()==null){

          qerror=1;

        }

      } else {

        qrcount = qdiv.find('.response:checked').length;

        if( qrcount==0){

          qerror=1;

        }

      }



      if(qerror) {

        qrdiv.prepend('<div class="error">Response Required</div>');

        q_error = 1;

      }



    });



    if(q_error) return false;



    //submit form

    $.ajax({

        type: "POST",

        url: "ajax1.php",

        data:$("#frm_health").serialize(),

        beforeSend: function(){

          $(".loader").html('<img src="loader.gif" />');

        },

        success: function(resp){

          $(".loader").html('');

          if(resp=='') return;

          resp2 = JSON.parse(resp);

          $(".thank-you").html(resp2.message);

          alert(resp2.message);

          if(resp2.status==1) {

            location.reload(); 

          }



        }

      });





    return false;

  });

});    

</script>
