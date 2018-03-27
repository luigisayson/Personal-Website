<!DOCTYPE html>
<html lang="en-us">
    <?php include("header.html");?>
    <?php include("navigation.html");?>
    <body>
        <div class = "container mb-4">
            <div class="page-header">
              <h1>Contact Luigi</h1>
            </div>
        </div>
        <div class="container">
        <div class="row">
            <div class="col">
              E-mail: luigisayson@gmail.com<br>
              Phone Number: (714)980-2526
            </div>
            <div class="col">
                <form>
                  <div class="form-row">
                    <div class = "col-md-6 mb-3">
                      <input type="text" class="form-control" id="email" placeholder="Name">
                    </div>
                    <div class="col-md-6 mb-3">
                      <input type="email" class="form-control" id="email" placeholder="E-mail">
                    </div>
                  </div>
                  <div class="form-group">
                       <input type="text" class="form-control" id="phone number" placeholder="Phone Number">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" id="Subject" placeholder="Subject">
                  </div>
                  <div class="form-group">
                    <textarea class="form-control" rows="3" placeholder="Message" required></textarea>
                  </div>
                  <div class="form-group"> 
                    <button type="submit" class="btn btn-default">Submit</button>
                  </div>
                </form>            
            </div>
        </div>
    </body>
    
</html>
