<?php
    class Showcase_Widget extends WP_Widget {

        /**
         * Sets up the widgets name etc
         */
        public function __construct() {
            parent::__construct('showcase_widget', __('Showcase Widget', 'text_domain'), array(
                'description' => __('A widget to display showcase content', 'text_domain')
            ));
        }

        /**
         * Outputs the content of the widget
         *
         * @param array $args
         * @param array $instance
         */
        public function widget( $args, $instance ) {
            $title = apply_filters('widget_titlte', $instance['title']);
            $heading = $instance['heading'];
            $text = $instance['text'];

            echo $args['before_widget'];
            if (!empty($title)) {
                echo $args['before_title'].$title.$args['after_title'];
            }
            echo $this->getContent($heading, $text);
            echo $args['after_widget'];
        }

        public function getContent($heading, $text) {
            $output = '<h1>'.$heading.'</h1><p>'.$text.'</p><button class="button">Start Shopping</button>';

            return $output;
        }

        /**
         * Outputs the options form on admin
         *
         * @param array $instance The widget options
         */
        public function form( $instance ) {
            if (isset($instance['title'])) {
                $title = $instance['title'];
            } else {
                $title = __('Showcase Widget', 'text_domain');
            }
            $heading = isset($instance['heading']) ? $instance['heading'] : '';
            $text = isset($instance['text']) ? $instance['text'] : '';

            ?>
                <p>
                    <label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_attr_e( 'Title:', 'text_domain' ); ?></label>
                    <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
                </p>
                <p>
                    <label for="<?php echo esc_attr( $this->get_field_id( 'heading' ) ); ?>"><?php esc_attr_e( 'Heading:', 'text_domain' ); ?></label>
                    <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'heading' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'heading' ) ); ?>" type="text" value="<?php echo esc_attr( $heading ); ?>">
                </p>
                <p>
                    <label for="<?php echo esc_attr( $this->get_field_id( 'text' ) ); ?>"><?php esc_attr_e( 'Text:', 'text_domain' ); ?></label>
                    <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'text' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'text' ) ); ?>" type="text" value="<?php echo esc_attr( $text ); ?>">
                </p>
            <?php
        }

        /**
         * Processing widget options on save
         *
         * @param array $new_instance The new options
         * @param array $old_instance The previous options
         *
         * @return array
         */
        public function update( $new_instance, $old_instance ) {
            $instance = array();
            $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? sanitize_text_field( $new_instance['title'] ) : '';
            $instance['heading'] = ( ! empty( $new_instance['heading'] ) ) ? sanitize_text_field( $new_instance['heading'] ) : '';
            $instance['text'] = ( ! empty( $new_instance['text'] ) ) ? sanitize_text_field( $new_instance['text'] ) : '';

            return $instance;
        }
    }
?>
