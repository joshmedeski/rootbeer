<?php
/**
 * Reactor Shortcodes Config
 *
 * @package Reactor
 * @author Anthony Wilhelm (@awshout / anthonywilhelm.com)
 * @author ThemeZilla (@themezilla / themezilla.com)
 * @since 1.0.0
 * @license GNU General Public License v2 or later (http://www.gnu.org/licenses/gpl-2.0.html)
 */

/**
 * Alert Config
 */
$reactor_shortcodes['alert'] = array(
	'no_preview' => true,
	'params'     => array(
		'content' => array(
			'std'   => 'Alert Text',
			'type'  => 'text',
			'label' => __('Alert\'s Text', 'textdomain'),
			'desc'  => __('Add the alert\'s text', 'textdomain'),
		),
		'type' => array(
			'type'    => 'select',
			'label'   => __('Alert Style', 'textdomain'),
			'desc'    => __('Select the alert\'s style, ie the alert\'s colour', 'textdomain'),
			'options' => array(
				''          => 'Standard',
				'success'   => 'Success',
				'alert'     => 'Alert',
				'secondary' => 'Secondary'
			)
		),
		'shape' => array(
			'type'    => 'select',
			'label'   => __('Alert Type', 'textdomain'),
			'desc'    => __('Select the alert\'s type', 'textdomain'),
			'options' => array(
				''       => 'Square',
				'radius' => 'Radius',
				'round'  => 'Round'
			)
		),
		'close' => array(
			'type'    => 'select',
			'label'   => __('Closing X', 'textdomain'),
			'desc'    => __('Display a X on the alert to close it', 'textdomain'),
			'options' => array(
				'true'  => 'True',
				'false' => 'False'
			)
		)
	),
	'shortcode' => '[alert shape="{{shape}}" type="{{type}}" close="{{close}}"] {{content}} [/alert]',
	'popup_title' => __('Insert Alert Shortcode', 'textdomain')
);

/**
 * Button Config
 */
$reactor_shortcodes['button'] = array(
	'no_preview' => false,
	'params'     => array(
		'content' => array(
			'std'   => 'Button Text',
			'type'  => 'text',
			'label' => __('Button\'s Text', 'textdomain'),
			'desc'  => __('Add the button\'s text', 'textdomain'),
		),
		'url' => array(
			'std'   => '',
			'type'  => 'text',
			'label' => __('Button URL', 'textdomain'),
			'desc'  => __('Add the button\'s url eg http://example.com', 'textdomain')
		),
		'type' => array(
			'type'    => 'select',
			'label'   => __('Button Style', 'textdomain'),
			'desc'    => __('Select the button\'s style, ie the button\'s colour', 'textdomain'),
			'options' => array(
				''          => 'Standard',
				'success'   => 'Success',
				'alert'     => 'Alert',
				'secondary' => 'Secondary'
			)
		),
		'size' => array(
			'type'    => 'select',
			'label'   => __('Button Size', 'textdomain'),
			'desc'    => __('Select the button\'s size', 'textdomain'),
			'options' => array(
				''       => 'Medium',
				'tiny'   => 'Tiny',
				'small'  => 'Small',
				'large'  => 'Large'
			)
		),
		'shape' => array(
			'type'    => 'select',
			'label'   => __('Button Type', 'textdomain'),
			'desc'    => __('Select the button\'s type', 'textdomain'),
			'options' => array(
				''       => 'Square',
				'radius' => 'Radius',
				'round'  => 'Round'
			)
		),
		'expand' => array(
			'type'    => 'select',
			'label'   => __('Expand', 'textdomain'),
			'desc'    => __('Expands the button to full width', 'textdomain'),
			'options' => array(
				'false' => 'False',
				'true'  => 'True'
			)
		),
		'disabled' => array(
			'type'    => 'select',
			'label'   => __('Disabled', 'textdomain'),
			'desc'    => __('Button will be in a disabled state', 'textdomain'),
			'options' => array(
				'false' => 'False',
				'true'  => 'True'
			)
		)
	),
	'shortcode' => '[button url="{{url}}" shape="{{shape}}" size="{{size}}" type="{{type}}" expand="{{expand}}" disabled="{{disabled}}"] {{content}} [/button]',
	'popup_title' => __('Insert Button Shortcode', 'textdomain')
);

/**
 * Columns Config
 */
$reactor_shortcodes['columns'] = array(
	'params' => array(),
	'shortcode' => ' {{child_shortcode}} ', // as there is no wrapper shortcode
	'popup_title' => __('Insert Columns Shortcode', 'textdomain'),
	'no_preview' => true,
	
	'child_shortcode' => array(
		'params' => array(
			'first_last' => array(
				'type'    => 'select',
				'label'   => __('First or Last', 'textdomain'),
				'desc'    => __('Select if this column is the first or last in the row', 'textdomain'),
				'options' => array(
					''      => '',
					'first' => 'First',
					'last'  => 'Last'
				)
			),
			'large' => array(
				'type'    => 'select',
				'label'   => __('Large Grid', 'textdomain'),
				'desc'    => __('Select the number of columns for the large screen grid', 'textdomain'),
				'options' => array(
					'12' => '12',
					'11' => '11',
					'10' => '10',
					'9'  => '9',
					'8'  => '8',
					'7'  => '7',
					'6'  => '6',
					'5'  => '5',
					'4'  => '4',
					'3'  => '3',
					'2'  => '2',
					'1'  => '1',
				)
			),
			'small' => array(
				'type'    => 'select',
				'label'   => __('Small Grid', 'textdomain'),
				'desc'    => __('Select the number of columns for the small screen grid', 'textdomain'),
				'options' => array(
					'12' => '12',
					'11' => '11',
					'10' => '10',
					'9'  => '9',
					'8'  => '8',
					'7'  => '7',
					'6'  => '6',
					'5'  => '5',
					'4'  => '4',
					'3'  => '3',
					'2'  => '2',
					'1'  => '1',
				)
			),
			'content' => array(
				'std' => '',
				'type' => 'textarea',
				'label' => __('Column Content', 'textdomain'),
				'desc' => __('Add the column content.', 'textdomain'),
			)
		),
		'shortcode' => '[column large="{{large}}" small="{{small}}" first_last="{{first_last}}"] {{content}} [/column] ',
		'clone_button' => __('Add Column', 'textdomain')
	)
);

/**
 * Flex Video Config
 */
$reactor_shortcodes['flex_video'] = array(
	'no_preview' => true,
	'params'     => array(
		'widescreen'   => array(
			'type'  => 'select',
			'label' => __('Widescreen', 'textdomain'),
			'desc'  => __('Select if the video widescreen', 'textdomain'),
			'options' => array(
				'true'  => 'True',
				'false' => 'False'
			)
		),
		'vimeo'   => array(
			'type'  => 'select',
			'label' => __('Vimeo', 'textdomain'),
			'desc'  => __('Select if the video is vimeo to remove padding', 'textdomain'),
			'options' => array(
				'false' => 'False',
				'true'  => 'True'
			)
		),
		'content' => array(
			'std'   => '',
			'type'  => 'textarea',
			'label' => __('Video Embed Code', 'textdomain'),
			'desc'  => __('Enter the code to embed the video', 'textdomain'),
		)
	),
	'shortcode' => '[flex_video widescreen="{{widescreen}}" vimeo="{{vimeo}}"] {{content}} [/flex_video]',
	'popup_title' => __('Insert Flex Video Shortcode', 'textdomain')
);

/**
 * Glyph Icon Config
 */
$reactor_shortcodes['glyph_icon'] = array(
	'no_preview' => true,
	'params'     => array(
		'type'   => array(
			'type'  => 'select',
			'label' => __('Icon Cateogry', 'textdomain'),
			'desc'  => __('Select the category for the icon', 'textdomain'),
			'options' => array(
				'general' => 'General', 
				'enclosed' => 'Enclosed',
				'social' => 'Social', 
				'accessible' => 'Accessible'
			)
		),
		'icon'   => array(
			'std'  => '',
			'type'  => 'text',
			'label' => __('Icon', 'textdomain'),
			'desc'  => __('Enter the name of the icon from http://zurb.com/playground/foundation-icons', 'textdomain')
		),
		'style'   => array(
			'std'  => '',
			'type'  => 'text',
			'label' => __('Styles', 'textdomain'),
			'desc'  => __('Enter any styles for the icon as inline CSS ( ie. color: #000; )', 'textdomain')
		),
		'content' => array(
			'std'   => '',
			'type'  => 'textarea',
			'label' => __('Text', 'textdomain'),
			'desc'  => __('Enter any text to be displayed with the icon', 'textdomain'),
		)
	),
	'shortcode' => '[glyph_icon type="{{type}}" icon="{{icon}}" style="{{style}}"] {{content}} [/glyph_icon]',
	'popup_title' => __('Insert Glyph Icon Shortcode', 'textdomain')
);

/**
 * Label Config
 */
$reactor_shortcodes['label'] = array(
	'no_preview'  => true,
	'params'      => array(
		'content' => array(
			'std'   => 'Label Text',
			'type'  => 'text',
			'label' => __('Alert\'s Text', 'textdomain'),
			'desc'  => __('Add the label\'s text', 'textdomain'),
		),
		'type' => array(
			'type'    => 'select',
			'label'   => __('Label Style', 'textdomain'),
			'desc'    => __('Select the label\'s style, ie the label\'s colour', 'textdomain'),
			'options' => array(
				''          => 'Standard',
				'success'   => 'Success',
				'alert'     => 'Alert',
				'secondary' => 'Secondary'
			)
		),
		'shape' => array(
			'type'    => 'select',
			'label'   => __('Label Type', 'textdomain'),
			'desc'    => __('Select the label\'s type', 'textdomain'),
			'options' => array(
				''       => 'Square',
				'radius' => 'Radius',
				'round'  => 'Round'
			)
		)
	),
	'shortcode' => '[label shape="{{shape}}" type="{{type}}"] {{content}} [/label]',
	'popup_title' => __('Insert Label Shortcode', 'textdomain')
);

/**
 * Panel Config
 */
$reactor_shortcodes['panel'] = array(
	'no_preview' => true,
	'params'     => array(
		'callout'   => array(
			'type'  => 'select',
			'label' => __('Callout Style', 'textdomain'),
			'desc'  => __('Callout style is a brighter panel', 'textdomain'),
			'options' => array(
				'false' => 'False',
				'true'  => 'True'
			)
		),
		'shape' => array(
			'type'  => 'select',
			'label' => __('Label Type', 'textdomain'),
			'desc'  => __('Select the button\'s type', 'textdomain'),
			'options' => array(
				''       => 'Square',
				'radius' => 'Radius',
			)
		),
		'content' => array(
			'std'   => 'Panel Text',
			'type'  => 'textarea',
			'label' => __('Panel\'s Text', 'textdomain'),
			'desc'  => __('Add the panel\'s text', 'textdomain'),
		)
	),
	'shortcode' => '[panel shape="{{shape}}" callout="{{callout}}"] {{content}} [/panel]',
	'popup_title' => __('Insert Panel Shortcode', 'textdomain')
);

/**
 * Price Table Config
 */
$reactor_shortcodes['price_table'] = array(
    'params' => array(
        'title' => array(
            'std' => 'Title',
            'type' => 'text',
            'label' => __('Title', 'textdomain'),
            'desc' => __('Title of the price table', 'textdomain'),
        ),
        'price' => array(
            'std' => '0.00',
            'type' => 'text',
            'label' => __('Price', 'textdomain'),
            'desc' => __('Price for the price table', 'textdomain'),
        ),
        'desc' => array(
			'std' => '',
            'type' => 'text',
            'label' => __('Description', 'textdomain'),
            'desc' => __('Description of the price table', 'textdomain'),
        ),
        'button' => array(
            'std' => 'Buy Now',
            'type' => 'text',
            'label' => __('Button Text', 'textdomain'),
            'desc' => __('Text for the button on the price table', 'textdomain'),
        ),
	),
    'no_preview' => true,
    'shortcode' => '[price_table title="{{title}}" price="{{price}}" desc="{{desc}}" button="{{button}}"] {{child_shortcode}}  [/price_table]',
    'popup_title' => __('Insert Price Table Shortcode', 'textdomain'),
    
    'child_shortcode' => array(
        'params' => array(
            'content' => array(
                'std' => '',
                'type' => 'textarea',
                'label' => __('Section Content', 'textdomain'),
                'desc' => __('Add the tabs content', 'textdomain')
            )
        ),
        'shortcode' => '[pt_item] {{content}} [/pt_item]',
        'clone_button' => __('Add Price Table Item', 'textdomain')
    )
);

/**
 * Progress Bar Config
 */
$reactor_shortcodes['progress_bar'] = array(
	'no_preview' => true,
	'params'     => array(
		'type' => array(
			'type'    => 'select',
			'label'   => __('Progress Bar Style', 'textdomain'),
			'desc'    => __('Select the progress bar\'s style, ie the progress bar\'s colour', 'textdomain'),
			'options' => array(
				''          => 'Standard',
				'success'   => 'Success',
				'alert'     => 'Alert',
				'secondary' => 'Secondary'
			)
		),
		'shape' => array(
			'type'    => 'select',
			'label'   => __('Progress Bar Type', 'textdomain'),
			'desc'    => __('Select the progress bar\'s type', 'textdomain'),
			'options' => array(
				''       => 'Square',
				'radius' => 'Radius',
				'round'  => 'Round'
			)
		),
		'columns' => array(
			'type'    => 'select',
			'label'   => __('Progress Bar Length', 'textdomain'),
			'desc'    => __('Select the progress bar\'s length in columns', 'textdomain'),
			'options' => array(
				'12' => '12',
				'11' => '11',
				'10' => '10',
				'9'  => '9',
				'8'  => '8',
				'7'  => '7',
				'6'  => '6',
				'5'  => '5',
				'4'  => '4',
				'3'  => '3',
				'2'  => '2',
				'1'  => '1',
			)
		),
		'shape' => array(
			'std'   => '100%',
			'type'  => 'text',
			'label' => __('Progress Bar Fill', 'textdomain'),
			'desc'  => __('Enter the progress bar\'s fill amount', 'textdomain'),
		),
		'content' => array(
			'std'   => 'Progress Bar Text',
			'type'  => 'text',
			'label' => __('Progress Bar\'s Text', 'textdomain'),
			'desc'  => __('Add the progress bar\'s text', 'textdomain'),
		)
	),
	'shortcode' => '[progress_bar shape="{{shape}}" type="{{type}}"] {{content}} [/progress_bar]',
	'popup_title' => __('Insert Progress Bar Shortcode', 'textdomain')
);

/**
 * Reveal Modal Config
 */
$reactor_shortcodes['reveal_modal'] = array(
	'no_preview' => true,
	'params'     => array(
		'text' => array(
			'type'  => 'text',
			'label' => __('Open Modal Text', 'textdomain'),
			'desc'  => __('Add the link that will open the modal window', 'textdomain'),
			'std'   => 'Click here'
		),
		'size' => array(
			'type'    => 'select',
			'label'   => __('Modal Size', 'textdomain'),
			'desc'    => __('Select the size of the modal window', 'textdomain'),
			'options' => array(
				''       => 'Medium',
				'tiny'   => 'Tiny',
				'small'  => 'Small',
				'Large'  => 'Large',
				'xlarge' => 'X-Large'
			)
		),
		'button' => array(
			'type'  => 'select',
			'label' => __('Button Link', 'textdomain'),
			'desc'  => __('Select if the link that opens the modal is a button', 'textdomain'),
			'options' => array(
				'false' => 'False',
				'true'  => 'True'
			)
		),
		'content' => array(
			'std'   => 'Content',
			'type'  => 'textarea',
			'label' => __('Modal Content', 'textdomain'),
			'desc'  => __('Add the content for the modal. Will accept HTML', 'textdomain'),
		),
		
	),
	'shortcode' => '[reveal_modal text="{{text}}" size="{{size}}" button="{{button}}"] {{content}} [/reveal_modal]',
	'popup_title' => __('Insert Reveal Modal Shortcode', 'textdomain')
);

/**
 * Sections Config
 */
$reactor_shortcodes['sections'] = array(
    'params' => array(
		'type' => array(
			'type'    => 'select',
			'label'   => __('Sections Type', 'textdomain'),
			'desc'    => __('Select the type of sections to use', 'textdomain'),
			'options' => array(
				'tabs'         => 'Tabs',
				'accordion'    => 'Accordion',
				'vertical-nav' => 'Vertical Nav'
			)
		),
	),
    'no_preview' => true,
    'shortcode' => '[section_group type="{{type}}"] {{child_shortcode}}  [/section_group]',
    'popup_title' => __('Insert Sections Shortcode', 'textdomain'),
    
    'child_shortcode' => array(
        'params' => array(
            'title' => array(
                'std' => 'Title',
                'type' => 'text',
                'label' => __('Section Title', 'textdomain'),
                'desc' => __('Title of the section', 'textdomain'),
            ),
		'active' => array(
			'type'    => 'select',
			'label'   => __('Active', 'textdomain'),
			'desc'    => __('Select if this section is active on page load', 'textdomain'),
			'options' => array(
				'false' => 'False',
				'true'  => 'True'
			)
		),
            'content' => array(
                'std' => 'Tab Content',
                'type' => 'textarea',
                'label' => __('Section Content', 'textdomain'),
                'desc' => __('Add the tabs content', 'textdomain')
            )
        ),
        'shortcode' => '[section title="{{title}}"] {{content}} [/section]',
        'clone_button' => __('Add Section', 'textdomain')
    )
);

/**
 * Tooltip Config
 */
$reactor_shortcodes['tooltip'] = array(
	'no_preview' => true,
	'params' => array(
		'text' => array(
			'type'  => 'text',
			'label' => __('Tip Text', 'textdomain'),
			'desc'  => __('Add the text that will be in the tooltip', 'textdomain'),
			'std'   => 'Add tooltip text here'
		),
		'position' => array(
			'type'  => 'select',
			'label' => __('Tooltip Position', 'textdomain'),
			'desc'  => __('Select where the tooltip should be displayed', 'textdomain'),
			'options' => array(
				''      => 'Bottom',
				'top'   => 'Top',
				'right' => 'Right',
				'left'  => 'Left'
			)
		),
		'width' => array(
			'type'  => 'text',
			'label' => __('Tooltip Width', 'textdomain'),
			'desc'  => __('Add a specific width for the tip. Only a number.', 'textdomain'),
		),
		'content' => array(
			'std'   => 'Content',
			'type'  => 'text',
			'label' => __('Modal Content', 'textdomain'),
			'desc'  => __('Add the content for the modal. Will accept HTML', 'textdomain'),
		),
		
	),
	'shortcode' => '[tooltip text="{{text}}" position="{{position}}" width="{{width}}"] {{content}} [/tooltip]',
	'popup_title' => __('Insert a Tooltip Shortcode', 'textdomain')
);
