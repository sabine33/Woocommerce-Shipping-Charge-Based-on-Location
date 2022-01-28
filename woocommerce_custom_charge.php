<?php
/**
 * @package Custom_Charge
 * @version 1.0.0
 */
/*
Plugin Name: Woocommerce custom charge plugin
Plugin URI: https://sabinkhanal.com.np
Description: Custom shipping rate based on address.
Author: Sabin Khanal
Version: 1.0.0
Author URI: http://sabinkhanal.com.np/
 */
//NEPAL STANDARD RATES
const ADDRESS_RATES = array(
    0 => array(
        'sno' => '1',
        'location' => 'Lahan',
        'rate' => '200',
    ),
    1 => array(
        'sno' => '2',
        'location' => 'Mirchaya',
        'rate' => '225',
    ),
    2 => array(
        'sno' => '3',
        'location' => 'Golbazzar',
        'rate' => '225',
    ),
    3 => array(
        'sno' => '4',
        'location' => 'Gaighat',
        'rate' => '250',
    ),
    4 => array(
        'sno' => '5',
        'location' => 'Rajbiraj',
        'rate' => '200',
    ),
    5 => array(
        'sno' => '6',
        'location' => 'Janakpur',
        'rate' => '200',
    ),
    6 => array(
        'sno' => '7',
        'location' => 'Mahendranagar',
        'rate' => '200',
    ),
    7 => array(
        'sno' => '8',
        'location' => 'Itahari',
        'rate' => '150',
    ),
    8 => array(
        'sno' => '9',
        'location' => 'Inarwa',
        'rate' => '200',
    ),
    9 => array(
        'sno' => '10',
        'location' => 'Jhumka',
        'rate' => '200',
    ),
    10 => array(
        'sno' => '11',
        'location' => 'Belbari',
        'rate' => '200',
    ),
    11 => array(
        'sno' => '12',
        'location' => 'Biratchwok',
        'rate' => '200',
    ),
    12 => array(
        'sno' => '13',
        'location' => 'Duhabi',
        'rate' => '200',
    ),
    13 => array(
        'sno' => '14',
        'location' => 'Damak',
        'rate' => '200',
    ),
    14 => array(
        'sno' => '15',
        'location' => 'Urlabari',
        'rate' => '200',
    ),
    15 => array(
        'sno' => '16',
        'location' => 'Pathri',
        'rate' => '200',
    ),
    16 => array(
        'sno' => '17',
        'location' => 'Gauradaha',
        'rate' => '225',
    ),
    17 => array(
        'sno' => '18',
        'location' => 'Gaurigunj',
        'rate' => '225',
    ),
    18 => array(
        'sno' => '20',
        'location' => 'Birtamode',
        'rate' => '200',
    ),
    19 => array(
        'sno' => '21',
        'location' => 'Surunga',
        'rate' => '225',
    ),
    20 => array(
        'sno' => '22',
        'location' => 'Bhadrapur',
        'rate' => '200',
    ),
    21 => array(
        'sno' => '23',
        'location' => 'Chandragadi',
        'rate' => '200',
    ),
    22 => array(
        'sno' => '24',
        'location' => 'Charpane',
        'rate' => '200',
    ),
    23 => array(
        'sno' => '25',
        'location' => 'Budhabare',
        'rate' => '225',
    ),
    24 => array(
        'sno' => '26',
        'location' => 'Kakarvita',
        'rate' => '225',
    ),
    25 => array(
        'sno' => '27',
        'location' => 'Dudhe',
        'rate' => '200',
    ),
    26 => array(
        'sno' => '28',
        'location' => 'Dharan',
        'rate' => '200',
    ),
    27 => array(
        'sno' => '29',
        'location' => 'Panbari',
        'rate' => '200',
    ),
    28 => array(
        'sno' => '30',
        'location' => 'Dhankuta',
        'rate' => '300',
    ),
    29 => array(
        'sno' => '31',
        'location' => 'Dhangadi',
        'rate' => '250',
    ),
    30 => array(
        'sno' => '32',
        'location' => 'Kailali',
        'rate' => '250',
    ),
    31 => array(
        'sno' => '33',
        'location' => 'Lamki',
        'rate' => '250',
    ),
    32 => array(
        'sno' => '34',
        'location' => 'Tikapur',
        'rate' => '250',
    ),
    33 => array(
        'sno' => '35',
        'location' => 'Attariya',
        'rate' => '250',
    ),
    34 => array(
        'sno' => '36',
        'location' => 'Mahendranagar',
        'rate' => '250',
    ),
    35 => array(
        'sno' => '37',
        'location' => 'Biratnagar',
        'rate' => '150',
    ),
    36 => array(
        'sno' => '38',
        'location' => 'Pokhara',
        'rate' => '150',
    ),
    37 => array(
        'sno' => '39',
        'location' => 'Syangjha',
        'rate' => '250',
    ),
    38 => array(
        'sno' => '40',
        'location' => 'Birgunj',
        'rate' => '200',
    ),
    39 => array(
        'sno' => '41',
        'location' => 'Simara',
        'rate' => '225',
    ),
    40 => array(
        'sno' => '42',
        'location' => 'Nijgadh',
        'rate' => '300',
    ),
    41 => array(
        'sno' => '43',
        'location' => 'Patlaiya',
        'rate' => '250',
    ),
    42 => array(
        'sno' => '44',
        'location' => 'Kalaiya',
        'rate' => '225',
    ),
    43 => array(
        'sno' => '45',
        'location' => 'jeetpur',
        'rate' => '225',
    ),
    44 => array(
        'sno' => '46',
        'location' => 'Chitwan',
        'rate' => '150',
    ),
    45 => array(
        'sno' => '47',
        'location' => 'Narayanghat',
        'rate' => '150',
    ),
    46 => array(
        'sno' => '48',
        'location' => 'Bharatpur',
        'rate' => '200',
    ),
    47 => array(
        'sno' => '49',
        'location' => 'Tandi',
        'rate' => '200',
    ),
    48 => array(
        'sno' => '50',
        'location' => 'Parsa',
        'rate' => '200',
    ),
    49 => array(
        'sno' => '51',
        'location' => 'Gaindakot',
        'rate' => '225',
    ),
    50 => array(
        'sno' => '52',
        'location' => 'Kawasoti',
        'rate' => '225',
    ),
    51 => array(
        'sno' => '53',
        'location' => 'Butwal',
        'rate' => '150',
    ),
    52 => array(
        'sno' => '54',
        'location' => 'Sunwal',
        'rate' => '250',
    ),
    53 => array(
        'sno' => '55',
        'location' => 'Bardhaghat',
        'rate' => '250',
    ),
    54 => array(
        'sno' => '56',
        'location' => 'Nawalparasi',
        'rate' => '250',
    ),
    55 => array(
        'sno' => '57',
        'location' => 'Sainamaina',
        'rate' => '250',
    ),
    56 => array(
        'sno' => '58',
        'location' => 'Bhairawa',
        'rate' => '150',
    ),
    57 => array(
        'sno' => '59',
        'location' => 'Nepalgunj',
        'rate' => '250',
    ),
    58 => array(
        'sno' => '60',
        'location' => 'Bardiya',
        'rate' => '250',
    ),
    59 => array(
        'sno' => '61',
        'location' => 'Gulleriya',
        'rate' => '250',
    ),
    60 => array(
        'sno' => '62',
        'location' => 'Kohalpur',
        'rate' => '250',
    ),
    61 => array(
        'sno' => '64',
        'location' => 'Damauli',
        'rate' => '250',
    ),
    62 => array(
        'sno' => '65',
        'location' => 'Dumre',
        'rate' => '250',
    ),
    63 => array(
        'sno' => '66',
        'location' => 'Khaireni',
        'rate' => '250',
    ),
    64 => array(
        'sno' => '67',
        'location' => 'Surkhet',
        'rate' => '250',
    ),
    65 => array(
        'sno' => '69',
        'location' => 'Hetauda',
        'rate' => '150',
    ),
    66 => array(
        'sno' => '70',
        'location' => 'Kapilvastu',
        'rate' => '250',
    ),
    67 => array(
        'sno' => '71',
        'location' => 'Chandrauta',
        'rate' => '250',
    ),
    68 => array(
        'sno' => '72',
        'location' => 'Jeetpur',
        'rate' => '250',
    ),
    69 => array(
        'sno' => '73',
        'location' => 'Dang',
        'rate' => '250',
    ),
    70 => array(
        'sno' => '74',
        'location' => 'Ghorahi',
        'rate' => '250',
    ),
    71 => array(
        'sno' => '75',
        'location' => 'Tulsipur',
        'rate' => '250',
    ),
    72 => array(
        'sno' => '76',
        'location' => 'Lamahi',
        'rate' => '250',
    ),
    73 => array(
        'sno' => '77',
        'location' => 'Lalbandi',
        'rate' => '225',
    ),
    74 => array(
        'sno' => '78',
        'location' => 'Naya bazar',
        'rate' => '225',
    ),
    75 => array(
        'sno' => '79',
        'location' => 'Harion',
        'rate' => '225',
    ),
    76 => array(
        'sno' => '80',
        'location' => 'Bagmati',
        'rate' => '225',
    ),
    77 => array(
        'sno' => '81',
        'location' => 'Sinduli',
        'rate' => '250',
    ),
    78 => array(
        'sno' => '82',
        'location' => 'Bardibaas',
        'rate' => '225',
    ),
    79 => array(
        'sno' => '83',
        'location' => 'Dhalkebar',
        'rate' => '200',
    ),
    80 => array(
        'sno' => '84',
        'location' => 'Lalgad',
        'rate' => '225',
    ),
    81 => array(
        'sno' => '85',
        'location' => 'Panauti',
        'rate' => '200',
    ),
    82 => array(
        'sno' => '86',
        'location' => 'Banepa',
        'rate' => '200',
    ),
    83 => array(
        'sno' => '83',
        'location' => 'Kathmandu (Inside Ringroad)',
        'rate' => '100',
    ), 84 => array(
        'sno' => '84',
        'location' => 'Kathmandu (Outside Ringroad)',
        'rate' => '100',
    ), 85 => array(
        'sno' => '85',
        'location' => 'Kathmandu Valley (Others)',
        'rate' => '100',
    ),
);

if (!function_exists('write_log')) {
    function write_log($log)
    {
        if (is_array($log) || is_object($log)) {
            error_log(print_r($log, true));
        } else {
            error_log($log);
        }
    }
}

//Searching key value pair
function search_sub_array(array $array, $key, $value)
{
    foreach ($array as $subarray) {
        if (isset($subarray[$key]) && $subarray[$key] == $value) {
            return $subarray;
        }

    }
}

//Add states inside nepal (for city actually 😁)
add_filter('woocommerce_states', 'custom_woocommerce_states');

function custom_woocommerce_states($states)
{
    $array_addresses = array();

    for ($i = 0; $i < count(ADDRESS_RATES); $i++) {
        $array_addresses['NP' . strval($i)] = ADDRESS_RATES[$i]['location'];
    }

    return $states;
}

//Add cities in dropdown
function woo_change_city_to_dropdown($fields)
{

    $array_addresses = array();

    for ($i = 0; $i < count(ADDRESS_RATES); $i++) {
        $array_addresses[ADDRESS_RATES[$i]['location']] = ADDRESS_RATES[$i]['location'];
    }

    $shipping_args = wp_parse_args(array(
        'type' => 'select',
        'options' => $array_addresses,
        'input_class' => array(
            'wc-enhanced-select',
        ),
    ), $fields['shipping']['shipping_city']);

    $billing_args = wp_parse_args(array(
        'type' => 'select',
        'options' => $array_addresses,
        'input_class' => array(
            'wc-enhanced-select',
        ),
    ), $fields['shipping']['billing_city']);

    $fields['billing']['billing_city'] = $billing_args;

    $fields['shipping']['shipping_city'] = $shipping_args;

    wc_enqueue_js("
	jQuery( ':input.wc-enhanced-select' ).filter( ':not(.enhanced)' ).each( function() {
		var select2_args = { minimumResultsForSearch: 5 };
		jQuery( this ).select2( select2_args ).addClass( 'enhanced' );
	});");

    return $fields;

}

//Apply static rates based on above key

function apply_static_rate($rates, $package)
{

    $choosen_state = WC()->customer->get_shipping_city();
    if (empty($choosen_state)) {
        $choosen_state = WC()->customer->get_billing_city();
    }

    $arr = search_sub_array(ADDRESS_RATES, 'location', $choosen_state);
    foreach ($rates as $key => $value) {
        $rates[$key]->label = '(' . $arr['location'] . ')';
        $rates[$key]->cost = $arr['rate'];
    }

    return $rates;
}

add_filter('woocommerce_checkout_fields', 'woo_change_city_to_dropdown');
add_filter('woocommerce_package_rates', 'apply_static_rate', 10, 2);
