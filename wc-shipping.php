add_filter('woocommerce_states', 'add_custom_states_to_country');
add_filter('woocommerce_countries_allowed_country_states', 'add_custom_states_to_country');
function add_custom_states_to_country( $states ) {
    $addition = array(
        'LC' => __('Lagos Central', 'woocommerce'),
        'LI' => __('Lagos Island', 'woocommerce'),
        'LE' => __('Lagos Island Edge', 'woocommerce'),
        'ME' => __('Mainland Edge', 'woocommerce')
        );
	//unset lagos
	unset($states['NG']['LA']); 
	$new_states = array_merge($states['NG'],$addition);
    return $new_states;
}