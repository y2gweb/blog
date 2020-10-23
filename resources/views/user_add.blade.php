<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>user Add</title>
  </head>
  <body>

    <div class="container mt-5">
        <div class="row justify-content-center ">
            <div class="col-md-8">
                <div class="card example z-depth-5 ">
                    <div class="card-header text-white" style="background-color:#311b92;">&nbsp;&nbsp;<B>Member Register</B></div>
    
                    <div class="card-body rgba-blue-slight ">
    <form method="POST" action="/store" enctype="multipart/form-data">
        @csrf
        <div class="form-row">
           
          <div class="form-group col-md-6">
            <label for="inputEmail4">First Name</label>
            <input type="text" name="first_name" value="{{ old('first_name') }}" class="form-control @error('first_name') is-invalid @enderror" id="inputEmail4" placeholder="First Namel">
          </div>
          @error('first_name')
            <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
            </span>
         @enderror

          <div class="form-group col-md-6">
            <label for="inputState">DS DS Division</label>
            <select id="inputState" name="division" class="form-control @error('division') is-invalid @enderror">
              <option disabled selected hidden>Select DS Division</option>
              <option value="Colombo 1">Colombo 1</option>
              <option value="Colombo 2">Colombo 2</option>
              <option value="Colombo 3">Colombo 3</option>
            </select>
          </div>

          @error('division')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
          @enderror
         
        </div>


        <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputEmail4">Last Name</label>
              <input type="text" required name="last_name"  class="form-control @error('last_name') is-invalid @enderror" id="inputEmail4" placeholder="Last Name">
            </div>
            @error('last_name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
  
            <div class="form-group col-md-6">
                <label for="inputEmail4">Date Of Birth</label>
                <input type="date" name="DOB" class="form-control @error('DOB') is-invalid @enderror" id="inputEmail4" placeholder="Email">
              </div>
              @error('DOB')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
              @enderror
           
          </div>



        </div>


        <div class="form-group col-md-12">
            <label for="exampleFormControlTextarea1">Summery</label>
            <textarea name="summery" class="form-control @error('summery') is-invalid @enderror" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        @error('summery')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    
        <div class="form-row mb-5">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary btn-rounded btn-sm" name="submit">
                    {{ __('Register') }}
                </button>

                <button type="reset" class="btn btn-danger btn-rounded btn-sm">
                    {{ __('Clear') }}
                </button>
                <a href="/view" class="btn btn-warning btn-rounded btn-sm">
                    {{ __('Back') }}
                </a>


            </div>
        </div>
      </form>

      
    </div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
