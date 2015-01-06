<div class="modal fade" id="<?php echo $firstname,$lastname?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

                <h4 class="modal-title"><?php echo $firstname?> <?php echo $lastname?></h4>
            </div>

            <div class="modal-body">
                <img class="modal-img" src="images/players/<?php echo $firstname,$lastname?>.JPG" alt="<?php echo $firstname,$lastname?>" width="300">

                <ul class="modal-list">
                    <li>Number: <?php echo $number?> </li>

                    <li>Year: <?php echo $yearLong?> </li>

                    <li>Position: <?php echo $positionLong?> </li>

                    <li>Height: <?php echo $height?> </li>

                    <li>Weight: <?php echo $weight?> </li>

                    <li>Major: <?php echo $major?> </li>

                    <li>Hometown: <?php echo $hometown?> </li>

                    <li>Highschool: <?php echo $highschool?> </li>
                </ul>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->