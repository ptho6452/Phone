<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

</head>

<body>
 
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>

  <?php 
  $phone_list=
  array(
"* NỔI BẬT NHẤT *"=> array (
    'Phone1' =>  array(
        "img"=> "https://cdn.tgdd.vn/Products/Images/42/22701/dien-thoai-di-dong-Nokia-1280-dienmay.com-l.jpg",
        "name"=> "Nokia black future",
        "new"=> "Giảm 1.000Đ",
        "price_feedback"=> array(
            "price"=>"280.00",
            "sell"=> '',
            "start"=> "5",
            "feedback"=> "9999 đánh giá"
        )
        ,
        
        ),
        'Phone2' =>  array(
            "img"=> "https://haycafe.vn/wp-content/uploads/2022/01/Hinh-nen-toi-cho-dien-thoai-dep-nhat.jpg",
            "name"=> "Huawei nova 2i",
            "new"=> "Giảm 1.000Đ",  
            "price_feedback"=> array(
                "price"=>"3.990.000",
                "sell"=> "4.400.000",
                "start"=> "5",
                "feedback"=> "804 đánh giá"
            )
            ,),
            'Phone3' =>  array(
                "img"=> "https://cdn.tgdd.vn/Products/Images/42/22701/dien-thoai-di-dong-Nokia-1280-dienmay.com-l.jpg",
                "name"=> "Huawei nova 2i",
                "new"=> "Giảm 1.000Đ",
                "price_feedback"=> array(
                    "price"=>"3.990.000",
                    "sell"=> "4.400.000",
                    "start"=> "5",
                    "feedback"=> "804 đánh giá"
                )
                ,),
                'Phone4' =>   array(
                    "img"=> "https://cdn.tgdd.vn/Products/Images/42/22701/dien-thoai-di-dong-Nokia-1280-dienmay.com-l.jpg",
                    "name"=> "Huawei nova 2i",
                    "new"=> "Giảm 1.000Đ",
                    "price_feedback"=> array(
                        "price"=>"3.990.000",
                        "sell"=> "4.400.000",
                        "start"=> "5",
                        "feedback"=> "804 đánh giá"
                    )
                    ,),
                    ),
                    "* SẢN PHẨM MỚI *"=> array (
'Phone1' =>  array(
                            "img"=> "https://cdn.tgdd.vn/Products/Images/42/22701/dien-thoai-di-dong-Nokia-1280-dienmay.com-l.jpg",
                            "name"=> "Nokia black future",
                        
                            "new"=> "Giảm 1.000Đ",
                            "price_feedback"=> array(
                                "price"=>"280.00",
                                "sell"=> "",
                                "start"=> "5",
                                "feedback"=> "9999 đánh giá"
                            )
                            ,
                            
                            ),
                            'Phone2' =>  array(
                                "img"=> "https://cdn.tgdd.vn/Products/Images/42/22701/dien-thoai-di-dong-Nokia-1280-dienmay.com-l.jpg",
                                "name"=> "Huawei nova 2i",
                                "new"=> "Giảm 1.000Đ",
                                "price_feedback"=> array(
                                    "price"=>"3.990.000",
                                    "sell"=> "4.400.000",
                                    "start"=> "5",
                                    "feedback"=> "804 đánh giá"
                                )
                                ,),
                                'Phone3' =>   array(
                                    "img"=> "https://cdn.tgdd.vn/Products/Images/42/22701/dien-thoai-di-dong-Nokia-1280-dienmay.com-l.jpg",
                                    "name"=> "Huawei nova 2i",
                                    "new"=> "Giảm 1.000Đ",
                                    "price_feedback"=> array(
                                        "price"=>"3.990.000",
                                        "sell"=> "4.400.000",
                                        "start"=> "5",
                                        "feedback"=> "804 đánh giá"
                                    )
                                    ,),
                                    'Phone4' =>  array(
                                        "img"=> "https://cdn.tgdd.vn/Products/Images/42/22701/dien-thoai-di-dong-Nokia-1280-dienmay.com-l.jpg",
                                        "name"=> "Huawei nova 2i",
                                        "new"=> "Giảm 1.000Đ",
                                        "price_feedback"=> array(
                                            "price"=>"3.990.000",
                                            "sell"=> "4.400.000",
                                            "start"=> "5",
                                            "feedback"=> "804 đánh giá"
                                        )
                                        ,),
                                        ),

                )
                
  
  ?>
 <div id="content">
    <?php 
    foreach ($phone_list as $key => $value) { ?>
        <div class="title">
        <?php echo $key ?>
    </div>
        <div class="card-group">
            
                <?php 
                foreach ( $value as $k => $v ) {
                    ?>
                    <div class="card" id="card-item">
                    <div id="phone_img" class="card-img-top"><img src="<?php echo $v['img'] ?>"> </div>
                    <div class="card-body">
                    <div id="phone_new" ><?php echo $v['new'] ?></div>
                        <div id="name" class="card-title"><?php echo $v['name'] ?> </div>
                       
                        <div id="phone_feedback">
                        <div id= "price"> 
                       <?php echo $v['price_feedback']['price'] ?>
                                <?php echo $v['price_feedback']['sell'] ?></div>
                            <div id="fb">
                            <?php 
                            
                                $star= $v['price_feedback']['start'];
                                for ($i=0; $i< $star; $i++) {
                                    echo '<span class="star"><i class="fa-sharp fa-solid fa-star"></i></span>';};
                            
                            echo '<span>  ' .$v['price_feedback']['feedback']. '</span>';
                            ?>
                            </div> 
                        
                                
                         
                                



                    </div>

                        <div id="bt"><button id=bt1>+</button></div>
                    </div>
                    </div>
            <?php }
                ?>
            
        </div>
    <?php } ?>
</div> 
</body>

</html>