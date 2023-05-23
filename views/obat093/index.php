<?php
    use yii\grid\GridView;

    ?>
    <?= 
         GridView::widget([
            'dataProvider' => $dataProvider,
            'columns' => [
                'id',
                'kode_obat',
                'harga',
                'stok_obat',
            ]
         ])
    ?>