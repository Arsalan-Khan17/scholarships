<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Scholarships</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" integrity="sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

<div class="container pt-5">
    <div class="row">
       <div class="col-12 mb-4">
           <div class="card">
               <div class="card-header">
                   <h4 class="card-title">Add Scholarship</h4>
               </div>
               <div class="card-body">
                   <form action="{{route('save_scholarship')}}" method="post" class="form">
                       @csrf
                       <div class="row">
                           <div class="col-4 mb-3">
                               <label for="name" class="form-label">Name</label>
                               <input type="text" name="name" class="form-control" required>
                           </div>
                           <div class="col-4 mb-3">
                               <label for="name" class="form-label">Country</label>
                               <input type="text" name="country" class="form-control" required>
                           </div>
                           <div class="col-4 mb-3">
                               <label for="name" class="form-label">Added By</label>
                               <select name="added_by" id="" class="form-control" required>
                                   <option value="Arsalan">Arsalan</option>
                                   <option value="Majid">Majid</option>
                               </select>
                           </div>
                           <div class="col-12 mb-3">
                               <label for="name" class="form-label" >Link</label>
                               <input type="url" name="link" class="form-control" required>
                           </div>
                           <div class="col-12 mb-3 text-end">
                              <button class="btn btn-primary">Save</button>
                           </div>
                       </div>
                   </form>
               </div>
           </div>
       </div>

        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <th>Name</th>
                            <th>Country</th>
                            <th>Link</th>
                            <th>Added By</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            @foreach($scholarships as $scholarship)
                                <tr>
                                    <td>{{$scholarship->name}}</td>
                                    <td>{{$scholarship->country}}</td>
                                    <td>{{$scholarship->link}}</td>
                                    <td>{{$scholarship->added_by}}</td>
                                    <td>
                                        <a href="{{$scholarship->link}}" class="btn btn-primary">View</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQdfd4DLgtSH2RxuLBJ34Q7dm66DUdDojdW4N+OUCT5b1T8st7tuegbt73qRQ5pQ" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha384-0F4/8XoInffFdeCZ30ehgAN+/bU/4pP8yPhDFnO1LCcpX6AfKxM32eWChlmQ2dRf" crossorigin="anonymous"></script>

</body>
</html>
