
( function( blocks, editor, element ) {
	var el = element.createElement;

	blocks.registerBlockType( 'mcb/landing-page-block-1', {
		title: 'Landing Page: Custom Block 1', // The title of block in editor.
		icon: 'admin-comments', // The icon of block in editor.
		category: 'common', // The category of block in editor.
		attributes: {
            backgroundtext: {
                type: 'string',
                default: 'SEEK THE THRILL'
            },
            title: {
                type: 'string',
                default: 'TITLE'
            },
            text: {
                type: 'string',
                default: 'Your amazing text here'
            },
            button: {
                type: 'string',
                default: 'BUTTON CAPTION'
            },
            mediaId: {
                type: 'number',
                default: 0
            },
            mediaUrl: {
                type: 'string',
                default: ''
            },
        },
		edit: function( props ) {
            return (
                el( 'div', { className: props.className },
                    el(
                        editor.RichText,
                        {
                            tagName: 'div',
                            className: 'block-1-background-text',
                            value: props.attributes.backgroundtext,
                            onChange: function( content ) {
                                props.setAttributes( { backgroundtext: content } );
                            }
                        }
                    ),
                    el(
                        editor.RichText,
                        {
                            tagName: 'div',
                            className: 'block-1-title',
                            value: props.attributes.title,
                            onChange: function( content ) {
                                props.setAttributes( { title: content } );
                            }
                        }
                    ),
                    el(
                        editor.RichText,
                        {
                            tagName: 'div',
                            className: 'block-1-text',
                            value: props.attributes.text,
                            onChange: function( content ) {
                                props.setAttributes( { text: content } );
                            }
                        }
                    ),
                    el(
                        editor.RichText,
                        {
                            tagName: 'span',
                            className: 'block-1-button',
                            value: props.attributes.button,
                            onChange: function( content ) {
                                props.setAttributes( { button: content } );
                            }
                        }
                    ),
                )
            );
        },
		save: function( props ) {
            return (
                el( 'div', { className: props.className },
                
                    el ('div', {className: 'block-1-side-elements'},
                        el('div', {className: 'side-element-line'}),
                        el('div', {className: 'side-element-box-1'}),
                        el('div', {className: 'side-element-box-2'}),
                        el('div', {className: 'side-element-arrow-1'}),
                        el('div', {className: 'side-element-arrow-2'}),
                    ),
                    el ('div', {className: 'block-1-main-elements'},
                        el('div', {className: 'main-element-square-1'}),
                        el('div', {className: 'main-element-square-2'}),
                        el('div', {className: 'main-element-square-3'}),
                        el('div', {className: 'main-element-square-4'}),
                    ),
                    el( editor.RichText.Content, {
                        tagName: 'span',
                        className: 'block-1-background-text',
                        value: props.attributes.backgroundtext,
                    } ),
                    el( editor.RichText.Content, {
                        tagName: 'h1',
                        className: 'block-1-title',
                        value: props.attributes.title,
                    } ),
                    el( editor.RichText.Content, {
                        tagName: 'p',
                        className: 'block-1-text',
                        value: props.attributes.text,
                    } ),
                    el ('div', { className: 'block-1-CTA'}, 
                        el('a', {href: 'https://red-bull.herokuapp.com'}, 
                            el( 'button', { className: 'block-1-button' },
                                el( 'span', { className: 'block-1-button-text' },
                                    props.attributes.button
                                )   
                            ),
                        ),
                    )
                )
            );
        },
	} );
} )( window.wp.blocks, window.wp.editor, window.wp.element );