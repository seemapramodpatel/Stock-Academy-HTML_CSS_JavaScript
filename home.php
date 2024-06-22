
  <!-- Banner section -->
  <section id="banner">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <p class="promo-title">Best Stock Educational Page</p>
          <p>Biggners lets start the journey of acquiring knowledge of stock and take investment decisions.</p>
          <a href="basic.html" class="lets-start-btn">Let's Start</a><br/><br/>
          <a href="case.html" class="read-more">Read Case Studies</a>
        </div>
        <div class="col-md-6 text-center">
          <img src="images/image1.png" class="img-fluid">
        </div>
      </div>
    </div>
  </section>
  



  <!-- Feed back section -->
  <section>
    <div class="form-box"> 
      <div class="textup"> 
          <!-- <i class="fa fa-solid fa-clock"></i>  -->
          Give feedback to our services
      </div> 
      <form  method="post" id="feedbackForm">
          <label for="uname"> 
              <i class="fa fa-solid fa-user"></i> 
              Name 
          </label> 
          <input type="text" id="uname" 
                 name="uname" required> 
  
          <label for="email"> 
              <i class="fa fa-solid fa-envelope"></i> 
              Email Address 
          </label> 
          <input type="email" id="email" 
                 name="email" required> 
  
          <label for="phone"> 
              <i class="fa-solid fa-phone"></i> 
              Phone No 
          </label> 
          <input type="tel" id="phone" 
                 name="phone" required> 
  
          <label> 
              <i class="fa-solid fa-face-smile"></i> 
              Do you satisfy with our service? 
          </label> 
          <div class="radio-group"> 
              <input type="radio" id="yes" 
                     name="satisfy" value="yes" checked> 
              <label for="yes">Yes</label> 
  
              <input type="radio" id="no" 
                     name="satisfy" value="no"> 
              <label for="no">No</label> 
          </div> 
  
          <label for="msg"> 
              <i class="fa-solid fa-comments" 
                 style="margin-right: 3px;"></i> 
              Write your Suggestions: 
          </label> 
          <textarea id="msg" name="msg" 
                    rows="4" cols="10" required> 
          </textarea> 
          <button type="submit" name="submit"  onclick="submitForm()"> 
              Submit 
          </button> 
      </form> 
  </div> 
  
  </section>

<?php

include 'connection.php';

?>





