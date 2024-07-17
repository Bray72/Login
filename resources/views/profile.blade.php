

<!doctype html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>admin</title>
      <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.2/dist/css/bootstrap.min.css">
   </head>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
   <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
   <body class="bg-light">
</head>
<body>
    <div class="container">
        <div class="row my-5">
            <div class="col-md-3">
                <div class="card border-0 shadow-lg">
                    <div class="card-header  text-white">
                        Welcome {{ Auth::user()->name }}                      
                    </div>
                    <div class="card-body">
                        <div class="text-center mb-3">
                            <img src="/img/avatar5.png" alt="Foto">                        
                        </div>
                        <div class="h5 text-center">
                            <strong>{{ Auth::user()->name }}</strong>
                        </div>
                    </div>
                </div>
                <div class="card border-0 shadow-lg mt-3">
                    <div class="card-header  text-white">
                       Menu
                    </div>
                    <div class="card-body sidebar">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a href="{{ route('account.dashboard') }}">Dashboard</a>                   
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.logout') }}">Logout</a>
                            </li>                           
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                @include('layout.message')
                <div class="card border-0 shadow">
                    <div class="card-header  text-white">
                        Profile
                    </div>
                    <div class="card-body">
                          
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama : {{ Auth::user()->name }}</label>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email : {{ Auth::user()->email }}</label>
                        </div>
                        <div class="mb-3">
                    </form>                 
                    </div>
                </div>                
            </div>
        </div>       
    </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script> 
</body>
</html>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
   </body>
</html>