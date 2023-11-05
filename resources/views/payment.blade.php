<head><!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.2/mdb.min.css" rel="stylesheet" />
</head>
<section class="p-4 p-md-5"
    style="
    background: rgb(2,0,36);
background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(9,9,121,1) 35%, rgba(0,212,255,1) 100%);
  ">
    <div class="row d-flex justify-content-center">
        <div class="col-md-10 col-lg-8 col-xl-5">
            <div class="card rounded-3">
                <div class="card-body p-4">
                    <div class="text-center mb-4">
                        <h3>Payment</h3>
                        <h6>E Bill</h6>
                    </div>
                    <form action="">
                        
                        <div class="form-outline">
                            <input type="text" id="formControlLgXM" class="form-control form-control-lg"
                                value="" />
                            <label class="form-label" for="formControlLgXM">Bill Amount</label>
                        </div>
                        <br>
                        <p class="fw-bold mb-4">Pay The Bill:</p>

                        <div class="form-outline mb-4">
                            <input type="text" id="formControlLgXsd" class="form-control form-control-lg"
                                value="" />
                            <label class="form-label" for="formControlLgXsd">Cardholder's Name</label>
                        </div>

                        <div class="row mb-4">
                            <div class="col-7">
                                <div class="form-outline">
                                    <input type="text" id="formControlLgXM" class="form-control form-control-lg"
                                        value="" />
                                    <label class="form-label" for="formControlLgXM">Card Number</label>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-outline">
                                    <input type="password" id="formControlLgExpk" class="form-control form-control-lg"
                                        placeholder="MM/YYYY" />
                                    <label class="form-label" for="formControlLgExpk">Expire</label>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="form-outline">
                                    <input type="password" id="formControlLgcvv" class="form-control form-control-lg"
                                        placeholder="Cvv" />
                                    <label class="form-label" for="formControlLgcvv">Cvv</label>
                                </div>
                            </div>
                        </div>

                        <button id="addCardButton" class="btn btn-success btn-lg btn-block">Pay Now</button>
                    </form>
                    
                </div>
                
            </div>
        </div>
    </div>
    <br><br><br><br><br><br><br>
</section>

<!-- MDB -->
<script>
    // Get a reference to the button element
    var addCardButton = document.getElementById("addCardButton");
  
    // Add a click event listener to the button
    addCardButton.addEventListener("click", function () {
      // Create a message to be displayed
      var message = "Payment successfully!";
  
      // Show the message in a pop-up (you can use other methods like alerts or modals)
      alert(message);
    });
  </script>
  
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.2/mdb.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
