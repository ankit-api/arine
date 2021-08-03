<!DOCTYPE html>
<html>
  
<head>
    <title>JavaScript:void(0)</title>
    <script src="./js/jquery-1.10.2.min.js"></script>
    
</head>
  
<body>
    <center>
        <h1 style="color:rgb(55, 194, 55)">Testing Code</h1>
        <form>
        <h3>Total Views : <span id="total_views" name="views">1</span></h3>
        <input type="hidden" class="count_views" name="count" value="<?php if(isset($_GET['submit'])){echo $_SESSION['count'];} else{ echo '';} ?>"/>
        <input type="submit" value="submit">
        </form>
    </center>

    <script>
        var views = $('#total_views');
        var count_views = $('.count_views');
        // while(1){
        //     setTimeout(() => {
                
        //         if(count_views.val()!=''){
        // // count_store.val(parseInt(views.html())+1);
        // views.html(parseInt(count_views.val())+1);
        
        // }
        // else{
        //     count_views.val("1");
        // }

        //     }, 1000);
        // }
        
        // views.attr("name", count_store.val());
        
        // console.log(views.html());
        // console.log(count_store.val());
    </script>

    <?php 
        if(session_status()!== PHP_SESSION_ACTIVE)
        session_start();
        
        $_SESSION['count'] = $_GET['views'];

    ?>

</body>

  
</html>

<!-- $sql = "select * from products where product_views > 0 ORDER BY product_views DESC limit 10";
$query = $this->mysqli->query($sql);
if($query){
    echo 'runned successfully';
    while($row = $this->mysqli->fetch_assoc()){
        echo '$row['name']';
    }
}
else{
    echo 'not runned failed';
} -->