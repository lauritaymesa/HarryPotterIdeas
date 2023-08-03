<?php

if( ! class_exists('Kirki') ) {
    return;
}


/* Panels */

new \Kirki\Panel(
	'panel_harrypotter',
	[
		'priority'    => 10,
		'title'       => esc_html__( 'HP  Theme Options', 'harrypotterideas' ),
		'description' => esc_html__( 'Use this to cuztomize the HP Theme', 'harrypotterideas' ),
	]
);

/* Section */

new \Kirki\Section(
	'subscribe_bar',
	[
		'title'       => esc_html__( 'Subscribe Bar', 'harrypotterideas' ),
		'description' => esc_html__( 'Use this to cuztomize the Subscribe Bar', 'harrypotterideas' ),
		'panel'       => 'panel_harrypotter',
		'priority'    => 160,
	]
);

/* Section  Subcribe Bar Fields */

new \Kirki\Field\Textarea(
	[
		'settings'    => 'subscribe_text',
		'label'       => esc_html__( 'Subscribe Bar Text', 'harrypotterideas'  ),
		'section'     => 'subscribe_bar',
		'default'     => esc_html__( 'This is a default value', 'harrypotterideas' ),
	]
);



new \Kirki\Section(
	'footer_section',
	[
		'title'       => esc_html__( 'Footer', 'harrypotterideas' ),
		'description' => esc_html__( 'Use this to cuztomize the Footer', 'harrypotterideas' ),
		'panel'       => 'panel_harrypotter',
		'priority'    => 160,
	]
);

/* Section  Footer Bar Fields */

new \Kirki\Field\Textarea(
	[
		'type'            => 'textarea',
		'settings'        => 'footer_copyright',
		'label'           => esc_html__( 'Footer Text', 'harrypotterideas' ),
		'section'         => 'footer_section',
		'default'         => esc_html__( 'This is a default value', 'harrypotterideas' ),
		'partial_refresh' => array(
			'footer_copyright' => array(
				'selector'        => 'footer .copyright p',
				'render_callback' => function () {
					return get_theme_mod( 'footer_copyright' );
				},
            ),
        ),
	]
);

/* Footer call to action */

new \Kirki\Section(
	'footer_call_to_action',
	[
		'title'       => esc_html__( 'Call to Action', 'harrypotterideas' ),
		'description' => esc_html__( 'Use this to cuztomize Call to action', 'harrypotterideas' ),
		'panel'       => 'panel_harrypotter',
		'priority'    => 160,
	]
);

new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'footer_calltoaction_visibility',
		'label'       => esc_html__( 'Call to Action section', 'harrypotterideas' ),
		'description' => esc_html__( 'Call to Action on or off', 'harrypotterideas' ),
		'section'     => 'footer_call_to_action',
		'default'     => 'on',
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'harrypotterideas' ),
			'off' => esc_html__( 'Disable', 'harrypotterideas' ),
		],
	]
);

/* Footer call to action fields*/

new \Kirki\Field\Text(
	[
		'settings'        => 'footer_subtitle',
		'label'           => esc_html__( 'Sub title Text', 'harrypotterideas' ),
        'tooltip'         => esc_html__( 'call to action Sub title Text', 'harrypotterideas' ),
		'section'         => 'footer_call_to_action',
		'default'         => esc_html__( 'Join now!', 'harrypotterideas' ),
		'partial_refresh' => array(
			'footer_subtitle' => array(
				'selector'        => '.footer-calltoaction p.sub-title',
				'render_callback' => function () {
					return get_theme_mod( 'footer_subtitle' );
				},
            ),
		),
	]
);

new \Kirki\Field\Text(
	[
		'settings'        => 'footer_calltoaction_h2',
		'label'           => esc_html__( 'Call to action h2', 'harrypotterideas' ),
        'tooltip'         => esc_html__( 'call to action h2 Text', 'harrypotterideas' ),
		'section'         => 'footer_call_to_action',
		'default'         => esc_html__( 'Trendy Harry Potter Ideas', 'harrypotterideas' ),
		'partial_refresh' => array(
			'footer_calltoaction_h2' => array(
				'selector'        => '.footer-calltoaction h2',
				'render_callback' => function () {
					return get_theme_mod( 'footer_calltoaction_h2' );
				},
            ),
		),
	]
);

new \Kirki\Field\Text(
	[
		'settings'        => 'footer_calltoaction_p',
		'label'           => esc_html__( 'Call to action p', 'harrypotterideas' ),
        'tooltip'         => esc_html__( 'call to action p Text', 'harrypotterideas' ),
		'section'         => 'footer_call_to_action',
		'default'         => esc_html__( 'Trendy Harry Potter Ideas', 'harrypotterideas' ),
		'partial_refresh' => array(
			'footer_calltoaction_p' => array(
				'selector'        => '.footer-calltoaction p',
				'render_callback' => function () {
					return get_theme_mod( 'footer_calltoaction_p' );
				},
            ),
		),
	]
);

new \Kirki\Field\Text(
	[
		'settings'        => 'footer_calltoaction_btn',
		'label'           => esc_html__( 'Call to action btn', 'harrypotterideas' ),
        'tooltip'         => esc_html__( 'call to action btn Text', 'harrypotterideas' ),
		'section'         => 'footer_call_to_action',
		'default'         => esc_html__( 'Subscribe!', 'harrypotterideas' ),
		'partial_refresh' => array(
			'footer_calltoaction_btn' => array(
				'selector'        => '.footer-calltoaction a.btn',
				'render_callback' => function () {
					return get_theme_mod( 'footer_calltoaction_btn' );
				},
            ),
		),
	]
);

new \Kirki\Field\URL(
	[
		'settings' => 'url_footer_calltoaction_btn',
		'label'    => esc_html__( 'URL Call to action btn', 'harrypotterideas' ),
		'section'  => 'footer_call_to_action',
		'default'  => 'https://harrypotterideas.com/',
		'priority' => 10,
	]
);





