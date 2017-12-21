<?php

register_sidebar( array(
  'name' => __( 'Prana Tagline', 'Spacious Child Theme' ),
  'id' => 'prana-homepage-tagline',
  'description' => __( 'Edit the tagline which goes on the banner image', 'Spacious Child Theme' ),
  'before_widget' => '
  <div id="%1$s" class="widget-container %2$s">',
  'after_widget' => '
  </div>
  ',
  'before_title' => '
  <h3 class="widget-title">',
  'after_title' => '</h3>
  ',
) );

register_sidebar( array(
  'name' => __( 'Prana Footer', 'Spacious Child Theme' ),
  'id' => 'prana-footer',
  'description' => __( 'Edit the contact information', 'Spacious Child Theme' ),
  'before_widget' => '
  <div id="%1$s" class="widget-container %2$s">',
  'after_widget' => '
  </div>
  ',
  'before_title' => '
  <h3 class="widget-title">',
  'after_title' => '</h3>
  ',
) );

class prana_Contact_Info extends WP_Widget {

  public function __construct() {
    $widget_options = array(
      'classname' => 'contact_info_widget',
      'description' => 'Your contact informations',
    );
    parent::__construct( 'contact_info_widget', 'Contact Information', $widget_options );
  }

  public function widget( $args, $instance ) {
    $telephone = apply_filters( 'widget_telephone', $instance[ 'telephone' ] );
    $email = apply_filters( 'widget_email', $instance[ 'email' ] );
    $adresse1 = apply_filters( 'widget_email', $instance[ 'adresse1' ] );
    $adresse2 = apply_filters( 'widget_email', $instance[ 'adresse2' ] );
    $adresse3 = apply_filters( 'widget_email', $instance[ 'adresse3' ] );

    echo $args['before_widget']?>

    <ul>
      <li class="contact contact-telephone">
        <span class="label label-telephone">Numéro de téléphone: </span>
        <span class="content content-telephone"><?php echo $telephone ?></span>
      </li>
      <li class="contact contact-email">
        <span class="label label-email">Courriel: </span>
        <span class="content content-email"><?php echo $email ?></span>
      </li>
      <li class="contact contact-adresse">
        <span class="label label-adresse">Adresse: </span>
        <span class="content content-adresse"><?php echo $adresse1 ?></span>
        <span class="content content-adresse"><?php echo $adresse2 ?></span>
        <span class="content content-adresse"><?php echo $adresse3 ?></span>
      </li>
    </ul>

    <?php echo $args['after_widget'];
  }

  public function form( $instance ) {
    $telephone = ! empty( $instance['telephone'] ) ? $instance['telephone'] : '';
    $email = ! empty( $instance['email'] ) ? $instance['email'] : '';
    $adresse1 = ! empty( $instance['adresse1'] ) ? $instance['adresse1'] : '';
    $adresse2 = ! empty( $instance['adresse2'] ) ? $instance['adresse2'] : '';
    $adresse3 = ! empty( $instance['adresse3'] ) ? $instance['adresse3'] : '';
    ?>
    <p>
      <label for="<?php echo $this->get_field_id( 'telephone' ); ?>">Numéro de téléphone:</label>
      <input type="text" id="<?php echo $this->get_field_id( 'telephone' ); ?>" name="<?php echo $this->get_field_name( 'telephone' ); ?>" value="<?php echo esc_attr( $telephone ); ?>" />
    </p>
    <p>
      <label for="<?php echo $this->get_field_id( 'email' ); ?>">Courriel:</label>
      <input type="text" id="<?php echo $this->get_field_id( 'email' ); ?>" name="<?php echo $this->get_field_name( 'email' ); ?>" value="<?php echo esc_attr( $email ); ?>" />
    </p>
    <p>
      <label for="<?php echo $this->get_field_id( 'adresse1' ); ?>">Adresse ligne 1:</label>
      <input type="text" id="<?php echo $this->get_field_id( 'adresse1' ); ?>" name="<?php echo $this->get_field_name( 'adresse1' ); ?>" value="<?php echo esc_attr( $adresse1 ); ?>" />
    </p>
    <p>
      <label for="<?php echo $this->get_field_id( 'adresse2' ); ?>">Adresse ligne 2:</label>
      <input type="text" id="<?php echo $this->get_field_id( 'adresse2' ); ?>" name="<?php echo $this->get_field_name( 'adresse2' ); ?>" value="<?php echo esc_attr( $adresse2 ); ?>" />
    </p>
    <p>
      <label for="<?php echo $this->get_field_id( 'adresse3' ); ?>">Adresse ligne 3:</label>
      <input type="text" id="<?php echo $this->get_field_id( 'adresse3' ); ?>" name="<?php echo $this->get_field_name( 'adresse3' ); ?>" value="<?php echo esc_attr( $adresse3 ); ?>" />
    </p>

    <?php
  }

  public function update( $new_instance, $old_instance ) {
    $instance = $old_instance;
    $instance[ 'telephone' ] = strip_tags( $new_instance[ 'telephone' ] );
    $instance[ 'email' ] = strip_tags( $new_instance[ 'email' ] );
    $instance[ 'adresse1' ] = strip_tags( $new_instance[ 'adresse1' ] );
    $instance[ 'adresse2' ] = strip_tags( $new_instance[ 'adresse2' ] );
    $instance[ 'adresse3' ] = strip_tags( $new_instance[ 'adresse3' ] );
    return $instance;
  }

}

function prana_register_Contact_Info() {
  register_widget( 'prana_Contact_Info' );
}
add_action( 'widgets_init', 'prana_register_Contact_Info' );
