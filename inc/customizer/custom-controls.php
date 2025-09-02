<?php
/**
 * Customizer Custom Controls
 *
 */

if ( class_exists( 'WP_Customize_Control' ) ) {

	class Service_Sortable_Repeater_Custom_Control extends WP_Customize_Control {

		public $type = 'sortable_repeater';

		public $name_placeholder = 'Название';
		public $desc_placeholder = 'Описание';
		public $price_placeholder = 'Цена';
		public $label_single = '';

		public $button_labels = array();

		public function __construct( $manager, $id, $args = array(), $options = array() ) {
			parent::__construct( $manager, $id, $args );
			$this->label_single = $args['label_single'] ?: '';
			$this->button_labels = wp_parse_args( $this->button_labels,
				array(
					'add' => 'Добавить',
				)
			);
		}

		public function enqueue() {
			wp_enqueue_script( 'custom-controls-js', gh_get_assets_uri( 'customizer', 'js', 'inc/customizer/', true ), array( 'jquery', 'jquery-ui-core' ), '1.0.0', true );
			wp_enqueue_style( 'custom-controls-css', gh_get_assets_uri( 'customizer', 'css', 'inc/customizer/', true ), array(), '1.0.0', 'all' );
		}

		public function render_content() {
		?>
		  <div class="sortable_repeater_control">
				<?php if( !empty( $this->label ) ) { ?>
					<span class="customize-control-title" data-single="<?php echo esc_html( $this->label_single ); ?>"><?php echo esc_html( $this->label ); ?></span>
				<?php } ?>
				<?php if( !empty( $this->description ) ) { ?>
					<span class="customize-control-description"><?php echo esc_html( $this->description ); ?></span>
				<?php } ?>
				<input type="hidden" id="<?php echo esc_attr( $this->id ); ?>" name="<?php echo esc_attr( $this->id ); ?>" value="<?php echo esc_attr( $this->value() ); ?>" class="customize-control-sortable-repeater" <?php $this->link(); ?> />
				<div class="sortable_repeater sortable">
					<div class="repeater">
						<div class="repeater_header">
							<span><?php if ($this->label_single) echo esc_html( $this->label_single ) . ' 1'; ?></span>
							<span class="dashicons dashicons-sort"></span><a class="customize-control-sortable-repeater-delete" href="#"><span class="dashicons dashicons-no-alt"></span></a>
						</div>
						<input type="text" value="" class="repeater-input-name" placeholder="<?php echo esc_html( $this->name_placeholder ); ?>" />
						<textarea style="width: 100%;" rows="3" type="text" value="" class="repeater-input-desc" placeholder="<?php echo esc_html( $this->desc_placeholder ); ?>" ></textarea>
						<input type="text" value="" class="repeater-input-price" placeholder="<?php echo esc_html( $this->price_placeholder ); ?>" />
					</div>
				</div>
				<button class="button customize-control-sortable-repeater-add" type="button"><?php echo $this->button_labels['add']; ?></button>
			</div>
		<?php
		}
	}

}