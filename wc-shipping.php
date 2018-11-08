add_filter('woocommerce_states', 'add_custom_states_to_country');
add_filter('woocommerce_countries_allowed_country_states', 'add_custom_states_to_country');
function add_custom_states_to_country( $states ) {
    $states['NG'] = array(
        'LC' => __('Lagos Central', 'woocommerce'),
        'LI' => __('Lagos Island', 'woocommerce'),
        'LE' => __('Lagos Island Edge', 'woocommerce'),
        'ME' => __('Mainland Edge', 'woocommerce')
        );
    return $states;
}