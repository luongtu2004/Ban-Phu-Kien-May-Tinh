<div class="boxtitle">SAN PHAM </div> <!-- <strong><?=$tendm?></strong> -->
            <div class="main-product">
                <?php
                 $i = 0;
                 foreach ($dssp as $sp){
                     extract($sp);
                     $linksp="index.php?act=sanphamct&idsp=".$id;
                     $hinh=$img_path.$img;
                     if(($i==2)||($i==5)||($i==8)||($i==11)){
                         $mr="";
                     }else{
                         $mr = "mr";
                     }
                     echo '<div class="boxsanpham '.$mr.'">
                     <div class=" row img"><a href="'.$linksp.'"><img src="'.$hinh.'" alt=""></a></div>
                     <p>'.$price.'</p>
                     <p>'.$mota.'</p>
                     <a href="'.$linksp.'">'.$name.'</a>
                 </div>';
                 $i+= 1;
                 }
                ?>
            </div>