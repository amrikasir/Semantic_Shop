<html>
    <head>
        <title>Kadai</title>
        <!--
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/960.css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/text.css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/style.css" />
        -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>/dist/semantic.min.css" />
        <script src="<?php echo base_url(); ?>/dist/jquery-2.2.4.js"></script>
        <script src="<?php echo base_url(); ?>/dist/semantic.min.js"></script>
    </head>
    <body>
        <div class="ui grid container">
            <div class="four wide column">
                <div class="ui vertical menu" style="width: 100% !important">
                    <a class="item" href="<?php echo base_url(); ?>">
                        Home
                    </a>
                    <div class="item">
                        <?php echo $sidebar_member; ?>
                    </div>
                    <div class="item">
                        <?php echo $sidebar_halaman; ?>
                    </div>
                    <div class="item">
                        <?php echo $sidebar_kategori; ?>
                    </div>
                </div>
            </div>
            <div class="twelve wide column">
                <div class="ui segment">
                    <div class="ui small breadcrumb">
                        <a class="section" href="<?php echo base_url(); ?>">Home</a>
                        <div class="divider"> / </div>
                        <?php
                            $brcm = [];
                            foreach ($judul as $v){
                                if($v == end($judul)){
                                    $brcm[] = '<div class="active section">'.$v.'</div>';
                                }else{
                                    $brcm[] = '<a class="section">'.$v.'</a>';
                                }
                            }
                            echo join('<div class="divider"> / </div>', $brcm);
                        ?>
                    </div>
                </div>
                <?php
                if (isset($menu)) {
                    echo $menu;
                }
                if (isset($feedback)) {
                    echo $feedback;
                }
                echo $konten; ?>
            </div>

        </div>
    </body>
</html>