<div class="col-md-3 ">
    <ul class="list-group" id="menu">
        <li href="#" class="list-group-item menu1 active">
            Menu
        </li>

        <?php
        foreach ($menu as $mn){
            ?>

            <li href="#" class="list-group-item menu1">
                <?=$mn->Ten?>
            </li>
            <ul>

                <?php
                $loaitin = explode(',', $mn->LoaiTin);

                foreach ($loaitin as $loai){
                    list($id, $ten, $tenkhongdau) = explode(':', $loai);
                    ?>

                    <li class="list-group-item">
                        <a href="loaitin.php?id_loai=<?=$id?>"><?=$ten?></a>
                    </li>

                    <?php

                }
                ?>

            </ul>

            <?php
        }

        ?>

    </ul>
</div>