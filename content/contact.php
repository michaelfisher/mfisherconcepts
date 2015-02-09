<div class="modal fade" id="contact-modal" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="contact-modal-label">Get In Touch!</h4>
      </div>

      <div class="modal-body">
        
        <div id="contact-form" >
          <form class="contact" action="contact-submit" method="post">
            <div class="form-group">
              <label for="contact-name">Your Name:</label>
              <input type="text" class="form-control input-large" name="contact-name" placeholder="Enter your full name" required>
            </div>
            <div class="form-group">
              <label for="contact-email">Your E-mail:</label>
              <input type="email" class="form-control" name="contact-email" placeholder="Enter your e-mail address" required>
            </div>
            <div class="form-group">
              <label for="contact-phone">Your Phone:</label>
              <input type="tel" class="form-control" name="contact-phone" placeholder="Enter your phone number">
            </div>
            <div class="form-group">
              <label for="contact-message">Your Message:</label>
              <textarea rows="5" class="form-control" name="contact-message" placeholder="Enter your message" required></textarea>
            </div>
            <input type="hidden" name="save" value="contact">
            <button id="submit" type="submit" class="btn btn-success">Send</button>
          </form>
        </div><!--#contact-form-->

      </div><!--.modal-body-->

    </div><!--.modal-content-->
  </div><!--.modal-dialog-->
</div><!--.modal-->
    