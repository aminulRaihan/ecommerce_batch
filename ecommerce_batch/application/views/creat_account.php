<div class="row">
<div class="col-md-12">
    <form role="form" class="form-horizontal" action="<?php echo base_url();?>checkout/save_customer" method="post">
        <h2>Your Personal Details</h2>
        <div class="border-all">



            <div class="form-group">
                <label class="col-sm-2"><span class="red">*</span> First Name:</label>

                <div class="col-sm-5">
                    <input type="text" name="first_name" class="form-control" id="field-1" >
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2"><span class="red">*</span> Last Name:</label>

                <div class="col-sm-5">
                    <input type="text" name="last_name" class="form-control" id="field-1" >
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2"><span class="red">*</span> Email:</label>

                <div class="col-sm-5">
                    <input type="text" class="form-control" name="email_address" id="field-1" onblur="makerequest(this.value,'res');">  
                </div><span id="res"></span>
            </div>
            <div class="form-group">
                <label class="col-sm-2"><span class="red">*</span> Mobile No:</label>

                <div class="col-sm-5">
                    <input type="text" class="form-control" id="field-1" name="mobile_no" >
                </div>
            </div>
        </div>
                <h2>Your Password</h2>
        <div class="border-all">
            <div class="form-group">
                <label class="col-sm-2"><span class="red">*</span> Password:</label>
                <div class="col-sm-5">
                    <input type="password" name="password" class="form-control" id="field-1" >
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2"><span class="red">*</span> Confirm Password:</label>
                <div class="col-sm-5">
                    <input type="password" class="form-control" id="field-1" >
                </div>
            </div>

        </div>

        <h2>Your Address</h2>
        <div class="border-all">
            <div class="form-group">
                <label class="col-sm-2"><span class="red">*</span> Address:</label>

                <div class="col-sm-5">
                    <textarea rows="5" cols="50" name="address"></textarea>
                </div>
            </div> 
            <div class="form-group">
                <label class="col-sm-2"><span class="red">*</span> City:</label>

                <div class="col-sm-5">
                    <input type="text" name="city" class="form-control" id="field-1" >
                </div>
            </div> 
            <div class="form-group">
                <label class="col-sm-2"><span class="red">*</span> Post Code:</label>

                <div class="col-sm-5">
                    <input type="text" name="zip_code" class="form-control" id="field-1" >
                </div>
            </div> 
            <div class="form-group">
                <label class="col-sm-2"><span class="red">*</span> Country:</label>

                <div class="col-sm-5">
                    <select class="form-control" name="country">
                        <option>Select Your Country..</option>
                        <script type="text/javascript">
                        printCountryOptions();
                        </script>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2"><span class="red">*</span> Region/State:</label>

                <div class="col-sm-5">
                    <select class="form-control" name="state">
                        <script type="text/javascript">
                        printStateOptions();
                        </script>
                    </select>
                </div>
            </div>
        </div>



        <h2>Newsletter</h2>
        <div class="border-all">
            <div class="form-group">
                <label class="col-sm-2">Subscribe:</label>
                <div class="col-sm-5">
                    <input type="radio" name="newslatter" id="optionsRadios1" value="1" checked>Yes &nbsp;
                    <input type="radio" name="newslatter" id="optionsRadios1" value="0" >No
                </div>
            </div>
        </div>
        <br>
        <div class="border-all">
            <div class="form-group">
                <label class="col-sm-8">I have read and agree to the <span data-toggle="modal" data-target="#myModal"><a href="#">Privacy Policy</a></span> &nbsp;<input type="checkbox">&nbsp;&nbsp;&nbsp;
                    <button type="submit" class="btn btn-default btn-lg" id="sbutton" >Submit</button>
                </label>

                <!-- Modal -->
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h3 class="modal-title" id="myModalLabel">Privacy Policy</h3>
                            </div>
                            <div class="modal-body">

                                We respect the privacy of the customer and committed to maintaining it. When you shop on this Website, you would be asked for some Personal Information such as your name, e-mail address, billing address, delivery address, telephone number, product selections, credit card or other payment information and password.

                                We would not release any Personal Information to any company outside for mailing or marketing purposes.

                                What information do we gather and how we work

                                Depending on how you interact with us, we collect some or all of the following types of information:

                                your name, address, telephone number, email address,
                                billing information
                                gender and birth date, if you choose to enter such information,
                                products purchased and Gift Message (for example, Mother’s Day),
                                any promotion code and related information (for example, if you are claiming frequent flyer miles),
                                Message and gift recipient’s names, addresses, telephone numbers and email addresses, and other information you provide to us, including User Submissions (defined in the Terms of Use).

                                Information you provide to us may be collected by us even if an order, registration, or other process is started but not completed or otherwise cancelled. Members may also add to their Address Book the name, address and telephone number of friends or other persons to whom they may wish to send gifts or expressions. Only Members have the right to view and edit their Address Book entries.

                                We use 'Cookies' to keep track of your current shopping session to personalize your experience and so that you may retrieve your shopping cart at any time. 'Cookies' are tiny text files which our Website places on your computer's hard drive to store information about your shopping session and to identify your computer. `Cookies` cannot harm your computer and do not contain any personal or private information.

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">I Agree</button>

                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->

            </div>


        </div>

    </form>
</div>
</div>