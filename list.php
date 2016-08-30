
<html>
<head>
    <title></title>


<body>
<table border="1">
    <tr>
        <th>user_id</th>
        <th>username</th>
        <th>password</th>
        <th>email</th>
    </tr>

<?php
/**
 * Created by PhpStorm.
 * User: apple
 * Date: 16/8/4
 * Time: 下午10:34
 */
include 'conn.php';

$sql="select * from list";
$query=mysqli_query($link,$sql);
while($rs=mysqli_fetch_array($query)) {

    ?>

    <tr>
        <td ><?php echo $rs['userid'] ?></td>
        <td><?php echo $rs['username'];?></td>
        <td><?php echo $rs['passward']?></td>
        <td class="edit" userid=<?php echo $rs['userid']?>><?php echo $rs['email']?></td>


    </tr>
    <?php
}

    ?></table>
    <script type="text/javascript" src="jquery.min.js"></script>
    <script>
       $(function () {
           var $input;
         $('.edit').on("click",function () {

             var $td=$(this);
             if($(this).children("input").length==0){

                 $input=$("<input type='text' name='name' id='edit-input'>");
                 var date=this.innerHTML;
                 $td.empty();
                 $input.val(date).appendTo($td);

             }
             $input.on('keydown',function (e) {

                 var _this=$(this);
                 if(e.which==13){
                     alert(123);
                    // alert(_this.parent().attr('userid'));
                     $.get('update_email.php','email='+_this.val()+'&userid='+_this.parent().attr('userid'),function (data) {
//                         if(data==success){
//                             $td.html(_this.value);
//                         }

                     },'text');
                 }
             });

         });






       });






    </script>
</body>
</html>