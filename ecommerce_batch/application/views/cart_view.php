<?php
$contents=$this->cart->contents() ;
//echo count($contents);
//exit();
//session_start();
//echo '<pre>';
//print_r($_SESSION);
//exit();
//echo '<pre>';
//print_r($this->session->all_userdata());
//exit();
?>


<h2>Cart Display</h2>

<a href="<?php echo base_url();?>"><h3 align="right">Continue Shopping</h3></a>
<table class="table table-bordered datatable" id="table-1">
    <thead>
        <tr>
            <th>Image</th>
            <th>Product Name</th>
            <th>Quantity</th>
            <th>Unit Price</th>
            <th>Sub Total</th>
        </tr>
    </thead>
    <tbody> 
        <?php
            foreach($contents as $values)
            {
        ?>
        <tr class="odd gradeX">
            <td><img height="50" width="50" src="<?php echo base_url().$values['image']?>"></td>
            <td><?php echo $values['name'];?> </td>
            
            <td>
                <div class="row">
                    <form action="<?php echo base_url();?>cart/update_cart/" method="post">
                    <div class="col-md-6">
                        <input type="text" name="qty" value="<?php echo $values['qty'];?>" size="5" class="form-control input-mini" ></input>   
                        <input type="hidden" name="rowid" value="<?php echo $values['rowid'];?>" size="5" class="form-control input-mini" ></input>   
                    </div>
                    <div class="col-md-1">
                      <a href="<?php echo base_url();?>cart/update_cart/<?php echo $values['rowid'];?>"><i class="fa fa-times"></i></a>  
                    </div>
                    <div class="col-md-1">
                      <button type="submit"><i class="fa fa-refresh"></i></button>  
                    </div>
                    </form>
                </div>
               
            </td>
            <td><?php echo $values['price'];?></td>
            <td><?php echo $values['subtotal'];?></td>

        </tr>   
            <?php } ?>



    </tbody>
    <tfoot>
        <tr>
            <th></th>
            
            <th></th>
            <th></th>
            <th>Grand Total</th>
            <th><?php echo $this->cart->total();?></th>
            


        </tr>
    </tfoot>
</table>

<?php
$customer_id=$this->session->userdata('customer_id');
$shipping_id=$this->session->userdata('shipping_id');

if($customer_id ==NULL)
{
?>
<a href="<?php echo base_url();?>checkout"><h3 align="right">Checkout >></h3></a>
<?php
}
if($customer_id !=NULL && $shipping_id==NULL)
{
    $this->load->view('shipping_form');
}
if($customer_id !=NULL && $shipping_id!=NULL)
{
    $this->load->view('payment_method');
}
?>