<div class="modal fade" id="estimate-modal" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="estimate-modal-label">Project Proposal</h4>
      </div>

      <div class="modal-body">
        
        <div id="estimate-form" >
          <form class="estimate" action="/estimate-submit" method="post">
            <div class="form-group">
              <label for="estimate-name">Your Name:</label>
              <input type="text" class="form-control input-large" name="estimate-name" placeholder="Your name (required)" required>
            </div>
            <div class="form-group">
              <label for="estimate-email">Your E-mail:</label>
              <input type="email" class="form-control" name="estimate-email" placeholder="user@domain.com (required)" required>
            </div>
            <div class="form-group">
              <label for="estimate-phone">Your Phone:</label>
              <input type="text" class="form-control input-large" name="estimate-phone" placeholder="Your phone number (optional)">
            </div>
            <div class="form-group">
              <label for="estimate-budget">Anticipated Budget:</label>
              <select class="form-control" name="estimate-budget">
                <option selected disabled>Please select one...(required)</option>
                <option>Less than $500</option>
                <option>$500 to $1,000</option>
                <option>$1,000 to $2,500</option>
                <option>$2,500 to $5,000</option>
                <option>Over $5,000</option>
                <option>I'd rather not say...</option>
              </select>
            </div> 
            <div class="form-group">
              <label for="estimate-summary">Project Summary:</label>
              <textarea rows="5" class="form-control" name="estimate-summary" placeholder="In short, what is this project about? (required)" required></textarea>
            </div>
            <div class="form-group">
              <label for="estimate-deadline">Project Deadline:</label>
              <input id="estimate-deadline" type="text" class="form-control" name="estimate-deadline" placeholder="Please select a date...(required)" required>
            </div>        
            <div class="form-group" id="antispam">
              <label for="url">Your URL to Advertise:</label>
              <input type="text" class="form-control" name="url" placeholder="Leave this blank to prove your humanity">
            </div>
            <input type="hidden" name="save" value="estimate">
            <button id="submit" type="submit" class="btn btn-success">Send</button>
          </form>
        </div><!--#estimate-form-->

      </div><!--.modal-body-->

    </div><!--.modal-content-->
  </div><!--.modal-dialog-->
</div><!--.modal-->

<script>
  $(function() {
    $("#estimate-deadline").datepicker({
        dateFormat: "DD, d MM, yy"
    });
  });
</script>