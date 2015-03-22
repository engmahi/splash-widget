// Register a  custom widget
class splash_widget extends WP_Widget {
	public function __construct() {
		parent::__construct('splash_widget', 'Splash Widget', array(
			'description' => 'This is a custom widget'
		));
	}

	public function widget($args, $instance) {
		echo $args['before_widget'] . $args['before_title'] . "Hello World!, Welcome to My first Custom Widget." . $args['after_title'] . $args['after_widget'];
	}

}


// add action to widget init
function splash_widget() {
	register_widget('splash_widget');
}
add_action('widgets_init', 'splash_widget');