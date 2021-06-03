( function( blocks, editor, element ) {
	var el = element.createElement;

	blocks.registerBlockType( 'mcb/main-illustration', {
		title: 'Landing Page: Main Illustration', // The title of block in editor.
		icon: 'admin-comments', // The icon of block in editor.
		category: 'common', // The category of block in editor.
		attributes: {
            title: {
                type: 'string',
                default: 'CLAIM YOUR WINGS'
            },
            text: {
                type: 'string',
                default: 'More QR codes, more challenges to unlock! This new application will give you the opportunity to be a champion and reach high to win prizes and get to know our events.'
            },
            button: {
                type: 'string',
                default: 'DOWNLOAD NOW'
            }
        },
		edit: function( props ) {
            return (
                el( 'div', { className: props.className },
                    el(
                        editor.RichText,
                        {
                            tagName: 'div',
                            className: 'main-illustration-title',
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
                            className: 'main-illustration-text',
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
                            className: 'main-illustration-button',
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
                    el( editor.RichText.Content, {
                        tagName: 'h1',
                        className: 'main-illustration-title',
                        value: props.attributes.title,
                    } ),
                    el( editor.RichText.Content, {
                        tagName: 'p',
                        className: 'main-illustration-text',
                        value: props.attributes.text,
                    } ),
                    el ('div', { className: 'CTA'}, 
                        el('div', {className: 'design-element-1-line'}),
                        el('div', {className: 'design-element-1-square'}),
                        el('div', {className: 'design-element-1-four-squares'}),
                        el('div', {className: 'design-element-1-arrow'}),
                        el('a', {href: 'https://red-bull.herokuapp.com'}, 
                            el( 'button', { className: 'main-illustration-button' },
                                el( 'span', { className: 'main-illustration-button-text' },
                                    props.attributes.button
                                )   
                            ),
                        ),
                        el('div', {className: 'design-element-2-line'}),
                        el('div', {className: 'design-element-2-square'}),
                        el('div', {className: 'design-element-2-four-squares'}),
                        el('div', {className: 'design-element-2-arrow'}),
                    )
                )
            );
        },
	} );
} )( window.wp.blocks, window.wp.editor, window.wp.element );