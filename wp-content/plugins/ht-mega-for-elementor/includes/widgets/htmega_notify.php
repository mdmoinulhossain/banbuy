<?php
namespace Elementor;

// Elementor Classes
use Elementor\Core\Schemes\Color as Scheme_Color;
use Elementor\Core\Schemes\Typography as Scheme_Typography;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class HTMega_Elementor_Widget_Notify extends Widget_Base {

    public function get_name() {
        return 'htmega-notify-addons';
    }
    
    public function get_title() {
        return __( 'Notify', 'htmega-addons' );
    }

    public function get_icon() {
        return 'htmega-icon eicon-alert';
    }

    public function get_categories() {
        return [ 'htmega-addons' ];
    }

    public function get_script_depends() {
        return [
            'htmega-notify',
            'htmega-widgets-scripts',
        ];
    }

    protected function register_controls() {

        // Notification Button
        $this->start_controls_section(
            'notify_button',
            [
                'label' => __( 'Button', 'htmega-addons' ),
            ]
        );
            
            $this->add_control(
                'notification_button_txt',
                [
                    'label' => __( 'Button Text', 'htmega-addons' ),
                    'type' => Controls_Manager::TEXT,
                    'default' => __( 'Show Info', 'htmega-addons' ),
                ]
            );

        $this->end_controls_section();


        // Notification Content
        $this->start_controls_section(
            'notify_content',
            [
                'label' => __( 'Notification Content', 'htmega-addons' ),
            ]
        );

            $this->add_control(
                'notification_content',
                [
                    'label' => __( 'Notification Message', 'htmega-addons' ),
                    'type' => Controls_Manager::TEXTAREA,
                    'default' => __( '<strong>Welcome,</strong>to Notification.', 'htmega-addons' ),
                ]
            );

        $this->end_controls_section();

        // Notification Option
        $this->start_controls_section(
            'notification_option',
            [
                'label' => __( 'Notification Option', 'htmega-addons' ),
            ]
        );
            $this->add_control(
                'notification_element_container',
                [
                    'label'   => __( 'Element Container', 'htmega-addons' ),
                    'type'    => Controls_Manager::SELECT,
                    'default' => 'self',
                    'options' => [
                        'body'   => __( 'Body', 'htmega-addons' ),
                        'self'   => __( 'Self', 'htmega-addons' ),
                    ],
                ]
            );

            $this->add_control(
                'notification_position',
                [
                    'label'   => __( 'Notification Position', 'htmega-addons' ),
                    'type'    => Controls_Manager::SELECT,
                    'default' => 'topcenter',
                    'options' => [
                        'topleft'           => __( 'Top Left', 'htmega-addons' ),
                        'topcenter'         => __( 'Top Center', 'htmega-addons' ),
                        'topright'          => __( 'Top Right', 'htmega-addons' ),
                        'bottomleft'        => __( 'Bottom Left', 'htmega-addons' ),
                        'bottomcenter'      => __( 'Bottom Center', 'htmega-addons' ),
                        'bottomright'       => __( 'Bottom Right', 'htmega-addons' ),
                        'topfullwidth'      => __( 'Top Fullwidth', 'htmega-addons' ),
                        'bottomfullwidth'   => __( 'Bottom Fullwidth', 'htmega-addons' ),
                    ],
                ]
            );

            $this->add_control(
                'notification_type',
                [
                    'label'   => __( 'Notification Type', 'htmega-addons' ),
                    'type'    => Controls_Manager::SELECT,
                    'default' => 'info',
                    'options' => [
                        'info'   => __( 'Info', 'htmega-addons' ),
                        'danger'   => __( 'Danger', 'htmega-addons' ),
                        'success'   => __( 'Success', 'htmega-addons' ),
                        'warning'   => __( 'Warning', 'htmega-addons' ),
                    ],
                ]
            );

            $this->add_control(
                'notification_enter_animation',
                [
                    'label'   => __( 'Show Animation', 'htmega-addons' ),
                    'type'    => Controls_Manager::SELECT,
                    'default' => 'fadeInUp',
                    'options' => [
                        'none'           => __('None','htmega-addons'),
                        'bounceOut'      => __('bounceOut','htmega-addons'),
                        'bounceOutDown'  => __('bounceOutDown','htmega-addons'),
                        'bounceOutLeft'  => __('bounceOutLeft','htmega-addons'),
                        'bounceOutRight' => __('bounceOutRight','htmega-addons'),
                        'bounceOutUp'    => __('bounceOutUp','htmega-addons'),
                        'fadeIn'         => __('fadeIn','htmega-addons'),
                        'fadeInDown'     => __('fadeInDown','htmega-addons'),
                        'fadeInDownBig'  => __('fadeInDownBig','htmega-addons'),
                        'fadeInLeft'     => __('fadeInLeft','htmega-addons'),
                        'fadeInLeftBig'  => __('fadeInLeftBig','htmega-addons'),
                        'fadeInRight'    => __('fadeInRight','htmega-addons'),
                        'fadeInRightBig' => __('fadeInRightBig','htmega-addons'),
                        'fadeOutRight'   => __('fadeOutRight','htmega-addons'),
                        'fadeOutLeft'    => __('fadeOutLeft','htmega-addons'),
                        'fadeInUp'       => __('fadeInUp','htmega-addons'),
                        'fadeOutUp'      => __('fadeOutUp','htmega-addons'),
                        'fadeOutDown'    => __('fadeOutDown','htmega-addons'),
                        'fadeInUpBig'    => __('fadeInUpBig','htmega-addons'),
                        'bounceIn'       => __('bounceIn','htmega-addons'),
                        'bounceInDown'   => __('bounceInDown','htmega-addons'),
                        'bounceInLeft'   => __('bounceInLeft','htmega-addons'),
                        'bounceInRight'  => __('bounceInRight','htmega-addons'),
                        'bounceInUp'     => __('bounceInUp','htmega-addons'),
                    ],
                ]
            );

            $this->add_control(
                'notification_exit_animation',
                [
                    'label'   => __( 'Exit Animation', 'htmega-addons' ),
                    'type'    => Controls_Manager::SELECT,
                    'default' => 'fadeOutDown',
                    'options' => [
                        'none'           => __('None','htmega-addons'),
                        'bounceOut'      => __('bounceOut','htmega-addons'),
                        'bounceOutDown'  => __('bounceOutDown','htmega-addons'),
                        'bounceOutLeft'  => __('bounceOutLeft','htmega-addons'),
                        'bounceOutRight' => __('bounceOutRight','htmega-addons'),
                        'bounceOutUp'    => __('bounceOutUp','htmega-addons'),
                        'fadeIn'         => __('fadeIn','htmega-addons'),
                        'fadeInDown'     => __('fadeInDown','htmega-addons'),
                        'fadeInDownBig'  => __('fadeInDownBig','htmega-addons'),
                        'fadeInLeft'     => __('fadeInLeft','htmega-addons'),
                        'fadeInLeftBig'  => __('fadeInLeftBig','htmega-addons'),
                        'fadeInRight'    => __('fadeInRight','htmega-addons'),
                        'fadeInRightBig' => __('fadeInRightBig','htmega-addons'),
                        'fadeOutRight'   => __('fadeOutRight','htmega-addons'),
                        'fadeOutLeft'    => __('fadeOutLeft','htmega-addons'),
                        'fadeInUp'       => __('fadeInUp','htmega-addons'),
                        'fadeOutUp'      => __('fadeOutUp','htmega-addons'),
                        'fadeOutDown'    => __('fadeOutDown','htmega-addons'),
                        'fadeInUpBig'    => __('fadeInUpBig','htmega-addons'),
                        'bounceIn'       => __('bounceIn','htmega-addons'),
                        'bounceInDown'   => __('bounceInDown','htmega-addons'),
                        'bounceInLeft'   => __('bounceInLeft','htmega-addons'),
                        'bounceInRight'  => __('bounceInRight','htmega-addons'),
                        'bounceInUp'     => __('bounceInUp','htmega-addons'),
                    ],
                ]
            );

            $this->add_control(
                'notification_offset',
                [
                    'label' => __('Offset', 'htmega-addons'),
                    'type' => Controls_Manager::NUMBER,
                    'default' => 80,
                ]
            );

            $this->add_control(
                'notification_delay',
                [
                    'label' => __('Delay', 'htmega-addons'),
                    'type' => Controls_Manager::NUMBER,
                    'default' => 5000,
                ]
            );

            $this->add_control(
                'notification_width',
                [
                    'label'   => __( 'Bootstrap Column Width', 'htmega-addons' ),
                    'type'    => Controls_Manager::SELECT,
                    'default' => 'auto',
                    'options' => [
                        'auto'   => __( 'Auto', 'htmega-addons' ),
                        'col-md-12'  => __( 'col-md-12', 'htmega-addons' ),
                        'col-md-11'  => __( 'col-md-11', 'htmega-addons' ),
                        'col-md-10'  => __( 'col-md-10', 'htmega-addons' ),
                        'col-md-9'   => __( 'col-md-9', 'htmega-addons' ),
                        'col-md-8'   => __( 'col-md-8', 'htmega-addons' ),
                        'col-md-7'   => __( 'col-md-7', 'htmega-addons' ),
                        'col-md-6'   => __( 'col-md-6', 'htmega-addons' ),
                        'col-md-5'   => __( 'col-md-5', 'htmega-addons' ),
                        'col-md-4'   => __( 'col-md-4', 'htmega-addons' ),
                        'col-md-3'   => __( 'col-md-3', 'htmega-addons' ),
                        'col-md-2'   => __( 'col-md-2', 'htmega-addons' ),
                        'col-md-1'   => __( 'col-md-1', 'htmega-addons' ),
                    ],
                ]
            );

            $this->add_control(
                'notification_icon',
                [
                    'label' => __('Icon', 'htmega-addons'),
                    'type' => Controls_Manager::ICONS,
                    'default' => [
                        'value'=>'fas fa-info-circle',
                        'library' => 'solid',
                    ],
                ]
            );

        $this->end_controls_section();

        // Style tab section
        $this->start_controls_section(
            'notify_style_section',
            [
                'label' => __( 'Style', 'htmega-addons' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
            
            $this->add_responsive_control(
                'buttonalign',
                [
                    'label' => __( 'Alignment', 'woomentor' ),
                    'type' => Controls_Manager::CHOOSE,
                    'options' => [
                        'left' => [
                            'title' => __( 'Left', 'woomentor' ),
                            'icon' => 'fa fa-align-left',
                        ],
                        'center' => [
                            'title' => __( 'Center', 'woomentor' ),
                            'icon' => 'fa fa-align-center',
                        ],
                        'right' => [
                            'title' => __( 'Right', 'woomentor' ),
                            'icon' => 'fa fa-align-right',
                        ],
                        'justify' => [
                            'title' => __( 'Justified', 'woomentor' ),
                            'icon' => 'fa fa-align-justify',
                        ],
                    ],
                    'default' => 'center',
                    'selectors' => [
                        '{{WRAPPER}} .htmega_notify_area' => 'text-align: {{VALUE}};',
                    ],
                ]
            );

        $this->end_controls_section();

        // Style Button tab section
        $this->start_controls_section(
            'notify_button_style',
            [
                'label' => __( 'Button', 'htmega-addons' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
            
            $this->start_controls_tabs('notify_button_style_tabs');
                
                // Button Normal Style
                $this->start_controls_tab(
                    'button_style_normal_tab',
                    [
                        'label' => __( 'Normal', 'htmega-addons' ),
                    ]
                );
                    $this->add_control(
                        'button_color',
                        [
                            'label' => __( 'Color', 'htmega-addons' ),
                            'type' => Controls_Manager::COLOR,
                            'default' =>'#ffffff',
                            'selectors' => [
                                '{{WRAPPER}} button.htmega-notify-button' => 'color: {{VALUE}}',
                            ],
                        ]
                    );

                    $this->add_group_control(
                        Group_Control_Typography::get_type(),
                        [
                            'name' => 'button_typography',
                            'label' => __( 'Typography', 'htmega-addons' ),
                            'scheme' => Scheme_Typography::TYPOGRAPHY_1,
                            'selector' => '{{WRAPPER}} button.htmega-notify-button',
                        ]
                    );

                    $this->add_group_control(
                        Group_Control_Border::get_type(),
                        [
                            'name' => 'button_border',
                            'label' => __( 'Border', 'htmega-addons' ),
                            'selector' => '{{WRAPPER}} button.htmega-notify-button',
                        ]
                    );

                    $this->add_responsive_control(
                        'button_border_radius',
                        [
                            'label' => esc_html__( 'Border Radius', 'htmega-addons' ),
                            'type' => Controls_Manager::DIMENSIONS,
                            'selectors' => [
                                '{{WRAPPER}} button.htmega-notify-button' => 'border-radius: {{TOP}}px {{RIGHT}}px {{BOTTOM}}px {{LEFT}}px;',
                            ],
                        ]
                    );

                    $this->add_group_control(
                        Group_Control_Background::get_type(),
                        [
                            'name' => 'button_background',
                            'label' => __( 'Background', 'htmega-addons' ),
                            'types' => [ 'classic', 'gradient' ],
                            'selector' => '{{WRAPPER}} button.htmega-notify-button',
                            'separator' => 'before',
                        ]
                    );

                    $this->add_group_control(
                        Group_Control_Box_Shadow::get_type(),
                        [
                            'name' => 'box_shadow',
                            'label' => __( 'Box Shadow', 'htmega-addons' ),
                            'selector' => '{{WRAPPER}} button.htmega-notify-button',
                        ]
                    );

                    $this->add_responsive_control(
                        'button_padding',
                        [
                            'label' => __( 'Padding', 'htmega-addons' ),
                            'type' => Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px', '%', 'em' ],
                            'selectors' => [
                                '{{WRAPPER}} button.htmega-notify-button' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ],
                            'separator' => 'before',
                        ]
                    );

                    $this->add_responsive_control(
                        'button_margin',
                        [
                            'label' => __( 'Margin', 'htmega-addons' ),
                            'type' => Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px', '%', 'em' ],
                            'selectors' => [
                                '{{WRAPPER}} button.htmega-notify-button' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ],
                            'separator' => 'before',
                        ]
                    );

                $this->end_controls_tab(); // Normal Button style end

                // Button Hover Style
                $this->start_controls_tab(
                    'button_style_hover_tab',
                    [
                        'label' => __( 'Hover', 'htmega-addons' ),
                    ]
                );
                    $this->add_control(
                        'button_hover_color',
                        [
                            'label' => __( 'Color', 'htmega-addons' ),
                            'type' => Controls_Manager::COLOR,
                            'default' =>'#ffffff',
                            'selectors' => [
                                '{{WRAPPER}} button.htmega-notify-button:hover' => 'color: {{VALUE}}',
                            ],
                        ]
                    );

                    $this->add_group_control(
                        Group_Control_Background::get_type(),
                        [
                            'name' => 'button_hover_background',
                            'label' => __( 'Background', 'htmega-addons' ),
                            'types' => [ 'classic', 'gradient' ],
                            'selector' => '{{WRAPPER}} button.htmega-notify-button:hover',
                            'separator' => 'before',
                        ]
                    );

                    $this->add_group_control(
                        Group_Control_Border::get_type(),
                        [
                            'name' => 'button_hover_border',
                            'label' => __( 'Border', 'htmega-addons' ),
                            'selector' => '{{WRAPPER}} button.htmega-notify-button:hover',
                        ]
                    );

                $this->end_controls_tab(); // Hover Button style end

            $this->end_controls_tabs();

        $this->end_controls_section();

        // Style Content tab section
        $this->start_controls_section(
            'notify_notifycontent_style',
            [
                'label' => __( 'Notify Content', 'htmega-addons' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
            $this->start_controls_tabs('notify_content_style_tabs');
                
                // Notify Content Normal Style
                $this->start_controls_tab(
                    'notify_content_style_tab',
                    [
                        'label' => __( 'Content', 'htmega-addons' ),
                    ]
                );
                    $this->add_control(
                        'notify_content_color',
                        [
                            'label' => __( 'Color', 'htmega-addons' ),
                            'type' => Controls_Manager::COLOR,
                            'default' =>'#ffffff',
                            'selectors' => [
                                '.htmega-alert-wrap-{{ID}}.alert strong' => 'color: {{VALUE}} !important',
                                '.htmega-alert-wrap-{{ID}}.alert' => 'color: {{VALUE}} !important',
                            ],
                        ]
                    );

                    $this->add_group_control(
                        Group_Control_Typography::get_type(),
                        [
                            'name' => 'notify_content_typography',
                            'label' => __( 'Typography', 'htmega-addons' ),
                            'scheme' => Scheme_Typography::TYPOGRAPHY_1,
                            'selector' => '.htmega-alert-wrap-{{ID}}.alert',
                        ]
                    );

                    $this->add_group_control(
                        Group_Control_Border::get_type(),
                        [
                            'name' => 'notify_content_border',
                            'label' => __( 'Border', 'htmega-addons' ),
                            'selector' => '.htmega-alert-wrap-{{ID}}.alert',
                        ]
                    );

                    $this->add_responsive_control(
                        'notify_content_border_radius',
                        [
                            'label' => esc_html__( 'Border Radius', 'htmega-addons' ),
                            'type' => Controls_Manager::DIMENSIONS,
                            'selectors' => [
                                '.htmega-alert-wrap-{{ID}}.alert' => 'border-radius: {{TOP}}px {{RIGHT}}px {{BOTTOM}}px {{LEFT}}px;',
                            ],
                        ]
                    );

                    $this->add_group_control(
                        Group_Control_Background::get_type(),
                        [
                            'name' => 'notify_content_background',
                            'label' => __( 'Background', 'htmega-addons' ),
                            'types' => [ 'classic', 'gradient' ],
                            'selector' => '.htmega-alert-wrap-{{ID}}.alert',
                            'separator' => 'before',
                        ]
                    );

                    $this->add_responsive_control(
                        'notify_content_padding',
                        [
                            'label' => __( 'Padding', 'htmega-addons' ),
                            'type' => Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px', '%', 'em' ],
                            'selectors' => [
                                '.htmega-alert-wrap-{{ID}}.alert' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ],
                            'separator' => 'before',
                        ]
                    );

                    $this->add_responsive_control(
                        'notify_content_align',
                        [
                            'label' => __( 'Alignment', 'woomentor' ),
                            'type' => Controls_Manager::CHOOSE,
                            'options' => [
                                'left' => [
                                    'title' => __( 'Left', 'woomentor' ),
                                    'icon' => 'fa fa-align-left',
                                ],
                                'center' => [
                                    'title' => __( 'Center', 'woomentor' ),
                                    'icon' => 'fa fa-align-center',
                                ],
                                'right' => [
                                    'title' => __( 'Right', 'woomentor' ),
                                    'icon' => 'fa fa-align-right',
                                ],
                                'justify' => [
                                    'title' => __( 'Justified', 'woomentor' ),
                                    'icon' => 'fa fa-align-justify',
                                ],
                            ],
                            'default' => 'center',
                            'selectors' => [
                                '.htmega-alert-wrap-{{ID}}.alert' => 'text-align: {{VALUE}};',
                            ],
                        ]
                    );

                $this->end_controls_tab();
                
                // Notify Content Normal Style
                $this->start_controls_tab(
                    'close_button_style_tab',
                    [
                        'label' => __( 'Close Button', 'htmega-addons' ),
                    ]
                );
                    $this->add_control(
                        'close_button_color',
                        [
                            'label' => __( 'Color', 'htmega-addons' ),
                            'type' => Controls_Manager::COLOR,
                            'default' =>'#ffffff',
                            'selectors' => [
                                '.htmega-alert-wrap-{{ID}}.alert span.htmega-close' => 'color: {{VALUE}} !important',
                            ],
                        ]
                    );

                $this->end_controls_tab();

            $this->end_controls_tabs();
        $this->end_controls_section();

    }

    protected function render( $instance = [] ) {

        $settings   = $this->get_settings_for_display();

        $id = $this->get_id();
        $notify_options = array();
        $notify_options['notify_btn_class'] = '.show-info-'.$id;
        $notify_options['notify_class'] = '.htmega-notify-alert-'.$id;
        $notify_options['type'] = $settings['notification_type'];
        $notify_options['notifymessage'] = $settings['notification_content'];
        $notify_options['offset'] = absint( $settings['notification_offset'] );
        $notify_options['delay'] = absint( $settings['notification_delay'] );
        $notify_options['enter'] = $settings['notification_enter_animation'];
        $notify_options['exit'] = $settings['notification_exit_animation'];
        $notify_options['width'] = $settings['notification_width'];
        $notify_options['icon'] = HTMega_Icon_manager::render_icon( $settings['notification_icon'], [ 'aria-hidden' => 'true' ] );
        $notify_options['wrapid'] = $id;

        if( $settings['notification_element_container'] == 'body' ){
            $notify_options['notify_class'] = 'body';
        }

        if( $settings['notification_position'] == 'topleft' ){
            $notify_options['from'] = 'top';
            $notify_options['align'] = 'left';
        }elseif( $settings['notification_position'] == 'topright' ){
            $notify_options['from'] = 'top';
            $notify_options['align'] = 'right';
        }elseif( $settings['notification_position'] == 'bottomleft' ){
            $notify_options['from'] = 'bottom';
            $notify_options['align'] = 'left';
        }elseif( $settings['notification_position'] == 'bottomright' ){
            $notify_options['from'] = 'bottom';
            $notify_options['align'] = 'right';
        }elseif( $settings['notification_position'] == 'bottomcenter' ){
            $notify_options['from'] = 'bottom';
            $notify_options['align'] = 'center';
        }else{
            $notify_options['from'] = 'top';
            $notify_options['align'] = 'center';
        }

        $this->add_render_attribute( 'notify_attr', 'class', 'htmega_notify_area' );
        $this->add_render_attribute( 'notify_attr', 'data-notifyopt', wp_json_encode( $notify_options ) );

        ?>
            <div <?php echo $this->get_render_attribute_string('notify_attr'); ?> >

                <div class="htmega-notify-alert-<?php echo $id;?>">
                    <button class="htmega-notify-button show-info-<?php echo $id;?>"><?php echo esc_html__( $settings['notification_button_txt'],'htmega-addons' );?></button>
                </div>

            </div>

        <?php

    }

}

