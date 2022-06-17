<?php
$this->view("partials/header"); 
?>
    <div class="d-flex justify-content-center">
      <div class="col-lg-6 mt-5">

                            <div class="card">
                            <div class="card-body">
                                    <div>
                                        <form action="<?= BASEURL?>/wallets/createtransaction" method="post">
                                        <!-- <div class="form-group">
        <label for="example-text-input" class="col-form-label">Wallet Name</label>
        <input class="form-control" type="text" name="wallname" value="" readonly id="walletType">
        
    </div> -->
    <div class="form-group">
        <label for="example-text-input" class="col-form-label">Amount</label>
        <input class="form-control" type="text" id="test" name="amt" required>
    </div>
    <div class="form-group">
        <label for="example-text-input" class="col-form-label">Currency</label>
        <input class="form-control" type="text" name="currency1name" value="USD" readonly id="">
        
    </div>
    <div class="form-group">
        <label for="example-text-input" class="col-form-label">CryptoCurrency Name</label>
        <input class="form-control" type="text" name="currency2name" value="BTC" readonly id="">
        
    </div>
    <div class="form-group">
        <label for="example-text-input" class="col-form-label">Email Address</label>
        <input class="form-control" type="email" name="email" required>
        
    </div>
    <div class="form-group">
        <label for="example-text-input" class="col-form-label">Address</label>
        <input class="form-control" type="text" name="walladdress" required>
        
    </div>
    <div class="form-group">
        <label for="example-text-input" class="col-form-label">Description</label>
        <input class="form-control" type="text" name="desc" required>
        
    </div>
    <div class="form-group">
     <button class="btn btn-block text-white" type="submit" name="sendbtn" style="background: black;">Send</button>
    </div>
    </form>
           
                                    </div>
                                </div>
                            </div>
      </div>
    </div>
<?php
$this->view("partials/footer");  
?>