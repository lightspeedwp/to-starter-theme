module.exports = {
	extends: ['@wordpress/stylelint-config'],
	rules: {
		// Theme-specific overrides
		'selector-class-pattern': [
			'^[a-z]([a-z0-9-]+)?(__([a-z0-9]+-?)+)?(--([a-z0-9]+-?)+){0,2}$|^(to-theme|wp-block|has-|is-|alignwide|alignfull)-[a-z0-9-]+$',
			{
				message: 'Expected class selector to follow BEM naming or use to-theme/wp-block prefix',
			},
		],
		'custom-property-pattern': [
			'^(to-theme|wp)-[a-z0-9-]+$',
			{
				message: 'Expected custom property to use to-theme or wp prefix',
			},
		],
		// Allow vendor prefixes for better browser support
		'property-no-vendor-prefix': null,
		'value-no-vendor-prefix': null,
		// More flexible color values for WordPress themes
		'color-named': null,
		// Allow empty stylesheets (common in theme development)
		'no-empty-source': null,
		// Allow @use and @forward for modern SCSS
		'at-rule-no-unknown': [
			true,
			{
				ignoreAtRules: ['use', 'forward', 'include', 'mixin', 'if', 'else', 'each', 'for', 'while']
			}
		],
	},
	ignoreFiles: [
		'public/**/*.css',
		'node_modules/**/*.css',
		'vendor/**/*.css',
		'**/*.min.css',
	],
};
