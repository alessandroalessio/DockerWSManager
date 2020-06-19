<?php 
namespace OrderQuote;

class Product{

    public function __construct(){ }

    /**
     * get_price_per_item
     */
    public function get_price_per_item($weight, $price_per_kg){
        // echo '-->'.$weight.'|'.$price_per_kg.'<--<br>';
        return number_format($price_per_kg*$weight, 2);
    }

    /**
     * get_products
     */
    public function get_products(){
        
        $products[0] = [
            'images' => [
                'src' => '/assets/img/products/200x180/Salame_Varzi_DOP_Filzetta_rev2.jpg',
                'src-zoom' => '/assets/img/products/600x440/Salame_Varzi_DOP_Filzetta_rev2.jpg'
            ],
            'title' => 'SALAME DI VARZI D.O.P. - Filzetta',
            'text' => 'Stagionatura: minima 45 giorni<br>Peso: fino a 700 grammi',
            'min-weight' => 0,
            'max-weight' => 0.7,
            'slider' => false,
            'price' => [
                'label' => '<span class="price">32,00 €</span><span class="price-extra">al kg</span>',
                'per-kg' => 32.00
            ],
        ];
        $products[1] = [
            'images' => [
                'src' => '/assets/img/products/200x180/Salame_Varzi_DOP_Filzettone.jpg',
                'src-zoom' => '/assets/img/products/600x440/Salame_Varzi_DOP_Filzettone.jpg'
            ],
            'title' => 'SALAME DI VARZI D.O.P. - Filzettone',
            'text' => 'Stagionatura: minima 60 giorni<br>Peso: da 700 a 1000 grammi',
            'min-weight' => 0,
            'max-weight' => 1,
            'slider' => false,
            'price' => [
                'label' => '<span class="price">33,00 €</span><span class="price-extra">al kg</span>',
                'per-kg' => 33.00
            ],
        ];
        $products[2] = [
            'images' => [
                'src' => '/assets/img/products/200x180/Salame_Gran_Riserva.jpg',
                'src-zoom' => '/assets/img/products/600x440/Salame_Gran_Riserva.jpg'
            ],
            'title' => 'GRAN RISERVA',
            'text' => 'Stagionatura: minima 120 giorni<br>Peso: da 800 a 1000 grammi',
            'min-weight' => 0,
            'max-weight' => 1,
            'slider' => false,
            'price' => [
                'label' => '<span class="price">34,00 €</span><span class="price-extra">al kg</span>',
                'per-kg' => 34.00
            ],
        ];
        $products[3] = [
            'images' => [
                'src' => '/assets/img/products/200x180/Salame_Riserva_Filzetta.jpg',
                'src-zoom' => '/assets/img/products/600x440/Salame_Riserva_Filzetta.jpg'
            ],
            'title' => 'SALAME RISERVA - Filzetta',
            'text' => 'Stagionatura: minima 45 giorni<br>Peso: fino a 600 grammi',
            'min-weight' => 0,
            'max-weight' => 0.6,
            'slider' => false,
            'price' => [
                'label' => '<span class="price">31,00 €</span><span class="price-extra">al kg</span>',
                'per-kg' => 31.00
            ],
        ];
        $products[4] = [
            'images' => [
                'src' => '/assets/img/products/200x180/Salame_Riserva_Filzettone.jpg',
                'src-zoom' => '/assets/img/products/600x440/Salame_Riserva_Filzettone.jpg'
            ],
            'title' => 'SALAME RISERVA - Filzettone',
            'text' => 'Stagionatura: minima 60 giorni<br>Peso: da 600 a 1000 grammi',
            'min-weight' => 0,
            'max-weight' => 1,
            'slider' => false,
            'price' => [
                'label' => '<span class="price">32,00 €</span><span class="price-extra">al kg</span>',
                'per-kg' => 32.00
            ],
        ];
        $products[5] = [
            'images' => [
                'src' => '/assets/img/products/200x180/Salame_Varzi_DOP_cucito_a_budello_doppio.jpg',
                'src-zoom' => '/assets/img/products/600x440/Salame_Varzi_DOP_cucito_a_budello_doppio.jpg'
            ],
            'title' => 'SALAME DI VARZI D.O.P. Cucito a budello doppio',
            'text' => 'Stagionatura: minima 180 giorni<br>Peso: da 1000 a 1200 grammi',
            'min-weight' => 0,
            'max-weight' => 1.2,
            'slider' => false,
            'price' => [
                'label' => '<span class="price">36,00 €</span><span class="price-extra">al kg</span>',
                'per-kg' => 36.00
            ],
        ];
        $products[6] = [
            'images' => [
                'src' => '/assets/img/products/200x180/Salame_Riserva_Cucito_a_budello_doppio.jpg',
                'src-zoom' => '/assets/img/products/600x440/Salame_Riserva_Cucito_a_budello_doppio.jpg'
            ],
            'title' => 'SALAME RISERVA Cucito a budello doppio ',
            'text' => 'Stagionatura: minima 180 giorni<br>Peso: da 1000 a 1200 grammi',
            'min-weight' => 0,
            'max-weight' => 1.2,
            'slider' => false,
            'price' => [
                'label' => '<span class="price">35,00 €</span><span class="price-extra">al kg</span>',
                'per-kg' => 35.00
            ],
        ];
        $products[7] = [
            'images' => [
                'src' => '/assets/img/products/200x180/Salame_Eccellente_cucito_a_budello_doppio_senza_salnitro.jpg',
                'src-zoom' => '/assets/img/products/600x440/Salame_Eccellente_cucito_a_budello_doppio_senza_salnitro.jpg'
            ],
            'title' => 'SALAME “ECCELLENTE” Cucito a budello doppio senza salnitro',
            'text' => 'Stagionatura: minima 180 giorni<br>Peso: da 1000 a 1200 grammi',
            'min-weight' => 0,
            'max-weight' => 1.2,
            'slider' => false,
            'price' => [
                'label' => '<span class="price">36,00 €</span><span class="price-extra">al kg</span>',
                'per-kg' => 36.00
            ],
        ];
        $products[8] = [
            'images' => [
                'src' => '/assets/img/products/200x180/Coppa_Tagliata.jpg',
                'src-zoom' => '/assets/img/products/600x440/Coppa_Tagliata.jpg'
            ],
            'title' => 'BONDIOLA (coppa)',
            'text' => 'Stagionatura: minima 120 giorni<br>Peso: da 2000 a 3000 grammi',
            'min-weight' => 0,
            'max-weight' => 3,
            'slider' => true,
            'price' => [
                'label' => '<span class="price">27,00 €</span><span class="price-extra">al kg</span>',
                'per-kg' => 27.00
            ],
        ];
        $products[9] = [
            'images' => [
                'src' => '/assets/img/products/200x180/Salame_Rosa.jpg',
                'src-zoom' => '/assets/img/products/600x440/Salame_Rosa.jpg'
            ],
            'title' => 'SALAME ROSA',
            'text' => 'Peso: da 500 a 2000 grammi',
            'min-weight' => 0,
            'max-weight' => 2,
            'slider' => true,
            'price' => [
                'label' => '<span class="price">20,00 €</span><span class="price-extra">al kg</span>',
                'per-kg' => 20.00
            ],
        ];
        $products[10] = [
            'images' => [
                'src' => '/assets/img/products/200x180/Buon_salsicciotto.jpg',
                'src-zoom' => '/assets/img/products/600x440/Buon_salsicciotto.jpg'
            ],
            'title' => 'BUON SALSICCIOTTO',
            'text' => 'Stagionatura: da 20 a 60 giorni<br>Peso: circa 80 grammi',
            'min-weight' => 0,
            'max-weight' => 0.08,
            'slider' => false,
            'price' => [
                'label' => '<span class="price">27,00 €</span><span class="price-extra">al kg</span>',
                'per-kg' => 27.00
            ],
        ];
        $products[11] = [
            'images' => [
                'src' => '/assets/img/products/200x180/Filetto_Delicato.jpg',
                'src-zoom' => '/assets/img/products/600x440/Filetto_Delicato.jpg'
            ],
            'title' => 'FILETTO DELICATO',
            'text' => 'Stagionatura: da 30-60 giorni<br>Peso: 400 grammi circa',
            'min-weight' => 0,
            'max-weight' => 0.4,
            'slider' => false,
            'price' => [
                'label' => '<span class="price">75,00 €</span><span class="price-extra">al kg</span>',
                'per-kg' => 75.00
            ],
        ];
        $products[12] = [
            'images' => [
                'src' => '/assets/img/products/200x180/Pancetta.jpg',
                'src-zoom' => '/assets/img/products/600x440/Pancetta.jpg'
            ],
            'title' => 'PANCETTA',
            'text' => 'Stagionatura: minimo 180 giorni<br>Peso: da 2000 a 8000 grammi circa',
            'min-weight' => 0,
            'max-weight' => 8,
            'slider' => true,
            'price' => [
                'label' => '<span class="price">20,00 €</span><span class="price-extra">al kg</span>',
                'per-kg' => 20.00
            ],
        ];
        $products[13] = [
            'images' => [
                'src' => '/assets/img/products/200x180/Cotechino.jpg',
                'src-zoom' => '/assets/img/products/600x440/Cotechino.jpg'
            ],
            'title' => 'COTECHINO',
            'text' => 'Peso: da 300 a 1500 grammi circa',
            'min-weight' => 0,
            'max-weight' => 1.5,
            'slider' => true,
            'price' => [
                'label' => '<span class="price">12,00 €</span><span class="price-extra">al kg</span>',
                'per-kg' => 12.00
            ],
        ];
        // $products[14] = [
        //     'images' => [
        //         'src' => 'https://fakeimg.pl/200x180/',
        //         'src-zoom' => 'https://fakeimg.pl/600x440/'
        //     ],
        //     'title' => 'PANCETTA',
        //     'text' => 'Stagionatura: minimo 180 giorni<br>Peso: da 2000 gr a 8000 gr circa',
        //     'min-weight' => 0,
        //     'max-weight' => 8,
        //     'slider' => true,
        //     'price' => [
        //         'label' => '<span class="price">20,00 €</span><span class="price-extra">al kg</span>',
        //         'per-kg' => 20.00
        //     ],
        // ];
        // $products[15] = [
        //     'images' => [
        //         'src' => 'https://fakeimg.pl/200x180/',
        //         'src-zoom' => 'https://fakeimg.pl/600x440/'
        //     ],
        //     'title' => 'COTECHINO',
        //     'text' => 'Peso: da 300 gr a 1500 gr circa',
        //     'min-weight' => 0,
        //     'max-weight' => 1.5,
        //     'slider' => true,
        //     'price' => [
        //         'label' => '<span class="price">12,00 €</span><span class="price-extra">al kg</span>',
        //         'per-kg' => 12.00
        //     ],
        // ];
        $products[16] = [
            'images' => [
                'src' => '/assets/img/products/200x180/Salamini_Freschi.jpg',
                'src-zoom' => '/assets/img/products/600x440/Salamini_Freschi.jpg'
            ],
            'title' => 'SALAMINI FRESCHI',
            'text' => 'Peso: circa 100 grammi',
            'min-weight' => 0,
            'max-weight' => 0.1,
            'slider' => false,
            'price' => [
                'label' => '<span class="price">12,00 €</span><span class="price-extra">al kg</span>',
                'per-kg' => 12.00
            ],
        ];
        $products[17] = [
            'images' => [
                'src' => '/assets/img/products/200x180/Pietanza.jpg',
                'src-zoom' => '/assets/img/products/600x440/Pietanza.jpg'
            ],
            'title' => 'LA PIETANZA (crema di lardo)',
            'text' => 'Peso: vasetto da 170 grammi',
            'min-weight' => 0,
            'max-weight' => 0.17,
            'slider' => false,
            'price' => [
                'label' => '<span class="price">4,00 €</span><span class="price-extra">al pezzo</span>',
                'per-kg' => 23.529
            ],
        ];








        /*
        $products[7] = [
            'images' => [
                'src' => 'https://fakeimg.pl/200x180/',
                'src-zoom' => 'https://fakeimg.pl/600x440/'
            ],
            'title' => 'SALAME “ECCELLENTE” senza salnitro *',
            'text' => 'Stagionatura: minima 45 giorni<br>Peso: da 500 gr a 1000 gr',
            'min-weight' => 0,
            'max-weight' => 1,
            'slider' => false,
            'price' => [
                'label' => '<span class="price">35,00 €</span><span class="price-extra">al kg</span>',
                'per-kg' => 35.00
            ],
        ];
        $products[8] = [
            'images' => [
                'src' => 'https://fakeimg.pl/200x180/',
                'src-zoom' => 'https://fakeimg.pl/600x440/'
            ],
            'title' => 'SALAME “ECCELLENTE” senza salnitro *',
            'text' => 'Stagionatura: minima 45 giorni<br>Peso: da 500 gr a 1000 gr',
            'min-weight' => 0,
            'max-weight' => 1,
            'slider' => false,
            'price' => [
                'label' => '<span class="price">35,00 €</span><span class="price-extra">al kg</span>',
                'per-kg' => 35.00
            ],
        ];
        /*$products[3] = [
            'images' => [
                'src' => 'https://fakeimg.pl/200x180/',
                'src-zoom' => 'https://fakeimg.pl/600x440/'
            ],
            'title' => 'Prodotto pesante',
            'text' => 'Stagionatura: minima 60 giorni<br>Peso: da 500 grammi a 8 chili',
            'min-weight' => 0.5,
            'max-weight' => 8,
            'slider' => true,
            'price' => [
                'label' => '<span class="price">35,00 €</span><span class="price-extra">al kg</span>',
                'per-kg' => 35.00
            ],
        ];*/

        return $products;
    }

}
?>