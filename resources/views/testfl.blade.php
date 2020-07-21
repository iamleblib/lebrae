<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <label for="method">Select Method to receive payment</label>
        </div>
    </div>

    <div class="col-md-6">
        <i title="Direct payment to your bank account for Nigerians" onclick="methodPay('master_card')" id="master-card" class="fab fa-cc-mastercard fa-5x"></i>
        &nbsp;
        <i title="Direct Payment to your Bitcoin Wallet" onclick="methodPay('btc')" id="btcid" class="fab fa-btc fa-5x"></i>
    </div>
    <div class="col-md-6"></div>

    <div class="masterCardForm">
        <div class="master_message text-danger"></div>
        <div class="row">
            <div class="col-md-4">
                <label for="name">Account&nbsp;Name</label>
                <input value="" class="form-control" type="text" name="account_name" placeholder="Enter Account Name">
            </div>

            <div class="col-md-4">
                <label for="name">Account&nbsp;Number</label>
                <input value="" class="form-control" type="number" name="account_name" placeholder="Enter Account Number">
            </div>

            <div class="col-md-4">
                <label for="name">Bank&nbsp;Name</label>
                <input value="" class="form-control" type="text" name="bank" placeholder="Enter Bank Name">
            </div>

        </div>
    </div>

    {{-- Bitcoin Select --}}
    <div class="bitcoinForm">
        <div class="btc_message text-danger"></div>
        <div class="row">
            <div class="col-md-12">
                <label for="name">Bitcoin&nbsp;ID</label>
                <input value="" class="form-control" type="text" name="bitcoinid" placeholder="Enter Bitcoin ID">
            </div>
        </div>
    </div>

</div>
