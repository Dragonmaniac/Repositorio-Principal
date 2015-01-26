 <div id="slider">
        <ul class="bjqs">
            <?php do { ?>
            <li>
                <a href="<?php echo $row_slider['link']; ?>"><img src="imagenes/<?php echo $row_slider['img']; ?>" alt="" title="<?php echo $row_slider['texto']; ?>" width="100%" /></a>
              </li>
              <?php } while ($row_slider = mysql_fetch_assoc($slider)); ?>
            
         
        </ul>
</div>

 
