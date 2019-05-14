
<script language="javascript" src="<?php echo base_url();?>jquery.js"></script>
<script language="javascript" src="<?php echo base_url();?>modal.popup.js"></script>

<!--/ end  preview  -->

<!--/  print start external link -->
<script src="<?php echo base_url();?>jquery-1.7.2.js"></script>
<script src="<?php echo base_url();?>jquery.printPage.js"></script>
<!--/ end  preview  -->

<!--/  preview start function -->

<script>
 $(document).ready(function() {
$(".entypo-print").printPage({
url: "<?php echo base_url(); ?>super_admin/print_invoice/1",
attr: "href",
message:"Your document is being created"
});
});
</script>
<!--/  print end function -->


<!--/  preview start external link -->
        <script>
            $(document).ready(function() {

                //Change these values to style your modal popup
                var align = 'center';									//Valid values; left, right, center
                var top = 50; 											//Use an integer (in pixels)
                var width = 800; 										//Use an integer (in pixels)
                var padding = 10;										//Use an integer (in pixels)
                var backgroundColor = '#fcf'; 						//Use any hex code
                var source = '<?php echo base_url(); ?>super_admin/print_invoice/1'; 								//Refer to any page on your server, external pages are not valid e.g. http://www.google.co.uk
                var borderColor = '#afc'; 							//Use any hex code
                var borderWeight = 4; 									//Use an integer (in pixels)
                var borderRadius = 5; 									//Use an integer (in pixels)
                var fadeOutTime = 300; 									//Use any integer, 0 = no fade
                var disableColor = '#666666'; 							//Use any hex code
                var disableOpacity = 40; 								//Valid range 0-100
                var loadingImage = '<?php echo base_url(); ?>loading.gif';		//Use relative path from this page

                //This method initialises the modal popup
                $(".entypo-pinterest").click(function() {
                    modalPopup(align, top, width, padding, disableColor, disableOpacity, backgroundColor, borderColor, borderWeight, borderRadius, fadeOutTime, source, loadingImage);
                });

                //This method hides the popup when the escape key is pressed
                $(document).keyup(function(e) {
                    if (e.keyCode == 27) {
                        closePopup(fadeOutTime);
                    }
                });

            });
        </script>
<h2>Manage Product</h2>

                              <?php
                        $message = $this->session->userdata('message');
                        if ($message) {
                            ?> 
                            <div class="alert alert-success">
                                <?php echo $message; ?>
                            </div>

                            <?php
                            $this->session->unset_userdata('message');
                        }
                        ?>
<div>
    <form action="<?php echo base_url();?>super_admin/order_search" method="post">
    <input type="search" name="search_text">
    <input type="submit" value="Search Order">
    </form>
</div>
<table class="table table-bordered datatable" id="table-1">
    <thead>
        <tr>
            <th>Order Id</th>
            <th>Invoice No</th>
            <th>Customer Name</th>
            <th>Order Total</th>
            <th>Order Status</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($all_orders as $v_orders) {
            ?>
            <tr class="odd gradeX">
                <td class="col-md-1"><?php echo $v_orders->order_id ?></td>
                <td><?php echo $v_orders->invoice_no ?></td>
                <td><?php echo $v_orders->first_name.' '.$v_orders->last_name; ?></td>
                <td><?php echo $v_orders->order_total ?></td>
                
 
                <td >
                    <?php
                    if ($v_orders->order_status == 0) {
                        echo "Pending";
                    } 
                    elseif($v_orders->order_status == 1)
                    {
                        echo "Confirm";
                    }
                    else {
                        echo "Cancle";
                    }
                    ?>
                </td>

                <td>
                    <a href="<?php echo base_url()?>super_admin/edit_blog/"
                       <strong> <i class="entypo-pencil"></i></strong>
                    </a>

                    <a href="<?php echo base_url()?>super_admin/delete_blog/"
                       <strong> <i class="entypo-cancel"></i></strong>
                    </a>
                    <a href="<?php echo base_url()?>super_admin/details/<?php echo $v_orders->order_id;?>"
                       <strong> <i class="entypo-newspaper"></i></strong>
                    </a>
                    <a href="<?php echo base_url()?>super_admin/make_pdf/<?php echo $v_orders->order_id;?>"
                       <strong> <i class="fa fa-file"></i></strong>
                    </a>
                    <a href="#">
                       
                        <strong> <i class="entypo-print"></i></strong>
                    </a>
                    <a href="#">
                       
                        <strong> <i class="entypo-pinterest"></i></strong>
                    </a>

                </td>
            </tr>
            <?php
        }
        ?>


    </tbody>
    <tfoot>
        
        <tr>
            
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>

        </tr>
    </tfoot>
</table>
 <ul class="pagination">
  <li><?php echo $this->pagination->create_links();?></li>
  
</ul>
    