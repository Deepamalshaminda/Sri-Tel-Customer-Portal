<head><!-- Font Awesome -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
      rel="stylesheet"
    />
    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
      rel="stylesheet"
    />
    <!-- MDB -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.2/mdb.min.css"
      rel="stylesheet"
    /></head>

<div class="card">
    <div class="card-body">
      <div class="container mb-5 mt-3">
        <div class="row d-flex align-items-baseline">
          <div class="col-xl-9">
            
          </div>
          
          <hr>
        </div>
  
        <div class="container">
          <div class="col-md-12">
            <div class="text-center">
              
              <p class="pt-0">Last Month Bill</p>
            </div>
  
          </div>
  
  
          <div class="row">
            
            <div class="col-xl-4">
              <p class="text-muted">Invoice</p>
              <ul class="list-unstyled">
                <li class="text-muted"><i class="fas fa-circle" style="color:#84B0CA ;"></i> <span
                    class="fw-bold">ID:</span>#123-456</li>
                <li class="text-muted"><i class="fas fa-circle" style="color:#84B0CA ;"></i> <span
                    class="fw-bold">Creation Date: </span>Jun 23,2021</li>
                <li class="text-muted"><i class="fas fa-circle" style="color:#84B0CA ;"></i> <span
                    class="me-1 fw-bold">Status:</span><span class="badge bg-warning text-black fw-bold">
                    Unpaid</span></li>
              </ul>
            </div>
          </div>
  
          <div class="row my-2 mx-1 justify-content-center">
            <table class="table table-striped table-borderless">
              <thead style="background-color:#84B0CA ;" class="text-white">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Month</th>
                  <th scope="col">Data Usage</th>
                  <th scope="col">Amount</th>
                </tr>
              </thead>
              <tbody>
                @foreach ( $bill as $bi )
                    
                
                <tr>
                  <th scope="row">{{ $bi->id }}</th>
                  <td>{{ $bi->month }}</td>
                  <td>{{ $bi->data }} GB</td>
                  <td>Rs.{{ $bi ->payment}}</td>
                
                </tr>
                @endforeach
              </tbody>
  
            </table>
          </div>
          <div class="row">
            <div class="col-xl-8">
             
  
            </div>
            <div class="col-xl-3">
                @foreach ( $bill as $bi )
              <p class="text-black float-start"><span class="text-black me-3"> Total Amount</span><span
                  style="font-size: 25px;">Rs.{{ $bi ->payment}}</span></p>
                  @endforeach
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-xl-10">
              <p>Thank you for your purchase</p>
            </div>
            
          </div>
  
        </div>
      </div>
    </div>
  </div>


  <!-- MDB -->
<script
type="text/javascript"
src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.2/mdb.min.js"
></script>