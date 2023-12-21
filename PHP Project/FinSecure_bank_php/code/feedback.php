<?php include("header.php");

?>
<div id="feedback-form-wrapper">
  <div id="floating-icon">
    <button type="button" class="btn btn-primary btn-sm rounded-0" data-toggle="modal" data-target="#exampleModal">
      Feedback
    </button>

  </div>
  <div id="feedback-form-modal">
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Feedback Form</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="feedback-responce.php" method="POST" name="f1" onsubmit = "return validation()">
              <div class="form-group">
                <label for="input-one">Enter Your Name: </label>
                <input type="text" class="form-control" id="input-one" placeholder="" name="unm">
              </div>
              <div class="form-group">
                <label for="exampleFormControlTextarea1">How likely you would like to recommand us to your friends?</label>
                <div class="rating-input-wrapper d-flex justify-content-between mt-2">
                  <label><input type="radio" name="rating" value="1"/><span class="border rounded px-3 py-2">1</span></label>
                  <label><input type="radio" name="rating" value="2"/><span class="border rounded px-3 py-2">2</span></label>
                  <label><input type="radio" name="rating" value="3"/><span class="border rounded px-3 py-2">3</span></label>
                  <label><input type="radio" name="rating" value="4"/><span class="border rounded px-3 py-2">4</span></label>
                  <label><input type="radio" name="rating" value="5"/><span class="border rounded px-3 py-2">5</span></label>
                  <label><input type="radio" name="rating" value="6"/><span class="border rounded px-3 py-2">6</span></label>
                  <label><input type="radio" name="rating" value="7"/><span class="border rounded px-3 py-2">7</span></label>
                  <label><input type="radio" name="rating" value="8"/><span class="border rounded px-3 py-2">8</span></label>
                  <label><input type="radio" name="rating" value="9"/><span class="border rounded px-3 py-2">9</span></label>
                  <label><input type="radio" name="rating" value="10"/><span class="border rounded px-3 py-2">10</span></label>
                </div>
                <div class="rating-labels d-flex justify-content-between mt-1">
                  <label>Very unlikely</label>
                  <label>Very likely</label>
                </div>
              </div>
              <div class="form-group">
                <label for="input-two">Would you like to say something?</label>
                <textarea class="form-control" id="input-two" rows="3" name="comment"></textarea>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <input type="submit" class="btn btn-primary" value="Submit"></input>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<script>  
            function validation()  
            {  
                var id=document.f1.unm.value;  
                var ps=document.f1.rating.value;  
                
                if(id.length=="" && ps.length=="") {  
                    alert("User Name and Rating fields are empty");  
                    return false;  
                }  
                else  
                {  
                    if(id.length=="") {  
                        alert("User Name is empty");  
                        return false;  
                    }   
                    if (ps.length=="") {  
                    alert("please select rating from 1 to 10 ");  
                    return false;  
                    }  
                }                             
            }  
        </script> 