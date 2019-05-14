

<div class="row">
    <div class="col-md-12">

        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion-test" href="#step3">
                        Payment Method
                    </a>

                </h4>
            </div>

            <div class="panel-body">

                <div class="row">
                    <div class="col-md-8">
                        <form action="<?php echo base_url();?>checkout/confirm_order" method="post">
                        <fieldset>

                            <label class="white" for="gender_male">
                                <input  type="radio" id="gender_male" checked  name="payment_type" value="cash_on_delevary" required>
                                Cash On Delivery
                            </label>
                            <br/>
                            <label class="white" for="gender_female">
                                <input  type="radio" id="gender_female"  name="payment_type" value="paypal">
                                Paypal
                            </label>
                           
                        </fieldset>
                                <button type="submit"  class=" col-md-2 btn btn-default btn-lg">Next</button>
                         </form>
                    </div>
                </div>

            </div>

        </div>

    </div>
</div>

