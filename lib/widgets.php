<?php 

class social extends WP_Widget {

	//Вставляйте функции сюда

	function __construct() {
		parent::__construct(
		// widget ID
		'social',
		// widget name
		__('Виджет социальных сетей', ' social_domain'),
		// widget description
		array('name' => 'CGC - Ссылка на соц сети', 'description' => __( 'Как создать виджеты для WordPress', 'social_domain' ), )
		);
	}
	private $social = [
		'fb' =>  [
			'fasebook'
		],
		'insta' => [
			'instagram'
		], 
		'vk' => [
			'vkontac'
		],
	];

	public function form( $instance ) {
		if ( isset( $instance[ 'title' ] ) )
			$title = $instance[ 'title' ];
		else
			$title = __( 'Стандартный Заголовок', 'social_domain' );
		?>
		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'id-slug' ); ?>"><?php _e( 'Titless:' ); ?></label>
			<select 
				class="widefat" 
				id="<?php echo $this->get_field_id( 'id-slug' ); ?>"
				name="<?php echo $this->get_field_name( 'id-slug' ); ?>" 
			>
				<?php foreach ( $this->social as $slug => $soc) : ?>
					<option value="<?php echo $slug?>" <?php selected( $instance['id-slug'], $slug, true) ?> >
						<?php echo $soc[0] ?>
					</option>	
				<?php endforeach; ?>
			</select>
		</p>
		<?php
	}

	public function widget( $args, $instance ) {
		$title = apply_filters( 'widget_title', $instance['title'] );
		echo $args['before_widget'];
		//if title is present
		if ( ! empty( $title ) )
		echo $args['before_title'] . $title . $args['after_title'];
		//output
		echo __( 'Привет мир, от Hostinger.ru', 'social_domain' );
		echo $args['after_widget'];
	}

	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
		return $instance;
	}
	
	
}

add_action( 'widgets_init', 'hstngr_register_widget' );
function hstngr_register_widget() {
	register_widget( 'social' );
}


add_action( 'widgets_init', 'register_my_widgets' );
function register_my_widgets(){


	register_sidebar(array(
		'name'          => "Место для подписки",
		'id'            => "sidebar-2",
		'description'   => '',
		'class'         => '',
		'before_widget' => '',
		'after_widget'  => "\n",
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => "</h2>\n",
		'before_sidebar' => '', // WP 5.6
		'after_sidebar'  => '', // WP 5.6
	) );

	
	register_sidebar(array(
		'name'          => "alacrity",
		'id'            => "sidebar-3",
		'description'   => '',
		'class'         => '',
		'before_widget' => '',
		'after_widget'  => "\n",
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => "</h2>\n",
		'before_sidebar' => '', // WP 5.6
		'after_sidebar'  => '', // WP 5.6
	) );
}