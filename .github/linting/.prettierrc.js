module.exports = {
	tabWidth: 4,
	useTabs: true,
	endOfLine: 'lf',
	printWidth: 80,
	singleQuote: true,
	trailingComma: 'es5',
	bracketSpacing: true,
	arrowParens: 'always',
	// WordPress specific overrides
	overrides: [
		{
			files: ['*.js', '*.ts', '*.jsx', '*.tsx'],
			options: {
				useTabs: false,
				tabWidth: 2,
			},
		},
		{
			files: ['*.json'],
			options: {
				useTabs: false,
				tabWidth: 2,
			},
		},
		{
			files: ['*.yml', '*.yaml'],
			options: {
				useTabs: false,
				tabWidth: 2,
			},
		},
	],
};
