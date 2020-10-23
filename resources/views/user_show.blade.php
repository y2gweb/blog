<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">
  
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js"></script>

    <title>Member Show</title>
  </head>
  <body>

    <div class="container mt-5">
        <div class="row justify-content-center ">
            <div class="col-md-8">

        

                <div class="row">
                    <div class="col-auto mr-auto"></div>
                    <div class="col-auto"><a href="/index" class="btn-rounded btn  btn-sm btn-primary mb-3">Add
                            member</a> </div>
                            <div class="col-auto"><a href="/" class="btn-rounded btn  btn-sm btn-success mb-3">Home</a> </div>
                </div>
    
                <div class="card example z-depth-5 ">
                    <div class="card-header text-white" style="background-color:#311b92;">&nbsp;&nbsp;<B>Member List</B></div>
    
                    <div class="card-body rgba-blue-slight ">
                        @if(session()->has('status'))
                        <div class="alert alert-success col-md-12">
                            {{session()->get('status')}}
            
                        </div>
                        @endif


                        <table id="data" class="table table-hover">
                            <thead>
                              <tr>
                         
                                <th scope="col">First Name</th>
                                <th scope="col">Last Name</th>
                                <th scope="col">Date of Birth</th>
                                <th scope="col">DS Division</th>
                                <th scope="col">Action</th>
                              </tr>
                            </thead>
                            <tbody>

                                @foreach ( $users as $row )
                                 <tr>
                             
                                <td>{{$row->first_name}}</td>
                                <td>{{$row->last_name}}</td>
                                <td>{{$row->DOB}}</td>
                                <td>{{$row->division}}</td>
                                <td>
                                   <a href="/edit/{{$row->id}}" class="btn btn-success btn-sm ">Edit</a>

                            <td>
                                <form action="/delete/{{$row->id}}" method="post">
                                    {{csrf_field()}}
                                    {{method_field('DELETE')}}
                                    <button onclick="return confirm('Are you sure delete ?');" type="submit"
                                        class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </td>
                                </td>
                              </tr>
                              @endforeach
                            
                            </tbody>
                          </table>
                          <table cellspacing="0" cellpadding="0" border="0">
                            <tbody>
                                <tr>
                                    <td class="gutter">
                                        <div class="line number1 index0 alt2" style="display: none;">1</div>
                                    </td>
                                    <td class="code">
                                        <div class="container" style="display: none;">
                                            <div class="line number1 index0 alt2" style="display: none;">&nbsp;</div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                </diV>
   

      
    </div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>


<script>

    $(document).ready( function () {
    $('#data').DataTable();
} );
</script>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
