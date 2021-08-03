<?php
// include header file
include 'header.php'; ?>
        <div class="admin-content-container">
            <h2 class="admin-heading">All Orders</h2>
            <?php
            $limit = 5;
            $db = new Database();
            $db->select('order_products','order_products.product_id,order_products.order_id,order_products.total_amount,order_products.product_qty,order_products.delivery,order_products.product_user,order_products.order_date,products.featured_image,user.f_name,user.address,user.city,payments.payment_status','products ON FIND_IN_SET(products.product_id,order_products.product_id) > 0
                     LEFT JOIN user ON order_products.product_user=user.user_id LEFT JOIN payments ON payments.txn_id = order_products.pay_req_id GROUP BY order_products.order_id',null,'order_products.order_id DESC',$limit);
                $result = $db->getResult();
                // echo '<script> console.log('.json_encode($result).') </script>';
                if(count($result) > 0) {  ?>
                        <table class="table table-striped table-hover table-bordered">
                            <thead>
                            <th>ORDER No.</th>
                            <th width="300px">Product Details</th>
                            <th>QTY.</th>
                            <th>Total Amount</th>
                            <th>Customer Details</th>
                            <th>Order Date</th>
                            <th>Payment Status</th>
                            <th>Delivery Status</th>
                            </thead>
                            <tbody>
                            <?php foreach($result as $row) { 
                                
                                ?>
                                
                                <tr>
                                    <td><?php echo 'ODR00'.$row['order_id']; ?></td>
                                    <td>
                                    <?php
                                    $product_code = array_filter(explode(',',$row['product_id']));
                                    $product_qty = array_filter(explode(',',$row['product_qty']));
                                       for($p=0;$p<count($product_code);$p++){ ?>
                                        <b>Product Code: </b><?php echo 'PDR00'.$product_code[$p]; ?>
                                        <b>Quantity: </b><?php echo $product_qty[$p]; ?>
                                        <br>
                                    <?php } ?>

                                    </td>
                                    <td><?php echo array_sum($product_qty); ?></td>
                                    <td><?php echo $currency_format.' '.$row['total_amount']; ?></td>
                                    <td>
                                        <b>Name : </b><?php echo $row['f_name']; ?><br>
                                        <b>Address : </b><?php echo $row['address']; ?><br>
                                        <b>City : </b><?php echo $row['city']; ?><br>
                                    </td>
                                    <td><?php echo date('d M, Y',strtotime($row['order_date'])); ?></td>
                                    <td>
                                        <?php
                                            if($row['payment_status'] == 'credit'){ ?>
                                                <span class="label label-success">Paid</span>
                                        <?php }?>
                                    </td>
                                    <td>
                                        <?php
                                            if($row['delivery'] == '1'){ ?>
                                                <span>Delivered</span>
                                        <?php }else{ ?>
                                                <a class="btn btn-sm btn-primary order_complete" href="" data-id="<?php echo $row['order_id']; ?>">complete</a>
                                        <?php } ?>
                                    </td>
                                </tr>
                            <?php 
                            }?>
                            </tbody>
                        </table>
                    <?php
                }else { ?>
                        <div class="not-found">!!! No Orders Found !!!</div>
                <?php } ?>
                <div class="pagination-outer">
                    <?php echo $db->pagination('order_products',null,null,$limit); ?>
                </div>
        </div>
<?php
//    include footer file
    include "footer.php";
?>
