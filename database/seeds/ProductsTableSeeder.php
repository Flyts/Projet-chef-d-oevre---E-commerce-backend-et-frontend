<?php

use App\Products;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $images = [
            "images" => [
                0 => "../img/image-1.jpg",
                1 => "../img/image-2.jpg",
                2 => "../img/image-3.jpg",
                3 => "../img/image-4.jpg",
            ]
        ];

        $chemise_blue = [
            "images" => [
                0 => "../img/int/chemise-à-rayures-verticales-bleu-xl_1.jpg",
                1 => "../img/int/chemise-à-rayures-verticales-bleu-xl_2.jpg",
                2 => "../img/int/chemise-à-rayures-verticales-bleu-xl_3.jpg",
            ]
        ];

        $chemise_manche_courte_blanc = [
            "images" => [
                0 => "../img/int/chemise-oxford-à-manches-courtes-Blanc-l_1.jpg",
                1 => "../img/int/chemise-oxford-à-manches-courtes-Blanc-l_2.jpg",
                2 => "../img/int/chemise-oxford-à-manches-courtes-Blanc-l_3.jpg",
            ]
        ];

        $adidas_basket_beige = [
            "images" => [
                0 => "../img/int/adidas-originals-adiease-baskets-beige_1.jpg",
                1 => "../img/int/adidas-originals-adiease-baskets-beige_2.jpg",
                2 => "../img/int/adidas-originals-adiease-baskets-beige_3.jpg",
            ]
        ];

        $baskets_en_toile_blanc = [
            "images" => [
                0 => "../img/int/baskets-en-toile-pointure-large-blanc_1.jpg",
                1 => "../img/int/baskets-en-toile-pointure-large-blanc_2.jpg",
                2 => "../img/int/baskets-en-toile-pointure-large-blanc_3.jpg",
            ]
        ];

        $bracelet_chaine_dore = [
            "images" => [
                0 => "../img/int/bracelet-en-chaine-avec-plaque-dore_1.jpg",
                1 => "../img/int/bracelet-en-chaine-avec-plaque-dore_2.jpg",
                2 => "../img/int/bracelet-en-chaine-avec-plaque-dore_3.jpg",
            ]
        ];

        $jegging_taille_très_haute_noir = [
            "images" => [
                0 => "../img/int/jegging-taille-très-haute-noir_1.jpg",
                1 => "../img/int/jegging-taille-très-haute-noir_2.jpg",
                2 => "../img/int/jegging-taille-très-haute-noir_3.jpg",
            ]
        ];

        $jegging_bleu = [
            "images" => [
                0 => "../img/int/jegging-bleu_1.jpg",
                1 => "../img/int/jegging-bleu_2.jpg",
                2 => "../img/int/jegging-bleu_3.jpg",
            ]
        ];

        $jegging_taille_haute_gris = [
            "images" => [
                0 => "../img/int/jegging-taille-haute-gris_1.jpg",
                1 => "../img/int/jegging-taille-haute-gris_2.jpg",
                2 => "../img/int/jegging-taille-haute-gris_3.jpg",
            ]
        ];

        $jean_taille_haute_super_skinny_bleu = [
            "images" => [
                0 => "../img/int/jean-taille-haute-super-skinny-bleu_1.jpg",
                1 => "../img/int/jean-taille-haute-super-skinny-bleu_2.jpg",
                2 => "../img/int/jean-taille-haute-super-skinny-bleu_3.jpg",
            ]
        ];


        $baskets_chunky_avec_semelle_contrastante_gris = [
            "images" => [
                0 => "../img/int/baskets-chunky-avec-semelle-contrastante-gris_1.jpg",
                1 => "../img/int/baskets-chunky-avec-semelle-contrastante-gris_2.jpg",
                2 => "../img/int/baskets-chunky-avec-semelle-contrastante-gris_3.jpg",
            ]
        ];


        $baskets_chunky_a_empiecements_contrastants = [
            "images" => [
                0 => "../img/int/baskets-chunky-a-empiecements-contrastants_1.jpg",
                1 => "../img/int/baskets-chunky-a-empiecements-contrastants_2.jpg",
                2 => "../img/int/baskets-chunky-a-empiecements-contrastants_3.jpg",
            ]
        ];


        $bracelet_cheville_dore = [
            "images" => [
                0 => "../img/int/lot-de-bracelets-de-cheville-avec-cordon-a-smiley-et-chaîne-dore_1.jpg",
                1 => "../img/int/lot-de-bracelets-de-cheville-avec-cordon-a-smiley-et-chaîne-dore_2.jpg",
                2 => "../img/int/lot-de-bracelets-de-cheville-avec-cordon-a-smiley-et-chaîne-dore_3.jpg",
            ]
        ];


        $collier_avec_pendentif_demi_penny_dore = [
            "images" => [
                0 => "../img/int/collier-avec-pendentif-demi-penny-dore_1.jpg",
                1 => "../img/int/collier-avec-pendentif-demi-penny-dore_2.jpg",
                2 => "../img/int/collier-avec-pendentif-demi-penny-dore_3.jpg",
            ]
        ];


        $lot_de_bracelets_en_cuir_et_tisses_monochrome = [
            "images" => [
                0 => "../img/int/lot-de-bracelets-en-cuir-et-tisses-monochrome_1.jpg",
                1 => "../img/int/lot-de-bracelets-en-cuir-et-tisses-monochrome_2.jpg",
                2 => "../img/int/lot-de-bracelets-en-cuir-et-tisses-monochrome_3.jpg",
            ]
        ];


        $bague_noir_mat = [
            "images" => [
                0 => "../img/int/bague-noir-mat_1.jpg",
                1 => "../img/int/bague-noir-mat_2.jpg",
                2 => "../img/int/bague-noir-mat_3.jpg",
            ]
        ];


        $bague_en_argent_massif_avec_anneau_coulissant = [
            "images" => [
                0 => "../img/int/bague-en-argent-massif-avec-anneau-coulissant_1.jpg",
                1 => "../img/int/bague-en-argent-massif-avec-anneau-coulissant_2.jpg",
                2 => "../img/int/bague-en-argent-massif-avec-anneau-coulissant_3.jpg",
            ]
        ];


        $ceinture_fine_en_cuir_avec_boucle_dore_vintage_marron = [
            "images" => [
                0 => "../img/int/ceinture-fine-en-cuir-avec-boucle-dore-vintage-marron_1.jpg",
                1 => "../img/int/ceinture-fine-en-cuir-avec-boucle-dore-vintage-marron_2.jpg",
                2 => "../img/int/ceinture-fine-en-cuir-avec-boucle-dore-vintage-marron_3.jpg",
            ]
        ];


        $hugo_gionio_ceinture_en_cuir_noir = [
            "images" => [
                0 => "../img/int/hugo-gionio-ceinture-en-cuir-noir_1.jpg",
                1 => "../img/int/hugo-gionio-ceinture-en-cuir-noir_2.jpg",
                2 => "../img/int/hugo-gionio-ceinture-en-cuir-noir_3.jpg",
            ]
        ];


        $casquette_de_baseball_classique_avec_logo_noir = [
            "images" => [
                0 => "../img/int/casquette-de-baseball-classique-avec-logo-noir_1.jpg",
                1 => "../img/int/casquette-de-baseball-classique-avec-logo-noir_2.jpg",
                2 => "../img/int/casquette-de-baseball-classique-avec-logo-noir_3.jpg",
            ]
        ];


        $casquette_de_baseball_avec_broderie_noir = [
            "images" => [
                0 => "../img/int/casquette-de-baseball-avec-broderie-noir_1.jpg",
                1 => "../img/int/casquette-de-baseball-avec-broderie-noir_2.jpg",
                2 => "../img/int/casquette-de-baseball-avec-broderie-noir_3.jpg",
            ]
        ];


        $ess_casquette_blanc = [
            "images" => [
                0 => "../img/int/ess-casquette-blanc_1.jpg",
                1 => "../img/int/ess-casquette-blanc_2.jpg",
                2 => "../img/int/ess-casquette-blanc_3.jpg",
            ]
        ];


        $puma_archive_bb_casquette_imprimee_noir = [
            "images" => [
                0 => "../img/int/puma-archive-bb-casquette-imprimee-noir_1.jpg",
                1 => "../img/int/puma-archive-bb-casquette-imprimee-noir_2.jpg",
                2 => "../img/int/puma-archive-bb-casquette-imprimee-noir_3.jpg",
            ]
        ];


        $tommy_hilfiger_be_bold_chemise_a_rayures_l = [
            "images" => [
                0 => "../img/int/tommy-hilfiger-be-bold-chemise-a-rayures-l_1.jpg",
                1 => "../img/int/tommy-hilfiger-be-bold-chemise-a-rayures-l_2.jpg",
                2 => "../img/int/tommy-hilfiger-be-bold-chemise-a-rayures-l_3.jpg",
            ]
        ];


        $calvin_klein_chemise_decontractee_a_manches_courtes_s = [
            "images" => [
                0 => "../img/int/calvin-klein-chemise-decontractee-a-manches-courtes-s_1.jpg",
                1 => "../img/int/calvin-klein-chemise-decontractee-a-manches-courtes-s_2.jpg",
                2 => "../img/int/calvin-klein-chemise-decontractee-a-manches-courtes-s_3.jpg",
            ]
        ];


        $chemise_oxford_coupe_slim_a_rayures_retro_blanc_s = [
            "images" => [
                0 => "../img/int/chemise-oxford-coupe-slim-a-rayures-retro-blanc-s_1.jpg",
                1 => "../img/int/chemise-oxford-coupe-slim-a-rayures-retro-blanc-s_2.jpg",
                2 => "../img/int/chemise-oxford-coupe-slim-a-rayures-retro-blanc-s_3.jpg",
            ]
        ];


        $chemise_oxford_coupe_slim_avec_col_grand_pere_kaki_s = [
            "images" => [
                0 => "../img/int/chemise-oxford-coupe-slim-avec-col-grand-pere-kaki-s_1.jpg",
                1 => "../img/int/chemise-oxford-coupe-slim-avec-col-grand-pere-kaki-s_2.jpg",
                2 => "../img/int/chemise-oxford-coupe-slim-avec-col-grand-pere-kaki-s_3.jpg",
            ]
        ];


        $chemise_en_jean_stretch_slim_en_tissu_biologique_noir_xl = [
            "images" => [
                0 => "../img/int/chemise-en-jean-stretch-slim-en-tissu-biologique-noir-xl_1.jpg",
                1 => "../img/int/chemise-en-jean-stretch-slim-en-tissu-biologique-noir-xl_2.jpg",
                2 => "../img/int/chemise-en-jean-stretch-slim-en-tissu-biologique-noir-xl_3.jpg",
            ]
        ];


        $chemise_ajustee_en_jean_stretch_biologique_a_delavage_moyen_xl = [
            "images" => [
                0 => "../img/int/chemise-ajustee-en-jean-stretch-biologique-a-delavage-moyen-xl_1.jpg",
                1 => "../img/int/chemise-ajustee-en-jean-stretch-biologique-a-delavage-moyen-xl_2.jpg",
                2 => "../img/int/chemise-ajustee-en-jean-stretch-biologique-a-delavage-moyen-xl_3.jpg",
            ]
        ];


        $chemise_ajustee_a_rayures_rose_xl = [
            "images" => [
                0 => "../img/int/chemise-ajustee-a-rayures-rose-xl_1.jpg",
                1 => "../img/int/chemise-ajustee-a-rayures-rose-xl_2.jpg",
                2 => "../img/int/chemise-ajustee-a-rayures-rose-xl_3.jpg",
            ]
        ];


        $chemise_ajustee_stretch_bleu_marine_a_rayures_moutarde_xs = [
            "images" => [
                0 => "../img/int/chemise-ajustee-stretch-bleu-marine-a-rayures-moutarde-xs_1.jpg",
                1 => "../img/int/chemise-ajustee-stretch-bleu-marine-a-rayures-moutarde-xs_2.jpg",
                2 => "../img/int/chemise-ajustee-stretch-bleu-marine-a-rayures-moutarde-xs_3.jpg",
            ]
        ];


        $chemise_rayee_en_viscose_coupe_classique_rouge_et_noir_xs = [
            "images" => [
                0 => "../img/int/chemise-rayee-en-viscose-coupe-classique-rouge-et-noir-xs_1.jpg",
                1 => "../img/int/chemise-rayee-en-viscose-coupe-classique-rouge-et-noir-xs_2.jpg",
                2 => "../img/int/chemise-rayee-en-viscose-coupe-classique-rouge-et-noir-xs_3.jpg",
            ]
        ];


        $chemise_coupe_classique_a_rayures_retro_bleu_xs = [
            "images" => [
                0 => "../img/int/chemise-coupe-classique-a-rayures-retro-bleu-xs_1.jpg",
                1 => "../img/int/chemise-coupe-classique-a-rayures-retro-bleu-xs_2.jpg",
                2 => "../img/int/chemise-coupe-classique-a-rayures-retro-bleu-xs_3.jpg",
            ]
        ];


        $chemise_coupe_classique_a_rayures_retro_xs = [
            "images" => [
                0 => "../img/int/chemise-coupe-classique-a-rayures-retro-xs_1.jpg",
                1 => "../img/int/chemise-coupe-classique-a-rayures-retro-xs_2.jpg",
                2 => "../img/int/chemise-coupe-classique-a-rayures-retro-xs_3.jpg",
            ]
        ];


        $new_look_chaussures_derby_habillees_en_similicuir_noir = [
            "images" => [
                0 => "../img/int/new-look-chaussures-derby-habillees-en-similicuir-noir_1.jpg",
                1 => "../img/int/new-look-chaussures-derby-habillees-en-similicuir-noir_2.jpg",
                2 => "../img/int/new-look-chaussures-derby-habillees-en-similicuir-noir_3.jpg",
            ]
        ];


        $mocassins_imitation_daim_a_mors_fauve = [
            "images" => [
                0 => "../img/int/mocassins-imitation-daim-a-mors-fauve_1.jpg",
                1 => "../img/int/mocassins-imitation-daim-a-mors-fauve_2.jpg",
                2 => "../img/int/mocassins-imitation-daim-a-mors-fauve_3.jpg",
            ]
        ];


        $mocassins_a_mors_en_suedine_avec_semelle_noire_gris = [
            "images" => [
                0 => "../img/int/mocassins-a-mors-en-suedine-avec-semelle-noire-gris_1.jpg",
                1 => "../img/int/mocassins-a-mors-en-suedine-avec-semelle-noire-gris_2.jpg",
                2 => "../img/int/mocassins-a-mors-en-suedine-avec-semelle-noire-gris_3.jpg",
            ]
        ];


        $mocassins_pointure_large_en_imitation_daim_avec_mors_noir = [
            "images" => [
                0 => "../img/int/mocassins-pointure-large-en-imitation-daim-avec-mors-noir_1.jpg",
                1 => "../img/int/mocassins-pointure-large-en-imitation-daim-avec-mors-noir_2.jpg",
                2 => "../img/int/mocassins-pointure-large-en-imitation-daim-avec-mors-noir_3.jpg",
            ]
        ];


        $jean_slim_stretch_noir = [
            "images" => [
                0 => "../img/int/jean-slim-stretch-noir_1.jpg",
                1 => "../img/int/jean-slim-stretch-noir_2.jpg",
                2 => "../img/int/jean-slim-stretch-noir_3.jpg",
            ]
        ];


        $jean_slim_gris_vintage = [
            "images" => [
                0 => "../img/int/jean-slim-gris-vintage_1.jpg",
                1 => "../img/int/jean-slim-gris-vintage_2.jpg",
                2 => "../img/int/jean-slim-gris-vintage_3.jpg",
            ]
        ];


        $jean_slim_stretch_noir_delave = [
            "images" => [
                0 => "../img/int/jean-slim-stretch-noir-delave_1.jpg",
                1 => "../img/int/jean-slim-stretch-noir-delave_2.jpg",
                2 => "../img/int/jean-slim-stretch-noir-delave_3.jpg",
            ]
        ];


        $montre_classique_noir_et_bronze = [
            "images" => [
                0 => "../img/int/montre-classique-noir-et-bronze_1.jpg",
                1 => "../img/int/montre-classique-noir-et-bronze_2.jpg",
                2 => "../img/int/montre-classique-noir-et-bronze_3.jpg",
            ]
        ];


        $hUGO_montre_en_silicone_noir = [
            "images" => [
                0 => "../img/int/hUGO-montre-en-silicone-noir_1.jpg",
                1 => "../img/int/hUGO-montre-en-silicone-noir_2.jpg",
                2 => "../img/int/hUGO-montre-en-silicone-noir_3.jpg",
            ]
        ];


        $emporio_armani_ar70003_montre_bracelet_noir = [
            "images" => [
                0 => "../img/int/emporio-armani-ar70003-montre-bracelet-noir_1.jpg",
                1 => "../img/int/emporio-armani-ar70003-montre-bracelet-noir_2.jpg",
                2 => "../img/int/emporio-armani-ar70003-montre-bracelet-noir_3.jpg",
            ]
        ];


        $boss_1513762_montre_bracelet_argente = [
            "images" => [
                0 => "../img/int/boss-1513762-montre-bracelet-argente_1.jpg",
                1 => "../img/int/boss-1513762-montre-bracelet-argente_2.jpg",
                2 => "../img/int/boss-1513762-montre-bracelet-argente_3.jpg",
            ]
        ];


        $montre_bracelet_avec_detail_en_relief_argente = [
            "images" => [
                0 => "../img/int/montre-bracelet-avec-detail-en-relief-argente_1.jpg",
                1 => "../img/int/montre-bracelet-avec-detail-en-relief-argente_2.jpg",
                2 => "../img/int/montre-bracelet-avec-detail-en-relief-argente_3.jpg",
            ]
        ];


        $portefeuille_en_cuir_personnalise_avec_initiale_noir = [
            "images" => [
                0 => "../img/int/portefeuille-en-cuir-personnalise-avec-initiale-noir_1.jpg",
                1 => "../img/int/portefeuille-en-cuir-personnalise-avec-initiale-noir_2.jpg",
                2 => "../img/int/portefeuille-en-cuir-personnalise-avec-initiale-noir_3.jpg",
            ]
        ];


        $tommy_hilfiger_eton_petit_portefeuille_en_cuir_a_deux_volets_noir = [
            "images" => [
                0 => "../img/int/tommy-hilfiger-eton-petit-portefeuille-en-cuir-a-deux-volets-noir_1.jpg",
                1 => "../img/int/tommy-hilfiger-eton-petit-portefeuille-en-cuir-a-deux-volets-noir_2.jpg",
                2 => "../img/int/tommy-hilfiger-eton-petit-portefeuille-en-cuir-a-deux-volets-noir_3.jpg",
            ]
        ];


        $ted_baker_zacks_portefeuille_en_cuir_a_deux_volets = [
            "images" => [
                0 => "../img/int/ted-baker-zacks-portefeuille-en-cuir-a-deux-volets_1.jpg",
                1 => "../img/int/ted-baker-zacks-portefeuille-en-cuir-a-deux-volets_2.jpg",
                2 => "../img/int/ted-baker-zacks-portefeuille-en-cuir-a-deux-volets_3.jpg",
            ]
        ];



    	$faker = Faker\Factory::create();

//AUTRES
        // Products::create([
        // 	'titre'       => 'SEA-DWELLER',
        // 	'slug'        => 'sea-dreller',
        // 	'subtitle'    => $faker->sentence(4),
        // 	'description' => $faker->text,
        // 	'price'       => $faker->numberBetween(50, 100) * 100,
        //     'stock'       => 20,
        // 	'image'       => '../img/rolex-sea-dweller.png',
        //     'other_images'=> serialize($images),
        //     'category_id' => 1,
        //     'sous_category_id' => 4,
        //     'other_sous_category_id' => 27,
        // ]);


        // Products::create([
        // 	'titre'       => 'Macbook Pro Mlh42 Touch',
        // 	'slug'        => 'macbook-pro-mlh42-touch',
        // 	'subtitle'    => $faker->sentence(4),
        // 	'description' => $faker->text,
        // 	'price'       => $faker->numberBetween(1000, 1500) * 100,
        //     'stock'       => 20,
        // 	'image'       => '../img/macbook-pro.png',
        //     'category_id' => 3,
        // ]);


        // Products::create([
        // 	'titre'       => 'Iphone xs Max Gold',
        // 	'slug'        => 'iphone-xs-max-gold',
        // 	'subtitle'    => $faker->sentence(4),
        // 	'description' => $faker->text,
        // 	'price'       => $faker->numberBetween(500, 900) * 100,
        //     'stock'       => 20,
        // 	'image'       => '../img/iphone-xs-max-512-gb-gold.png',
        //     'category_id' => 3,
        // ]);


        // Products::create([
        // 	'titre'       => 'LG 4K Tv Led',
        // 	'slug'        => 'lg-4k-tv-led',
        // 	'subtitle'    => $faker->sentence(4),
        // 	'description' => $faker->text,
        // 	'price'       => $faker->numberBetween(1500, 2000) * 100,
        //     'stock'       => 20,
        // 	'image'       => '../img/lg-4k-tv-led.png',
        //     'category_id' => 2,
        // ]);


        // Products::create([
        // 	'titre'       => 'Powerbank Quick Charge',
        // 	'slug'        => 'powerbank-quick-charge',
        // 	'subtitle'    => $faker->sentence(4),
        // 	'description' => $faker->text,
        // 	'price'       => $faker->numberBetween(10, 20) * 100,
        //     'stock'       => 20,
        // 	'image'       => '../img/powerbank-extreme-quick-charge.png',
        //     'category_id' => 4,
        // ]);


        // Products::create([
        // 	'titre'       => 'Blue Sofa Chair',
        // 	'slug'        => 'blue-sofa-chair',
        // 	'subtitle'    => $faker->sentence(4),
        // 	'description' => $faker->text,
        // 	'price'       => $faker->numberBetween(50, 100) * 100,
        //     'stock'       => 20,
        // 	'image'       => '../img/blue-sofa-chair.png',
        //     'category_id' => 1,
        // ]);


        // Products::create([
        //     'titre'       => 'Eames Lounge Chair',
        //     'slug'        => 'eames-lounge-chair',
        //     'subtitle'    => $faker->sentence(4),
        //     'description' => $faker->text,
        //     'price'       => $faker->numberBetween(20, 25) * 100,
        //     'stock'       => 20,
        //     'image'       => '../img/eames-lounge-chair.png',
        //     'category_id' => 1,
        // ]);


        // Products::create([
        //     'titre'       => 'LG Oled 4K Ultra Resolution',
        //     'slug'        => 'lg-oled-4k-ultra-resolution',
        //     'subtitle'    => $faker->sentence(4),
        //     'description' => $faker->text,
        //     'price'       => $faker->numberBetween(1500, 2000) * 100,
        //     'stock'       => 20,
        //     'image'       => '../img/lg-oled-4k-ultra-resolution.png',
        //     'category_id' => 2,
        // ]);


        // Products::create([
        //     'titre'       => 'Macbook Pro Touch Gray',
        //     'slug'        => 'macbook-pro-touch-gray',
        //     'subtitle'    => $faker->sentence(4),
        //     'description' => $faker->text,
        //     'price'       => $faker->numberBetween(1000, 1300) * 100,
        //     'stock'       => 20,
        //     'image'       => '../img/macbook-pro-touch-gray.png',
        //     'category_id' => 3,
        // ]);


        // Products::create([
        //     'titre'       => 'Iphone Xs 64Gb Silver',
        //     'slug'        => 'iphone-xs-64gb-silver',
        //     'subtitle'    => $faker->sentence(4),
        //     'description' => $faker->text,
        //     'price'       => $faker->numberBetween(550, 700) * 100,
        //     'stock'       => 20,
        //     'image'       => '../img/iphone-xs-64gb-silver.png',
        //     'category_id' => 3,
        // ]);


        // Products::create([
        //     'titre'       => 'Power Bank Xiaomi',
        //     'slug'        => 'power-bank-xiaomi',
        //     'subtitle'    => $faker->sentence(4),
        //     'description' => $faker->text,
        //     'price'       => $faker->numberBetween(10, 15) * 100,
        //     'stock'       => 20,
        //     'image'       => '../img/power-bank-xiaomi.png',
        //     'category_id' => 4,
        // ]); 
//#FIN AUTRES 




//HOMMES    
    //VETEMENTS 
        //Chemises  
            Products::create([
                'titre'       => 'Chemise Basin Bleu XL',
                'slug'        => 'chemise-basin-bleu-xl',
                'subtitle'    => $faker->sentence(4),
                'description' => $faker->text,
                'price'       => $faker->numberBetween(10, 20) * 100,
                'stock'       => 20,
                'image'       => '../img/chemise-basin-bleu-xl.png',
                'category_id' => 1,
                'sous_category_id' => 2,
                'other_sous_category_id' => 2,

                'marque_id'  => 1,
                'couleur_id' => 1,
                'taille_id'  => 4,
            ]);


            Products::create([
                'titre'       => 'Chemise à rayures verticales - Bleu XL',
                'slug'        => 'chemise-à-rayures-verticales-bleu-xl',
                'subtitle'    => $faker->sentence(4),
                'description' => $faker->text,
                'price'       => 6238,
                'stock'       => 20,
                'image'       => '../img/chemise-à-rayures-verticales-bleu-xl.jpg',
                'other_images'=> serialize($chemise_blue),
                'category_id' => 1,
                'sous_category_id' => 2,
                'other_sous_category_id' => 2,

                'marque_id'  => 1,
                'couleur_id' => 1,
                'taille_id'  => 5,
            ]);


            Products::create([
                'titre'       => 'Chemise oxford à manches courtes - Blanc L',
                'slug'        => 'chemise-oxford-à-manches-courtes-Blanc-l',
                'subtitle'    => $faker->sentence(4),
                'description' => $faker->text,
                'price'       => 6238,
                'stock'       => 20,
                'image'       => '../img/chemise-oxford-à-manches-courtes-Blanc-l.jpg',
                'other_images'=> serialize($chemise_manche_courte_blanc),
                'category_id' => 1,
                'sous_category_id' => 2,
                'other_sous_category_id' => 2,

                'marque_id'  => 7,
                'couleur_id' => 2,
                'taille_id'  => 4,
            ]); 


            Products::create([
                'titre'       => 'Tommy Hilfiger - Be Bold - Chemise à rayures - L',
                'slug'        => 'tommy-hilfiger-be-bold-chemise-a-rayures-l',
                'subtitle'    => $faker->sentence(4),
                'description' => $faker->text,
                'price'       => 22370,
                'solde'       => 20,
                'stock'       => 20,
                'image'       => '../img/tommy-hilfiger-be-bold-chemise-a-rayures-l.jpg',
                'other_images'=> serialize($tommy_hilfiger_be_bold_chemise_a_rayures_l),
                'category_id' => 1,
                'sous_category_id' => 2,
                'other_sous_category_id' => 2,

                'marque_id'  => 5,
                'couleur_id' => 3,
                'taille_id'  => 4,
            ]); 


            Products::create([
                'titre'       => 'Calvin Klein - Chemise décontractée à manches courtes - S',
                'slug'        => 'calvin-klein-chemise-decontractee-a-manches-courtes-s',
                'subtitle'    => $faker->sentence(4),
                'description' => $faker->text,
                'price'       => 14000,
                'solde'       => 20,
                'stock'       => 20,
                'image'       => '../img/calvin-klein-chemise-decontractee-a-manches-courtes-s.jpg',
                'other_images'=> serialize($calvin_klein_chemise_decontractee_a_manches_courtes_s),
                'category_id' => 1,
                'sous_category_id' => 2,
                'other_sous_category_id' => 2,

                'marque_id'  => 8,
                'couleur_id' => 2,
                'taille_id'  => 2,
            ]); 


            Products::create([
                'titre'       => 'Chemise oxford coupe slim à rayures rétro - Blanc - S',
                'slug'        => 'chemise-oxford-coupe-slim-a-rayures-retro-blanc-s',
                'subtitle'    => $faker->sentence(4),
                'description' => $faker->text,
                'price'       => 5934,
                'solde'       => 20,
                'stock'       => 20,
                'image'       => '../img/chemise-oxford-coupe-slim-a-rayures-retro-blanc-s.jpg',
                'other_images'=> serialize($chemise_oxford_coupe_slim_a_rayures_retro_blanc_s),
                'category_id' => 1,
                'sous_category_id' => 2,
                'other_sous_category_id' => 2,

                'marque_id'  => 1,
                'couleur_id' => 2,
                'taille_id'  => 2,
            ]); 


            Products::create([
                'titre'       => 'Chemise Oxford coupe slim avec col grand-père - Kaki - S',
                'slug'        => 'chemise-oxford-coupe-slim-avec-col-grand-pere-kaki-s',
                'subtitle'    => $faker->sentence(4),
                'description' => $faker->text,
                'price'       => 3803,
                'solde'       => 20,
                'stock'       => 20,
                'image'       => '../img/chemise-oxford-coupe-slim-avec-col-grand-pere-kaki-s.jpg',
                'other_images'=> serialize($chemise_oxford_coupe_slim_avec_col_grand_pere_kaki_s),
                'category_id' => 1,
                'sous_category_id' => 2,
                'other_sous_category_id' => 2,

                'marque_id'  => 1,
                'couleur_id' => 10,
                'taille_id'  => 2,
            ]); 


            Products::create([
                'titre'       => 'Chemise en jean stretch slim en tissu biologique - Noir - XL',
                'slug'        => 'chemise-en-jean-stretch-slim-en-tissu-biologique-noir-xl',
                'subtitle'    => $faker->sentence(4),
                'description' => $faker->text,
                'price'       => 3803,
                'solde'       => 20,
                'stock'       => 20,
                'image'       => '../img/chemise-en-jean-stretch-slim-en-tissu-biologique-noir-xl.jpg',
                'other_images'=> serialize($chemise_en_jean_stretch_slim_en_tissu_biologique_noir_xl),
                'category_id' => 1,
                'sous_category_id' => 2,
                'other_sous_category_id' => 2,

                'marque_id'  => 1,
                'couleur_id' => 6,
                'taille_id'  => 5,
            ]); 


            Products::create([
                'titre'       => 'Chemise ajustée en jean stretch biologique à délavage moyen - XL',
                'slug'        => 'chemise-ajustee-en-jean-stretch-biologique-a-delavage-moyen-xl',
                'subtitle'    => $faker->sentence(4),
                'description' => $faker->text,
                'price'       => 3803,
                'solde'       => 20,
                'stock'       => 20,
                'image'       => '../img/chemise-ajustee-en-jean-stretch-biologique-a-delavage-moyen-xl.jpg',
                'other_images'=> serialize($chemise_ajustee_en_jean_stretch_biologique_a_delavage_moyen_xl),
                'category_id' => 1,
                'sous_category_id' => 2,
                'other_sous_category_id' => 2,

                'marque_id'  => 1,
                'couleur_id' => 1,
                'taille_id'  => 5,
            ]); 


            Products::create([
                'titre'       => 'Chemise ajustée à rayures - Rose - XL',
                'slug'        => 'chemise-ajustee-a-rayures-rose-xl',
                'subtitle'    => $faker->sentence(4),
                'description' => $faker->text,
                'price'       => 3347,
                'solde'       => 20,
                'stock'       => 20,
                'image'       => '../img/chemise-ajustee-a-rayures-rose-xl.jpg',
                'other_images'=> serialize($chemise_ajustee_a_rayures_rose_xl),
                'category_id' => 1,
                'sous_category_id' => 2,
                'other_sous_category_id' => 2,

                'marque_id'  => 1,
                'couleur_id' => 11,
                'taille_id'  => 5,
            ]); 


            Products::create([
                'titre'       => 'Chemise ajustée stretch - Bleu marine à rayures moutarde - XS',
                'slug'        => 'chemise-ajustee-stretch-bleu-marine-a-rayures-moutarde-xs',
                'subtitle'    => $faker->sentence(4),
                'description' => $faker->text,
                'price'       => 3803,
                'solde'       => 20,
                'stock'       => 20,
                'image'       => '../img/chemise-ajustee-stretch-bleu-marine-a-rayures-moutarde-xs.jpg',
                'other_images'=> serialize($chemise_ajustee_stretch_bleu_marine_a_rayures_moutarde_xs),
                'category_id' => 1,
                'sous_category_id' => 2,
                'other_sous_category_id' => 2,

                'marque_id'  => 1,
                'couleur_id' => 3,
                'taille_id'  => 1,
            ]); 


            Products::create([
                'titre'       => 'Chemise rayée en viscose coupe classique - Rouge et noir - XS',
                'slug'        => 'chemise-rayee-en-viscose-coupe-classique-rouge-et-noir-xs',
                'subtitle'    => $faker->sentence(4),
                'description' => $faker->text,
                'price'       => 3803,
                'solde'       => 20,
                'stock'       => 20,
                'image'       => '../img/chemise-rayee-en-viscose-coupe-classique-rouge-et-noir-xs.jpg',
                'other_images'=> serialize($chemise_rayee_en_viscose_coupe_classique_rouge_et_noir_xs),
                'category_id' => 1,
                'sous_category_id' => 2,
                'other_sous_category_id' => 2,

                'marque_id'  => 1,
                'couleur_id' => 12,
                'taille_id'  => 1,
            ]); 


            Products::create([
                'titre'       => 'Chemise coupe classique à rayures rétro - Bleu - XS',
                'slug'        => 'chemise-coupe-classique-a-rayures-retro-bleu-xs',
                'subtitle'    => $faker->sentence(4),
                'description' => $faker->text,
                'price'       => 4716,
                'solde'       => 20,
                'stock'       => 20,
                'image'       => '../img/chemise-coupe-classique-a-rayures-retro-bleu-xs.jpg',
                'other_images'=> serialize($chemise_coupe_classique_a_rayures_retro_bleu_xs),
                'category_id' => 1,
                'sous_category_id' => 2,
                'other_sous_category_id' => 2,

                'marque_id'  => 1,
                'couleur_id' => 1,
                'taille_id'  => 1,
            ]); 


            Products::create([
                'titre'       => 'Chemise coupe classique à rayures rétro - XS',
                'slug'        => 'chemise-coupe-classique-a-rayures-retro-xs',
                'subtitle'    => $faker->sentence(4),
                'description' => $faker->text,
                'price'       => 4716,
                'solde'       => 20,
                'stock'       => 20,
                'image'       => '../img/chemise-coupe-classique-a-rayures-retro-xs.jpg',
                'other_images'=> serialize($chemise_coupe_classique_a_rayures_retro_xs),
                'category_id' => 1,
                'sous_category_id' => 2,
                'other_sous_category_id' => 2,

                'marque_id'  => 1,
                'couleur_id' => 3,
                'taille_id'  => 1,
            ]); 
        //#FIn Chemises


        //Jeans 
            Products::create([
                'titre'       => 'Jean slim stretch - Noir',
                'slug'        => 'jean-slim-stretch-noir',
                'subtitle'    => $faker->sentence(4),
                'description' => $faker->text,
                'price'       => 2999,
                'solde'       => 20,
                'stock'       => 20,
                'image'       => '../img/jean-slim-stretch-noir.jpg',
                'other_images'=> serialize($jean_slim_stretch_noir),
                'category_id' => 1,
                'sous_category_id' => 2,
                'other_sous_category_id' => 5,

                'marque_id'  => 1,
                'couleur_id' => 6,
            ]); 

            Products::create([
                'titre'       => 'Jean slim - Gris vintage',
                'slug'        => 'jean-slim-gris-vintage',
                'subtitle'    => $faker->sentence(4),
                'description' => $faker->text,
                'price'       => 2999,
                'solde'       => 20,
                'stock'       => 20,
                'image'       => '../img/jean-slim-gris-vintage.jpg',
                'other_images'=> serialize($jean_slim_gris_vintage),
                'category_id' => 1,
                'sous_category_id' => 2,
                'other_sous_category_id' => 5,

                'marque_id'  => 1,
                'couleur_id' => 7,
            ]); 

            Products::create([
                'titre'       => 'Jean slim stretch - Noir délavé',
                'slug'        => 'jean-slim-stretch-noir-delave',
                'subtitle'    => $faker->sentence(4),
                'description' => $faker->text,
                'price'       => 2999,
                'solde'       => 20,
                'stock'       => 20,
                'image'       => '../img/jean-slim-stretch-noir-delave.jpg',
                'other_images'=> serialize($jean_slim_stretch_noir_delave),
                'category_id' => 1,
                'sous_category_id' => 2,
                'other_sous_category_id' => 5,

                'marque_id'  => 1,
                'couleur_id' => 6,
            ]); 
        //#FIn Jeans        
    //#FIN VETEMENTS 
        
   
    //CHAUSSURES 
        //BASKETS  
            Products::create([
                'titre'       => 'Adidas Originals - Adiease Baskets - Beige',
                'slug'        => 'adidas-originals-adiease-baskets-beige',
                'subtitle'    => $faker->sentence(4),
                'description' => $faker->text,
                'price'       => 8299,
                'stock'       => 20,
                'image'       => '../img/adidas-originals-adiease-baskets-beige.jpg',
                'other_images'=> serialize($adidas_basket_beige),
                'category_id' => 1,
                'sous_category_id' => 3,
                'other_sous_category_id' => 15,

                'marque_id'  => 2,
                'couleur_id' => 4,
                'taille_id'  => 7,
            ]);
            

            Products::create([
                'titre'       => 'Baskets en toile pointure large - Blanc',
                'slug'        => 'baskets-en-toile-pointure-large-blanc',
                'subtitle'    => $faker->sentence(4),
                'description' => $faker->text,
                'price'       => 8299,
                'stock'       => 20,
                'image'       => '../img/baskets-en-toile-pointure-large-blanc.jpg',
                'other_images'=> serialize($baskets_en_toile_blanc),
                'category_id' => 1,
                'sous_category_id' => 3,
                'other_sous_category_id' => 15,

                'marque_id'  => 1,
                'couleur_id' => 2,
                'taille_id'  => 8,
            ]);
            

            Products::create([
                'titre'       => 'Baskets chunky avec semelle contrastante - Gris',
                'slug'        => 'baskets-chunky-avec-semelle-contrastante-gris',
                'subtitle'    => $faker->sentence(4),
                'description' => $faker->text,
                'price'       => 2999,
                'stock'       => 20,
                'image'       => '../img/baskets-chunky-avec-semelle-contrastante-gris.jpg',
                'other_images'=> serialize($baskets_chunky_avec_semelle_contrastante_gris),
                'category_id' => 1,
                'sous_category_id' => 3,
                'other_sous_category_id' => 15,

                'marque_id'  => 3,
                'couleur_id' => 7,
                'taille_id'  => 9,
            ]);
            

            Products::create([
                'titre'       => 'Baskets chunky à empiècements contrastants',
                'slug'        => 'baskets-chunky-a-empiecements-contrastants',
                'subtitle'    => $faker->sentence(4),
                'description' => $faker->text,
                'price'       => 4999,
                'stock'       => 20,
                'image'       => '../img/baskets-chunky-a-empiecements-contrastants.jpg',
                'other_images'=> serialize($baskets_chunky_a_empiecements_contrastants),
                'category_id' => 1,
                'sous_category_id' => 3,
                'other_sous_category_id' => 15,

                'marque_id'  => 3,
                'couleur_id' => 3,
                'taille_id'  => 10,
            ]);
        //BASKETS  

        //Chaussures  
            Products::create([
                'titre'       => 'New Look - Chaussures derby habillées en similicuir - Noir',
                'slug'        => 'new-look-chaussures-derby-habillees-en-similicuir-noir',
                'subtitle'    => $faker->sentence(4),
                'description' => $faker->text,
                'price'       => 2599,
                'solde'       => 20,
                'stock'       => 20,
                'image'       => '../img/new-look-chaussures-derby-habillees-en-similicuir-noir.jpg',
                'other_images'=> serialize($new_look_chaussures_derby_habillees_en_similicuir_noir),
                'category_id' => 1,
                'sous_category_id' => 3,
                'other_sous_category_id' => 16,

                'marque_id'  => 1,
                'couleur_id' => 6,
                'taille_id'  => 8,
            ]);
        //#Fin Chaussures   

        //Mocassins  
            Products::create([
                'titre'       => 'Mocassins imitation daim à mors - Fauve',
                'slug'        => 'mocassins-imitation-daim-a-mors-fauve',
                'subtitle'    => $faker->sentence(4),
                'description' => $faker->text,
                'price'       => 3499,
                'solde'       => 20,
                'stock'       => 20,
                'image'       => '../img/mocassins-imitation-daim-a-mors-fauve.jpg',
                'other_images'=> serialize($mocassins_imitation_daim_a_mors_fauve),
                'category_id' => 1,
                'sous_category_id' => 3,
                'other_sous_category_id' => 17,

                'marque_id'  => 1,
                'couleur_id' => 13,
                'taille_id'  => 8,
            ]);

            Products::create([
                'titre'       => 'Mocassins à mors en suédine avec semelle noire - Gris',
                'slug'        => 'mocassins-a-mors-en-suedine-avec-semelle-noire-gris',
                'subtitle'    => $faker->sentence(4),
                'description' => $faker->text,
                'price'       => 3499,
                'solde'       => 20,
                'stock'       => 20,
                'image'       => '../img/mocassins-a-mors-en-suedine-avec-semelle-noire-gris.jpg',
                'other_images'=> serialize($mocassins_a_mors_en_suedine_avec_semelle_noire_gris),
                'category_id' => 1,
                'sous_category_id' => 3,
                'other_sous_category_id' => 17,

                'marque_id'  => 1,
                'couleur_id' => 7,
                'taille_id'  => 9,
            ]);

            Products::create([
                'titre'       => 'Mocassins pointure large en imitation daim avec mors - Noir',
                'slug'        => 'mocassins-pointure-large-en-imitation-daim-avec-mors-noir',
                'subtitle'    => $faker->sentence(4),
                'description' => $faker->text,
                'price'       => 3499,
                'solde'       => 20,
                'stock'       => 20,
                'image'       => '../img/mocassins-pointure-large-en-imitation-daim-avec-mors-noir.jpg',
                'other_images'=> serialize($mocassins_pointure_large_en_imitation_daim_avec_mors_noir),
                'category_id' => 1,
                'sous_category_id' => 3,
                'other_sous_category_id' => 17,

                'marque_id'  => 1,
                'couleur_id' => 6,
                'taille_id'  => 10,
            ]);
        //#Fin Mocassins  
    //#Fin CHAUSSURES 
        

    //ACCESSOIRES 
        //#FIN BIJOUX  
            Products::create([
                'titre'       => 'Bracelet en chaîne avec plaque - Doré',
                'slug'        => 'bracelet-en-chaine-avec-plaque-dore',
                'subtitle'    => $faker->sentence(4),
                'description' => $faker->text,
                'price'       => 1149,
                'stock'       => 20,
                'image'       => '../img/bracelet-en-chaine-avec-plaque-dore.jpg',
                'other_images'=> serialize($bracelet_chaine_dore),
                'category_id' => 1,
                'sous_category_id' => 4,
                'other_sous_category_id' => 21,

                'marque_id'  => 1,
                'couleur_id' => 5,
            ]);  

            Products::create([
                'titre'       => 'Lot de bracelets de cheville avec cordon à smiley et chaîne - Doré',
                'slug'        => 'lot-de-bracelets-de-cheville-avec-cordon-a-smiley-et-chaîne-dore',
                'subtitle'    => $faker->sentence(4),
                'description' => $faker->text,
                'price'       => 1149,
                'stock'       => 20,
                'image'       => '../img/lot-de-bracelets-de-cheville-avec-cordon-a-smiley-et-chaîne-dore.jpg',
                'other_images'=> serialize($bracelet_cheville_dore),
                'category_id' => 1,
                'sous_category_id' => 4,
                'other_sous_category_id' => 21,

                'marque_id'  => 1,
                'couleur_id' => 3,
            ]);   

            Products::create([
                'titre'       => 'Collier avec pendentif demi-penny - Doré',
                'slug'        => 'collier-avec-pendentif-demi-penny-dore',
                'subtitle'    => $faker->sentence(4),
                'description' => $faker->text,
                'price'       => 1149,
                'stock'       => 20,
                'image'       => '../img/collier-avec-pendentif-demi-penny-dore.jpg',
                'other_images'=> serialize($collier_avec_pendentif_demi_penny_dore),
                'category_id' => 1,
                'sous_category_id' => 4,
                'other_sous_category_id' => 21,

                'marque_id'  => 1,
                'couleur_id' => 5,
            ]);  

            Products::create([
                'titre'       => 'Lot de bracelets en cuir et tissés - Monochrome',
                'slug'        => 'lot-de-bracelets-en-cuir-et-tisses-monochrome',
                'subtitle'    => $faker->sentence(4),
                'description' => $faker->text,
                'price'       => 1149,
                'stock'       => 20,
                'image'       => '../img/lot-de-bracelets-en-cuir-et-tisses-monochrome.jpg',
                'other_images'=> serialize($lot_de_bracelets_en_cuir_et_tisses_monochrome),
                'category_id' => 1,
                'sous_category_id' => 4,
                'other_sous_category_id' => 21,

                'marque_id'  => 1,
                'couleur_id' => 6,
            ]);   

            Products::create([
                'titre'       => 'Bague - Noir mat',
                'slug'        => 'bague-noir-mat',
                'subtitle'    => $faker->sentence(4),
                'description' => $faker->text,
                'price'       => 699,
                'stock'       => 20,
                'image'       => '../img/bague-noir-mat.jpg',
                'other_images'=> serialize($bague_noir_mat),
                'category_id' => 1,
                'sous_category_id' => 4,
                'other_sous_category_id' => 21,

                'marque_id'  => 1,
                'couleur_id' => 6,
            ]);  

            Products::create([
                'titre'       => 'Bague en argent massif avec anneau coulissant',
                'slug'        => 'bague-en-argent-massif-avec-anneau-coulissant',
                'subtitle'    => $faker->sentence(4),
                'description' => $faker->text,
                'price'       => 5599,
                'stock'       => 20,
                'image'       => '../img/bague-en-argent-massif-avec-anneau-coulissant.jpg',
                'other_images'=> serialize($bague_en_argent_massif_avec_anneau_coulissant),
                'category_id' => 1,
                'sous_category_id' => 4,
                'other_sous_category_id' => 21,

                'marque_id'  => 1,
                'couleur_id' => 8,
            ]);   
        //#FIN BIJOUX   

        //CEINTURES  
            Products::create([
                'titre'       => 'Ceinture fine en cuir avec boucle doré vintage - Marron',
                'slug'        => 'ceinture-fine-en-cuir-avec-boucle-dore-vintage-marron',
                'subtitle'    => $faker->sentence(4),
                'description' => $faker->text,
                'price'       => 1999,
                'stock'       => 20,
                'image'       => '../img/ceinture-fine-en-cuir-avec-boucle-dore-vintage-marron.jpg',
                'other_images'=> serialize($ceinture_fine_en_cuir_avec_boucle_dore_vintage_marron),
                'category_id' => 1,
                'sous_category_id' => 4,
                'other_sous_category_id' => 23,

                'marque_id'  => 1,
                'couleur_id' => 9,
            ]);      

            Products::create([
                'titre'       => 'HUGO - Gionio - Ceinture en cuir - Noir',
                'slug'        => 'hugo-gionio-ceinture-en-cuir-noir',
                'subtitle'    => $faker->sentence(4),
                'description' => $faker->text,
                'price'       => 4999,
                'stock'       => 20,
                'image'       => '../img/hugo-gionio-ceinture-en-cuir-noir.jpg',
                'other_images'=> serialize($hugo_gionio_ceinture_en_cuir_noir),
                'category_id' => 1,
                'sous_category_id' => 4,
                'other_sous_category_id' => 23,

                'marque_id'  => 4,
                'couleur_id' => 6,
            ]);   
        //#FIN CEINTURES   

        //CASQUETTES & CHAPEAUX  
            Products::create([
                'titre'       => 'Casquette de baseball classique avec logo - Noir',
                'slug'        => 'casquette-de-baseball-classique-avec-logo-noir',
                'subtitle'    => $faker->sentence(4),
                'description' => $faker->text,
                'price'       => 2499,
                'solde'       => 50,
                'stock'       => 20,
                'image'       => '../img/casquette-de-baseball-classique-avec-logo-noir.jpg',
                'other_images'=> serialize($casquette_de_baseball_classique_avec_logo_noir),
                'category_id' => 1,
                'sous_category_id' => 4,
                'other_sous_category_id' => 22,

                'marque_id'  => 5,
                'couleur_id' => 6,
            ]);       

            Products::create([
                'titre'       => 'Casquette de baseball avec broderie - Noir',
                'slug'        => 'casquette-de-baseball-avec-broderie-noir',
                'subtitle'    => $faker->sentence(4),
                'description' => $faker->text,
                'price'       => 1399,
                'solde'       => 50,
                'stock'       => 20,
                'image'       => '../img/casquette-de-baseball-avec-broderie-noir.jpg',
                'other_images'=> serialize($casquette_de_baseball_avec_broderie_noir),
                'category_id' => 1,
                'sous_category_id' => 4,
                'other_sous_category_id' => 22,

                'marque_id'  => 1,
                'couleur_id' => 6,
            ]);       

            Products::create([
                'titre'       => 'Puma - Ess - Casquette - Blanc',
                'slug'        => 'ess-casquette-blanc',
                'subtitle'    => $faker->sentence(4),
                'description' => $faker->text,
                'price'       => 900,
                'solde'       => 50,
                'stock'       => 20,
                'image'       => '../img/ess-casquette-blanc.jpg',
                'other_images'=> serialize($ess_casquette_blanc),
                'category_id' => 1,
                'sous_category_id' => 4,
                'other_sous_category_id' => 22,

                'marque_id'  => 6,
                'couleur_id' => 2,
            ]);        

            Products::create([
                'titre'       => 'Puma - Archive BB - Casquette imprimée - Noir',
                'slug'        => 'puma-archive-bb-casquette-imprimee-noir',
                'subtitle'    => $faker->sentence(4),
                'description' => $faker->text,
                'price'       => 1500,
                'solde'       => 50,
                'stock'       => 20,
                'image'       => '../img/puma-archive-bb-casquette-imprimee-noir.jpg',
                'other_images'=> serialize($puma_archive_bb_casquette_imprimee_noir),
                'category_id' => 1,
                'sous_category_id' => 4,
                'other_sous_category_id' => 22,

                'marque_id'  => 6,
                'couleur_id' => 6,
            ]);                 
        //#FIN CASQUETTES & CHAPEAUX     

        //Montres  
            Products::create([
                'titre'       => 'Montre classique - Noir et bronze',
                'slug'        => 'montre-classique-noir-et-bronze',
                'subtitle'    => $faker->sentence(4),
                'description' => $faker->text,
                'price'       => 3099,
                'stock'       => 20,
                'image'       => '../img/montre-classique-noir-et-bronze.jpg',
                'other_images'=> serialize($montre_classique_noir_et_bronze),
                'category_id' => 1,
                'sous_category_id' => 4,
                'other_sous_category_id' => 27,

                'marque_id'  => 1,
                'couleur_id' => 6,
            ]); 


            Products::create([
                'titre'       => 'HUGO - Montre en silicone - Noir',
                'slug'        => 'hUGO-montre-en-silicone-noir',
                'subtitle'    => $faker->sentence(4),
                'description' => $faker->text,
                'price'       => 15499,
                'stock'       => 20,
                'image'       => '../img/hUGO-montre-en-silicone-noir.jpg',
                'other_images'=> serialize($hUGO_montre_en_silicone_noir),
                'category_id' => 1,
                'sous_category_id' => 4,
                'other_sous_category_id' => 27,

                'marque_id'  => 4,
                'couleur_id' => 6,
            ]); 


            Products::create([
                'titre'       => 'Emporio Armani - AR70003 - Montre-bracelet - Noir',
                'slug'        => 'emporio-armani-ar70003-montre-bracelet-noir',
                'subtitle'    => $faker->sentence(4),
                'description' => $faker->text,
                'price'       => 48499,
                'stock'       => 20,
                'image'       => '../img/emporio-armani-ar70003-montre-bracelet-noir.jpg',
                'other_images'=> serialize($emporio_armani_ar70003_montre_bracelet_noir),
                'category_id' => 1,
                'sous_category_id' => 4,
                'other_sous_category_id' => 27,

                'marque_id'  => 9,
                'couleur_id' => 6,
            ]); 


            Products::create([
                'titre'       => 'BOSS - 1513762 - Montre-bracelet - Argenté',
                'slug'        => 'boss-1513762-montre-bracelet-argente',
                'subtitle'    => $faker->sentence(4),
                'description' => $faker->text,
                'price'       => 38699,
                'solde'       => 20,
                'stock'       => 20,
                'image'       => '../img/boss-1513762-montre-bracelet-argente.jpg',
                'other_images'=> serialize($boss_1513762_montre_bracelet_argente),
                'category_id' => 1,
                'sous_category_id' => 4,
                'other_sous_category_id' => 27,

                'marque_id'  => 10,
                'couleur_id' => 8,
            ]); 


            Products::create([
                'titre'       => 'Montre-bracelet avec détail en relief - Argenté',
                'slug'        => 'montre-bracelet-avec-detail-en-relief-argente',
                'subtitle'    => $faker->sentence(4),
                'description' => $faker->text,
                'price'       => 4199,
                'solde'       => 20,
                'stock'       => 20,
                'image'       => '../img/montre-bracelet-avec-detail-en-relief-argente.jpg',
                'other_images'=> serialize($montre_bracelet_avec_detail_en_relief_argente),
                'category_id' => 1,
                'sous_category_id' => 4,
                'other_sous_category_id' => 27,

                'marque_id'  => 1,
                'couleur_id' => 8,
            ]); 
        //#FIN Montres    

        //Portefeuille   
            Products::create([
                'titre'       => 'Portefeuille en cuir personnalisé avec initiale « D » - Noir',
                'slug'        => 'portefeuille-en-cuir-personnalise-avec-initiale-noir',
                'subtitle'    => $faker->sentence(4),
                'description' => $faker->text,
                'price'       => 1999,
                'stock'       => 20,
                'image'       => '../img/portefeuille-en-cuir-personnalise-avec-initiale-noir.jpg',
                'other_images'=> serialize($portefeuille_en_cuir_personnalise_avec_initiale_noir),
                'category_id' => 1,
                'sous_category_id' => 4,
                'other_sous_category_id' => 28,

                'marque_id'  => 1,
                'couleur_id' => 6,
            ]); 


            Products::create([
                'titre'       => 'Tommy Hilfiger - Eton - Petit portefeuille en cuir à deux volets - Noir',
                'slug'        => 'tommy-hilfiger-eton-petit-portefeuille-en-cuir-a-deux-volets-noir',
                'subtitle'    => $faker->sentence(4),
                'description' => $faker->text,
                'price'       => 4999,
                'stock'       => 20,
                'image'       => '../img/tommy-hilfiger-eton-petit-portefeuille-en-cuir-a-deux-volets-noir.jpg',
                'other_images'=> serialize($tommy_hilfiger_eton_petit_portefeuille_en_cuir_a_deux_volets_noir),
                'category_id' => 1,
                'sous_category_id' => 4,
                'other_sous_category_id' => 28,

                'marque_id'  => 5,
                'couleur_id' => 6,
            ]); 


            Products::create([
                'titre'       => 'Ted Baker - Zacks - Portefeuille en cuir à deux volets',
                'slug'        => 'ted-baker-zacks-portefeuille-en-cuir-a-deux-volets',
                'subtitle'    => $faker->sentence(4),
                'description' => $faker->text,
                'price'       => 3899,
                'stock'       => 20,
                'image'       => '../img/ted-baker-zacks-portefeuille-en-cuir-a-deux-volets.jpg',
                'other_images'=> serialize($ted_baker_zacks_portefeuille_en_cuir_a_deux_volets),
                'category_id' => 1,
                'sous_category_id' => 4,
                'other_sous_category_id' => 28,

                'marque_id'  => 11,
                'couleur_id' => 6,
            ]); 
        //#FIN Portefeuille     
    //#FIN ACCESSOIRES    
//#Fin HOMMES 






        
//FEMMES      
    //VETEMENTS
        Products::create([
            'titre'       => 'Jegging taille très haute - Noir',
            'slug'        => 'jegging-taille-très-haute-noir',
            'subtitle'    => $faker->sentence(4),
            'description' => $faker->text,
            'price'       => 1249,
            'solde'       => 50,
            'stock'       => 20,
            'image'       => '../img/jegging-taille-très-haute-noir.jpg',
            'other_images'=> serialize($jegging_taille_très_haute_noir),
            'category_id' => 2,
            'sous_category_id' => 6,
            'other_sous_category_id' => 32,

            'marque_id'  => 1,
            'couleur_id' => 6,
        ]);

        Products::create([
            'titre'       => 'Jegging - Bleu',
            'slug'        => 'jegging-bleu',
            'subtitle'    => $faker->sentence(4),
            'description' => $faker->text,
            'price'       => 1249,
            'solde'       => 50,
            'stock'       => 20,
            'image'       => '../img/jegging-bleu.jpg',
            'other_images'=> serialize($jegging_bleu),
            'category_id' => 2,
            'sous_category_id' => 6,
            'other_sous_category_id' => 32,

            'marque_id'  => 1,
            'couleur_id' => 1,
        ]);

        Products::create([
            'titre'       => 'Jegging taille haute - Gris',
            'slug'        => 'jegging-taille-haute-gris',
            'subtitle'    => $faker->sentence(4),
            'description' => $faker->text,
            'price'       => 1299,
            'solde'       => 50,
            'stock'       => 20,
            'image'       => '../img/jegging-taille-haute-gris.jpg',
            'other_images'=> serialize($jegging_taille_haute_gris),
            'category_id' => 2,
            'sous_category_id' => 6,
            'other_sous_category_id' => 32,

            'marque_id'  => 1,
            'couleur_id' => 7,
        ]);

        Products::create([
            'titre'       => 'Jean taille haute super skinny - Bleu',
            'slug'        => 'jean-taille-haute-super-skinny-bleu',
            'subtitle'    => $faker->sentence(4),
            'description' => $faker->text,
            'price'       => 1699,
            'stock'       => 20,
            'image'       => '../img/jean-taille-haute-super-skinny-bleu.jpg',
            'other_images'=> serialize($jean_taille_haute_super_skinny_bleu),
            'category_id' => 2,
            'sous_category_id' => 6,
            'other_sous_category_id' => 32,

            'marque_id'  => 1,
            'couleur_id' => 1,
        ]);  
    //#Fin VETEMENTS    
//#FIN FEMMES
    }
}
